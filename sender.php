<?php
// указываем, что нам нужен минимум от WP
define('WP_USE_THEMES', false);

// подгружаем среду WordPress
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );

$chatid = "152670285";
$email = 'fadnier@sochidrive.org';
$telegram_bot_token = '558798925:AAGaLxid0jr3uzu0Rrkn_7dMSXqgV0j4BZw';
$message_template = '';

get_bd_param();

if(isset($_POST['name']) and isset($_POST['phone'])) {
	$additional = "";
	$files = [];


	$message = "Имя: ".$_POST['name'].PHP_EOL
	           ."\r\nТелефон: ".$_POST['phone'].PHP_EOL
	           .(isset($_POST['comment'])?"\r\nКоментарий: ".$_POST['comment']:"");

	if($message_template != "") {
		$message_template = str_replace("\n", "\r\n", $message_template);
		$message_template = preg_replace("/{name}/",$_POST['name'],$message_template);
		$message_template = preg_replace("/{phone}/",$_POST['phone'],$message_template);

		if(isset($_POST['comment'])) {
			$message_template = preg_replace("/{comment}/",$_POST['comment'],$message_template);
		}else {
			$message_template = preg_replace("/{comment}/","",$message_template);
		}
		$message = $message_template;
	}

	if(isset($_POST['files'])) {
		$files = json_decode(stripslashes(urldecode($_POST['files'])));
	}

	if(isset($_POST['files'])) {
		send_message($chatid,$email,$message,$files);
	} else {
		send_message($chatid,$email,$message,0);
	}
}

function get_bd_param() {
	global $wpdb;
	$result = $wpdb->get_results( "SELECT * FROM $wpdb->options WHERE `option_name`='sender_options'" , 'OBJECT' );
	if( ! $result ) {
		die("Нет данных");
	} else {
		$param = unserialize($result[0]->option_value);
		global $telegram_bot_token,$chatid,$email,$message_template;
		if(isset($param['telegram_bot_token']))
			$telegram_bot_token = $param['telegram_bot_token'];
		if(isset($param['telegram_bot_chat_id'])){
			$chatid = $param['telegram_bot_chat_id'];
		}
		if(isset($param['email_sender'])) {
			$email = $param['email_sender'];
		}
		if(isset($param['telegram_bot_message_template']))
			$message_template = $param['telegram_bot_message_template'];
	}
}

function ins_bd_message($message,$ip,$date,$office,$itog) {
	$link = mysqli_connect("localhost", "inmnghost_rskene", "R&CIjD3t", "inmnghost_rskene");
	$sql = 'INSERT INTO wp_sender_log(message,ip,date,office,itog) VALUES("'.$message.'",'.$ip.',"'.$date.'","'.$office.'",'.$itog.') ';
	$result = mysqli_query($link, $sql);
	if ($result == false) {

	} else {
		$link->close();
	}
}

function send_message($chatid, $email, $message, $files=0) {
	if($files==0) {
		$email_answ = send_email_file($email, $message,[]);
		$telegram_anw = 1;//send_telegram($chatid, $message);
	} else {
		$email_answ = send_email_file($email,$message,$files);
		$telegram_anw = 1;//telegram_files($chatid, $message, $files);
	}

	if($email_answ == 1 and $telegram_anw == 1)
		echo "ok";
	else
		echo "error".$email_answ.$telegram_anw;

	//ins_bd_message($message,ip2long($_SERVER['REMOTE_ADDR']),date("Y-m-d H:i:s"),$email,(int)($email_answ.$telegram_anw));
}

function send_email($email, $message) {
	$email_answ = send_email_simple($email, $message);
	return $email_answ;
}

function send_email_simple($email,$message) {
	$to = $email;
	$subject = "Новое обращение с сайта";
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	return mail($to,$subject,$message,$headers);
}

function send_email_file($email_to,$message,$files) {
	$attachments = [];
	foreach ($files as $file) {
		$attachments[] = $file->src;
	}
	$headers = '';

	return wp_mail($email_to, 'Новое обращение с сайта', $message, $headers, $attachments);
}

function send_telegram($chat_id, $msg) {
	global $telegram_bot_token;
	$url = 'https://api.telegram.org/bot'.$telegram_bot_token.'/sendMessage';

	$post_fields = array(
		'chat_id'    => $chat_id,
		'parse_mode' => 'HTML',
		'text'       => strip_tags($msg, '<b><i><pre>')
	);

	//echo $url;

	$options = array(
		'http' => array(
			'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
			'method'  => 'POST',
			'content' => http_build_query($post_fields),
		),
	);

	$context  = stream_context_create($options);
	$result = file_get_contents($url, false, $context);
	$answ = json_decode($result);

	if(isset($answ->ok))
		return 1;
	else
		return 0;
}

function telegram_files($chat_id, $msg, $files = 0) {
	$answ = send_telegram($chat_id, $msg);
	if($files != 0) {
		$msg .= "Приложеные файлы:";
		foreach ($files as $file) {
			$caption = "Приложение:".$file->name;
			send_telegram_file($chat_id,$caption,$file->src);
			$msg .= " ".$file->name;
		}
	}
	return $answ;
}


function send_telegram_file($chat_id, $caption, $file) {
	global $telegram_bot_token;
	$url = 'https://api.telegram.org/bot'.$telegram_bot_token.'/sendDocument?chat_id='.$chat_id;

	// Create CURL object
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);

	// Create CURLFile
	$finfo = finfo_file(finfo_open(FILEINFO_MIME_TYPE), $file);
	$cFile = new CURLFile($file, $finfo);

	// Add CURLFile to CURL request
	curl_setopt($ch, CURLOPT_POSTFIELDS, [
		"document" => $cFile,
		'caption' => strip_tags($caption, '<b><i><pre>'),
	]);

	// Call
	$result = curl_exec($ch);

	// Show result and close curl
	$answ = json_decode($result);
	curl_close($ch);

	if(isset($answ->ok))
		return 1;
	else
		return 0;
}


?>

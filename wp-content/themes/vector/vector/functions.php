<?php
add_action('after_setup_theme', function () {
   register_nav_menus([
       'header-location' => 'Верхнее меню',
       'footer-location' => 'Нижнее меню - Услуги',
       'footer-location2' => 'Нижнее меню - Инфо'
   ]);
});

class WPSE_78121_Sublevel_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='sub'><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div>\n";
    }
}

add_filter( 'wp_sitemaps_add_provider', 'ats_wp_too_remove_sitemap_provider', 20, 2 );
function ats_wp_too_remove_sitemap_provider( $provider, $name ) {
    // исключаем архивы юзеров-пользователей
    if ( in_array( $name, ['users'] ) ) //
        return false;
    return $provider;
}
add_filter( 'wp_sitemaps_add_provider', 'ats_wp_remove_sitemap_provider', 20, 2 );
function ats_wp_remove_sitemap_provider( $provider, $name ) {
    // исключаем архивы
    if ( in_array( $name, ['taxonomies'] ) ) // если таксономия
        return false;
    return $provider;
}
function sender_options() {
	add_options_page( 'Параметры скрипта отправки', 'Параметры скрипта отправки', 'manage_options', 'sender-options.php', 'sender_options_page');
}
add_action('admin_menu', 'sender_options');

function sender_options_page(){
	?><div class="wrap">
    <h2>Настройка скрипта отправки</h2>
    <form method="post" enctype="multipart/form-data" action="options.php">
		<?php
		settings_fields('sender_options');
		do_settings_sections('sender-options.php');
		?>
        <p class="submit">
            <input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
        </p>
    </form>
    </div><?php
}

function sender_option_settings() {
	register_setting( 'sender_options', 'sender_options', 'sender_validate_settings' );

	add_settings_section( 'theme_section_1', 'Поля настройки', '', 'sender-options.php' );

	$theme_field_params = array(
		'type'      => 'textarea',
		'id'        => 'telegram_bot_message_template',
		'desc'      => 'Шаблон сообщения'
	);
	add_settings_field( 'telegram_bot_message_template', 'Шаблон сообщения', 'sender_option_display_settings', 'sender-options.php', 'theme_section_1', $theme_field_params );

	$theme_field_params = array(
		'type'      => 'text',
		'id'        => 'telegram_bot_token',
		'desc'      => 'Токен телеграм бота'
	);
	add_settings_field( 'telegram_bot_token', 'Токен телеграм бота', 'sender_option_display_settings', 'sender-options.php', 'theme_section_1', $theme_field_params );

	$theme_field_params = array(
		'type'      => 'text',
		'id'        => 'telegram_bot_chat_id',
		'desc'      => 'Идентификатор чата telegram'
	);
	add_settings_field( 'telegram_bot_chat_id', 'Идентификатор чата telegram', 'sender_option_display_settings', 'sender-options.php', 'theme_section_1', $theme_field_params );

	$theme_field_params = array(
		'type'      => 'text',
		'id'        => 'email_sender',
		'desc'      => 'Email куда слать(по умолчанию)'
	);
	add_settings_field( 'email_sender', 'Email куда слать(по умолчанию)', 'sender_option_display_settings', 'sender-options.php', 'theme_section_1', $theme_field_params );
}
add_action( 'admin_init', 'sender_option_settings' );

function sender_option_display_settings($args) {
	extract( $args );

	$option_name = 'sender_options';

	$o = get_option( $option_name );

	switch ( $type ) {
		case 'textarea':
			$o[$id] = esc_attr(stripslashes($o[$id]) );
			echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$o[$id]</textarea>";
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
			break;
		case 'text':
			$o[$id] = esc_attr(stripslashes($o[$id]) );
			echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
			break;
	}
}

function sender_validate_settings($input) {
	foreach($input as $k => $v) {
		$valid_input[$k] = trim($v);
	}
	return $valid_input;
}

function contact_options() {
	add_options_page( 'Контакты', 'Контакты', 'manage_options', 'contact-options.php', 'contact_options_page');
}
add_action('admin_menu', 'contact_options');

function contact_options_page(){
	?><div class="wrap">
	<h2>Контакты</h2>
	<form method="post" enctype="multipart/form-data" action="options.php">
		<?php
		settings_fields('contact_options');
		do_settings_sections('contact-options.php');
		?>
		<p class="submit">
			<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
		</p>
	</form>
	</div><?php
}

function contact_option_settings() {
	register_setting( 'contact_options', 'contact_options', 'contact_validate_settings' );

	add_settings_section( 'theme_section_1', 'Поля настройки', '', 'contact-options.php' );

	$theme_field_params = array(
		'type'      => 'text',
		'id'        => 'gplay',
		'desc'      => 'Google Play'
	);
	add_settings_field( 'gplay', 'Google Play', 'contact_option_display_settings', 'contact-options.php', 'theme_section_1', $theme_field_params );

	$theme_field_params = array(
		'type'      => 'text',
		'id'        => 'appstore',
		'desc'      => 'App Store'
	);
	add_settings_field( 'appstore', 'Google Play', 'contact_option_display_settings', 'contact-options.php', 'theme_section_1', $theme_field_params );


}
add_action( 'admin_init', 'contact_option_settings' );

function contact_option_display_settings($args) {
	extract( $args );

	$option_name = 'contact_options';

	$o = get_option( $option_name );

	switch ( $type ) {
		case 'textarea':
			$o[$id] = esc_attr(stripslashes($o[$id]) );
			echo "<textarea class='code large-text' cols='50' rows='10' type='text' id='$id' name='" . $option_name . "[$id]'>$o[$id]</textarea>";
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
			break;
		case 'text':
			$o[$id] = esc_attr(stripslashes($o[$id]) );
			echo "<input class='regular-text' type='text' id='$id' name='" . $option_name . "[$id]' value='$o[$id]' />";
			echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
			break;
	}
}

function contact_validate_settings($input) {
	foreach($input as $k => $v) {
		$valid_input[$k] = trim($v);

	}
	return $valid_input;
}

remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

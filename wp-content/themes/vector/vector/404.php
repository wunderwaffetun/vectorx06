<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php if(is_front_page()):?><?php bloginfo('name'); ?><? else:?><?php wp_title(''); ?><?php endif;?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/css/style.css?v=190520223">
    <link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/css/slick.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="<?= bloginfo('template_directory'); ?>/css/jquery.custom-scroll.css" rel="stylesheet">
    <script src="<?= bloginfo('template_directory'); ?>/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/slick.min.js"></script>
    <script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/jquery.custom-scroll.js"></script>
    <script src="<?= bloginfo('template_directory'); ?>/js/common.js"></script>
    <script src="<?= bloginfo('template_directory'); ?>/js/send.js"></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(87260862, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/87260862" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

</head>
<body class="_404">
	<header class="header inner flex">
        <div class="logo">
            <a href="/"><img src="<?= bloginfo('template_directory'); ?>/img/logo2.svg" alt="Logo"></a>
        </div>          
    </header>
  <div class="container">
    <div class="utility-page-content w-form">
      <img src="<?= bloginfo('template_directory'); ?>/img/404.svg" alt="404" class="_404-img">
      <div class="_404-content">Запрашиваемая страница не может быть найдена</div>
    </div>
    <div class="">
      <a href="/" class="link link-404">Вернуться на главную <span></span></a>
    </div>
  </div>
</body>
</html>
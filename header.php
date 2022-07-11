<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php wp_title(''); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/css/style.css?v=2022062704">
    <link rel="stylesheet" href="<?= bloginfo('template_directory'); ?>/css/slick.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="<?= bloginfo('template_directory'); ?>/css/jquery.custom-scroll.css" rel="stylesheet">
    <script src="<?= bloginfo('template_directory'); ?>/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/slick.min.js"></script>
    <script type="text/javascript" src="<?= bloginfo('template_directory'); ?>/js/jquery.custom-scroll.js"></script>
    <script src="<?= bloginfo('template_directory'); ?>/js/common.js?v=2022062702"></script>
    <script src="<?= bloginfo('template_directory'); ?>/js/send.js"></script>
    <script src="<?= bloginfo('template_directory'); ?>/js/rows-personal-broker.js"></script>
    <script src="<?= bloginfo('template_directory'); ?>/js/popup-animation.js"></script>
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
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php
		wp_body_open();
		?>
<nav class="menubg"></nav>
<nav class="mobile-menu">
    <?php
    if(has_nav_menu('header-location')) {

        wp_nav_menu( [
            'theme_location'  => '',
            'menu'            => 'Верхнее меню',
            'container'       => false,
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => 'menu',
            'menu_id'         => '',
            'echo'            => true,
            'fallback_cb'     => 'wp_page_menu',
            'before'          => '',
            'after'           => '',
            'link_before'     => '',
            'link_after'      => '',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'depth'           => 2,
            'walker'          => new WPSE_78121_Sublevel_Walker,
        ] );
    }
    ?>
	<ul>
		<li><a href="https://lk.vectorxbroker.ru/users/sign_in" class="cabinet-link">Личный кабинет</a></li>
	</ul>
	
</nav>
<?php if(is_front_page()):?>
<div class="index-first-block">
	<div class="video_back"></div>
    <video class="video"  autoplay="" muted="" playsinline >
        <source src="<?= bloginfo('template_directory'); ?>/video/screen 16_2.mp4" type="video/mp4" />
        <img src="<?= bloginfo('template_directory'); ?>/img/first-block-arrow.svg" class="block-arrow">
    </video>
    <header class="header flex">
        <div class="logo">
            <a href="/"><img src="<?= bloginfo('template_directory'); ?>/img/logo.svg"></a>
        </div>
        <?php
            if(has_nav_menu('header-location')) {

                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Верхнее меню',
                    'container'       => false,
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'menu',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 2,
                    'walker'          => new WPSE_78121_Sublevel_Walker,
                ] );
            }
            ?>

        <a href="https://lk.vectorxbroker.ru/users/sign_in" class="cabinet-link black-theme">Личный кабинет</a>
        <a class="menu-button"></a>
    </header>
    <div class="text flex">
        <div class="left-side">
            <h1 class="h1">Инвестируйте в верном направлении с лучшими экспертами</h1>
        </div>
        <div class="right-side">
            <p>Зарабатывайте на инвестициях, включая в свой портфель самые выгодные предложения рынка, выявленные нашими экспертами.</p>
            <button class = "button-popup" onclick="startPopupAnimation()"">Получить консультацию</button>

        </div>
    </div>

</div>
<?php else: ?>
    <header class="header inner flex">
        <div class="logo">
            <a href="/"><img src="<?= bloginfo('template_directory'); ?>/img/logo2.svg"></a>
        </div>
        <?php
        if(has_nav_menu('header-location')) {

            wp_nav_menu( [
                'theme_location'  => '',
                'menu'            => 'Верхнее меню',
                'container'       => false,
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth'           => 2,
                'walker'          => new WPSE_78121_Sublevel_Walker,
            ] );
        }
        ?>
        <a href="https://lk.vectorxbroker.ru/users/sign_in" class="cabinet-link">Личный кабинет</a>
        <a class="menu-button"></a>
    </header>
<?php endif;?>

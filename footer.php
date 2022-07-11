<style>
	.popup.popup-contact .form-success {
		width: 50%;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		padding: 188px 64px 64px 64px;
		height: 560px;
	}
	
	@media (max-width: 1278px) {
		.popup.popup-contact .form-success {
			width: 100%;
			padding: 85px;
			height: 341px;
			text-align: center;
		}
	}
	
	@media (max-width: 760px) {
		.popup.popup-contact .form-success {
			padding: 68px 30px;
		}
	}
	
	.popup.popup-contact .form-success-inner {
		margin: auto 0;
	}
	.popup.popup-contact .form-success .name {
		margin-bottom: 20px;
		font-size: 40px;
		line-height: 110%;
	}
	.popup.popup-contact .form-success .button {
		background: #fff;
		-webkit-border-radius: 6px;
		-moz-border-radius: 6px;
		border-radius: 6px;
		width: 239px;
		height: 56px;
		font-size: 16px;
		margin-top: 20px;
		border: 1px solid #9F6000;
		color: #9F6000;
	}
	.t-input-error {
		display:none;
		color: red;
		font-size: 13px;
		margin-bottom: 10px;
	}
	.form form.js-error-control-box .t-input-error {
		display: block;
	}
	.form form.js-error-control-box .js-errorbox {
		display: block;
	}
	.form form.js-error-control-box input[type='tel'] {
		border: 1px solid red!important;
		margin-bottom: 0;
	}
	
	.form form .js-errorbox {
		display: none;
		background: #f95d51;
		padding: 10px;
		text-align: center;
		margin-bottom: 20px;
	}
	.form form .js-errorbox p.p-errorbox {
		color: #fff;
		box-sizing: border-box;
		padding: 0 10px 0 10px;
		margin-bottom: 0;
	}
</style>
<div class="popup popup-contact">
    <div class="window">
        <a class="close" onclick="animationPopupClose()"></a>
        <div class="form flex">
            <div class="image"></div>
			<div id="sender-form1-success" class="form-success" style="display: none;">
				<div class="form-success-inner">
					<div class="name">Ваша заявка принята</div>
					<p>Спасибо! Свяжемся с вами в ближайшее время.</p>
					<button class="button" type="button" onclick="$('.popup').fadeOut()">Закрыть окно</button>
				</div>
                <p class="privacy-policy">
                    Нажимая на кнопку "Получить консультацию", вы даете согласие на обработку персональных данных в соответствии с <a href="/privacy-policy/">Политикой конфиденциальности</a>
                </p>
			</div>
            <form id="sender-form1">
                <div class="name">
                    Оставить свои контакты
                </div>
                <p class="answer-form-success" style="display: none">Успешно отправлено</p>
                <p class="answer-form-error" style="display: none">Ошибка отправки</p>
                <p>Поможем разобраться и принять правильное решение</p>
                <input type="text" id="form-name1" placeholder="Имя">
                <input type="tel" id="form-phone1" placeholder="+7 (xxx) xxx xxxx">
				<div class="t-input-error">Пожалуйста, заполните все обязательные поля</div>
				<div class="js-errorbox"> 
					<p class="p-errorbox">Пожалуйста, заполните все обязательные поля</p>  
				</div>
                <button class="button" type="submit">Получить консультацию</button>
				<p class="privacy-policy">
					Нажимая на кнопку "Получить консультацию", вы даете согласие на обработку персональных данных в соответствии с <a href="/privacy-policy/" >Политикой конфиденциальности</a>
				</p>
            </form>
        </div>
    </div>
</div>
<footer class="footer">
    <div class="flex">
        <nav>
            <p>Услуги</p>
            <?php
            if(has_nav_menu('footer-location')) {

                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Нижнее меню',
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
                    'depth'           => 1,
                    'walker'          => '',
                ] );
            }
            ?>
        </nav>
        <nav class="other">
            <p>Инфо</p>
            <?php
            if(has_nav_menu('footer-location2')) {

                wp_nav_menu( [
                    'theme_location'  => '',
                    'menu'            => 'Нижнее меню2',
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
                    'depth'           => 1,
                    'walker'          => '',
                ] );
            }
            ?>
        </nav>
        <div class="contacts">
            <div class="name">
                Связаться с нами
            </div>
            <a href="tel:+7 495 847-07-07" class="phone">+7 495 847-07-07</a>
			<a href="tel:+7 495 419-00-99" class="phone">+7 495 419-00-99</a>
            <a href="mailto:bo@vexbroker.com" class="mail">bo@vexbroker.com</a>
            <p>Москва, Пресненская наб., д. 8, стр. 1, этаж 6, помещ. IN</p>
            <a href="https://t.me/vectorxbroker" class="telegram"></a>
			<a href="https://zen.yandex.ru/id/61f7e846aa7e4b2b61fdad92" class="dzen"></a>
        </div>
    </div>
    <div class="flex">
        <div class="copy">
            © Vector X Broker 2022
        </div>
        <a href="/privacy-policy/" class="politic">Политика конфиденциальности</a>
    </div>
    <div class="bottom-text">
        <p>© 2021 ООО «Вектор Икс». Все права защищены. Лицензии на осуществление: - брокерской деятельности – 045-10428-100000, выдана ФСФР России 31.07.2007 г. без ограничения срока действия; - дилерской деятельности – 045-10434-010000, выдана ФСФР России 31.07.2007 г. без ограничения срока действия; - деятельности по управлению ценными бумагами – 045-10439-001000, выдана ФСФР России 31.07.2007 г., депозитарной деятельности - 045-14139-000100, выдана ЦБ РФ 22.06.2022 г., без ограничения срока действия.</p>
        <p>Информация и мнения, представленные на данном ресурсе, подготовлены специалистами компании ООО «Вектор Икс».</p>
        <p>ООО «Вектор Икс» не гарантирует доход, на который рассчитывает инвестор. Представленная информация не является индивидуальной инвестиционной рекомендацией. <br/>Во всех случаях решение о выборе финансового инструмента либо совершении операции принимается инвестором самостоятельно.</p>
        <p>ООО «Вектор Икс», его руководство и сотрудники не несут ответственности за инвестиционное решение инвестора , за возможные убытки инвестора в случае совершения операций либо инвестирования в финансовые инструменты, упомянутые в представленной информации.</p>
		<p>
		<a href="https://www.horizont-broker.ru" class="politic" style="width: auto;">Предыдущая версия сайта</a>
		</p>
    </div>
    <script src="<?= bloginfo('template_directory'); ?>/js/jquery.maskedinput.min.js"></script>
    <script src="<?= bloginfo('template_directory'); ?>/js/touch-scroll.min.js"></script>
    <script>
		$(document).ready(function() {
            $("#form-phone1").mask("+7 (999) 999 9999");
            $("#form-phone2").mask("+7 (999) 999 9999");
			kostul();
			setTimeout(kostul, 500);
		});
    </script>
</footer>
</body>
</html>
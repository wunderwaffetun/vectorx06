<?php get_header(); ?>

    <div class="contacts-page flex">
        <div class="contacts">
            <div class="name">
				<h1 class="h1">Контакты</h1>
                
            </div>
            <span style="font-size: 24px;line-height: 130%;">Телефон общий:</span> <a href="tel:+74954190099" class="phone">+7 495 419-00-99</a>
			<span style="font-size: 24px;line-height: 130%;">Служба клиентской поддержки:</span> <a href="tel:+74958470707" class="phone">+7 495 847-07-07</a>
			
            <a href="mailto:bo@vexbroker.com" class="mail">bo@vexbroker.com</a>

            <div class="hours">
                График работы: Пн—Чт: 10:30—18:00, Пт: 10:30 —16:45
            </div>
            <div class="adress">
                123112, Россия, Москва г., муниципальный округ Пресненский вн.тер.г., Пресненская наб., д. 8, стр. 1, этаж 6, помещ. IN
            </div>
            <a href="https://yandex.ru/maps/?rtext=~55.747638, 37.539133" class="bottom-link">Проложить маршрут</a>
        </div>
        <div class="map">
            <img src="<?= bloginfo('template_directory'); ?>/img/map.png">
        </div>
    </div>
    <div class="bottom-page-form2">
        <p>Готовы ответить на любые вопросы, помочь разобраться и принять правильное решение</p>
		<div id="sender-form2-success" class="form-success" style="display: none;">
			<div class="form-success-inner">
				<p>Ваша заявка принята</p>
				<p class="fs-18px">Спасибо! Свяжемся с вами в ближайшее время.</p>
			</div>
		</div>
        <form id="sender-form2">
            <p class="answer-form-success" style="display: none">Успешно отправлено</p>
            <p class="answer-form-error" style="display: none">Ошибка отправки</p>
            <input type="text" id="form-name2" placeholder="Имя">
            <input type="tel" id="form-phone2" required minlength="7" placeholder="Телефон" title="+7 (xxx) xxx xxxx" pattern="\+7 \([0-9]{3}\) [0-9]{3} [0-9]{4}">
            <button class="button" type="submit">Получить консультацию</button>
			<p class="privacy-policy">
				Нажимая на кнопку "Получить консультацию", вы даете согласие на обработку персональных данных в соответствии с <a href="/privacy-policy/" >Политикой конфиденциальности</a>
			</p>
        </form>
        <video class="video"  autoplay="" muted="" playsinline >
            <source src="<?= bloginfo('template_directory'); ?>/video/9.mp4" type="video/mp4" />
            <img src="<?= bloginfo('template_directory'); ?>/img/bottom-page-form.png" class="image">
            <img src="<?= bloginfo('template_directory'); ?>/img/arrow9.svg" class="block-arrow">
        </video>
    </div>

<?php get_footer(); ?>
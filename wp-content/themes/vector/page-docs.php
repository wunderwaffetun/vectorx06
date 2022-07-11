<?php get_header(); ?>

<div class="docs-page">
    <div class="top-text">
        Документы и раскрытие информации
    </div>
    <div class="block-name">
		<h1 class="h1">
			Раскрытие информации	
		</h1>
    </div>
    <div class="content">
        <div class="pre-text">
            В соответствии с Указанием Банка России от 28.12.2015 № 3921-У «О составе, объеме, порядке и сроках раскрытия информации профессиональными участниками рынка ценных бумаг»
        </div>
        <div class="list">
            <div class="item">
                <div class="name">
                    Аудиторские заключения
                </div>
                <div class="text">
                    <ul>
	                    <?php $catquery = new WP_Query( 'cat=12&posts_per_page=100&order=ASC' );?>
	                    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                            <li>
	                            <?php the_content(); ?>
                            </li>
	                    <?php endwhile; ?>
	                    <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
            <div class="item">
                <div class="name">
                    Промежуточные бухгалтерские отчетности
                </div>
                <div class="text">
                    <ul>
	                    <?php $catquery = new WP_Query( 'cat=13&posts_per_page=100&order=ASC' );?>
	                    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                            <li>
			                    <?php the_content(); ?>
                            </li>
	                    <?php endwhile; ?>
	                    <?php wp_reset_postdata(); ?>
                    </ul>
                </div>
            </div>
        </div>
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
    <img src="<?= bloginfo('template_directory'); ?>/img/bottom-page-form.png" class="image">
    <img src="<?= bloginfo('template_directory'); ?>/img/arrow9.svg" class="block-arrow">
</div>

<?php get_footer(); ?>

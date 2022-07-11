<?php get_header(); ?>
<style>
    .list, .more_link {
        display: none;
    }
    .list_all {
        display: block;
    }
</style>
<div class="financial-indicators-page">
    <div class="block-name">
		<h1 class="h1">Финансовые показатели</h1>
    </div>
    <div class="content">
        <ul>
            <li><a href="#" class="active btn_fin btn_fin_all" onclick="switchAgeDoc('all')">Все файлы</a></li>
            <li><a href="#" class="btn_fin btn_fin_2022" onclick="switchAgeDoc('2022')">2022</a></li>
            <li><a href="#" class="btn_fin btn_fin_2021" onclick="switchAgeDoc('2021')">2021</a></li>
            <li><a href="#" class="btn_fin btn_fin_2020" onclick="switchAgeDoc('2020')">2020</a></li>
            <li><a href="#" class="btn_fin btn_fin_2019" onclick="switchAgeDoc('2019')">2019</a></li>
            <li><a href="#" class="btn_fin btn_fin_2018" onclick="switchAgeDoc('2018')">2018</a></li>
        </ul>
        <div class="list list_all">
	        <?php $catquery = new WP_Query( 'cat=14&posts_per_page=-1&orderby=date&order=DESC' ); $i=0;?>
	        <?php while($catquery->have_posts()) : $catquery->the_post(); $i++; ?>
                <div class="item <?=($i>8?"more_link":"");?>">
	                <?php the_content(); ?>
                </div>
	        <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>
        </div>
        <div class="list list_2022">
		    <?php $catquery = new WP_Query( 'cat=19&posts_per_page=-1&order=DESC' );?>
		    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="item">
				    <?php the_content(); ?>
                </div>
		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
        </div>
        <div class="list list_2021">
		    <?php $catquery = new WP_Query( 'cat=18&posts_per_page=-1&order=DESC' );?>
		    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="item">
				    <?php the_content(); ?>
                </div>
		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
        </div>
        <div class="list list_2020">
		    <?php $catquery = new WP_Query( 'cat=17&posts_per_page=-1&order=DESC' );?>
		    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="item">
				    <?php the_content(); ?>
                </div>
		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
        </div>
        <div class="list list_2019">
		    <?php $catquery = new WP_Query( 'cat=16&posts_per_page=-1&order=DESC' );?>
		    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="item">
				    <?php the_content(); ?>
                </div>
		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
        </div>
        <div class="list list_2018">
		    <?php $catquery = new WP_Query( 'cat=15&posts_per_page=-1&order=DESC' );?>
		    <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="item">
				    <?php the_content(); ?>
                </div>
		    <?php endwhile; ?>
		    <?php wp_reset_postdata(); ?>
        </div>
        <a onclick="switchMoreBtn();" class="bottom-link">Еще <?php echo get_category(14)->category_count - 8; ?> документов</a>
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

<script>
    function switchAgeDoc(age) {
        $(".list").fadeOut();
        $('.more_link').fadeOut();
        $(".list_"+age).fadeIn();
        $(".btn_fin").removeClass('active');
        $(".btn_fin_"+age).addClass('active');
        if(age === "all") $(".bottom-link").show(); else $(".bottom-link").hide();
    }
    function switchMoreBtn() {
        $('.more_link').fadeIn();
        $(".bottom-link").hide();
    }
</script>

<?php get_footer(); ?>

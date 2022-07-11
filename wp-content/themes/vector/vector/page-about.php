<?php get_header(); ?>
<script>
    $(function(){
        // $('#list').customScroll();
    });
</script>
<div class="about-page">
    <div class="top-block">
        <div class="top-text">
            Наша миссия
        </div>
        <h1 class="h1">В партнёрстве с нашими клиентами достигать наилучших результатов</h1>
		<p></p>
        <video preload="auto" playsinline autoplay loop muted>
            <source src="<?= bloginfo('template_directory'); ?>/video/about-back.mp4" type="video/mp4">
        </video>
    </div>
    <div class="years-block">
        <div class="flex">
            <div class="block-name">
                15 лет работаем в ваших интересах
            </div>
            <div class="top-text">
                Начиная как инвестиционная компания «Горизонт-Брокер», мы непрерывно росли, чтобы стать компанией с сильнейшей командой и экспертным подходом к инвестициям.
            </div>
        </div>

        <div style="position: relative">
            <div class="custom-scroll_bar-x" style="width: 24px; left: 0px;"></div>
            <div class="list items" id="list" style="overflow-x: scroll">
                <?php $catquery = new WP_Query( 'cat=7&order=ASC' );
                $i=0;
                ?>
                <?php while($catquery->have_posts()) : $catquery->the_post(); $i++; ?>
                    <div class="item">
                        <span><?php the_title(); ?></span>
                        <?php the_excerpt(); ?>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
    <div class="think-block">
        <div class="text">
            <span>Мыслим поколениями, действуя каждый день</span>
            Делаем свою работу на высочайшем уровне, чтобы строить будущее для следующих поколений.
        </div>
        <img src="<?= bloginfo('template_directory'); ?>/img/arrow8.svg">
    </div>
    <div class="index-invests-block">
        <div class="top-text">
            Наша культура
        </div>
        <div class="block-name">
            Каждое решение принимаем на основе 5 принципов
        </div>
        <div class="list">
            <div class="item flex v2">
                <div class="left-side">Качество</div>
                <div class="right-side">Отвечаем за высочайшее качество работы от мелких задач до крупных сделок</div>
            </div>
            <div class="item flex v2">
                <div class="left-side">Ответственность</div>
                <div class="right-side">Берем на себя ответственность за каждое принятое решение</div>
            </div>
            <div class="item flex v2">
                <div class="left-side">Взаимная победа</div>
                <div class="right-side">Действуем на основе принципа взаимной выгоды как внутри команды, так и при работе с партнерами</div>
            </div>
            <div class="item flex v2">
                <div class="left-side">Эффективность</div>
                <div class="right-side">Используем наши ресурсы по-максимуму и не терпим полумер</div>
            </div>
            <div class="item flex v2">
                <div class="left-side">Наследие</div>
                <div class="right-side">Принимаем решения, которые приносят пользу не только нам, но и вносят вклад в развитие общества</div>
            </div>
        </div>
    </div>
    <div class="videos-block">
        <div class="block-name">
            Ценим наших специалистов и гордимся каждым из них
        </div>
        <div class="flex">
            <div class="item">
                <a onclick="showVideo('.popup-video1')"><img src="<?= bloginfo('template_directory'); ?>/img/video1.png"></a>
                <div class="name">
                    Анна Матвеева
                    <span>Генеральный директор</span>
                </div>
                <p>“Фондовый рынок предоставляет равные возможности в независимости от пола, возраста и месторасположения”</p>
            </div>
            <div class="item">
                <a onclick="showVideo('.popup-video2')"><img src="<?= bloginfo('template_directory'); ?>/img/video2.png"></a>
                <div class="name">
                    Инна Виксниньш
                    <span>Директор по работе с персоналом</span>
                </div>
                <p>“Моя основная задача найти таланты и предоставить площадку для их профессионального роста”</p>
            </div>
        </div>
    </div>
    <div class="team-block">
        <div class="block-name">
            Наша команда
        </div>
        <div class="list-name">
            топ менеджмент
        </div>
        <div class="flex2">
	        <?php $catquery = new WP_Query( 'cat=8&posts_per_page=20&order=ASC' );?>
	        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="item company-members" onclick="$('.popup-person_<?=$post->ID;?>').fadeIn()">
                    <img class="about-us-photo-preview" src="<?php echo wp_get_attachment_image_url( get_post_meta($post->ID,'foto_preview', true), 'full' );?>">
                    <span><?php the_title(); ?></span>
	                <?php echo get_post_meta($post->ID,'dolzn', true);?>
                </div>
	        <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>
        </div>
        <div class="br"></div>
        <div class="list-name">
            эксперты
        </div>
        <div class="flex2">
	        <?php $catquery = new WP_Query( 'cat=11&posts_per_page=20&order=ASC' );?>
	        <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="item company-members" onclick="$('.popup-person_<?=$post->ID;?>').fadeIn()">
                    <img class="about-us-photo-preview" src="<?php echo wp_get_attachment_image_url( get_post_meta($post->ID,'foto_preview', true), 'full' );?>">
                    <span><?php the_title(); ?></span>
			        <?php echo get_post_meta($post->ID,'dolzn', true);?>
                </div>
	        <?php endwhile; ?>
	        <?php wp_reset_postdata(); ?>

        </div>
    </div>
    <div class="gallery-block">
        <div class="block-name">
            Наша жизнь вне офиса
        </div>
        <div class="list">
            <div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/1.jpg">
                <p></p>
            </div>
            <div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/2.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/3.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/4.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/5.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/6.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/7.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/8.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/9.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/10.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/11.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/13.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/14.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/15.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/16.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/17.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/18.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/19.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/20.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/21.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/22.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/24.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/25.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/26.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/27.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/28.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/29.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/30.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/31.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/32.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/34.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/35.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/37.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/41.jpg">
                <p></p>
            </div>
			<div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/office/42.jpg">
                <p></p>
            </div>
        </div>
        <div class="sl-count">
            <span class="sl-count__current">1</span> | <span class="sl-count__total"></span>
        </div>
    </div>
    <div class="capital-block">
        <div class="block-name">
            <span>С Вектор Икс вы сохраняете и преумножаете свой капитал</span>
            Наша компания сфокусирована на предоставлении высокого уровня обслуживания для состоятельных инвесторов с любым уровнем знаний в сфере.
        </div>
        <div class="flex">
            <div class="list">
                <div class="name">
                    Инвестируй с профи
                </div>
                <ul>
                    <li><a href="/personal-broker/"><span>Персональный брокер</span> Привлечение финансирования с помощью выпуска облигаций</a></li>
                    <li><a href="/trust-management/"><span>Доверительное управление</span> Передайте свои активы в полное управление профессионалу</a></li>
                    <li style="display:none;"><a href="/pre-ipo/"><span>Pre-IPO</span> Покупайте бумаги перспективных компаний до их первичного размещения</a></li>
                </ul>
            </div>
            <div class="list">
                <div class="name">
                    Брокерское обслуживание
                </div>
                <ul>
                    <li><a href="/investing-for-yourself/"><span>Самостоятельное инвестирование</span> Предоставляем доступ к рынкам индивидуальным инвесторам</a></li>
                    <li><a href="/investing-for-business/"><span>Для бизнеса</span> Предоставляем удобные условия для инвесторов, торгующих от имени компани</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="docs-block flex">
        <div class="text">
            <div class="top-text">
                Лицензии
            </div>
            <div class="name">
                Вектор Икс – это надежный деловой партнер, отвечающий за качество предоставляемых услуг перед клиентами
            </div>
            <p>ООО «Вектор Икс» имеет лицензии профессионального участника рынка ценных бумаг с 31.07.2007 г., а также является участником Фондового рынка ПАО Московская Биржа с 2008 г. и Валютного рынка ПАО Московская Биржа с 2016 г. ООО "Вектор Икс"  включен в реестр инвестиционных советников.</p>
        </div>
        <div class="list">
            <div class="slider">
                <div class="item"><img src="<?= bloginfo('template_directory'); ?>/img/license1.jpg" class="minimized" style="max-height: 488px;"></div>
                <div class="item"><img src="<?= bloginfo('template_directory'); ?>/img/license2.jpg" class="minimized" style="max-height: 488px;"></div>
                <div class="item"><img src="<?= bloginfo('template_directory'); ?>/img/license3.jpg" class="minimized" style="max-height: 488px;"></div>
                <div class="item"><img src="<?= bloginfo('template_directory'); ?>/img/license5.png" class="minimized" style="max-height: 488px;"></div>
				<div class="item"><img src="<?= bloginfo('template_directory'); ?>/img/license4.png" class="minimized" style="max-height: 488px;"></div>
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
    <video class="video"  autoplay="" muted="" playsinline >
        <source src="<?= bloginfo('template_directory'); ?>/video/9.mp4" type="video/mp4" />
        <img src="<?= bloginfo('template_directory'); ?>/img/bottom-page-form.png" class="image">
        <img src="<?= bloginfo('template_directory'); ?>/img/arrow9.svg" class="block-arrow">
    </video>

</div>

<script>
    $(function(){
        $('.person').customScroll({
			vertical: true,
  			horizontal: false
		});
    });

    const slider = document.querySelector('.items');
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 1; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;

        // selItemScroll();
        // console.log(slider.scrollLeft + " = " + wid_x + " = " + pos_x);
    });

    $(function() {
        $(".items").scroll(function () {
            selItemScroll();
        });
    });

    function selItemScroll() {
        $(".items .item").each(function (index, value) {
            let wid_x = $(value).width();
            let pos_x = $(value).position().left;
            let m_w = parseInt($('.custom-scroll_bar-x').css('margin-left'));
            if(pos_x <= m_w && pos_x+wid_x > m_w) {
                $(value).addClass('active-item');
            } else {
                if($(value).hasClass('active-item')) {
                    $(value).removeClass('active-item');
                }
            }
            // console.log(parseInt(m_w));
            // console.log(index + " " + value.position().left);
        });
    }
</script>

<?php $catquery = new WP_Query( 'cat=8,11&posts_per_page=20' );?>
<?php while($catquery->have_posts()) : $catquery->the_post(); ?>
    <div class="popup popup-person_<?=$post->ID;?>">
        <div class="window small">
            <div class="person" id="person_<?=$post->ID;?>">
                <div class="image">
                    <img src="<?php echo wp_get_attachment_image_url( get_post_meta($post->ID,'foto', true), 'full' );?>">
                </div>
                <div class="name">
	                <?php the_title(); ?>
                    <span><?php echo get_post_meta($post->ID,'dolzn', true);?></span>
                </div>
	            <?php the_content(); ?>

            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<div class="popup popup-video1">
    <div class="window">
        <div class="video">
			<iframe class="video gplay_video" src="https://www.youtube.com/embed/dvPsVJKs4ak?enablejsapi=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowscriptaccess="always" allowfullscreen></iframe>
        </div>
    </div>
</div>

<div class="popup popup-video2">
    <div class="window">
        <div class="video">
			<iframe class="video gplay_video" src="https://www.youtube.com/embed/YgS0Kva3VRw?enablejsapi=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowscriptaccess="always" allowfullscreen></iframe>
        </div>
    </div>
</div>

<?php get_footer(); ?>

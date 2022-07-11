<?php get_header(); ?>
    <div class="index-about-block flex">
        <div class="left-side">
            <div class="item">
                <a href="/personal-broker/" class="tag">Персональный брокер</a>
                <a href="/personal-broker/" class="name">Мы делимся экспертизой, вы принимаете решения</a>
                <a href="/personal-broker/" class="link">Подробнее <span></span></a>
            </div>
            <div class="item">
                <a href="/trust-management/" class="tag">Доверительное управление</a>
                <a href="/trust-management/" class="name">Формирование и управление вашим портфелем</a>
                <a href="/trust-management/" class="link">Подробнее <span></span></a>
            </div>
        </div>
        <div class="right-side">
            <a  class="tag" onclick="$('.popup').fadeIn()">Pre-IPO*</a>
            <a  class="name" onclick="$('.popup').fadeIn()">Инвестируйте раньше остальных игроков</a>
            <a  class="link" onclick="$('.popup').fadeIn()">Подробнее <span></span></a>
            <div class="bottom-text">
                * Только для квалифицированных инвесторов
            </div>
            <video class="video"  autoplay="" muted="" playsinline >
                <source src="<?= bloginfo('template_directory'); ?>/video/1.mp4" type="video/mp4" />
                <img src="<?= bloginfo('template_directory'); ?>/img/about.png" class="image">
                <img src="<?= bloginfo('template_directory'); ?>/img/arrow3.svg" class="block-arrow">
            </video>

        </div>
    </div>
    <div class="index-brokerage-services">
        <div class="flex">
            <div class="block-name">
                Брокерское обслуживание
            </div>
            <div class="top-text">
                Размер комиссии зависит от стоимости активов на брокерском счету
            </div>
        </div>
        <div class="flex list">
            <div class="item">
                <a href="/investing-for-yourself/" class="tag">Самостоятельное инвестирование</a>
                <div class="discount">
                    от 0,025%
                </div>
                <p class="bold-text">Не нуждаетесь в помощи? Ознакомьтесь с условиями брокерского обслуживание для опытных инвесторов. </p>
                <a href="/investing-for-yourself/" class="link">Подробнее <span></span></a>
            </div>
            <div class="item">
                <a href="/investing-for-business/" class="tag">Для бизнеса</a>
                <div class="discount">
                    от 0,015%
                </div>
                <p class="bold-text">Узнайте об инвестиционных инструментах, доступных корпоративным клиентам и условиях подключения.</p>
                <a href="/investing-for-business/" class="link">Подробнее <span></span></a>
            </div>
        </div>
    </div>
    <div class="index-tarif-block">
        <a href="/tariffs/" class="tag">Тарифы</a>
        <div class="name">
            Выберите своё персональное предложение
        </div>
        <p>С Вектором вы можете начать инвестировать с любым уровнем знаний о финансовом рынке. Наши эксперты готовы в любой момент предложить эффективное персональное решение на основе ваших целей и стратегии.</p>
        <a href="/tariffs/" class="link">Посмотреть все тарифы</a>

        <video class="video"  autoplay="" muted="" playsinline >
            <source src="<?= bloginfo('template_directory'); ?>/video/2.mp4" type="video/mp4" />
            <img src="<?= bloginfo('template_directory'); ?>/img/index-tarif-block.png" class="image">
            <img src="<?= bloginfo('template_directory'); ?>/img/arrow4.svg" class="block-arrow">
        </video>

    </div>
    <div class="index-invests-block">
        <div class="block-name">
            Вектор Икс - надежный партнер в мире инвестиций
        </div>
        <div class="list">
            <div class="item flex">
                <div class="left-side">Индивидуальный подход</div>
                <div class="right-side">Никаких шаблонов, только личное общение и стратегии, основанные на ваших личных целях</div>
            </div>
            <div class="item flex">
                <div class="left-side">Экспертиза высшего уровня</div>
                <div class="right-side">Мы собрали команду опытных профессионалов, анализирующих рынок больше 10 лет</div>
            </div>
            <div class="item flex">
                <div class="left-side">Партнерство и доверие</div>
                <div class="right-side">Наша цель - не одноразовые услуги, а долгосрочные партнерские отношения</div>
            </div>
            <div class="item flex">
                <div class="left-side">Круглосуточная помощь</div>
                <div class="right-side">Наши эксперты на связи 24/7 и готовы оказать помощь в любой момент удобным для вас способом</div>
            </div>
            <div class="item flex">
                <div class="left-side">Прозрачность тарифов</div>
                <div class="right-side">Никаких скрытых цен и комиссий. Вам заранее будет известно сколько и за что вы платите.</div>
            </div>
        </div>
    </div>
    <div class="index-news-block flex">
        <div class="big-item">
            <div class="content">
                <a href="https://t.me/vectorxbroker" class="tag">Новости</a>
                <div class="name">
                    Курируемая подборка новостей в вашем телефоне
                </div>
                <p>Ежедневно публикуем самые важные новости фондового рынка для самостоятельных инвесторов в нашем телеграм-канале.</p>
                <a href="https://t.me/vectorxbroker" class="link"><span></span> Присоединиться к каналу</a>
            </div>
        </div>
        <div class="list" style="position: relative;">
            <?php $catquery = new WP_Query( 'cat=6&posts_per_page=2&orderby=date&order=DESC' ); ?>
            <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="item">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <?php the_excerpt(); ?>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <div class="item" style="bottom: 0;display: block;position: absolute;margin-left: auto;margin-right: auto;left: 0;right: 0;text-align: center;height: auto;padding: 0;">
                <a href="/news/" class="link">Архив новостей</a>
            </div>
        </div>
    </div>
    <div class="index-about-us-block flex">
        <div class="content">
            <a href="/about/" class="tag">О компании</a>
            <div class="name">
                Вектор Икс – это сообщество экспертов
            </div>
            <p>Наша главная ценность это люди. Наши эксперты – наша гордость. Познакомьтесь с нашей командой и узнайте кто станет вашим надежным инвестиционным партнёром. </p>
            <a href="/about/" class="link">Подробнее о нас <span></span></a>
        </div>
        <div class="image">
            <video class="video"  autoplay="" muted="" playsinline >
                <source src="<?= bloginfo('template_directory'); ?>/video/3.mp4" type="video/mp4" />
                <img src="<?= bloginfo('template_directory'); ?>/img/about2.png">
                <img src="<?= bloginfo('template_directory'); ?>/img/arrow5.svg" class="block-arrow">
            </video>

        </div>

    </div>
    <div class="bottom-page-form flex">
        <div class="text">
            Готовы ответить на любые вопросы, помочь разобраться и принять правильное решение
        </div>
		<div id="sender-form2-success" class="form-success" style="display: none;">
			<div class="form-success-inner">
				<div class="text">Ваша заявка принята</div>
				<p>Спасибо! Свяжемся с вами в ближайшее время.</p>
			</div>
            <p class="privacy-policy">
                Нажимая на кнопку "Получить консультацию", вы даете согласие на обработку персональных данных в соответствии с <a href="/privacy-policy/">Политикой конфиденциальности</a>
            </p>
		</div>
        <form id="sender-form2">
            <p class="answer-form-success" style="display: none">Успешно отправлено</p>
            <p class="answer-form-error" style="display: none">Ошибка отправки</p>
            <input type="text" id="form-name2" required minlength="3" placeholder="Имя">
            <input type="text" id="form-phone2" required minlength="7" placeholder="Телефон" title="+7 (xxx) xxx xxxx" pattern="\+7 \([0-9]{3}\) [0-9]{3} [0-9]{4}">
            <button class="button" type="submit">Получить консультацию</button>
			<p class="privacy-policy">
				Нажимая на кнопку "Получить консультацию", вы даете согласие на обработку персональных данных в соответствии с <a href="/privacy-policy/" >Политикой конфиденциальности</a>
			</p>
        </form>
        <img src="<?= bloginfo('template_directory'); ?>/img/arrow6.svg" class="block-arrow">
    </div>

<?php get_footer(); ?>
<?php get_header(); ?>

    <div class="service-page-top-block other">
        <div class="content">
            <div class="name">
				<h1 class="h1">Самостоятельное инвестирование</h1>
            </div>
            <p>Получите доступ ко всем важным инвестиционным инструментам и преумножайте свой капитал. </p>
            <button onclick="$('.popup').fadeIn()" class="w-200">Открыть счёт</button>
        </div>
        <video class="video"  autoplay="" muted="" playsinline >
            <source src="<?= bloginfo('template_directory'); ?>/video/11.mp4" type="video/mp4" />
            <img src="<?= bloginfo('template_directory'); ?>/img/investing-for-yourself.png" class="image">
            <img src="<?= bloginfo('template_directory'); ?>/img/arrow11.svg" class="block-arrow">
        </video>

    </div>
    <div class="personal-broker-advantages">
        <div class="block-name other">
            Возможности Вектор Икс
        </div>
        <div class="top-text">
            Вектор Икс открывает вам доступ ко всем инструментам и секциям Московской биржи и Санкт-Петербургской бирж.
        </div>
        <div class="list other">
            <div class="flex">
                <div class="item">
                    <span>Акции</span>
                    Зарабатывайте на акциях российских и зарубежных компаний
                </div>
                <div class="item item2">
                    <span>Валютный рынок</span>
                    Торгуйте и обменивайте иностранную валюту по выгодному курсу
                </div>
                <div class="item item3">
                    <span>Облигации</span>
                    Инвестируйте в облигации с рублевой или долларовой доходностью
                </div>
                <div class="item item4">
                    <span>ПИФы и ETF</span>
                    Инвестируйте в готовые отраслевые наборы акций и облигаций
                </div>
            </div>
        </div>
    </div>
    <div class="your-bag-block">
        <div class="name">
            Насколько успешен ваш текущий портфель?
        </div>
        <p>Оставь заявку и мы бесплатно оценим ваш текущий портфель. Подскажем, соответствует ли портфель вашим целям и дадим индивидуальные рекомендации.</p>
        <button onclick="$('.popup').fadeIn()">Получить консультацию</button>
        <img src="<?= bloginfo('template_directory'); ?>/img/arrow16.svg" class="arrow">
    </div>
    <div class="open-account-block">
        <div class="item">
            <div class="number">
                01
            </div>
            <div class="name">
                Чтобы открыть счет, оставьте заявку
            </div>
            <p>Мы свяжемся с вами для открытия брокерского счета</p>
            <button onclick="$('.popup').fadeIn()">Оставить заявку</button>
        </div>
        <div class="item">
            <div class="number">
                02
            </div>
            <div class="name">
                Скачайте приложение
            </div>
            <p>Торговля осуществляется через приложение QUIK на iOS или Android</p>
            <p>Загрузите в <a href="<?php echo get_option("contact_options")['appstore'];?>" class="mob"><img src="<?= bloginfo('template_directory'); ?>/img/ios.svg"></a> или <a href="<?php echo get_option("contact_options")['gplay'];?>" class="mob"><img src="<?= bloginfo('template_directory'); ?>/img/android.svg"></a></p>
        </div>
        <div class="item">
            <div class="number">
                03
            </div>
            <div class="name">
                Пополните счет
            </div>
            <p>Пополните брокерский счет без комиссии с карты любого банка</p>
        </div>
        <img src="<?= bloginfo('template_directory'); ?>/img/phone.png" class="phone">
    </div>
    <div class="actions-block flex">
        <div class="main-action">
            <div class="top-text">
                Тарифы
            </div>
            <div class="name">
                Выбор тарифа осуществляется в соответствии со стоимостью активов
            </div>
            <p>Полную информацию по тарифам и комиссионным вознаграждениям брокеру можете узнать на странице тарифов</p>
            <a href="/tariffs/" class="link">Посмотреть тарифы</a>
        </div>
        <div class="list">
            <div class="item">
                <div class="top-text">
                    Акции
                </div>
                <div class="name">
                    от 0,025%
                </div>
                <p>Торговля ценными бумагами</p>
            </div>
            <div class="item">
                <div class="top-text">
                    Валюта
                </div>
                <div class="name">
                    от 0,01%
                </div>
                <p>Операции в валютной секции</p>
            </div>
        </div>
    </div>
    <div class="investiotions-results-block flex">
        <div class="text">
            <div class="name">
                Управляйте инвестициями из любой точки мира и получайте впечатляющие результаты
            </div>
            <p>Держите все под контролем с услугой «Персональный брокер». Идеально подходит для тех, кто давно играет на рынке.</p>
            <button onclick="$('.popup').fadeIn()">Стать инвестором</button>
        </div>
        <div class="list">
            <div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/result1.svg">
                <span>Сохраняйте</span>
                Инвестируйте в инструменты с наименьшим риском, чтобы активы не обесценивались из-за инфляции.
            </div>
            <div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/result2.svg">
                <span>Распределяйте</span>
                Пользуйтесь разными инструментами инвестирования, чтобы минимизировать риски потери капитала.
            </div>
            <div class="item">
                <img src="<?= bloginfo('template_directory'); ?>/img/result3.svg">
                <span>Приумножайте</span>
                Зарабатывайте на инвестициях, включая в свой портфель самые выгодные предложения рынка
            </div>
        </div>
    </div>
    <div class="faq-block">
        <div class="block-name">
            FAQ
        </div>
        <div class="list">
            <div class="item">
                <div class="name">
                    В каком формате проходит общение с персональным брокером?
                </div>
                <div class="text">
                    Информируем Вас о том, что в соответствии с п. 14 ст. 7 Федерального закона от 07.08.2001 года № 115-ФЗ «О противодействии легализации (отмыванию) доходов, полученных преступным путем, и финансированию терроризма» (далее – Федеральный закон) клиенты обязаны предоставлять организациям, осуществляющим операции с денежными средствами или иным имуществом, информацию, необходимую для исполнения указанными организациями требований Федерального закона, включая информацию о своих выгодоприобретателях, учредителях (участниках) и бенефициарных владельцах, а также о своем статусе доверительного собственника (управляющего) иностранной структуры без образования юридического лица, протектора.
                </div>
            </div>
            <div class="item">
                <div class="name">
                    Как открыть счет в Вектор Икс ?
                </div>
                <div class="text">
                    Информируем Вас о том, что в соответствии с п. 14 ст. 7 Федерального закона от 07.08.2001 года № 115-ФЗ «О противодействии легализации (отмыванию) доходов, полученных преступным путем, и финансированию терроризма» (далее – Федеральный закон) клиенты обязаны предоставлять организациям, осуществляющим операции с денежными средствами или иным имуществом, информацию, необходимую для исполнения указанными организациями требований Федерального закона, включая информацию о своих выгодоприобретателях, учредителях (участниках) и бенефициарных владельцах, а также о своем статусе доверительного собственника (управляющего) иностранной структуры без образования юридического лица, протектора.
                </div>
            </div>
            <div class="item">
                <div class="name">
                    Могу ли я воспользоваться услугой персонального брокера, торгуя на другой платформе?
                </div>
                <div class="text">
                    Информируем Вас о том, что в соответствии с п. 14 ст. 7 Федерального закона от 07.08.2001 года № 115-ФЗ «О противодействии легализации (отмыванию) доходов, полученных преступным путем, и финансированию терроризма» (далее – Федеральный закон) клиенты обязаны предоставлять организациям, осуществляющим операции с денежными средствами или иным имуществом, информацию, необходимую для исполнения указанными организациями требований Федерального закона, включая информацию о своих выгодоприобретателях, учредителях (участниках) и бенефициарных владельцах, а также о своем статусе доверительного собственника (управляющего) иностранной структуры без образования юридического лица, протектора.
                </div>
            </div>
            <div class="item">
                <div class="name">
                    От чего зависит размер комиссионного вознаграждения брокеру?
                </div>
                <div class="text">
                    Информируем Вас о том, что в соответствии с п. 14 ст. 7 Федерального закона от 07.08.2001 года № 115-ФЗ «О противодействии легализации (отмыванию) доходов, полученных преступным путем, и финансированию терроризма» (далее – Федеральный закон) клиенты обязаны предоставлять организациям, осуществляющим операции с денежными средствами или иным имуществом, информацию, необходимую для исполнения указанными организациями требований Федерального закона, включая информацию о своих выгодоприобретателях, учредителях (участниках) и бенефициарных владельцах, а также о своем статусе доверительного собственника (управляющего) иностранной структуры без образования юридического лица, протектора.
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

<?php get_footer(); ?>
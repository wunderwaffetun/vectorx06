<?php get_header(); ?>

<div class="tariffs-page">
    <div class="top-block">
        <div class="top-text">
            Тарифы
        </div>
        <div class="name">
            Выбор и изменение тарифов осуществляется в соответствии со стоимостью активов, зачисленных на брокерский счет
        </div>
    </div>
    <div class="select-banner">
        <div class="name">
			<h1 class="h1">Выберите своё персональное предложение</h1>
        </div>
        <p>С Вектором вы можете начать инвестировать с любым уровнем знаний о финансовом рынке. Наши эксперты готовы в любой момент предложить эффективное персональное решение на основе ваших целей и стратегии.</p>
        <button class = "button-popup" onclick="startPopupAnimation()">Подобрать тариф</button>
        <img src="<?= bloginfo('template_directory'); ?>/img/tariffs.png" class="image">
    </div>
</div>
<div class="tariffs-block flex">
    <div class="item">
        <div class="name">
            Доверительное управление
        </div>
		<table class="tbl1">
            <tr>
                <td colspan="2">РОССИЙСКИЕ АКЦИИ</td>
            </tr>
            <tr>
                <td>За управление</td>
                <td>2%</td>
            </tr>
            <tr>
                <td>За успех</td>
                <td>20%</td>
            </tr>
        </table>
		<table class="tbl1">
            <tr>
                <td colspan="2">РОССИЙСКИЕ АКЦИИ. КВАРТАЛ</td>
            </tr>
            <tr>
                <td>За управление</td>
                <td>1,5%</td>
            </tr>
            <tr>
                <td>За успех</td>
                <td>15%</td>
            </tr>
        </table>
		<table class="tbl1">
            <tr>
                <td colspan="2">ЗОЛОТО. РУБЛИ И ДОЛЛАРЫ</td>
            </tr>
            <tr>
                <td>За управление</td>
                <td>2%</td>
            </tr>
            <tr>
                <td>За успех</td>
                <td>15%</td>
            </tr>
        </table>
		<table class="tbl1">
            <tr>
                <td colspan="2">МЕЖДУНАРОДНЫЕ АКЦИИ</td>
            </tr>
            <tr>
                <td>За управление</td>
                <td>2%</td>
            </tr>
            <tr>
                <td>За успех</td>
                <td>20%</td>
            </tr>
        </table>
		<table class="tbl1">
            <tr>
                <td colspan="2">«РЕПО»</td>
            </tr>
            <tr>
                <td>За управление:</td>
                <td></td>
            </tr>
			<tr>
                <td>от 100.000 до 10 млн рублей</td>
                <td>1%</td>
            </tr>
			<tr>
                <td>от 10 млн до 1 млрд рублей</td>
                <td>0,5%</td>
            </tr>
			 <tr>
                <td>от 1 млрд рублей</td>
                <td>0,2%</td>
            </tr>
        </table>
		<table class="tbl1">
            <tr>
                <td colspan="2">ИНДИВИДУАЛЬНАЯ СТРАТЕГИЯ</td>
            </tr>
            <tr>
                <td>Размер вознаграждения определяется индивидуально по договору доверительного управления</td>
				<td></td>
            </tr>
        </table>
        <button class = "button-popup" onclick="startPopupAnimation()">Открыть счёт</button>
    </div>
    <div class="item">
        <div class="name">
            Тариф «Трейдер»
            
        </div>
        <table class="tbl2">
			<tr class="other">
                <td colspan=2>Сделки с финансовыми инструментами<br/>
					<span style="font-size: 14px; text-transform: none; color: #9D9D9D;"><i>За исключением РЕПО</i></span>
				</td>
            </tr>
            <tr>
                <td>От  300 тыс. ₽  и более</td>
                <td>0,5%</td>
            </tr>
        </table>
		<table class="tbl2">
			<tr class="other">
                <td colspan=2>РЕПО</td>
            </tr>
            <tr>
                <td>От 100 тыс. ₽  и более</td>
                <td>0,2%</td>
            </tr>
        </table>
        <button class = "button-popup" onclick="startPopupAnimation()"">Получить консультацию</button>
    </div>
    <div class="item">
        <div class="name">
            Тариф «Персональный брокер»
            <span><i>Комиссионное вознаграждение брокера при заключении сделок с акциями и облигациями</i></span>
        </div>
        <table class="tbl1">
            <tr>
                <td colspan="2">акции</td>
            </tr>
            <tr>
                <td>от 1 млн. ₽. до 10 млн. ₽</td>
                <td>0,3%</td>
            </tr>
            <tr>
                <td>от 10 млн. ₽ до 50 млн. ₽</td>
                <td>0,2%</td>
            </tr>
            <tr>
                <td>от 50 млн. ₽ и более</td>
                <td>0,15%</td>
            </tr>
        </table>
        <table class="tbl1">
            <tr>
                <td colspan="2">облигациями</td>
            </tr>
            <tr>
                <td>от 1 млн. руб.</td>
                <td>0,15%</td>
            </tr>
        </table>
        <button class = "button-popup" onclick="startPopupAnimation()"">Получить консультацию</button>
    </div>
    <div class="item">
        <div class="name">
            Дополнительные услуги
        </div>
        <table class="tbl2" style="border-collapse: separate;">
            <tr>
                <td>Открытие и закрытие Брокерского счета</td>
                <td class="free">Бесплатно</td>
            </tr>
            <tr>
                <td>Регистрация Клиента на Торговой площадке</td>
                <td class="free">Бесплатно</td>
            </tr>
            <tr>
                <td>Пополнение и вывод денег с Брокерского счета в рублях</td>
                <td class="free">Бесплатно</td>
            </tr>
            <tr class="other">
                <td>Обслуживание Брокерского счета</td>
                <td class="free">Бесплатно</td>
            </tr>
            <tr class="other">
                <td colspan="2">Дополнительно для тарифов «Трейдер»</td>
            </tr>
            <tr>
                <td>Голосовое поручение</td>
                <td>
                    0,2% от оборота
                    <p>но не менее 500 руб. за поручение</p>
                </td>
            </tr>
        </table>
        <button class = "button-popup" onclick="startPopupAnimation()"">Получить консультацию</button>
    </div>
    <div class="item">
        <div class="name">
            Конверсионные операции
            <span><i>Комиссионное вознаграждение зависит от выбора валюты и объема сделок</i></span>
        </div>
        <table class="tbl1">
            <tr>
                <td>от 1 млн. руб. до 10 млн. руб.</td>
                <td>0,1%</td>
            </tr>
            <tr>
                <td>от 10 млн. руб. до 50 млн. руб.</td>
                <td>0,03%</td>
            </tr>
            <tr>
                <td>от 50 млн. руб. и более</td>
                <td>0,01%</td>
            </tr>
        </table>
        <button class = "button-popup" onclick="startPopupAnimation()"">Получить консультацию</button>
    </div>
    <div class="bottom-text">
        <div class="text">
            <p>Брокер, при любом тарифе, имеет право использовать денежные средства Клиента в размере, не превышающем свободного денежного остатка находящихся на специальном брокерском счете, а также на расчетных и клиринговых счетах Брокера, на условиях оплаты из расчета 2% годовых за каждый календарный день использования Брокером денежных средств Клиента.</p>
            <p>Вознаграждение Брокера начисляется при заключении сделки в интересах Клиента, удерживается методом безакцептного списания и отражается в Отчетах Брокера.</p>
            <p>Удержание вознаграждения производится ежедневно, но не реже, чем 1 раз в месяц.</p>
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

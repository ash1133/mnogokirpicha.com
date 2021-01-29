</section>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "INDEX.articles", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
    "ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
    "AJAX_MODE" => "N",	// Включить режим AJAX
    "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
    "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
    "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
    "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
    "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
    "CACHE_GROUPS" => "Y",	// Учитывать права доступа
    "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
    "CACHE_TYPE" => "A",	// Тип кеширования
    "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
    "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
    "DISPLAY_DATE" => "Y",	// Выводить дату элемента
    "DISPLAY_NAME" => "Y",	// Выводить название элемента
    "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
    "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
    "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
    "FIELD_CODE" => array(	// Поля
        0 => "",
        1 => "",
    ),
    "FILTER_NAME" => "",	// Фильтр
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
    "IBLOCK_ID" => "42",	// Код информационного блока
    "IBLOCK_TYPE" => "information",	// Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT" => "3",	// Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "PAGER_TITLE" => "Полезные статьи",	// Название категорий
    "PARENT_SECTION" => "",	// ID раздела
    "PARENT_SECTION_CODE" => "",	// Код раздела
    "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
    "PROPERTY_CODE" => array(	// Свойства
        0 => "",
        1 => "",
    ),
    "SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
    "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
    "SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
    "SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
    "SET_STATUS_404" => "N",	// Устанавливать статус 404
    "SET_TITLE" => "N",	// Устанавливать заголовок страницы
    "SHOW_404" => "N",	// Показ специальной страницы
    "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
    "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
    "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
    "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
    "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
),
    false
);?>


<?$APPLICATION->IncludeComponent("bitrix:news.list", "INDEX.response", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "41",	// Код информационного блока
		"IBLOCK_TYPE" => "information",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "3",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Отзывы",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>


<section class="cloud my-3 container" id="footerForm">
    <div class="row justify-content-center">
        <div class="col-8">
            <p class="text-center h1">Оставьте заявку или задайте вопрос!</p>
            <div data-form="">
                <div class="modal-tip"></div>
                <form class="ajax-form" method="post" action="/assets/ajax/ajax.php">
                    <input type="hidden" name="ajax_action" value="call">
                    <div class="call-form__inputs">

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="call-form__input">
                                    <p class="mb-2">Имя *</p>
                                    <div class="call-form__input__icon">
                                        <i class="fas fa-user"></i>
                                        <input placeholder="Имя *" class="call-form__input-text" type="text" name="callback_name" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="call-form__input">
                                    <p class="mb-2">Телефон *</p>
                                    <div class="call-form__input__icon">
                                        <i class="fas fa-phone"></i>
                                        <input placeholder="Телефон *" class="phoneMask call-form__input-text" type="text" name="callback_phone" required="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="call-form__input">
                                    <p class="mb-2">Тема заявки / Товар</p>
                                    <div class="call-form__input__icon">
                                        <i class="fas fa-question"></i>
                                        <input placeholder="Телефон *" class="call-form__input-text" type="text" name="callback_page" required="" value="Главная">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg">
                                <div class="call-form__input">
                                    <p class="mb-2">Сообщение *</p>
                                    <textarea placeholder="Сообщение" class="call-form__input-text" name="callback_message" cols="30" rows="9"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-auto pt-4 mt-1">
                                <div class="call-form__input">
                                    <div class="g-recaptcha" data-sitekey="6LcmSd0ZAAAAAKerZkPRPwYji-itQK3VYRpsjpYq"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LcmSd0ZAAAAAKerZkPRPwYji-itQK3VYRpsjpYq&amp;co=aHR0cHM6Ly9tbm9nb2tpcnBpY2hhLmNvbTo0NDM.&amp;hl=ru&amp;v=qc5B-qjP0QEimFYUxcpWJy5B&amp;size=normal&amp;cb=r98ezhvata5h" width="304" height="78" role="presentation" name="a-avsclpa7h891" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div>
                                </div>
                            </div>

                            <div class="col-12">
                                <p>Отправляя заявку, вы принимаете <a href="/politika-konfidenczialnosti" trget="_blank">Политику конфиденциальности</a> об обработке персональных данных</p>
                                <input class="callback_btn call-form__submit" type="submit" value="Отправить" onclick="ym(52958293, 'reachGoal', 'question'); return true;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<footer class="container mt-3">
    <div class="dark_bg">
        <div class="footer__nav">
            <a class="footer__links" href="stroitelnyie-materialyi/kirpich">Кирпич</a>
            <a class="footer__links" href="nerudnyie-materialyi/shheben">Щебень</a>
            <a class="footer__links" href="nerudnyie-materialyi/shheben/granitnyij-shheben">Гранитный щебень</a>
            <a class="footer__links" href="stroitelnyie-materialyi/kirpich/obliczovochnyij-kirpich">Облицовочный кирпич</a>
            <a class="footer__links" href="nerudnyie-materialyi/pesok/pesok-gornyij">Песок горный</a>
            <a class="footer__links" href="nerudnyie-materialyi/pesok/rechnoj-pesok">Речной песок</a>
            <a class="footer__links" href="nerudnyie-materialyi/pesok/pesok-seyanyij">Песок сеяный</a>
            <a class="footer__links" href="nerudnyie-materialyi/pesok/pesok-mytyj">Песок мытый</a>
            <a class="footer__links" href="nerudnyie-materialyi/beton/beton-izvestnyakovyij-v15-(m200)">Известняковый бетон М 200 (В 15)</a>
            <a class="footer__links" href="nerudnyie-materialyi/beton/beton-izvestnyakovyij-v20-(m250)">Известняковый бетон М 250 (В 20)</a>
            <a class="footer__links" href="nerudnyie-materialyi/beton/beton-izvestnyakovyij-v22,5-(m300)">Известняковый бетон М 300 (В 22,5)</a>
            <a class="footer__links" href="nerudnyie-materialyi/beton/beton-izvestnyakovyij-v25-(m350)">Известняковый бетон М 350 (В 22,5)</a>
            <a class="footer__links" href="nerudnyie-materialyi/beton/beton-izvestnyakovyij-v30-(m400)">Известняковый бетон М 400 (В 30)</a>
            <a class="footer__links" href="nerudnyie-materialyi/shheben/izvestnyakovyij-shheben">Известняковый щебень</a>
            <a class="footer__links" href="stroitelnyie-materialyi/kirpich/stroitelnyij-kirpich">Строительный кирпич</a>
            <a class="footer__links" href="stroitelnyie-materialyi/kirpich/ogneupornyij-kirpich">Огнеупорный кирпич</a>
            <a class="footer__links" href="stroitelnyie-materialyi/kirpich/stroitelnyie-bloki">Строительные блоки</a>
            <a class="footer__links" href="stroitelnyie-materialyi">Строительные материалы</a>
            <a class="footer__links" href="nerudnyie-materialyi/pesok">Песок</a>
            <a class="footer__links" href="nerudnyie-materialyi/shheben/shlakovyij-shheben">Шлаковый щебень</a>
            <a class="footer__links" href="nerudnyie-materialyi">Нерудные материалы</a>
            <a class="footer__links" href="czenyi">Цены</a>

        </div>
        <div class="decor_line"></div>

        <div class="small_container">

            <div class="row center ft_contacts">
                <div class="col-md-6 m20">
                    <i class="fal fa-phone ft_contacts__icon"></i>
                    <a href="tel:+74872385660" class="ft_contacts__link">+7 (4872) 38-56-60</a>
                </div>
                <div class="col-md-6 m20">
                    <i class="fal fa-envelope ft_contacts__icon"></i>
                    <a href="mailto:info@mnogokirpicha.com" class="ft_contacts__link">info@mnogokirpicha.com</a>
                </div>
                <div class="col-md-12 m20">300001, Россия, г. Тула, ул. Каракозова, д.2</div>
                <div class="col-md-12 m20">Режим работы: Пн-Пт с 9:00 до 19:00</div>
                <div class="col-md-12 m20">Заполняя любую форму на сайте, вы соглашаетесь с <a class="politik" href="politika-konfidenczialnosti">политикой конфиденциальности</a></div>
                <a class="site_map_link  m20" href="/sitemap">Карта сайта</a>
                <div class="col-md-12">2021 «МНОГО КИРПИЧА». Строительные сыпучие материалы с доставкой.</div>
            </div>

        </div>

    </div>
</footer>


</body>
</html>
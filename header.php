<? if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
<!DOCTYPE html>
<html>
<head>
    <title><?$APPLICATION->ShowTitle();?></title>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <? $APPLICATION->ShowMeta("viewport", "width=device-width, initial-scale=1"); ?>
    <? $APPLICATION->ShowMeta("HandheldFriendly"); ?>
    <? $APPLICATION->ShowMeta("apple-mobile-web-app-capable", "yes"); ?>
    <? $APPLICATION->ShowMeta("apple-mobile-web-app-status-bar-style"); ?>
    <? $APPLICATION->ShowMeta("SKYPE_TOOLBAR"); ?>

    <? if ($_GET['PAGEN_1']) echo '<link rel="canonical" href="'.$APPLICATION->GetCurPage(false).'"/>';?>

    <? $APPLICATION->ShowHead(); ?>

    <?
    use Bitrix\Main\Page\Asset;

    Asset::getInstance()->addString('<link rel="preconnect" href="https://fonts.gstatic.com">');
    Asset::getInstance()->addString('<link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@300;400;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">');


    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/build/css/jquery.fancybox.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/build/css/slick.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/build/css/bootstrap.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/build/css/template_styles.css');


    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/build/js/jquery.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/build/js/popper.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/build/js/slick.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/build/js/jquery.fancybox.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/build/js/scripts.min.js");

    ?>
</head>
<body>
<div id="panel">
    <?$APPLICATION->ShowPanel();?>
</div>

<header class="b-header container mb-lg-3 mb-5 cloud">
    <div class="row align-items-center">
        <div class="col-lg-4 pr-5 mb-3 mb-lg-0">
            <div class="b-header__city">
                <span>Выберите город:</span>
                <a class="modal-form--js" href="" data-href=".select-city--js">Тула</a>

                <div class="modal-form call-form select-city--js" style="display: none;">
                    <div class="modal-form__close close-modal--js">
                        <i class="far fa-times"></i>
                    </div>
                    <div class="call-form__header">Выберите город</div>
                    <div class="modal-tip"></div>
                    <ul>
                        <li><a href="https://domodedovo.mnogokirpicha.com/">Домодедово</a></li>
                        <li><a href="https://kashira.mnogokirpicha.com/">Кашира</a></li>
                        <li><a href="https://podolsk.mnogokirpicha.com/">Подольск</a></li>
                        <li><a href="https://serpuhov.mnogokirpicha.com/">Серпухов</a></li>
                    </ul>
                    <ul>
                        <li><a href="https://stupino.mnogokirpicha.com/">Ступино</a></li>
                        <li>Тула</li>
                        <li><a href="https://chehov.mnogokirpicha.com/">Чехов</a></li>
                        <li><a href="https://sherbinka.mnogokirpicha.com/">Щербинка</a></li>
                    </ul>
                </div>
            </div>
            <a class="d-none d-lg-block" href="/">
                <img class="img-fluid" src="<?=SITE_TEMPLATE_PATH?>/build/img/logo_akont.png" alt="">
            </a>
        </div>

        <div class="col-lg-8">
            <div class="row align-items-center">

                <div class="col-lg-7">
                    <a class="b-header__phone" href="tel:+74872385660">+7 (4872) 38-56-60</a>
                    <a class="b-header__phone" href="tel:"></a>
                    <div class="mb-4">300001, Россия, г. Тула, ул. Каракозова, д.2<br> Режим работы: Пн-Пт с
                        9:00 до 19:00
                    </div>
                    <p class="b-header__callback" data-href=".call-form--js">Заказать звонок</p>
                    <div class="clearfix"></div>
                    <a class="b-header__email" href="mailto:info@mnogokirpicha.com">info@mnogokirpicha.com</a>
                </div>

                <div class="col">
                    <a class="b-header__link" target="_blank" download="" href="/docs/price.xlsx"
                       onclick="ym(52958293, 'reachGoal', 'price-kontakt'); return true;">Актуальный прайс-лист</a>
                    <div class="b-header__link modal-form--js" data-href=".call-form--js"
                         onclick="ym(52958293, 'reachGoal', 'open_question'); return true;">Заказать в 1 клик
                    </div>

                    <ul class="b-header__menu">
                        <li><a href="sertifikatyi">Сертификаты</a></li>
                        <li><a href="o-kompanii">О компании</a></li>
                        <li><a href="kontaktyi">Контакты</a></li>
                        <li><a href="otzyivyi">Отзывы</a></li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</header>

<section class="cloud mb-lg-5 container">
    <div class="d-lg-none d-block navbar-brand">
        <div class="headerCity"><span>Выберите город:</span><a class="modal-form--js" href=""
                                                               data-href=".select-city--js">Тула</a>
            <div class="modal-form call-form select-city--js">
                <div class="modal-form__close close-modal--js"><i class="far fa-times"></i></div>
                <div class="call-form__header">Выберите город</div>
                <div class="modal-tip"></div>
                <ul>
                    <li><a href="https://domodedovo.mnogokirpicha.com/">Домодедово</a></li>
                    <li><a href="https://kashira.mnogokirpicha.com/">Кашира</a></li>
                    <li><a href="https://podolsk.mnogokirpicha.com/">Подольск</a></li>
                    <li><a href="https://serpuhov.mnogokirpicha.com/">Серпухов</a></li>
                </ul>
                <ul>
                    <li><a href="https://stupino.mnogokirpicha.com/">Ступино</a></li>
                    <li>Тула</li>
                    <li><a href="https://chehov.mnogokirpicha.com/">Чехов</a></li>
                    <li><a href="https://sherbinka.mnogokirpicha.com/">Щербинка</a></li>
                </ul>
            </div>
        </div>
        <a class="">
            <img src="/assets/images/logo_akont.png" alt="">
        </a>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="#">Строительные материалы</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="nerudnyie-materialyi" >Нерудные материалы</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="uslugi">Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="czenyi">Цены</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="dostavka-i-oplata">Доставка и оплата</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" href="poleznaya-informacziya">Полезная информация</a>
                </li>
            </ul>
        </div>
    </nav>
</section>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "INDEX.pluses", Array(
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
    "IBLOCK_ID" => "43",	// Код информационного блока
    "IBLOCK_TYPE" => "information",	// Тип информационного блока (используется только для проверки)
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
    "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
    "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
    "NEWS_COUNT" => "20",	// Количество новостей на странице
    "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
    "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
    "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
    "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
    "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
    "PAGER_TITLE" => "Преимущества компании",	// Название категорий
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

<section class="cloud my-3 container">
    <div class="row">
        <div class="col-12">
            <p class="h2">Популярные товары</p>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <a class="prod_grid__link" href="nerudnyie-materialyi/shheben/izvestnyakovyij-shheben/izvestnyakovyij-shheben-frakczii-20-40" title="Известняковый щебень фракции 20-40">
                <div class="prod_grid__wimg">
                    <img src="<?=SITE_TEMPLATE_PATH?>/build/img/granit.eda26524a495da9c44bd8b2e514851131.jpg" title="Известняковый щебень фракции 20-40" alt="Известняковый щебень фракции 20-40 в Туле" class="prod_grid__image">
                    <div class="page_banner__action">
                        <div class="page_banner__action_hit">Хит</div>
                    </div>
                </div>
                <div class="prod_grid__name">Известняковый щебень фракции 20-40</div>
                <div class="prod_grid__info">Цена с доставкой <br>
                    <span class="prod_grid__price--green">от 910 ₽/м<sup>3</sup></span>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <a class="prod_grid__link" href="nerudnyie-materialyi/shheben/izvestnyakovyij-shheben/izvestnyakovyij-shheben-frakczii-20-40" title="Известняковый щебень фракции 20-40">
                <div class="prod_grid__wimg">
                    <img src="<?=SITE_TEMPLATE_PATH?>/build/img/granit.eda26524a495da9c44bd8b2e514851131.jpg" title="Известняковый щебень фракции 20-40" alt="Известняковый щебень фракции 20-40 в Туле" class="prod_grid__image">
                    <div class="page_banner__action">
                        <div class="page_banner__action_hit">Хит</div>
                    </div>
                </div>
                <div class="prod_grid__name">Известняковый щебень фракции 20-40</div>
                <div class="prod_grid__info">Цена с доставкой <br>
                    <span class="prod_grid__price--green">от 910 ₽/м<sup>3</sup></span>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <a class="prod_grid__link" href="nerudnyie-materialyi/shheben/izvestnyakovyij-shheben/izvestnyakovyij-shheben-frakczii-20-40" title="Известняковый щебень фракции 20-40">
                <div class="prod_grid__wimg">
                    <img src="<?=SITE_TEMPLATE_PATH?>/build/img/granit.eda26524a495da9c44bd8b2e514851131.jpg" title="Известняковый щебень фракции 20-40" alt="Известняковый щебень фракции 20-40 в Туле" class="prod_grid__image">
                    <div class="page_banner__action">
                        <div class="page_banner__action_hit">Хит</div>
                    </div>
                </div>
                <div class="prod_grid__name">Известняковый щебень фракции 20-40</div>
                <div class="prod_grid__info">Цена с доставкой <br>
                    <span class="prod_grid__price--green">от 910 ₽/м<sup>3</sup></span>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 mb-4">
            <a class="prod_grid__link" href="nerudnyie-materialyi/shheben/izvestnyakovyij-shheben/izvestnyakovyij-shheben-frakczii-20-40" title="Известняковый щебень фракции 20-40">
                <div class="prod_grid__wimg">
                    <img src="<?=SITE_TEMPLATE_PATH?>/build/img/granit.eda26524a495da9c44bd8b2e514851131.jpg" title="Известняковый щебень фракции 20-40" alt="Известняковый щебень фракции 20-40 в Туле" class="prod_grid__image">
                    <div class="page_banner__action">
                        <div class="page_banner__action_hit">Хит</div>
                    </div>
                </div>
                <div class="prod_grid__name">Известняковый щебень фракции 20-40</div>
                <div class="prod_grid__info">Цена с доставкой <br>
                    <span class="prod_grid__price--green">от 910 ₽/м<sup>3</sup></span>
                </div>
            </a>
        </div>
        <div class="col-12 text-right">
            <a href="/populyarnyie-tovaryi" class="page_banner__btn d-inline-block">Все популярные товары</a>
        </div>
    </div>
</section>

<section class="cloud my-3 container">
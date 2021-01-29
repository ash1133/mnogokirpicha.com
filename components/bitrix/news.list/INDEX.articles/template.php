<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
if (count($arResult['ITEMS']) > 0):?>

    <section class="cloud my-3 container">
        <div class="row">
            <div class="col-12">
                <p class="h2"><?=$arParams['PAGER_TITLE']?></p>
            </div>


            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <a
                            class="prod_grid__link"
                            id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                            href="<?=$arItem['DETAIL_PAGE_URL']?>"
                            title="<?=$arItem['NAME']?>"
                    >
                        <div class="prod_grid__wimg">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>" class="prod_grid__image">
                        </div>
                        <div class="prod_grid__name"><?=$arItem['NAME']?></div>
                        <div class="prod_grid__text"></div>

                        <div class="prod_grid__date"><?=$arItem['ACTIVE_FROM']?></div>
                    </a>
                </div>
            <?endforeach;?>

            <div class="col-12 text-right pt-4">
                <a href="/poleznaya-informacziya/stati" class="page_banner__btn d-inline-block">Все статьи</a>
            </div>
        </div>
    </section>
<?endif;?>


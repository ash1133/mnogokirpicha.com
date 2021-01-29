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
        <p class="h1"><?=$arParams['PAGER_TITLE']?></p>
        <div class="row justify-content-center">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="resp__container" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="resp__img">
                            <img src="<?=$arItem['PREVIEW_PICTURE']['SRC']?>" alt="<?=$arItem['PREVIEW_PICTURE']['ALT']?>">
                        </div>
                        <div class="resp__name">
                            <?=$arItem['NAME']?>
                            <div class="resp__date">
                                <?=$arItem['ACTIVE_FROM']?>
                            </div>
                        </div>
                        <div class="resp__text">
                            <?=$arItem['PREVIEW_TEXT']?>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
            <div class="col-12 text-right"><a href="/otzyivyi" class="callback_btn d-inline-block">Все отзывы</a></div>
        </div>
    </section>
<?endif;?>


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
?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>

<div class="triple">
    <?foreach($arResult["ITEMS"] as $arItem):?>
    <div>
        <div class="pic">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>">
            </a>
        </div>
        <div class="date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
        <div>
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?echo $arItem["PREVIEW_TEXT"];?></a>
        </div>
        <small>Страна:</small>

        <?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
            <small>
        <!-- 	<?$arProperty["NAME"]?>:&nbsp; -->
                <?if(is_array($arProperty["DISPLAY_VALUE"])):?>
                    <?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
                <?else:?>
                    <?=$arProperty["DISPLAY_VALUE"];?></a>
                <?endif?>
            </small>
            <br />
        <?endforeach;?>
    </div>

    <?endforeach;?>
</div>

<div class="center"><?=$arResult["NAV_STRING"]?></div>

<form method="POST" style="text-align:right">
    <input type="submit" name="reset" value="Сбросить фильтр">
</form>

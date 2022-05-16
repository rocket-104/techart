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


<div class="onePic">
    <img src="<?=$arResult["PREVIEW_PICTURE"]["SRC"]?>">

    <div class="date">
        <?=$arResult["DISPLAY_ACTIVE_FROM"]?>
    </div>

    <h3><?=$arResult["PREVIEW_TEXT"];?></h3>
</div>
<div class="info">
    <p><?=$arResult["DETAIL_TEXT"];?></p>
</div>
<div class="links">
<?if(is_array($arResult["TOLEFT"])):?>
   <a href="<?=$arResult["TOLEFT"]["URL"]?>">
      < <?=$arResult["TOLEFT"]["NAME"]?>
   </a>

<?endif?>

|

<?if(is_array($arResult["TORIGHT"])):?>
   <a href="<?=$arResult["TORIGHT"]["URL"]?>">
      <?=$arResult["TORIGHT"]["NAME"]?> >
   </a>
<?endif?>
<h4><a href="/hronology">Все новости</a></h4>
</div>

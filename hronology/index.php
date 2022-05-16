<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Хронология");?>

</div>

<?
if(isset($_REQUEST["COUNTRY_ID"])):
    $GLOBALS['arrFilter']['PROPERTY_PROP_COUNTRY'] = $_REQUEST["COUNTRY_ID"];
endif;
?>

<div class="center">
    <h2>
    <?
    if(isset($GLOBALS["arrFilter"]['PROPERTY_PROP_COUNTRY'])):?>
    <?
        if(CModule::IncludeModule("iblock")):
            $result = CIBlockElement::GetByID($_REQUEST["COUNTRY_ID"]);
            if($res = $result->GetNextElement()):
                $country = $res->GetFields();
                echo 'Фильтр по стране: ' . $country['NAME'];
            endif;
        endif;
    ?>
    <?else:?>
        Хронология
    <?endif?>

    </h2>
</div>

<?if(!$USER->IsAuthorized()):?>
    <?
    $GLOBALS['arrFilter']['!PROPERTY_PROP_DSP_VALUE'] = "ДСП";
    ?>
<?endif;?>

<?if(isset($_POST['reset'])):?>
    <?
    $GLOBALS['arrFilter']['PROPERTY_PROP_COUNTRY'] = [];
    ?>

<?endif;?>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"tech-news-pagination", 
	array(
		"ACTIVE_DATE_FORMAT" => "m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "N",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "N",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "PREVIEW_PICTURE",
			3 => "DATE_CREATE",
			4 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "tours",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "round",
		"PAGER_TITLE" => "Все новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PROP_COUNTRY",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "tech-news-pagination"
	),
	false
);?>



<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

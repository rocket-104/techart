<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");
?><? $APPLICATION->SetTitle("Techart");?>
<div class="videoBlock">
	<h1>
	<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "include/slogan2.php"
	)
);?> </h1>
</div>
</div>


<div class="content">
	 <div style="text-align:right">
	 <small>
	 <?$APPLICATION->IncludeComponent("bitrix:main.auth.form", "auth", Array(

	),
	false
);?></small>
	 </div>



	<div class="text">
		<h1>

		<?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "include/slogan2.php"
	)
);?> </h1>
		<div>
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "include/text1.php"
	)
);?>
		</div>
		<div>
			 <?$APPLICATION->IncludeComponent(
	"bitrix:main.include",
	"",
	Array(
		"AREA_FILE_RECURSIVE" => "Y",
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"PATH" => "include/text2.php"
	)
);?>
		</div>
	</div>
    <? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"tech-news",
	array(


		"ACTIVE_DATE_FORMAT" => "m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
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
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "Y",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "CREATED_BY",
			3 => "",
		),
		"USE_FILTER" => "Y",
        "FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "News",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK" => "Y",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "arrows",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PROP_DSP",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "TIMESTAMP_X",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "Y",
		"COMPONENT_TEMPLATE" => "tech-news"
	),
	false
);

?>

	<div class="bigImage"><img src="<?=SITE_TEMPLATE_PATH?>/images/big-image.png"></div>

<?


$inside = \TAO::frontend()->render('common/inside', [
 	'date' => '04.2022',
 	'url' => 'images/image19.jpg',
    'header' => 'Строительная 3D-печать в России',
    'text' => 'АНОНС: Долгое время драйвером рынка строительной 3D-печати во всем мире оставались производители принтеров. Именно им принадлежат первые напечатанные строения, а также инициативы в сфере разработки проектов и материалов для печати зданий и сооружений, в создании нормативной базы.',
]);

echo \TAO::frontend()->render('common/insides', [
	'headerInsides' => 'ИНСАЙТЫ, ОТЧЕТЫ, АНАЛИТИКА',
	'inside' => [$inside, $inside]
]);






/*\TAO::frontend()->render('common/content', [
	'headerInsites' => 'ИНСАЙТЫ, ОТЧЕТЫ, АНАЛИТИКА',
	'headerPublication' => 'ПУБЛИКАЦИИ, КОММЕНТАРИИ',
	'date_oneInsite' => [
            '04.2022',
            '03.2022'
            ],
	'url_oneInsite' => [
            'images/image19.jpg',
            'images/image20.jpg'
            ],
    'headerH2_oneInsite' => [
            'Строительная 3D-печать в России',
            'Проблемы импортозамещения на рынке семян'
            ],
    'text_oneInsite' => [
            'АНОНС: Долгое время драйвером рынка строительной 3D-печати во всем мире оставались производители принтеров. Именно им принадлежат первые напечатанные строения, а также инициативы в сфере разработки проектов и материалов для печати зданий и сооружений, в создании нормативной базы.',
            'АНОНС: С началом нового витка санкционной политики Запада среди российских аграриев растет обеспокоенность. Они используют преимущественно семена зарубежной селекции, которые импортируются или продаются на российском рынке через локализованные компании.'
            ],
    'url_label' => [
            'images/logo2.jpeg',
            'images/logo2.jpeg',
            'images/logo3.jpg',
            'images/logo4.jpg',
            ],
    'h3_label' => [
            'Семя качества. Смогут ли отечественные производители заместить поставки племматериала из-за рубежа',
            'Техническая зависимость: смогут ли российские производители сельхозмашин заместить импорт',
            'Выпускники есть, специалистов нет',
            'Практика внедрения ESG-принципов в строительстве',
            ],
    'h4_label' => [
            'Журнал «Агроинвестор»',
            'Журнал «Агроинвестор»',
            'Аграрная газета «Земля и Жизнь»',
            'Строительная конференция РГ ВТП 2022',
            ],
    'p_label' => [
            '4 Апреля 2022',
            '4 Апреля 2022',
            '1 Апреля 2022',
            '29 Марта 2022',
            ],
]);
*/
?>



        </div>

<?//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("");?><? $APPLICATION->SetTitle("Techart");?>
<div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu",
	"tech-menu1",
	Array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "submenu",
		"COMPONENT_TEMPLATE" => "tech-menu1",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	)
);?>
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

	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"tech-news",
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
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "N",
		"DETAIL_URL" => "#SECTION_CODE#/#ID#",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "PREVIEW_TEXT",
			1 => "PREVIEW_PICTURE",
			2 => "CREATED_BY",
			3 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "News",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "6",
		"PAGER_BASE_LINK" => "",
		"PAGER_BASE_LINK_ENABLE" => "Y",
		"PAGER_DESC_NUMBERING" => "Y",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_PARAMS_NAME" => "arrPager",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "arrows",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ID",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "tech-news"
	),
	false
);?>
	<div class="bigImage"><img src="<?=SITE_TEMPLATE_PATH?>/images/big-image.png"></div>
            <div class="double">
                <div class="insite">
                    <a href="#">ИНСАЙТЫ, ОТЧЕТЫ, АНАЛИТИКА</a>
                    <div class="line">
                        <div class="block">
                            <div class="pic" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/images/image19.jpg);">
                                <div class="date">04.2022</div>
                            </div>
                            <div>
                                <h2><a href="#">Строительная 3D-печать в России</a></h2>
                                <p>АНОНС: Долгое время драйвером рынка строительной 3D-печати во всем мире оставались производители принтеров. Именно им принадлежат первые напечатанные строения, а также инициативы в сфере разработки проектов и материалов для печати зданий и сооружений, в создании нормативной базы.</p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="pic" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/images/image20.jpg);">
                                <div class="date">03.2022</div>
                            </div>
                            <div>
                                <h2><a href="#">Проблемы импортозамещения на рынке семян</a></h2>
                                <p>АНОНС: С началом нового витка санкционной политики Запада среди российских аграриев растет обеспокоенность. Они используют преимущественно семена зарубежной селекции, которые импортируются или продаются на российском рынке через локализованные компании.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="public">
                    <a href="#">ПУБЛИКАЦИИ, КОММЕНТАРИИ</a>
                    <div class="line">
                        <div>
                            <div class="label" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/images/logo2.jpeg);"></div>
                            <div class="pub">
                                <h3><a href="#">Семя качества. Смогут ли отечественные производители заместить поставки племматериала из-за рубежа</a></h3>
                                <h4>Журнал «Агроинвестор»</h4>
                                <p>4 Апреля 2022</p>
                            </div>
                        </div>
                        <div>
                            <div class="label" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/images/logo2.jpeg);"></div>
                            <div class="pub">
                                <h3><a href="#">Техническая зависимость: смогут ли российские производители сельхозмашин заместить импорт</a></h3>
                                <h4>Журнал «Агроинвестор»</h4>
                                <p>4 Апреля 2022</p>
                            </div>
                        </div>
                        <div>
                            <div class="label" style="background-image:url(<?=SITE_TEMPLATE_PATH?>/images/logo3.jpg);"></div>
                            <div class="pub">
                                <h3><a href="#">Выпускники есть, специалистов нет</a></h3>
                                <h4>Аграрная газета «Земля и Жизнь»</h4>
                                <p>1 Апреля 2022</p>
                            </div>
                        </div>
                        <div>
                            <div class="label" style="background-image:url(images/logo4.jpg);"></div>
                            <div class="pub">
                                <h3><a href="#">Практика внедрения ESG-принципов в строительстве</a></h3>
                                <h4>Строительная конференция РГ ВТП 2022</h4>
                                <p>29 Марта 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

\TAO::frontendCss('index');
\TAO::frontendJs('index');


IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <?$APPLICATION->ShowHead();?>
        <title><?$APPLICATION->ShowTitle()?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/styles.css");?>
        <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/styles-adaptive.css");?>
        <?Asset::getInstance()->addCss(SITE_TEMPLATE_PATH ."/css/font-awesome.min.css");?>



    </head>

    <body>
        <header>
            <div class="logo">
                <div><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo1.png"></a></div>
                <div>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_RECURSIVE" => "Y",
                        "AREA_FILE_SHOW" => "file",
                        "AREA_FILE_SUFFIX" => "inc",
                        "EDIT_TEMPLATE" => "",
                        "PATH" => SITE_DIR."/include/slogan1.php",

                    )
                );?>
                </div>
            </div>
            <div class="space"></div>
            <div class="subheader">
                <div>
                    <a href="#">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_DIR."/include/telephone.php"
                        )
                    );?>

                    </a>
                    <a>|</a>
                    <a href>
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:main.include",
                        "",
                        Array(
                            "AREA_FILE_RECURSIVE" => "Y",
                            "AREA_FILE_SHOW" => "file",
                            "AREA_FILE_SUFFIX" => "inc",
                            "EDIT_TEMPLATE" => "",
                            "PATH" => SITE_DIR."/include/mail.php"
                        )
                    );?>
                    </a>
                </div>
                <div class="click1">
					<span><a href="#" class="a"><img src="<?=SITE_TEMPLATE_PATH?>/images/ru.png"> РУ</a></span>
					<span><i class="fa fa-angle-down a norot" aria-hidden="true" id="angle1"></i></span>
					<div class="lang">
						<div><a href="#" class="a"><img src="<?=SITE_TEMPLATE_PATH?>/images/en.png"> EN</a></div>
						<div><a href="#" class="a"><img src="<?=SITE_TEMPLATE_PATH?>/images/cn.png"> 中文 </a></div>
					</div>
				</div>

                <div><i class="fa fa-bars" aria-hidden="true"></i>
</div>
            </div>
        </header>
<div class="container">
	 <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"tech-menu1", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "submenu",
		"COMPONENT_TEMPLATE" => "tech-menu1",
		"DELAY" => "N",
		"MAX_LEVEL" => "2",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "N",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "Y"
	),
	false
);?>

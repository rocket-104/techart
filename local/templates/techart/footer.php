<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
use Bitrix\Main\Page\Asset;

?>

<footer>
            <div class="copyright">
                <p>© Консалтинговая группа «Текарт»</p>

                <p><a href="#">Политика в отношении обработки персональных данных</a></p>
            </div>
            <div class="allSites"><a>Все сайты подразделений</a><i class="fa fa-angle-down norot" aria-hidden="true" id="angle2"></i>
                <div class="click2">
                    <p><a href="#">Маркетинговые исследования</a></p>
                    <p><a href="#">Брендинг</a></p>
                    <p><a href="#">Графический дизайн</a></p>
                    <p><a href="#">Интернет решения</a></p>
                    <p><a href="#">Интернет-маркетинг</a></p>
                    <p><a href="#">Рекламное агентство</a></p>
                    <p><a href="#">Фотоагентство Фотобанк</a></p>
                </div>
            </div>

            <div class="subscribe">
                Подписаться на новости
                <div><input type="email" class="email"></div>
                <div><input type="submit" class="submit"></div>
            </div>
            <div class="contacts">
                <div class="adress">
                    <p>
                    <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "",
                            Array(
                                "AREA_FILE_RECURSIVE" => "Y",
                                "AREA_FILE_SHOW" => "file",
                                "AREA_FILE_SUFFIX" => "inc",
                                "EDIT_TEMPLATE" => "",
                                "PATH" => SITE_DIR."/include/adress.php"
                            )
                        );?>
                    </p>
                    <p>
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
                    </p>
                </div>
                <div class="social">
                    <div><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></div>
                    <div><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
                    <div><a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a></div>
                </div>
            </div>
        </footer>
    </body>
</html>
<?Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/scripts/click.js'); ?>


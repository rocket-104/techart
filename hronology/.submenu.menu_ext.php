<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if ($countries = \TAO::infoblock('countries')){
    $rows = $countries->getRows($args);
    $aMenuLinks = [];
    foreach ($rows as $row){
        $menuItem = [];
        $menuItem[] = urldecode($row['NAME']);
        $menuItem[] = urldecode($row['DETAIL_PAGE_URL']);
        $menuItem[] =  "";
        $aMenuLinks[] =  $menuItem;
    }
}

<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/hronology/filter-by-country-([0-9]+)/#',
    'RULE' => 'COUNTRY_ID=$1',
    'ID' => '',
    'PATH' => '/hronology/index.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/catalog/([0-9]+)/#',
    'RULE' => 'ELEMENT_ID=$1',
    'ID' => '',
    'PATH' => '/catalog/detail.php',
    'SORT' => 100,
  ),
  3 => 
  array (
    'CONDITION' => '#^/personal/#',
    'RULE' => '',
    'ID' => '',
    'PATH' => '/personal/basket.php',
    'SORT' => 100,
  ),
  4 => 
  array (
    'CONDITION' => '#^/tours/#',
    'RULE' => '',
    'ID' => 'bitrix:catalog',
    'PATH' => '/tours/index.php',
    'SORT' => 100,
  ),
);

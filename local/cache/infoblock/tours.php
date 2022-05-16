<?php
	namespace TAO\CachedInfoblock;
use TAO\Infoblock;

/* infoblock ID=1, code=PROP_PRICE */
class tours extends Infoblock
{
public function title()
{
return 'Туры';
}

    public function sites()
    {
        return array('s1');
    }

public function access()
{
return array(
            1 => 'X',
            2 => 'R',
        );
}

	public function data()
	{
	return array(
            'REST_ON' => 'N',
            'LIST_PAGE_URL' => '#SITE_DIR#/',
            'DETAIL_PAGE_URL' => '#SITE_DIR#/tours/catalog/#ELEMENT_CODE#/',
            'SECTION_PAGE_URL' => '#SITE_DIR#/SECTION_CODE#/',
            'TMP_ID' => '2d017ce06a560f2f0a05b90db955d278',
            'INDEX_SECTION' => 'Y',
            'WORKFLOW' => 'N',
            'SECTION_PROPERTY' => 'Y',
            'PROPERTY_INDEX' => 'I',
            'SECTIONS_NAME' => 'Разделы туров',
            'SECTION_NAME' => 'Раздел туров',
        );
	}

public function messages()
{
return array(
            'ELEMENT_NAME' => 'Тур',
            'ELEMENTS_NAME' => 'Туры',
            'ELEMENT_ADD' => 'Добавить тур',
            'ELEMENT_EDIT' => 'Изменить тур',
            'ELEMENT_DELETE' => 'Удалить тур',
            'SECTION_NAME' => 'Раздел туров',
            'SECTIONS_NAME' => 'Разделы туров',
            'SECTION_ADD' => 'Добавить раздел туров',
            'SECTION_EDIT' => 'Изменить раздел туров',
            'SECTION_DELETE' => 'Удалить раздел туров',
        );
}

	public function fields()
	{
	return array(
            'IBLOCK_SECTION' => array(
                'NAME' => 'Привязка к разделам',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'KEEP_IBLOCK_SECTION_ID' => 'N',
                ),
            ),
            'ACTIVE' => array(
                'NAME' => 'Активность',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => 'Y',
            ),
            'ACTIVE_FROM' => array(
                'NAME' => 'Начало активности',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'ACTIVE_TO' => array(
                'NAME' => 'Окончание активности',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'SORT' => array(
                'NAME' => 'Сортировка',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '0',
            ),
            'NAME' => array(
                'NAME' => 'Название',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => '',
            ),
            'PREVIEW_PICTURE' => array(
                'NAME' => 'Картинка для анонса',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'FROM_DETAIL' => 'Y',
                    'SCALE' => 'Y',
                    'WIDTH' => '350',
                    'HEIGHT' => '150',
                    'IGNORE_ERRORS' => 'Y',
                    'METHOD' => '',
                    'COMPRESSION' => '95',
                    'DELETE_WITH_DETAIL' => 'Y',
                    'UPDATE_WITH_DETAIL' => 'Y',
                    'USE_WATERMARK_TEXT' => 'N',
                    'WATERMARK_TEXT' => '',
                    'WATERMARK_TEXT_FONT' => '',
                    'WATERMARK_TEXT_COLOR' => '',
                    'WATERMARK_TEXT_SIZE' => '',
                    'WATERMARK_TEXT_POSITION' => 'tl',
                    'USE_WATERMARK_FILE' => 'N',
                    'WATERMARK_FILE' => '',
                    'WATERMARK_FILE_ALPHA' => '',
                    'WATERMARK_FILE_POSITION' => 'tl',
                    'WATERMARK_FILE_ORDER' => '',
                ),
            ),
            'PREVIEW_TEXT_TYPE' => array(
                'NAME' => 'Тип описания для анонса',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => 'text',
            ),
            'PREVIEW_TEXT' => array(
                'NAME' => 'Описание для анонса',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'DETAIL_PICTURE' => array(
                'NAME' => 'Детальная картинка',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'SCALE' => 'Y',
                    'WIDTH' => '500',
                    'HEIGHT' => '200',
                    'IGNORE_ERRORS' => 'Y',
                    'METHOD' => 'resample',
                    'COMPRESSION' => '95',
                    'USE_WATERMARK_TEXT' => 'N',
                    'WATERMARK_TEXT' => '',
                    'WATERMARK_TEXT_FONT' => '',
                    'WATERMARK_TEXT_COLOR' => '',
                    'WATERMARK_TEXT_SIZE' => '',
                    'WATERMARK_TEXT_POSITION' => 'tl',
                    'USE_WATERMARK_FILE' => 'N',
                    'WATERMARK_FILE' => '',
                    'WATERMARK_FILE_ALPHA' => '',
                    'WATERMARK_FILE_POSITION' => 'tl',
                    'WATERMARK_FILE_ORDER' => '',
                ),
            ),
            'DETAIL_TEXT_TYPE' => array(
                'NAME' => 'Тип детального описания',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => 'text',
            ),
            'DETAIL_TEXT' => array(
                'NAME' => 'Детальное описание',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'XML_ID' => array(
                'NAME' => 'Внешний код',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => '',
            ),
            'CODE' => array(
                'NAME' => 'Символьный код',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => array(
                    'UNIQUE' => 'Y',
                    'TRANSLITERATION' => 'Y',
                    'TRANS_LEN' => '100',
                    'TRANS_CASE' => 'L',
                    'TRANS_SPACE' => '-',
                    'TRANS_OTHER' => '-',
                    'TRANS_EAT' => 'Y',
                    'USE_GOOGLE' => 'N',
                ),
            ),
            'TAGS' => array(
                'NAME' => 'Теги',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'SECTION_NAME' => array(
                'NAME' => 'Название',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => '',
            ),
            'SECTION_PICTURE' => array(
                'NAME' => 'Картинка для анонса',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'FROM_DETAIL' => 'Y',
                    'SCALE' => 'Y',
                    'WIDTH' => '',
                    'HEIGHT' => '150',
                    'IGNORE_ERRORS' => 'N',
                    'METHOD' => '',
                    'COMPRESSION' => '95',
                    'DELETE_WITH_DETAIL' => 'Y',
                    'UPDATE_WITH_DETAIL' => 'Y',
                    'USE_WATERMARK_TEXT' => 'N',
                    'WATERMARK_TEXT' => '',
                    'WATERMARK_TEXT_FONT' => '',
                    'WATERMARK_TEXT_COLOR' => '',
                    'WATERMARK_TEXT_SIZE' => '',
                    'WATERMARK_TEXT_POSITION' => 'tl',
                    'USE_WATERMARK_FILE' => 'N',
                    'WATERMARK_FILE' => '',
                    'WATERMARK_FILE_ALPHA' => '',
                    'WATERMARK_FILE_POSITION' => 'tl',
                    'WATERMARK_FILE_ORDER' => '',
                ),
            ),
            'SECTION_DESCRIPTION_TYPE' => array(
                'NAME' => 'Тип описания',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => 'text',
            ),
            'SECTION_DESCRIPTION' => array(
                'NAME' => 'Описание',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'SECTION_DETAIL_PICTURE' => array(
                'NAME' => 'Детальная картинка',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => array(
                    'SCALE' => 'Y',
                    'WIDTH' => '',
                    'HEIGHT' => '200',
                    'IGNORE_ERRORS' => 'N',
                    'METHOD' => '',
                    'COMPRESSION' => '95',
                    'USE_WATERMARK_TEXT' => 'N',
                    'WATERMARK_TEXT' => '',
                    'WATERMARK_TEXT_FONT' => '',
                    'WATERMARK_TEXT_COLOR' => '',
                    'WATERMARK_TEXT_SIZE' => '',
                    'WATERMARK_TEXT_POSITION' => 'tl',
                    'USE_WATERMARK_FILE' => 'N',
                    'WATERMARK_FILE' => '',
                    'WATERMARK_FILE_ALPHA' => '',
                    'WATERMARK_FILE_POSITION' => 'tl',
                    'WATERMARK_FILE_ORDER' => '',
                ),
            ),
            'SECTION_XML_ID' => array(
                'NAME' => 'Внешний код',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'SECTION_CODE' => array(
                'NAME' => 'Символьный код',
                'IS_REQUIRED' => 'Y',
                'DEFAULT_VALUE' => array(
                    'UNIQUE' => 'Y',
                    'TRANSLITERATION' => 'Y',
                    'TRANS_LEN' => '100',
                    'TRANS_CASE' => 'L',
                    'TRANS_SPACE' => '-',
                    'TRANS_OTHER' => '-',
                    'TRANS_EAT' => 'Y',
                    'USE_GOOGLE' => 'N',
                ),
            ),
            'LOG_SECTION_ADD' => array(
                'NAME' => 'LOG_SECTION_ADD',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_SECTION_EDIT' => array(
                'NAME' => 'LOG_SECTION_EDIT',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_SECTION_DELETE' => array(
                'NAME' => 'LOG_SECTION_DELETE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_ELEMENT_ADD' => array(
                'NAME' => 'LOG_ELEMENT_ADD',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_ELEMENT_EDIT' => array(
                'NAME' => 'LOG_ELEMENT_EDIT',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'LOG_ELEMENT_DELETE' => array(
                'NAME' => 'LOG_ELEMENT_DELETE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
            ),
            'XML_IMPORT_START_TIME' => array(
                'NAME' => 'XML_IMPORT_START_TIME',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => '',
                'VISIBLE' => 'N',
            ),
            'DETAIL_TEXT_TYPE_ALLOW_CHANGE' => array(
                'NAME' => 'DETAIL_TEXT_TYPE_ALLOW_CHANGE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => 'N',
                'VISIBLE' => 'N',
            ),
            'PREVIEW_TEXT_TYPE_ALLOW_CHANGE' => array(
                'NAME' => 'PREVIEW_TEXT_TYPE_ALLOW_CHANGE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => 'N',
                'VISIBLE' => 'N',
            ),
            'SECTION_DESCRIPTION_TYPE_ALLOW_CHANGE' => array(
                'NAME' => 'SECTION_DESCRIPTION_TYPE_ALLOW_CHANGE',
                'IS_REQUIRED' => 'N',
                'DEFAULT_VALUE' => 'N',
                'VISIBLE' => 'N',
            ),
        );
	}

public function properties()
{
return array(
            'PROP_COUNTRY' => array(
                'NAME' => 'Страны',
                'PROPERTY_TYPE' => 'E',
                'MULTIPLE' => 'Y',
                'MULTIPLE_CNT' => '3',
                'LINK_IBLOCK_ID' => '2',
                'FILTRABLE' => 'Y',
            ),
            'PROP_THEMS' => array(
                'NAME' => 'Тематика',
                'PROPERTY_TYPE' => 'E',
                'LINK_IBLOCK_ID' => '3',
                'FILTRABLE' => 'Y',
            ),
            'PROP_TYPE' => array(
                'NAME' => 'Тип',
                'PROPERTY_TYPE' => 'L',
                'SEARCHABLE' => 'Y',
                'ITEMS' => array(
                    '79e462b6b7b5af73571f3c237cfb19ec' => 'Автобусный',
                    '84de51452cedde293dbf714ba9bf93d4' => 'Конный',
                    '0930dfcef5626662face4b1e05a01ee1' => 'Морской',
                    'e95b7bfd0a02f164f04b1d8202fd861f' => 'Пеший',
                ),
            ),
            'PROP_HOT' => array(
                'NAME' => 'Горящий',
                'PROPERTY_TYPE' => 'L',
                'SEARCHABLE' => 'Y',
                'ITEMS' => array(
                    '059bb7890fbd431f4debfd642fe608d5' => 'Да',
                    'ba760aacfa15f955b6727fe7fcb56590' => array(
                        'VALUE' => 'Нет',
                        'DEF' => 'Y',
                    ),
                ),
            ),
            'PROP_PRICE' => array(
                'NAME' => 'Цена',
                'PROPERTY_TYPE' => 'N',
                'COL_COUNT' => '20',
                'SEARCHABLE' => 'Y',
                'FILTRABLE' => 'Y',
                'IS_REQUIRED' => 'Y',
            ),
        );
}
}

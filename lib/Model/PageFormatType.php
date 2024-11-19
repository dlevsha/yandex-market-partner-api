<?php
/**
 * PageFormatType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.10.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * PageFormatType Class Doc Comment
 *
 * @category Class
 * @description Размещение ярлыков на странице: * &#x60;A9&#x60; — в PDF-файле будут страницы формата, близкому к A9. На каждой странице размещается ярлык размером 58 × 40 мм без полей. Доступен только для продавцов из России.    {% cut \&quot;Пример ярлыка\&quot; %}    ![Изображение ярлыка формата A9](../../_images/label-A9.png)    {% endcut %}  * &#x60;A7&#x60; — в PDF-файле будут страницы формата, близкому к A7. На каждой странице размещается ярлык размером 120 × 75 мм (125,6 × 80,4 мм с учетом полей).    {% cut \&quot;Пример ярлыка\&quot; %}    ![Изображение ярлыка формата A7](../../_images/label-A7.jpg)    {% endcut %}  * &#x60;A4&#x60; — в PDF-файле будут страницы формата A4. На каждой странице размещаются восемь ярлыков размером 99,1 × 70,6 мм без полей.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PageFormatType
{
    /**
     * Possible values of this enum
     */
    public const A9 = 'A9';

    public const A7 = 'A7';

    public const A4 = 'A4';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::A9,
            self::A7,
            self::A4
        ];
    }
}



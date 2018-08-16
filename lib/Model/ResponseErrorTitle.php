<?php
/**
 * ResponseErrorTitle
 *
 * PHP version 5
 *
 * @category Class
 * @package  Messente\Omnichannel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Omnichannel API
 *
 * This is the beta version of Omnichannel API
 *
 * OpenAPI spec version: 0.0.1
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Omnichannel\Model;
use \Messente\Omnichannel\ObjectSerializer;

/**
 * ResponseErrorTitle Class Doc Comment
 *
 * @category Class
 * @description Textual value which corresponds to ResponseErrorCode
 * @package  Messente\Omnichannel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResponseErrorTitle
{
    /**
     * Possible values of this enum
     */
    const NOT_FOUND = 'Not found';
    const FORBIDDEN = 'Forbidden';
    const UNAUTHORIZED = 'Unauthorized';
    const INVALID_DATA = 'Invalid data';
    const INTERNAL_SERVER_ERROR = 'Internal Server Error';
    const MISSING_DATA = 'Missing data';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NOT_FOUND,
            self::FORBIDDEN,
            self::UNAUTHORIZED,
            self::INVALID_DATA,
            self::INTERNAL_SERVER_ERROR,
            self::MISSING_DATA,
        ];
    }
}



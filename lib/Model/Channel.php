<?php
/**
 * Channel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Messente\Omnichannel
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Omnichannel API
 *
 * This is the beta version of Omnichannel API
 *
 * OpenAPI spec version: 0.0.1
 * Contact: messente@messente.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Messente\Omnichannel\Model;

/**
 * Channel Class Doc Comment
 *
 * @category    Class
 * @description Defines the delivery channel
 * @package     Messente\Omnichannel
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Channel
{
    /**
     * Possible values of this enum
     */
    const SMS = 'sms';
    const VIBER = 'viber';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SMS,
            self::VIBER,
        ];
    }
}



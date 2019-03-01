<?php
/**
 * Status
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
 * Messente's API which allows sending messages via various channels with fallback options.
 *
 * OpenAPI spec version: 0.0.2
 * Contact: messente@messente.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.4
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Omnichannel\Model;
use \Messente\Omnichannel\ObjectSerializer;

/**
 * Status Class Doc Comment
 *
 * @category Class
 * @description The human-readable equivalent for this field is contained in \&quot;error\&quot;. This value is *null* if the message is still being processed.
 * @package  Messente\Omnichannel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Status
{
    /**
     * Possible values of this enum
     */
    const ACK = 'ACK';
    const DELIVRD = 'DELIVRD';
    const UNDELIV = 'UNDELIV';
    const FAILED = 'FAILED';
    const UNKNOWN = 'UNKNOWN';
    const ACCEPTD = 'ACCEPTD';
    const REJECTD = 'REJECTD';
    const DELETED = 'DELETED';
    const EXPIRED = 'EXPIRED';
    const NACK = 'NACK';
    const SEEN = 'SEEN';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ACK,
            self::DELIVRD,
            self::UNDELIV,
            self::FAILED,
            self::UNKNOWN,
            self::ACCEPTD,
            self::REJECTD,
            self::DELETED,
            self::EXPIRED,
            self::NACK,
            self::SEEN,
        ];
    }
}



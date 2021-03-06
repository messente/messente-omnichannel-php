<?php
/**
 * SMS
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
 * OpenAPI Generator version: 4.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Messente\Omnichannel\Model;

use \ArrayAccess;
use \Messente\Omnichannel\ObjectSerializer;

/**
 * SMS Class Doc Comment
 *
 * @category Class
 * @description SMS message content
 * @package  Messente\Omnichannel
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SMS implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SMS';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sender' => 'string',
        'validity' => 'int',
        'text' => 'string',
        'autoconvert' => 'string',
        'udh' => 'string',
        'channel' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'sender' => null,
        'validity' => null,
        'text' => null,
        'autoconvert' => null,
        'udh' => null,
        'channel' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'sender' => 'sender',
        'validity' => 'validity',
        'text' => 'text',
        'autoconvert' => 'autoconvert',
        'udh' => 'udh',
        'channel' => 'channel'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sender' => 'setSender',
        'validity' => 'setValidity',
        'text' => 'setText',
        'autoconvert' => 'setAutoconvert',
        'udh' => 'setUdh',
        'channel' => 'setChannel'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sender' => 'getSender',
        'validity' => 'getValidity',
        'text' => 'getText',
        'autoconvert' => 'getAutoconvert',
        'udh' => 'getUdh',
        'channel' => 'getChannel'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const AUTOCONVERT_FULL = 'full';
    const AUTOCONVERT_ON = 'on';
    const AUTOCONVERT_OFF = 'off';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAutoconvertAllowableValues()
    {
        return [
            self::AUTOCONVERT_FULL,
            self::AUTOCONVERT_ON,
            self::AUTOCONVERT_OFF,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['sender'] = isset($data['sender']) ? $data['sender'] : null;
        $this->container['validity'] = isset($data['validity']) ? $data['validity'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['autoconvert'] = isset($data['autoconvert']) ? $data['autoconvert'] : null;
        $this->container['udh'] = isset($data['udh']) ? $data['udh'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : 'sms';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        $allowedValues = $this->getAutoconvertAllowableValues();
        if (!is_null($this->container['autoconvert']) && !in_array($this->container['autoconvert'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'autoconvert', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets sender
     *
     * @return string|null
     */
    public function getSender()
    {
        return $this->container['sender'];
    }

    /**
     * Sets sender
     *
     * @param string|null $sender Phone number or alphanumeric sender name
     *
     * @return $this
     */
    public function setSender($sender)
    {
        $this->container['sender'] = $sender;

        return $this;
    }

    /**
     * Gets validity
     *
     * @return int|null
     */
    public function getValidity()
    {
        return $this->container['validity'];
    }

    /**
     * Sets validity
     *
     * @param int|null $validity After how many minutes this channel is considered as failed and the next channel is attempted
     *
     * @return $this
     */
    public function setValidity($validity)
    {
        $this->container['validity'] = $validity;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Text content of the SMS
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets autoconvert
     *
     * @return string|null
     */
    public function getAutoconvert()
    {
        return $this->container['autoconvert'];
    }

    /**
     * Sets autoconvert
     *
     * @param string|null $autoconvert Defines how non-GSM characters will be treated: - \"on\" Use replacement settings from the account's [API Auto Replace settings page](https://dashboard.messente.com/api-settings/auto-replace)(default) - \"full\" All non GSM 03.38 characters will be replaced with suitable alternatives - \"off\" Message content is not modified in any way
     *
     * @return $this
     */
    public function setAutoconvert($autoconvert)
    {
        $allowedValues = $this->getAutoconvertAllowableValues();
        if (!is_null($autoconvert) && !in_array($autoconvert, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'autoconvert', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['autoconvert'] = $autoconvert;

        return $this;
    }

    /**
     * Gets udh
     *
     * @return string|null
     */
    public function getUdh()
    {
        return $this->container['udh'];
    }

    /**
     * Sets udh
     *
     * @param string|null $udh hex-encoded string containing SMS UDH
     *
     * @return $this
     */
    public function setUdh($udh)
    {
        $this->container['udh'] = $udh;

        return $this;
    }

    /**
     * Gets channel
     *
     * @return string|null
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     *
     * @param string|null $channel channel
     *
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}



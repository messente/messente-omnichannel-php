<?php
/**
 * DeliveryResult
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

use \ArrayAccess;

/**
 * DeliveryResult Class Doc Comment
 *
 * @category    Class
 * @package     Messente\Omnichannel
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DeliveryResult implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DeliveryResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => '\Messente\Omnichannel\Model\Status',
        'channel' => '\Messente\Omnichannel\Model\Channel',
        'messageId' => 'string',
        'error' => 'string',
        'err' => '\Messente\Omnichannel\Model\Err'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'channel' => null,
        'messageId' => 'uuid',
        'error' => null,
        'err' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'status' => 'status',
        'channel' => 'channel',
        'messageId' => 'message_id',
        'error' => 'error',
        'err' => 'err'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'channel' => 'setChannel',
        'messageId' => 'setMessageId',
        'error' => 'setError',
        'err' => 'setErr'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'channel' => 'getChannel',
        'messageId' => 'getMessageId',
        'error' => 'getError',
        'err' => 'getErr'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['channel'] = isset($data['channel']) ? $data['channel'] : null;
        $this->container['messageId'] = isset($data['messageId']) ? $data['messageId'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['err'] = isset($data['err']) ? $data['err'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets status
     * @return \Messente\Omnichannel\Model\Status
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param \Messente\Omnichannel\Model\Status $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets channel
     * @return \Messente\Omnichannel\Model\Channel
     */
    public function getChannel()
    {
        return $this->container['channel'];
    }

    /**
     * Sets channel
     * @param \Messente\Omnichannel\Model\Channel $channel
     * @return $this
     */
    public function setChannel($channel)
    {
        $this->container['channel'] = $channel;

        return $this;
    }

    /**
     * Gets messageId
     * @return string
     */
    public function getMessageId()
    {
        return $this->container['messageId'];
    }

    /**
     * Sets messageId
     * @param string $messageId Unique identifier for the message
     * @return $this
     */
    public function setMessageId($messageId)
    {
        $this->container['messageId'] = $messageId;

        return $this;
    }

    /**
     * Gets error
     * @return string
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param string $error Human-readable description of what went wrong, *null* in case of success or if the messages has not been processed yet
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets err
     * @return \Messente\Omnichannel\Model\Err
     */
    public function getErr()
    {
        return $this->container['err'];
    }

    /**
     * Sets err
     * @param \Messente\Omnichannel\Model\Err $err
     * @return $this
     */
    public function setErr($err)
    {
        $this->container['err'] = $err;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Messente\Omnichannel\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Messente\Omnichannel\ObjectSerializer::sanitizeForSerialization($this));
    }
}


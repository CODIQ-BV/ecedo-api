<?php
/**
 * EcedoERPCRMInterfaceApiAdvanceAgreedPaymentPerConnection
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ecedo.ERP.UI.Web
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.22
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * EcedoERPCRMInterfaceApiAdvanceAgreedPaymentPerConnection Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiAdvanceAgreedPaymentPerConnection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.AdvanceAgreedPaymentPerConnection';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'connection_id' => 'string',
        'amount' => 'double',
        'agreed_amount' => 'double',
        'target_amount' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'connection_id' => null,
        'amount' => 'double',
        'agreed_amount' => 'double',
        'target_amount' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'connection_id' => 'ConnectionId',
        'amount' => 'Amount',
        'agreed_amount' => 'AgreedAmount',
        'target_amount' => 'TargetAmount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connection_id' => 'setConnectionId',
        'amount' => 'setAmount',
        'agreed_amount' => 'setAgreedAmount',
        'target_amount' => 'setTargetAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connection_id' => 'getConnectionId',
        'amount' => 'getAmount',
        'agreed_amount' => 'getAgreedAmount',
        'target_amount' => 'getTargetAmount'
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
        return self::$swaggerModelName;
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
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['agreed_amount'] = isset($data['agreed_amount']) ? $data['agreed_amount'] : null;
        $this->container['target_amount'] = isset($data['target_amount']) ? $data['target_amount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets connection_id
     *
     * @return string
     */
    public function getConnectionId()
    {
        return $this->container['connection_id'];
    }

    /**
     * Sets connection_id
     *
     * @param string $connection_id connection_id
     *
     * @return $this
     */
    public function setConnectionId($connection_id)
    {
        $this->container['connection_id'] = $connection_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount Obsolete: Dit veld is vervangen door AgreedAmount, zodat het verschil met TargetAmount duidelijk zichtbaar is
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets agreed_amount
     *
     * @return double
     */
    public function getAgreedAmount()
    {
        return $this->container['agreed_amount'];
    }

    /**
     * Sets agreed_amount
     *
     * @param double $agreed_amount agreed_amount
     *
     * @return $this
     */
    public function setAgreedAmount($agreed_amount)
    {
        $this->container['agreed_amount'] = $agreed_amount;

        return $this;
    }

    /**
     * Gets target_amount
     *
     * @return double
     */
    public function getTargetAmount()
    {
        return $this->container['target_amount'];
    }

    /**
     * Sets target_amount
     *
     * @param double $target_amount target_amount
     *
     * @return $this
     */
    public function setTargetAmount($target_amount)
    {
        $this->container['target_amount'] = $target_amount;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}



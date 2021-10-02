<?php
/**
 * EcedoERPCRMInterfaceGDPRReadingPosition
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
 * EcedoERPCRMInterfaceGDPRReadingPosition Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceGDPRReadingPosition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.GDPR.ReadingPosition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'high_position' => 'int',
        'low_position' => 'int',
        'single_position' => 'int',
        'gas_position' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'high_position' => 'int32',
        'low_position' => 'int32',
        'single_position' => 'int32',
        'gas_position' => 'int32'
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
        'high_position' => 'HighPosition',
        'low_position' => 'LowPosition',
        'single_position' => 'SinglePosition',
        'gas_position' => 'GasPosition'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'high_position' => 'setHighPosition',
        'low_position' => 'setLowPosition',
        'single_position' => 'setSinglePosition',
        'gas_position' => 'setGasPosition'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'high_position' => 'getHighPosition',
        'low_position' => 'getLowPosition',
        'single_position' => 'getSinglePosition',
        'gas_position' => 'getGasPosition'
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
        $this->container['high_position'] = isset($data['high_position']) ? $data['high_position'] : null;
        $this->container['low_position'] = isset($data['low_position']) ? $data['low_position'] : null;
        $this->container['single_position'] = isset($data['single_position']) ? $data['single_position'] : null;
        $this->container['gas_position'] = isset($data['gas_position']) ? $data['gas_position'] : null;
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
     * Gets high_position
     *
     * @return int
     */
    public function getHighPosition()
    {
        return $this->container['high_position'];
    }

    /**
     * Sets high_position
     *
     * @param int $high_position high_position
     *
     * @return $this
     */
    public function setHighPosition($high_position)
    {
        $this->container['high_position'] = $high_position;

        return $this;
    }

    /**
     * Gets low_position
     *
     * @return int
     */
    public function getLowPosition()
    {
        return $this->container['low_position'];
    }

    /**
     * Sets low_position
     *
     * @param int $low_position low_position
     *
     * @return $this
     */
    public function setLowPosition($low_position)
    {
        $this->container['low_position'] = $low_position;

        return $this;
    }

    /**
     * Gets single_position
     *
     * @return int
     */
    public function getSinglePosition()
    {
        return $this->container['single_position'];
    }

    /**
     * Sets single_position
     *
     * @param int $single_position single_position
     *
     * @return $this
     */
    public function setSinglePosition($single_position)
    {
        $this->container['single_position'] = $single_position;

        return $this;
    }

    /**
     * Gets gas_position
     *
     * @return int
     */
    public function getGasPosition()
    {
        return $this->container['gas_position'];
    }

    /**
     * Sets gas_position
     *
     * @param int $gas_position gas_position
     *
     * @return $this
     */
    public function setGasPosition($gas_position)
    {
        $this->container['gas_position'] = $gas_position;

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



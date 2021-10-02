<?php
/**
 * EcedoERPCRMInterfaceServicesOCPIOcpiConnector
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
 * EcedoERPCRMInterfaceServicesOCPIOcpiConnector Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceServicesOCPIOcpiConnector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Services.OCPI.OcpiConnector';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'connector_type' => 'string',
        'power_type' => 'string',
        'connector_format' => 'string',
        'evse_id' => 'string',
        'emi3_id' => 'string',
        'voltage' => 'double',
        'amperage' => 'double',
        'status' => 'string',
        'power' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'connector_type' => null,
        'power_type' => null,
        'connector_format' => null,
        'evse_id' => null,
        'emi3_id' => null,
        'voltage' => 'double',
        'amperage' => 'double',
        'status' => null,
        'power' => 'double'
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
        'connector_type' => 'ConnectorType',
        'power_type' => 'PowerType',
        'connector_format' => 'ConnectorFormat',
        'evse_id' => 'EvseId',
        'emi3_id' => 'Emi3Id',
        'voltage' => 'Voltage',
        'amperage' => 'Amperage',
        'status' => 'Status',
        'power' => 'Power'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connector_type' => 'setConnectorType',
        'power_type' => 'setPowerType',
        'connector_format' => 'setConnectorFormat',
        'evse_id' => 'setEvseId',
        'emi3_id' => 'setEmi3Id',
        'voltage' => 'setVoltage',
        'amperage' => 'setAmperage',
        'status' => 'setStatus',
        'power' => 'setPower'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connector_type' => 'getConnectorType',
        'power_type' => 'getPowerType',
        'connector_format' => 'getConnectorFormat',
        'evse_id' => 'getEvseId',
        'emi3_id' => 'getEmi3Id',
        'voltage' => 'getVoltage',
        'amperage' => 'getAmperage',
        'status' => 'getStatus',
        'power' => 'getPower'
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
        $this->container['connector_type'] = isset($data['connector_type']) ? $data['connector_type'] : null;
        $this->container['power_type'] = isset($data['power_type']) ? $data['power_type'] : null;
        $this->container['connector_format'] = isset($data['connector_format']) ? $data['connector_format'] : null;
        $this->container['evse_id'] = isset($data['evse_id']) ? $data['evse_id'] : null;
        $this->container['emi3_id'] = isset($data['emi3_id']) ? $data['emi3_id'] : null;
        $this->container['voltage'] = isset($data['voltage']) ? $data['voltage'] : null;
        $this->container['amperage'] = isset($data['amperage']) ? $data['amperage'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['power'] = isset($data['power']) ? $data['power'] : null;
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
     * Gets connector_type
     *
     * @return string
     */
    public function getConnectorType()
    {
        return $this->container['connector_type'];
    }

    /**
     * Sets connector_type
     *
     * @param string $connector_type connector_type
     *
     * @return $this
     */
    public function setConnectorType($connector_type)
    {
        $this->container['connector_type'] = $connector_type;

        return $this;
    }

    /**
     * Gets power_type
     *
     * @return string
     */
    public function getPowerType()
    {
        return $this->container['power_type'];
    }

    /**
     * Sets power_type
     *
     * @param string $power_type power_type
     *
     * @return $this
     */
    public function setPowerType($power_type)
    {
        $this->container['power_type'] = $power_type;

        return $this;
    }

    /**
     * Gets connector_format
     *
     * @return string
     */
    public function getConnectorFormat()
    {
        return $this->container['connector_format'];
    }

    /**
     * Sets connector_format
     *
     * @param string $connector_format connector_format
     *
     * @return $this
     */
    public function setConnectorFormat($connector_format)
    {
        $this->container['connector_format'] = $connector_format;

        return $this;
    }

    /**
     * Gets evse_id
     *
     * @return string
     */
    public function getEvseId()
    {
        return $this->container['evse_id'];
    }

    /**
     * Sets evse_id
     *
     * @param string $evse_id evse_id
     *
     * @return $this
     */
    public function setEvseId($evse_id)
    {
        $this->container['evse_id'] = $evse_id;

        return $this;
    }

    /**
     * Gets emi3_id
     *
     * @return string
     */
    public function getEmi3Id()
    {
        return $this->container['emi3_id'];
    }

    /**
     * Sets emi3_id
     *
     * @param string $emi3_id emi3_id
     *
     * @return $this
     */
    public function setEmi3Id($emi3_id)
    {
        $this->container['emi3_id'] = $emi3_id;

        return $this;
    }

    /**
     * Gets voltage
     *
     * @return double
     */
    public function getVoltage()
    {
        return $this->container['voltage'];
    }

    /**
     * Sets voltage
     *
     * @param double $voltage voltage
     *
     * @return $this
     */
    public function setVoltage($voltage)
    {
        $this->container['voltage'] = $voltage;

        return $this;
    }

    /**
     * Gets amperage
     *
     * @return double
     */
    public function getAmperage()
    {
        return $this->container['amperage'];
    }

    /**
     * Sets amperage
     *
     * @param double $amperage amperage
     *
     * @return $this
     */
    public function setAmperage($amperage)
    {
        $this->container['amperage'] = $amperage;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets power
     *
     * @return double
     */
    public function getPower()
    {
        return $this->container['power'];
    }

    /**
     * Sets power
     *
     * @param double $power power
     *
     * @return $this
     */
    public function setPower($power)
    {
        $this->container['power'] = $power;

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



<?php
/**
 * EcedoERPUIWebControllersSysApiSysDashboardControllerDashboardDto
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
 * EcedoERPUIWebControllersSysApiSysDashboardControllerDashboardDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPUIWebControllersSysApiSysDashboardControllerDashboardDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.UI.Web.Controllers.SysApi.SysDashboardController.DashboardDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiOrganization',
        'connections' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnection[]',
        'advance_payments' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePayment[]',
        'billing_items' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiBillingItem[]',
        'meter_readings' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReading[]',
        'connection_contracts' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContract[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization' => null,
        'connections' => null,
        'advance_payments' => null,
        'billing_items' => null,
        'meter_readings' => null,
        'connection_contracts' => null
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
        'organization' => 'Organization',
        'connections' => 'Connections',
        'advance_payments' => 'AdvancePayments',
        'billing_items' => 'BillingItems',
        'meter_readings' => 'MeterReadings',
        'connection_contracts' => 'ConnectionContracts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization' => 'setOrganization',
        'connections' => 'setConnections',
        'advance_payments' => 'setAdvancePayments',
        'billing_items' => 'setBillingItems',
        'meter_readings' => 'setMeterReadings',
        'connection_contracts' => 'setConnectionContracts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization' => 'getOrganization',
        'connections' => 'getConnections',
        'advance_payments' => 'getAdvancePayments',
        'billing_items' => 'getBillingItems',
        'meter_readings' => 'getMeterReadings',
        'connection_contracts' => 'getConnectionContracts'
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
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['connections'] = isset($data['connections']) ? $data['connections'] : null;
        $this->container['advance_payments'] = isset($data['advance_payments']) ? $data['advance_payments'] : null;
        $this->container['billing_items'] = isset($data['billing_items']) ? $data['billing_items'] : null;
        $this->container['meter_readings'] = isset($data['meter_readings']) ? $data['meter_readings'] : null;
        $this->container['connection_contracts'] = isset($data['connection_contracts']) ? $data['connection_contracts'] : null;
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
     * Gets organization
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiOrganization
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiOrganization $organization organization
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets connections
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnection[]
     */
    public function getConnections()
    {
        return $this->container['connections'];
    }

    /**
     * Sets connections
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnection[] $connections connections
     *
     * @return $this
     */
    public function setConnections($connections)
    {
        $this->container['connections'] = $connections;

        return $this;
    }

    /**
     * Gets advance_payments
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePayment[]
     */
    public function getAdvancePayments()
    {
        return $this->container['advance_payments'];
    }

    /**
     * Sets advance_payments
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiAdvancePayment[] $advance_payments advance_payments
     *
     * @return $this
     */
    public function setAdvancePayments($advance_payments)
    {
        $this->container['advance_payments'] = $advance_payments;

        return $this;
    }

    /**
     * Gets billing_items
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiBillingItem[]
     */
    public function getBillingItems()
    {
        return $this->container['billing_items'];
    }

    /**
     * Sets billing_items
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiBillingItem[] $billing_items billing_items
     *
     * @return $this
     */
    public function setBillingItems($billing_items)
    {
        $this->container['billing_items'] = $billing_items;

        return $this;
    }

    /**
     * Gets meter_readings
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReading[]
     */
    public function getMeterReadings()
    {
        return $this->container['meter_readings'];
    }

    /**
     * Sets meter_readings
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReading[] $meter_readings meter_readings
     *
     * @return $this
     */
    public function setMeterReadings($meter_readings)
    {
        $this->container['meter_readings'] = $meter_readings;

        return $this;
    }

    /**
     * Gets connection_contracts
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContract[]
     */
    public function getConnectionContracts()
    {
        return $this->container['connection_contracts'];
    }

    /**
     * Sets connection_contracts
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContract[] $connection_contracts connection_contracts
     *
     * @return $this
     */
    public function setConnectionContracts($connection_contracts)
    {
        $this->container['connection_contracts'] = $connection_contracts;

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



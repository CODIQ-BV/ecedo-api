<?php
/**
 * EcedoERPCRMInterfaceApiFullEvChargerResult
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Ecedo API
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
 * EcedoERPCRMInterfaceApiFullEvChargerResult Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiFullEvChargerResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.FullEvChargerResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ev_charger_id' => 'string',
        'model' => 'string',
        'manufacturer' => 'string',
        'serial_number' => 'string',
        'client_reference' => 'string',
        'ocpi_location_id' => 'string',
        'status' => 'string',
        'installation_date' => '\DateTime',
        'white_list' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardData[]',
        'properties' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPropertyData[]',
        'evses' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvseData[]',
        'ocpi_details' => '\Swagger\Client\Model\EcedoERPCRMInterfaceServicesOCPIOcpiLocationDetails',
        'location' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerAddress'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ev_charger_id' => null,
        'model' => null,
        'manufacturer' => null,
        'serial_number' => null,
        'client_reference' => null,
        'ocpi_location_id' => null,
        'status' => null,
        'installation_date' => 'date',
        'white_list' => null,
        'properties' => null,
        'evses' => null,
        'ocpi_details' => null,
        'location' => null
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
        'ev_charger_id' => 'EvChargerId',
        'model' => 'Model',
        'manufacturer' => 'Manufacturer',
        'serial_number' => 'SerialNumber',
        'client_reference' => 'ClientReference',
        'ocpi_location_id' => 'OcpiLocationId',
        'status' => 'Status',
        'installation_date' => 'InstallationDate',
        'white_list' => 'WhiteList',
        'properties' => 'Properties',
        'evses' => 'Evses',
        'ocpi_details' => 'OcpiDetails',
        'location' => 'Location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ev_charger_id' => 'setEvChargerId',
        'model' => 'setModel',
        'manufacturer' => 'setManufacturer',
        'serial_number' => 'setSerialNumber',
        'client_reference' => 'setClientReference',
        'ocpi_location_id' => 'setOcpiLocationId',
        'status' => 'setStatus',
        'installation_date' => 'setInstallationDate',
        'white_list' => 'setWhiteList',
        'properties' => 'setProperties',
        'evses' => 'setEvses',
        'ocpi_details' => 'setOcpiDetails',
        'location' => 'setLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ev_charger_id' => 'getEvChargerId',
        'model' => 'getModel',
        'manufacturer' => 'getManufacturer',
        'serial_number' => 'getSerialNumber',
        'client_reference' => 'getClientReference',
        'ocpi_location_id' => 'getOcpiLocationId',
        'status' => 'getStatus',
        'installation_date' => 'getInstallationDate',
        'white_list' => 'getWhiteList',
        'properties' => 'getProperties',
        'evses' => 'getEvses',
        'ocpi_details' => 'getOcpiDetails',
        'location' => 'getLocation'
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
        $this->container['ev_charger_id'] = isset($data['ev_charger_id']) ? $data['ev_charger_id'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['client_reference'] = isset($data['client_reference']) ? $data['client_reference'] : null;
        $this->container['ocpi_location_id'] = isset($data['ocpi_location_id']) ? $data['ocpi_location_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['installation_date'] = isset($data['installation_date']) ? $data['installation_date'] : null;
        $this->container['white_list'] = isset($data['white_list']) ? $data['white_list'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['evses'] = isset($data['evses']) ? $data['evses'] : null;
        $this->container['ocpi_details'] = isset($data['ocpi_details']) ? $data['ocpi_details'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
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
     * Gets ev_charger_id
     *
     * @return string
     */
    public function getEvChargerId()
    {
        return $this->container['ev_charger_id'];
    }

    /**
     * Sets ev_charger_id
     *
     * @param string $ev_charger_id ev_charger_id
     *
     * @return $this
     */
    public function setEvChargerId($ev_charger_id)
    {
        $this->container['ev_charger_id'] = $ev_charger_id;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string $manufacturer manufacturer
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number serial_number
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets client_reference
     *
     * @return string
     */
    public function getClientReference()
    {
        return $this->container['client_reference'];
    }

    /**
     * Sets client_reference
     *
     * @param string $client_reference client_reference
     *
     * @return $this
     */
    public function setClientReference($client_reference)
    {
        $this->container['client_reference'] = $client_reference;

        return $this;
    }

    /**
     * Gets ocpi_location_id
     *
     * @return string
     */
    public function getOcpiLocationId()
    {
        return $this->container['ocpi_location_id'];
    }

    /**
     * Sets ocpi_location_id
     *
     * @param string $ocpi_location_id ocpi_location_id
     *
     * @return $this
     */
    public function setOcpiLocationId($ocpi_location_id)
    {
        $this->container['ocpi_location_id'] = $ocpi_location_id;

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
     * Gets installation_date
     *
     * @return \DateTime
     */
    public function getInstallationDate()
    {
        return $this->container['installation_date'];
    }

    /**
     * Sets installation_date
     *
     * @param \DateTime $installation_date installation_date
     *
     * @return $this
     */
    public function setInstallationDate($installation_date)
    {
        $this->container['installation_date'] = $installation_date;

        return $this;
    }

    /**
     * Gets white_list
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardData[]
     */
    public function getWhiteList()
    {
        return $this->container['white_list'];
    }

    /**
     * Sets white_list
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardData[] $white_list white_list
     *
     * @return $this
     */
    public function setWhiteList($white_list)
    {
        $this->container['white_list'] = $white_list;

        return $this;
    }

    /**
     * Gets properties
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPropertyData[]
     */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
     * Sets properties
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPropertyData[] $properties properties
     *
     * @return $this
     */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;

        return $this;
    }

    /**
     * Gets evses
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvseData[]
     */
    public function getEvses()
    {
        return $this->container['evses'];
    }

    /**
     * Sets evses
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvseData[] $evses evses
     *
     * @return $this
     */
    public function setEvses($evses)
    {
        $this->container['evses'] = $evses;

        return $this;
    }

    /**
     * Gets ocpi_details
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceServicesOCPIOcpiLocationDetails
     */
    public function getOcpiDetails()
    {
        return $this->container['ocpi_details'];
    }

    /**
     * Sets ocpi_details
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceServicesOCPIOcpiLocationDetails $ocpi_details ocpi_details
     *
     * @return $this
     */
    public function setOcpiDetails($ocpi_details)
    {
        $this->container['ocpi_details'] = $ocpi_details;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerAddress
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerAddress $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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



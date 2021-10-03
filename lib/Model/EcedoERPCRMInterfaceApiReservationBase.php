<?php
/**
 * EcedoERPCRMInterfaceApiReservationBase
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
 * EcedoERPCRMInterfaceApiReservationBase Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiReservationBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.ReservationBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_id' => 'string',
        'connection_id' => 'string',
        'contract_id' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'proposition_id' => 'string',
        'proposition_reference' => 'string',
        'product_group_description' => 'string',
        'annual_consumption' => 'int',
        'annual_standard_usage' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiAnnualStandardUsage',
        'connection_status' => 'string',
        'connection_status_localized' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_id' => null,
        'connection_id' => null,
        'contract_id' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'proposition_id' => null,
        'proposition_reference' => null,
        'product_group_description' => null,
        'annual_consumption' => 'int32',
        'annual_standard_usage' => null,
        'connection_status' => null,
        'connection_status_localized' => null
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
        'organization_id' => 'OrganizationId',
        'connection_id' => 'ConnectionId',
        'contract_id' => 'ContractId',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'proposition_id' => 'PropositionId',
        'proposition_reference' => 'PropositionReference',
        'product_group_description' => 'ProductGroupDescription',
        'annual_consumption' => 'AnnualConsumption',
        'annual_standard_usage' => 'AnnualStandardUsage',
        'connection_status' => 'ConnectionStatus',
        'connection_status_localized' => 'ConnectionStatusLocalized'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_id' => 'setOrganizationId',
        'connection_id' => 'setConnectionId',
        'contract_id' => 'setContractId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'proposition_id' => 'setPropositionId',
        'proposition_reference' => 'setPropositionReference',
        'product_group_description' => 'setProductGroupDescription',
        'annual_consumption' => 'setAnnualConsumption',
        'annual_standard_usage' => 'setAnnualStandardUsage',
        'connection_status' => 'setConnectionStatus',
        'connection_status_localized' => 'setConnectionStatusLocalized'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_id' => 'getOrganizationId',
        'connection_id' => 'getConnectionId',
        'contract_id' => 'getContractId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'proposition_id' => 'getPropositionId',
        'proposition_reference' => 'getPropositionReference',
        'product_group_description' => 'getProductGroupDescription',
        'annual_consumption' => 'getAnnualConsumption',
        'annual_standard_usage' => 'getAnnualStandardUsage',
        'connection_status' => 'getConnectionStatus',
        'connection_status_localized' => 'getConnectionStatusLocalized'
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
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['proposition_id'] = isset($data['proposition_id']) ? $data['proposition_id'] : null;
        $this->container['proposition_reference'] = isset($data['proposition_reference']) ? $data['proposition_reference'] : null;
        $this->container['product_group_description'] = isset($data['product_group_description']) ? $data['product_group_description'] : null;
        $this->container['annual_consumption'] = isset($data['annual_consumption']) ? $data['annual_consumption'] : null;
        $this->container['annual_standard_usage'] = isset($data['annual_standard_usage']) ? $data['annual_standard_usage'] : null;
        $this->container['connection_status'] = isset($data['connection_status']) ? $data['connection_status'] : null;
        $this->container['connection_status_localized'] = isset($data['connection_status_localized']) ? $data['connection_status_localized'] : null;
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
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
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
     * Gets contract_id
     *
     * @return string
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     *
     * @param string $contract_id contract_id
     *
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime $start_date start_date
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     *
     * @param \DateTime $end_date end_date
     *
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets proposition_id
     *
     * @return string
     */
    public function getPropositionId()
    {
        return $this->container['proposition_id'];
    }

    /**
     * Sets proposition_id
     *
     * @param string $proposition_id proposition_id
     *
     * @return $this
     */
    public function setPropositionId($proposition_id)
    {
        $this->container['proposition_id'] = $proposition_id;

        return $this;
    }

    /**
     * Gets proposition_reference
     *
     * @return string
     */
    public function getPropositionReference()
    {
        return $this->container['proposition_reference'];
    }

    /**
     * Sets proposition_reference
     *
     * @param string $proposition_reference proposition_reference
     *
     * @return $this
     */
    public function setPropositionReference($proposition_reference)
    {
        $this->container['proposition_reference'] = $proposition_reference;

        return $this;
    }

    /**
     * Gets product_group_description
     *
     * @return string
     */
    public function getProductGroupDescription()
    {
        return $this->container['product_group_description'];
    }

    /**
     * Sets product_group_description
     *
     * @param string $product_group_description product_group_description
     *
     * @return $this
     */
    public function setProductGroupDescription($product_group_description)
    {
        $this->container['product_group_description'] = $product_group_description;

        return $this;
    }

    /**
     * Gets annual_consumption
     *
     * @return int
     */
    public function getAnnualConsumption()
    {
        return $this->container['annual_consumption'];
    }

    /**
     * Sets annual_consumption
     *
     * @param int $annual_consumption annual_consumption
     *
     * @return $this
     */
    public function setAnnualConsumption($annual_consumption)
    {
        $this->container['annual_consumption'] = $annual_consumption;

        return $this;
    }

    /**
     * Gets annual_standard_usage
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiAnnualStandardUsage
     */
    public function getAnnualStandardUsage()
    {
        return $this->container['annual_standard_usage'];
    }

    /**
     * Sets annual_standard_usage
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiAnnualStandardUsage $annual_standard_usage annual_standard_usage
     *
     * @return $this
     */
    public function setAnnualStandardUsage($annual_standard_usage)
    {
        $this->container['annual_standard_usage'] = $annual_standard_usage;

        return $this;
    }

    /**
     * Gets connection_status
     *
     * @return string
     */
    public function getConnectionStatus()
    {
        return $this->container['connection_status'];
    }

    /**
     * Sets connection_status
     *
     * @param string $connection_status connection_status
     *
     * @return $this
     */
    public function setConnectionStatus($connection_status)
    {
        $this->container['connection_status'] = $connection_status;

        return $this;
    }

    /**
     * Gets connection_status_localized
     *
     * @return string
     */
    public function getConnectionStatusLocalized()
    {
        return $this->container['connection_status_localized'];
    }

    /**
     * Sets connection_status_localized
     *
     * @param string $connection_status_localized connection_status_localized
     *
     * @return $this
     */
    public function setConnectionStatusLocalized($connection_status_localized)
    {
        $this->container['connection_status_localized'] = $connection_status_localized;

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



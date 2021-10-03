<?php
/**
 * EcedoERPCRMInterfaceApiInvoiceUsageCalculationRow
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
 * EcedoERPCRMInterfaceApiInvoiceUsageCalculationRow Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiInvoiceUsageCalculationRow implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.InvoiceUsageCalculationRow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'price' => 'double',
        'price_source' => 'string',
        'price_source_localized' => 'string',
        'price_unit' => 'string',
        'price_unit_localized' => 'string',
        'usage' => 'double',
        'usage_ldn' => 'double',
        'usage_odn' => 'double',
        'usage_source' => 'string',
        'usage_source_localized' => 'string',
        'status' => 'string',
        'status_localized' => 'string',
        'status_comment' => 'string',
        'settlement_is_credited' => 'bool',
        'advance_payment_is_credited' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'start_date' => 'date-time',
        'end_date' => 'date-time',
        'price' => 'double',
        'price_source' => null,
        'price_source_localized' => null,
        'price_unit' => null,
        'price_unit_localized' => null,
        'usage' => 'double',
        'usage_ldn' => 'double',
        'usage_odn' => 'double',
        'usage_source' => null,
        'usage_source_localized' => null,
        'status' => null,
        'status_localized' => null,
        'status_comment' => null,
        'settlement_is_credited' => null,
        'advance_payment_is_credited' => null
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
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'price' => 'Price',
        'price_source' => 'PriceSource',
        'price_source_localized' => 'PriceSourceLocalized',
        'price_unit' => 'PriceUnit',
        'price_unit_localized' => 'PriceUnitLocalized',
        'usage' => 'Usage',
        'usage_ldn' => 'UsageLDN',
        'usage_odn' => 'UsageODN',
        'usage_source' => 'UsageSource',
        'usage_source_localized' => 'UsageSourceLocalized',
        'status' => 'Status',
        'status_localized' => 'StatusLocalized',
        'status_comment' => 'StatusComment',
        'settlement_is_credited' => 'SettlementIsCredited',
        'advance_payment_is_credited' => 'AdvancePaymentIsCredited'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'price' => 'setPrice',
        'price_source' => 'setPriceSource',
        'price_source_localized' => 'setPriceSourceLocalized',
        'price_unit' => 'setPriceUnit',
        'price_unit_localized' => 'setPriceUnitLocalized',
        'usage' => 'setUsage',
        'usage_ldn' => 'setUsageLdn',
        'usage_odn' => 'setUsageOdn',
        'usage_source' => 'setUsageSource',
        'usage_source_localized' => 'setUsageSourceLocalized',
        'status' => 'setStatus',
        'status_localized' => 'setStatusLocalized',
        'status_comment' => 'setStatusComment',
        'settlement_is_credited' => 'setSettlementIsCredited',
        'advance_payment_is_credited' => 'setAdvancePaymentIsCredited'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'price' => 'getPrice',
        'price_source' => 'getPriceSource',
        'price_source_localized' => 'getPriceSourceLocalized',
        'price_unit' => 'getPriceUnit',
        'price_unit_localized' => 'getPriceUnitLocalized',
        'usage' => 'getUsage',
        'usage_ldn' => 'getUsageLdn',
        'usage_odn' => 'getUsageOdn',
        'usage_source' => 'getUsageSource',
        'usage_source_localized' => 'getUsageSourceLocalized',
        'status' => 'getStatus',
        'status_localized' => 'getStatusLocalized',
        'status_comment' => 'getStatusComment',
        'settlement_is_credited' => 'getSettlementIsCredited',
        'advance_payment_is_credited' => 'getAdvancePaymentIsCredited'
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
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['price_source'] = isset($data['price_source']) ? $data['price_source'] : null;
        $this->container['price_source_localized'] = isset($data['price_source_localized']) ? $data['price_source_localized'] : null;
        $this->container['price_unit'] = isset($data['price_unit']) ? $data['price_unit'] : null;
        $this->container['price_unit_localized'] = isset($data['price_unit_localized']) ? $data['price_unit_localized'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['usage_ldn'] = isset($data['usage_ldn']) ? $data['usage_ldn'] : null;
        $this->container['usage_odn'] = isset($data['usage_odn']) ? $data['usage_odn'] : null;
        $this->container['usage_source'] = isset($data['usage_source']) ? $data['usage_source'] : null;
        $this->container['usage_source_localized'] = isset($data['usage_source_localized']) ? $data['usage_source_localized'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_localized'] = isset($data['status_localized']) ? $data['status_localized'] : null;
        $this->container['status_comment'] = isset($data['status_comment']) ? $data['status_comment'] : null;
        $this->container['settlement_is_credited'] = isset($data['settlement_is_credited']) ? $data['settlement_is_credited'] : null;
        $this->container['advance_payment_is_credited'] = isset($data['advance_payment_is_credited']) ? $data['advance_payment_is_credited'] : null;
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
     * Gets price
     *
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param double $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets price_source
     *
     * @return string
     */
    public function getPriceSource()
    {
        return $this->container['price_source'];
    }

    /**
     * Sets price_source
     *
     * @param string $price_source price_source
     *
     * @return $this
     */
    public function setPriceSource($price_source)
    {
        $this->container['price_source'] = $price_source;

        return $this;
    }

    /**
     * Gets price_source_localized
     *
     * @return string
     */
    public function getPriceSourceLocalized()
    {
        return $this->container['price_source_localized'];
    }

    /**
     * Sets price_source_localized
     *
     * @param string $price_source_localized price_source_localized
     *
     * @return $this
     */
    public function setPriceSourceLocalized($price_source_localized)
    {
        $this->container['price_source_localized'] = $price_source_localized;

        return $this;
    }

    /**
     * Gets price_unit
     *
     * @return string
     */
    public function getPriceUnit()
    {
        return $this->container['price_unit'];
    }

    /**
     * Sets price_unit
     *
     * @param string $price_unit price_unit
     *
     * @return $this
     */
    public function setPriceUnit($price_unit)
    {
        $this->container['price_unit'] = $price_unit;

        return $this;
    }

    /**
     * Gets price_unit_localized
     *
     * @return string
     */
    public function getPriceUnitLocalized()
    {
        return $this->container['price_unit_localized'];
    }

    /**
     * Sets price_unit_localized
     *
     * @param string $price_unit_localized price_unit_localized
     *
     * @return $this
     */
    public function setPriceUnitLocalized($price_unit_localized)
    {
        $this->container['price_unit_localized'] = $price_unit_localized;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return double
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param double $usage usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets usage_ldn
     *
     * @return double
     */
    public function getUsageLdn()
    {
        return $this->container['usage_ldn'];
    }

    /**
     * Sets usage_ldn
     *
     * @param double $usage_ldn usage_ldn
     *
     * @return $this
     */
    public function setUsageLdn($usage_ldn)
    {
        $this->container['usage_ldn'] = $usage_ldn;

        return $this;
    }

    /**
     * Gets usage_odn
     *
     * @return double
     */
    public function getUsageOdn()
    {
        return $this->container['usage_odn'];
    }

    /**
     * Sets usage_odn
     *
     * @param double $usage_odn usage_odn
     *
     * @return $this
     */
    public function setUsageOdn($usage_odn)
    {
        $this->container['usage_odn'] = $usage_odn;

        return $this;
    }

    /**
     * Gets usage_source
     *
     * @return string
     */
    public function getUsageSource()
    {
        return $this->container['usage_source'];
    }

    /**
     * Sets usage_source
     *
     * @param string $usage_source usage_source
     *
     * @return $this
     */
    public function setUsageSource($usage_source)
    {
        $this->container['usage_source'] = $usage_source;

        return $this;
    }

    /**
     * Gets usage_source_localized
     *
     * @return string
     */
    public function getUsageSourceLocalized()
    {
        return $this->container['usage_source_localized'];
    }

    /**
     * Sets usage_source_localized
     *
     * @param string $usage_source_localized usage_source_localized
     *
     * @return $this
     */
    public function setUsageSourceLocalized($usage_source_localized)
    {
        $this->container['usage_source_localized'] = $usage_source_localized;

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
     * Gets status_localized
     *
     * @return string
     */
    public function getStatusLocalized()
    {
        return $this->container['status_localized'];
    }

    /**
     * Sets status_localized
     *
     * @param string $status_localized status_localized
     *
     * @return $this
     */
    public function setStatusLocalized($status_localized)
    {
        $this->container['status_localized'] = $status_localized;

        return $this;
    }

    /**
     * Gets status_comment
     *
     * @return string
     */
    public function getStatusComment()
    {
        return $this->container['status_comment'];
    }

    /**
     * Sets status_comment
     *
     * @param string $status_comment status_comment
     *
     * @return $this
     */
    public function setStatusComment($status_comment)
    {
        $this->container['status_comment'] = $status_comment;

        return $this;
    }

    /**
     * Gets settlement_is_credited
     *
     * @return bool
     */
    public function getSettlementIsCredited()
    {
        return $this->container['settlement_is_credited'];
    }

    /**
     * Sets settlement_is_credited
     *
     * @param bool $settlement_is_credited settlement_is_credited
     *
     * @return $this
     */
    public function setSettlementIsCredited($settlement_is_credited)
    {
        $this->container['settlement_is_credited'] = $settlement_is_credited;

        return $this;
    }

    /**
     * Gets advance_payment_is_credited
     *
     * @return bool
     */
    public function getAdvancePaymentIsCredited()
    {
        return $this->container['advance_payment_is_credited'];
    }

    /**
     * Sets advance_payment_is_credited
     *
     * @param bool $advance_payment_is_credited advance_payment_is_credited
     *
     * @return $this
     */
    public function setAdvancePaymentIsCredited($advance_payment_is_credited)
    {
        $this->container['advance_payment_is_credited'] = $advance_payment_is_credited;

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



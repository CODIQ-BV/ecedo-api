<?php
/**
 * EcedoERPCRMInterfaceApiMarketPrice
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
 * EcedoERPCRMInterfaceApiMarketPrice Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiMarketPrice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.MarketPrice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'price' => 'double',
        'price_unit' => 'string',
        'price_unit_localized' => 'string',
        'market_price_type' => 'string',
        'market_price_type_localized' => 'string',
        'comment' => 'string'
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
        'price_unit' => null,
        'price_unit_localized' => null,
        'market_price_type' => null,
        'market_price_type_localized' => null,
        'comment' => null
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
        'price_unit' => 'PriceUnit',
        'price_unit_localized' => 'PriceUnitLocalized',
        'market_price_type' => 'MarketPriceType',
        'market_price_type_localized' => 'MarketPriceTypeLocalized',
        'comment' => 'Comment'
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
        'price_unit' => 'setPriceUnit',
        'price_unit_localized' => 'setPriceUnitLocalized',
        'market_price_type' => 'setMarketPriceType',
        'market_price_type_localized' => 'setMarketPriceTypeLocalized',
        'comment' => 'setComment'
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
        'price_unit' => 'getPriceUnit',
        'price_unit_localized' => 'getPriceUnitLocalized',
        'market_price_type' => 'getMarketPriceType',
        'market_price_type_localized' => 'getMarketPriceTypeLocalized',
        'comment' => 'getComment'
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
        $this->container['price_unit'] = isset($data['price_unit']) ? $data['price_unit'] : null;
        $this->container['price_unit_localized'] = isset($data['price_unit_localized']) ? $data['price_unit_localized'] : null;
        $this->container['market_price_type'] = isset($data['market_price_type']) ? $data['market_price_type'] : null;
        $this->container['market_price_type_localized'] = isset($data['market_price_type_localized']) ? $data['market_price_type_localized'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
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
     * Gets market_price_type
     *
     * @return string
     */
    public function getMarketPriceType()
    {
        return $this->container['market_price_type'];
    }

    /**
     * Sets market_price_type
     *
     * @param string $market_price_type market_price_type
     *
     * @return $this
     */
    public function setMarketPriceType($market_price_type)
    {
        $this->container['market_price_type'] = $market_price_type;

        return $this;
    }

    /**
     * Gets market_price_type_localized
     *
     * @return string
     */
    public function getMarketPriceTypeLocalized()
    {
        return $this->container['market_price_type_localized'];
    }

    /**
     * Sets market_price_type_localized
     *
     * @param string $market_price_type_localized market_price_type_localized
     *
     * @return $this
     */
    public function setMarketPriceTypeLocalized($market_price_type_localized)
    {
        $this->container['market_price_type_localized'] = $market_price_type_localized;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment comment
     *
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

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



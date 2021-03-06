<?php
/**
 * EcedoERPCRMInterfaceApiEvChargeCardCdrPostData
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
 * EcedoERPCRMInterfaceApiEvChargeCardCdrPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiEvChargeCardCdrPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.EvChargeCardCdrPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cdr_id' => 'string',
        'time_start' => '\DateTime',
        'time_stop' => '\DateTime',
        'duration' => 'string',
        'volume' => 'double',
        'cp_address' => 'string',
        'cp_zip' => 'string',
        'cp_city' => 'string',
        'cp_country' => 'string',
        'cp_type' => 'string',
        'product_type' => 'string',
        'tariff_type' => 'string',
        'auth_id' => 'string',
        'card_number' => 'string',
        'meter_id' => 'string',
        'cp_id' => 'string',
        'cpo_id' => 'string',
        'total_cost' => 'double',
        'add_energy_price' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cdr_id' => null,
        'time_start' => 'date',
        'time_stop' => 'date',
        'duration' => null,
        'volume' => 'double',
        'cp_address' => null,
        'cp_zip' => null,
        'cp_city' => null,
        'cp_country' => null,
        'cp_type' => null,
        'product_type' => null,
        'tariff_type' => null,
        'auth_id' => null,
        'card_number' => null,
        'meter_id' => null,
        'cp_id' => null,
        'cpo_id' => null,
        'total_cost' => 'double',
        'add_energy_price' => null
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
        'cdr_id' => 'CdrId',
        'time_start' => 'TimeStart',
        'time_stop' => 'TimeStop',
        'duration' => 'Duration',
        'volume' => 'Volume',
        'cp_address' => 'CpAddress',
        'cp_zip' => 'CpZip',
        'cp_city' => 'CpCity',
        'cp_country' => 'CpCountry',
        'cp_type' => 'CpType',
        'product_type' => 'ProductType',
        'tariff_type' => 'TariffType',
        'auth_id' => 'AuthId',
        'card_number' => 'CardNumber',
        'meter_id' => 'MeterId',
        'cp_id' => 'CpId',
        'cpo_id' => 'CpoId',
        'total_cost' => 'TotalCost',
        'add_energy_price' => 'AddEnergyPrice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cdr_id' => 'setCdrId',
        'time_start' => 'setTimeStart',
        'time_stop' => 'setTimeStop',
        'duration' => 'setDuration',
        'volume' => 'setVolume',
        'cp_address' => 'setCpAddress',
        'cp_zip' => 'setCpZip',
        'cp_city' => 'setCpCity',
        'cp_country' => 'setCpCountry',
        'cp_type' => 'setCpType',
        'product_type' => 'setProductType',
        'tariff_type' => 'setTariffType',
        'auth_id' => 'setAuthId',
        'card_number' => 'setCardNumber',
        'meter_id' => 'setMeterId',
        'cp_id' => 'setCpId',
        'cpo_id' => 'setCpoId',
        'total_cost' => 'setTotalCost',
        'add_energy_price' => 'setAddEnergyPrice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cdr_id' => 'getCdrId',
        'time_start' => 'getTimeStart',
        'time_stop' => 'getTimeStop',
        'duration' => 'getDuration',
        'volume' => 'getVolume',
        'cp_address' => 'getCpAddress',
        'cp_zip' => 'getCpZip',
        'cp_city' => 'getCpCity',
        'cp_country' => 'getCpCountry',
        'cp_type' => 'getCpType',
        'product_type' => 'getProductType',
        'tariff_type' => 'getTariffType',
        'auth_id' => 'getAuthId',
        'card_number' => 'getCardNumber',
        'meter_id' => 'getMeterId',
        'cp_id' => 'getCpId',
        'cpo_id' => 'getCpoId',
        'total_cost' => 'getTotalCost',
        'add_energy_price' => 'getAddEnergyPrice'
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
        $this->container['cdr_id'] = isset($data['cdr_id']) ? $data['cdr_id'] : null;
        $this->container['time_start'] = isset($data['time_start']) ? $data['time_start'] : null;
        $this->container['time_stop'] = isset($data['time_stop']) ? $data['time_stop'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['cp_address'] = isset($data['cp_address']) ? $data['cp_address'] : null;
        $this->container['cp_zip'] = isset($data['cp_zip']) ? $data['cp_zip'] : null;
        $this->container['cp_city'] = isset($data['cp_city']) ? $data['cp_city'] : null;
        $this->container['cp_country'] = isset($data['cp_country']) ? $data['cp_country'] : null;
        $this->container['cp_type'] = isset($data['cp_type']) ? $data['cp_type'] : null;
        $this->container['product_type'] = isset($data['product_type']) ? $data['product_type'] : null;
        $this->container['tariff_type'] = isset($data['tariff_type']) ? $data['tariff_type'] : null;
        $this->container['auth_id'] = isset($data['auth_id']) ? $data['auth_id'] : null;
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['meter_id'] = isset($data['meter_id']) ? $data['meter_id'] : null;
        $this->container['cp_id'] = isset($data['cp_id']) ? $data['cp_id'] : null;
        $this->container['cpo_id'] = isset($data['cpo_id']) ? $data['cpo_id'] : null;
        $this->container['total_cost'] = isset($data['total_cost']) ? $data['total_cost'] : null;
        $this->container['add_energy_price'] = isset($data['add_energy_price']) ? $data['add_energy_price'] : null;
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
     * Gets cdr_id
     *
     * @return string
     */
    public function getCdrId()
    {
        return $this->container['cdr_id'];
    }

    /**
     * Sets cdr_id
     *
     * @param string $cdr_id cdr_id
     *
     * @return $this
     */
    public function setCdrId($cdr_id)
    {
        $this->container['cdr_id'] = $cdr_id;

        return $this;
    }

    /**
     * Gets time_start
     *
     * @return \DateTime
     */
    public function getTimeStart()
    {
        return $this->container['time_start'];
    }

    /**
     * Sets time_start
     *
     * @param \DateTime $time_start time_start
     *
     * @return $this
     */
    public function setTimeStart($time_start)
    {
        $this->container['time_start'] = $time_start;

        return $this;
    }

    /**
     * Gets time_stop
     *
     * @return \DateTime
     */
    public function getTimeStop()
    {
        return $this->container['time_stop'];
    }

    /**
     * Sets time_stop
     *
     * @param \DateTime $time_stop time_stop
     *
     * @return $this
     */
    public function setTimeStop($time_stop)
    {
        $this->container['time_stop'] = $time_stop;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param string $duration duration
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets volume
     *
     * @return double
     */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
     * Sets volume
     *
     * @param double $volume volume
     *
     * @return $this
     */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;

        return $this;
    }

    /**
     * Gets cp_address
     *
     * @return string
     */
    public function getCpAddress()
    {
        return $this->container['cp_address'];
    }

    /**
     * Sets cp_address
     *
     * @param string $cp_address cp_address
     *
     * @return $this
     */
    public function setCpAddress($cp_address)
    {
        $this->container['cp_address'] = $cp_address;

        return $this;
    }

    /**
     * Gets cp_zip
     *
     * @return string
     */
    public function getCpZip()
    {
        return $this->container['cp_zip'];
    }

    /**
     * Sets cp_zip
     *
     * @param string $cp_zip cp_zip
     *
     * @return $this
     */
    public function setCpZip($cp_zip)
    {
        $this->container['cp_zip'] = $cp_zip;

        return $this;
    }

    /**
     * Gets cp_city
     *
     * @return string
     */
    public function getCpCity()
    {
        return $this->container['cp_city'];
    }

    /**
     * Sets cp_city
     *
     * @param string $cp_city cp_city
     *
     * @return $this
     */
    public function setCpCity($cp_city)
    {
        $this->container['cp_city'] = $cp_city;

        return $this;
    }

    /**
     * Gets cp_country
     *
     * @return string
     */
    public function getCpCountry()
    {
        return $this->container['cp_country'];
    }

    /**
     * Sets cp_country
     *
     * @param string $cp_country cp_country
     *
     * @return $this
     */
    public function setCpCountry($cp_country)
    {
        $this->container['cp_country'] = $cp_country;

        return $this;
    }

    /**
     * Gets cp_type
     *
     * @return string
     */
    public function getCpType()
    {
        return $this->container['cp_type'];
    }

    /**
     * Sets cp_type
     *
     * @param string $cp_type cp_type
     *
     * @return $this
     */
    public function setCpType($cp_type)
    {
        $this->container['cp_type'] = $cp_type;

        return $this;
    }

    /**
     * Gets product_type
     *
     * @return string
     */
    public function getProductType()
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type
     *
     * @param string $product_type product_type
     *
     * @return $this
     */
    public function setProductType($product_type)
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets tariff_type
     *
     * @return string
     */
    public function getTariffType()
    {
        return $this->container['tariff_type'];
    }

    /**
     * Sets tariff_type
     *
     * @param string $tariff_type tariff_type
     *
     * @return $this
     */
    public function setTariffType($tariff_type)
    {
        $this->container['tariff_type'] = $tariff_type;

        return $this;
    }

    /**
     * Gets auth_id
     *
     * @return string
     */
    public function getAuthId()
    {
        return $this->container['auth_id'];
    }

    /**
     * Sets auth_id
     *
     * @param string $auth_id auth_id
     *
     * @return $this
     */
    public function setAuthId($auth_id)
    {
        $this->container['auth_id'] = $auth_id;

        return $this;
    }

    /**
     * Gets card_number
     *
     * @return string
     */
    public function getCardNumber()
    {
        return $this->container['card_number'];
    }

    /**
     * Sets card_number
     *
     * @param string $card_number card_number
     *
     * @return $this
     */
    public function setCardNumber($card_number)
    {
        $this->container['card_number'] = $card_number;

        return $this;
    }

    /**
     * Gets meter_id
     *
     * @return string
     */
    public function getMeterId()
    {
        return $this->container['meter_id'];
    }

    /**
     * Sets meter_id
     *
     * @param string $meter_id meter_id
     *
     * @return $this
     */
    public function setMeterId($meter_id)
    {
        $this->container['meter_id'] = $meter_id;

        return $this;
    }

    /**
     * Gets cp_id
     *
     * @return string
     */
    public function getCpId()
    {
        return $this->container['cp_id'];
    }

    /**
     * Sets cp_id
     *
     * @param string $cp_id cp_id
     *
     * @return $this
     */
    public function setCpId($cp_id)
    {
        $this->container['cp_id'] = $cp_id;

        return $this;
    }

    /**
     * Gets cpo_id
     *
     * @return string
     */
    public function getCpoId()
    {
        return $this->container['cpo_id'];
    }

    /**
     * Sets cpo_id
     *
     * @param string $cpo_id cpo_id
     *
     * @return $this
     */
    public function setCpoId($cpo_id)
    {
        $this->container['cpo_id'] = $cpo_id;

        return $this;
    }

    /**
     * Gets total_cost
     *
     * @return double
     */
    public function getTotalCost()
    {
        return $this->container['total_cost'];
    }

    /**
     * Sets total_cost
     *
     * @param double $total_cost total_cost
     *
     * @return $this
     */
    public function setTotalCost($total_cost)
    {
        $this->container['total_cost'] = $total_cost;

        return $this;
    }

    /**
     * Gets add_energy_price
     *
     * @return bool
     */
    public function getAddEnergyPrice()
    {
        return $this->container['add_energy_price'];
    }

    /**
     * Sets add_energy_price
     *
     * @param bool $add_energy_price add_energy_price
     *
     * @return $this
     */
    public function setAddEnergyPrice($add_energy_price)
    {
        $this->container['add_energy_price'] = $add_energy_price;

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



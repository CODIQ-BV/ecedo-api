<?php
/**
 * EcedoERPCRMInterfaceApiEvChargeCard
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
 * EcedoERPCRMInterfaceApiEvChargeCard Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiEvChargeCard implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.EvChargeCard';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'card_number' => 'string',
        'radio_frequency_id' => 'string',
        'ev_charge_card_type' => 'string',
        'ev_charge_card_type_localized' => 'string',
        'client_reference' => 'string',
        'ev_charge_card_status' => 'string',
        'ev_charge_card_status_localized' => 'string',
        'ev_charge_card_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'card_number' => null,
        'radio_frequency_id' => null,
        'ev_charge_card_type' => null,
        'ev_charge_card_type_localized' => null,
        'client_reference' => null,
        'ev_charge_card_status' => null,
        'ev_charge_card_status_localized' => null,
        'ev_charge_card_id' => null
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
        'card_number' => 'CardNumber',
        'radio_frequency_id' => 'RadioFrequencyId',
        'ev_charge_card_type' => 'EvChargeCardType',
        'ev_charge_card_type_localized' => 'EvChargeCardTypeLocalized',
        'client_reference' => 'ClientReference',
        'ev_charge_card_status' => 'EvChargeCardStatus',
        'ev_charge_card_status_localized' => 'EvChargeCardStatusLocalized',
        'ev_charge_card_id' => 'EvChargeCardId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'card_number' => 'setCardNumber',
        'radio_frequency_id' => 'setRadioFrequencyId',
        'ev_charge_card_type' => 'setEvChargeCardType',
        'ev_charge_card_type_localized' => 'setEvChargeCardTypeLocalized',
        'client_reference' => 'setClientReference',
        'ev_charge_card_status' => 'setEvChargeCardStatus',
        'ev_charge_card_status_localized' => 'setEvChargeCardStatusLocalized',
        'ev_charge_card_id' => 'setEvChargeCardId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'card_number' => 'getCardNumber',
        'radio_frequency_id' => 'getRadioFrequencyId',
        'ev_charge_card_type' => 'getEvChargeCardType',
        'ev_charge_card_type_localized' => 'getEvChargeCardTypeLocalized',
        'client_reference' => 'getClientReference',
        'ev_charge_card_status' => 'getEvChargeCardStatus',
        'ev_charge_card_status_localized' => 'getEvChargeCardStatusLocalized',
        'ev_charge_card_id' => 'getEvChargeCardId'
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
        $this->container['card_number'] = isset($data['card_number']) ? $data['card_number'] : null;
        $this->container['radio_frequency_id'] = isset($data['radio_frequency_id']) ? $data['radio_frequency_id'] : null;
        $this->container['ev_charge_card_type'] = isset($data['ev_charge_card_type']) ? $data['ev_charge_card_type'] : null;
        $this->container['ev_charge_card_type_localized'] = isset($data['ev_charge_card_type_localized']) ? $data['ev_charge_card_type_localized'] : null;
        $this->container['client_reference'] = isset($data['client_reference']) ? $data['client_reference'] : null;
        $this->container['ev_charge_card_status'] = isset($data['ev_charge_card_status']) ? $data['ev_charge_card_status'] : null;
        $this->container['ev_charge_card_status_localized'] = isset($data['ev_charge_card_status_localized']) ? $data['ev_charge_card_status_localized'] : null;
        $this->container['ev_charge_card_id'] = isset($data['ev_charge_card_id']) ? $data['ev_charge_card_id'] : null;
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
     * Gets radio_frequency_id
     *
     * @return string
     */
    public function getRadioFrequencyId()
    {
        return $this->container['radio_frequency_id'];
    }

    /**
     * Sets radio_frequency_id
     *
     * @param string $radio_frequency_id radio_frequency_id
     *
     * @return $this
     */
    public function setRadioFrequencyId($radio_frequency_id)
    {
        $this->container['radio_frequency_id'] = $radio_frequency_id;

        return $this;
    }

    /**
     * Gets ev_charge_card_type
     *
     * @return string
     */
    public function getEvChargeCardType()
    {
        return $this->container['ev_charge_card_type'];
    }

    /**
     * Sets ev_charge_card_type
     *
     * @param string $ev_charge_card_type ev_charge_card_type
     *
     * @return $this
     */
    public function setEvChargeCardType($ev_charge_card_type)
    {
        $this->container['ev_charge_card_type'] = $ev_charge_card_type;

        return $this;
    }

    /**
     * Gets ev_charge_card_type_localized
     *
     * @return string
     */
    public function getEvChargeCardTypeLocalized()
    {
        return $this->container['ev_charge_card_type_localized'];
    }

    /**
     * Sets ev_charge_card_type_localized
     *
     * @param string $ev_charge_card_type_localized ev_charge_card_type_localized
     *
     * @return $this
     */
    public function setEvChargeCardTypeLocalized($ev_charge_card_type_localized)
    {
        $this->container['ev_charge_card_type_localized'] = $ev_charge_card_type_localized;

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
     * Gets ev_charge_card_status
     *
     * @return string
     */
    public function getEvChargeCardStatus()
    {
        return $this->container['ev_charge_card_status'];
    }

    /**
     * Sets ev_charge_card_status
     *
     * @param string $ev_charge_card_status ev_charge_card_status
     *
     * @return $this
     */
    public function setEvChargeCardStatus($ev_charge_card_status)
    {
        $this->container['ev_charge_card_status'] = $ev_charge_card_status;

        return $this;
    }

    /**
     * Gets ev_charge_card_status_localized
     *
     * @return string
     */
    public function getEvChargeCardStatusLocalized()
    {
        return $this->container['ev_charge_card_status_localized'];
    }

    /**
     * Sets ev_charge_card_status_localized
     *
     * @param string $ev_charge_card_status_localized ev_charge_card_status_localized
     *
     * @return $this
     */
    public function setEvChargeCardStatusLocalized($ev_charge_card_status_localized)
    {
        $this->container['ev_charge_card_status_localized'] = $ev_charge_card_status_localized;

        return $this;
    }

    /**
     * Gets ev_charge_card_id
     *
     * @return string
     */
    public function getEvChargeCardId()
    {
        return $this->container['ev_charge_card_id'];
    }

    /**
     * Sets ev_charge_card_id
     *
     * @param string $ev_charge_card_id ev_charge_card_id
     *
     * @return $this
     */
    public function setEvChargeCardId($ev_charge_card_id)
    {
        $this->container['ev_charge_card_id'] = $ev_charge_card_id;

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


<?php
/**
 * EcedoERPCRMInterfaceApiEvChargeCardCreditPutData
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
 * EcedoERPCRMInterfaceApiEvChargeCardCreditPutData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiEvChargeCardCreditPutData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.EvChargeCardCreditPutData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ev_charge_card_id' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'credit_amount' => 'double',
        'unit' => 'string',
        'comment' => 'string',
        'acquired_date' => '\DateTime',
        'acquired_reason' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ev_charge_card_id' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'credit_amount' => 'double',
        'unit' => null,
        'comment' => null,
        'acquired_date' => 'date',
        'acquired_reason' => null
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
        'ev_charge_card_id' => 'EvChargeCardId',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'credit_amount' => 'CreditAmount',
        'unit' => 'Unit',
        'comment' => 'Comment',
        'acquired_date' => 'AcquiredDate',
        'acquired_reason' => 'AcquiredReason'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ev_charge_card_id' => 'setEvChargeCardId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'credit_amount' => 'setCreditAmount',
        'unit' => 'setUnit',
        'comment' => 'setComment',
        'acquired_date' => 'setAcquiredDate',
        'acquired_reason' => 'setAcquiredReason'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ev_charge_card_id' => 'getEvChargeCardId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'credit_amount' => 'getCreditAmount',
        'unit' => 'getUnit',
        'comment' => 'getComment',
        'acquired_date' => 'getAcquiredDate',
        'acquired_reason' => 'getAcquiredReason'
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

    const UNIT_EURO = 'Euro';
    const UNIT_K_WH = 'KWh';
    const UNIT_M3 = 'M3';
    const UNIT_CHARGE_SESSION = 'ChargeSession';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_EURO,
            self::UNIT_K_WH,
            self::UNIT_M3,
            self::UNIT_CHARGE_SESSION,
        ];
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
        $this->container['ev_charge_card_id'] = isset($data['ev_charge_card_id']) ? $data['ev_charge_card_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['credit_amount'] = isset($data['credit_amount']) ? $data['credit_amount'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['acquired_date'] = isset($data['acquired_date']) ? $data['acquired_date'] : null;
        $this->container['acquired_reason'] = isset($data['acquired_reason']) ? $data['acquired_reason'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'unit', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets credit_amount
     *
     * @return double
     */
    public function getCreditAmount()
    {
        return $this->container['credit_amount'];
    }

    /**
     * Sets credit_amount
     *
     * @param double $credit_amount credit_amount
     *
     * @return $this
     */
    public function setCreditAmount($credit_amount)
    {
        $this->container['credit_amount'] = $credit_amount;

        return $this;
    }

    /**
     * Gets unit
     *
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     *
     * @param string $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $allowedValues = $this->getUnitAllowableValues();
        if (!is_null($unit) && !in_array($unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['unit'] = $unit;

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
     * Gets acquired_date
     *
     * @return \DateTime
     */
    public function getAcquiredDate()
    {
        return $this->container['acquired_date'];
    }

    /**
     * Sets acquired_date
     *
     * @param \DateTime $acquired_date acquired_date
     *
     * @return $this
     */
    public function setAcquiredDate($acquired_date)
    {
        $this->container['acquired_date'] = $acquired_date;

        return $this;
    }

    /**
     * Gets acquired_reason
     *
     * @return string
     */
    public function getAcquiredReason()
    {
        return $this->container['acquired_reason'];
    }

    /**
     * Sets acquired_reason
     *
     * @param string $acquired_reason acquired_reason
     *
     * @return $this
     */
    public function setAcquiredReason($acquired_reason)
    {
        $this->container['acquired_reason'] = $acquired_reason;

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



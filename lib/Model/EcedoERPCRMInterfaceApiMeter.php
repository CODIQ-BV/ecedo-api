<?php
/**
 * EcedoERPCRMInterfaceApiMeter
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
 * EcedoERPCRMInterfaceApiMeter Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiMeter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.Meter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'meter_id' => 'string',
        'meter_type' => 'string',
        'meter_type_localized' => 'string',
        'meter_number' => 'string',
        'no_digits' => 'int',
        'meter_registers_direction_type' => 'string',
        'meter_registers_direction_type_localized' => 'string',
        'meter_dial_position_order_type' => 'string',
        'meter_dial_position_order_type_localized' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'meter_id' => null,
        'meter_type' => null,
        'meter_type_localized' => null,
        'meter_number' => null,
        'no_digits' => 'int32',
        'meter_registers_direction_type' => null,
        'meter_registers_direction_type_localized' => null,
        'meter_dial_position_order_type' => null,
        'meter_dial_position_order_type_localized' => null
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
        'meter_id' => 'MeterId',
        'meter_type' => 'MeterType',
        'meter_type_localized' => 'MeterTypeLocalized',
        'meter_number' => 'MeterNumber',
        'no_digits' => 'NoDigits',
        'meter_registers_direction_type' => 'MeterRegistersDirectionType',
        'meter_registers_direction_type_localized' => 'MeterRegistersDirectionTypeLocalized',
        'meter_dial_position_order_type' => 'MeterDialPositionOrderType',
        'meter_dial_position_order_type_localized' => 'MeterDialPositionOrderTypeLocalized'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'meter_id' => 'setMeterId',
        'meter_type' => 'setMeterType',
        'meter_type_localized' => 'setMeterTypeLocalized',
        'meter_number' => 'setMeterNumber',
        'no_digits' => 'setNoDigits',
        'meter_registers_direction_type' => 'setMeterRegistersDirectionType',
        'meter_registers_direction_type_localized' => 'setMeterRegistersDirectionTypeLocalized',
        'meter_dial_position_order_type' => 'setMeterDialPositionOrderType',
        'meter_dial_position_order_type_localized' => 'setMeterDialPositionOrderTypeLocalized'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'meter_id' => 'getMeterId',
        'meter_type' => 'getMeterType',
        'meter_type_localized' => 'getMeterTypeLocalized',
        'meter_number' => 'getMeterNumber',
        'no_digits' => 'getNoDigits',
        'meter_registers_direction_type' => 'getMeterRegistersDirectionType',
        'meter_registers_direction_type_localized' => 'getMeterRegistersDirectionTypeLocalized',
        'meter_dial_position_order_type' => 'getMeterDialPositionOrderType',
        'meter_dial_position_order_type_localized' => 'getMeterDialPositionOrderTypeLocalized'
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

    const METER_TYPE_CVN = 'CVN';
    const METER_TYPE_SLM = 'SLM';
    const METER_TYPE_GV = 'GV';
    const METER_TYPE_OBM = 'OBM';
    const METER_TYPE_INA = 'INA';
    const METER_REGISTERS_DIRECTION_TYPE_L = 'L';
    const METER_REGISTERS_DIRECTION_TYPE_LL = 'LL';
    const METER_REGISTERS_DIRECTION_TYPE_LT = 'LT';
    const METER_REGISTERS_DIRECTION_TYPE_LLT = 'LLT';
    const METER_REGISTERS_DIRECTION_TYPE_LLTT = 'LLTT';
    const METER_REGISTERS_DIRECTION_TYPE_T = 'T';
    const METER_REGISTERS_DIRECTION_TYPE_TT = 'TT';
    const METER_DIAL_POSITION_ORDER_TYPE_LOW_I_HIGH_II = 'Low_I_High_II';
    const METER_DIAL_POSITION_ORDER_TYPE_HIGH_I_LOW_II = 'High_I_Low_II';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMeterTypeAllowableValues()
    {
        return [
            self::METER_TYPE_CVN,
            self::METER_TYPE_SLM,
            self::METER_TYPE_GV,
            self::METER_TYPE_OBM,
            self::METER_TYPE_INA,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMeterRegistersDirectionTypeAllowableValues()
    {
        return [
            self::METER_REGISTERS_DIRECTION_TYPE_L,
            self::METER_REGISTERS_DIRECTION_TYPE_LL,
            self::METER_REGISTERS_DIRECTION_TYPE_LT,
            self::METER_REGISTERS_DIRECTION_TYPE_LLT,
            self::METER_REGISTERS_DIRECTION_TYPE_LLTT,
            self::METER_REGISTERS_DIRECTION_TYPE_T,
            self::METER_REGISTERS_DIRECTION_TYPE_TT,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMeterDialPositionOrderTypeAllowableValues()
    {
        return [
            self::METER_DIAL_POSITION_ORDER_TYPE_LOW_I_HIGH_II,
            self::METER_DIAL_POSITION_ORDER_TYPE_HIGH_I_LOW_II,
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
        $this->container['meter_id'] = isset($data['meter_id']) ? $data['meter_id'] : null;
        $this->container['meter_type'] = isset($data['meter_type']) ? $data['meter_type'] : null;
        $this->container['meter_type_localized'] = isset($data['meter_type_localized']) ? $data['meter_type_localized'] : null;
        $this->container['meter_number'] = isset($data['meter_number']) ? $data['meter_number'] : null;
        $this->container['no_digits'] = isset($data['no_digits']) ? $data['no_digits'] : null;
        $this->container['meter_registers_direction_type'] = isset($data['meter_registers_direction_type']) ? $data['meter_registers_direction_type'] : null;
        $this->container['meter_registers_direction_type_localized'] = isset($data['meter_registers_direction_type_localized']) ? $data['meter_registers_direction_type_localized'] : null;
        $this->container['meter_dial_position_order_type'] = isset($data['meter_dial_position_order_type']) ? $data['meter_dial_position_order_type'] : null;
        $this->container['meter_dial_position_order_type_localized'] = isset($data['meter_dial_position_order_type_localized']) ? $data['meter_dial_position_order_type_localized'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMeterTypeAllowableValues();
        if (!is_null($this->container['meter_type']) && !in_array($this->container['meter_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'meter_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMeterRegistersDirectionTypeAllowableValues();
        if (!is_null($this->container['meter_registers_direction_type']) && !in_array($this->container['meter_registers_direction_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'meter_registers_direction_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMeterDialPositionOrderTypeAllowableValues();
        if (!is_null($this->container['meter_dial_position_order_type']) && !in_array($this->container['meter_dial_position_order_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'meter_dial_position_order_type', must be one of '%s'",
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
     * @param string $meter_id Het Ecedo ID (GUID) van de Meter wanneer deze in Ecedo bekend is. Als de meter uit het C-AR wordt opgehaald, is het ID van de meter \"00000000-0000-0000-0000-000000000000\"
     *
     * @return $this
     */
    public function setMeterId($meter_id)
    {
        $this->container['meter_id'] = $meter_id;

        return $this;
    }

    /**
     * Gets meter_type
     *
     * @return string
     */
    public function getMeterType()
    {
        return $this->container['meter_type'];
    }

    /**
     * Sets meter_type
     *
     * @param string $meter_type Het metertype
     *
     * @return $this
     */
    public function setMeterType($meter_type)
    {
        $allowedValues = $this->getMeterTypeAllowableValues();
        if (!is_null($meter_type) && !in_array($meter_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'meter_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['meter_type'] = $meter_type;

        return $this;
    }

    /**
     * Gets meter_type_localized
     *
     * @return string
     */
    public function getMeterTypeLocalized()
    {
        return $this->container['meter_type_localized'];
    }

    /**
     * Sets meter_type_localized
     *
     * @param string $meter_type_localized De Nederlandse vertaling van het metertype
     *
     * @return $this
     */
    public function setMeterTypeLocalized($meter_type_localized)
    {
        $this->container['meter_type_localized'] = $meter_type_localized;

        return $this;
    }

    /**
     * Gets meter_number
     *
     * @return string
     */
    public function getMeterNumber()
    {
        return $this->container['meter_number'];
    }

    /**
     * Sets meter_number
     *
     * @param string $meter_number Het meternummer
     *
     * @return $this
     */
    public function setMeterNumber($meter_number)
    {
        $this->container['meter_number'] = $meter_number;

        return $this;
    }

    /**
     * Gets no_digits
     *
     * @return int
     */
    public function getNoDigits()
    {
        return $this->container['no_digits'];
    }

    /**
     * Sets no_digits
     *
     * @param int $no_digits Aantal getallen per telwerk
     *
     * @return $this
     */
    public function setNoDigits($no_digits)
    {
        $this->container['no_digits'] = $no_digits;

        return $this;
    }

    /**
     * Gets meter_registers_direction_type
     *
     * @return string
     */
    public function getMeterRegistersDirectionType()
    {
        return $this->container['meter_registers_direction_type'];
    }

    /**
     * Sets meter_registers_direction_type
     *
     * @param string $meter_registers_direction_type Omschrijving van het aantal telwerken en de richting van de telwerken.  L staat voor levering, T staat voor teruglevering.  LL is een meter met twee telwerken die beide levering registreren.  LT is een meter met twee telwerken waarvan de ene levering en de andere teruglevering registreert.
     *
     * @return $this
     */
    public function setMeterRegistersDirectionType($meter_registers_direction_type)
    {
        $allowedValues = $this->getMeterRegistersDirectionTypeAllowableValues();
        if (!is_null($meter_registers_direction_type) && !in_array($meter_registers_direction_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'meter_registers_direction_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['meter_registers_direction_type'] = $meter_registers_direction_type;

        return $this;
    }

    /**
     * Gets meter_registers_direction_type_localized
     *
     * @return string
     */
    public function getMeterRegistersDirectionTypeLocalized()
    {
        return $this->container['meter_registers_direction_type_localized'];
    }

    /**
     * Sets meter_registers_direction_type_localized
     *
     * @param string $meter_registers_direction_type_localized Leesbare omschrijving van MeterRegistersDirectionType
     *
     * @return $this
     */
    public function setMeterRegistersDirectionTypeLocalized($meter_registers_direction_type_localized)
    {
        $this->container['meter_registers_direction_type_localized'] = $meter_registers_direction_type_localized;

        return $this;
    }

    /**
     * Gets meter_dial_position_order_type
     *
     * @return string
     */
    public function getMeterDialPositionOrderType()
    {
        return $this->container['meter_dial_position_order_type'];
    }

    /**
     * Sets meter_dial_position_order_type
     *
     * @param string $meter_dial_position_order_type Geeft aan welke telweken volume van het normaaltarief registreren en welke telwerken het volume van het daltarief
     *
     * @return $this
     */
    public function setMeterDialPositionOrderType($meter_dial_position_order_type)
    {
        $allowedValues = $this->getMeterDialPositionOrderTypeAllowableValues();
        if (!is_null($meter_dial_position_order_type) && !in_array($meter_dial_position_order_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'meter_dial_position_order_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['meter_dial_position_order_type'] = $meter_dial_position_order_type;

        return $this;
    }

    /**
     * Gets meter_dial_position_order_type_localized
     *
     * @return string
     */
    public function getMeterDialPositionOrderTypeLocalized()
    {
        return $this->container['meter_dial_position_order_type_localized'];
    }

    /**
     * Sets meter_dial_position_order_type_localized
     *
     * @param string $meter_dial_position_order_type_localized Leesbare omschrijving van MeterDialPositionOrderType
     *
     * @return $this
     */
    public function setMeterDialPositionOrderTypeLocalized($meter_dial_position_order_type_localized)
    {
        $this->container['meter_dial_position_order_type_localized'] = $meter_dial_position_order_type_localized;

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



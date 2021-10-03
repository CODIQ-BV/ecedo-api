<?php
/**
 * EcedoERPCRMInterfaceApiCustomProfilePostData
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
 * EcedoERPCRMInterfaceApiCustomProfilePostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiCustomProfilePostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.CustomProfilePostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'description' => 'string',
        'market_segment' => 'string',
        'type_of_supply' => 'string',
        'type_of_curve' => 'string',
        'profile_type' => 'string',
        'start_date' => '\DateTime',
        'connection_id' => 'string',
        'rows' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiCustomProfileRowPostData[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'description' => null,
        'market_segment' => null,
        'type_of_supply' => null,
        'type_of_curve' => null,
        'profile_type' => null,
        'start_date' => 'date',
        'connection_id' => 'uuid',
        'rows' => null
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
        'description' => 'Description',
        'market_segment' => 'MarketSegment',
        'type_of_supply' => 'TypeOfSupply',
        'type_of_curve' => 'TypeOfCurve',
        'profile_type' => 'ProfileType',
        'start_date' => 'StartDate',
        'connection_id' => 'ConnectionId',
        'rows' => 'Rows'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'description' => 'setDescription',
        'market_segment' => 'setMarketSegment',
        'type_of_supply' => 'setTypeOfSupply',
        'type_of_curve' => 'setTypeOfCurve',
        'profile_type' => 'setProfileType',
        'start_date' => 'setStartDate',
        'connection_id' => 'setConnectionId',
        'rows' => 'setRows'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'description' => 'getDescription',
        'market_segment' => 'getMarketSegment',
        'type_of_supply' => 'getTypeOfSupply',
        'type_of_curve' => 'getTypeOfCurve',
        'profile_type' => 'getProfileType',
        'start_date' => 'getStartDate',
        'connection_id' => 'getConnectionId',
        'rows' => 'getRows'
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

    const MARKET_SEGMENT_ELECTRICITY = 'Electricity';
    const MARKET_SEGMENT_GAS = 'Gas';
    const TYPE_OF_SUPPLY_LEVERING = 'Levering';
    const TYPE_OF_SUPPLY_TERUGLEVERING = 'Teruglevering';
    const TYPE_OF_CURVE_CAL = 'Cal';
    const TYPE_OF_CURVE_Q1 = 'Q1';
    const TYPE_OF_CURVE_Q2 = 'Q2';
    const TYPE_OF_CURVE_Q3 = 'Q3';
    const TYPE_OF_CURVE_Q4 = 'Q4';
    const PROFILE_TYPE_USAGE_PROFILE = 'UsageProfile';
    const PROFILE_TYPE_PRICE_CURVE = 'PriceCurve';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMarketSegmentAllowableValues()
    {
        return [
            self::MARKET_SEGMENT_ELECTRICITY,
            self::MARKET_SEGMENT_GAS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeOfSupplyAllowableValues()
    {
        return [
            self::TYPE_OF_SUPPLY_LEVERING,
            self::TYPE_OF_SUPPLY_TERUGLEVERING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeOfCurveAllowableValues()
    {
        return [
            self::TYPE_OF_CURVE_CAL,
            self::TYPE_OF_CURVE_Q1,
            self::TYPE_OF_CURVE_Q2,
            self::TYPE_OF_CURVE_Q3,
            self::TYPE_OF_CURVE_Q4,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProfileTypeAllowableValues()
    {
        return [
            self::PROFILE_TYPE_USAGE_PROFILE,
            self::PROFILE_TYPE_PRICE_CURVE,
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['market_segment'] = isset($data['market_segment']) ? $data['market_segment'] : null;
        $this->container['type_of_supply'] = isset($data['type_of_supply']) ? $data['type_of_supply'] : null;
        $this->container['type_of_curve'] = isset($data['type_of_curve']) ? $data['type_of_curve'] : null;
        $this->container['profile_type'] = isset($data['profile_type']) ? $data['profile_type'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['rows'] = isset($data['rows']) ? $data['rows'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getMarketSegmentAllowableValues();
        if (!is_null($this->container['market_segment']) && !in_array($this->container['market_segment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'market_segment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeOfSupplyAllowableValues();
        if (!is_null($this->container['type_of_supply']) && !in_array($this->container['type_of_supply'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type_of_supply', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeOfCurveAllowableValues();
        if (!is_null($this->container['type_of_curve']) && !in_array($this->container['type_of_curve'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type_of_curve', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getProfileTypeAllowableValues();
        if (!is_null($this->container['profile_type']) && !in_array($this->container['profile_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'profile_type', must be one of '%s'",
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
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets market_segment
     *
     * @return string
     */
    public function getMarketSegment()
    {
        return $this->container['market_segment'];
    }

    /**
     * Sets market_segment
     *
     * @param string $market_segment market_segment
     *
     * @return $this
     */
    public function setMarketSegment($market_segment)
    {
        $allowedValues = $this->getMarketSegmentAllowableValues();
        if (!is_null($market_segment) && !in_array($market_segment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'market_segment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['market_segment'] = $market_segment;

        return $this;
    }

    /**
     * Gets type_of_supply
     *
     * @return string
     */
    public function getTypeOfSupply()
    {
        return $this->container['type_of_supply'];
    }

    /**
     * Sets type_of_supply
     *
     * @param string $type_of_supply type_of_supply
     *
     * @return $this
     */
    public function setTypeOfSupply($type_of_supply)
    {
        $allowedValues = $this->getTypeOfSupplyAllowableValues();
        if (!is_null($type_of_supply) && !in_array($type_of_supply, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type_of_supply', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_of_supply'] = $type_of_supply;

        return $this;
    }

    /**
     * Gets type_of_curve
     *
     * @return string
     */
    public function getTypeOfCurve()
    {
        return $this->container['type_of_curve'];
    }

    /**
     * Sets type_of_curve
     *
     * @param string $type_of_curve type_of_curve
     *
     * @return $this
     */
    public function setTypeOfCurve($type_of_curve)
    {
        $allowedValues = $this->getTypeOfCurveAllowableValues();
        if (!is_null($type_of_curve) && !in_array($type_of_curve, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type_of_curve', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type_of_curve'] = $type_of_curve;

        return $this;
    }

    /**
     * Gets profile_type
     *
     * @return string
     */
    public function getProfileType()
    {
        return $this->container['profile_type'];
    }

    /**
     * Sets profile_type
     *
     * @param string $profile_type profile_type
     *
     * @return $this
     */
    public function setProfileType($profile_type)
    {
        $allowedValues = $this->getProfileTypeAllowableValues();
        if (!is_null($profile_type) && !in_array($profile_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'profile_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['profile_type'] = $profile_type;

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
     * Gets rows
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiCustomProfileRowPostData[]
     */
    public function getRows()
    {
        return $this->container['rows'];
    }

    /**
     * Sets rows
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiCustomProfileRowPostData[] $rows rows
     *
     * @return $this
     */
    public function setRows($rows)
    {
        $this->container['rows'] = $rows;

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



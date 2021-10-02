<?php
/**
 * EcedoERPCRMInterfaceApiOpenMeasurementDetailData
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
 * EcedoERPCRMInterfaceApiOpenMeasurementDetailData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiOpenMeasurementDetailData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.OpenMeasurementDetailData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'measurement_date' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'meter_id' => 'string',
        'tariff_zone' => 'string',
        'tariff_zone_localized' => 'string',
        'measurement' => 'int',
        'usage' => 'int',
        'tmr_origin' => 'string',
        'assessor_ean' => 'string',
        'calorific_usage' => 'int',
        'calorific_usage_unit' => 'string',
        'period_localized' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'measurement_date' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'meter_id' => null,
        'tariff_zone' => null,
        'tariff_zone_localized' => null,
        'measurement' => 'int32',
        'usage' => 'int32',
        'tmr_origin' => null,
        'assessor_ean' => null,
        'calorific_usage' => 'int32',
        'calorific_usage_unit' => null,
        'period_localized' => null
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
        'measurement_date' => 'MeasurementDate',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'meter_id' => 'MeterId',
        'tariff_zone' => 'TariffZone',
        'tariff_zone_localized' => 'TariffZoneLocalized',
        'measurement' => 'Measurement',
        'usage' => 'Usage',
        'tmr_origin' => 'TMROrigin',
        'assessor_ean' => 'AssessorEAN',
        'calorific_usage' => 'CalorificUsage',
        'calorific_usage_unit' => 'CalorificUsageUnit',
        'period_localized' => 'PeriodLocalized'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'measurement_date' => 'setMeasurementDate',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'meter_id' => 'setMeterId',
        'tariff_zone' => 'setTariffZone',
        'tariff_zone_localized' => 'setTariffZoneLocalized',
        'measurement' => 'setMeasurement',
        'usage' => 'setUsage',
        'tmr_origin' => 'setTmrOrigin',
        'assessor_ean' => 'setAssessorEan',
        'calorific_usage' => 'setCalorificUsage',
        'calorific_usage_unit' => 'setCalorificUsageUnit',
        'period_localized' => 'setPeriodLocalized'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'measurement_date' => 'getMeasurementDate',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'meter_id' => 'getMeterId',
        'tariff_zone' => 'getTariffZone',
        'tariff_zone_localized' => 'getTariffZoneLocalized',
        'measurement' => 'getMeasurement',
        'usage' => 'getUsage',
        'tmr_origin' => 'getTmrOrigin',
        'assessor_ean' => 'getAssessorEan',
        'calorific_usage' => 'getCalorificUsage',
        'calorific_usage_unit' => 'getCalorificUsageUnit',
        'period_localized' => 'getPeriodLocalized'
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

    const TARIFF_ZONE_E10 = 'E10';
    const TARIFF_ZONE_E11 = 'E11';
    const TARIFF_ZONE_T10 = 'T10';
    const TARIFF_ZONE_T11 = 'T11';
    const CALORIFIC_USAGE_UNIT_KWH = 'KWH';
    const CALORIFIC_USAGE_UNIT_KWT = 'KWT';
    const CALORIFIC_USAGE_UNIT_MTQ = 'MTQ';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTariffZoneAllowableValues()
    {
        return [
            self::TARIFF_ZONE_E10,
            self::TARIFF_ZONE_E11,
            self::TARIFF_ZONE_T10,
            self::TARIFF_ZONE_T11,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCalorificUsageUnitAllowableValues()
    {
        return [
            self::CALORIFIC_USAGE_UNIT_KWH,
            self::CALORIFIC_USAGE_UNIT_KWT,
            self::CALORIFIC_USAGE_UNIT_MTQ,
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
        $this->container['measurement_date'] = isset($data['measurement_date']) ? $data['measurement_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['meter_id'] = isset($data['meter_id']) ? $data['meter_id'] : null;
        $this->container['tariff_zone'] = isset($data['tariff_zone']) ? $data['tariff_zone'] : null;
        $this->container['tariff_zone_localized'] = isset($data['tariff_zone_localized']) ? $data['tariff_zone_localized'] : null;
        $this->container['measurement'] = isset($data['measurement']) ? $data['measurement'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['tmr_origin'] = isset($data['tmr_origin']) ? $data['tmr_origin'] : null;
        $this->container['assessor_ean'] = isset($data['assessor_ean']) ? $data['assessor_ean'] : null;
        $this->container['calorific_usage'] = isset($data['calorific_usage']) ? $data['calorific_usage'] : null;
        $this->container['calorific_usage_unit'] = isset($data['calorific_usage_unit']) ? $data['calorific_usage_unit'] : null;
        $this->container['period_localized'] = isset($data['period_localized']) ? $data['period_localized'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTariffZoneAllowableValues();
        if (!is_null($this->container['tariff_zone']) && !in_array($this->container['tariff_zone'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'tariff_zone', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getCalorificUsageUnitAllowableValues();
        if (!is_null($this->container['calorific_usage_unit']) && !in_array($this->container['calorific_usage_unit'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'calorific_usage_unit', must be one of '%s'",
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
     * Gets measurement_date
     *
     * @return string
     */
    public function getMeasurementDate()
    {
        return $this->container['measurement_date'];
    }

    /**
     * Sets measurement_date
     *
     * @param string $measurement_date measurement_date
     *
     * @return $this
     */
    public function setMeasurementDate($measurement_date)
    {
        $this->container['measurement_date'] = $measurement_date;

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
     * Gets tariff_zone
     *
     * @return string
     */
    public function getTariffZone()
    {
        return $this->container['tariff_zone'];
    }

    /**
     * Sets tariff_zone
     *
     * @param string $tariff_zone tariff_zone
     *
     * @return $this
     */
    public function setTariffZone($tariff_zone)
    {
        $allowedValues = $this->getTariffZoneAllowableValues();
        if (!is_null($tariff_zone) && !in_array($tariff_zone, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'tariff_zone', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['tariff_zone'] = $tariff_zone;

        return $this;
    }

    /**
     * Gets tariff_zone_localized
     *
     * @return string
     */
    public function getTariffZoneLocalized()
    {
        return $this->container['tariff_zone_localized'];
    }

    /**
     * Sets tariff_zone_localized
     *
     * @param string $tariff_zone_localized tariff_zone_localized
     *
     * @return $this
     */
    public function setTariffZoneLocalized($tariff_zone_localized)
    {
        $this->container['tariff_zone_localized'] = $tariff_zone_localized;

        return $this;
    }

    /**
     * Gets measurement
     *
     * @return int
     */
    public function getMeasurement()
    {
        return $this->container['measurement'];
    }

    /**
     * Sets measurement
     *
     * @param int $measurement measurement
     *
     * @return $this
     */
    public function setMeasurement($measurement)
    {
        $this->container['measurement'] = $measurement;

        return $this;
    }

    /**
     * Gets usage
     *
     * @return int
     */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
     * Sets usage
     *
     * @param int $usage usage
     *
     * @return $this
     */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;

        return $this;
    }

    /**
     * Gets tmr_origin
     *
     * @return string
     */
    public function getTmrOrigin()
    {
        return $this->container['tmr_origin'];
    }

    /**
     * Sets tmr_origin
     *
     * @param string $tmr_origin tmr_origin
     *
     * @return $this
     */
    public function setTmrOrigin($tmr_origin)
    {
        $this->container['tmr_origin'] = $tmr_origin;

        return $this;
    }

    /**
     * Gets assessor_ean
     *
     * @return string
     */
    public function getAssessorEan()
    {
        return $this->container['assessor_ean'];
    }

    /**
     * Sets assessor_ean
     *
     * @param string $assessor_ean assessor_ean
     *
     * @return $this
     */
    public function setAssessorEan($assessor_ean)
    {
        $this->container['assessor_ean'] = $assessor_ean;

        return $this;
    }

    /**
     * Gets calorific_usage
     *
     * @return int
     */
    public function getCalorificUsage()
    {
        return $this->container['calorific_usage'];
    }

    /**
     * Sets calorific_usage
     *
     * @param int $calorific_usage calorific_usage
     *
     * @return $this
     */
    public function setCalorificUsage($calorific_usage)
    {
        $this->container['calorific_usage'] = $calorific_usage;

        return $this;
    }

    /**
     * Gets calorific_usage_unit
     *
     * @return string
     */
    public function getCalorificUsageUnit()
    {
        return $this->container['calorific_usage_unit'];
    }

    /**
     * Sets calorific_usage_unit
     *
     * @param string $calorific_usage_unit calorific_usage_unit
     *
     * @return $this
     */
    public function setCalorificUsageUnit($calorific_usage_unit)
    {
        $allowedValues = $this->getCalorificUsageUnitAllowableValues();
        if (!is_null($calorific_usage_unit) && !in_array($calorific_usage_unit, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'calorific_usage_unit', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['calorific_usage_unit'] = $calorific_usage_unit;

        return $this;
    }

    /**
     * Gets period_localized
     *
     * @return string
     */
    public function getPeriodLocalized()
    {
        return $this->container['period_localized'];
    }

    /**
     * Sets period_localized
     *
     * @param string $period_localized period_localized
     *
     * @return $this
     */
    public function setPeriodLocalized($period_localized)
    {
        $this->container['period_localized'] = $period_localized;

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



<?php
/**
 * EcedoERPCRMInterfaceReadModelTelemetryTelemetryDto
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
 * EcedoERPCRMInterfaceReadModelTelemetryTelemetryDto Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceReadModelTelemetryTelemetryDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.ReadModel.Telemetry.TelemetryDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'telemetry_id' => 'string',
        'connection_id' => 'string',
        'ean' => 'string',
        'start_date' => '\DateTime',
        'start_date_localized' => 'string',
        'end_date' => '\DateTime',
        'end_date_localized' => 'string',
        'value' => 'double',
        'raw_unit' => 'int',
        'unit' => 'string',
        'unit_localized' => 'string',
        'version' => 'int',
        'revision' => 'int',
        'reference_date_time' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'telemetry_id' => null,
        'connection_id' => 'uuid',
        'ean' => null,
        'start_date' => 'date-time',
        'start_date_localized' => null,
        'end_date' => 'date-time',
        'end_date_localized' => null,
        'value' => 'double',
        'raw_unit' => 'int32',
        'unit' => null,
        'unit_localized' => null,
        'version' => 'int32',
        'revision' => 'int32',
        'reference_date_time' => 'date-time'
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
        'telemetry_id' => 'TelemetryId',
        'connection_id' => 'ConnectionId',
        'ean' => 'EAN',
        'start_date' => 'StartDate',
        'start_date_localized' => 'StartDateLocalized',
        'end_date' => 'EndDate',
        'end_date_localized' => 'EndDateLocalized',
        'value' => 'Value',
        'raw_unit' => 'RawUnit',
        'unit' => 'Unit',
        'unit_localized' => 'UnitLocalized',
        'version' => 'Version',
        'revision' => 'Revision',
        'reference_date_time' => 'ReferenceDateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'telemetry_id' => 'setTelemetryId',
        'connection_id' => 'setConnectionId',
        'ean' => 'setEan',
        'start_date' => 'setStartDate',
        'start_date_localized' => 'setStartDateLocalized',
        'end_date' => 'setEndDate',
        'end_date_localized' => 'setEndDateLocalized',
        'value' => 'setValue',
        'raw_unit' => 'setRawUnit',
        'unit' => 'setUnit',
        'unit_localized' => 'setUnitLocalized',
        'version' => 'setVersion',
        'revision' => 'setRevision',
        'reference_date_time' => 'setReferenceDateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'telemetry_id' => 'getTelemetryId',
        'connection_id' => 'getConnectionId',
        'ean' => 'getEan',
        'start_date' => 'getStartDate',
        'start_date_localized' => 'getStartDateLocalized',
        'end_date' => 'getEndDate',
        'end_date_localized' => 'getEndDateLocalized',
        'value' => 'getValue',
        'raw_unit' => 'getRawUnit',
        'unit' => 'getUnit',
        'unit_localized' => 'getUnitLocalized',
        'version' => 'getVersion',
        'revision' => 'getRevision',
        'reference_date_time' => 'getReferenceDateTime'
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

    const UNIT_KWH = 'KWH';
    const UNIT_KWT = 'KWT';
    const UNIT_MTQ = 'MTQ';
    const UNIT_WH = 'WH';
    const UNIT_MJ = 'MJ';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_KWH,
            self::UNIT_KWT,
            self::UNIT_MTQ,
            self::UNIT_WH,
            self::UNIT_MJ,
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
        $this->container['telemetry_id'] = isset($data['telemetry_id']) ? $data['telemetry_id'] : null;
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['start_date_localized'] = isset($data['start_date_localized']) ? $data['start_date_localized'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['end_date_localized'] = isset($data['end_date_localized']) ? $data['end_date_localized'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['raw_unit'] = isset($data['raw_unit']) ? $data['raw_unit'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['unit_localized'] = isset($data['unit_localized']) ? $data['unit_localized'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['reference_date_time'] = isset($data['reference_date_time']) ? $data['reference_date_time'] : null;
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
     * Gets telemetry_id
     *
     * @return string
     */
    public function getTelemetryId()
    {
        return $this->container['telemetry_id'];
    }

    /**
     * Sets telemetry_id
     *
     * @param string $telemetry_id telemetry_id
     *
     * @return $this
     */
    public function setTelemetryId($telemetry_id)
    {
        $this->container['telemetry_id'] = $telemetry_id;

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
     * Gets ean
     *
     * @return string
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string $ean ean
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

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
     * Gets start_date_localized
     *
     * @return string
     */
    public function getStartDateLocalized()
    {
        return $this->container['start_date_localized'];
    }

    /**
     * Sets start_date_localized
     *
     * @param string $start_date_localized start_date_localized
     *
     * @return $this
     */
    public function setStartDateLocalized($start_date_localized)
    {
        $this->container['start_date_localized'] = $start_date_localized;

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
     * Gets end_date_localized
     *
     * @return string
     */
    public function getEndDateLocalized()
    {
        return $this->container['end_date_localized'];
    }

    /**
     * Sets end_date_localized
     *
     * @param string $end_date_localized end_date_localized
     *
     * @return $this
     */
    public function setEndDateLocalized($end_date_localized)
    {
        $this->container['end_date_localized'] = $end_date_localized;

        return $this;
    }

    /**
     * Gets value
     *
     * @return double
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param double $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets raw_unit
     *
     * @return int
     */
    public function getRawUnit()
    {
        return $this->container['raw_unit'];
    }

    /**
     * Sets raw_unit
     *
     * @param int $raw_unit raw_unit
     *
     * @return $this
     */
    public function setRawUnit($raw_unit)
    {
        $this->container['raw_unit'] = $raw_unit;

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
     * Gets unit_localized
     *
     * @return string
     */
    public function getUnitLocalized()
    {
        return $this->container['unit_localized'];
    }

    /**
     * Sets unit_localized
     *
     * @param string $unit_localized unit_localized
     *
     * @return $this
     */
    public function setUnitLocalized($unit_localized)
    {
        $this->container['unit_localized'] = $unit_localized;

        return $this;
    }

    /**
     * Gets version
     *
     * @return int
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param int $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets revision
     *
     * @return int
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param int $revision revision
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets reference_date_time
     *
     * @return \DateTime
     */
    public function getReferenceDateTime()
    {
        return $this->container['reference_date_time'];
    }

    /**
     * Sets reference_date_time
     *
     * @param \DateTime $reference_date_time reference_date_time
     *
     * @return $this
     */
    public function setReferenceDateTime($reference_date_time)
    {
        $this->container['reference_date_time'] = $reference_date_time;

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



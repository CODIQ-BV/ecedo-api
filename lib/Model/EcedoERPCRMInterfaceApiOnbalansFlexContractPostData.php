<?php
/**
 * EcedoERPCRMInterfaceApiOnbalansFlexContractPostData
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
 * EcedoERPCRMInterfaceApiOnbalansFlexContractPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiOnbalansFlexContractPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.OnbalansFlexContractPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cluster_reference' => 'string',
        'smart_device_reference' => 'string',
        'smart_device_description' => 'string',
        'smart_device_type' => 'string',
        'agreement_date' => '\DateTime',
        'reference' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'proposition_reference' => 'string',
        'comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cluster_reference' => null,
        'smart_device_reference' => null,
        'smart_device_description' => null,
        'smart_device_type' => null,
        'agreement_date' => 'date',
        'reference' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'proposition_reference' => null,
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
        'cluster_reference' => 'ClusterReference',
        'smart_device_reference' => 'SmartDeviceReference',
        'smart_device_description' => 'SmartDeviceDescription',
        'smart_device_type' => 'SmartDeviceType',
        'agreement_date' => 'AgreementDate',
        'reference' => 'Reference',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'proposition_reference' => 'PropositionReference',
        'comment' => 'Comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cluster_reference' => 'setClusterReference',
        'smart_device_reference' => 'setSmartDeviceReference',
        'smart_device_description' => 'setSmartDeviceDescription',
        'smart_device_type' => 'setSmartDeviceType',
        'agreement_date' => 'setAgreementDate',
        'reference' => 'setReference',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'proposition_reference' => 'setPropositionReference',
        'comment' => 'setComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cluster_reference' => 'getClusterReference',
        'smart_device_reference' => 'getSmartDeviceReference',
        'smart_device_description' => 'getSmartDeviceDescription',
        'smart_device_type' => 'getSmartDeviceType',
        'agreement_date' => 'getAgreementDate',
        'reference' => 'getReference',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'proposition_reference' => 'getPropositionReference',
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

    const SMART_DEVICE_TYPE_CAR = 'Car';
    const SMART_DEVICE_TYPE_HOME_DEVICE = 'HomeDevice';
    const SMART_DEVICE_TYPE_EV_CHARGER = 'EvCharger';
    const SMART_DEVICE_TYPE_BATTERY = 'Battery';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSmartDeviceTypeAllowableValues()
    {
        return [
            self::SMART_DEVICE_TYPE_CAR,
            self::SMART_DEVICE_TYPE_HOME_DEVICE,
            self::SMART_DEVICE_TYPE_EV_CHARGER,
            self::SMART_DEVICE_TYPE_BATTERY,
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
        $this->container['cluster_reference'] = isset($data['cluster_reference']) ? $data['cluster_reference'] : null;
        $this->container['smart_device_reference'] = isset($data['smart_device_reference']) ? $data['smart_device_reference'] : null;
        $this->container['smart_device_description'] = isset($data['smart_device_description']) ? $data['smart_device_description'] : null;
        $this->container['smart_device_type'] = isset($data['smart_device_type']) ? $data['smart_device_type'] : null;
        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['proposition_reference'] = isset($data['proposition_reference']) ? $data['proposition_reference'] : null;
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

        $allowedValues = $this->getSmartDeviceTypeAllowableValues();
        if (!is_null($this->container['smart_device_type']) && !in_array($this->container['smart_device_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'smart_device_type', must be one of '%s'",
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
     * Gets cluster_reference
     *
     * @return string
     */
    public function getClusterReference()
    {
        return $this->container['cluster_reference'];
    }

    /**
     * Sets cluster_reference
     *
     * @param string $cluster_reference cluster_reference
     *
     * @return $this
     */
    public function setClusterReference($cluster_reference)
    {
        $this->container['cluster_reference'] = $cluster_reference;

        return $this;
    }

    /**
     * Gets smart_device_reference
     *
     * @return string
     */
    public function getSmartDeviceReference()
    {
        return $this->container['smart_device_reference'];
    }

    /**
     * Sets smart_device_reference
     *
     * @param string $smart_device_reference smart_device_reference
     *
     * @return $this
     */
    public function setSmartDeviceReference($smart_device_reference)
    {
        $this->container['smart_device_reference'] = $smart_device_reference;

        return $this;
    }

    /**
     * Gets smart_device_description
     *
     * @return string
     */
    public function getSmartDeviceDescription()
    {
        return $this->container['smart_device_description'];
    }

    /**
     * Sets smart_device_description
     *
     * @param string $smart_device_description smart_device_description
     *
     * @return $this
     */
    public function setSmartDeviceDescription($smart_device_description)
    {
        $this->container['smart_device_description'] = $smart_device_description;

        return $this;
    }

    /**
     * Gets smart_device_type
     *
     * @return string
     */
    public function getSmartDeviceType()
    {
        return $this->container['smart_device_type'];
    }

    /**
     * Sets smart_device_type
     *
     * @param string $smart_device_type smart_device_type
     *
     * @return $this
     */
    public function setSmartDeviceType($smart_device_type)
    {
        $allowedValues = $this->getSmartDeviceTypeAllowableValues();
        if (!is_null($smart_device_type) && !in_array($smart_device_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'smart_device_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['smart_device_type'] = $smart_device_type;

        return $this;
    }

    /**
     * Gets agreement_date
     *
     * @return \DateTime
     */
    public function getAgreementDate()
    {
        return $this->container['agreement_date'];
    }

    /**
     * Sets agreement_date
     *
     * @param \DateTime $agreement_date agreement_date
     *
     * @return $this
     */
    public function setAgreementDate($agreement_date)
    {
        $this->container['agreement_date'] = $agreement_date;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

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



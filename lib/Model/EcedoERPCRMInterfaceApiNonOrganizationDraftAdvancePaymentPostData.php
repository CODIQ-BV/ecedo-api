<?php
/**
 * EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostData
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
 * EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.NonOrganizationDraftAdvancePaymentPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_type' => 'string',
        'agreement_date' => '\DateTime',
        'month' => '\DateTime',
        'connections' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostConnectionData[]',
        'do_combine_rows' => 'bool',
        'mandate_id' => 'string',
        'iban_key' => 'string',
        'birth_day_key' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_type' => null,
        'agreement_date' => 'date',
        'month' => 'date',
        'connections' => null,
        'do_combine_rows' => null,
        'mandate_id' => null,
        'iban_key' => null,
        'birth_day_key' => null
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
        'organization_type' => 'OrganizationType',
        'agreement_date' => 'AgreementDate',
        'month' => 'Month',
        'connections' => 'Connections',
        'do_combine_rows' => 'DoCombineRows',
        'mandate_id' => 'MandateId',
        'iban_key' => 'IBANKey',
        'birth_day_key' => 'BirthDayKey'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_type' => 'setOrganizationType',
        'agreement_date' => 'setAgreementDate',
        'month' => 'setMonth',
        'connections' => 'setConnections',
        'do_combine_rows' => 'setDoCombineRows',
        'mandate_id' => 'setMandateId',
        'iban_key' => 'setIbanKey',
        'birth_day_key' => 'setBirthDayKey'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_type' => 'getOrganizationType',
        'agreement_date' => 'getAgreementDate',
        'month' => 'getMonth',
        'connections' => 'getConnections',
        'do_combine_rows' => 'getDoCombineRows',
        'mandate_id' => 'getMandateId',
        'iban_key' => 'getIbanKey',
        'birth_day_key' => 'getBirthDayKey'
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

    const ORGANIZATION_TYPE_BUSINESS = 'Business';
    const ORGANIZATION_TYPE_CONSUMER = 'Consumer';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrganizationTypeAllowableValues()
    {
        return [
            self::ORGANIZATION_TYPE_BUSINESS,
            self::ORGANIZATION_TYPE_CONSUMER,
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
        $this->container['organization_type'] = isset($data['organization_type']) ? $data['organization_type'] : null;
        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['month'] = isset($data['month']) ? $data['month'] : null;
        $this->container['connections'] = isset($data['connections']) ? $data['connections'] : null;
        $this->container['do_combine_rows'] = isset($data['do_combine_rows']) ? $data['do_combine_rows'] : null;
        $this->container['mandate_id'] = isset($data['mandate_id']) ? $data['mandate_id'] : null;
        $this->container['iban_key'] = isset($data['iban_key']) ? $data['iban_key'] : null;
        $this->container['birth_day_key'] = isset($data['birth_day_key']) ? $data['birth_day_key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getOrganizationTypeAllowableValues();
        if (!is_null($this->container['organization_type']) && !in_array($this->container['organization_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'organization_type', must be one of '%s'",
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
     * Gets organization_type
     *
     * @return string
     */
    public function getOrganizationType()
    {
        return $this->container['organization_type'];
    }

    /**
     * Sets organization_type
     *
     * @param string $organization_type organization_type
     *
     * @return $this
     */
    public function setOrganizationType($organization_type)
    {
        $allowedValues = $this->getOrganizationTypeAllowableValues();
        if (!is_null($organization_type) && !in_array($organization_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'organization_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['organization_type'] = $organization_type;

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
     * Gets month
     *
     * @return \DateTime
     */
    public function getMonth()
    {
        return $this->container['month'];
    }

    /**
     * Sets month
     *
     * @param \DateTime $month month
     *
     * @return $this
     */
    public function setMonth($month)
    {
        $this->container['month'] = $month;

        return $this;
    }

    /**
     * Gets connections
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostConnectionData[]
     */
    public function getConnections()
    {
        return $this->container['connections'];
    }

    /**
     * Sets connections
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostConnectionData[] $connections connections
     *
     * @return $this
     */
    public function setConnections($connections)
    {
        $this->container['connections'] = $connections;

        return $this;
    }

    /**
     * Gets do_combine_rows
     *
     * @return bool
     */
    public function getDoCombineRows()
    {
        return $this->container['do_combine_rows'];
    }

    /**
     * Sets do_combine_rows
     *
     * @param bool $do_combine_rows do_combine_rows
     *
     * @return $this
     */
    public function setDoCombineRows($do_combine_rows)
    {
        $this->container['do_combine_rows'] = $do_combine_rows;

        return $this;
    }

    /**
     * Gets mandate_id
     *
     * @return string
     */
    public function getMandateId()
    {
        return $this->container['mandate_id'];
    }

    /**
     * Sets mandate_id
     *
     * @param string $mandate_id mandate_id
     *
     * @return $this
     */
    public function setMandateId($mandate_id)
    {
        $this->container['mandate_id'] = $mandate_id;

        return $this;
    }

    /**
     * Gets iban_key
     *
     * @return string
     */
    public function getIbanKey()
    {
        return $this->container['iban_key'];
    }

    /**
     * Sets iban_key
     *
     * @param string $iban_key iban_key
     *
     * @return $this
     */
    public function setIbanKey($iban_key)
    {
        $this->container['iban_key'] = $iban_key;

        return $this;
    }

    /**
     * Gets birth_day_key
     *
     * @return string
     */
    public function getBirthDayKey()
    {
        return $this->container['birth_day_key'];
    }

    /**
     * Sets birth_day_key
     *
     * @param string $birth_day_key birth_day_key
     *
     * @return $this
     */
    public function setBirthDayKey($birth_day_key)
    {
        $this->container['birth_day_key'] = $birth_day_key;

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



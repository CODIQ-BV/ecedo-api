<?php
/**
 * EcedoERPCRMInterfaceGDPRContract
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
 * EcedoERPCRMInterfaceGDPRContract Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceGDPRContract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.GDPR.Contract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreement_date' => '\DateTime',
        'period_localized' => 'string',
        'proposition_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agreement_date' => 'date',
        'period_localized' => null,
        'proposition_description' => null
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
        'agreement_date' => 'AgreementDate',
        'period_localized' => 'PeriodLocalized',
        'proposition_description' => 'PropositionDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreement_date' => 'setAgreementDate',
        'period_localized' => 'setPeriodLocalized',
        'proposition_description' => 'setPropositionDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreement_date' => 'getAgreementDate',
        'period_localized' => 'getPeriodLocalized',
        'proposition_description' => 'getPropositionDescription'
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
        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['period_localized'] = isset($data['period_localized']) ? $data['period_localized'] : null;
        $this->container['proposition_description'] = isset($data['proposition_description']) ? $data['proposition_description'] : null;
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
     * Gets proposition_description
     *
     * @return string
     */
    public function getPropositionDescription()
    {
        return $this->container['proposition_description'];
    }

    /**
     * Sets proposition_description
     *
     * @param string $proposition_description proposition_description
     *
     * @return $this
     */
    public function setPropositionDescription($proposition_description)
    {
        $this->container['proposition_description'] = $proposition_description;

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



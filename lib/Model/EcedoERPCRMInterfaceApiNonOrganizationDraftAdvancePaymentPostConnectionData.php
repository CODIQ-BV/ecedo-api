<?php
/**
 * EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostConnectionData
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
 * EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostConnectionData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostConnectionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.NonOrganizationDraftAdvancePaymentPostConnectionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'market_segment' => 'string',
        'ean' => 'string',
        'agreement_date' => '\DateTime',
        'proposition_reference' => 'string',
        'proposition_id' => 'string',
        'meelift_proposition_reference' => 'string',
        'meelift_proposition_id' => 'string',
        'annual_standard_usage' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiAnnualStandardUsage',
        'billing_items' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftBillingItem[]',
        'contract_prices' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiPriceGroupPostData[]',
        'is_residential' => 'bool',
        'usage_type' => 'string',
        'profile' => 'string',
        'cap_tar_code' => 'string',
        'supplier_ean' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'market_segment' => null,
        'ean' => null,
        'agreement_date' => 'date',
        'proposition_reference' => null,
        'proposition_id' => 'uuid',
        'meelift_proposition_reference' => null,
        'meelift_proposition_id' => 'uuid',
        'annual_standard_usage' => null,
        'billing_items' => null,
        'contract_prices' => null,
        'is_residential' => null,
        'usage_type' => null,
        'profile' => null,
        'cap_tar_code' => null,
        'supplier_ean' => null
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
        'market_segment' => 'MarketSegment',
        'ean' => 'EAN',
        'agreement_date' => 'AgreementDate',
        'proposition_reference' => 'PropositionReference',
        'proposition_id' => 'PropositionId',
        'meelift_proposition_reference' => 'MeeliftPropositionReference',
        'meelift_proposition_id' => 'MeeliftPropositionId',
        'annual_standard_usage' => 'AnnualStandardUsage',
        'billing_items' => 'BillingItems',
        'contract_prices' => 'ContractPrices',
        'is_residential' => 'IsResidential',
        'usage_type' => 'UsageType',
        'profile' => 'Profile',
        'cap_tar_code' => 'CapTarCode',
        'supplier_ean' => 'SupplierEAN'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'market_segment' => 'setMarketSegment',
        'ean' => 'setEan',
        'agreement_date' => 'setAgreementDate',
        'proposition_reference' => 'setPropositionReference',
        'proposition_id' => 'setPropositionId',
        'meelift_proposition_reference' => 'setMeeliftPropositionReference',
        'meelift_proposition_id' => 'setMeeliftPropositionId',
        'annual_standard_usage' => 'setAnnualStandardUsage',
        'billing_items' => 'setBillingItems',
        'contract_prices' => 'setContractPrices',
        'is_residential' => 'setIsResidential',
        'usage_type' => 'setUsageType',
        'profile' => 'setProfile',
        'cap_tar_code' => 'setCapTarCode',
        'supplier_ean' => 'setSupplierEan'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'market_segment' => 'getMarketSegment',
        'ean' => 'getEan',
        'agreement_date' => 'getAgreementDate',
        'proposition_reference' => 'getPropositionReference',
        'proposition_id' => 'getPropositionId',
        'meelift_proposition_reference' => 'getMeeliftPropositionReference',
        'meelift_proposition_id' => 'getMeeliftPropositionId',
        'annual_standard_usage' => 'getAnnualStandardUsage',
        'billing_items' => 'getBillingItems',
        'contract_prices' => 'getContractPrices',
        'is_residential' => 'getIsResidential',
        'usage_type' => 'getUsageType',
        'profile' => 'getProfile',
        'cap_tar_code' => 'getCapTarCode',
        'supplier_ean' => 'getSupplierEan'
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
    const USAGE_TYPE_SMALL_CONSUMER = 'SmallConsumer';
    const USAGE_TYPE_LARGE_CONSUMER = 'LargeConsumer';
    

    
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
    public function getUsageTypeAllowableValues()
    {
        return [
            self::USAGE_TYPE_SMALL_CONSUMER,
            self::USAGE_TYPE_LARGE_CONSUMER,
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
        $this->container['market_segment'] = isset($data['market_segment']) ? $data['market_segment'] : null;
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['proposition_reference'] = isset($data['proposition_reference']) ? $data['proposition_reference'] : null;
        $this->container['proposition_id'] = isset($data['proposition_id']) ? $data['proposition_id'] : null;
        $this->container['meelift_proposition_reference'] = isset($data['meelift_proposition_reference']) ? $data['meelift_proposition_reference'] : null;
        $this->container['meelift_proposition_id'] = isset($data['meelift_proposition_id']) ? $data['meelift_proposition_id'] : null;
        $this->container['annual_standard_usage'] = isset($data['annual_standard_usage']) ? $data['annual_standard_usage'] : null;
        $this->container['billing_items'] = isset($data['billing_items']) ? $data['billing_items'] : null;
        $this->container['contract_prices'] = isset($data['contract_prices']) ? $data['contract_prices'] : null;
        $this->container['is_residential'] = isset($data['is_residential']) ? $data['is_residential'] : null;
        $this->container['usage_type'] = isset($data['usage_type']) ? $data['usage_type'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['cap_tar_code'] = isset($data['cap_tar_code']) ? $data['cap_tar_code'] : null;
        $this->container['supplier_ean'] = isset($data['supplier_ean']) ? $data['supplier_ean'] : null;
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

        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!is_null($this->container['usage_type']) && !in_array($this->container['usage_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'usage_type', must be one of '%s'",
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
     * Gets proposition_id
     *
     * @return string
     */
    public function getPropositionId()
    {
        return $this->container['proposition_id'];
    }

    /**
     * Sets proposition_id
     *
     * @param string $proposition_id proposition_id
     *
     * @return $this
     */
    public function setPropositionId($proposition_id)
    {
        $this->container['proposition_id'] = $proposition_id;

        return $this;
    }

    /**
     * Gets meelift_proposition_reference
     *
     * @return string
     */
    public function getMeeliftPropositionReference()
    {
        return $this->container['meelift_proposition_reference'];
    }

    /**
     * Sets meelift_proposition_reference
     *
     * @param string $meelift_proposition_reference meelift_proposition_reference
     *
     * @return $this
     */
    public function setMeeliftPropositionReference($meelift_proposition_reference)
    {
        $this->container['meelift_proposition_reference'] = $meelift_proposition_reference;

        return $this;
    }

    /**
     * Gets meelift_proposition_id
     *
     * @return string
     */
    public function getMeeliftPropositionId()
    {
        return $this->container['meelift_proposition_id'];
    }

    /**
     * Sets meelift_proposition_id
     *
     * @param string $meelift_proposition_id meelift_proposition_id
     *
     * @return $this
     */
    public function setMeeliftPropositionId($meelift_proposition_id)
    {
        $this->container['meelift_proposition_id'] = $meelift_proposition_id;

        return $this;
    }

    /**
     * Gets annual_standard_usage
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiAnnualStandardUsage
     */
    public function getAnnualStandardUsage()
    {
        return $this->container['annual_standard_usage'];
    }

    /**
     * Sets annual_standard_usage
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiAnnualStandardUsage $annual_standard_usage annual_standard_usage
     *
     * @return $this
     */
    public function setAnnualStandardUsage($annual_standard_usage)
    {
        $this->container['annual_standard_usage'] = $annual_standard_usage;

        return $this;
    }

    /**
     * Gets billing_items
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftBillingItem[]
     */
    public function getBillingItems()
    {
        return $this->container['billing_items'];
    }

    /**
     * Sets billing_items
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftBillingItem[] $billing_items billing_items
     *
     * @return $this
     */
    public function setBillingItems($billing_items)
    {
        $this->container['billing_items'] = $billing_items;

        return $this;
    }

    /**
     * Gets contract_prices
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiPriceGroupPostData[]
     */
    public function getContractPrices()
    {
        return $this->container['contract_prices'];
    }

    /**
     * Sets contract_prices
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiPriceGroupPostData[] $contract_prices contract_prices
     *
     * @return $this
     */
    public function setContractPrices($contract_prices)
    {
        $this->container['contract_prices'] = $contract_prices;

        return $this;
    }

    /**
     * Gets is_residential
     *
     * @return bool
     */
    public function getIsResidential()
    {
        return $this->container['is_residential'];
    }

    /**
     * Sets is_residential
     *
     * @param bool $is_residential is_residential
     *
     * @return $this
     */
    public function setIsResidential($is_residential)
    {
        $this->container['is_residential'] = $is_residential;

        return $this;
    }

    /**
     * Gets usage_type
     *
     * @return string
     */
    public function getUsageType()
    {
        return $this->container['usage_type'];
    }

    /**
     * Sets usage_type
     *
     * @param string $usage_type usage_type
     *
     * @return $this
     */
    public function setUsageType($usage_type)
    {
        $allowedValues = $this->getUsageTypeAllowableValues();
        if (!is_null($usage_type) && !in_array($usage_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'usage_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['usage_type'] = $usage_type;

        return $this;
    }

    /**
     * Gets profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     *
     * @param string $profile profile
     *
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets cap_tar_code
     *
     * @return string
     */
    public function getCapTarCode()
    {
        return $this->container['cap_tar_code'];
    }

    /**
     * Sets cap_tar_code
     *
     * @param string $cap_tar_code cap_tar_code
     *
     * @return $this
     */
    public function setCapTarCode($cap_tar_code)
    {
        $this->container['cap_tar_code'] = $cap_tar_code;

        return $this;
    }

    /**
     * Gets supplier_ean
     *
     * @return string
     */
    public function getSupplierEan()
    {
        return $this->container['supplier_ean'];
    }

    /**
     * Sets supplier_ean
     *
     * @param string $supplier_ean supplier_ean
     *
     * @return $this
     */
    public function setSupplierEan($supplier_ean)
    {
        $this->container['supplier_ean'] = $supplier_ean;

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



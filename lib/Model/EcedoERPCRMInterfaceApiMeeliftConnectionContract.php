<?php
/**
 * EcedoERPCRMInterfaceApiMeeliftConnectionContract
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
 * EcedoERPCRMInterfaceApiMeeliftConnectionContract Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiMeeliftConnectionContract implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.MeeliftConnectionContract';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'energielevering_contract_id' => 'string',
        'means_of_production_id' => 'string',
        'connection_id' => 'string',
        'product_id' => 'string',
        'product_description_localized' => 'string',
        'connection_contract_prices' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContractPrices[]',
        'contract_id' => 'string',
        'reference' => 'string',
        'agreement_date' => '\DateTime',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'original_end_date' => '\DateTime',
        'proposition_id' => 'string',
        'proposition_reference' => 'string',
        'proposition_description' => 'string',
        'proposition_duration' => 'int',
        'status' => 'string',
        'status_localized' => 'string',
        'comment' => 'string',
        'proposal_valid_until' => '\DateTime',
        'organization_id' => 'string',
        'contract_properties' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiContractProperty[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'energielevering_contract_id' => null,
        'means_of_production_id' => 'uuid',
        'connection_id' => null,
        'product_id' => null,
        'product_description_localized' => null,
        'connection_contract_prices' => null,
        'contract_id' => null,
        'reference' => null,
        'agreement_date' => 'date',
        'start_date' => 'date',
        'end_date' => 'date',
        'original_end_date' => 'date',
        'proposition_id' => null,
        'proposition_reference' => null,
        'proposition_description' => null,
        'proposition_duration' => 'int32',
        'status' => null,
        'status_localized' => null,
        'comment' => null,
        'proposal_valid_until' => 'date',
        'organization_id' => null,
        'contract_properties' => null
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
        'energielevering_contract_id' => 'EnergieleveringContractId',
        'means_of_production_id' => 'MeansOfProductionId',
        'connection_id' => 'ConnectionId',
        'product_id' => 'ProductId',
        'product_description_localized' => 'ProductDescriptionLocalized',
        'connection_contract_prices' => 'ConnectionContractPrices',
        'contract_id' => 'ContractId',
        'reference' => 'Reference',
        'agreement_date' => 'AgreementDate',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'original_end_date' => 'OriginalEndDate',
        'proposition_id' => 'PropositionId',
        'proposition_reference' => 'PropositionReference',
        'proposition_description' => 'PropositionDescription',
        'proposition_duration' => 'PropositionDuration',
        'status' => 'Status',
        'status_localized' => 'StatusLocalized',
        'comment' => 'Comment',
        'proposal_valid_until' => 'ProposalValidUntil',
        'organization_id' => 'OrganizationId',
        'contract_properties' => 'ContractProperties'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'energielevering_contract_id' => 'setEnergieleveringContractId',
        'means_of_production_id' => 'setMeansOfProductionId',
        'connection_id' => 'setConnectionId',
        'product_id' => 'setProductId',
        'product_description_localized' => 'setProductDescriptionLocalized',
        'connection_contract_prices' => 'setConnectionContractPrices',
        'contract_id' => 'setContractId',
        'reference' => 'setReference',
        'agreement_date' => 'setAgreementDate',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'original_end_date' => 'setOriginalEndDate',
        'proposition_id' => 'setPropositionId',
        'proposition_reference' => 'setPropositionReference',
        'proposition_description' => 'setPropositionDescription',
        'proposition_duration' => 'setPropositionDuration',
        'status' => 'setStatus',
        'status_localized' => 'setStatusLocalized',
        'comment' => 'setComment',
        'proposal_valid_until' => 'setProposalValidUntil',
        'organization_id' => 'setOrganizationId',
        'contract_properties' => 'setContractProperties'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'energielevering_contract_id' => 'getEnergieleveringContractId',
        'means_of_production_id' => 'getMeansOfProductionId',
        'connection_id' => 'getConnectionId',
        'product_id' => 'getProductId',
        'product_description_localized' => 'getProductDescriptionLocalized',
        'connection_contract_prices' => 'getConnectionContractPrices',
        'contract_id' => 'getContractId',
        'reference' => 'getReference',
        'agreement_date' => 'getAgreementDate',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'original_end_date' => 'getOriginalEndDate',
        'proposition_id' => 'getPropositionId',
        'proposition_reference' => 'getPropositionReference',
        'proposition_description' => 'getPropositionDescription',
        'proposition_duration' => 'getPropositionDuration',
        'status' => 'getStatus',
        'status_localized' => 'getStatusLocalized',
        'comment' => 'getComment',
        'proposal_valid_until' => 'getProposalValidUntil',
        'organization_id' => 'getOrganizationId',
        'contract_properties' => 'getContractProperties'
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
        $this->container['energielevering_contract_id'] = isset($data['energielevering_contract_id']) ? $data['energielevering_contract_id'] : null;
        $this->container['means_of_production_id'] = isset($data['means_of_production_id']) ? $data['means_of_production_id'] : null;
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['product_description_localized'] = isset($data['product_description_localized']) ? $data['product_description_localized'] : null;
        $this->container['connection_contract_prices'] = isset($data['connection_contract_prices']) ? $data['connection_contract_prices'] : null;
        $this->container['contract_id'] = isset($data['contract_id']) ? $data['contract_id'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['agreement_date'] = isset($data['agreement_date']) ? $data['agreement_date'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['original_end_date'] = isset($data['original_end_date']) ? $data['original_end_date'] : null;
        $this->container['proposition_id'] = isset($data['proposition_id']) ? $data['proposition_id'] : null;
        $this->container['proposition_reference'] = isset($data['proposition_reference']) ? $data['proposition_reference'] : null;
        $this->container['proposition_description'] = isset($data['proposition_description']) ? $data['proposition_description'] : null;
        $this->container['proposition_duration'] = isset($data['proposition_duration']) ? $data['proposition_duration'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_localized'] = isset($data['status_localized']) ? $data['status_localized'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['proposal_valid_until'] = isset($data['proposal_valid_until']) ? $data['proposal_valid_until'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['contract_properties'] = isset($data['contract_properties']) ? $data['contract_properties'] : null;
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
     * Gets energielevering_contract_id
     *
     * @return string
     */
    public function getEnergieleveringContractId()
    {
        return $this->container['energielevering_contract_id'];
    }

    /**
     * Sets energielevering_contract_id
     *
     * @param string $energielevering_contract_id energielevering_contract_id
     *
     * @return $this
     */
    public function setEnergieleveringContractId($energielevering_contract_id)
    {
        $this->container['energielevering_contract_id'] = $energielevering_contract_id;

        return $this;
    }

    /**
     * Gets means_of_production_id
     *
     * @return string
     */
    public function getMeansOfProductionId()
    {
        return $this->container['means_of_production_id'];
    }

    /**
     * Sets means_of_production_id
     *
     * @param string $means_of_production_id means_of_production_id
     *
     * @return $this
     */
    public function setMeansOfProductionId($means_of_production_id)
    {
        $this->container['means_of_production_id'] = $means_of_production_id;

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
     * Gets product_id
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     *
     * @param string $product_id product_id
     *
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets product_description_localized
     *
     * @return string
     */
    public function getProductDescriptionLocalized()
    {
        return $this->container['product_description_localized'];
    }

    /**
     * Sets product_description_localized
     *
     * @param string $product_description_localized product_description_localized
     *
     * @return $this
     */
    public function setProductDescriptionLocalized($product_description_localized)
    {
        $this->container['product_description_localized'] = $product_description_localized;

        return $this;
    }

    /**
     * Gets connection_contract_prices
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContractPrices[]
     */
    public function getConnectionContractPrices()
    {
        return $this->container['connection_contract_prices'];
    }

    /**
     * Sets connection_contract_prices
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContractPrices[] $connection_contract_prices connection_contract_prices
     *
     * @return $this
     */
    public function setConnectionContractPrices($connection_contract_prices)
    {
        $this->container['connection_contract_prices'] = $connection_contract_prices;

        return $this;
    }

    /**
     * Gets contract_id
     *
     * @return string
     */
    public function getContractId()
    {
        return $this->container['contract_id'];
    }

    /**
     * Sets contract_id
     *
     * @param string $contract_id contract_id
     *
     * @return $this
     */
    public function setContractId($contract_id)
    {
        $this->container['contract_id'] = $contract_id;

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
     * Gets original_end_date
     *
     * @return \DateTime
     */
    public function getOriginalEndDate()
    {
        return $this->container['original_end_date'];
    }

    /**
     * Sets original_end_date
     *
     * @param \DateTime $original_end_date original_end_date
     *
     * @return $this
     */
    public function setOriginalEndDate($original_end_date)
    {
        $this->container['original_end_date'] = $original_end_date;

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
     * Gets proposition_duration
     *
     * @return int
     */
    public function getPropositionDuration()
    {
        return $this->container['proposition_duration'];
    }

    /**
     * Sets proposition_duration
     *
     * @param int $proposition_duration proposition_duration
     *
     * @return $this
     */
    public function setPropositionDuration($proposition_duration)
    {
        $this->container['proposition_duration'] = $proposition_duration;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_localized
     *
     * @return string
     */
    public function getStatusLocalized()
    {
        return $this->container['status_localized'];
    }

    /**
     * Sets status_localized
     *
     * @param string $status_localized status_localized
     *
     * @return $this
     */
    public function setStatusLocalized($status_localized)
    {
        $this->container['status_localized'] = $status_localized;

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
     * Gets proposal_valid_until
     *
     * @return \DateTime
     */
    public function getProposalValidUntil()
    {
        return $this->container['proposal_valid_until'];
    }

    /**
     * Sets proposal_valid_until
     *
     * @param \DateTime $proposal_valid_until proposal_valid_until
     *
     * @return $this
     */
    public function setProposalValidUntil($proposal_valid_until)
    {
        $this->container['proposal_valid_until'] = $proposal_valid_until;

        return $this;
    }

    /**
     * Gets organization_id
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organization_id'];
    }

    /**
     * Sets organization_id
     *
     * @param string $organization_id organization_id
     *
     * @return $this
     */
    public function setOrganizationId($organization_id)
    {
        $this->container['organization_id'] = $organization_id;

        return $this;
    }

    /**
     * Gets contract_properties
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiContractProperty[]
     */
    public function getContractProperties()
    {
        return $this->container['contract_properties'];
    }

    /**
     * Sets contract_properties
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiContractProperty[] $contract_properties contract_properties
     *
     * @return $this
     */
    public function setContractProperties($contract_properties)
    {
        $this->container['contract_properties'] = $contract_properties;

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



<?php
/**
 * EcedoERPCRMInterfaceApiInvoice
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
 * EcedoERPCRMInterfaceApiInvoice Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiInvoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'organization_id' => 'string',
        'cluster_id' => 'string',
        'cluster_reference' => 'string',
        'invoice_id' => 'string',
        'invoice_type' => 'string',
        'invoice_type_localized' => 'string',
        'invoice_sub_type' => 'string',
        'invoice_sub_type_localized' => 'string',
        'invoice_date' => '\DateTime',
        'payment_due_date' => '\DateTime',
        'invoice_number' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'period_description' => 'string',
        'amount' => 'double',
        'vat_amount' => 'double',
        'total_amount' => 'double',
        'status' => 'string',
        'status_localized' => 'string',
        'invoice_document_id' => 'string',
        'is_credit' => 'bool',
        'credited_invoice_id' => 'string',
        'is_final' => 'bool',
        'is_olev' => 'bool',
        'settlement_invoice_frequency' => 'string',
        'settlement_invoice_frequency_localized' => 'string',
        'parent_invoice_id' => 'string',
        'collective_invoice_type' => 'string',
        'collective_invoice_type_localized' => 'string',
        'child_invoice_ids' => 'string[]',
        'correction_invoice_id' => 'string',
        'corrected_invoice_ids' => 'string[]',
        'correction_invoice_type' => 'string',
        'correction_invoice_type_localized' => 'string',
        'invoice_documents' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiDocument[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'organization_id' => null,
        'cluster_id' => 'uuid',
        'cluster_reference' => null,
        'invoice_id' => null,
        'invoice_type' => null,
        'invoice_type_localized' => null,
        'invoice_sub_type' => null,
        'invoice_sub_type_localized' => null,
        'invoice_date' => 'date',
        'payment_due_date' => 'date',
        'invoice_number' => null,
        'start_date' => 'date',
        'end_date' => 'date',
        'period_description' => null,
        'amount' => 'double',
        'vat_amount' => 'double',
        'total_amount' => 'double',
        'status' => null,
        'status_localized' => null,
        'invoice_document_id' => 'uuid',
        'is_credit' => null,
        'credited_invoice_id' => 'uuid',
        'is_final' => null,
        'is_olev' => null,
        'settlement_invoice_frequency' => null,
        'settlement_invoice_frequency_localized' => null,
        'parent_invoice_id' => 'uuid',
        'collective_invoice_type' => null,
        'collective_invoice_type_localized' => null,
        'child_invoice_ids' => null,
        'correction_invoice_id' => 'uuid',
        'corrected_invoice_ids' => null,
        'correction_invoice_type' => null,
        'correction_invoice_type_localized' => null,
        'invoice_documents' => null
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
        'organization_id' => 'OrganizationId',
        'cluster_id' => 'ClusterId',
        'cluster_reference' => 'ClusterReference',
        'invoice_id' => 'InvoiceId',
        'invoice_type' => 'InvoiceType',
        'invoice_type_localized' => 'InvoiceTypeLocalized',
        'invoice_sub_type' => 'InvoiceSubType',
        'invoice_sub_type_localized' => 'InvoiceSubTypeLocalized',
        'invoice_date' => 'InvoiceDate',
        'payment_due_date' => 'PaymentDueDate',
        'invoice_number' => 'InvoiceNumber',
        'start_date' => 'StartDate',
        'end_date' => 'EndDate',
        'period_description' => 'PeriodDescription',
        'amount' => 'Amount',
        'vat_amount' => 'VatAmount',
        'total_amount' => 'TotalAmount',
        'status' => 'Status',
        'status_localized' => 'StatusLocalized',
        'invoice_document_id' => 'InvoiceDocumentId',
        'is_credit' => 'IsCredit',
        'credited_invoice_id' => 'CreditedInvoiceId',
        'is_final' => 'IsFinal',
        'is_olev' => 'IsOLEV',
        'settlement_invoice_frequency' => 'SettlementInvoiceFrequency',
        'settlement_invoice_frequency_localized' => 'SettlementInvoiceFrequencyLocalized',
        'parent_invoice_id' => 'ParentInvoiceId',
        'collective_invoice_type' => 'CollectiveInvoiceType',
        'collective_invoice_type_localized' => 'CollectiveInvoiceTypeLocalized',
        'child_invoice_ids' => 'ChildInvoiceIds',
        'correction_invoice_id' => 'CorrectionInvoiceId',
        'corrected_invoice_ids' => 'CorrectedInvoiceIds',
        'correction_invoice_type' => 'CorrectionInvoiceType',
        'correction_invoice_type_localized' => 'CorrectionInvoiceTypeLocalized',
        'invoice_documents' => 'InvoiceDocuments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'organization_id' => 'setOrganizationId',
        'cluster_id' => 'setClusterId',
        'cluster_reference' => 'setClusterReference',
        'invoice_id' => 'setInvoiceId',
        'invoice_type' => 'setInvoiceType',
        'invoice_type_localized' => 'setInvoiceTypeLocalized',
        'invoice_sub_type' => 'setInvoiceSubType',
        'invoice_sub_type_localized' => 'setInvoiceSubTypeLocalized',
        'invoice_date' => 'setInvoiceDate',
        'payment_due_date' => 'setPaymentDueDate',
        'invoice_number' => 'setInvoiceNumber',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'period_description' => 'setPeriodDescription',
        'amount' => 'setAmount',
        'vat_amount' => 'setVatAmount',
        'total_amount' => 'setTotalAmount',
        'status' => 'setStatus',
        'status_localized' => 'setStatusLocalized',
        'invoice_document_id' => 'setInvoiceDocumentId',
        'is_credit' => 'setIsCredit',
        'credited_invoice_id' => 'setCreditedInvoiceId',
        'is_final' => 'setIsFinal',
        'is_olev' => 'setIsOlev',
        'settlement_invoice_frequency' => 'setSettlementInvoiceFrequency',
        'settlement_invoice_frequency_localized' => 'setSettlementInvoiceFrequencyLocalized',
        'parent_invoice_id' => 'setParentInvoiceId',
        'collective_invoice_type' => 'setCollectiveInvoiceType',
        'collective_invoice_type_localized' => 'setCollectiveInvoiceTypeLocalized',
        'child_invoice_ids' => 'setChildInvoiceIds',
        'correction_invoice_id' => 'setCorrectionInvoiceId',
        'corrected_invoice_ids' => 'setCorrectedInvoiceIds',
        'correction_invoice_type' => 'setCorrectionInvoiceType',
        'correction_invoice_type_localized' => 'setCorrectionInvoiceTypeLocalized',
        'invoice_documents' => 'setInvoiceDocuments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'organization_id' => 'getOrganizationId',
        'cluster_id' => 'getClusterId',
        'cluster_reference' => 'getClusterReference',
        'invoice_id' => 'getInvoiceId',
        'invoice_type' => 'getInvoiceType',
        'invoice_type_localized' => 'getInvoiceTypeLocalized',
        'invoice_sub_type' => 'getInvoiceSubType',
        'invoice_sub_type_localized' => 'getInvoiceSubTypeLocalized',
        'invoice_date' => 'getInvoiceDate',
        'payment_due_date' => 'getPaymentDueDate',
        'invoice_number' => 'getInvoiceNumber',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'period_description' => 'getPeriodDescription',
        'amount' => 'getAmount',
        'vat_amount' => 'getVatAmount',
        'total_amount' => 'getTotalAmount',
        'status' => 'getStatus',
        'status_localized' => 'getStatusLocalized',
        'invoice_document_id' => 'getInvoiceDocumentId',
        'is_credit' => 'getIsCredit',
        'credited_invoice_id' => 'getCreditedInvoiceId',
        'is_final' => 'getIsFinal',
        'is_olev' => 'getIsOlev',
        'settlement_invoice_frequency' => 'getSettlementInvoiceFrequency',
        'settlement_invoice_frequency_localized' => 'getSettlementInvoiceFrequencyLocalized',
        'parent_invoice_id' => 'getParentInvoiceId',
        'collective_invoice_type' => 'getCollectiveInvoiceType',
        'collective_invoice_type_localized' => 'getCollectiveInvoiceTypeLocalized',
        'child_invoice_ids' => 'getChildInvoiceIds',
        'correction_invoice_id' => 'getCorrectionInvoiceId',
        'corrected_invoice_ids' => 'getCorrectedInvoiceIds',
        'correction_invoice_type' => 'getCorrectionInvoiceType',
        'correction_invoice_type_localized' => 'getCorrectionInvoiceTypeLocalized',
        'invoice_documents' => 'getInvoiceDocuments'
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

    const INVOICE_SUB_TYPE_WIND_SHARE = 'WindShare';
    const INVOICE_SUB_TYPE_TERMINATION_FEE = 'TerminationFee';
    const INVOICE_SUB_TYPE_PRODUCER_SETTLEMENT = 'ProducerSettlement';
    const INVOICE_SUB_TYPE_DIRECT_PAY_SETTLEMENT = 'DirectPaySettlement';
    const INVOICE_SUB_TYPE_MSP_SETTLEMENT_ALLEGO = 'MspSettlementAllego';
    const INVOICE_SUB_TYPE_CPO_SETTLEMENT = 'CpoSettlement';
    const INVOICE_SUB_TYPE_SOLAR_SETTLEMENT = 'SolarSettlement';
    const INVOICE_SUB_TYPE_EV_CHARGE_CARD_SETTLEMENT = 'EvChargeCardSettlement';
    const INVOICE_SUB_TYPE_CHARGE_SESSION_CREDIT = 'ChargeSessionCredit';
    const INVOICE_SUB_TYPE_SMART_CHARGING_SETTLEMENT = 'SmartChargingSettlement';
    const INVOICE_SUB_TYPE_ENERGY_PURCHASE_SETTLEMENT = 'EnergyPurchaseSettlement';
    const INVOICE_SUB_TYPE_EV_CHARGER_SETTLEMENT = 'EvChargerSettlement';
    const INVOICE_SUB_TYPE_MSP_SETTLEMENT = 'MspSettlement';
    const INVOICE_SUB_TYPE_EV_COLLECTIVE_SETTLEMENT = 'EvCollectiveSettlement';
    const INVOICE_SUB_TYPE_DEPOSIT = 'Deposit';
    const INVOICE_SUB_TYPE_SERVICE_CONTRACT_SETTLEMENT = 'ServiceContractSettlement';
    const INVOICE_SUB_TYPE_ENERGY_PURCHASE_CORRECTION_SETTLEMENT = 'EnergyPurchaseCorrectionSettlement';
    const INVOICE_SUB_TYPE_RECONCILIATION_SETTLEMENT = 'ReconciliationSettlement';
    const INVOICE_SUB_TYPE_CERTIFICATE_SALE = 'CertificateSale';
    const INVOICE_SUB_TYPE_CUSTOM_GENERAL = 'Custom_General';
    const INVOICE_SUB_TYPE_CUSTOM_CHARGING_STATION = 'Custom_ChargingStation';
    const INVOICE_SUB_TYPE_CUSTOM_CHARGE_CARD = 'Custom_ChargeCard';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInvoiceSubTypeAllowableValues()
    {
        return [
            self::INVOICE_SUB_TYPE_WIND_SHARE,
            self::INVOICE_SUB_TYPE_TERMINATION_FEE,
            self::INVOICE_SUB_TYPE_PRODUCER_SETTLEMENT,
            self::INVOICE_SUB_TYPE_DIRECT_PAY_SETTLEMENT,
            self::INVOICE_SUB_TYPE_MSP_SETTLEMENT_ALLEGO,
            self::INVOICE_SUB_TYPE_CPO_SETTLEMENT,
            self::INVOICE_SUB_TYPE_SOLAR_SETTLEMENT,
            self::INVOICE_SUB_TYPE_EV_CHARGE_CARD_SETTLEMENT,
            self::INVOICE_SUB_TYPE_CHARGE_SESSION_CREDIT,
            self::INVOICE_SUB_TYPE_SMART_CHARGING_SETTLEMENT,
            self::INVOICE_SUB_TYPE_ENERGY_PURCHASE_SETTLEMENT,
            self::INVOICE_SUB_TYPE_EV_CHARGER_SETTLEMENT,
            self::INVOICE_SUB_TYPE_MSP_SETTLEMENT,
            self::INVOICE_SUB_TYPE_EV_COLLECTIVE_SETTLEMENT,
            self::INVOICE_SUB_TYPE_DEPOSIT,
            self::INVOICE_SUB_TYPE_SERVICE_CONTRACT_SETTLEMENT,
            self::INVOICE_SUB_TYPE_ENERGY_PURCHASE_CORRECTION_SETTLEMENT,
            self::INVOICE_SUB_TYPE_RECONCILIATION_SETTLEMENT,
            self::INVOICE_SUB_TYPE_CERTIFICATE_SALE,
            self::INVOICE_SUB_TYPE_CUSTOM_GENERAL,
            self::INVOICE_SUB_TYPE_CUSTOM_CHARGING_STATION,
            self::INVOICE_SUB_TYPE_CUSTOM_CHARGE_CARD,
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
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['cluster_id'] = isset($data['cluster_id']) ? $data['cluster_id'] : null;
        $this->container['cluster_reference'] = isset($data['cluster_reference']) ? $data['cluster_reference'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['invoice_type'] = isset($data['invoice_type']) ? $data['invoice_type'] : null;
        $this->container['invoice_type_localized'] = isset($data['invoice_type_localized']) ? $data['invoice_type_localized'] : null;
        $this->container['invoice_sub_type'] = isset($data['invoice_sub_type']) ? $data['invoice_sub_type'] : null;
        $this->container['invoice_sub_type_localized'] = isset($data['invoice_sub_type_localized']) ? $data['invoice_sub_type_localized'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['payment_due_date'] = isset($data['payment_due_date']) ? $data['payment_due_date'] : null;
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['period_description'] = isset($data['period_description']) ? $data['period_description'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['vat_amount'] = isset($data['vat_amount']) ? $data['vat_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_localized'] = isset($data['status_localized']) ? $data['status_localized'] : null;
        $this->container['invoice_document_id'] = isset($data['invoice_document_id']) ? $data['invoice_document_id'] : null;
        $this->container['is_credit'] = isset($data['is_credit']) ? $data['is_credit'] : null;
        $this->container['credited_invoice_id'] = isset($data['credited_invoice_id']) ? $data['credited_invoice_id'] : null;
        $this->container['is_final'] = isset($data['is_final']) ? $data['is_final'] : null;
        $this->container['is_olev'] = isset($data['is_olev']) ? $data['is_olev'] : null;
        $this->container['settlement_invoice_frequency'] = isset($data['settlement_invoice_frequency']) ? $data['settlement_invoice_frequency'] : null;
        $this->container['settlement_invoice_frequency_localized'] = isset($data['settlement_invoice_frequency_localized']) ? $data['settlement_invoice_frequency_localized'] : null;
        $this->container['parent_invoice_id'] = isset($data['parent_invoice_id']) ? $data['parent_invoice_id'] : null;
        $this->container['collective_invoice_type'] = isset($data['collective_invoice_type']) ? $data['collective_invoice_type'] : null;
        $this->container['collective_invoice_type_localized'] = isset($data['collective_invoice_type_localized']) ? $data['collective_invoice_type_localized'] : null;
        $this->container['child_invoice_ids'] = isset($data['child_invoice_ids']) ? $data['child_invoice_ids'] : null;
        $this->container['correction_invoice_id'] = isset($data['correction_invoice_id']) ? $data['correction_invoice_id'] : null;
        $this->container['corrected_invoice_ids'] = isset($data['corrected_invoice_ids']) ? $data['corrected_invoice_ids'] : null;
        $this->container['correction_invoice_type'] = isset($data['correction_invoice_type']) ? $data['correction_invoice_type'] : null;
        $this->container['correction_invoice_type_localized'] = isset($data['correction_invoice_type_localized']) ? $data['correction_invoice_type_localized'] : null;
        $this->container['invoice_documents'] = isset($data['invoice_documents']) ? $data['invoice_documents'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getInvoiceSubTypeAllowableValues();
        if (!is_null($this->container['invoice_sub_type']) && !in_array($this->container['invoice_sub_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'invoice_sub_type', must be one of '%s'",
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
     * Gets cluster_id
     *
     * @return string
     */
    public function getClusterId()
    {
        return $this->container['cluster_id'];
    }

    /**
     * Sets cluster_id
     *
     * @param string $cluster_id cluster_id
     *
     * @return $this
     */
    public function setClusterId($cluster_id)
    {
        $this->container['cluster_id'] = $cluster_id;

        return $this;
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
     * Gets invoice_id
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id
     *
     * @param string $invoice_id invoice_id
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets invoice_type
     *
     * @return string
     */
    public function getInvoiceType()
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type
     *
     * @param string $invoice_type invoice_type
     *
     * @return $this
     */
    public function setInvoiceType($invoice_type)
    {
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets invoice_type_localized
     *
     * @return string
     */
    public function getInvoiceTypeLocalized()
    {
        return $this->container['invoice_type_localized'];
    }

    /**
     * Sets invoice_type_localized
     *
     * @param string $invoice_type_localized invoice_type_localized
     *
     * @return $this
     */
    public function setInvoiceTypeLocalized($invoice_type_localized)
    {
        $this->container['invoice_type_localized'] = $invoice_type_localized;

        return $this;
    }

    /**
     * Gets invoice_sub_type
     *
     * @return string
     */
    public function getInvoiceSubType()
    {
        return $this->container['invoice_sub_type'];
    }

    /**
     * Sets invoice_sub_type
     *
     * @param string $invoice_sub_type invoice_sub_type
     *
     * @return $this
     */
    public function setInvoiceSubType($invoice_sub_type)
    {
        $allowedValues = $this->getInvoiceSubTypeAllowableValues();
        if (!is_null($invoice_sub_type) && !in_array($invoice_sub_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'invoice_sub_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_sub_type'] = $invoice_sub_type;

        return $this;
    }

    /**
     * Gets invoice_sub_type_localized
     *
     * @return string
     */
    public function getInvoiceSubTypeLocalized()
    {
        return $this->container['invoice_sub_type_localized'];
    }

    /**
     * Sets invoice_sub_type_localized
     *
     * @param string $invoice_sub_type_localized invoice_sub_type_localized
     *
     * @return $this
     */
    public function setInvoiceSubTypeLocalized($invoice_sub_type_localized)
    {
        $this->container['invoice_sub_type_localized'] = $invoice_sub_type_localized;

        return $this;
    }

    /**
     * Gets invoice_date
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     *
     * @param \DateTime $invoice_date invoice_date
     *
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets payment_due_date
     *
     * @return \DateTime
     */
    public function getPaymentDueDate()
    {
        return $this->container['payment_due_date'];
    }

    /**
     * Sets payment_due_date
     *
     * @param \DateTime $payment_due_date payment_due_date
     *
     * @return $this
     */
    public function setPaymentDueDate($payment_due_date)
    {
        $this->container['payment_due_date'] = $payment_due_date;

        return $this;
    }

    /**
     * Gets invoice_number
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     *
     * @param string $invoice_number invoice_number
     *
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

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
     * Gets period_description
     *
     * @return string
     */
    public function getPeriodDescription()
    {
        return $this->container['period_description'];
    }

    /**
     * Sets period_description
     *
     * @param string $period_description period_description
     *
     * @return $this
     */
    public function setPeriodDescription($period_description)
    {
        $this->container['period_description'] = $period_description;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param double $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets vat_amount
     *
     * @return double
     */
    public function getVatAmount()
    {
        return $this->container['vat_amount'];
    }

    /**
     * Sets vat_amount
     *
     * @param double $vat_amount vat_amount
     *
     * @return $this
     */
    public function setVatAmount($vat_amount)
    {
        $this->container['vat_amount'] = $vat_amount;

        return $this;
    }

    /**
     * Gets total_amount
     *
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     *
     * @param double $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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
     * Gets invoice_document_id
     *
     * @return string
     */
    public function getInvoiceDocumentId()
    {
        return $this->container['invoice_document_id'];
    }

    /**
     * Sets invoice_document_id
     *
     * @param string $invoice_document_id invoice_document_id
     *
     * @return $this
     */
    public function setInvoiceDocumentId($invoice_document_id)
    {
        $this->container['invoice_document_id'] = $invoice_document_id;

        return $this;
    }

    /**
     * Gets is_credit
     *
     * @return bool
     */
    public function getIsCredit()
    {
        return $this->container['is_credit'];
    }

    /**
     * Sets is_credit
     *
     * @param bool $is_credit is_credit
     *
     * @return $this
     */
    public function setIsCredit($is_credit)
    {
        $this->container['is_credit'] = $is_credit;

        return $this;
    }

    /**
     * Gets credited_invoice_id
     *
     * @return string
     */
    public function getCreditedInvoiceId()
    {
        return $this->container['credited_invoice_id'];
    }

    /**
     * Sets credited_invoice_id
     *
     * @param string $credited_invoice_id credited_invoice_id
     *
     * @return $this
     */
    public function setCreditedInvoiceId($credited_invoice_id)
    {
        $this->container['credited_invoice_id'] = $credited_invoice_id;

        return $this;
    }

    /**
     * Gets is_final
     *
     * @return bool
     */
    public function getIsFinal()
    {
        return $this->container['is_final'];
    }

    /**
     * Sets is_final
     *
     * @param bool $is_final is_final
     *
     * @return $this
     */
    public function setIsFinal($is_final)
    {
        $this->container['is_final'] = $is_final;

        return $this;
    }

    /**
     * Gets is_olev
     *
     * @return bool
     */
    public function getIsOlev()
    {
        return $this->container['is_olev'];
    }

    /**
     * Sets is_olev
     *
     * @param bool $is_olev is_olev
     *
     * @return $this
     */
    public function setIsOlev($is_olev)
    {
        $this->container['is_olev'] = $is_olev;

        return $this;
    }

    /**
     * Gets settlement_invoice_frequency
     *
     * @return string
     */
    public function getSettlementInvoiceFrequency()
    {
        return $this->container['settlement_invoice_frequency'];
    }

    /**
     * Sets settlement_invoice_frequency
     *
     * @param string $settlement_invoice_frequency settlement_invoice_frequency
     *
     * @return $this
     */
    public function setSettlementInvoiceFrequency($settlement_invoice_frequency)
    {
        $this->container['settlement_invoice_frequency'] = $settlement_invoice_frequency;

        return $this;
    }

    /**
     * Gets settlement_invoice_frequency_localized
     *
     * @return string
     */
    public function getSettlementInvoiceFrequencyLocalized()
    {
        return $this->container['settlement_invoice_frequency_localized'];
    }

    /**
     * Sets settlement_invoice_frequency_localized
     *
     * @param string $settlement_invoice_frequency_localized settlement_invoice_frequency_localized
     *
     * @return $this
     */
    public function setSettlementInvoiceFrequencyLocalized($settlement_invoice_frequency_localized)
    {
        $this->container['settlement_invoice_frequency_localized'] = $settlement_invoice_frequency_localized;

        return $this;
    }

    /**
     * Gets parent_invoice_id
     *
     * @return string
     */
    public function getParentInvoiceId()
    {
        return $this->container['parent_invoice_id'];
    }

    /**
     * Sets parent_invoice_id
     *
     * @param string $parent_invoice_id parent_invoice_id
     *
     * @return $this
     */
    public function setParentInvoiceId($parent_invoice_id)
    {
        $this->container['parent_invoice_id'] = $parent_invoice_id;

        return $this;
    }

    /**
     * Gets collective_invoice_type
     *
     * @return string
     */
    public function getCollectiveInvoiceType()
    {
        return $this->container['collective_invoice_type'];
    }

    /**
     * Sets collective_invoice_type
     *
     * @param string $collective_invoice_type collective_invoice_type
     *
     * @return $this
     */
    public function setCollectiveInvoiceType($collective_invoice_type)
    {
        $this->container['collective_invoice_type'] = $collective_invoice_type;

        return $this;
    }

    /**
     * Gets collective_invoice_type_localized
     *
     * @return string
     */
    public function getCollectiveInvoiceTypeLocalized()
    {
        return $this->container['collective_invoice_type_localized'];
    }

    /**
     * Sets collective_invoice_type_localized
     *
     * @param string $collective_invoice_type_localized collective_invoice_type_localized
     *
     * @return $this
     */
    public function setCollectiveInvoiceTypeLocalized($collective_invoice_type_localized)
    {
        $this->container['collective_invoice_type_localized'] = $collective_invoice_type_localized;

        return $this;
    }

    /**
     * Gets child_invoice_ids
     *
     * @return string[]
     */
    public function getChildInvoiceIds()
    {
        return $this->container['child_invoice_ids'];
    }

    /**
     * Sets child_invoice_ids
     *
     * @param string[] $child_invoice_ids child_invoice_ids
     *
     * @return $this
     */
    public function setChildInvoiceIds($child_invoice_ids)
    {
        $this->container['child_invoice_ids'] = $child_invoice_ids;

        return $this;
    }

    /**
     * Gets correction_invoice_id
     *
     * @return string
     */
    public function getCorrectionInvoiceId()
    {
        return $this->container['correction_invoice_id'];
    }

    /**
     * Sets correction_invoice_id
     *
     * @param string $correction_invoice_id correction_invoice_id
     *
     * @return $this
     */
    public function setCorrectionInvoiceId($correction_invoice_id)
    {
        $this->container['correction_invoice_id'] = $correction_invoice_id;

        return $this;
    }

    /**
     * Gets corrected_invoice_ids
     *
     * @return string[]
     */
    public function getCorrectedInvoiceIds()
    {
        return $this->container['corrected_invoice_ids'];
    }

    /**
     * Sets corrected_invoice_ids
     *
     * @param string[] $corrected_invoice_ids corrected_invoice_ids
     *
     * @return $this
     */
    public function setCorrectedInvoiceIds($corrected_invoice_ids)
    {
        $this->container['corrected_invoice_ids'] = $corrected_invoice_ids;

        return $this;
    }

    /**
     * Gets correction_invoice_type
     *
     * @return string
     */
    public function getCorrectionInvoiceType()
    {
        return $this->container['correction_invoice_type'];
    }

    /**
     * Sets correction_invoice_type
     *
     * @param string $correction_invoice_type correction_invoice_type
     *
     * @return $this
     */
    public function setCorrectionInvoiceType($correction_invoice_type)
    {
        $this->container['correction_invoice_type'] = $correction_invoice_type;

        return $this;
    }

    /**
     * Gets correction_invoice_type_localized
     *
     * @return string
     */
    public function getCorrectionInvoiceTypeLocalized()
    {
        return $this->container['correction_invoice_type_localized'];
    }

    /**
     * Sets correction_invoice_type_localized
     *
     * @param string $correction_invoice_type_localized correction_invoice_type_localized
     *
     * @return $this
     */
    public function setCorrectionInvoiceTypeLocalized($correction_invoice_type_localized)
    {
        $this->container['correction_invoice_type_localized'] = $correction_invoice_type_localized;

        return $this;
    }

    /**
     * Gets invoice_documents
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiDocument[]
     */
    public function getInvoiceDocuments()
    {
        return $this->container['invoice_documents'];
    }

    /**
     * Sets invoice_documents
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiDocument[] $invoice_documents invoice_documents
     *
     * @return $this
     */
    public function setInvoiceDocuments($invoice_documents)
    {
        $this->container['invoice_documents'] = $invoice_documents;

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


<?php
/**
 * EcedoERPCRMInterfaceApiDebtorPostData
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
 * EcedoERPCRMInterfaceApiDebtorPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiDebtorPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.DebtorPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'payment_method' => 'string',
        'payment_term' => 'int',
        'debtor_name' => 'string',
        'bank_account_type' => 'string',
        'bank_account_number' => 'string',
        'mandate_date' => '\DateTime',
        'mandate_reference' => 'string',
        'bic' => 'string',
        'print_advance_payment_invoice' => 'bool',
        'preferred_automatic_collection_day' => 'int',
        'payment_reference' => 'string',
        'preferred_invoice_day' => 'int',
        'preferred_advance_payment_invoice_contact_method' => 'string',
        'preferred_settlement_invoice_contact_method' => 'string',
        'advance_payment_schedule_type' => 'string',
        'mandate_type' => 'string',
        'generate_e_invoice' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'payment_method' => null,
        'payment_term' => 'int32',
        'debtor_name' => null,
        'bank_account_type' => null,
        'bank_account_number' => null,
        'mandate_date' => 'date',
        'mandate_reference' => null,
        'bic' => null,
        'print_advance_payment_invoice' => null,
        'preferred_automatic_collection_day' => 'int32',
        'payment_reference' => null,
        'preferred_invoice_day' => 'int32',
        'preferred_advance_payment_invoice_contact_method' => null,
        'preferred_settlement_invoice_contact_method' => null,
        'advance_payment_schedule_type' => null,
        'mandate_type' => null,
        'generate_e_invoice' => null
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
        'payment_method' => 'PaymentMethod',
        'payment_term' => 'PaymentTerm',
        'debtor_name' => 'DebtorName',
        'bank_account_type' => 'BankAccountType',
        'bank_account_number' => 'BankAccountNumber',
        'mandate_date' => 'MandateDate',
        'mandate_reference' => 'MandateReference',
        'bic' => 'BIC',
        'print_advance_payment_invoice' => 'PrintAdvancePaymentInvoice',
        'preferred_automatic_collection_day' => 'PreferredAutomaticCollectionDay',
        'payment_reference' => 'PaymentReference',
        'preferred_invoice_day' => 'PreferredInvoiceDay',
        'preferred_advance_payment_invoice_contact_method' => 'PreferredAdvancePaymentInvoiceContactMethod',
        'preferred_settlement_invoice_contact_method' => 'PreferredSettlementInvoiceContactMethod',
        'advance_payment_schedule_type' => 'AdvancePaymentScheduleType',
        'mandate_type' => 'MandateType',
        'generate_e_invoice' => 'GenerateEInvoice'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'payment_method' => 'setPaymentMethod',
        'payment_term' => 'setPaymentTerm',
        'debtor_name' => 'setDebtorName',
        'bank_account_type' => 'setBankAccountType',
        'bank_account_number' => 'setBankAccountNumber',
        'mandate_date' => 'setMandateDate',
        'mandate_reference' => 'setMandateReference',
        'bic' => 'setBic',
        'print_advance_payment_invoice' => 'setPrintAdvancePaymentInvoice',
        'preferred_automatic_collection_day' => 'setPreferredAutomaticCollectionDay',
        'payment_reference' => 'setPaymentReference',
        'preferred_invoice_day' => 'setPreferredInvoiceDay',
        'preferred_advance_payment_invoice_contact_method' => 'setPreferredAdvancePaymentInvoiceContactMethod',
        'preferred_settlement_invoice_contact_method' => 'setPreferredSettlementInvoiceContactMethod',
        'advance_payment_schedule_type' => 'setAdvancePaymentScheduleType',
        'mandate_type' => 'setMandateType',
        'generate_e_invoice' => 'setGenerateEInvoice'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'payment_method' => 'getPaymentMethod',
        'payment_term' => 'getPaymentTerm',
        'debtor_name' => 'getDebtorName',
        'bank_account_type' => 'getBankAccountType',
        'bank_account_number' => 'getBankAccountNumber',
        'mandate_date' => 'getMandateDate',
        'mandate_reference' => 'getMandateReference',
        'bic' => 'getBic',
        'print_advance_payment_invoice' => 'getPrintAdvancePaymentInvoice',
        'preferred_automatic_collection_day' => 'getPreferredAutomaticCollectionDay',
        'payment_reference' => 'getPaymentReference',
        'preferred_invoice_day' => 'getPreferredInvoiceDay',
        'preferred_advance_payment_invoice_contact_method' => 'getPreferredAdvancePaymentInvoiceContactMethod',
        'preferred_settlement_invoice_contact_method' => 'getPreferredSettlementInvoiceContactMethod',
        'advance_payment_schedule_type' => 'getAdvancePaymentScheduleType',
        'mandate_type' => 'getMandateType',
        'generate_e_invoice' => 'getGenerateEInvoice'
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

    const PAYMENT_METHOD_AUTOMATIC_COLLECTION = 'AutomaticCollection';
    const PAYMENT_METHOD_INVOICE = 'Invoice';
    const PAYMENT_METHOD_VIA_PARENT_ORGANIZATION = 'ViaParentOrganization';
    const PAYMENT_METHOD_DIRECT_PAY = 'DirectPay';
    const BANK_ACCOUNT_TYPE_BANK = 'Bank';
    const BANK_ACCOUNT_TYPE_GIRO = 'Giro';
    const BANK_ACCOUNT_TYPE_IBAN = 'IBAN';
    const PREFERRED_ADVANCE_PAYMENT_INVOICE_CONTACT_METHOD_EMAIL = 'Email';
    const PREFERRED_ADVANCE_PAYMENT_INVOICE_CONTACT_METHOD_MAIL = 'Mail';
    const PREFERRED_SETTLEMENT_INVOICE_CONTACT_METHOD_EMAIL = 'Email';
    const PREFERRED_SETTLEMENT_INVOICE_CONTACT_METHOD_MAIL = 'Mail';
    const ADVANCE_PAYMENT_SCHEDULE_TYPE_MEMORIAL = 'Memorial';
    const ADVANCE_PAYMENT_SCHEDULE_TYPE_FIXED = 'Fixed';
    const ADVANCE_PAYMENT_SCHEDULE_TYPE_FLEXIBLE = 'Flexible';
    const ADVANCE_PAYMENT_SCHEDULE_TYPE_IN_MONTH = 'InMonth';
    const ADVANCE_PAYMENT_SCHEDULE_TYPE_BEFORE_MONTH = 'BeforeMonth';
    const MANDATE_TYPE_CORE = 'CORE';
    const MANDATE_TYPE_B2_B = 'B2B';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentMethodAllowableValues()
    {
        return [
            self::PAYMENT_METHOD_AUTOMATIC_COLLECTION,
            self::PAYMENT_METHOD_INVOICE,
            self::PAYMENT_METHOD_VIA_PARENT_ORGANIZATION,
            self::PAYMENT_METHOD_DIRECT_PAY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBankAccountTypeAllowableValues()
    {
        return [
            self::BANK_ACCOUNT_TYPE_BANK,
            self::BANK_ACCOUNT_TYPE_GIRO,
            self::BANK_ACCOUNT_TYPE_IBAN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPreferredAdvancePaymentInvoiceContactMethodAllowableValues()
    {
        return [
            self::PREFERRED_ADVANCE_PAYMENT_INVOICE_CONTACT_METHOD_EMAIL,
            self::PREFERRED_ADVANCE_PAYMENT_INVOICE_CONTACT_METHOD_MAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPreferredSettlementInvoiceContactMethodAllowableValues()
    {
        return [
            self::PREFERRED_SETTLEMENT_INVOICE_CONTACT_METHOD_EMAIL,
            self::PREFERRED_SETTLEMENT_INVOICE_CONTACT_METHOD_MAIL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAdvancePaymentScheduleTypeAllowableValues()
    {
        return [
            self::ADVANCE_PAYMENT_SCHEDULE_TYPE_MEMORIAL,
            self::ADVANCE_PAYMENT_SCHEDULE_TYPE_FIXED,
            self::ADVANCE_PAYMENT_SCHEDULE_TYPE_FLEXIBLE,
            self::ADVANCE_PAYMENT_SCHEDULE_TYPE_IN_MONTH,
            self::ADVANCE_PAYMENT_SCHEDULE_TYPE_BEFORE_MONTH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getMandateTypeAllowableValues()
    {
        return [
            self::MANDATE_TYPE_CORE,
            self::MANDATE_TYPE_B2_B,
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
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_term'] = isset($data['payment_term']) ? $data['payment_term'] : null;
        $this->container['debtor_name'] = isset($data['debtor_name']) ? $data['debtor_name'] : null;
        $this->container['bank_account_type'] = isset($data['bank_account_type']) ? $data['bank_account_type'] : null;
        $this->container['bank_account_number'] = isset($data['bank_account_number']) ? $data['bank_account_number'] : null;
        $this->container['mandate_date'] = isset($data['mandate_date']) ? $data['mandate_date'] : null;
        $this->container['mandate_reference'] = isset($data['mandate_reference']) ? $data['mandate_reference'] : null;
        $this->container['bic'] = isset($data['bic']) ? $data['bic'] : null;
        $this->container['print_advance_payment_invoice'] = isset($data['print_advance_payment_invoice']) ? $data['print_advance_payment_invoice'] : null;
        $this->container['preferred_automatic_collection_day'] = isset($data['preferred_automatic_collection_day']) ? $data['preferred_automatic_collection_day'] : null;
        $this->container['payment_reference'] = isset($data['payment_reference']) ? $data['payment_reference'] : null;
        $this->container['preferred_invoice_day'] = isset($data['preferred_invoice_day']) ? $data['preferred_invoice_day'] : null;
        $this->container['preferred_advance_payment_invoice_contact_method'] = isset($data['preferred_advance_payment_invoice_contact_method']) ? $data['preferred_advance_payment_invoice_contact_method'] : null;
        $this->container['preferred_settlement_invoice_contact_method'] = isset($data['preferred_settlement_invoice_contact_method']) ? $data['preferred_settlement_invoice_contact_method'] : null;
        $this->container['advance_payment_schedule_type'] = isset($data['advance_payment_schedule_type']) ? $data['advance_payment_schedule_type'] : null;
        $this->container['mandate_type'] = isset($data['mandate_type']) ? $data['mandate_type'] : null;
        $this->container['generate_e_invoice'] = isset($data['generate_e_invoice']) ? $data['generate_e_invoice'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($this->container['payment_method']) && !in_array($this->container['payment_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'payment_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBankAccountTypeAllowableValues();
        if (!is_null($this->container['bank_account_type']) && !in_array($this->container['bank_account_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'bank_account_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPreferredAdvancePaymentInvoiceContactMethodAllowableValues();
        if (!is_null($this->container['preferred_advance_payment_invoice_contact_method']) && !in_array($this->container['preferred_advance_payment_invoice_contact_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'preferred_advance_payment_invoice_contact_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPreferredSettlementInvoiceContactMethodAllowableValues();
        if (!is_null($this->container['preferred_settlement_invoice_contact_method']) && !in_array($this->container['preferred_settlement_invoice_contact_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'preferred_settlement_invoice_contact_method', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getAdvancePaymentScheduleTypeAllowableValues();
        if (!is_null($this->container['advance_payment_schedule_type']) && !in_array($this->container['advance_payment_schedule_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'advance_payment_schedule_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getMandateTypeAllowableValues();
        if (!is_null($this->container['mandate_type']) && !in_array($this->container['mandate_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'mandate_type', must be one of '%s'",
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
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method payment_method
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $allowedValues = $this->getPaymentMethodAllowableValues();
        if (!is_null($payment_method) && !in_array($payment_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'payment_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets payment_term
     *
     * @return int
     */
    public function getPaymentTerm()
    {
        return $this->container['payment_term'];
    }

    /**
     * Sets payment_term
     *
     * @param int $payment_term payment_term
     *
     * @return $this
     */
    public function setPaymentTerm($payment_term)
    {
        $this->container['payment_term'] = $payment_term;

        return $this;
    }

    /**
     * Gets debtor_name
     *
     * @return string
     */
    public function getDebtorName()
    {
        return $this->container['debtor_name'];
    }

    /**
     * Sets debtor_name
     *
     * @param string $debtor_name debtor_name
     *
     * @return $this
     */
    public function setDebtorName($debtor_name)
    {
        $this->container['debtor_name'] = $debtor_name;

        return $this;
    }

    /**
     * Gets bank_account_type
     *
     * @return string
     */
    public function getBankAccountType()
    {
        return $this->container['bank_account_type'];
    }

    /**
     * Sets bank_account_type
     *
     * @param string $bank_account_type bank_account_type
     *
     * @return $this
     */
    public function setBankAccountType($bank_account_type)
    {
        $allowedValues = $this->getBankAccountTypeAllowableValues();
        if (!is_null($bank_account_type) && !in_array($bank_account_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'bank_account_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['bank_account_type'] = $bank_account_type;

        return $this;
    }

    /**
     * Gets bank_account_number
     *
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->container['bank_account_number'];
    }

    /**
     * Sets bank_account_number
     *
     * @param string $bank_account_number bank_account_number
     *
     * @return $this
     */
    public function setBankAccountNumber($bank_account_number)
    {
        $this->container['bank_account_number'] = $bank_account_number;

        return $this;
    }

    /**
     * Gets mandate_date
     *
     * @return \DateTime
     */
    public function getMandateDate()
    {
        return $this->container['mandate_date'];
    }

    /**
     * Sets mandate_date
     *
     * @param \DateTime $mandate_date mandate_date
     *
     * @return $this
     */
    public function setMandateDate($mandate_date)
    {
        $this->container['mandate_date'] = $mandate_date;

        return $this;
    }

    /**
     * Gets mandate_reference
     *
     * @return string
     */
    public function getMandateReference()
    {
        return $this->container['mandate_reference'];
    }

    /**
     * Sets mandate_reference
     *
     * @param string $mandate_reference mandate_reference
     *
     * @return $this
     */
    public function setMandateReference($mandate_reference)
    {
        $this->container['mandate_reference'] = $mandate_reference;

        return $this;
    }

    /**
     * Gets bic
     *
     * @return string
     */
    public function getBic()
    {
        return $this->container['bic'];
    }

    /**
     * Sets bic
     *
     * @param string $bic bic
     *
     * @return $this
     */
    public function setBic($bic)
    {
        $this->container['bic'] = $bic;

        return $this;
    }

    /**
     * Gets print_advance_payment_invoice
     *
     * @return bool
     */
    public function getPrintAdvancePaymentInvoice()
    {
        return $this->container['print_advance_payment_invoice'];
    }

    /**
     * Sets print_advance_payment_invoice
     *
     * @param bool $print_advance_payment_invoice print_advance_payment_invoice
     *
     * @return $this
     */
    public function setPrintAdvancePaymentInvoice($print_advance_payment_invoice)
    {
        $this->container['print_advance_payment_invoice'] = $print_advance_payment_invoice;

        return $this;
    }

    /**
     * Gets preferred_automatic_collection_day
     *
     * @return int
     */
    public function getPreferredAutomaticCollectionDay()
    {
        return $this->container['preferred_automatic_collection_day'];
    }

    /**
     * Sets preferred_automatic_collection_day
     *
     * @param int $preferred_automatic_collection_day preferred_automatic_collection_day
     *
     * @return $this
     */
    public function setPreferredAutomaticCollectionDay($preferred_automatic_collection_day)
    {
        $this->container['preferred_automatic_collection_day'] = $preferred_automatic_collection_day;

        return $this;
    }

    /**
     * Gets payment_reference
     *
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->container['payment_reference'];
    }

    /**
     * Sets payment_reference
     *
     * @param string $payment_reference payment_reference
     *
     * @return $this
     */
    public function setPaymentReference($payment_reference)
    {
        $this->container['payment_reference'] = $payment_reference;

        return $this;
    }

    /**
     * Gets preferred_invoice_day
     *
     * @return int
     */
    public function getPreferredInvoiceDay()
    {
        return $this->container['preferred_invoice_day'];
    }

    /**
     * Sets preferred_invoice_day
     *
     * @param int $preferred_invoice_day preferred_invoice_day
     *
     * @return $this
     */
    public function setPreferredInvoiceDay($preferred_invoice_day)
    {
        $this->container['preferred_invoice_day'] = $preferred_invoice_day;

        return $this;
    }

    /**
     * Gets preferred_advance_payment_invoice_contact_method
     *
     * @return string
     */
    public function getPreferredAdvancePaymentInvoiceContactMethod()
    {
        return $this->container['preferred_advance_payment_invoice_contact_method'];
    }

    /**
     * Sets preferred_advance_payment_invoice_contact_method
     *
     * @param string $preferred_advance_payment_invoice_contact_method preferred_advance_payment_invoice_contact_method
     *
     * @return $this
     */
    public function setPreferredAdvancePaymentInvoiceContactMethod($preferred_advance_payment_invoice_contact_method)
    {
        $allowedValues = $this->getPreferredAdvancePaymentInvoiceContactMethodAllowableValues();
        if (!is_null($preferred_advance_payment_invoice_contact_method) && !in_array($preferred_advance_payment_invoice_contact_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'preferred_advance_payment_invoice_contact_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['preferred_advance_payment_invoice_contact_method'] = $preferred_advance_payment_invoice_contact_method;

        return $this;
    }

    /**
     * Gets preferred_settlement_invoice_contact_method
     *
     * @return string
     */
    public function getPreferredSettlementInvoiceContactMethod()
    {
        return $this->container['preferred_settlement_invoice_contact_method'];
    }

    /**
     * Sets preferred_settlement_invoice_contact_method
     *
     * @param string $preferred_settlement_invoice_contact_method preferred_settlement_invoice_contact_method
     *
     * @return $this
     */
    public function setPreferredSettlementInvoiceContactMethod($preferred_settlement_invoice_contact_method)
    {
        $allowedValues = $this->getPreferredSettlementInvoiceContactMethodAllowableValues();
        if (!is_null($preferred_settlement_invoice_contact_method) && !in_array($preferred_settlement_invoice_contact_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'preferred_settlement_invoice_contact_method', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['preferred_settlement_invoice_contact_method'] = $preferred_settlement_invoice_contact_method;

        return $this;
    }

    /**
     * Gets advance_payment_schedule_type
     *
     * @return string
     */
    public function getAdvancePaymentScheduleType()
    {
        return $this->container['advance_payment_schedule_type'];
    }

    /**
     * Sets advance_payment_schedule_type
     *
     * @param string $advance_payment_schedule_type advance_payment_schedule_type
     *
     * @return $this
     */
    public function setAdvancePaymentScheduleType($advance_payment_schedule_type)
    {
        $allowedValues = $this->getAdvancePaymentScheduleTypeAllowableValues();
        if (!is_null($advance_payment_schedule_type) && !in_array($advance_payment_schedule_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'advance_payment_schedule_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['advance_payment_schedule_type'] = $advance_payment_schedule_type;

        return $this;
    }

    /**
     * Gets mandate_type
     *
     * @return string
     */
    public function getMandateType()
    {
        return $this->container['mandate_type'];
    }

    /**
     * Sets mandate_type
     *
     * @param string $mandate_type mandate_type
     *
     * @return $this
     */
    public function setMandateType($mandate_type)
    {
        $allowedValues = $this->getMandateTypeAllowableValues();
        if (!is_null($mandate_type) && !in_array($mandate_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'mandate_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['mandate_type'] = $mandate_type;

        return $this;
    }

    /**
     * Gets generate_e_invoice
     *
     * @return bool
     */
    public function getGenerateEInvoice()
    {
        return $this->container['generate_e_invoice'];
    }

    /**
     * Sets generate_e_invoice
     *
     * @param bool $generate_e_invoice generate_e_invoice
     *
     * @return $this
     */
    public function setGenerateEInvoice($generate_e_invoice)
    {
        $this->container['generate_e_invoice'] = $generate_e_invoice;

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



<?php
/**
 * EcedoERPCRMInterfaceGDPRInvoice
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
 * EcedoERPCRMInterfaceGDPRInvoice Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceGDPRInvoice implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.GDPR.Invoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'documents' => '\Swagger\Client\Model\EcedoERPCRMInterfaceGDPRDocument[]',
        'payment_method' => 'string',
        'payment_due_date' => '\DateTime',
        'is_credit' => 'bool',
        'is_credited' => 'bool',
        'is_collective_invoice' => 'bool',
        'total_amount_localized' => 'string',
        'vat_amount_localized' => 'string',
        'invoice_date_localized' => 'string',
        'extended_description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'documents' => null,
        'payment_method' => null,
        'payment_due_date' => 'date',
        'is_credit' => null,
        'is_credited' => null,
        'is_collective_invoice' => null,
        'total_amount_localized' => null,
        'vat_amount_localized' => null,
        'invoice_date_localized' => null,
        'extended_description' => null
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
        'documents' => 'Documents',
        'payment_method' => 'PaymentMethod',
        'payment_due_date' => 'PaymentDueDate',
        'is_credit' => 'IsCredit',
        'is_credited' => 'IsCredited',
        'is_collective_invoice' => 'IsCollectiveInvoice',
        'total_amount_localized' => 'TotalAmountLocalized',
        'vat_amount_localized' => 'VatAmountLocalized',
        'invoice_date_localized' => 'InvoiceDateLocalized',
        'extended_description' => 'ExtendedDescription'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'documents' => 'setDocuments',
        'payment_method' => 'setPaymentMethod',
        'payment_due_date' => 'setPaymentDueDate',
        'is_credit' => 'setIsCredit',
        'is_credited' => 'setIsCredited',
        'is_collective_invoice' => 'setIsCollectiveInvoice',
        'total_amount_localized' => 'setTotalAmountLocalized',
        'vat_amount_localized' => 'setVatAmountLocalized',
        'invoice_date_localized' => 'setInvoiceDateLocalized',
        'extended_description' => 'setExtendedDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'documents' => 'getDocuments',
        'payment_method' => 'getPaymentMethod',
        'payment_due_date' => 'getPaymentDueDate',
        'is_credit' => 'getIsCredit',
        'is_credited' => 'getIsCredited',
        'is_collective_invoice' => 'getIsCollectiveInvoice',
        'total_amount_localized' => 'getTotalAmountLocalized',
        'vat_amount_localized' => 'getVatAmountLocalized',
        'invoice_date_localized' => 'getInvoiceDateLocalized',
        'extended_description' => 'getExtendedDescription'
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
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['payment_due_date'] = isset($data['payment_due_date']) ? $data['payment_due_date'] : null;
        $this->container['is_credit'] = isset($data['is_credit']) ? $data['is_credit'] : null;
        $this->container['is_credited'] = isset($data['is_credited']) ? $data['is_credited'] : null;
        $this->container['is_collective_invoice'] = isset($data['is_collective_invoice']) ? $data['is_collective_invoice'] : null;
        $this->container['total_amount_localized'] = isset($data['total_amount_localized']) ? $data['total_amount_localized'] : null;
        $this->container['vat_amount_localized'] = isset($data['vat_amount_localized']) ? $data['vat_amount_localized'] : null;
        $this->container['invoice_date_localized'] = isset($data['invoice_date_localized']) ? $data['invoice_date_localized'] : null;
        $this->container['extended_description'] = isset($data['extended_description']) ? $data['extended_description'] : null;
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
     * Gets documents
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceGDPRDocument[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceGDPRDocument[] $documents documents
     *
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

        return $this;
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
        $this->container['payment_method'] = $payment_method;

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
     * Gets is_credited
     *
     * @return bool
     */
    public function getIsCredited()
    {
        return $this->container['is_credited'];
    }

    /**
     * Sets is_credited
     *
     * @param bool $is_credited is_credited
     *
     * @return $this
     */
    public function setIsCredited($is_credited)
    {
        $this->container['is_credited'] = $is_credited;

        return $this;
    }

    /**
     * Gets is_collective_invoice
     *
     * @return bool
     */
    public function getIsCollectiveInvoice()
    {
        return $this->container['is_collective_invoice'];
    }

    /**
     * Sets is_collective_invoice
     *
     * @param bool $is_collective_invoice is_collective_invoice
     *
     * @return $this
     */
    public function setIsCollectiveInvoice($is_collective_invoice)
    {
        $this->container['is_collective_invoice'] = $is_collective_invoice;

        return $this;
    }

    /**
     * Gets total_amount_localized
     *
     * @return string
     */
    public function getTotalAmountLocalized()
    {
        return $this->container['total_amount_localized'];
    }

    /**
     * Sets total_amount_localized
     *
     * @param string $total_amount_localized total_amount_localized
     *
     * @return $this
     */
    public function setTotalAmountLocalized($total_amount_localized)
    {
        $this->container['total_amount_localized'] = $total_amount_localized;

        return $this;
    }

    /**
     * Gets vat_amount_localized
     *
     * @return string
     */
    public function getVatAmountLocalized()
    {
        return $this->container['vat_amount_localized'];
    }

    /**
     * Sets vat_amount_localized
     *
     * @param string $vat_amount_localized vat_amount_localized
     *
     * @return $this
     */
    public function setVatAmountLocalized($vat_amount_localized)
    {
        $this->container['vat_amount_localized'] = $vat_amount_localized;

        return $this;
    }

    /**
     * Gets invoice_date_localized
     *
     * @return string
     */
    public function getInvoiceDateLocalized()
    {
        return $this->container['invoice_date_localized'];
    }

    /**
     * Sets invoice_date_localized
     *
     * @param string $invoice_date_localized invoice_date_localized
     *
     * @return $this
     */
    public function setInvoiceDateLocalized($invoice_date_localized)
    {
        $this->container['invoice_date_localized'] = $invoice_date_localized;

        return $this;
    }

    /**
     * Gets extended_description
     *
     * @return string
     */
    public function getExtendedDescription()
    {
        return $this->container['extended_description'];
    }

    /**
     * Sets extended_description
     *
     * @param string $extended_description extended_description
     *
     * @return $this
     */
    public function setExtendedDescription($extended_description)
    {
        $this->container['extended_description'] = $extended_description;

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


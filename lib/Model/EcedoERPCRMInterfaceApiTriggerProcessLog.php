<?php
/**
 * EcedoERPCRMInterfaceApiTriggerProcessLog
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
 * EcedoERPCRMInterfaceApiTriggerProcessLog Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiTriggerProcessLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.TriggerProcessLog';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'trigger_process_log_id' => 'string',
        'trigger_group' => 'string',
        'company_label_id' => 'string',
        'organization_id' => 'string',
        'cluster_reference' => 'string',
        'connection_id' => 'string',
        'date_logged' => '\DateTime',
        'trigger_type' => 'string',
        'trigger_type_localized' => 'string',
        'trigger_reason' => 'string',
        'trigger_reason_localized' => 'string',
        'description' => 'string',
        'comment' => 'string',
        'event' => 'string',
        'event_localized' => 'string',
        'event_date' => '\DateTime',
        'trigger_entity_id' => 'string',
        'trigger_entity_reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'trigger_process_log_id' => null,
        'trigger_group' => null,
        'company_label_id' => null,
        'organization_id' => null,
        'cluster_reference' => null,
        'connection_id' => 'uuid',
        'date_logged' => 'date-time',
        'trigger_type' => null,
        'trigger_type_localized' => null,
        'trigger_reason' => null,
        'trigger_reason_localized' => null,
        'description' => null,
        'comment' => null,
        'event' => null,
        'event_localized' => null,
        'event_date' => 'date',
        'trigger_entity_id' => 'uuid',
        'trigger_entity_reference' => null
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
        'trigger_process_log_id' => 'TriggerProcessLogId',
        'trigger_group' => 'TriggerGroup',
        'company_label_id' => 'CompanyLabelId',
        'organization_id' => 'OrganizationId',
        'cluster_reference' => 'ClusterReference',
        'connection_id' => 'ConnectionId',
        'date_logged' => 'DateLogged',
        'trigger_type' => 'TriggerType',
        'trigger_type_localized' => 'TriggerTypeLocalized',
        'trigger_reason' => 'TriggerReason',
        'trigger_reason_localized' => 'TriggerReasonLocalized',
        'description' => 'Description',
        'comment' => 'Comment',
        'event' => 'Event',
        'event_localized' => 'EventLocalized',
        'event_date' => 'EventDate',
        'trigger_entity_id' => 'TriggerEntityId',
        'trigger_entity_reference' => 'TriggerEntityReference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'trigger_process_log_id' => 'setTriggerProcessLogId',
        'trigger_group' => 'setTriggerGroup',
        'company_label_id' => 'setCompanyLabelId',
        'organization_id' => 'setOrganizationId',
        'cluster_reference' => 'setClusterReference',
        'connection_id' => 'setConnectionId',
        'date_logged' => 'setDateLogged',
        'trigger_type' => 'setTriggerType',
        'trigger_type_localized' => 'setTriggerTypeLocalized',
        'trigger_reason' => 'setTriggerReason',
        'trigger_reason_localized' => 'setTriggerReasonLocalized',
        'description' => 'setDescription',
        'comment' => 'setComment',
        'event' => 'setEvent',
        'event_localized' => 'setEventLocalized',
        'event_date' => 'setEventDate',
        'trigger_entity_id' => 'setTriggerEntityId',
        'trigger_entity_reference' => 'setTriggerEntityReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'trigger_process_log_id' => 'getTriggerProcessLogId',
        'trigger_group' => 'getTriggerGroup',
        'company_label_id' => 'getCompanyLabelId',
        'organization_id' => 'getOrganizationId',
        'cluster_reference' => 'getClusterReference',
        'connection_id' => 'getConnectionId',
        'date_logged' => 'getDateLogged',
        'trigger_type' => 'getTriggerType',
        'trigger_type_localized' => 'getTriggerTypeLocalized',
        'trigger_reason' => 'getTriggerReason',
        'trigger_reason_localized' => 'getTriggerReasonLocalized',
        'description' => 'getDescription',
        'comment' => 'getComment',
        'event' => 'getEvent',
        'event_localized' => 'getEventLocalized',
        'event_date' => 'getEventDate',
        'trigger_entity_id' => 'getTriggerEntityId',
        'trigger_entity_reference' => 'getTriggerEntityReference'
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
        $this->container['trigger_process_log_id'] = isset($data['trigger_process_log_id']) ? $data['trigger_process_log_id'] : null;
        $this->container['trigger_group'] = isset($data['trigger_group']) ? $data['trigger_group'] : null;
        $this->container['company_label_id'] = isset($data['company_label_id']) ? $data['company_label_id'] : null;
        $this->container['organization_id'] = isset($data['organization_id']) ? $data['organization_id'] : null;
        $this->container['cluster_reference'] = isset($data['cluster_reference']) ? $data['cluster_reference'] : null;
        $this->container['connection_id'] = isset($data['connection_id']) ? $data['connection_id'] : null;
        $this->container['date_logged'] = isset($data['date_logged']) ? $data['date_logged'] : null;
        $this->container['trigger_type'] = isset($data['trigger_type']) ? $data['trigger_type'] : null;
        $this->container['trigger_type_localized'] = isset($data['trigger_type_localized']) ? $data['trigger_type_localized'] : null;
        $this->container['trigger_reason'] = isset($data['trigger_reason']) ? $data['trigger_reason'] : null;
        $this->container['trigger_reason_localized'] = isset($data['trigger_reason_localized']) ? $data['trigger_reason_localized'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['event'] = isset($data['event']) ? $data['event'] : null;
        $this->container['event_localized'] = isset($data['event_localized']) ? $data['event_localized'] : null;
        $this->container['event_date'] = isset($data['event_date']) ? $data['event_date'] : null;
        $this->container['trigger_entity_id'] = isset($data['trigger_entity_id']) ? $data['trigger_entity_id'] : null;
        $this->container['trigger_entity_reference'] = isset($data['trigger_entity_reference']) ? $data['trigger_entity_reference'] : null;
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
     * Gets trigger_process_log_id
     *
     * @return string
     */
    public function getTriggerProcessLogId()
    {
        return $this->container['trigger_process_log_id'];
    }

    /**
     * Sets trigger_process_log_id
     *
     * @param string $trigger_process_log_id trigger_process_log_id
     *
     * @return $this
     */
    public function setTriggerProcessLogId($trigger_process_log_id)
    {
        $this->container['trigger_process_log_id'] = $trigger_process_log_id;

        return $this;
    }

    /**
     * Gets trigger_group
     *
     * @return string
     */
    public function getTriggerGroup()
    {
        return $this->container['trigger_group'];
    }

    /**
     * Sets trigger_group
     *
     * @param string $trigger_group trigger_group
     *
     * @return $this
     */
    public function setTriggerGroup($trigger_group)
    {
        $this->container['trigger_group'] = $trigger_group;

        return $this;
    }

    /**
     * Gets company_label_id
     *
     * @return string
     */
    public function getCompanyLabelId()
    {
        return $this->container['company_label_id'];
    }

    /**
     * Sets company_label_id
     *
     * @param string $company_label_id company_label_id
     *
     * @return $this
     */
    public function setCompanyLabelId($company_label_id)
    {
        $this->container['company_label_id'] = $company_label_id;

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
     * Gets date_logged
     *
     * @return \DateTime
     */
    public function getDateLogged()
    {
        return $this->container['date_logged'];
    }

    /**
     * Sets date_logged
     *
     * @param \DateTime $date_logged date_logged
     *
     * @return $this
     */
    public function setDateLogged($date_logged)
    {
        $this->container['date_logged'] = $date_logged;

        return $this;
    }

    /**
     * Gets trigger_type
     *
     * @return string
     */
    public function getTriggerType()
    {
        return $this->container['trigger_type'];
    }

    /**
     * Sets trigger_type
     *
     * @param string $trigger_type trigger_type
     *
     * @return $this
     */
    public function setTriggerType($trigger_type)
    {
        $this->container['trigger_type'] = $trigger_type;

        return $this;
    }

    /**
     * Gets trigger_type_localized
     *
     * @return string
     */
    public function getTriggerTypeLocalized()
    {
        return $this->container['trigger_type_localized'];
    }

    /**
     * Sets trigger_type_localized
     *
     * @param string $trigger_type_localized trigger_type_localized
     *
     * @return $this
     */
    public function setTriggerTypeLocalized($trigger_type_localized)
    {
        $this->container['trigger_type_localized'] = $trigger_type_localized;

        return $this;
    }

    /**
     * Gets trigger_reason
     *
     * @return string
     */
    public function getTriggerReason()
    {
        return $this->container['trigger_reason'];
    }

    /**
     * Sets trigger_reason
     *
     * @param string $trigger_reason trigger_reason
     *
     * @return $this
     */
    public function setTriggerReason($trigger_reason)
    {
        $this->container['trigger_reason'] = $trigger_reason;

        return $this;
    }

    /**
     * Gets trigger_reason_localized
     *
     * @return string
     */
    public function getTriggerReasonLocalized()
    {
        return $this->container['trigger_reason_localized'];
    }

    /**
     * Sets trigger_reason_localized
     *
     * @param string $trigger_reason_localized trigger_reason_localized
     *
     * @return $this
     */
    public function setTriggerReasonLocalized($trigger_reason_localized)
    {
        $this->container['trigger_reason_localized'] = $trigger_reason_localized;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets event
     *
     * @return string
     */
    public function getEvent()
    {
        return $this->container['event'];
    }

    /**
     * Sets event
     *
     * @param string $event event
     *
     * @return $this
     */
    public function setEvent($event)
    {
        $this->container['event'] = $event;

        return $this;
    }

    /**
     * Gets event_localized
     *
     * @return string
     */
    public function getEventLocalized()
    {
        return $this->container['event_localized'];
    }

    /**
     * Sets event_localized
     *
     * @param string $event_localized event_localized
     *
     * @return $this
     */
    public function setEventLocalized($event_localized)
    {
        $this->container['event_localized'] = $event_localized;

        return $this;
    }

    /**
     * Gets event_date
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->container['event_date'];
    }

    /**
     * Sets event_date
     *
     * @param \DateTime $event_date event_date
     *
     * @return $this
     */
    public function setEventDate($event_date)
    {
        $this->container['event_date'] = $event_date;

        return $this;
    }

    /**
     * Gets trigger_entity_id
     *
     * @return string
     */
    public function getTriggerEntityId()
    {
        return $this->container['trigger_entity_id'];
    }

    /**
     * Sets trigger_entity_id
     *
     * @param string $trigger_entity_id trigger_entity_id
     *
     * @return $this
     */
    public function setTriggerEntityId($trigger_entity_id)
    {
        $this->container['trigger_entity_id'] = $trigger_entity_id;

        return $this;
    }

    /**
     * Gets trigger_entity_reference
     *
     * @return string
     */
    public function getTriggerEntityReference()
    {
        return $this->container['trigger_entity_reference'];
    }

    /**
     * Sets trigger_entity_reference
     *
     * @param string $trigger_entity_reference trigger_entity_reference
     *
     * @return $this
     */
    public function setTriggerEntityReference($trigger_entity_reference)
    {
        $this->container['trigger_entity_reference'] = $trigger_entity_reference;

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



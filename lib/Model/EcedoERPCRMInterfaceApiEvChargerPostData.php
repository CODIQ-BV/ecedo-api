<?php
/**
 * EcedoERPCRMInterfaceApiEvChargerPostData
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
 * EcedoERPCRMInterfaceApiEvChargerPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiEvChargerPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.EvChargerPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'evses' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvsePostData[]',
        'service_contracts' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerServiceContractPostDataBase[]',
        'evse_contract_data' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvseContractPostData',
        'model' => 'string',
        'manufacturer' => 'string',
        'ev_charger_charging_capability' => 'string',
        'color' => 'string',
        'installation_party' => 'string',
        'power' => 'string',
        'serial_number' => 'string',
        'client_reference' => 'string',
        'connection_ean' => 'string',
        'has_card_reader' => 'bool',
        'has_plug_charge' => 'bool',
        'location' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerLocationPutData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'evses' => null,
        'service_contracts' => null,
        'evse_contract_data' => null,
        'model' => null,
        'manufacturer' => null,
        'ev_charger_charging_capability' => null,
        'color' => null,
        'installation_party' => null,
        'power' => null,
        'serial_number' => null,
        'client_reference' => null,
        'connection_ean' => null,
        'has_card_reader' => null,
        'has_plug_charge' => null,
        'location' => null
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
        'evses' => 'Evses',
        'service_contracts' => 'ServiceContracts',
        'evse_contract_data' => 'EvseContractData',
        'model' => 'Model',
        'manufacturer' => 'Manufacturer',
        'ev_charger_charging_capability' => 'EvChargerChargingCapability',
        'color' => 'Color',
        'installation_party' => 'InstallationParty',
        'power' => 'Power',
        'serial_number' => 'SerialNumber',
        'client_reference' => 'ClientReference',
        'connection_ean' => 'ConnectionEan',
        'has_card_reader' => 'HasCardReader',
        'has_plug_charge' => 'HasPlugCharge',
        'location' => 'Location'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'evses' => 'setEvses',
        'service_contracts' => 'setServiceContracts',
        'evse_contract_data' => 'setEvseContractData',
        'model' => 'setModel',
        'manufacturer' => 'setManufacturer',
        'ev_charger_charging_capability' => 'setEvChargerChargingCapability',
        'color' => 'setColor',
        'installation_party' => 'setInstallationParty',
        'power' => 'setPower',
        'serial_number' => 'setSerialNumber',
        'client_reference' => 'setClientReference',
        'connection_ean' => 'setConnectionEan',
        'has_card_reader' => 'setHasCardReader',
        'has_plug_charge' => 'setHasPlugCharge',
        'location' => 'setLocation'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'evses' => 'getEvses',
        'service_contracts' => 'getServiceContracts',
        'evse_contract_data' => 'getEvseContractData',
        'model' => 'getModel',
        'manufacturer' => 'getManufacturer',
        'ev_charger_charging_capability' => 'getEvChargerChargingCapability',
        'color' => 'getColor',
        'installation_party' => 'getInstallationParty',
        'power' => 'getPower',
        'serial_number' => 'getSerialNumber',
        'client_reference' => 'getClientReference',
        'connection_ean' => 'getConnectionEan',
        'has_card_reader' => 'getHasCardReader',
        'has_plug_charge' => 'getHasPlugCharge',
        'location' => 'getLocation'
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

    const MODEL_EVE = 'Eve';
    const MODEL_EVE_MINI = 'EveMini';
    const MODEL_TERRA53 = 'Terra53';
    const MODEL_TWIN = 'Twin';
    const MODEL_EVE_SINGLE_PROLINE_SOCKET = 'EveSingleProlineSocket';
    const MODEL_EVE_SINGLE_PROLINE5_M_CABLE = 'EveSingleProline5MCable';
    const MODEL_EVE_SINGLE_PROLINE8_M_CABLE = 'EveSingleProline8MCable';
    const MODEL_EVE_DOUBLE_PROLINE = 'EveDoubleProline';
    const MODEL_HYC150 = 'Hyc150';
    const MANUFACTURER_ALFEN = 'Alfen';
    const MANUFACTURER_ABB = 'ABB';
    const MANUFACTURER_ALPITRONIC = 'Alpitronic';
    const EV_CHARGER_CHARGING_CAPABILITY_FAST = 'Fast';
    const EV_CHARGER_CHARGING_CAPABILITY_REGULAR = 'Regular';
    const COLOR_WHITE = 'White';
    const COLOR_ANTHRACITE = 'Anthracite';
    const COLOR_ANDERS = 'Anders';
    const INSTALLATION_PARTY_COMFORT_PARTNERS = 'ComfortPartners';
    const INSTALLATION_PARTY_UNKNOWN = 'Unknown';
    const POWER_KW3_7 = 'KW3_7';
    const POWER_KW7_4 = 'KW7_4';
    const POWER_KW11 = 'KW11';
    const POWER_KW22 = 'KW22';
    const POWER_KW43 = 'KW43';
    const POWER_KW50 = 'KW50';
    const POWER_KW150 = 'KW150';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getModelAllowableValues()
    {
        return [
            self::MODEL_EVE,
            self::MODEL_EVE_MINI,
            self::MODEL_TERRA53,
            self::MODEL_TWIN,
            self::MODEL_EVE_SINGLE_PROLINE_SOCKET,
            self::MODEL_EVE_SINGLE_PROLINE5_M_CABLE,
            self::MODEL_EVE_SINGLE_PROLINE8_M_CABLE,
            self::MODEL_EVE_DOUBLE_PROLINE,
            self::MODEL_HYC150,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getManufacturerAllowableValues()
    {
        return [
            self::MANUFACTURER_ALFEN,
            self::MANUFACTURER_ABB,
            self::MANUFACTURER_ALPITRONIC,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEvChargerChargingCapabilityAllowableValues()
    {
        return [
            self::EV_CHARGER_CHARGING_CAPABILITY_FAST,
            self::EV_CHARGER_CHARGING_CAPABILITY_REGULAR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getColorAllowableValues()
    {
        return [
            self::COLOR_WHITE,
            self::COLOR_ANTHRACITE,
            self::COLOR_ANDERS,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getInstallationPartyAllowableValues()
    {
        return [
            self::INSTALLATION_PARTY_COMFORT_PARTNERS,
            self::INSTALLATION_PARTY_UNKNOWN,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPowerAllowableValues()
    {
        return [
            self::POWER_KW3_7,
            self::POWER_KW7_4,
            self::POWER_KW11,
            self::POWER_KW22,
            self::POWER_KW43,
            self::POWER_KW50,
            self::POWER_KW150,
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
        $this->container['evses'] = isset($data['evses']) ? $data['evses'] : null;
        $this->container['service_contracts'] = isset($data['service_contracts']) ? $data['service_contracts'] : null;
        $this->container['evse_contract_data'] = isset($data['evse_contract_data']) ? $data['evse_contract_data'] : null;
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['manufacturer'] = isset($data['manufacturer']) ? $data['manufacturer'] : null;
        $this->container['ev_charger_charging_capability'] = isset($data['ev_charger_charging_capability']) ? $data['ev_charger_charging_capability'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['installation_party'] = isset($data['installation_party']) ? $data['installation_party'] : null;
        $this->container['power'] = isset($data['power']) ? $data['power'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['client_reference'] = isset($data['client_reference']) ? $data['client_reference'] : null;
        $this->container['connection_ean'] = isset($data['connection_ean']) ? $data['connection_ean'] : null;
        $this->container['has_card_reader'] = isset($data['has_card_reader']) ? $data['has_card_reader'] : null;
        $this->container['has_plug_charge'] = isset($data['has_plug_charge']) ? $data['has_plug_charge'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($this->container['model']) && !in_array($this->container['model'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'model', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getManufacturerAllowableValues();
        if (!is_null($this->container['manufacturer']) && !in_array($this->container['manufacturer'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'manufacturer', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getEvChargerChargingCapabilityAllowableValues();
        if (!is_null($this->container['ev_charger_charging_capability']) && !in_array($this->container['ev_charger_charging_capability'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'ev_charger_charging_capability', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getColorAllowableValues();
        if (!is_null($this->container['color']) && !in_array($this->container['color'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'color', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getInstallationPartyAllowableValues();
        if (!is_null($this->container['installation_party']) && !in_array($this->container['installation_party'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'installation_party', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPowerAllowableValues();
        if (!is_null($this->container['power']) && !in_array($this->container['power'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'power', must be one of '%s'",
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
     * Gets evses
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvsePostData[]
     */
    public function getEvses()
    {
        return $this->container['evses'];
    }

    /**
     * Sets evses
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvsePostData[] $evses evses
     *
     * @return $this
     */
    public function setEvses($evses)
    {
        $this->container['evses'] = $evses;

        return $this;
    }

    /**
     * Gets service_contracts
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerServiceContractPostDataBase[]
     */
    public function getServiceContracts()
    {
        return $this->container['service_contracts'];
    }

    /**
     * Sets service_contracts
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerServiceContractPostDataBase[] $service_contracts service_contracts
     *
     * @return $this
     */
    public function setServiceContracts($service_contracts)
    {
        $this->container['service_contracts'] = $service_contracts;

        return $this;
    }

    /**
     * Gets evse_contract_data
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvseContractPostData
     */
    public function getEvseContractData()
    {
        return $this->container['evse_contract_data'];
    }

    /**
     * Sets evse_contract_data
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvseContractPostData $evse_contract_data evse_contract_data
     *
     * @return $this
     */
    public function setEvseContractData($evse_contract_data)
    {
        $this->container['evse_contract_data'] = $evse_contract_data;

        return $this;
    }

    /**
     * Gets model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model
     *
     * @param string $model model
     *
     * @return $this
     */
    public function setModel($model)
    {
        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($model) && !in_array($model, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'model', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets manufacturer
     *
     * @return string
     */
    public function getManufacturer()
    {
        return $this->container['manufacturer'];
    }

    /**
     * Sets manufacturer
     *
     * @param string $manufacturer manufacturer
     *
     * @return $this
     */
    public function setManufacturer($manufacturer)
    {
        $allowedValues = $this->getManufacturerAllowableValues();
        if (!is_null($manufacturer) && !in_array($manufacturer, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'manufacturer', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['manufacturer'] = $manufacturer;

        return $this;
    }

    /**
     * Gets ev_charger_charging_capability
     *
     * @return string
     */
    public function getEvChargerChargingCapability()
    {
        return $this->container['ev_charger_charging_capability'];
    }

    /**
     * Sets ev_charger_charging_capability
     *
     * @param string $ev_charger_charging_capability ev_charger_charging_capability
     *
     * @return $this
     */
    public function setEvChargerChargingCapability($ev_charger_charging_capability)
    {
        $allowedValues = $this->getEvChargerChargingCapabilityAllowableValues();
        if (!is_null($ev_charger_charging_capability) && !in_array($ev_charger_charging_capability, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'ev_charger_charging_capability', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['ev_charger_charging_capability'] = $ev_charger_charging_capability;

        return $this;
    }

    /**
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /**
     * Sets color
     *
     * @param string $color color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $allowedValues = $this->getColorAllowableValues();
        if (!is_null($color) && !in_array($color, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'color', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['color'] = $color;

        return $this;
    }

    /**
     * Gets installation_party
     *
     * @return string
     */
    public function getInstallationParty()
    {
        return $this->container['installation_party'];
    }

    /**
     * Sets installation_party
     *
     * @param string $installation_party installation_party
     *
     * @return $this
     */
    public function setInstallationParty($installation_party)
    {
        $allowedValues = $this->getInstallationPartyAllowableValues();
        if (!is_null($installation_party) && !in_array($installation_party, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'installation_party', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['installation_party'] = $installation_party;

        return $this;
    }

    /**
     * Gets power
     *
     * @return string
     */
    public function getPower()
    {
        return $this->container['power'];
    }

    /**
     * Sets power
     *
     * @param string $power power
     *
     * @return $this
     */
    public function setPower($power)
    {
        $allowedValues = $this->getPowerAllowableValues();
        if (!is_null($power) && !in_array($power, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'power', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['power'] = $power;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number serial_number
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets client_reference
     *
     * @return string
     */
    public function getClientReference()
    {
        return $this->container['client_reference'];
    }

    /**
     * Sets client_reference
     *
     * @param string $client_reference client_reference
     *
     * @return $this
     */
    public function setClientReference($client_reference)
    {
        $this->container['client_reference'] = $client_reference;

        return $this;
    }

    /**
     * Gets connection_ean
     *
     * @return string
     */
    public function getConnectionEan()
    {
        return $this->container['connection_ean'];
    }

    /**
     * Sets connection_ean
     *
     * @param string $connection_ean connection_ean
     *
     * @return $this
     */
    public function setConnectionEan($connection_ean)
    {
        $this->container['connection_ean'] = $connection_ean;

        return $this;
    }

    /**
     * Gets has_card_reader
     *
     * @return bool
     */
    public function getHasCardReader()
    {
        return $this->container['has_card_reader'];
    }

    /**
     * Sets has_card_reader
     *
     * @param bool $has_card_reader has_card_reader
     *
     * @return $this
     */
    public function setHasCardReader($has_card_reader)
    {
        $this->container['has_card_reader'] = $has_card_reader;

        return $this;
    }

    /**
     * Gets has_plug_charge
     *
     * @return bool
     */
    public function getHasPlugCharge()
    {
        return $this->container['has_plug_charge'];
    }

    /**
     * Sets has_plug_charge
     *
     * @param bool $has_plug_charge has_plug_charge
     *
     * @return $this
     */
    public function setHasPlugCharge($has_plug_charge)
    {
        $this->container['has_plug_charge'] = $has_plug_charge;

        return $this;
    }

    /**
     * Gets location
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerLocationPutData
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerLocationPutData $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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



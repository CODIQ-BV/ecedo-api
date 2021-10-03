<?php
/**
 * EcedoERPCRMInterfaceApiMeteringPoint
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
 * EcedoERPCRMInterfaceApiMeteringPoint Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiMeteringPoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.MeteringPoint';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ean' => 'string',
        'market_segment' => 'string',
        'market_segment_localized' => 'string',
        'usage_type' => 'string',
        'usage_type_localized' => 'string',
        'type_of_supply' => 'string',
        'type_of_supply_localized' => 'string',
        'grid_operator_ean' => 'string',
        'grid_operator_localized' => 'string',
        'grid_area' => 'string',
        'gos' => 'string',
        'gos_tariff' => 'double',
        'gos_region' => 'int',
        'gos_region_localized' => 'string',
        'address' => '\Swagger\Client\Model\EcedoERPCRMInterfaceApiAddress',
        'is_secondary_allocation_point' => 'bool',
        'primary_allocation_point_ean' => 'string',
        'location_description' => 'string',
        'is_art' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ean' => null,
        'market_segment' => null,
        'market_segment_localized' => null,
        'usage_type' => null,
        'usage_type_localized' => null,
        'type_of_supply' => null,
        'type_of_supply_localized' => null,
        'grid_operator_ean' => null,
        'grid_operator_localized' => null,
        'grid_area' => null,
        'gos' => null,
        'gos_tariff' => 'double',
        'gos_region' => 'int32',
        'gos_region_localized' => null,
        'address' => null,
        'is_secondary_allocation_point' => null,
        'primary_allocation_point_ean' => null,
        'location_description' => null,
        'is_art' => null
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
        'ean' => 'EAN',
        'market_segment' => 'MarketSegment',
        'market_segment_localized' => 'MarketSegmentLocalized',
        'usage_type' => 'UsageType',
        'usage_type_localized' => 'UsageTypeLocalized',
        'type_of_supply' => 'TypeOfSupply',
        'type_of_supply_localized' => 'TypeOfSupplyLocalized',
        'grid_operator_ean' => 'GridOperatorEAN',
        'grid_operator_localized' => 'GridOperatorLocalized',
        'grid_area' => 'GridArea',
        'gos' => 'Gos',
        'gos_tariff' => 'GosTariff',
        'gos_region' => 'GosRegion',
        'gos_region_localized' => 'GosRegionLocalized',
        'address' => 'Address',
        'is_secondary_allocation_point' => 'IsSecondaryAllocationPoint',
        'primary_allocation_point_ean' => 'PrimaryAllocationPointEAN',
        'location_description' => 'LocationDescription',
        'is_art' => 'IsART'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ean' => 'setEan',
        'market_segment' => 'setMarketSegment',
        'market_segment_localized' => 'setMarketSegmentLocalized',
        'usage_type' => 'setUsageType',
        'usage_type_localized' => 'setUsageTypeLocalized',
        'type_of_supply' => 'setTypeOfSupply',
        'type_of_supply_localized' => 'setTypeOfSupplyLocalized',
        'grid_operator_ean' => 'setGridOperatorEan',
        'grid_operator_localized' => 'setGridOperatorLocalized',
        'grid_area' => 'setGridArea',
        'gos' => 'setGos',
        'gos_tariff' => 'setGosTariff',
        'gos_region' => 'setGosRegion',
        'gos_region_localized' => 'setGosRegionLocalized',
        'address' => 'setAddress',
        'is_secondary_allocation_point' => 'setIsSecondaryAllocationPoint',
        'primary_allocation_point_ean' => 'setPrimaryAllocationPointEan',
        'location_description' => 'setLocationDescription',
        'is_art' => 'setIsArt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ean' => 'getEan',
        'market_segment' => 'getMarketSegment',
        'market_segment_localized' => 'getMarketSegmentLocalized',
        'usage_type' => 'getUsageType',
        'usage_type_localized' => 'getUsageTypeLocalized',
        'type_of_supply' => 'getTypeOfSupply',
        'type_of_supply_localized' => 'getTypeOfSupplyLocalized',
        'grid_operator_ean' => 'getGridOperatorEan',
        'grid_operator_localized' => 'getGridOperatorLocalized',
        'grid_area' => 'getGridArea',
        'gos' => 'getGos',
        'gos_tariff' => 'getGosTariff',
        'gos_region' => 'getGosRegion',
        'gos_region_localized' => 'getGosRegionLocalized',
        'address' => 'getAddress',
        'is_secondary_allocation_point' => 'getIsSecondaryAllocationPoint',
        'primary_allocation_point_ean' => 'getPrimaryAllocationPointEan',
        'location_description' => 'getLocationDescription',
        'is_art' => 'getIsArt'
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
        $this->container['ean'] = isset($data['ean']) ? $data['ean'] : null;
        $this->container['market_segment'] = isset($data['market_segment']) ? $data['market_segment'] : null;
        $this->container['market_segment_localized'] = isset($data['market_segment_localized']) ? $data['market_segment_localized'] : null;
        $this->container['usage_type'] = isset($data['usage_type']) ? $data['usage_type'] : null;
        $this->container['usage_type_localized'] = isset($data['usage_type_localized']) ? $data['usage_type_localized'] : null;
        $this->container['type_of_supply'] = isset($data['type_of_supply']) ? $data['type_of_supply'] : null;
        $this->container['type_of_supply_localized'] = isset($data['type_of_supply_localized']) ? $data['type_of_supply_localized'] : null;
        $this->container['grid_operator_ean'] = isset($data['grid_operator_ean']) ? $data['grid_operator_ean'] : null;
        $this->container['grid_operator_localized'] = isset($data['grid_operator_localized']) ? $data['grid_operator_localized'] : null;
        $this->container['grid_area'] = isset($data['grid_area']) ? $data['grid_area'] : null;
        $this->container['gos'] = isset($data['gos']) ? $data['gos'] : null;
        $this->container['gos_tariff'] = isset($data['gos_tariff']) ? $data['gos_tariff'] : null;
        $this->container['gos_region'] = isset($data['gos_region']) ? $data['gos_region'] : null;
        $this->container['gos_region_localized'] = isset($data['gos_region_localized']) ? $data['gos_region_localized'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['is_secondary_allocation_point'] = isset($data['is_secondary_allocation_point']) ? $data['is_secondary_allocation_point'] : null;
        $this->container['primary_allocation_point_ean'] = isset($data['primary_allocation_point_ean']) ? $data['primary_allocation_point_ean'] : null;
        $this->container['location_description'] = isset($data['location_description']) ? $data['location_description'] : null;
        $this->container['is_art'] = isset($data['is_art']) ? $data['is_art'] : null;
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
     * @param string $ean EAN van de aansluiting
     *
     * @return $this
     */
    public function setEan($ean)
    {
        $this->container['ean'] = $ean;

        return $this;
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
     * @param string $market_segment Het marktsegment (ook wel verbruikssegment genoemd) van de aansluiting
     *
     * @return $this
     */
    public function setMarketSegment($market_segment)
    {
        $this->container['market_segment'] = $market_segment;

        return $this;
    }

    /**
     * Gets market_segment_localized
     *
     * @return string
     */
    public function getMarketSegmentLocalized()
    {
        return $this->container['market_segment_localized'];
    }

    /**
     * Sets market_segment_localized
     *
     * @param string $market_segment_localized Nederlandse vertaling van het marktsegment
     *
     * @return $this
     */
    public function setMarketSegmentLocalized($market_segment_localized)
    {
        $this->container['market_segment_localized'] = $market_segment_localized;

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
     * @param string $usage_type Verbruikstype van de aansluiting
     *
     * @return $this
     */
    public function setUsageType($usage_type)
    {
        $this->container['usage_type'] = $usage_type;

        return $this;
    }

    /**
     * Gets usage_type_localized
     *
     * @return string
     */
    public function getUsageTypeLocalized()
    {
        return $this->container['usage_type_localized'];
    }

    /**
     * Sets usage_type_localized
     *
     * @param string $usage_type_localized Nederlandse vertaling van het verbruikstype
     *
     * @return $this
     */
    public function setUsageTypeLocalized($usage_type_localized)
    {
        $this->container['usage_type_localized'] = $usage_type_localized;

        return $this;
    }

    /**
     * Gets type_of_supply
     *
     * @return string
     */
    public function getTypeOfSupply()
    {
        return $this->container['type_of_supply'];
    }

    /**
     * Sets type_of_supply
     *
     * @param string $type_of_supply Leveringsrichting van de aansluiting
     *
     * @return $this
     */
    public function setTypeOfSupply($type_of_supply)
    {
        $this->container['type_of_supply'] = $type_of_supply;

        return $this;
    }

    /**
     * Gets type_of_supply_localized
     *
     * @return string
     */
    public function getTypeOfSupplyLocalized()
    {
        return $this->container['type_of_supply_localized'];
    }

    /**
     * Sets type_of_supply_localized
     *
     * @param string $type_of_supply_localized Nederlandse vertaling van de leveringsrichting
     *
     * @return $this
     */
    public function setTypeOfSupplyLocalized($type_of_supply_localized)
    {
        $this->container['type_of_supply_localized'] = $type_of_supply_localized;

        return $this;
    }

    /**
     * Gets grid_operator_ean
     *
     * @return string
     */
    public function getGridOperatorEan()
    {
        return $this->container['grid_operator_ean'];
    }

    /**
     * Sets grid_operator_ean
     *
     * @param string $grid_operator_ean EAN code van de netbeheerder die de aansluiting beheert
     *
     * @return $this
     */
    public function setGridOperatorEan($grid_operator_ean)
    {
        $this->container['grid_operator_ean'] = $grid_operator_ean;

        return $this;
    }

    /**
     * Gets grid_operator_localized
     *
     * @return string
     */
    public function getGridOperatorLocalized()
    {
        return $this->container['grid_operator_localized'];
    }

    /**
     * Sets grid_operator_localized
     *
     * @param string $grid_operator_localized De naam van de netbeheerder die de aansluiting beheert
     *
     * @return $this
     */
    public function setGridOperatorLocalized($grid_operator_localized)
    {
        $this->container['grid_operator_localized'] = $grid_operator_localized;

        return $this;
    }

    /**
     * Gets grid_area
     *
     * @return string
     */
    public function getGridArea()
    {
        return $this->container['grid_area'];
    }

    /**
     * Sets grid_area
     *
     * @param string $grid_area Het netgebied waarin de aansluiting zich bevindt (alleen gevuld bij elektriciteit-aansluitingen)
     *
     * @return $this
     */
    public function setGridArea($grid_area)
    {
        $this->container['grid_area'] = $grid_area;

        return $this;
    }

    /**
     * Gets gos
     *
     * @return string
     */
    public function getGos()
    {
        return $this->container['gos'];
    }

    /**
     * Sets gos
     *
     * @param string $gos De EAN van het Gas Ontvangst Station (GOS) (alleen gevuld bij gas-aansluitingen)
     *
     * @return $this
     */
    public function setGos($gos)
    {
        $this->container['gos'] = $gos;

        return $this;
    }

    /**
     * Gets gos_tariff
     *
     * @return double
     */
    public function getGosTariff()
    {
        return $this->container['gos_tariff'];
    }

    /**
     * Sets gos_tariff
     *
     * @param double $gos_tariff Dit veld is niet langer van toepassingen sinds de komst van het postzegeltarief (NC-TAR)
     *
     * @return $this
     */
    public function setGosTariff($gos_tariff)
    {
        $this->container['gos_tariff'] = $gos_tariff;

        return $this;
    }

    /**
     * Gets gos_region
     *
     * @return int
     */
    public function getGosRegion()
    {
        return $this->container['gos_region'];
    }

    /**
     * Sets gos_region
     *
     * @param int $gos_region Dit veld is niet langer van toepassingen sinds de komst van het postzegeltarief (NC-TAR)
     *
     * @return $this
     */
    public function setGosRegion($gos_region)
    {
        $this->container['gos_region'] = $gos_region;

        return $this;
    }

    /**
     * Gets gos_region_localized
     *
     * @return string
     */
    public function getGosRegionLocalized()
    {
        return $this->container['gos_region_localized'];
    }

    /**
     * Sets gos_region_localized
     *
     * @param string $gos_region_localized Dit veld is niet langer van toepassingen sinds de komst van het postzegeltarief (NC-TAR)
     *
     * @return $this
     */
    public function setGosRegionLocalized($gos_region_localized)
    {
        $this->container['gos_region_localized'] = $gos_region_localized;

        return $this;
    }

    /**
     * Gets address
     *
     * @return \Swagger\Client\Model\EcedoERPCRMInterfaceApiAddress
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Swagger\Client\Model\EcedoERPCRMInterfaceApiAddress $address Het adres van de aansluiting (zie het object-model voor meer informatie)
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets is_secondary_allocation_point
     *
     * @return bool
     */
    public function getIsSecondaryAllocationPoint()
    {
        return $this->container['is_secondary_allocation_point'];
    }

    /**
     * Sets is_secondary_allocation_point
     *
     * @param bool $is_secondary_allocation_point Geeft aan of de aansluiting een primair aansluitpunt heeft en daarmee dus zelf een secundair aansluitpunt is
     *
     * @return $this
     */
    public function setIsSecondaryAllocationPoint($is_secondary_allocation_point)
    {
        $this->container['is_secondary_allocation_point'] = $is_secondary_allocation_point;

        return $this;
    }

    /**
     * Gets primary_allocation_point_ean
     *
     * @return string
     */
    public function getPrimaryAllocationPointEan()
    {
        return $this->container['primary_allocation_point_ean'];
    }

    /**
     * Sets primary_allocation_point_ean
     *
     * @param string $primary_allocation_point_ean De EAN van het eventueel aanwezige primaire aansluitpunt
     *
     * @return $this
     */
    public function setPrimaryAllocationPointEan($primary_allocation_point_ean)
    {
        $this->container['primary_allocation_point_ean'] = $primary_allocation_point_ean;

        return $this;
    }

    /**
     * Gets location_description
     *
     * @return string
     */
    public function getLocationDescription()
    {
        return $this->container['location_description'];
    }

    /**
     * Sets location_description
     *
     * @param string $location_description Een optionele locatieomschrijving die de netbeheerder bij een aansluiting kan registreren
     *
     * @return $this
     */
    public function setLocationDescription($location_description)
    {
        $this->container['location_description'] = $location_description;

        return $this;
    }

    /**
     * Gets is_art
     *
     * @return bool
     */
    public function getIsArt()
    {
        return $this->container['is_art'];
    }

    /**
     * Sets is_art
     *
     * @param bool $is_art Geeft aan of de aansluiting het marktsegment (UsageType) \"Artikel 1 lid 2 of 3\" heeft. Dit zijn kleinverbruikaansluitingen die behandeld moeten worden als grootverbruikaansluitingen.  Bij deze aansluitingen geeft Ecedo UsageType \"LargeConsumer\" terug en wordt deze boolean op \"true\" gezet om aan te geven dat het om een ART-aansluiting gaat.
     *
     * @return $this
     */
    public function setIsArt($is_art)
    {
        $this->container['is_art'] = $is_art;

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



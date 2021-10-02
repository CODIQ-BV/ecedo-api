<?php
/**
 * EcedoERPCRMInterfaceApiAddressPostData
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
 * EcedoERPCRMInterfaceApiAddressPostData Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EcedoERPCRMInterfaceApiAddressPostData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Ecedo.ERP.CRM.Interface.Api.AddressPostData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'street' => 'string',
        'number' => 'int',
        'addition' => 'string',
        'zip_code' => 'string',
        'city' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'street' => null,
        'number' => 'int32',
        'addition' => null,
        'zip_code' => null,
        'city' => null,
        'country' => null
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
        'street' => 'Street',
        'number' => 'Number',
        'addition' => 'Addition',
        'zip_code' => 'ZipCode',
        'city' => 'City',
        'country' => 'Country'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'street' => 'setStreet',
        'number' => 'setNumber',
        'addition' => 'setAddition',
        'zip_code' => 'setZipCode',
        'city' => 'setCity',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'street' => 'getStreet',
        'number' => 'getNumber',
        'addition' => 'getAddition',
        'zip_code' => 'getZipCode',
        'city' => 'getCity',
        'country' => 'getCountry'
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

    const COUNTRY_NL = 'NL';
    const COUNTRY_DE = 'DE';
    const COUNTRY_FR = 'FR';
    const COUNTRY_BE = 'BE';
    const COUNTRY_GB = 'GB';
    const COUNTRY_TR = 'TR';
    const COUNTRY_AF = 'AF';
    const COUNTRY_AX = 'AX';
    const COUNTRY_AL = 'AL';
    const COUNTRY_DZ = 'DZ';
    const COUNTRY_VI = 'VI';
    const COUNTRY__AS = 'AS';
    const COUNTRY_AD = 'AD';
    const COUNTRY_AO = 'AO';
    const COUNTRY_AI = 'AI';
    const COUNTRY_AQ = 'AQ';
    const COUNTRY_AG = 'AG';
    const COUNTRY_AR = 'AR';
    const COUNTRY_AM = 'AM';
    const COUNTRY_AW = 'AW';
    const COUNTRY_AU = 'AU';
    const COUNTRY_AZ = 'AZ';
    const COUNTRY_BS = 'BS';
    const COUNTRY_BH = 'BH';
    const COUNTRY_BD = 'BD';
    const COUNTRY_BB = 'BB';
    const COUNTRY_BZ = 'BZ';
    const COUNTRY_BJ = 'BJ';
    const COUNTRY_BM = 'BM';
    const COUNTRY_BT = 'BT';
    const COUNTRY_BO = 'BO';
    const COUNTRY_BA = 'BA';
    const COUNTRY_BW = 'BW';
    const COUNTRY_BV = 'BV';
    const COUNTRY_BR = 'BR';
    const COUNTRY_VG = 'VG';
    const COUNTRY_IO = 'IO';
    const COUNTRY_BN = 'BN';
    const COUNTRY_BG = 'BG';
    const COUNTRY_BF = 'BF';
    const COUNTRY_BI = 'BI';
    const COUNTRY_KH = 'KH';
    const COUNTRY_CA = 'CA';
    const COUNTRY_BQ = 'BQ';
    const COUNTRY_CF = 'CF';
    const COUNTRY_CL = 'CL';
    const COUNTRY_CN = 'CN';
    const COUNTRY_CX = 'CX';
    const COUNTRY_CC = 'CC';
    const COUNTRY_CO = 'CO';
    const COUNTRY_KM = 'KM';
    const COUNTRY_CG = 'CG';
    const COUNTRY_CD = 'CD';
    const COUNTRY_CK = 'CK';
    const COUNTRY_CR = 'CR';
    const COUNTRY_CU = 'CU';
    const COUNTRY_CW = 'CW';
    const COUNTRY_CY = 'CY';
    const COUNTRY_DK = 'DK';
    const COUNTRY_DJ = 'DJ';
    const COUNTRY_DM = 'DM';
    const COUNTRY__DO = 'DO';
    const COUNTRY_EC = 'EC';
    const COUNTRY_EG = 'EG';
    const COUNTRY_SV = 'SV';
    const COUNTRY_GQ = 'GQ';
    const COUNTRY_ER = 'ER';
    const COUNTRY_EE = 'EE';
    const COUNTRY_ET = 'ET';
    const COUNTRY_FO = 'FO';
    const COUNTRY_FK = 'FK';
    const COUNTRY_FJ = 'FJ';
    const COUNTRY_PH = 'PH';
    const COUNTRY_FI = 'FI';
    const COUNTRY_TF = 'TF';
    const COUNTRY_GF = 'GF';
    const COUNTRY_PF = 'PF';
    const COUNTRY_GA = 'GA';
    const COUNTRY_GM = 'GM';
    const COUNTRY_GE = 'GE';
    const COUNTRY_GH = 'GH';
    const COUNTRY_GI = 'GI';
    const COUNTRY_GD = 'GD';
    const COUNTRY_GR = 'GR';
    const COUNTRY_GL = 'GL';
    const COUNTRY_GP = 'GP';
    const COUNTRY_GU = 'GU';
    const COUNTRY_GT = 'GT';
    const COUNTRY_GG = 'GG';
    const COUNTRY_GN = 'GN';
    const COUNTRY_GW = 'GW';
    const COUNTRY_GY = 'GY';
    const COUNTRY_HT = 'HT';
    const COUNTRY_HM = 'HM';
    const COUNTRY_HN = 'HN';
    const COUNTRY_HU = 'HU';
    const COUNTRY_HK = 'HK';
    const COUNTRY_IE = 'IE';
    const COUNTRY_IS = 'IS';
    const COUNTRY_IN = 'IN';
    const COUNTRY_ID = 'ID';
    const COUNTRY_IQ = 'IQ';
    const COUNTRY_IR = 'IR';
    const COUNTRY_IL = 'IL';
    const COUNTRY_IT = 'IT';
    const COUNTRY_CI = 'CI';
    const COUNTRY_JM = 'JM';
    const COUNTRY_JP = 'JP';
    const COUNTRY_YE = 'YE';
    const COUNTRY_JE = 'JE';
    const COUNTRY_JO = 'JO';
    const COUNTRY_KY = 'KY';
    const COUNTRY_CV = 'CV';
    const COUNTRY_CM = 'CM';
    const COUNTRY_KZ = 'KZ';
    const COUNTRY_KE = 'KE';
    const COUNTRY_KG = 'KG';
    const COUNTRY_KI = 'KI';
    const COUNTRY_UM = 'UM';
    const COUNTRY_KW = 'KW';
    const COUNTRY_HR = 'HR';
    const COUNTRY_LA = 'LA';
    const COUNTRY_LS = 'LS';
    const COUNTRY_LV = 'LV';
    const COUNTRY_LB = 'LB';
    const COUNTRY_LR = 'LR';
    const COUNTRY_LY = 'LY';
    const COUNTRY_LI = 'LI';
    const COUNTRY_LT = 'LT';
    const COUNTRY_LU = 'LU';
    const COUNTRY_MO = 'MO';
    const COUNTRY_MG = 'MG';
    const COUNTRY_MW = 'MW';
    const COUNTRY_MV = 'MV';
    const COUNTRY_MY = 'MY';
    const COUNTRY_ML = 'ML';
    const COUNTRY_MT = 'MT';
    const COUNTRY_IM = 'IM';
    const COUNTRY_MA = 'MA';
    const COUNTRY_MH = 'MH';
    const COUNTRY_MQ = 'MQ';
    const COUNTRY_MR = 'MR';
    const COUNTRY_MU = 'MU';
    const COUNTRY_YT = 'YT';
    const COUNTRY_MX = 'MX';
    const COUNTRY_FM = 'FM';
    const COUNTRY_MD = 'MD';
    const COUNTRY_MC = 'MC';
    const COUNTRY_MN = 'MN';
    const COUNTRY_ME = 'ME';
    const COUNTRY_MS = 'MS';
    const COUNTRY_MZ = 'MZ';
    const COUNTRY_MM = 'MM';
    const COUNTRY_NA = 'NA';
    const COUNTRY_NR = 'NR';
    const COUNTRY_NP = 'NP';
    const COUNTRY_NI = 'NI';
    const COUNTRY_NC = 'NC';
    const COUNTRY_NZ = 'NZ';
    const COUNTRY_NE = 'NE';
    const COUNTRY_NG = 'NG';
    const COUNTRY_NU = 'NU';
    const COUNTRY_MP = 'MP';
    const COUNTRY_KP = 'KP';
    const COUNTRY_MK = 'MK';
    const COUNTRY_NO = 'NO';
    const COUNTRY_NF = 'NF';
    const COUNTRY_UG = 'UG';
    const COUNTRY_UA = 'UA';
    const COUNTRY_UZ = 'UZ';
    const COUNTRY_OM = 'OM';
    const COUNTRY_AT = 'AT';
    const COUNTRY_TL = 'TL';
    const COUNTRY_PK = 'PK';
    const COUNTRY_PW = 'PW';
    const COUNTRY_PS = 'PS';
    const COUNTRY_PA = 'PA';
    const COUNTRY_PG = 'PG';
    const COUNTRY_PY = 'PY';
    const COUNTRY_PE = 'PE';
    const COUNTRY_PN = 'PN';
    const COUNTRY_PL = 'PL';
    const COUNTRY_PT = 'PT';
    const COUNTRY_PR = 'PR';
    const COUNTRY_QA = 'QA';
    const COUNTRY_RE = 'RE';
    const COUNTRY_RO = 'RO';
    const COUNTRY_RU = 'RU';
    const COUNTRY_RW = 'RW';
    const COUNTRY_BL = 'BL';
    const COUNTRY_KN = 'KN';
    const COUNTRY_LC = 'LC';
    const COUNTRY_PM = 'PM';
    const COUNTRY_VC = 'VC';
    const COUNTRY_SB = 'SB';
    const COUNTRY_WS = 'WS';
    const COUNTRY_SM = 'SM';
    const COUNTRY_SA = 'SA';
    const COUNTRY_ST = 'ST';
    const COUNTRY_SN = 'SN';
    const COUNTRY_RS = 'RS';
    const COUNTRY_SC = 'SC';
    const COUNTRY_SL = 'SL';
    const COUNTRY_SG = 'SG';
    const COUNTRY_SH = 'SH';
    const COUNTRY_MF = 'MF';
    const COUNTRY_SX = 'SX';
    const COUNTRY_SI = 'SI';
    const COUNTRY_SK = 'SK';
    const COUNTRY_SD = 'SD';
    const COUNTRY_SO = 'SO';
    const COUNTRY_ES = 'ES';
    const COUNTRY_SJ = 'SJ';
    const COUNTRY_LK = 'LK';
    const COUNTRY_SR = 'SR';
    const COUNTRY_SZ = 'SZ';
    const COUNTRY_SY = 'SY';
    const COUNTRY_TJ = 'TJ';
    const COUNTRY_TW = 'TW';
    const COUNTRY_TZ = 'TZ';
    const COUNTRY_TH = 'TH';
    const COUNTRY_TG = 'TG';
    const COUNTRY_TK = 'TK';
    const COUNTRY_TO = 'TO';
    const COUNTRY_TT = 'TT';
    const COUNTRY_TD = 'TD';
    const COUNTRY_CZ = 'CZ';
    const COUNTRY_TN = 'TN';
    const COUNTRY_TM = 'TM';
    const COUNTRY_TC = 'TC';
    const COUNTRY_TV = 'TV';
    const COUNTRY_UY = 'UY';
    const COUNTRY_VU = 'VU';
    const COUNTRY_VA = 'VA';
    const COUNTRY_VE = 'VE';
    const COUNTRY_AE = 'AE';
    const COUNTRY_US = 'US';
    const COUNTRY_VN = 'VN';
    const COUNTRY_WF = 'WF';
    const COUNTRY_EH = 'EH';
    const COUNTRY_BY = 'BY';
    const COUNTRY_ZM = 'ZM';
    const COUNTRY_ZW = 'ZW';
    const COUNTRY_ZA = 'ZA';
    const COUNTRY_GS = 'GS';
    const COUNTRY_KR = 'KR';
    const COUNTRY_SS = 'SS';
    const COUNTRY_SE = 'SE';
    const COUNTRY_CH = 'CH';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCountryAllowableValues()
    {
        return [
            self::COUNTRY_NL,
            self::COUNTRY_DE,
            self::COUNTRY_FR,
            self::COUNTRY_BE,
            self::COUNTRY_GB,
            self::COUNTRY_TR,
            self::COUNTRY_AF,
            self::COUNTRY_AX,
            self::COUNTRY_AL,
            self::COUNTRY_DZ,
            self::COUNTRY_VI,
            self::COUNTRY__AS,
            self::COUNTRY_AD,
            self::COUNTRY_AO,
            self::COUNTRY_AI,
            self::COUNTRY_AQ,
            self::COUNTRY_AG,
            self::COUNTRY_AR,
            self::COUNTRY_AM,
            self::COUNTRY_AW,
            self::COUNTRY_AU,
            self::COUNTRY_AZ,
            self::COUNTRY_BS,
            self::COUNTRY_BH,
            self::COUNTRY_BD,
            self::COUNTRY_BB,
            self::COUNTRY_BZ,
            self::COUNTRY_BJ,
            self::COUNTRY_BM,
            self::COUNTRY_BT,
            self::COUNTRY_BO,
            self::COUNTRY_BA,
            self::COUNTRY_BW,
            self::COUNTRY_BV,
            self::COUNTRY_BR,
            self::COUNTRY_VG,
            self::COUNTRY_IO,
            self::COUNTRY_BN,
            self::COUNTRY_BG,
            self::COUNTRY_BF,
            self::COUNTRY_BI,
            self::COUNTRY_KH,
            self::COUNTRY_CA,
            self::COUNTRY_BQ,
            self::COUNTRY_CF,
            self::COUNTRY_CL,
            self::COUNTRY_CN,
            self::COUNTRY_CX,
            self::COUNTRY_CC,
            self::COUNTRY_CO,
            self::COUNTRY_KM,
            self::COUNTRY_CG,
            self::COUNTRY_CD,
            self::COUNTRY_CK,
            self::COUNTRY_CR,
            self::COUNTRY_CU,
            self::COUNTRY_CW,
            self::COUNTRY_CY,
            self::COUNTRY_DK,
            self::COUNTRY_DJ,
            self::COUNTRY_DM,
            self::COUNTRY__DO,
            self::COUNTRY_EC,
            self::COUNTRY_EG,
            self::COUNTRY_SV,
            self::COUNTRY_GQ,
            self::COUNTRY_ER,
            self::COUNTRY_EE,
            self::COUNTRY_ET,
            self::COUNTRY_FO,
            self::COUNTRY_FK,
            self::COUNTRY_FJ,
            self::COUNTRY_PH,
            self::COUNTRY_FI,
            self::COUNTRY_TF,
            self::COUNTRY_GF,
            self::COUNTRY_PF,
            self::COUNTRY_GA,
            self::COUNTRY_GM,
            self::COUNTRY_GE,
            self::COUNTRY_GH,
            self::COUNTRY_GI,
            self::COUNTRY_GD,
            self::COUNTRY_GR,
            self::COUNTRY_GL,
            self::COUNTRY_GP,
            self::COUNTRY_GU,
            self::COUNTRY_GT,
            self::COUNTRY_GG,
            self::COUNTRY_GN,
            self::COUNTRY_GW,
            self::COUNTRY_GY,
            self::COUNTRY_HT,
            self::COUNTRY_HM,
            self::COUNTRY_HN,
            self::COUNTRY_HU,
            self::COUNTRY_HK,
            self::COUNTRY_IE,
            self::COUNTRY_IS,
            self::COUNTRY_IN,
            self::COUNTRY_ID,
            self::COUNTRY_IQ,
            self::COUNTRY_IR,
            self::COUNTRY_IL,
            self::COUNTRY_IT,
            self::COUNTRY_CI,
            self::COUNTRY_JM,
            self::COUNTRY_JP,
            self::COUNTRY_YE,
            self::COUNTRY_JE,
            self::COUNTRY_JO,
            self::COUNTRY_KY,
            self::COUNTRY_CV,
            self::COUNTRY_CM,
            self::COUNTRY_KZ,
            self::COUNTRY_KE,
            self::COUNTRY_KG,
            self::COUNTRY_KI,
            self::COUNTRY_UM,
            self::COUNTRY_KW,
            self::COUNTRY_HR,
            self::COUNTRY_LA,
            self::COUNTRY_LS,
            self::COUNTRY_LV,
            self::COUNTRY_LB,
            self::COUNTRY_LR,
            self::COUNTRY_LY,
            self::COUNTRY_LI,
            self::COUNTRY_LT,
            self::COUNTRY_LU,
            self::COUNTRY_MO,
            self::COUNTRY_MG,
            self::COUNTRY_MW,
            self::COUNTRY_MV,
            self::COUNTRY_MY,
            self::COUNTRY_ML,
            self::COUNTRY_MT,
            self::COUNTRY_IM,
            self::COUNTRY_MA,
            self::COUNTRY_MH,
            self::COUNTRY_MQ,
            self::COUNTRY_MR,
            self::COUNTRY_MU,
            self::COUNTRY_YT,
            self::COUNTRY_MX,
            self::COUNTRY_FM,
            self::COUNTRY_MD,
            self::COUNTRY_MC,
            self::COUNTRY_MN,
            self::COUNTRY_ME,
            self::COUNTRY_MS,
            self::COUNTRY_MZ,
            self::COUNTRY_MM,
            self::COUNTRY_NA,
            self::COUNTRY_NR,
            self::COUNTRY_NP,
            self::COUNTRY_NI,
            self::COUNTRY_NC,
            self::COUNTRY_NZ,
            self::COUNTRY_NE,
            self::COUNTRY_NG,
            self::COUNTRY_NU,
            self::COUNTRY_MP,
            self::COUNTRY_KP,
            self::COUNTRY_MK,
            self::COUNTRY_NO,
            self::COUNTRY_NF,
            self::COUNTRY_UG,
            self::COUNTRY_UA,
            self::COUNTRY_UZ,
            self::COUNTRY_OM,
            self::COUNTRY_AT,
            self::COUNTRY_TL,
            self::COUNTRY_PK,
            self::COUNTRY_PW,
            self::COUNTRY_PS,
            self::COUNTRY_PA,
            self::COUNTRY_PG,
            self::COUNTRY_PY,
            self::COUNTRY_PE,
            self::COUNTRY_PN,
            self::COUNTRY_PL,
            self::COUNTRY_PT,
            self::COUNTRY_PR,
            self::COUNTRY_QA,
            self::COUNTRY_RE,
            self::COUNTRY_RO,
            self::COUNTRY_RU,
            self::COUNTRY_RW,
            self::COUNTRY_BL,
            self::COUNTRY_KN,
            self::COUNTRY_LC,
            self::COUNTRY_PM,
            self::COUNTRY_VC,
            self::COUNTRY_SB,
            self::COUNTRY_WS,
            self::COUNTRY_SM,
            self::COUNTRY_SA,
            self::COUNTRY_ST,
            self::COUNTRY_SN,
            self::COUNTRY_RS,
            self::COUNTRY_SC,
            self::COUNTRY_SL,
            self::COUNTRY_SG,
            self::COUNTRY_SH,
            self::COUNTRY_MF,
            self::COUNTRY_SX,
            self::COUNTRY_SI,
            self::COUNTRY_SK,
            self::COUNTRY_SD,
            self::COUNTRY_SO,
            self::COUNTRY_ES,
            self::COUNTRY_SJ,
            self::COUNTRY_LK,
            self::COUNTRY_SR,
            self::COUNTRY_SZ,
            self::COUNTRY_SY,
            self::COUNTRY_TJ,
            self::COUNTRY_TW,
            self::COUNTRY_TZ,
            self::COUNTRY_TH,
            self::COUNTRY_TG,
            self::COUNTRY_TK,
            self::COUNTRY_TO,
            self::COUNTRY_TT,
            self::COUNTRY_TD,
            self::COUNTRY_CZ,
            self::COUNTRY_TN,
            self::COUNTRY_TM,
            self::COUNTRY_TC,
            self::COUNTRY_TV,
            self::COUNTRY_UY,
            self::COUNTRY_VU,
            self::COUNTRY_VA,
            self::COUNTRY_VE,
            self::COUNTRY_AE,
            self::COUNTRY_US,
            self::COUNTRY_VN,
            self::COUNTRY_WF,
            self::COUNTRY_EH,
            self::COUNTRY_BY,
            self::COUNTRY_ZM,
            self::COUNTRY_ZW,
            self::COUNTRY_ZA,
            self::COUNTRY_GS,
            self::COUNTRY_KR,
            self::COUNTRY_SS,
            self::COUNTRY_SE,
            self::COUNTRY_CH,
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
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['addition'] = isset($data['addition']) ? $data['addition'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCountryAllowableValues();
        if (!is_null($this->container['country']) && !in_array($this->container['country'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'country', must be one of '%s'",
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
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets addition
     *
     * @return string
     */
    public function getAddition()
    {
        return $this->container['addition'];
    }

    /**
     * Sets addition
     *
     * @param string $addition addition
     *
     * @return $this
     */
    public function setAddition($addition)
    {
        $this->container['addition'] = $addition;

        return $this;
    }

    /**
     * Gets zip_code
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     *
     * @param string $zip_code zip_code
     *
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $allowedValues = $this->getCountryAllowableValues();
        if (!is_null($country) && !in_array($country, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'country', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['country'] = $country;

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



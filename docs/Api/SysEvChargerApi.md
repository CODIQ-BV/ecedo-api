# Swagger\Client\SysEvChargerApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysEvChargerAddChargeCards**](SysEvChargerApi.md#sysEvChargerAddChargeCards) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evchargecards | Toevoegen passen aan bestaande laadpaal
[**sysEvChargerAddConnector**](SysEvChargerApi.md#sysEvChargerAddConnector) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evses/{ocpiId}/connector | Toevoegen connector aan Evse
[**sysEvChargerAddContract**](SysEvChargerApi.md#sysEvChargerAddContract) | **POST** /sysapi/v1.0/organizations/{organizationId}/evses/{evseId}/laadpaalcontract | Toevoegen laadpaalcontract aan Evse
[**sysEvChargerAddServiceContract**](SysEvChargerApi.md#sysEvChargerAddServiceContract) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/servicecontracts | Toevoegen van een servicecontract aan een laadpaal
[**sysEvChargerDeleteChargeCards**](SysEvChargerApi.md#sysEvChargerDeleteChargeCards) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evchargecards/{cardNumber} | Verwijderen passen van bestaande laadpaal
[**sysEvChargerEvChargerProperties**](SysEvChargerApi.md#sysEvChargerEvChargerProperties) | **POST** /sysapi/v1.0/organizations/{organizationId}/evcharger/{evChargerId}/evchargerproperties | Wijzigen laadpaal property
[**sysEvChargerGetByOrganization**](SysEvChargerApi.md#sysEvChargerGetByOrganization) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers | Laadpalen per organisatie
[**sysEvChargerGetChargeSessions**](SysEvChargerApi.md#sysEvChargerGetChargeSessions) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evses/{ocpiId}/chargesessions | Get charge sessions for a given EVSE in a given period
[**sysEvChargerGetChargeSessionsForEvCharger**](SysEvChargerApi.md#sysEvChargerGetChargeSessionsForEvCharger) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/chargesessions | Get chargesessions for a given EvCharger in a period
[**sysEvChargerGetEvChargerContracts**](SysEvChargerApi.md#sysEvChargerGetEvChargerContracts) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evchargercontracts | Verkrijgen van alle contracten behorend bij een laadpaal
[**sysEvChargerGetEvChargerServiceContracts**](SysEvChargerApi.md#sysEvChargerGetEvChargerServiceContracts) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/servicecontracts | 
[**sysEvChargerGetSpecific**](SysEvChargerApi.md#sysEvChargerGetSpecific) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId} | Eén specifieke laadpaal
[**sysEvChargerPost**](SysEvChargerApi.md#sysEvChargerPost) | **POST** /sysapi/v1.0/organizations/{organizationId}/evcharger | Toevoegen laapaal
[**sysEvChargerPut**](SysEvChargerApi.md#sysEvChargerPut) | **PUT** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId} | Wijzigen laapaal
[**sysEvChargerUpdateEvseProperty**](SysEvChargerApi.md#sysEvChargerUpdateEvseProperty) | **PUT** /sysapi/v1.0/organizations/{organizationId}/evchargers/{evChargerId}/evses/{evseId}/property | Update EVSE property GuestUsageAllowed


# **sysEvChargerAddChargeCards**
> string[] sysEvChargerAddChargeCards($organization_id, $ev_charger_id, $post_data)

Toevoegen passen aan bestaande laadpaal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardsPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardsPostData | 

try {
    $result = $apiInstance->sysEvChargerAddChargeCards($organization_id, $ev_charger_id, $post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerAddChargeCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardsPostData**](../Model/EcedoERPCRMInterfaceApiEvChargeCardsPostData.md)|  |

### Return type

**string[]**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerAddConnector**
> string sysEvChargerAddConnector($organization_id, $ev_charger_id, $ocpi_id, $post_data)

Toevoegen connector aan Evse

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 
$ocpi_id = "ocpi_id_example"; // string | 
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectorPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectorPostData | 

try {
    $result = $apiInstance->sysEvChargerAddConnector($organization_id, $ev_charger_id, $ocpi_id, $post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerAddConnector: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |
 **ocpi_id** | **string**|  |
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectorPostData**](../Model/EcedoERPCRMInterfaceApiConnectorPostData.md)|  |

### Return type

**string**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerAddContract**
> string sysEvChargerAddContract($organization_id, $evse_id, $post_data)

Toevoegen laadpaalcontract aan Evse

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$evse_id = "evse_id_example"; // string | 
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiContractPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiContractPostData | 

try {
    $result = $apiInstance->sysEvChargerAddContract($organization_id, $evse_id, $post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerAddContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **evse_id** | **string**|  |
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiContractPostData**](../Model/EcedoERPCRMInterfaceApiContractPostData.md)|  |

### Return type

**string**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerAddServiceContract**
> string sysEvChargerAddServiceContract($organization_id, $ev_charger_id, $post_data)

Toevoegen van een servicecontract aan een laadpaal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerServiceContractPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerServiceContractPostData | 

try {
    $result = $apiInstance->sysEvChargerAddServiceContract($organization_id, $ev_charger_id, $post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerAddServiceContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerServiceContractPostData**](../Model/EcedoERPCRMInterfaceApiEvChargerServiceContractPostData.md)|  |

### Return type

**string**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerDeleteChargeCards**
> object sysEvChargerDeleteChargeCards($organization_id, $ev_charger_id, $card_number)

Verwijderen passen van bestaande laadpaal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 
$card_number = "card_number_example"; // string | 

try {
    $result = $apiInstance->sysEvChargerDeleteChargeCards($organization_id, $ev_charger_id, $card_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerDeleteChargeCards: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |
 **card_number** | **string**|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerEvChargerProperties**
> object sysEvChargerEvChargerProperties($organization_id, $ev_charger_id, $ev_charger_property)

Wijzigen laadpaal property

Voor een SmartChargingParticipant wordt een waarde Yes or No verwacht

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 
$ev_charger_property = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPropertyPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPropertyPostData | 

try {
    $result = $apiInstance->sysEvChargerEvChargerProperties($organization_id, $ev_charger_id, $ev_charger_property);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerEvChargerProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |
 **ev_charger_property** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPropertyPostData**](../Model/EcedoERPCRMInterfaceApiEvChargerPropertyPostData.md)|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerGetByOrganization**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiFullEvChargerResult[] sysEvChargerGetByOrganization($organization_id)

Laadpalen per organisatie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 

try {
    $result = $apiInstance->sysEvChargerGetByOrganization($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerGetByOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiFullEvChargerResult[]**](../Model/EcedoERPCRMInterfaceApiFullEvChargerResult.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerGetChargeSessions**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSessionResult[] sysEvChargerGetChargeSessions($organization_id, $ev_charger_id, $ocpi_id, $start_date, $end_date)

Get charge sessions for a given EVSE in a given period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 
$ocpi_id = "ocpi_id_example"; // string | 
$start_date = new \DateTime("2013-10-20"); // \DateTime | 
$end_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $result = $apiInstance->sysEvChargerGetChargeSessions($organization_id, $ev_charger_id, $ocpi_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerGetChargeSessions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |
 **ocpi_id** | **string**|  |
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSessionResult[]**](../Model/EcedoERPCRMInterfaceApiChargeSessionResult.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerGetChargeSessionsForEvCharger**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSessionResult[] sysEvChargerGetChargeSessionsForEvCharger($organization_id, $ev_charger_id, $start_date, $end_date)

Get chargesessions for a given EvCharger in a period

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 
$start_date = new \DateTime("2013-10-20"); // \DateTime | 
$end_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $result = $apiInstance->sysEvChargerGetChargeSessionsForEvCharger($organization_id, $ev_charger_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerGetChargeSessionsForEvCharger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSessionResult[]**](../Model/EcedoERPCRMInterfaceApiChargeSessionResult.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerGetEvChargerContracts**
> sysEvChargerGetEvChargerContracts($organization_id, $ev_charger_id)

Verkrijgen van alle contracten behorend bij een laadpaal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Unieke Guid van organisatie
$ev_charger_id = "ev_charger_id_example"; // string | Unieke Guid van de laadpaal

try {
    $apiInstance->sysEvChargerGetEvChargerContracts($organization_id, $ev_charger_id);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerGetEvChargerContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Unieke Guid van organisatie |
 **ev_charger_id** | **string**| Unieke Guid van de laadpaal |

### Return type

void (empty response body)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerGetEvChargerServiceContracts**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerServiceContractData[] sysEvChargerGetEvChargerServiceContracts($organization_id, $ev_charger_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 

try {
    $result = $apiInstance->sysEvChargerGetEvChargerServiceContracts($organization_id, $ev_charger_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerGetEvChargerServiceContracts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerServiceContractData[]**](../Model/EcedoERPCRMInterfaceApiEvChargerServiceContractData.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerGetSpecific**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiFullEvChargerResult sysEvChargerGetSpecific($organization_id, $ev_charger_id)

Eén specifieke laadpaal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 

try {
    $result = $apiInstance->sysEvChargerGetSpecific($organization_id, $ev_charger_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerGetSpecific: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiFullEvChargerResult**](../Model/EcedoERPCRMInterfaceApiFullEvChargerResult.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerPost**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerResult sysEvChargerPost($organization_id, $post_data)

Toevoegen laapaal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPostData | 

try {
    $result = $apiInstance->sysEvChargerPost($organization_id, $post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPostData**](../Model/EcedoERPCRMInterfaceApiEvChargerPostData.md)|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerResult**](../Model/EcedoERPCRMInterfaceApiEvChargerResult.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerPut**
> object sysEvChargerPut($organization_id, $ev_charger_id, $put_data)

Wijzigen laapaal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 
$put_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPutData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPutData | 

try {
    $result = $apiInstance->sysEvChargerPut($organization_id, $ev_charger_id, $put_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |
 **put_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerPutData**](../Model/EcedoERPCRMInterfaceApiEvChargerPutData.md)|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargerUpdateEvseProperty**
> object sysEvChargerUpdateEvseProperty($organization_id, $ev_charger_id, $evse_id, $put_data)

Update EVSE property GuestUsageAllowed

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysEvChargerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$ev_charger_id = "ev_charger_id_example"; // string | 
$evse_id = "evse_id_example"; // string | 
$put_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvsePropertyPutData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvsePropertyPutData | 

try {
    $result = $apiInstance->sysEvChargerUpdateEvseProperty($organization_id, $ev_charger_id, $evse_id, $put_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargerApi->sysEvChargerUpdateEvseProperty: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charger_id** | **string**|  |
 **evse_id** | **string**|  |
 **put_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvsePropertyPutData**](../Model/EcedoERPCRMInterfaceApiEvsePropertyPutData.md)|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


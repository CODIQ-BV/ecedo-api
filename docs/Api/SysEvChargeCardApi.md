# Swagger\Client\SysEvChargeCardApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysEvChargeCardActivate**](SysEvChargeCardApi.md#sysEvChargeCardActivate) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargecards/activate | Activeren van een laadpas
[**sysEvChargeCardAddRenewedEvChargeCardContract**](SysEvChargeCardApi.md#sysEvChargeCardAddRenewedEvChargeCardContract) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/evchargecardcontracts | Toevoegen van een laadpascontract na een initieel contract
[**sysEvChargeCardBlock**](SysEvChargeCardApi.md#sysEvChargeCardBlock) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId} | Blokkeren van een laadpas geactiveerd voor een organisatie
[**sysEvChargeCardGet**](SysEvChargeCardApi.md#sysEvChargeCardGet) | **GET** /sysapi/v1.0/evchargecards/{evChargeCardId} | Zoeken Laadpas op Pasnummer of UniekId
[**sysEvChargeCardGetByOrganization**](SysEvChargeCardApi.md#sysEvChargeCardGetByOrganization) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargecards | Zoeken Laadpassen voor organisatie
[**sysEvChargeCardGetChargeContractsByOrganization**](SysEvChargeCardApi.md#sysEvChargeCardGetChargeContractsByOrganization) | **GET** /sysapi/v1.0/organizations/{organizationId}/chargecardcontracts | Verkrijg Laadpas contracten per organisatie
[**sysEvChargeCardGetEvChargeCardSessionsByChargeCard**](SysEvChargeCardApi.md#sysEvChargeCardGetEvChargeCardSessionsByChargeCard) | **GET** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/evchargesessions | Verkrijg laadsessies voor een laadpas van een organisatie
[**sysEvChargeCardRegister**](SysEvChargeCardApi.md#sysEvChargeCardRegister) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargecards/register | Registreren van een organisatie voor een laadpas


# **sysEvChargeCardActivate**
> string sysEvChargeCardActivate($organization_id, $ev_charge_card_activate_post_data)

Activeren van een laadpas

Activeren van een laadpas

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$ev_charge_card_activate_post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardActivatePostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardActivatePostData | 

try {
    $result = $apiInstance->sysEvChargeCardActivate($organization_id, $ev_charge_card_activate_post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardApi->sysEvChargeCardActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charge_card_activate_post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardActivatePostData**](../Model/EcedoERPCRMInterfaceApiEvChargeCardActivatePostData.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargeCardAddRenewedEvChargeCardContract**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiContractPostResult sysEvChargeCardAddRenewedEvChargeCardContract($organization_id, $ev_charge_card_id, $data)

Toevoegen van een laadpascontract na een initieel contract

Voegt een volgende contract toe wanneer bijv. 1e contract een aanbieding is  De laadpas moet dus al geactiveerd zijn een initieel actief contract moet bestaan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$ev_charge_card_id = "ev_charge_card_id_example"; // string | 
$data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiAddRenewedEvChargeCardContractPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiAddRenewedEvChargeCardContractPostData | 

try {
    $result = $apiInstance->sysEvChargeCardAddRenewedEvChargeCardContract($organization_id, $ev_charge_card_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardApi->sysEvChargeCardAddRenewedEvChargeCardContract: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charge_card_id** | **string**|  |
 **data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiAddRenewedEvChargeCardContractPostData**](../Model/EcedoERPCRMInterfaceApiAddRenewedEvChargeCardContractPostData.md)|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiContractPostResult**](../Model/EcedoERPCRMInterfaceApiContractPostResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargeCardBlock**
> object sysEvChargeCardBlock($organization_id, $ev_charge_card_id)

Blokkeren van een laadpas geactiveerd voor een organisatie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$ev_charge_card_id = "ev_charge_card_id_example"; // string | 

try {
    $result = $apiInstance->sysEvChargeCardBlock($organization_id, $ev_charge_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardApi->sysEvChargeCardBlock: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charge_card_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargeCardGet**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCard sysEvChargeCardGet($ev_charge_card_id)

Zoeken Laadpas op Pasnummer of UniekId

Zoekt laadpas op basis van Guid of Pasnummer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ev_charge_card_id = "ev_charge_card_id_example"; // string | 

try {
    $result = $apiInstance->sysEvChargeCardGet($ev_charge_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardApi->sysEvChargeCardGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ev_charge_card_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCard**](../Model/EcedoERPCRMInterfaceApiEvChargeCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargeCardGetByOrganization**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCard[] sysEvChargeCardGetByOrganization($organization_id)

Zoeken Laadpassen voor organisatie

Zoekt laadpassen op basis van organisatie Guid.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 

try {
    $result = $apiInstance->sysEvChargeCardGetByOrganization($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardApi->sysEvChargeCardGetByOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCard[]**](../Model/EcedoERPCRMInterfaceApiEvChargeCard.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargeCardGetChargeContractsByOrganization**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardContract[] sysEvChargeCardGetChargeContractsByOrganization($organization_id)

Verkrijg Laadpas contracten per organisatie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 

try {
    $result = $apiInstance->sysEvChargeCardGetChargeContractsByOrganization($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardApi->sysEvChargeCardGetChargeContractsByOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardContract[]**](../Model/EcedoERPCRMInterfaceApiEvChargeCardContract.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargeCardGetEvChargeCardSessionsByChargeCard**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardSession[] sysEvChargeCardGetEvChargeCardSessionsByChargeCard($organization_id, $ev_charge_card_id, $start_date, $end_date)

Verkrijg laadsessies voor een laadpas van een organisatie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$ev_charge_card_id = "ev_charge_card_id_example"; // string | 
$start_date = new \DateTime("2013-10-20"); // \DateTime | 
$end_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $result = $apiInstance->sysEvChargeCardGetEvChargeCardSessionsByChargeCard($organization_id, $ev_charge_card_id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardApi->sysEvChargeCardGetEvChargeCardSessionsByChargeCard: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charge_card_id** | **string**|  |
 **start_date** | **\DateTime**|  | [optional]
 **end_date** | **\DateTime**|  | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardSession[]**](../Model/EcedoERPCRMInterfaceApiEvChargeCardSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargeCardRegister**
> object sysEvChargeCardRegister($organization_id, $ev_charge_card_register_post_data)

Registreren van een organisatie voor een laadpas

Voegt het product Laadpas toe bij de organisatie en maakt een laadpas contract aan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$ev_charge_card_register_post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardRegisterPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardRegisterPostData | 

try {
    $result = $apiInstance->sysEvChargeCardRegister($organization_id, $ev_charge_card_register_post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardApi->sysEvChargeCardRegister: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charge_card_register_post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardRegisterPostData**](../Model/EcedoERPCRMInterfaceApiEvChargeCardRegisterPostData.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


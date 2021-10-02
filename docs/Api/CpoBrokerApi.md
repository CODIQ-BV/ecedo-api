# Swagger\Client\CpoBrokerApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cpoBrokerAddEvChargerCdr**](CpoBrokerApi.md#cpoBrokerAddEvChargerCdr) | **POST** /cpobroker/v1.0/evchargercdrs | Registers a charge session (CDR) with a charger
[**cpoBrokerEvCharger**](CpoBrokerApi.md#cpoBrokerEvCharger) | **POST** /cpobroker/v1.0/evcharger | Updates the status of a single charger, specified by Evse OcpiId
[**cpoBrokerGetSessionPrice**](CpoBrokerApi.md#cpoBrokerGetSessionPrice) | **GET** /cpobroker/v1.0/evses/{ocpiId}/sessionprice | Get the price for a charge session for a given EVSE, card and duration
[**cpoBrokerValidateEvCharger**](CpoBrokerApi.md#cpoBrokerValidateEvCharger) | **POST** /cpobroker/v1.0/evcharger/{chargerId} | Validate single charger and it&#39;s EVSE&#39;s


# **cpoBrokerAddEvChargerCdr**
> object cpoBrokerAddEvChargerCdr($post_data)

Registers a charge session (CDR) with a charger

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CpoBrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerCdrPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerCdrPostData | 

try {
    $result = $apiInstance->cpoBrokerAddEvChargerCdr($post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpoBrokerApi->cpoBrokerAddEvChargerCdr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerCdrPostData**](../Model/EcedoERPCRMInterfaceApiEvChargerCdrPostData.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cpoBrokerEvCharger**
> string cpoBrokerEvCharger($post_data)

Updates the status of a single charger, specified by Evse OcpiId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CpoBrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerStatusPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerStatusPostData | 

try {
    $result = $apiInstance->cpoBrokerEvCharger($post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpoBrokerApi->cpoBrokerEvCharger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerStatusPostData**](../Model/EcedoERPCRMInterfaceApiEvChargerStatusPostData.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cpoBrokerGetSessionPrice**
> double cpoBrokerGetSessionPrice($ocpi_id, $token, $usage, $duration)

Get the price for a charge session for a given EVSE, card and duration

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CpoBrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ocpi_id = "ocpi_id_example"; // string | 
$token = "token_example"; // string | 
$usage = 1.2; // double | 
$duration = 56; // int | 

try {
    $result = $apiInstance->cpoBrokerGetSessionPrice($ocpi_id, $token, $usage, $duration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpoBrokerApi->cpoBrokerGetSessionPrice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ocpi_id** | **string**|  |
 **token** | **string**|  |
 **usage** | **double**|  |
 **duration** | **int**|  |

### Return type

**double**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cpoBrokerValidateEvCharger**
> string cpoBrokerValidateEvCharger($charger_id, $post_data)

Validate single charger and it's EVSE's

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\CpoBrokerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$charger_id = "charger_id_example"; // string | 
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerStatusPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerStatusPostData | 

try {
    $result = $apiInstance->cpoBrokerValidateEvCharger($charger_id, $post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CpoBrokerApi->cpoBrokerValidateEvCharger: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charger_id** | **string**|  |
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargerStatusPostData**](../Model/EcedoERPCRMInterfaceApiEvChargerStatusPostData.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


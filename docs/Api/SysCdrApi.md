# Swagger\Client\SysCdrApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysCdrGetByChargeSessionId**](SysCdrApi.md#sysCdrGetByChargeSessionId) | **GET** /sysapi/v1.0/chargesessions/{chargeSessionId} | 
[**sysCdrGetByExternalChargeSessionId**](SysCdrApi.md#sysCdrGetByExternalChargeSessionId) | **GET** /sysapi/v1.0/chargesessions/byexternalid/{externalChargeSessionId} | 
[**sysCdrPost**](SysCdrApi.md#sysCdrPost) | **POST** /sysapi/v1.0/cdrs | Aanmaken CDR records
[**sysCdrPostPassiveSmartCdr**](SysCdrApi.md#sysCdrPostPassiveSmartCdr) | **POST** /sysapi/v1.0/imbalancepfdrs | Aanmaken passieve onbalans laadsessies (passive Imbalance Flex Detail Records)
[**sysCdrPostSmartCdr**](SysCdrApi.md#sysCdrPostSmartCdr) | **POST** /sysapi/v1.0/imbalancefdrs | Aanmaken sessie&#39;s voor Onbalans Flex producten


# **sysCdrGetByChargeSessionId**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSessionResultModel sysCdrGetByChargeSessionId($charge_session_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysCdrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$charge_session_id = "charge_session_id_example"; // string | 

try {
    $result = $apiInstance->sysCdrGetByChargeSessionId($charge_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysCdrApi->sysCdrGetByChargeSessionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSessionResultModel**](../Model/EcedoERPCRMInterfaceApiChargeSessionResultModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysCdrGetByExternalChargeSessionId**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSessionResultModel[] sysCdrGetByExternalChargeSessionId($external_charge_session_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysCdrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$external_charge_session_id = "external_charge_session_id_example"; // string | 

try {
    $result = $apiInstance->sysCdrGetByExternalChargeSessionId($external_charge_session_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysCdrApi->sysCdrGetByExternalChargeSessionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **external_charge_session_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSessionResultModel[]**](../Model/EcedoERPCRMInterfaceApiChargeSessionResultModel.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysCdrPost**
> object sysCdrPost($ev_charge_card_cdr_post_data)

Aanmaken CDR records

Aanmaken CDR records via OCPI Broker

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysCdrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ev_charge_card_cdr_post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCdrPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCdrPostData | 

try {
    $result = $apiInstance->sysCdrPost($ev_charge_card_cdr_post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysCdrApi->sysCdrPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ev_charge_card_cdr_post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCdrPostData**](../Model/EcedoERPCRMInterfaceApiEvChargeCardCdrPostData.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysCdrPostPassiveSmartCdr**
> object sysCdrPostPassiveSmartCdr($passive_i_fdr_post_data)

Aanmaken passieve onbalans laadsessies (passive Imbalance Flex Detail Records)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysCdrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$passive_i_fdr_post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiPassiveImbalanceFdrPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiPassiveImbalanceFdrPostData | 

try {
    $result = $apiInstance->sysCdrPostPassiveSmartCdr($passive_i_fdr_post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysCdrApi->sysCdrPostPassiveSmartCdr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **passive_i_fdr_post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiPassiveImbalanceFdrPostData**](../Model/EcedoERPCRMInterfaceApiPassiveImbalanceFdrPostData.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysCdrPostSmartCdr**
> object sysCdrPostSmartCdr($imbalance_fdr_post_data)

Aanmaken sessie's voor Onbalans Flex producten

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysCdrApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$imbalance_fdr_post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiImbalanceFdrPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiImbalanceFdrPostData | 

try {
    $result = $apiInstance->sysCdrPostSmartCdr($imbalance_fdr_post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysCdrApi->sysCdrPostSmartCdr: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **imbalance_fdr_post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiImbalanceFdrPostData**](../Model/EcedoERPCRMInterfaceApiImbalanceFdrPostData.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


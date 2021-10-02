# Swagger\Client\SysEvChargeCardCreditsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysEvChargeCardCreditsDeleteEvChargeCardCredit**](SysEvChargeCardCreditsApi.md#sysEvChargeCardCreditsDeleteEvChargeCardCredit) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/evchargecardcredits/{evChargeCardCreditId} | 
[**sysEvChargeCardCreditsPost**](SysEvChargeCardCreditsApi.md#sysEvChargeCardCreditsPost) | **POST** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/chargecardcredit | 
[**sysEvChargeCardCreditsUpdateEvChargeCardCredit**](SysEvChargeCardCreditsApi.md#sysEvChargeCardCreditsUpdateEvChargeCardCredit) | **PUT** /sysapi/v1.0/organizations/{organizationId}/evchargecards/{evChargeCardId}/evchargecardcredits/{evChargeCardCreditId} | 


# **sysEvChargeCardCreditsDeleteEvChargeCardCredit**
> object sysEvChargeCardCreditsDeleteEvChargeCardCredit($ev_charge_card_credit_id, $organization_id, $ev_charge_card_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ev_charge_card_credit_id = "ev_charge_card_credit_id_example"; // string | 
$organization_id = "organization_id_example"; // string | 
$ev_charge_card_id = "ev_charge_card_id_example"; // string | 

try {
    $result = $apiInstance->sysEvChargeCardCreditsDeleteEvChargeCardCredit($ev_charge_card_credit_id, $organization_id, $ev_charge_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardCreditsApi->sysEvChargeCardCreditsDeleteEvChargeCardCredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ev_charge_card_credit_id** | **string**|  |
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

# **sysEvChargeCardCreditsPost**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCreditResult sysEvChargeCardCreditsPost($organization_id, $ev_charge_card_id, $post_data)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$ev_charge_card_id = "ev_charge_card_id_example"; // string | 
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCreditPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCreditPostData | 

try {
    $result = $apiInstance->sysEvChargeCardCreditsPost($organization_id, $ev_charge_card_id, $post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardCreditsApi->sysEvChargeCardCreditsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **ev_charge_card_id** | **string**|  |
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCreditPostData**](../Model/EcedoERPCRMInterfaceApiEvChargeCardCreditPostData.md)|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCreditResult**](../Model/EcedoERPCRMInterfaceApiEvChargeCardCreditResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysEvChargeCardCreditsUpdateEvChargeCardCredit**
> object sysEvChargeCardCreditsUpdateEvChargeCardCredit($ev_charge_card_credit_id, $put_data, $organization_id, $ev_charge_card_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysEvChargeCardCreditsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ev_charge_card_credit_id = "ev_charge_card_credit_id_example"; // string | 
$put_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCreditPutData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCreditPutData | 
$organization_id = "organization_id_example"; // string | 
$ev_charge_card_id = "ev_charge_card_id_example"; // string | 

try {
    $result = $apiInstance->sysEvChargeCardCreditsUpdateEvChargeCardCredit($ev_charge_card_credit_id, $put_data, $organization_id, $ev_charge_card_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysEvChargeCardCreditsApi->sysEvChargeCardCreditsUpdateEvChargeCardCredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ev_charge_card_credit_id** | **string**|  |
 **put_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardCreditPutData**](../Model/EcedoERPCRMInterfaceApiEvChargeCardCreditPutData.md)|  |
 **organization_id** | **string**|  |
 **ev_charge_card_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


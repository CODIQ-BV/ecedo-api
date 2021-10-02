# Swagger\Client\SysChargeSessionApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysChargeSessionGetChargeSessionsByInvoice**](SysChargeSessionApi.md#sysChargeSessionGetChargeSessionsByInvoice) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/chargesessions | Verkrijg laadsessies voor een invoice
[**sysChargeSessionPost**](SysChargeSessionApi.md#sysChargeSessionPost) | **POST** /sysapi/v1.0/chargesession | 


# **sysChargeSessionGetChargeSessionsByInvoice**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardSession[] sysChargeSessionGetChargeSessionsByInvoice($organization_id, $invoice_id)

Verkrijg laadsessies voor een invoice

Lijst van Laadsessies. De status wordt niet gevuld

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysChargeSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$invoice_id = "invoice_id_example"; // string | 

try {
    $result = $apiInstance->sysChargeSessionGetChargeSessionsByInvoice($organization_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysChargeSessionApi->sysChargeSessionGetChargeSessionsByInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **invoice_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEvChargeCardSession[]**](../Model/EcedoERPCRMInterfaceApiEvChargeCardSession.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysChargeSessionPost**
> object sysChargeSessionPost($charge_session)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysChargeSessionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$charge_session = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSession(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSession | 

try {
    $result = $apiInstance->sysChargeSessionPost($charge_session);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysChargeSessionApi->sysChargeSessionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **charge_session** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiChargeSession**](../Model/EcedoERPCRMInterfaceApiChargeSession.md)|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


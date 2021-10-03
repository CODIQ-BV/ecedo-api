# Swagger\Client\SysTriggerProcessLogsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysTriggerProcessLogsGet**](SysTriggerProcessLogsApi.md#sysTriggerProcessLogsGet) | **GET** /sysapi/v1.0/triggerprocesslogs | 


# **sysTriggerProcessLogsGet**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiTriggerProcessLog[] sysTriggerProcessLogsGet($trigger_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysTriggerProcessLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$trigger_type = "trigger_type_example"; // string | 

try {
    $result = $apiInstance->sysTriggerProcessLogsGet($trigger_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysTriggerProcessLogsApi->sysTriggerProcessLogsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **trigger_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiTriggerProcessLog[]**](../Model/EcedoERPCRMInterfaceApiTriggerProcessLog.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


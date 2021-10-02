# Swagger\Client\SysClientMandateApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysClientMandatePost**](SysClientMandateApi.md#sysClientMandatePost) | **POST** /sysapi/v1.0/clientmandate | ClientMandate opslaan


# **sysClientMandatePost**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiClientMandateResult sysClientMandatePost($post_data)

ClientMandate opslaan

Het aanmaken van een clientMandate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysClientMandateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiClientMandate(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiClientMandate | 

try {
    $result = $apiInstance->sysClientMandatePost($post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysClientMandateApi->sysClientMandatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiClientMandate**](../Model/EcedoERPCRMInterfaceApiClientMandate.md)|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiClientMandateResult**](../Model/EcedoERPCRMInterfaceApiClientMandateResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


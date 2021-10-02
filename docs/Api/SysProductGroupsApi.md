# Swagger\Client\SysProductGroupsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysProductGroupsGet**](SysProductGroupsApi.md#sysProductGroupsGet) | **GET** /sysapi/v1.0/organizations/{organizationId}/productGroups | 


# **sysProductGroupsGet**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiProductGroup[] sysProductGroupsGet($organization_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysProductGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 

try {
    $result = $apiInstance->sysProductGroupsGet($organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysProductGroupsApi->sysProductGroupsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiProductGroup[]**](../Model/EcedoERPCRMInterfaceApiProductGroup.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


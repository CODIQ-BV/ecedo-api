# Swagger\Client\SysMarketPricesApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysMarketPricesGet**](SysMarketPricesApi.md#sysMarketPricesGet) | **GET** /sysapi/v1.0/marketprices/{startDate}/{endDate}/{marketPriceType} | Haal marktprijzen op voor periode en marktprijstype


# **sysMarketPricesGet**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPrice[] sysMarketPricesGet($start_date, $end_date, $market_price_type)

Haal marktprijzen op voor periode en marktprijstype

Haal marktprijzen op voor periode en marktprijstype.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysMarketPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$start_date = new \DateTime("2013-10-20"); // \DateTime | 
$end_date = new \DateTime("2013-10-20"); // \DateTime | 
$market_price_type = "market_price_type_example"; // string | 

try {
    $result = $apiInstance->sysMarketPricesGet($start_date, $end_date, $market_price_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysMarketPricesApi->sysMarketPricesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **start_date** | **\DateTime**|  |
 **end_date** | **\DateTime**|  |
 **market_price_type** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiMarketPrice[]**](../Model/EcedoERPCRMInterfaceApiMarketPrice.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


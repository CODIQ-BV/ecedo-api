# Swagger\Client\SysTelemetryApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysTelemetryGetMeansOfProductionTelemetryById**](SysTelemetryApi.md#sysTelemetryGetMeansOfProductionTelemetryById) | **GET** /sysapi/v1.0/telemetryreadings/meansofproductionconnection/{id} | Opvragen telemetrie van productiemiddel door middel van het ID van de aansluiting
[**sysTelemetryGetTelemetry**](SysTelemetryApi.md#sysTelemetryGetTelemetry) | **GET** /sysapi/v1.0/telemetryreadings/{ean} | Opvragen telemetrie aan de hand van een EAN


# **sysTelemetryGetMeansOfProductionTelemetryById**
> \Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[] sysTelemetryGetMeansOfProductionTelemetryById($id, $start_date, $end_date)

Opvragen telemetrie van productiemiddel door middel van het ID van de aansluiting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysTelemetryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Connection GUID of EAN
$start_date = new \DateTime("2013-10-20"); // \DateTime | Vanaf datum (dag)
$end_date = new \DateTime("2013-10-20"); // \DateTime | Tot datum (dag)

try {
    $result = $apiInstance->sysTelemetryGetMeansOfProductionTelemetryById($id, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysTelemetryApi->sysTelemetryGetMeansOfProductionTelemetryById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Connection GUID of EAN |
 **start_date** | **\DateTime**| Vanaf datum (dag) |
 **end_date** | **\DateTime**| Tot datum (dag) |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]**](../Model/EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysTelemetryGetTelemetry**
> \Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[] sysTelemetryGetTelemetry($ean, $start_date, $end_date)

Opvragen telemetrie aan de hand van een EAN

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysTelemetryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$ean = "ean_example"; // string | EAN als referentie van de telemetrie
$start_date = new \DateTime("2013-10-20"); // \DateTime | Vanaf datum (dag)
$end_date = new \DateTime("2013-10-20"); // \DateTime | Tot datum (dag)

try {
    $result = $apiInstance->sysTelemetryGetTelemetry($ean, $start_date, $end_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysTelemetryApi->sysTelemetryGetTelemetry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ean** | **string**| EAN als referentie van de telemetrie |
 **start_date** | **\DateTime**| Vanaf datum (dag) |
 **end_date** | **\DateTime**| Tot datum (dag) |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto[]**](../Model/EcedoERPCRMInterfaceReadModelTelemetryTelemetryApiDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


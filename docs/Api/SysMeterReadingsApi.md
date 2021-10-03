# Swagger\Client\SysMeterReadingsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysMeterReadingsCalculateAnnualStandardUsage**](SysMeterReadingsApi.md#sysMeterReadingsCalculateAnnualStandardUsage) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/calculateannualstandardusage | Bereken het standaard jaarverbruik (SJV) / Annual Standard Usage
[**sysMeterReadingsCalculatedMeterReading**](SysMeterReadingsApi.md#sysMeterReadingsCalculatedMeterReading) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/calculatedmeterreading | Meterstand berekenen voor een bepaalde datum
[**sysMeterReadingsDeleteUsableMeterReading**](SysMeterReadingsApi.md#sysMeterReadingsDeleteUsableMeterReading) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meterreadings/{meterReadingId} | Verwijderen van een meteropname/meterstand behorende bij een aansluiting
[**sysMeterReadingsGetMeterReadingById**](SysMeterReadingsApi.md#sysMeterReadingsGetMeterReadingById) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meterreadings/{meterReadingId} | Meteropname opvragen aan de hand van een meter reading Id.
[**sysMeterReadingsGetUsableMeterReadings**](SysMeterReadingsApi.md#sysMeterReadingsGetUsableMeterReadings) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meterreadings | Meerdere (bruikbare) meteropnames/meterstanden opvragen gerelateerd aan een aansluiting.  De niet bruikbare meteropnames zijn in de GUI zichtbaar als &#39;Niet gebruikt&#39;.
[**sysMeterReadingsPostNewMeterReading**](SysMeterReadingsApi.md#sysMeterReadingsPostNewMeterReading) | **POST** /sysapi/v1.0/meterreadings | Meteropname insturen.


# **sysMeterReadingsCalculateAnnualStandardUsage**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiAnnualStandardUsage sysMeterReadingsCalculateAnnualStandardUsage($organization_id, $connection_id, $data)

Bereken het standaard jaarverbruik (SJV) / Annual Standard Usage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysMeterReadingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de organisatie
$connection_id = "connection_id_example"; // string | Guid van de aansluiting
$data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiCalculateAnnualStandardUsagePostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiCalculateAnnualStandardUsagePostData | 

try {
    $result = $apiInstance->sysMeterReadingsCalculateAnnualStandardUsage($organization_id, $connection_id, $data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysMeterReadingsApi->sysMeterReadingsCalculateAnnualStandardUsage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de organisatie |
 **connection_id** | **string**| Guid van de aansluiting |
 **data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiCalculateAnnualStandardUsagePostData**](../Model/EcedoERPCRMInterfaceApiCalculateAnnualStandardUsagePostData.md)|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiAnnualStandardUsage**](../Model/EcedoERPCRMInterfaceApiAnnualStandardUsage.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysMeterReadingsCalculatedMeterReading**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiCalculatedMeterReading sysMeterReadingsCalculatedMeterReading($organization_id, $connection_id, $reading_date)

Meterstand berekenen voor een bepaalde datum

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysMeterReadingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de organisatie
$connection_id = "connection_id_example"; // string | Guid van de aansluiting
$reading_date = new \DateTime("2013-10-20"); // \DateTime | Datum waarvoor de meterstand moet worden berekend

try {
    $result = $apiInstance->sysMeterReadingsCalculatedMeterReading($organization_id, $connection_id, $reading_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysMeterReadingsApi->sysMeterReadingsCalculatedMeterReading: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de organisatie |
 **connection_id** | **string**| Guid van de aansluiting |
 **reading_date** | **\DateTime**| Datum waarvoor de meterstand moet worden berekend |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiCalculatedMeterReading**](../Model/EcedoERPCRMInterfaceApiCalculatedMeterReading.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysMeterReadingsDeleteUsableMeterReading**
> object sysMeterReadingsDeleteUsableMeterReading($organization_id, $connection_id, $meter_reading_id)

Verwijderen van een meteropname/meterstand behorende bij een aansluiting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysMeterReadingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de organisatie
$connection_id = "connection_id_example"; // string | Guid van de aansluiting
$meter_reading_id = "meter_reading_id_example"; // string | Guid van de meterstand

try {
    $result = $apiInstance->sysMeterReadingsDeleteUsableMeterReading($organization_id, $connection_id, $meter_reading_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysMeterReadingsApi->sysMeterReadingsDeleteUsableMeterReading: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de organisatie |
 **connection_id** | **string**| Guid van de aansluiting |
 **meter_reading_id** | **string**| Guid van de meterstand |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysMeterReadingsGetMeterReadingById**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReading sysMeterReadingsGetMeterReadingById($organization_id, $connection_id, $meter_reading_id)

Meteropname opvragen aan de hand van een meter reading Id.

Meteropname opvragen.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysMeterReadingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de organisatie
$connection_id = "connection_id_example"; // string | Guid van de aansluiting
$meter_reading_id = "meter_reading_id_example"; // string | Guid van de meterstand

try {
    $result = $apiInstance->sysMeterReadingsGetMeterReadingById($organization_id, $connection_id, $meter_reading_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysMeterReadingsApi->sysMeterReadingsGetMeterReadingById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de organisatie |
 **connection_id** | **string**| Guid van de aansluiting |
 **meter_reading_id** | **string**| Guid van de meterstand |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReading**](../Model/EcedoERPCRMInterfaceApiMeterReading.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysMeterReadingsGetUsableMeterReadings**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReading[] sysMeterReadingsGetUsableMeterReadings($organization_id, $connection_id, $only_usable)

Meerdere (bruikbare) meteropnames/meterstanden opvragen gerelateerd aan een aansluiting.  De niet bruikbare meteropnames zijn in de GUI zichtbaar als 'Niet gebruikt'.

Meerdere meteropnames opvragen.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysMeterReadingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de organisatie
$connection_id = "connection_id_example"; // string | Guid van de aansluiting
$only_usable = true; // bool | Met of zonder meteropnames 'Niet gebruikt'. Default true (= 'Zonder')

try {
    $result = $apiInstance->sysMeterReadingsGetUsableMeterReadings($organization_id, $connection_id, $only_usable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysMeterReadingsApi->sysMeterReadingsGetUsableMeterReadings: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de organisatie |
 **connection_id** | **string**| Guid van de aansluiting |
 **only_usable** | **bool**| Met of zonder meteropnames &#39;Niet gebruikt&#39;. Default true (&#x3D; &#39;Zonder&#39;) | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReading[]**](../Model/EcedoERPCRMInterfaceApiMeterReading.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysMeterReadingsPostNewMeterReading**
> object sysMeterReadingsPostNewMeterReading($meter_reading)

Meteropname insturen.

Meteropname insturen.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysMeterReadingsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$meter_reading = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReadingPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReadingPostData | 

try {
    $result = $apiInstance->sysMeterReadingsPostNewMeterReading($meter_reading);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysMeterReadingsApi->sysMeterReadingsPostNewMeterReading: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **meter_reading** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReadingPostData**](../Model/EcedoERPCRMInterfaceApiMeterReadingPostData.md)|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


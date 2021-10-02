# Swagger\Client\SysOrganizationEventApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysOrganizationEventGetFirstPossibleEventDate**](SysOrganizationEventApi.md#sysOrganizationEventGetFirstPossibleEventDate) | **GET** /sysapi/v1.0/events/minimumeventdate | Bepaal eerstmogelijke eventdatum op basis van een gewenste eventdatum
[**sysOrganizationEventGetMeterReadingCollectionEvents**](SysOrganizationEventApi.md#sysOrganizationEventGetMeterReadingCollectionEvents) | **GET** /sysapi/v1.0/organizations/{organizationId}/meterreadingcollectionevents | Opvragen van Meteropname opvraag events voor een klant


# **sysOrganizationEventGetFirstPossibleEventDate**
> \DateTime sysOrganizationEventGetFirstPossibleEventDate($desired_event_date, $event_type, $usage_type)

Bepaal eerstmogelijke eventdatum op basis van een gewenste eventdatum

De volgende eventTypes kunnen worden gebruikt: ChangeOfSupplier, MoveIn, MoveOut, PVSwitch, EndOfSupply

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysOrganizationEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$desired_event_date = new \DateTime("2013-10-20"); // \DateTime | Gewenste eventdatum
$event_type = "event_type_example"; // string | Type event
$usage_type = "usage_type_example"; // string | Verbruikstype van de aansluiting

try {
    $result = $apiInstance->sysOrganizationEventGetFirstPossibleEventDate($desired_event_date, $event_type, $usage_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysOrganizationEventApi->sysOrganizationEventGetFirstPossibleEventDate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **desired_event_date** | **\DateTime**| Gewenste eventdatum |
 **event_type** | **string**| Type event |
 **usage_type** | **string**| Verbruikstype van de aansluiting |

### Return type

[**\DateTime**](../Model/\DateTime.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysOrganizationEventGetMeterReadingCollectionEvents**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReadingCollectionEvent[] sysOrganizationEventGetMeterReadingCollectionEvents($organization_id, $cluster_reference, $only_active)

Opvragen van Meteropname opvraag events voor een klant

Via 'onlyActive = false' kunnen ook afgeronde meteropname opvraag events worden opgehaald

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysOrganizationEventApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | Guid van de klant
$cluster_reference = "cluster_reference_example"; // string | Optioneel filter om alleen de events van dit cluster op te vragen
$only_active = true; // bool | Boolean (default true) waarmee aangegeven kan worden dat alleen actieve verzoeken teruggegeven moeten worden

try {
    $result = $apiInstance->sysOrganizationEventGetMeterReadingCollectionEvents($organization_id, $cluster_reference, $only_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysOrganizationEventApi->sysOrganizationEventGetMeterReadingCollectionEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant |
 **cluster_reference** | **string**| Optioneel filter om alleen de events van dit cluster op te vragen | [optional]
 **only_active** | **bool**| Boolean (default true) waarmee aangegeven kan worden dat alleen actieve verzoeken teruggegeven moeten worden | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiMeterReadingCollectionEvent[]**](../Model/EcedoERPCRMInterfaceApiMeterReadingCollectionEvent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


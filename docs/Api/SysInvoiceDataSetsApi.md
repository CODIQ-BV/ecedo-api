# Swagger\Client\SysInvoiceDataSetsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysInvoiceDataSetsGetByInvoiceId**](SysInvoiceDataSetsApi.md#sysInvoiceDataSetsGetByInvoiceId) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoicedatasets/{invoiceId} | Haal een invoice op bij een organization
[**sysInvoiceDataSetsGetByInvoiceType**](SysInvoiceDataSetsApi.md#sysInvoiceDataSetsGetByInvoiceType) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoicetypes/{invoiceType}/invoicedatasets | Verkrijg een geaggregeerde dataset van facturen over een bepaalde periode


# **sysInvoiceDataSetsGetByInvoiceId**
> \Swagger\Client\Model\EcedoERPCRMInterfaceReportModelOrganizationDto sysInvoiceDataSetsGetByInvoiceId($organization_id, $invoice_id)

Haal een invoice op bij een organization

Afhankelijk van het invoice type krijg je verschillende resultaten terug. De baseclass is hetzelfde.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysInvoiceDataSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$invoice_id = "invoice_id_example"; // string | 

try {
    $result = $apiInstance->sysInvoiceDataSetsGetByInvoiceId($organization_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoiceDataSetsApi->sysInvoiceDataSetsGetByInvoiceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **invoice_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceReportModelOrganizationDto**](../Model/EcedoERPCRMInterfaceReportModelOrganizationDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysInvoiceDataSetsGetByInvoiceType**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoicesDataSetSummaryDto sysInvoiceDataSetsGetByInvoiceType($organization_id, $invoice_type, $start_date, $end_date, $invoice_sub_type)

Verkrijg een geaggregeerde dataset van facturen over een bepaalde periode

Deze versie ondersteund enkel Purchase facturen van het subtype EnergyPurchase en ProducerSettlement.  All invoices with the requested type and subtype (mandatory when invoiceType = Purchase) with the status Billed or Credited where the invoicePeriod is within the requested Start end EndDate will be selected.  This means for instance when the Requested StartDate = 03-03-2018 and the requested EndDate = 05-05-2018, an invoice with invoice period 01-03-2018 – 01-04-2018 will not be selected but an invoice with period 01-04-2018 – 01-05-2018 will be selected.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysInvoiceDataSetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$invoice_type = "invoice_type_example"; // string | 
$start_date = new \DateTime("2013-10-20"); // \DateTime | startdatum van de selectie periode
$end_date = new \DateTime("2013-10-20"); // \DateTime | einddatum van de selectie periode
$invoice_sub_type = "invoice_sub_type_example"; // string | Verplicht bij purchase facturen

try {
    $result = $apiInstance->sysInvoiceDataSetsGetByInvoiceType($organization_id, $invoice_type, $start_date, $end_date, $invoice_sub_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoiceDataSetsApi->sysInvoiceDataSetsGetByInvoiceType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **invoice_type** | **string**|  |
 **start_date** | **\DateTime**| startdatum van de selectie periode |
 **end_date** | **\DateTime**| einddatum van de selectie periode |
 **invoice_sub_type** | **string**| Verplicht bij purchase facturen |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoicesDataSetSummaryDto**](../Model/EcedoERPCRMInterfaceApiInvoicesDataSetSummaryDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# Swagger\Client\SysInvoicesApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysInvoicesByNumber**](SysInvoicesApi.md#sysInvoicesByNumber) | **GET** /sysapi/v1.0/invoices/bynumber/{invoiceNumber} | Haal een specifieke factuur op (op basis van factuurnummer)
[**sysInvoicesCredit**](SysInvoicesApi.md#sysInvoicesCredit) | **POST** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/credit | Voorschot- of borgfactuur crediteren
[**sysInvoicesDownloadRemitReport**](SysInvoicesApi.md#sysInvoicesDownloadRemitReport) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/downloadremitreport | Download Remit Report voor een factuur
[**sysInvoicesDownloadSingleInvoice**](SysInvoicesApi.md#sysInvoicesDownloadSingleInvoice) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/download | Download factuurdocument van een specifieke factuur
[**sysInvoicesGet**](SysInvoicesApi.md#sysInvoicesGet) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices | Haal facturen van een specifieke klant op (op basis van InvoiceId)
[**sysInvoicesGetInvoice**](SysInvoicesApi.md#sysInvoicesGetInvoice) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId} | Haal een specifieke factuur op
[**sysInvoicesGetInvoicesWithPrettySmaUsages**](SysInvoicesApi.md#sysInvoicesGetInvoicesWithPrettySmaUsages) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/prettyinvoiceusages | Haal verbruiksregels van een factuur op
[**sysInvoicesGetInvoicesWithSmaUsages**](SysInvoicesApi.md#sysInvoicesGetInvoicesWithSmaUsages) | **GET** /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/invoiceusages | Haal verbruiksregels van een factuur op


# **sysInvoicesByNumber**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoice sysInvoicesByNumber($invoice_number, $include_documents, $include_child_invoice_ids, $include_corrected_invoice_ids)

Haal een specifieke factuur op (op basis van factuurnummer)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_number = "invoice_number_example"; // string | Het factuurnummer
$include_documents = true; // bool | Optinoele parameter (default false) waardoor het response-object voorzien kan worden van `InvoiceDocuments`
$include_child_invoice_ids = true; // bool | Optionele parameter (default false) waardoor het response-object van verzamelfacturen voorzien kan worden van `ChildInvoiceIds`
$include_corrected_invoice_ids = true; // bool | Optionele parameter (default false) waardoor het response-object voorzien kan worden van `CorrectedInvoiceIds`

try {
    $result = $apiInstance->sysInvoicesByNumber($invoice_number, $include_documents, $include_child_invoice_ids, $include_corrected_invoice_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoicesApi->sysInvoicesByNumber: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_number** | **string**| Het factuurnummer |
 **include_documents** | **bool**| Optinoele parameter (default false) waardoor het response-object voorzien kan worden van &#x60;InvoiceDocuments&#x60; | [optional]
 **include_child_invoice_ids** | **bool**| Optionele parameter (default false) waardoor het response-object van verzamelfacturen voorzien kan worden van &#x60;ChildInvoiceIds&#x60; | [optional]
 **include_corrected_invoice_ids** | **bool**| Optionele parameter (default false) waardoor het response-object voorzien kan worden van &#x60;CorrectedInvoiceIds&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoice**](../Model/EcedoERPCRMInterfaceApiInvoice.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysInvoicesCredit**
> object sysInvoicesCredit($invoice_id, $organization_id, $invoice_post_data)

Voorschot- of borgfactuur crediteren

Crediteer voorschot- of borgfactuur. De velden 'DoComplete', 'CreateNewAdvancePayment' en 'NewAdvancePayment' zijn alleen van toepassing bij het crediteren van een voorschotfactuur

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = "invoice_id_example"; // string | Guid van de factuur (Invoice)
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$invoice_post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiCreditInvoicePostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiCreditInvoicePostData | De request-body, zie het object-model voor meer informatie

try {
    $result = $apiInstance->sysInvoicesCredit($invoice_id, $organization_id, $invoice_post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoicesApi->sysInvoicesCredit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**| Guid van de factuur (Invoice) |
 **organization_id** | **string**| Guid van de klant (Organization) |
 **invoice_post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiCreditInvoicePostData**](../Model/EcedoERPCRMInterfaceApiCreditInvoicePostData.md)| De request-body, zie het object-model voor meer informatie |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysInvoicesDownloadRemitReport**
> object sysInvoicesDownloadRemitReport($organization_id, $invoice_id)

Download Remit Report voor een factuur

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$invoice_id = "invoice_id_example"; // string | Guid van de factuur (Invoice)

try {
    $result = $apiInstance->sysInvoicesDownloadRemitReport($organization_id, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoicesApi->sysInvoicesDownloadRemitReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **invoice_id** | **string**| Guid van de factuur (Invoice) |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysInvoicesDownloadSingleInvoice**
> object sysInvoicesDownloadSingleInvoice($invoice_id, $organization_id, $document_type)

Download factuurdocument van een specifieke factuur

Met behulp van deze API kunnen factuurdocumenten van een factuur gedownload worden.<br />  Reguliere facturen hebben één document, waardoor het niet verplicht is om de query parameter `documentType` in te vullen. Als een factuur één document heeft zal dat document teruggegeven worden.<br />  Sommige facturen (op moment van schrijven alleen verzamelfacturen) bevatten echter meerdere documenten. In dat geval zal de API een foutmelding teruggeven omdat niet bekend is welke van deze documenten teruggegeven moet worden.<br />

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = "invoice_id_example"; // string | Guid van de factuur (Invoice)
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$document_type = "document_type_example"; // string | Optioneel documenttype (default leeg) waarmee geforceerd kan worden welk document wordt teruggegeven

try {
    $result = $apiInstance->sysInvoicesDownloadSingleInvoice($invoice_id, $organization_id, $document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoicesApi->sysInvoicesDownloadSingleInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**| Guid van de factuur (Invoice) |
 **organization_id** | **string**| Guid van de klant (Organization) |
 **document_type** | **string**| Optioneel documenttype (default leeg) waarmee geforceerd kan worden welk document wordt teruggegeven | [optional]

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysInvoicesGet**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoice[] sysInvoicesGet($organization_id, $only_complete, $include_documents)

Haal facturen van een specifieke klant op (op basis van InvoiceId)

Opvragen facturen van een klant. De velden \"IsOLEV\", \"SettlementInvoiceFrequency\" en \"SettlementInvoiceFrequencyLocalized\" worden alleen gevuld voor afrekenfacturen energielevering.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$only_complete = true; // bool | Optionele parameter (default true) waarmee woorkomen kan worden dat facturen die nog in een workflow zitten worden geretourneerd
$include_documents = true; // bool | Optinoele parameter (default false) waardoor het response-object voorzien kan worden `InvoiceDocuments`

try {
    $result = $apiInstance->sysInvoicesGet($organization_id, $only_complete, $include_documents);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoicesApi->sysInvoicesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **only_complete** | **bool**| Optionele parameter (default true) waarmee woorkomen kan worden dat facturen die nog in een workflow zitten worden geretourneerd | [optional]
 **include_documents** | **bool**| Optinoele parameter (default false) waardoor het response-object voorzien kan worden &#x60;InvoiceDocuments&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoice[]**](../Model/EcedoERPCRMInterfaceApiInvoice.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysInvoicesGetInvoice**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoice sysInvoicesGetInvoice($invoice_id, $organization_id, $include_documents, $include_child_invoice_ids, $include_corrected_invoice_ids)

Haal een specifieke factuur op

Opvragen factuurdetails. De velden \"IsOLEV\", \"SettlementInvoiceFrequency\" en \"SettlementInvoiceFrequencyLocalized\" worden alleen gevuld voor afrekenfacturen energielevering.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = "invoice_id_example"; // string | Guid van de factuur (Invoice)
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$include_documents = true; // bool | Optinoele parameter (default false) waardoor het response-object voorzien kan worden van `InvoiceDocuments`
$include_child_invoice_ids = true; // bool | Optionele parameter (default false) waardoor het response-object van verzamelfacturen voorzien kan worden van `ChildInvoiceIds`
$include_corrected_invoice_ids = true; // bool | Optionele parameter (default false) waardoor het response-object voorzien kan worden van `CorrectedInvoiceIds`

try {
    $result = $apiInstance->sysInvoicesGetInvoice($invoice_id, $organization_id, $include_documents, $include_child_invoice_ids, $include_corrected_invoice_ids);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoicesApi->sysInvoicesGetInvoice: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**| Guid van de factuur (Invoice) |
 **organization_id** | **string**| Guid van de klant (Organization) |
 **include_documents** | **bool**| Optinoele parameter (default false) waardoor het response-object voorzien kan worden van &#x60;InvoiceDocuments&#x60; | [optional]
 **include_child_invoice_ids** | **bool**| Optionele parameter (default false) waardoor het response-object van verzamelfacturen voorzien kan worden van &#x60;ChildInvoiceIds&#x60; | [optional]
 **include_corrected_invoice_ids** | **bool**| Optionele parameter (default false) waardoor het response-object voorzien kan worden van &#x60;CorrectedInvoiceIds&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoice**](../Model/EcedoERPCRMInterfaceApiInvoice.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysInvoicesGetInvoicesWithPrettySmaUsages**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiSmaInvoiceDetails sysInvoicesGetInvoicesWithPrettySmaUsages($invoice_id, $organization_id)

Haal verbruiksregels van een factuur op

Deze API wordt niet langer actief ondersteund. De API is vervangen door `GET /sysapi/v1.0/organizations/{organizationId}/invoices/{invoiceId}/invoiceusages`  Opvragen verbruiksregels van een SMA maand factuur. De factuur periode mag niet langer dan een maand zijn

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = "invoice_id_example"; // string | Guid van de factuur (Invoice)
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)

try {
    $result = $apiInstance->sysInvoicesGetInvoicesWithPrettySmaUsages($invoice_id, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoicesApi->sysInvoicesGetInvoicesWithPrettySmaUsages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**| Guid van de factuur (Invoice) |
 **organization_id** | **string**| Guid van de klant (Organization) |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiSmaInvoiceDetails**](../Model/EcedoERPCRMInterfaceApiSmaInvoiceDetails.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysInvoicesGetInvoicesWithSmaUsages**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoiceUsageCalculationRow[] sysInvoicesGetInvoicesWithSmaUsages($invoice_id, $organization_id)

Haal verbruiksregels van een factuur op

Opvragen verbruiksregels

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysInvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_id = "invoice_id_example"; // string | Guid van de factuur (Invoice)
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)

try {
    $result = $apiInstance->sysInvoicesGetInvoicesWithSmaUsages($invoice_id, $organization_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysInvoicesApi->sysInvoicesGetInvoicesWithSmaUsages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoice_id** | **string**| Guid van de factuur (Invoice) |
 **organization_id** | **string**| Guid van de klant (Organization) |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiInvoiceUsageCalculationRow[]**](../Model/EcedoERPCRMInterfaceApiInvoiceUsageCalculationRow.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


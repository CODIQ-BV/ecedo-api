# Swagger\Client\SysDraftAdvancePaymentsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysDraftAdvancePaymentsCalculateDraftAdvancePaymentForNonOrganization**](SysDraftAdvancePaymentsApi.md#sysDraftAdvancePaymentsCalculateDraftAdvancePaymentForNonOrganization) | **POST** /sysapi/v1.0/draftadvancepayments | Aanmaken proefvoorschot
[**sysDraftAdvancePaymentsCalulateDraftAdvancePayment**](SysDraftAdvancePaymentsApi.md#sysDraftAdvancePaymentsCalulateDraftAdvancePayment) | **POST** /sysapi/v1.0/organizations/{organizationId}/draftadvancepayments | Aanmaken proefvoorschot


# **sysDraftAdvancePaymentsCalculateDraftAdvancePaymentForNonOrganization**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePayment sysDraftAdvancePaymentsCalculateDraftAdvancePaymentForNonOrganization($post_data)

Aanmaken proefvoorschot

Agreementdate kan op het hoogste niveau meegegeven worden of per aansluiting. Niet op beide plekken tegelijk.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysDraftAdvancePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostData | 

try {
    $result = $apiInstance->sysDraftAdvancePaymentsCalculateDraftAdvancePaymentForNonOrganization($post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDraftAdvancePaymentsApi->sysDraftAdvancePaymentsCalculateDraftAdvancePaymentForNonOrganization: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostData**](../Model/EcedoERPCRMInterfaceApiNonOrganizationDraftAdvancePaymentPostData.md)|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePayment**](../Model/EcedoERPCRMInterfaceApiDraftAdvancePayment.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysDraftAdvancePaymentsCalulateDraftAdvancePayment**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePayment sysDraftAdvancePaymentsCalulateDraftAdvancePayment($organization_id, $post_data)

Aanmaken proefvoorschot

Alle aansluitingen die actief zijn op de ReferenceDate (peildatum) worden meegenomen<br />  Alleen ContractPropertyType 'Reseller' kan ingestuurd worden.  Agreementdate kan op het hoogste niveau meegegeven worden of per aansluiting. Niet op beide plekken tegelijk.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysDraftAdvancePaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePaymentPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePaymentPostData | 

try {
    $result = $apiInstance->sysDraftAdvancePaymentsCalulateDraftAdvancePayment($organization_id, $post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDraftAdvancePaymentsApi->sysDraftAdvancePaymentsCalulateDraftAdvancePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePaymentPostData**](../Model/EcedoERPCRMInterfaceApiDraftAdvancePaymentPostData.md)|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiDraftAdvancePayment**](../Model/EcedoERPCRMInterfaceApiDraftAdvancePayment.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


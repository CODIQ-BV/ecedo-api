# Swagger\Client\SysDebtorApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysDebtorDeleteDebtorProperties**](SysDebtorApi.md#sysDebtorDeleteDebtorProperties) | **DELETE** /sysapi/v1.0/organizations/{organizationId}/debtors/{debtorId}/debtorproperties/{debtorProperty} | Verwijder een debiteur-eigenschap
[**sysDebtorGetDebtorProperties**](SysDebtorApi.md#sysDebtorGetDebtorProperties) | **GET** /sysapi/v1.0/organizations/{organizationId}/debtors/{debtorId}/debtorproperties/{debtorProperty} | Ophalen van debiteur-eigenschappen
[**sysDebtorPostDebtorProperties**](SysDebtorApi.md#sysDebtorPostDebtorProperties) | **POST** /sysapi/v1.0/organizations/{organizationId}/debtors/{debtorId}/debtorproperties | Instellen van een debiteur-eigenschap


# **sysDebtorDeleteDebtorProperties**
> object sysDebtorDeleteDebtorProperties($organization_id, $debtor_id, $debtor_property)

Verwijder een debiteur-eigenschap

De volgende propertyTypes worden ondersteund:  * AdvancePaymentSchedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$debtor_id = "debtor_id_example"; // string | Guid van de debiteur (Debtor)
$debtor_property = "debtor_property_example"; // string | Guid van de debiteur-eigenschap (DebtorProperty)

try {
    $result = $apiInstance->sysDebtorDeleteDebtorProperties($organization_id, $debtor_id, $debtor_property);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDebtorApi->sysDebtorDeleteDebtorProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **debtor_id** | **string**| Guid van de debiteur (Debtor) |
 **debtor_property** | **string**| Guid van de debiteur-eigenschap (DebtorProperty) |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysDebtorGetDebtorProperties**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiDebtorProperty[] sysDebtorGetDebtorProperties($organization_id, $debtor_id, $debtor_property)

Ophalen van debiteur-eigenschappen

De volgende propertyTypes worden ondersteund:  * AdvancePaymentSchedule

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$debtor_id = "debtor_id_example"; // string | Guid van de debiteur (Debtor)
$debtor_property = "debtor_property_example"; // string | Het type van de debiteur-eigenschap

try {
    $result = $apiInstance->sysDebtorGetDebtorProperties($organization_id, $debtor_id, $debtor_property);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDebtorApi->sysDebtorGetDebtorProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **debtor_id** | **string**| Guid van de debiteur (Debtor) |
 **debtor_property** | **string**| Het type van de debiteur-eigenschap |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiDebtorProperty[]**](../Model/EcedoERPCRMInterfaceApiDebtorProperty.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysDebtorPostDebtorProperties**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiDebtorPropertyPostResult sysDebtorPostDebtorProperties($organization_id, $debtor_id, $debtor_property)

Instellen van een debiteur-eigenschap

De StartDate van de property moet op of na de laatste property liggen.  De volgende propertyTypes worden ondersteund:  AdvancePaymentSchedule: InMonth en BeforeMonth of Memorial, Fixed en Flexible

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDebtorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$debtor_id = "debtor_id_example"; // string | 
$debtor_property = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiDebtorPropertyPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiDebtorPropertyPostData | 

try {
    $result = $apiInstance->sysDebtorPostDebtorProperties($organization_id, $debtor_id, $debtor_property);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDebtorApi->sysDebtorPostDebtorProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **debtor_id** | **string**|  |
 **debtor_property** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiDebtorPropertyPostData**](../Model/EcedoERPCRMInterfaceApiDebtorPropertyPostData.md)|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiDebtorPropertyPostResult**](../Model/EcedoERPCRMInterfaceApiDebtorPropertyPostResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


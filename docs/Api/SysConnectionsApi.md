# Swagger\Client\SysConnectionsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysConnectionsChangeAllocationMethod**](SysConnectionsApi.md#sysConnectionsChangeAllocationMethod) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/changeallocationmethod | Wijzig allocatiemethode
[**sysConnectionsConnectionProperties**](SysConnectionsApi.md#sysConnectionsConnectionProperties) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/connectionproperties | Wijzig aansluitinggegevens
[**sysConnectionsGetByConnectionId**](SysConnectionsApi.md#sysConnectionsGetByConnectionId) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId} | Haal specifieke aansluiting op
[**sysConnectionsGetByOrganizationId**](SysConnectionsApi.md#sysConnectionsGetByOrganizationId) | **GET** /sysapi/v1.0/organizations/{organizationId}/connections | Haal aansluitingen van een specifieke klant op
[**sysConnectionsPost**](SysConnectionsApi.md#sysConnectionsPost) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections | Nieuwe aansluiting(en) aanmaken
[**sysConnectionsPut**](SysConnectionsApi.md#sysConnectionsPut) | **PUT** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId} | Wijzig een specifiek aansluiting
[**sysConnectionsUpdateMeteringPoint**](SysConnectionsApi.md#sysConnectionsUpdateMeteringPoint) | **POST** /sysapi/v1.0/organizations/{organizationId}/connections/{connectionId}/meteringpoint | Aansluiting bijwerken met EDSN gegevens


# **sysConnectionsChangeAllocationMethod**
> sysConnectionsChangeAllocationMethod($organization_id, $connection_id, $change_allocation_method_post_data)

Wijzig allocatiemethode

Deze API wijzigt de allocatiemethode van een aansluiting, door de bijbehorende flow te starten. Deze flow verstuurt de wijziging naar EDSN en past het aansluitinggegeven aan.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$connection_id = "connection_id_example"; // string | Guid van de aansluiting (Connection)
$change_allocation_method_post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiChangeAllocationMethodPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiChangeAllocationMethodPostData | De data van de allocatiemethodewijziging, zie het object-model voor meer informatie

try {
    $apiInstance->sysConnectionsChangeAllocationMethod($organization_id, $connection_id, $change_allocation_method_post_data);
} catch (Exception $e) {
    echo 'Exception when calling SysConnectionsApi->sysConnectionsChangeAllocationMethod: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **connection_id** | **string**| Guid van de aansluiting (Connection) |
 **change_allocation_method_post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiChangeAllocationMethodPostData**](../Model/EcedoERPCRMInterfaceApiChangeAllocationMethodPostData.md)| De data van de allocatiemethodewijziging, zie het object-model voor meer informatie |

### Return type

void (empty response body)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysConnectionsConnectionProperties**
> sysConnectionsConnectionProperties($organization_id, $connection_id, $connection_property)

Wijzig aansluitinggegevens

De volgende aansluitinggegevens (`ConnectionProperties`) kunnen gewijzigd worden via de API en de volgende waarden hebben:  * LocationType: BlockHeating, ChargingStationRegular, ChargingStationFast, Horticulture;  * BillAsSingle: boolean (true, false);  * RequestP4IntervalReadings: boolean (true, false);  * RequestP4DayReadings: boolean (true, false);  * RequestP4ReadingsForBillingAllowed: boolean (true, false);  * AllocationMethod: enumeratie (SMA, PRF, TMT; er wordt geen flow gestart);  * MepType: GeenComplexGeenVerblijf, GeenComplexWelVerblijf, WelComplexGeenVerblijf, WelComplexWelVerblijf, Nvt  * PhysicalStatus: UnderConstruction, InOperation, Demolished, OutOfOperation  * HasZipAreaEnergyTaxCredit: boolean (true, false)  * TreatAsConsumer: boolean (true, false);

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$connection_id = "connection_id_example"; // string | Guid van de aansluiting (Connection)
$connection_property = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionPropertyPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionPropertyPostData | De data van de aansluitinggegevens, zie het object-model voor meer informatie

try {
    $apiInstance->sysConnectionsConnectionProperties($organization_id, $connection_id, $connection_property);
} catch (Exception $e) {
    echo 'Exception when calling SysConnectionsApi->sysConnectionsConnectionProperties: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **connection_id** | **string**| Guid van de aansluiting (Connection) |
 **connection_property** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionPropertyPostData**](../Model/EcedoERPCRMInterfaceApiConnectionPropertyPostData.md)| De data van de aansluitinggegevens, zie het object-model voor meer informatie |

### Return type

void (empty response body)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysConnectionsGetByConnectionId**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnection sysConnectionsGetByConnectionId($organization_id, $connection_id, $include_contract_prices)

Haal specifieke aansluiting op

<p>Opvragen specifieke aansluiting van een klant. Eventueel is aan te geven of contractprijzen ook geretourneerd moeten worden.</p>  <p>Enkel het laatste actieve contract voor een aansluiting wordt geretourneerd. Afgeronde contracten worden niet geretourneerd</p>  <p> Het <code>Ecedo.ERP.CRM.Interface.Api.ConnectionProperty</code>-object bevat in het geval van een gas aansluiting bij de property met type <code>ConnectionPropertyType</code>=<b>'GridArea'</b> een extra veld (<code>GosRegion</code>) voor de non-localized-versie van de regio-waarde.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$connection_id = "connection_id_example"; // string | Guid van de aansluiting (Connection)
$include_contract_prices = true; // bool | Optionele parameter waarmee de contracten voorzien kunnen worden van prijzen. _Let op!_ Het toevoegen van prijzen heeft een negatieve impact op de performance van deze API

try {
    $result = $apiInstance->sysConnectionsGetByConnectionId($organization_id, $connection_id, $include_contract_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysConnectionsApi->sysConnectionsGetByConnectionId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **connection_id** | **string**| Guid van de aansluiting (Connection) |
 **include_contract_prices** | **bool**| Optionele parameter waarmee de contracten voorzien kunnen worden van prijzen. _Let op!_ Het toevoegen van prijzen heeft een negatieve impact op de performance van deze API | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnection**](../Model/EcedoERPCRMInterfaceApiConnection.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysConnectionsGetByOrganizationId**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnection[] sysConnectionsGetByOrganizationId($organization_id, $cluster_reference, $include_contract_prices)

Haal aansluitingen van een specifieke klant op

<p>Opvragen alle aansluitingen van een klant. Eventueel is aan te geven of contractprijzen ook geretourneerd moeten worden.</p>  <p> Het <code>Ecedo.ERP.CRM.Interface.Api.ConnectionProperty</code>-object bevat in het geval van een gas aansluiting bij de property met type <code>ConnectionPropertyType</code>=<b>'GridArea'</b> een extra veld (<code>GosRegion</code>) voor de non-localized-versie van de regio-waarde.</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$cluster_reference = "cluster_reference_example"; // string | Optionele parameter waarmee alleen aansluitingen met deze clusterreferentie opgevraagd kunnen worden
$include_contract_prices = true; // bool | Optionele parameter waarmee de contracten voorzien kunnen worden van prijzen. _Let op!_ Het toevoegen van prijzen heeft een negatieve impact op de performance van deze API

try {
    $result = $apiInstance->sysConnectionsGetByOrganizationId($organization_id, $cluster_reference, $include_contract_prices);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysConnectionsApi->sysConnectionsGetByOrganizationId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **cluster_reference** | **string**| Optionele parameter waarmee alleen aansluitingen met deze clusterreferentie opgevraagd kunnen worden | [optional]
 **include_contract_prices** | **bool**| Optionele parameter waarmee de contracten voorzien kunnen worden van prijzen. _Let op!_ Het toevoegen van prijzen heeft een negatieve impact op de performance van deze API | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnection[]**](../Model/EcedoERPCRMInterfaceApiConnection.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysConnectionsPost**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContractGroupPostResult[] sysConnectionsPost($organization_id, $connection_group)

Nieuwe aansluiting(en) aanmaken

De contract-objecten zijn optioneel. Als contract is meegestuurd zal er ook een aanmeldingsflow worden gestart.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$connection_group = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostData | De data van de aansluiting(en), zie het object-model voor meer informatie

try {
    $result = $apiInstance->sysConnectionsPost($organization_id, $connection_group);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysConnectionsApi->sysConnectionsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **connection_group** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostData**](../Model/EcedoERPCRMInterfaceApiConnectionsConnectionGroupPostData.md)| De data van de aansluiting(en), zie het object-model voor meer informatie |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionContractGroupPostResult[]**](../Model/EcedoERPCRMInterfaceApiConnectionContractGroupPostResult.md)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysConnectionsPut**
> sysConnectionsPut($organization_id, $connection_id, $connection_data)

Wijzig een specifiek aansluiting

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$connection_id = "connection_id_example"; // string | Guid van de aansluiting (Connection)
$connection_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionPutData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionPutData | De data van de aansluiting(en), zie het object-model voor meer informatie

try {
    $apiInstance->sysConnectionsPut($organization_id, $connection_id, $connection_data);
} catch (Exception $e) {
    echo 'Exception when calling SysConnectionsApi->sysConnectionsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **connection_id** | **string**| Guid van de aansluiting (Connection) |
 **connection_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiConnectionPutData**](../Model/EcedoERPCRMInterfaceApiConnectionPutData.md)| De data van de aansluiting(en), zie het object-model voor meer informatie |

### Return type

void (empty response body)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysConnectionsUpdateMeteringPoint**
> sysConnectionsUpdateMeteringPoint($organization_id, $connection_id, $post_data)

Aansluiting bijwerken met EDSN gegevens

Deze API vraagt de meest recente gegevens van de aansluiting (`MeteringPoint`) op bij EDSN en werkt waar nodig de aansluiting bij

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysConnectionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$connection_id = "connection_id_example"; // string | Guid van de aansluiting (Connection)
$post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiUpdateMeteringPointPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiUpdateMeteringPointPostData | De data van het EDSN verzoek, zie het object-model voor meer informatie

try {
    $apiInstance->sysConnectionsUpdateMeteringPoint($organization_id, $connection_id, $post_data);
} catch (Exception $e) {
    echo 'Exception when calling SysConnectionsApi->sysConnectionsUpdateMeteringPoint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **connection_id** | **string**| Guid van de aansluiting (Connection) |
 **post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiUpdateMeteringPointPostData**](../Model/EcedoERPCRMInterfaceApiUpdateMeteringPointPostData.md)| De data van het EDSN verzoek, zie het object-model voor meer informatie |

### Return type

void (empty response body)

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


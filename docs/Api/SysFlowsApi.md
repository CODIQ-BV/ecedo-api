# Swagger\Client\SysFlowsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysFlowsAcceptProposedAdvancePayment**](SysFlowsApi.md#sysFlowsAcceptProposedAdvancePayment) | **POST** /sysapi/v1.0/flows/advancepaymentcalculation/accept | 
[**sysFlowsCancelApplicationFlow**](SysFlowsApi.md#sysFlowsCancelApplicationFlow) | **POST** /sysapi/v1.0/flows/application/cancel | Aanmeldflow beëindigen
[**sysFlowsCancelCoolingDownPeriodApplicationFlow**](SysFlowsApi.md#sysFlowsCancelCoolingDownPeriodApplicationFlow) | **POST** /sysapi/v1.0/flows/application/cancelcoolingdownperiod | 
[**sysFlowsCancelMoveFlow**](SysFlowsApi.md#sysFlowsCancelMoveFlow) | **POST** /sysapi/v1.0/flows/move/cancel | Verhuisflow afbreken
[**sysFlowsCancelPurchaseFlow**](SysFlowsApi.md#sysFlowsCancelPurchaseFlow) | **POST** /sysapi/v1.0/flows/productpurchase/cancel | Productaanschafflow afbreken
[**sysFlowsCancelPurchaseFlowDeposit**](SysFlowsApi.md#sysFlowsCancelPurchaseFlowDeposit) | **POST** /sysapi/v1.0/flows/productpurchase/canceldeposit | Productaanschafflow voor Borg afbreken
[**sysFlowsCancelSwitchOutFlow**](SysFlowsApi.md#sysFlowsCancelSwitchOutFlow) | **POST** /sysapi/v1.0/flows/switchout/cancel | Uithuizingsflow afbreken
[**sysFlowsEditMoveFlow**](SysFlowsApi.md#sysFlowsEditMoveFlow) | **PUT** /sysapi/v1.0/flows/move/edit | Aanpassen van verhuisflow datums
[**sysFlowsPushThroughApplicationFlow**](SysFlowsApi.md#sysFlowsPushThroughApplicationFlow) | **POST** /sysapi/v1.0/flows/application/pushthrough | 
[**sysFlowsSendSwitchOut**](SysFlowsApi.md#sysFlowsSendSwitchOut) | **POST** /sysapi/v1.0/flows/switchout/sendswitchout | Uithuizingsflow starten.
[**sysFlowsStartAdvancePaymentCalculationFlow**](SysFlowsApi.md#sysFlowsStartAdvancePaymentCalculationFlow) | **POST** /sysapi/v1.0/flows/advancepaymentcalculation/start | 
[**sysFlowsStartApplicationFlow**](SysFlowsApi.md#sysFlowsStartApplicationFlow) | **POST** /sysapi/v1.0/flows/application/start | Aanmeldflow starten
[**sysFlowsStartEnergyPVSwitchFlow**](SysFlowsApi.md#sysFlowsStartEnergyPVSwitchFlow) | **POST** /sysapi/v1.0/flows/pvswitch/start | Start PV switchflow
[**sysFlowsStartProductPurchaseFlow**](SysFlowsApi.md#sysFlowsStartProductPurchaseFlow) | **POST** /sysapi/v1.0/flows/productpurchase/start | Product purchase event starten voor organizationId en clusterReference  toegestane waarde voor eventType: DepositSettlement
[**sysFlowsStartSettlementFlowForProduct**](SysFlowsApi.md#sysFlowsStartSettlementFlowForProduct) | **POST** /sysapi/v1.0/flows/product/startsettlement | Starten van de afrekening flow voor een product


# **sysFlowsAcceptProposedAdvancePayment**
> object sysFlowsAcceptProposedAdvancePayment($advance_payment_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$advance_payment_id = "advance_payment_id_example"; // string | 

try {
    $result = $apiInstance->sysFlowsAcceptProposedAdvancePayment($advance_payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsAcceptProposedAdvancePayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **advance_payment_id** | **string**|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsCancelApplicationFlow**
> object sysFlowsCancelApplicationFlow($organization_id, $cancel_flow_post_data, $cluster_reference)

Aanmeldflow beëindigen

Met behulp van deze API kunnen aanmeldflows worden afgebroken, mits de aanmeldflows zich in een af te breken staat bevinden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$cancel_flow_post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiCancelFlowPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiCancelFlowPostData | Optionele POST-data waarmee detailgedrag aangestuurd kan worden
$cluster_reference = "cluster_reference_example"; // string | Optionele parameter (default null) waardoor alleen de aanmedflow van het cluster met de meegegeven clusterreferentie wordt afgebroken. Als de clusterreferentie niet bestaat wordt een foutmelding teruggegeven.

try {
    $result = $apiInstance->sysFlowsCancelApplicationFlow($organization_id, $cancel_flow_post_data, $cluster_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsCancelApplicationFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **cancel_flow_post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiCancelFlowPostData**](../Model/EcedoERPCRMInterfaceApiCancelFlowPostData.md)| Optionele POST-data waarmee detailgedrag aangestuurd kan worden |
 **cluster_reference** | **string**| Optionele parameter (default null) waardoor alleen de aanmedflow van het cluster met de meegegeven clusterreferentie wordt afgebroken. Als de clusterreferentie niet bestaat wordt een foutmelding teruggegeven. | [optional]

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsCancelCoolingDownPeriodApplicationFlow**
> object sysFlowsCancelCoolingDownPeriodApplicationFlow($organization_id, $cluster_reference)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$cluster_reference = "cluster_reference_example"; // string | 

try {
    $result = $apiInstance->sysFlowsCancelCoolingDownPeriodApplicationFlow($organization_id, $cluster_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsCancelCoolingDownPeriodApplicationFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **cluster_reference** | **string**|  | [optional]

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsCancelMoveFlow**
> object sysFlowsCancelMoveFlow($organization_id, $cluster_reference, $reset_data)

Verhuisflow afbreken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$cluster_reference = "cluster_reference_example"; // string | 
$reset_data = true; // bool | 

try {
    $result = $apiInstance->sysFlowsCancelMoveFlow($organization_id, $cluster_reference, $reset_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsCancelMoveFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **cluster_reference** | **string**|  |
 **reset_data** | **bool**|  | [optional]

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsCancelPurchaseFlow**
> object sysFlowsCancelPurchaseFlow($organization_id, $product_unit_id)

Productaanschafflow afbreken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$product_unit_id = "product_unit_id_example"; // string | 

try {
    $result = $apiInstance->sysFlowsCancelPurchaseFlow($organization_id, $product_unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsCancelPurchaseFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **product_unit_id** | **string**|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsCancelPurchaseFlowDeposit**
> object sysFlowsCancelPurchaseFlowDeposit($organization_id, $cluster_reference)

Productaanschafflow voor Borg afbreken

De flow moet in de stap 'Wacht op calculeren' staan

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$cluster_reference = "cluster_reference_example"; // string | cluster naam van de contracten waarvoor de borg flow actief is

try {
    $result = $apiInstance->sysFlowsCancelPurchaseFlowDeposit($organization_id, $cluster_reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsCancelPurchaseFlowDeposit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **cluster_reference** | **string**| cluster naam van de contracten waarvoor de borg flow actief is |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsCancelSwitchOutFlow**
> object sysFlowsCancelSwitchOutFlow($connection_id)

Uithuizingsflow afbreken

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connection_id = "connection_id_example"; // string | 

try {
    $result = $apiInstance->sysFlowsCancelSwitchOutFlow($connection_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsCancelSwitchOutFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_id** | **string**|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsEditMoveFlow**
> object sysFlowsEditMoveFlow($organization_id, $cluster_reference, $edit_move_flow)

Aanpassen van verhuisflow datums

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$cluster_reference = "cluster_reference_example"; // string | 
$edit_move_flow = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiEditMoveFlow(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiEditMoveFlow | 

try {
    $result = $apiInstance->sysFlowsEditMoveFlow($organization_id, $cluster_reference, $edit_move_flow);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsEditMoveFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **cluster_reference** | **string**|  |
 **edit_move_flow** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiEditMoveFlow**](../Model/EcedoERPCRMInterfaceApiEditMoveFlow.md)|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsPushThroughApplicationFlow**
> object sysFlowsPushThroughApplicationFlow($organization_id, $switch_date, $cluster_reference, $switch_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$switch_date = new \DateTime("2013-10-20"); // \DateTime | 
$cluster_reference = "cluster_reference_example"; // string | 
$switch_type = "switch_type_example"; // string | 

try {
    $result = $apiInstance->sysFlowsPushThroughApplicationFlow($organization_id, $switch_date, $cluster_reference, $switch_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsPushThroughApplicationFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **switch_date** | **\DateTime**|  |
 **cluster_reference** | **string**|  | [optional]
 **switch_type** | **string**|  | [optional]

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsSendSwitchOut**
> object sysFlowsSendSwitchOut($connection_id, $switch_out_type, $switch_out_date)

Uithuizingsflow starten.

Uithuizingsflow starten.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connection_id = "connection_id_example"; // string | 
$switch_out_type = "switch_out_type_example"; // string | 
$switch_out_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $result = $apiInstance->sysFlowsSendSwitchOut($connection_id, $switch_out_type, $switch_out_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsSendSwitchOut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_id** | **string**|  |
 **switch_out_type** | **string**|  |
 **switch_out_date** | **\DateTime**|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsStartAdvancePaymentCalculationFlow**
> object sysFlowsStartAdvancePaymentCalculationFlow($organization_id, $cluster_reference, $calculation_reason, $inform, $calculation_date)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$cluster_reference = "cluster_reference_example"; // string | 
$calculation_reason = "calculation_reason_example"; // string | 
$inform = true; // bool | 
$calculation_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $result = $apiInstance->sysFlowsStartAdvancePaymentCalculationFlow($organization_id, $cluster_reference, $calculation_reason, $inform, $calculation_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsStartAdvancePaymentCalculationFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **cluster_reference** | **string**|  | [optional]
 **calculation_reason** | **string**|  | [optional]
 **inform** | **bool**|  | [optional]
 **calculation_date** | **\DateTime**|  | [optional]

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsStartApplicationFlow**
> object sysFlowsStartApplicationFlow($organization_id, $cluster_reference, $reset_status, $cer_pre_notified, $skip_cooling_down_period)

Aanmeldflow starten

Met behulp van deze API kunnen aanmeldflows gestart worden.<br />  De aanmeldflow wordt gestart voor alle aansluitingen van de klant met status \"Aangemaakt\" (`Created`). Als er meerdere clusters zijn met aansluitingen met deze status, dan wordt er per cluster een een aanmeldflow gestart.<br /><br />  Door gebruik te maken van de query parameter `clusterReference` kan afgedwongen worden dat er alleen een aanmeldflow wordt gestart voor één specifiek cluster<br />

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | Guid van de klant (Organization)
$cluster_reference = "cluster_reference_example"; // string | Optionele parameter (default null) waardoor de aanmeldflow alleen wordt gestart voor aansluitingen in het cluster met de aangegeven clusterreferentie. Als de clusterreferentie niet bestaat wordt er een foutmelding teruggegeven.
$reset_status = true; // bool | Met behulp van deze parameter (default false) kunnen aansluitingen met de status \"Aanmelding afgebroken\" (`ApplicationCancelled`) automatisch gereset worden zodat de aanmeldflow (ook) voor deze aansluitingen wordt gestart. Ons advies is om deze query parameter __niet__ te gebruiken omdat Ecedo niet kan valideren of de contracten en factuuritems de juiste status hebben.
$cer_pre_notified = true; // bool | Met behulp van deze parameter (default false) kan de stap \"Melden toekomstig contract\" worden overgeslagen. Als Ecedo een welkomstbrief moet genereren is vereist dat er een geldige vooraanmelding in het CER aanwezig is.
$skip_cooling_down_period = true; // bool | Met behulp van deze parameter (default false) kan aangegeven worden dat de aanmeldflow de afkoelperiode moet overslaan

try {
    $result = $apiInstance->sysFlowsStartApplicationFlow($organization_id, $cluster_reference, $reset_status, $cer_pre_notified, $skip_cooling_down_period);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsStartApplicationFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**| Guid van de klant (Organization) |
 **cluster_reference** | **string**| Optionele parameter (default null) waardoor de aanmeldflow alleen wordt gestart voor aansluitingen in het cluster met de aangegeven clusterreferentie. Als de clusterreferentie niet bestaat wordt er een foutmelding teruggegeven. | [optional]
 **reset_status** | **bool**| Met behulp van deze parameter (default false) kunnen aansluitingen met de status \&quot;Aanmelding afgebroken\&quot; (&#x60;ApplicationCancelled&#x60;) automatisch gereset worden zodat de aanmeldflow (ook) voor deze aansluitingen wordt gestart. Ons advies is om deze query parameter __niet__ te gebruiken omdat Ecedo niet kan valideren of de contracten en factuuritems de juiste status hebben. | [optional]
 **cer_pre_notified** | **bool**| Met behulp van deze parameter (default false) kan de stap \&quot;Melden toekomstig contract\&quot; worden overgeslagen. Als Ecedo een welkomstbrief moet genereren is vereist dat er een geldige vooraanmelding in het CER aanwezig is. | [optional]
 **skip_cooling_down_period** | **bool**| Met behulp van deze parameter (default false) kan aangegeven worden dat de aanmeldflow de afkoelperiode moet overslaan | [optional]

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsStartEnergyPVSwitchFlow**
> object sysFlowsStartEnergyPVSwitchFlow($connection_id, $switch_date, $pv_ean)

Start PV switchflow

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$connection_id = "connection_id_example"; // string | 
$switch_date = new \DateTime("2013-10-20"); // \DateTime | 
$pv_ean = "pv_ean_example"; // string | 

try {
    $result = $apiInstance->sysFlowsStartEnergyPVSwitchFlow($connection_id, $switch_date, $pv_ean);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsStartEnergyPVSwitchFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **connection_id** | **string**|  |
 **switch_date** | **\DateTime**|  |
 **pv_ean** | **string**|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsStartProductPurchaseFlow**
> object sysFlowsStartProductPurchaseFlow($organization_id, $cluster_reference, $event_type, $event_date)

Product purchase event starten voor organizationId en clusterReference  toegestane waarde voor eventType: DepositSettlement

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$cluster_reference = "cluster_reference_example"; // string | 
$event_type = "event_type_example"; // string | 
$event_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $result = $apiInstance->sysFlowsStartProductPurchaseFlow($organization_id, $cluster_reference, $event_type, $event_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsStartProductPurchaseFlow: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **cluster_reference** | **string**|  |
 **event_type** | **string**|  |
 **event_date** | **\DateTime**|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysFlowsStartSettlementFlowForProduct**
> object sysFlowsStartSettlementFlowForProduct($organization_id, $cluster_reference, $event_type, $event_date)

Starten van de afrekening flow voor een product

Enkel eventtype ImbalanceFlexSettlement wordt nu ondersteund

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: API Key - 1
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\SysFlowsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$organization_id = "organization_id_example"; // string | 
$cluster_reference = "cluster_reference_example"; // string | 
$event_type = "event_type_example"; // string | 
$event_date = new \DateTime("2013-10-20"); // \DateTime | 

try {
    $result = $apiInstance->sysFlowsStartSettlementFlowForProduct($organization_id, $cluster_reference, $event_type, $event_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysFlowsApi->sysFlowsStartSettlementFlowForProduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **cluster_reference** | **string**|  |
 **event_type** | **string**|  |
 **event_date** | **\DateTime**|  |

### Return type

**object**

### Authorization

[API Key - 1](../../README.md#API Key - 1)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


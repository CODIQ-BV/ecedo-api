# Swagger\Client\SysDocumentsApi

All URIs are relative to *https://hem-test.ecedo.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sysDocumentsDownload**](SysDocumentsApi.md#sysDocumentsDownload) | **GET** /sysapi/v1.0/organizations/{organizationId}/documents/{documentId}/download | Download document
[**sysDocumentsGenerateDocument**](SysDocumentsApi.md#sysDocumentsGenerateDocument) | **POST** /sysapi/v1.0/organizations/{organizationId}/documents/generatedocument | Genereer document
[**sysDocumentsGetDocument**](SysDocumentsApi.md#sysDocumentsGetDocument) | **GET** /sysapi/v1.0/organizations/{organizationId}/documents/{documentId} | Retrieves a document based on the organization and documentid
[**sysDocumentsGetDocuments**](SysDocumentsApi.md#sysDocumentsGetDocuments) | **GET** /sysapi/v1.0/organizations/{organizationId}/documents | Get documents. Eventueel gefilterd op documenttype. Bij het documenttype &#39;UserDocument&#39; kan ook op userdocumenttype gefilterd worden.
[**sysDocumentsStoreNexusBallNotification**](SysDocumentsApi.md#sysDocumentsStoreNexusBallNotification) | **POST** /sysapi/v1.0/documents/nexus/allocation | Upload a BALLNotification from Nexus
[**sysDocumentsStorePVNEDTimeSeriesDocument**](SysDocumentsApi.md#sysDocumentsStorePVNEDTimeSeriesDocument) | **POST** /sysapi/v1.0/documents/pvned/timeseriesdocument | Upload and process PVNED&#39;s Time Series Document
[**sysDocumentsUploadUserDocument**](SysDocumentsApi.md#sysDocumentsUploadUserDocument) | **POST** /sysapi/v1.0/documents/UploadUserDocument/{organizationId}/{userDocumentType} | Upload document


# **sysDocumentsDownload**
> object sysDocumentsDownload($organization_id, $document_id)

Download document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->sysDocumentsDownload($organization_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDocumentsApi->sysDocumentsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **document_id** | **string**|  |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysDocumentsGenerateDocument**
> string sysDocumentsGenerateDocument($organization_id, $generate_document_post_data)

Genereer document

Toegestane DocumentTypes: ExtensionLetterEnergy

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$generate_document_post_data = new \Swagger\Client\Model\EcedoERPCRMInterfaceApiGenerateDocumentPostData(); // \Swagger\Client\Model\EcedoERPCRMInterfaceApiGenerateDocumentPostData | 

try {
    $result = $apiInstance->sysDocumentsGenerateDocument($organization_id, $generate_document_post_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDocumentsApi->sysDocumentsGenerateDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **generate_document_post_data** | [**\Swagger\Client\Model\EcedoERPCRMInterfaceApiGenerateDocumentPostData**](../Model/EcedoERPCRMInterfaceApiGenerateDocumentPostData.md)|  |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysDocumentsGetDocument**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiDocument sysDocumentsGetDocument($organization_id, $document_id)

Retrieves a document based on the organization and documentid

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$document_id = "document_id_example"; // string | 

try {
    $result = $apiInstance->sysDocumentsGetDocument($organization_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDocumentsApi->sysDocumentsGetDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **document_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiDocument**](../Model/EcedoERPCRMInterfaceApiDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysDocumentsGetDocuments**
> \Swagger\Client\Model\EcedoERPCRMInterfaceApiDocument[] sysDocumentsGetDocuments($organization_id, $document_type, $user_document_type)

Get documents. Eventueel gefilterd op documenttype. Bij het documenttype 'UserDocument' kan ook op userdocumenttype gefilterd worden.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$document_type = "document_type_example"; // string | 
$user_document_type = "user_document_type_example"; // string | 

try {
    $result = $apiInstance->sysDocumentsGetDocuments($organization_id, $document_type, $user_document_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDocumentsApi->sysDocumentsGetDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **document_type** | **string**|  | [optional]
 **user_document_type** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\EcedoERPCRMInterfaceApiDocument[]**](../Model/EcedoERPCRMInterfaceApiDocument.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysDocumentsStoreNexusBallNotification**
> string sysDocumentsStoreNexusBallNotification()

Upload a BALLNotification from Nexus

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->sysDocumentsStoreNexusBallNotification();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDocumentsApi->sysDocumentsStoreNexusBallNotification: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysDocumentsStorePVNEDTimeSeriesDocument**
> string sysDocumentsStorePVNEDTimeSeriesDocument()

Upload and process PVNED's Time Series Document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->sysDocumentsStorePVNEDTimeSeriesDocument();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDocumentsApi->sysDocumentsStorePVNEDTimeSeriesDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sysDocumentsUploadUserDocument**
> object sysDocumentsUploadUserDocument($organization_id, $user_document_type, $comment)

Upload document

Post methode om een document toe te voegen aan een organisatie

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\SysDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$organization_id = "organization_id_example"; // string | 
$user_document_type = "user_document_type_example"; // string | 
$comment = "comment_example"; // string | 

try {
    $result = $apiInstance->sysDocumentsUploadUserDocument($organization_id, $user_document_type, $comment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SysDocumentsApi->sysDocumentsUploadUserDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **organization_id** | **string**|  |
 **user_document_type** | **string**|  |
 **comment** | **string**|  | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


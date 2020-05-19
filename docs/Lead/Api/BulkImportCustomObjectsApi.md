# NecLimDul\MarketoRest\Lead\BulkImportCustomObjectsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getImportCustomObjectFailuresUsingGET**](BulkImportCustomObjectsApi.md#getImportCustomObjectFailuresUsingGET) | **GET** /bulk/v1/customobjects/{apiName}/import/{batchId}/failures.json | Get Import Custom Object Failures
[**getImportCustomObjectStatusUsingGET**](BulkImportCustomObjectsApi.md#getImportCustomObjectStatusUsingGET) | **GET** /bulk/v1/customobjects/{apiName}/import/{batchId}/status.json | Get Import Custom Object Status
[**getImportCustomObjectWarningsUsingGET**](BulkImportCustomObjectsApi.md#getImportCustomObjectWarningsUsingGET) | **GET** /bulk/v1/customobjects/{apiName}/import/{batchId}/warnings.json | Get Import Custom Object Warnings
[**importCustomObjectUsingPOST**](BulkImportCustomObjectsApi.md#importCustomObjectUsingPOST) | **POST** /bulk/v1/customobjects/{apiName}/import.json | Import Custom Objects


# **getImportCustomObjectFailuresUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent getImportCustomObjectFailuresUsingGET($api_name, $batch_id)

Get Import Custom Object Failures

Returns the list of failures for the import batch job.  Required Permissions: Read-Write Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkImportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the import batch job.
$batch_id = 56; // int | Id of the import batch job.

try {
    $result = $apiInstance->getImportCustomObjectFailuresUsingGET($api_name, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportCustomObjectsApi->getImportCustomObjectFailuresUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the import batch job. |
 **batch_id** | **int**| Id of the import batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent**](../Model/ObservableOfInputStreamContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportCustomObjectStatusUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportCustomObjectResponse getImportCustomObjectStatusUsingGET($api_name, $batch_id)

Get Import Custom Object Status

Returns the status of an import batch job.  Required Permissions: Read-Write Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkImportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the import batch job.
$batch_id = 56; // int | Id of the import batch job.

try {
    $result = $apiInstance->getImportCustomObjectStatusUsingGET($api_name, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportCustomObjectsApi->getImportCustomObjectStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the import batch job. |
 **batch_id** | **int**| Id of the import batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportCustomObjectResponse**](../Model/ResponseOfImportCustomObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportCustomObjectWarningsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent getImportCustomObjectWarningsUsingGET($api_name, $batch_id)

Get Import Custom Object Warnings

Returns the list of warnings for the import batch job.  Required Permissions: Read-Write Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkImportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the import batch job.
$batch_id = 56; // int | Id of the import batch job.

try {
    $result = $apiInstance->getImportCustomObjectWarningsUsingGET($api_name, $batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportCustomObjectsApi->getImportCustomObjectWarningsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the import batch job. |
 **batch_id** | **int**| Id of the import batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent**](../Model/ObservableOfInputStreamContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importCustomObjectUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportCustomObjectResponse importCustomObjectUsingPOST($api_name, $format, $file)

Import Custom Objects

Imports a file containing data records into the target instance.  Required Permissions: Read-Write Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkImportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the import batch job.
$format = "format_example"; // string | Import file format.
$file = "/path/to/file.txt"; // \SplFileObject | File containing the data records to import.

try {
    $result = $apiInstance->importCustomObjectUsingPOST($api_name, $format, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportCustomObjectsApi->importCustomObjectUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the import batch job. |
 **format** | **string**| Import file format. |
 **file** | **\SplFileObject**| File containing the data records to import. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportCustomObjectResponse**](../Model/ResponseOfImportCustomObjectResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# NecLimDul\MarketoRest\Lead\BulkImportLeadsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getImportLeadFailuresUsingGET**](BulkImportLeadsApi.md#getImportLeadFailuresUsingGET) | **GET** /bulk/v1/leads/batch/{batchId}/failures.json | Get Import Lead Failures
[**getImportLeadStatusUsingGET**](BulkImportLeadsApi.md#getImportLeadStatusUsingGET) | **GET** /bulk/v1/leads/batch/{batchId}.json | Get Import Lead Status
[**getImportLeadWarningsUsingGET**](BulkImportLeadsApi.md#getImportLeadWarningsUsingGET) | **GET** /bulk/v1/leads/batch/{batchId}/warnings.json | Get Import Lead Warnings
[**importLeadUsingPOST**](BulkImportLeadsApi.md#importLeadUsingPOST) | **POST** /bulk/v1/leads.json | Import Leads


# **getImportLeadFailuresUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent getImportLeadFailuresUsingGET($batch_id)

Get Import Lead Failures

Returns the list of failures for the import batch job.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkImportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 56; // int | Id of the import batch job.

try {
    $result = $apiInstance->getImportLeadFailuresUsingGET($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportLeadsApi->getImportLeadFailuresUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **int**| Id of the import batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent**](../Model/ObservableOfInputStreamContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportLeadStatusUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse getImportLeadStatusUsingGET($batch_id)

Get Import Lead Status

Returns the status of an import batch job.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkImportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 56; // int | Id of the import batch job.

try {
    $result = $apiInstance->getImportLeadStatusUsingGET($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportLeadsApi->getImportLeadStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **int**| Id of the import batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse**](../Model/ResponseOfImportLeadResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportLeadWarningsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent getImportLeadWarningsUsingGET($batch_id)

Get Import Lead Warnings

Returns the list of warnings for the import batch job.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkImportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 56; // int | Id of the import batch job.

try {
    $result = $apiInstance->getImportLeadWarningsUsingGET($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportLeadsApi->getImportLeadWarningsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **int**| Id of the import batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamContent**](../Model/ObservableOfInputStreamContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importLeadUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse importLeadUsingPOST($format, $file, $lookup_field, $partition_name, $list_id)

Import Leads

Imports a file containing data records into the target instance.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkImportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$format = "format_example"; // string | Import file format.
$file = "/path/to/file.txt"; // \SplFileObject | File containing the data records to import.
$lookup_field = "lookup_field_example"; // string | Field to use for deduplication.  Custom fields (string, email, integer), and the following field types are supported: id, cookies, email, twitterId, facebookId, linkedInId, sfdcAccountId, sfdcContactId, sfdcLeadId, sfdcLeadOwnerId, sfdcOpptyId.  Default is email.<br>Note: You can use id for update only operations.
$partition_name = "partition_name_example"; // string | Name of the lead partition to import to.
$list_id = 56; // int | Id of the static list to import into.

try {
    $result = $apiInstance->importLeadUsingPOST($format, $file, $lookup_field, $partition_name, $list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportLeadsApi->importLeadUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **format** | **string**| Import file format. |
 **file** | **\SplFileObject**| File containing the data records to import. |
 **lookup_field** | **string**| Field to use for deduplication.  Custom fields (string, email, integer), and the following field types are supported: id, cookies, email, twitterId, facebookId, linkedInId, sfdcAccountId, sfdcContactId, sfdcLeadId, sfdcLeadOwnerId, sfdcOpptyId.  Default is email.&lt;br&gt;Note: You can use id for update only operations. | [optional]
 **partition_name** | **string**| Name of the lead partition to import to. | [optional]
 **list_id** | **int**| Id of the static list to import into. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfImportLeadResponse**](../Model/ResponseOfImportLeadResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


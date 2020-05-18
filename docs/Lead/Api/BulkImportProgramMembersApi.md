# MarketoRest\Lead\BulkImportProgramMembersApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getImportProgramMemberFailuresUsingGET**](BulkImportProgramMembersApi.md#getImportProgramMemberFailuresUsingGET) | **GET** /bulk/v1/program/members/import/{batchId}/failures.json | Get Import Program Member Failures
[**getImportProgramMemberStatusUsingGET**](BulkImportProgramMembersApi.md#getImportProgramMemberStatusUsingGET) | **GET** /bulk/v1/program/members/import/{batchId}/status.json | Get Import Program Member Status
[**getImportProgramMemberWarningsUsingGET**](BulkImportProgramMembersApi.md#getImportProgramMemberWarningsUsingGET) | **GET** /bulk/v1/program/members/import/{batchId}/warnings.json | Get Import Program Member Warnings
[**importProgramMemberUsingPOST**](BulkImportProgramMembersApi.md#importProgramMemberUsingPOST) | **POST** /bulk/v1/program/{programId}/members/import.json | Import Program Members


# **getImportProgramMemberFailuresUsingGET**
> \MarketoRest\Lead\Model\ObservableOfInputStreamContent getImportProgramMemberFailuresUsingGET($batch_id)

Get Import Program Member Failures

Returns the list of failures for the import batch job.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\BulkImportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 56; // int | Id of the import batch job.

try {
    $result = $apiInstance->getImportProgramMemberFailuresUsingGET($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportProgramMembersApi->getImportProgramMemberFailuresUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **int**| Id of the import batch job. |

### Return type

[**\MarketoRest\Lead\Model\ObservableOfInputStreamContent**](../Model/ObservableOfInputStreamContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportProgramMemberStatusUsingGET**
> \MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse getImportProgramMemberStatusUsingGET($batch_id)

Get Import Program Member Status

Returns the status of an import batch job.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\BulkImportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 56; // int | Id of the import batch job.

try {
    $result = $apiInstance->getImportProgramMemberStatusUsingGET($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportProgramMembersApi->getImportProgramMemberStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **int**| Id of the import batch job. |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse**](../Model/ResponseOfImportProgramMemberResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getImportProgramMemberWarningsUsingGET**
> \MarketoRest\Lead\Model\ObservableOfInputStreamContent getImportProgramMemberWarningsUsingGET($batch_id)

Get Import Program Member Warnings

Returns the list of warnings for the import batch job.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\BulkImportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_id = 56; // int | Id of the import batch job.

try {
    $result = $apiInstance->getImportProgramMemberWarningsUsingGET($batch_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportProgramMembersApi->getImportProgramMemberWarningsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_id** | **int**| Id of the import batch job. |

### Return type

[**\MarketoRest\Lead\Model\ObservableOfInputStreamContent**](../Model/ObservableOfInputStreamContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importProgramMemberUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse importProgramMemberUsingPOST($program_id, $program_member_status, $format, $file)

Import Program Members

Imports a file containing data records into the target instance.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\BulkImportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = "program_id_example"; // string | Id of the program to add members to.
$program_member_status = "program_member_status_example"; // string | Program member status for members being added.
$format = "format_example"; // string | Import file format.
$file = "/path/to/file.txt"; // \SplFileObject | File containing the data records to import.

try {
    $result = $apiInstance->importProgramMemberUsingPOST($program_id, $program_member_status, $format, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkImportProgramMembersApi->importProgramMemberUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **string**| Id of the program to add members to. |
 **program_member_status** | **string**| Program member status for members being added. |
 **format** | **string**| Import file format. |
 **file** | **\SplFileObject**| File containing the data records to import. |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfImportProgramMemberResponse**](../Model/ResponseOfImportProgramMemberResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


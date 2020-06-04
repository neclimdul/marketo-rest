# NecLimDul\MarketoRest\Lead\BulkExportProgramMembersApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelExportProgramMembersUsingPOST**](BulkExportProgramMembersApi.md#cancelExportProgramMembersUsingPOST) | **POST** /bulk/v1/program/members/export/{exportId}/cancel.json | Cancel Export Program Member Job
[**createExportProgramMembersUsingPOST**](BulkExportProgramMembersApi.md#createExportProgramMembersUsingPOST) | **POST** /bulk/v1/program/members/export/create.json | Create Export Program Member Job
[**enqueueExportProgramMembersUsingPOST**](BulkExportProgramMembersApi.md#enqueueExportProgramMembersUsingPOST) | **POST** /bulk/v1/program/members/export/{exportId}/enqueue.json | Enqueue Export Program Member Job
[**getExportProgramMembersFileUsingGET**](BulkExportProgramMembersApi.md#getExportProgramMembersFileUsingGET) | **GET** /bulk/v1/program/members/export/{exportId}/file.json | Get Export Program Member File
[**getExportProgramMembersStatusUsingGET**](BulkExportProgramMembersApi.md#getExportProgramMembersStatusUsingGET) | **GET** /bulk/v1/program/members/export/{exportId}/status.json | Get Export Program Member Job Status
[**getExportProgramMembersUsingGET**](BulkExportProgramMembersApi.md#getExportProgramMembersUsingGET) | **GET** /bulk/v1/program/members/export.json | Get Export Program Member Jobs


# **cancelExportProgramMembersUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse cancelExportProgramMembersUsingPOST($export_id)

Cancel Export Program Member Job

Cancel export job.  Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = 'export_id_example'; // string | Id of export batch job.

try {
    $result = $apiInstance->cancelExportProgramMembersUsingPOST($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportProgramMembersApi->cancelExportProgramMembersUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_id** | **string**| Id of export batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createExportProgramMembersUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse createExportProgramMembersUsingPOST($export_program_member_request)

Create Export Program Member Job

Create export job for search criteria defined via \"filter\" parameter.  Request returns the \"exportId\" which is passed as a parameter in subsequent calls to Bulk Export Program Members endpoints.  Use Enqueue Export Program Member Job endpoint to queue the export job for processing.  Use Get Export Program Member Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_program_member_request = new \NecLimDul\MarketoRest\Lead\Model\ExportProgramMemberRequest(); // \NecLimDul\MarketoRest\Lead\Model\ExportProgramMemberRequest | exportProgramMemberRequest<br><br>ColumnHeaderNames: A JSON object containing key-value pairs of field and column header names.<br><br>Example:<br><code>\"columnHeaderNames\":{<br>  \"firstName\":\"First Name\",<br>  \"lastName\":\"Last Name\",<br>  \"email\":\"Email Address\"<br>}</code><br>

try {
    $result = $apiInstance->createExportProgramMembersUsingPOST($export_program_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportProgramMembersApi->createExportProgramMembersUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_program_member_request** | [**\NecLimDul\MarketoRest\Lead\Model\ExportProgramMemberRequest**](../Model/ExportProgramMemberRequest.md)| exportProgramMemberRequest&lt;br&gt;&lt;br&gt;ColumnHeaderNames: A JSON object containing key-value pairs of field and column header names.&lt;br&gt;&lt;br&gt;Example:&lt;br&gt;&lt;code&gt;\&quot;columnHeaderNames\&quot;:{&lt;br&gt;  \&quot;firstName\&quot;:\&quot;First Name\&quot;,&lt;br&gt;  \&quot;lastName\&quot;:\&quot;Last Name\&quot;,&lt;br&gt;  \&quot;email\&quot;:\&quot;Email Address\&quot;&lt;br&gt;}&lt;/code&gt;&lt;br&gt; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enqueueExportProgramMembersUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse enqueueExportProgramMembersUsingPOST($export_id)

Enqueue Export Program Member Job

Enqueue export job. This will place export job in queue, and will start the job when computing resources become available.  The export job must be in \"Created\" state.  Use Get Export Program Member Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = 'export_id_example'; // string | Id of export batch job.

try {
    $result = $apiInstance->enqueueExportProgramMembersUsingPOST($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportProgramMembersApi->enqueueExportProgramMembersUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_id** | **string**| Id of export batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportProgramMembersFileUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamRangeContent getExportProgramMembersFileUsingGET($export_id, $range)

Get Export Program Member File

Returns the file content of an export job.  The export job must be in \"Completed\" state.  Use Get Export Program Member Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Lead<br><br>The file format is specified by calling the Create Export Program Member Job endpoint. The following is an example of the default file format (\"CSV\").<br><br><code>firstName,lastName,email</code><br><code>Ivanka,Trump,ivanka@invankatrump.com</code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = 'export_id_example'; // string | Id of export batch job.
$range = 'range_example'; // string | To support partial retrieval of extracted data, the HTTP header \"Range\" of type \"bytes\" may be specified.  See RFC 2616 \"Range Retrieval Requests\" for more information. If the header is not set, the entire contents will be returned.

try {
    $result = $apiInstance->getExportProgramMembersFileUsingGET($export_id, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportProgramMembersApi->getExportProgramMembersFileUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_id** | **string**| Id of export batch job. |
 **range** | **string**| To support partial retrieval of extracted data, the HTTP header \&quot;Range\&quot; of type \&quot;bytes\&quot; may be specified.  See RFC 2616 \&quot;Range Retrieval Requests\&quot; for more information. If the header is not set, the entire contents will be returned. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamRangeContent**](../Model/ObservableOfInputStreamRangeContent.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportProgramMembersStatusUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse getExportProgramMembersStatusUsingGET($export_id)

Get Export Program Member Job Status

Returns status of an export job.  Job status is available for 30 days after Completed or Failed status was reached. Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = 'export_id_example'; // string | Id of export batch job.

try {
    $result = $apiInstance->getExportProgramMembersStatusUsingGET($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportProgramMembersApi->getExportProgramMembersStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_id** | **string**| Id of export batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportProgramMembersUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponseWithToken getExportProgramMembersUsingGET($status, $batch_size, $next_page_token)

Get Export Program Member Jobs

Returns a list of export jobs that were created in the past 7 days.  Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = array('status_example'); // string[] | Comma separated list of statuses to filter on.
$batch_size = 56; // int | The batch size to return. The max and default value is 300.
$next_page_token = 'next_page_token_example'; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter. See Paging Tokens for more info.

try {
    $result = $apiInstance->getExportProgramMembersUsingGET($status, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportProgramMembersApi->getExportProgramMembersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | [**string[]**](../Model/string.md)| Comma separated list of statuses to filter on. | [optional]
 **batch_size** | **int**| The batch size to return. The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter. See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponseWithToken**](../Model/ResponseOfExportResponseWithToken.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


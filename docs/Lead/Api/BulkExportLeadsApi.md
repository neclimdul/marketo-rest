# NecLimDul\MarketoRest\Lead\BulkExportLeadsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelExportLeadsUsingPOST**](BulkExportLeadsApi.md#cancelExportLeadsUsingPOST) | **POST** /bulk/v1/leads/export/{exportId}/cancel.json | Cancel Export Lead Job
[**createExportLeadsUsingPOST**](BulkExportLeadsApi.md#createExportLeadsUsingPOST) | **POST** /bulk/v1/leads/export/create.json | Create Export Lead Job
[**enqueueExportLeadsUsingPOST**](BulkExportLeadsApi.md#enqueueExportLeadsUsingPOST) | **POST** /bulk/v1/leads/export/{exportId}/enqueue.json | Enqueue Export Lead Job
[**getExportLeadsFileUsingGET**](BulkExportLeadsApi.md#getExportLeadsFileUsingGET) | **GET** /bulk/v1/leads/export/{exportId}/file.json | Get Export Lead File
[**getExportLeadsStatusUsingGET**](BulkExportLeadsApi.md#getExportLeadsStatusUsingGET) | **GET** /bulk/v1/leads/export/{exportId}/status.json | Get Export Lead Job Status
[**getExportLeadsUsingGET**](BulkExportLeadsApi.md#getExportLeadsUsingGET) | **GET** /bulk/v1/leads/export.json | Get Export Lead Jobs


# **cancelExportLeadsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse cancelExportLeadsUsingPOST($export_id)

Cancel Export Lead Job

Cancel export job.  Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = "export_id_example"; // string | Id of export batch job.

try {
    $result = $apiInstance->cancelExportLeadsUsingPOST($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportLeadsApi->cancelExportLeadsUsingPOST: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createExportLeadsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse createExportLeadsUsingPOST($export_lead_request)

Create Export Lead Job

Create export job for search criteria defined via \"filter\" parameter.  Request returns the \"exportId\" which is passed as a parameter in subsequent calls to Bulk Export Leads endpoints.  Use Enqueue Export Lead Job endpoint to queue the export job for processing.  Use Get Export Lead Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_lead_request = new \NecLimDul\MarketoRest\Lead\Model\ExportLeadRequest(); // \NecLimDul\MarketoRest\Lead\Model\ExportLeadRequest | exportLeadRequest<br><br>ColumnHeaderNames: A JSON object containing key-value pairs of field and column header names.<br><br>Example:<br><code>\"columnHeaderNames\":{<br>  \"firstName\":\"First Name\",<br>  \"lastName\":\"Last Name\",<br>  \"email\":\"Email Address\"<br>}</code><br>

try {
    $result = $apiInstance->createExportLeadsUsingPOST($export_lead_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportLeadsApi->createExportLeadsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_lead_request** | [**\NecLimDul\MarketoRest\Lead\Model\ExportLeadRequest**](../Model/ExportLeadRequest.md)| exportLeadRequest&lt;br&gt;&lt;br&gt;ColumnHeaderNames: A JSON object containing key-value pairs of field and column header names.&lt;br&gt;&lt;br&gt;Example:&lt;br&gt;&lt;code&gt;\&quot;columnHeaderNames\&quot;:{&lt;br&gt;  \&quot;firstName\&quot;:\&quot;First Name\&quot;,&lt;br&gt;  \&quot;lastName\&quot;:\&quot;Last Name\&quot;,&lt;br&gt;  \&quot;email\&quot;:\&quot;Email Address\&quot;&lt;br&gt;}&lt;/code&gt;&lt;br&gt; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enqueueExportLeadsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse enqueueExportLeadsUsingPOST($export_id)

Enqueue Export Lead Job

Enqueue export job. This will place export job in queue, and will start the job when computing resources become available.  The export job must be in \"Created\" state.  Use Get Export Lead Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = "export_id_example"; // string | Id of export batch job.

try {
    $result = $apiInstance->enqueueExportLeadsUsingPOST($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportLeadsApi->enqueueExportLeadsUsingPOST: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportLeadsFileUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamRangeContent getExportLeadsFileUsingGET($export_id, $range)

Get Export Lead File

Returns the file content of an export job.  The export job must be in \"Completed\" state.  Use Get Export Lead Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Lead<br><br>The file format is specified by calling the Create Export Lead Job endpoint. The following is an example of the default file format (\"CSV\").<br><br><code>firstName,lastName,email</code><br><code>Marvin,Gaye,marvin.gaye@motown.com</code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = "export_id_example"; // string | Id of export batch job.
$range = "range_example"; // string | To support partial retrieval of extracted data, the HTTP header \"Range\" of type \"bytes\" may be specified.  See RFC 2616 \"Range Retrieval Requests\" for more information. If the header is not set, the entire contents will be returned.

try {
    $result = $apiInstance->getExportLeadsFileUsingGET($export_id, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportLeadsApi->getExportLeadsFileUsingGET: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportLeadsStatusUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse getExportLeadsStatusUsingGET($export_id)

Get Export Lead Job Status

Returns status of an export job.  Job status is available for 30 days after Completed or Failed status was reached. Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = "export_id_example"; // string | Id of export batch job.

try {
    $result = $apiInstance->getExportLeadsStatusUsingGET($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportLeadsApi->getExportLeadsStatusUsingGET: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportLeadsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponseWithToken getExportLeadsUsingGET($status, $batch_size, $next_page_token)

Get Export Lead Jobs

Returns a list of export jobs that were created in the past 7 days.  Required Permissions: Read-Only Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportLeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = array("status_example"); // string[] | Comma separated list of statuses to filter on.
$batch_size = 56; // int | The batch size to return. The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter. See Paging Tokens for more info.

try {
    $result = $apiInstance->getExportLeadsUsingGET($status, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportLeadsApi->getExportLeadsUsingGET: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


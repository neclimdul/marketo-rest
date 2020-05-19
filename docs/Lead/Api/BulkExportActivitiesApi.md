# NecLimDul\MarketoRest\Lead\BulkExportActivitiesApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelExportActivitiesUsingPOST**](BulkExportActivitiesApi.md#cancelExportActivitiesUsingPOST) | **POST** /bulk/v1/activities/export/{exportId}/cancel.json | Cancel Export Activity Job
[**createExportActivitiesUsingPOST**](BulkExportActivitiesApi.md#createExportActivitiesUsingPOST) | **POST** /bulk/v1/activities/export/create.json | Create Export Activity Job
[**enqueueExportActivitiesUsingPOST**](BulkExportActivitiesApi.md#enqueueExportActivitiesUsingPOST) | **POST** /bulk/v1/activities/export/{exportId}/enqueue.json | Enqueue Export Activity Job
[**getExportActivitiesFileUsingGET**](BulkExportActivitiesApi.md#getExportActivitiesFileUsingGET) | **GET** /bulk/v1/activities/export/{exportId}/file.json | Get Export Activity File
[**getExportActivitiesStatusUsingGET**](BulkExportActivitiesApi.md#getExportActivitiesStatusUsingGET) | **GET** /bulk/v1/activities/export/{exportId}/status.json | Get Export Activity Job Status
[**getExportActivitiesUsingGET**](BulkExportActivitiesApi.md#getExportActivitiesUsingGET) | **GET** /bulk/v1/activities/export.json | Get Export Activity Jobs


# **cancelExportActivitiesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse cancelExportActivitiesUsingPOST($export_id)

Cancel Export Activity Job

Cancel export job.  Required Permissions: Read-Only Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = "export_id_example"; // string | Id of export batch job.

try {
    $result = $apiInstance->cancelExportActivitiesUsingPOST($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportActivitiesApi->cancelExportActivitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **createExportActivitiesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse createExportActivitiesUsingPOST($export_activity_request)

Create Export Activity Job

Create export job for search criteria defined via \"filter\" parameter.  Request returns the \"exportId\" which is passed as a parameter in subsequent calls to Bulk Export Activities endpoints.  Use Enqueue Export Activity Job endpoint to queue the export job for processing.  Use Get Export Activity Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_activity_request = new \NecLimDul\MarketoRest\Lead\Model\ExportActivityRequest(); // \NecLimDul\MarketoRest\Lead\Model\ExportActivityRequest | exportActivityRequest<br><br>ColumnHeaderNames: A JSON object containing key-value pairs of field and column header names.<br><br>Example:<br><code>\"columnHeaderNames\":{<br>  \"primaryAttributeValueId\":\"Attribute ID\",<br>  \"primaryAttributeValue\":\"Attribute Value\",<br>  \"attributes\":\"Secondary Attributes\"<br>}</code><br>

try {
    $result = $apiInstance->createExportActivitiesUsingPOST($export_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportActivitiesApi->createExportActivitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **export_activity_request** | [**\NecLimDul\MarketoRest\Lead\Model\ExportActivityRequest**](../Model/ExportActivityRequest.md)| exportActivityRequest&lt;br&gt;&lt;br&gt;ColumnHeaderNames: A JSON object containing key-value pairs of field and column header names.&lt;br&gt;&lt;br&gt;Example:&lt;br&gt;&lt;code&gt;\&quot;columnHeaderNames\&quot;:{&lt;br&gt;  \&quot;primaryAttributeValueId\&quot;:\&quot;Attribute ID\&quot;,&lt;br&gt;  \&quot;primaryAttributeValue\&quot;:\&quot;Attribute Value\&quot;,&lt;br&gt;  \&quot;attributes\&quot;:\&quot;Secondary Attributes\&quot;&lt;br&gt;}&lt;/code&gt;&lt;br&gt; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enqueueExportActivitiesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse enqueueExportActivitiesUsingPOST($export_id)

Enqueue Export Activity Job

Enqueue export job. This will place export job in queue, and will start the job when computing resources become available.  The export job must be in \"Created\" state.  Use Get Export Activity Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = "export_id_example"; // string | Id of export batch job.

try {
    $result = $apiInstance->enqueueExportActivitiesUsingPOST($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportActivitiesApi->enqueueExportActivitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **getExportActivitiesFileUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamRangeContent getExportActivitiesFileUsingGET($export_id, $range)

Get Export Activity File

Returns the file content of an export job.  The export job must be in \"Completed\" state.  Use Get Export Activity Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Activity<br><br>The file format is specified by calling the Create Export Activity Job endpoint. The following is an example of the default file format (\"CSV\"). Note that the \"attributes\" field is formatted as JSON.<br><br><code>marketoGUID,leadId,activityDate,activityTypeId,campaignId,primaryAttributeValueId,primaryAttributeValue, attributes</code><br><code>122323,6,2013-09-26T06:56:35+0000,12,11,6,Owyliphys Iledil,[{\"name\":\"Source Type\",\"value\":\"Web page visit\"}]</code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = "export_id_example"; // string | Id of export batch job.
$range = "range_example"; // string | To support partial retrieval of extracted data, the HTTP header \"Range\" of type \"bytes\" may be specified.  See RFC 2616 \"Range Retrieval Requests\" for more information. If the header is not set, the entire contents will be returned.

try {
    $result = $apiInstance->getExportActivitiesFileUsingGET($export_id, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportActivitiesApi->getExportActivitiesFileUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getExportActivitiesStatusUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse getExportActivitiesStatusUsingGET($export_id)

Get Export Activity Job Status

Returns status of an export job.  Job status is available for 30 days after Completed or Failed status was reached. Required Permissions: Read-Only Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$export_id = "export_id_example"; // string | Id of export batch job.

try {
    $result = $apiInstance->getExportActivitiesStatusUsingGET($export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportActivitiesApi->getExportActivitiesStatusUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getExportActivitiesUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponseWithToken getExportActivitiesUsingGET($status, $batch_size, $next_page_token)

Get Export Activity Jobs

Returns a list of export jobs that were created in the past 7 days.  Required Permissions: Read-Only Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = array("status_example"); // string[] | Comma separated list of statuses to filter on.
$batch_size = 56; // int | The batch size to return. The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter. See Paging Tokens for more info.

try {
    $result = $apiInstance->getExportActivitiesUsingGET($status, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportActivitiesApi->getExportActivitiesUsingGET: ', $e->getMessage(), PHP_EOL;
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


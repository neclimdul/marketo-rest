# NecLimDul\MarketoRest\Lead\BulkExportCustomObjectsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelExportCustomObjectsUsingPOST**](BulkExportCustomObjectsApi.md#cancelExportCustomObjectsUsingPOST) | **POST** /bulk/v1/customobjects/{apiName}/export/{exportId}/cancel.json | Cancel Export Custom Object Job
[**createExportCustomObjectsUsingPOST**](BulkExportCustomObjectsApi.md#createExportCustomObjectsUsingPOST) | **POST** /bulk/v1/customobjects/{apiName}/export/create.json | Create Export Custom Object Job
[**enqueueExportCustomObjectsUsingPOST**](BulkExportCustomObjectsApi.md#enqueueExportCustomObjectsUsingPOST) | **POST** /bulk/v1/customobjects/{apiName}/export/{exportId}/enqueue.json | Enqueue Export Custom Object Job
[**getExportCustomObjectsFileUsingGET**](BulkExportCustomObjectsApi.md#getExportCustomObjectsFileUsingGET) | **GET** /bulk/v1/customobjects/{apiName}/export/{exportId}/file.json | Get Export Custom Object File
[**getExportCustomObjectsStatusUsingGET**](BulkExportCustomObjectsApi.md#getExportCustomObjectsStatusUsingGET) | **GET** /bulk/v1/customobjects/{apiName}/export/{exportId}/status.json | Get Export Custom Object Job Status
[**getExportCustomObjectsUsingGET**](BulkExportCustomObjectsApi.md#getExportCustomObjectsUsingGET) | **GET** /bulk/v1/customobjects/{apiName}/export.json | Get Export Custom Object Jobs


# **cancelExportCustomObjectsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse cancelExportCustomObjectsUsingPOST($api_name, $export_id)

Cancel Export Custom Object Job

Cancel export job.  Required Permissions: Read-Only Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the export batch job.
$export_id = "export_id_example"; // string | Id of export batch job.

try {
    $result = $apiInstance->cancelExportCustomObjectsUsingPOST($api_name, $export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportCustomObjectsApi->cancelExportCustomObjectsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the export batch job. |
 **export_id** | **string**| Id of export batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createExportCustomObjectsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse createExportCustomObjectsUsingPOST($api_name, $export_custom_object_request)

Create Export Custom Object Job

Create export job for search criteria defined via \"filter\" parameter.  Request returns the \"exportId\" which is passed as a parameter in subsequent calls to Bulk Export Custom Object endpoints.  Use Enqueue Export Custom Object Job endpoint to queue the export job for processing.  Use Get Export Custom Object Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the export batch job.
$export_custom_object_request = new \NecLimDul\MarketoRest\Lead\Model\ExportCustomObjectRequest(); // \NecLimDul\MarketoRest\Lead\Model\ExportCustomObjectRequest | exportCustomObjectRequest<br><br>ColumnHeaderNames: A JSON object containing key-value pairs of custom object attributes and column header names.<br><br>Example:<br><code>\"columnHeaderNames\":{<br>  \"attrName1\":\"value1\",<br>  \"attrName2\":\"value2\",<br>  \"attrName3\":\"value3\"<br>}</code><br>

try {
    $result = $apiInstance->createExportCustomObjectsUsingPOST($api_name, $export_custom_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportCustomObjectsApi->createExportCustomObjectsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the export batch job. |
 **export_custom_object_request** | [**\NecLimDul\MarketoRest\Lead\Model\ExportCustomObjectRequest**](../Model/ExportCustomObjectRequest.md)| exportCustomObjectRequest&lt;br&gt;&lt;br&gt;ColumnHeaderNames: A JSON object containing key-value pairs of custom object attributes and column header names.&lt;br&gt;&lt;br&gt;Example:&lt;br&gt;&lt;code&gt;\&quot;columnHeaderNames\&quot;:{&lt;br&gt;  \&quot;attrName1\&quot;:\&quot;value1\&quot;,&lt;br&gt;  \&quot;attrName2\&quot;:\&quot;value2\&quot;,&lt;br&gt;  \&quot;attrName3\&quot;:\&quot;value3\&quot;&lt;br&gt;}&lt;/code&gt;&lt;br&gt; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **enqueueExportCustomObjectsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse enqueueExportCustomObjectsUsingPOST($api_name, $export_id)

Enqueue Export Custom Object Job

Enqueue export job. This will place export job in queue, and will start the job when computing resources become available.  The export job must be in \"Created\" state.  Use Get Export Custom Object Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the export batch job.
$export_id = "export_id_example"; // string | Id of export batch job.

try {
    $result = $apiInstance->enqueueExportCustomObjectsUsingPOST($api_name, $export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportCustomObjectsApi->enqueueExportCustomObjectsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the export batch job. |
 **export_id** | **string**| Id of export batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportCustomObjectsFileUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ObservableOfInputStreamRangeContent getExportCustomObjectsFileUsingGET($api_name, $export_id, $range)

Get Export Custom Object File

Returns the file content of an export job.  The export job must be in \"Completed\" state.  Use Get Export Custom Object Job Status endpoint to retrieve status of export job.  Required Permissions: Read-Only Custom Object<br><br>The file format is specified by calling the Create Export Custom Object Job endpoint. The following is an example of the default file format (\"CSV\").<br><br><code>leadId,marketoGUID,itemName</code><br><code>11,c93f0494-bbd9-44e8-9c0e-dae9b525073f,Hoka One One Mach 4</code>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the export batch job.
$export_id = "export_id_example"; // string | Id of export batch job.
$range = "range_example"; // string | To support partial retrieval of extracted data, the HTTP header \"Range\" of type \"bytes\" may be specified.  See RFC 2616 \"Range Retrieval Requests\" for more information. If the header is not set, the entire contents will be returned.

try {
    $result = $apiInstance->getExportCustomObjectsFileUsingGET($api_name, $export_id, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportCustomObjectsApi->getExportCustomObjectsFileUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the export batch job. |
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

# **getExportCustomObjectsStatusUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse getExportCustomObjectsStatusUsingGET($api_name, $export_id)

Get Export Custom Object Job Status

Returns status of an export job.  Job status is available for 30 days after Completed or Failed status was reached. Required Permissions: Read-Only Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the export batch job.
$export_id = "export_id_example"; // string | Id of export batch job.

try {
    $result = $apiInstance->getExportCustomObjectsStatusUsingGET($api_name, $export_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportCustomObjectsApi->getExportCustomObjectsStatusUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the export batch job. |
 **export_id** | **string**| Id of export batch job. |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponse**](../Model/ResponseOfExportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExportCustomObjectsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfExportResponseWithToken getExportCustomObjectsUsingGET($api_name, $status, $batch_size, $next_page_token)

Get Export Custom Object Jobs

Returns a list of export jobs that were created in the past 7 days.  Required Permissions: Read-Only Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\BulkExportCustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object for the export batch job.
$status = array("status_example"); // string[] | Comma separated list of statuses to filter on.
$batch_size = 56; // int | The batch size to return. The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter. See Paging Tokens for more info.

try {
    $result = $apiInstance->getExportCustomObjectsUsingGET($api_name, $status, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BulkExportCustomObjectsApi->getExportCustomObjectsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object for the export batch job. |
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


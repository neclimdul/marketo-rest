# NecLimDul\MarketoRest\Lead\LeadsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**associateLeadUsingPOST**](LeadsApi.md#associateLeadUsingPOST) | **POST** /rest/v1/leads/{leadId}/associate.json | Associate Lead
[**changeLeadProgramStatusUsingPOST**](LeadsApi.md#changeLeadProgramStatusUsingPOST) | **POST** /rest/v1/leads/programs/{programId}/status.json | Change Lead Program Status
[**deleteLeadsUsingPOST**](LeadsApi.md#deleteLeadsUsingPOST) | **POST** /rest/v1/leads/delete.json | Delete Leads
[**describeUsingGET2**](LeadsApi.md#describeUsingGET2) | **GET** /rest/v1/leads/describe.json | Describe Lead
[**describeUsingGET6**](LeadsApi.md#describeUsingGET6) | **GET** /rest/v1/leads/describe2.json | Describe Lead2
[**getLeadByIdUsingGET**](LeadsApi.md#getLeadByIdUsingGET) | **GET** /rest/v1/lead/{leadId}.json | Get Lead by Id
[**getLeadPartitionsUsingGET**](LeadsApi.md#getLeadPartitionsUsingGET) | **GET** /rest/v1/leads/partitions.json | Get Lead Partitions
[**getLeadsByFilterUsingGET**](LeadsApi.md#getLeadsByFilterUsingGET) | **GET** /rest/v1/leads.json | Get Leads by Filter Type
[**getLeadsByProgramIdUsingGET**](LeadsApi.md#getLeadsByProgramIdUsingGET) | **GET** /rest/v1/leads/programs/{programId}.json | Get Leads by Program Id
[**getListMembershipUsingGET**](LeadsApi.md#getListMembershipUsingGET) | **GET** /rest/v1/leads/{leadId}/listMembership.json | Get Lists by Lead Id
[**getProgramMembershipUsingGET**](LeadsApi.md#getProgramMembershipUsingGET) | **GET** /rest/v1/leads/{leadId}/programMembership.json | Get Programs by Lead Id
[**getSmartCampaignMembershipUsingGET**](LeadsApi.md#getSmartCampaignMembershipUsingGET) | **GET** /rest/v1/leads/{leadId}/smartCampaignMembership.json | Get Smart Campaigns by Lead Id
[**mergeLeadsUsingPOST**](LeadsApi.md#mergeLeadsUsingPOST) | **POST** /rest/v1/leads/{leadId}/merge.json | Merge Leads
[**pushToMarketoUsingPOST**](LeadsApi.md#pushToMarketoUsingPOST) | **POST** /rest/v1/leads/push.json | Push Lead to Marketo
[**syncLeadUsingPOST**](LeadsApi.md#syncLeadUsingPOST) | **POST** /rest/v1/leads.json | Sync Leads
[**updatePartitionsUsingPOST**](LeadsApi.md#updatePartitionsUsingPOST) | **POST** /rest/v1/leads/partitions.json | Update Lead Partition


# **associateLeadUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseWithoutResult associateLeadUsingPOST($lead_id, $cookie)

Associate Lead

Associates a known Marketo lead record to a munchkin cookie and its associated web acitvity history.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_id = 789; // int | The id of the lead to associate
$cookie = "cookie_example"; // string | The cookie value to associate

try {
    $result = $apiInstance->associateLeadUsingPOST($lead_id, $cookie);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->associateLeadUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| The id of the lead to associate |
 **cookie** | **string**| The cookie value to associate |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseWithoutResult**](../Model/ResponseWithoutResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **changeLeadProgramStatusUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfChangeLeadProgramStatusOutputData changeLeadProgramStatusUsingPOST($program_id, $change_lead_program_status_request)

Change Lead Program Status

Changes the program status of a list of leads in a target program.  Only existing members of the program may have their status changed with this API.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = 56; // int | programId
$change_lead_program_status_request = new \NecLimDul\MarketoRest\Lead\Model\ChangeLeadProgramStatusRequest(); // \NecLimDul\MarketoRest\Lead\Model\ChangeLeadProgramStatusRequest | changeLeadProgramStatusRequest

try {
    $result = $apiInstance->changeLeadProgramStatusUsingPOST($program_id, $change_lead_program_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->changeLeadProgramStatusUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **int**| programId |
 **change_lead_program_status_request** | [**\NecLimDul\MarketoRest\Lead\Model\ChangeLeadProgramStatusRequest**](../Model/ChangeLeadProgramStatusRequest.md)| changeLeadProgramStatusRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfChangeLeadProgramStatusOutputData**](../Model/ResponseOfChangeLeadProgramStatusOutputData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLeadsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLead deleteLeadsUsingPOST($delete_lead_request, $id)

Delete Leads

Delete a list of leads from the destination instance.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_lead_request = new \NecLimDul\MarketoRest\Lead\Model\DeleteLeadRequest(); // \NecLimDul\MarketoRest\Lead\Model\DeleteLeadRequest | deleteLeadRequest
$id = array(56); // int[] | Parameter can be specified if the request body is empty. Multiple lead ids can be specified. e.g. id=1,2,3,2342

try {
    $result = $apiInstance->deleteLeadsUsingPOST($delete_lead_request, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->deleteLeadsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_lead_request** | [**\NecLimDul\MarketoRest\Lead\Model\DeleteLeadRequest**](../Model/DeleteLeadRequest.md)| deleteLeadRequest | [optional]
 **id** | [**int[]**](../Model/int.md)| Parameter can be specified if the request body is empty. Multiple lead ids can be specified. e.g. id&#x3D;1,2,3,2342 | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLead**](../Model/ResponseOfLead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeUsingGET2**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadAttribute describeUsingGET2()

Describe Lead

Returns metadata about lead objects in the target instance, including a list of all fields available for interaction via the APIs.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->describeUsingGET2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->describeUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadAttribute**](../Model/ResponseOfLeadAttribute.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeUsingGET6**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadAttribute2 describeUsingGET6()

Describe Lead2

Returns list of searchable fields on lead objects in the target instance.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->describeUsingGET6();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->describeUsingGET6: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadAttribute2**](../Model/ResponseOfLeadAttribute2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadByIdUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLead getLeadByIdUsingGET($lead_id, $fields)

Get Lead by Id

Retrieves a single lead record through its Marketo id.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_id = 789; // int | The Marketo lead id
$fields = array("fields_example"); // string[] | Comma separated list of field names. If omitted, the following default fields will be returned: email, updatedAt, createdAt, lastName, firstName, and id.

try {
    $result = $apiInstance->getLeadByIdUsingGET($lead_id, $fields);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getLeadByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| The Marketo lead id |
 **fields** | [**string[]**](../Model/string.md)| Comma separated list of field names. If omitted, the following default fields will be returned: email, updatedAt, createdAt, lastName, firstName, and id. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLead**](../Model/ResponseOfLead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadPartitionsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadPartition getLeadPartitionsUsingGET()

Get Lead Partitions

Returns a list of available partitions in the target instance.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLeadPartitionsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getLeadPartitionsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadPartition**](../Model/ResponseOfLeadPartition.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadsByFilterUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLead getLeadsByFilterUsingGET($filter_type, $filter_values, $fields, $batch_size, $next_page_token)

Get Leads by Filter Type

Returns a list of up to 300 leads based on a list of values in a particular field.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter_type = "filter_type_example"; // string | The lead field to filter on.  Any custom field (string, email, or integer types only), and any of the following fields are supported: cookies, email, facebookId, id, leadPartitionId, linkedInId, sfdcAccountId, sfdcContactId, sfdcLeadId, sfdcLeadOwnerId, sfdcOpptyId, twitterId.<br><br>A comprehensive list of fields can be obtained via the <a href=\"http://developers.marketo.com/rest-api/endpoint-reference/lead-database-endpoint-reference/#!/Leads/describeUsingGET_6\">Describe Lead2</a> endpoint.
$filter_values = array("filter_values_example"); // string[] | A comma-separated list of values to filter on in the specified fields.
$fields = array("fields_example"); // string[] | A comma-separated list of lead fields to return for each record
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getLeadsByFilterUsingGET($filter_type, $filter_values, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getLeadsByFilterUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_type** | **string**| The lead field to filter on.  Any custom field (string, email, or integer types only), and any of the following fields are supported: cookies, email, facebookId, id, leadPartitionId, linkedInId, sfdcAccountId, sfdcContactId, sfdcLeadId, sfdcLeadOwnerId, sfdcOpptyId, twitterId.&lt;br&gt;&lt;br&gt;A comprehensive list of fields can be obtained via the &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/endpoint-reference/lead-database-endpoint-reference/#!/Leads/describeUsingGET_6\&quot;&gt;Describe Lead2&lt;/a&gt; endpoint. |
 **filter_values** | [**string[]**](../Model/string.md)| A comma-separated list of values to filter on in the specified fields. |
 **fields** | [**string[]**](../Model/string.md)| A comma-separated list of lead fields to return for each record | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLead**](../Model/ResponseOfLead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadsByProgramIdUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLead getLeadsByProgramIdUsingGET($program_id, $fields, $batch_size, $next_page_token)

Get Leads by Program Id

Retrieves a list of leads which are members of the designated program.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = 56; // int | The id of the program to retrieve from
$fields = array("fields_example"); // string[] | A comma-separated list of fields to be returned for each record
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getLeadsByProgramIdUsingGET($program_id, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getLeadsByProgramIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **int**| The id of the program to retrieve from |
 **fields** | [**string[]**](../Model/string.md)| A comma-separated list of fields to be returned for each record | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLead**](../Model/ResponseOfLead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListMembershipUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLists getListMembershipUsingGET($lead_id, $next_page_token, $batch_size)

Get Lists by Lead Id

Query static list membership for one lead.  Required Permissions: Read-Only Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_id = 789; // int | The Marketo lead id
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.
$batch_size = 56; // int | Maximum number of records to return.  Maximum and default is 300.

try {
    $result = $apiInstance->getListMembershipUsingGET($lead_id, $next_page_token, $batch_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getListMembershipUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| The Marketo lead id |
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]
 **batch_size** | **int**| Maximum number of records to return.  Maximum and default is 300. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLists**](../Model/ResponseOfLists.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramMembershipUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfPrograms getProgramMembershipUsingGET($lead_id, $next_page_token, $batch_size, $earliest_updated_at, $latest_updated_at)

Get Programs by Lead Id

Query program membership for one lead.  Required Permissions: Read-Only Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_id = 789; // int | The Marketo lead id
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.
$batch_size = 56; // int | Maximum number of records to return.  Maximum and default is 300.
$earliest_updated_at = "earliest_updated_at_example"; // string | Exclude programs prior to this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$latest_updated_at = "latest_updated_at_example"; // string | Exclude programs after this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.

try {
    $result = $apiInstance->getProgramMembershipUsingGET($lead_id, $next_page_token, $batch_size, $earliest_updated_at, $latest_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getProgramMembershipUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| The Marketo lead id |
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]
 **batch_size** | **int**| Maximum number of records to return.  Maximum and default is 300. | [optional]
 **earliest_updated_at** | **string**| Exclude programs prior to this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **latest_updated_at** | **string**| Exclude programs after this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfPrograms**](../Model/ResponseOfPrograms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmartCampaignMembershipUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfSmartCampaigns getSmartCampaignMembershipUsingGET($lead_id, $next_page_token, $batch_size, $earliest_updated_at, $latest_updated_at)

Get Smart Campaigns by Lead Id

Query smart campaign membership for one lead.  Required Permissions: Read-Only Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_id = 789; // int | The Marketo lead id
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.
$batch_size = 56; // int | Maximum number of records to return.  Maximum and default is 300.
$earliest_updated_at = "earliest_updated_at_example"; // string | Exclude smart campaigns prior to this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$latest_updated_at = "latest_updated_at_example"; // string | Exclude smart campaigns after this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.

try {
    $result = $apiInstance->getSmartCampaignMembershipUsingGET($lead_id, $next_page_token, $batch_size, $earliest_updated_at, $latest_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->getSmartCampaignMembershipUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| The Marketo lead id |
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]
 **batch_size** | **int**| Maximum number of records to return.  Maximum and default is 300. | [optional]
 **earliest_updated_at** | **string**| Exclude smart campaigns prior to this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **latest_updated_at** | **string**| Exclude smart campaigns after this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfSmartCampaigns**](../Model/ResponseOfSmartCampaigns.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mergeLeadsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseWithoutResult mergeLeadsUsingPOST($lead_id, $lead_id2, $lead_ids, $merge_in_crm)

Merge Leads

Merges two or more known lead records into a single lead record.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$lead_id = 789; // int | The id of the winning lead record
$lead_id2 = 789; // int | The id of the losing record
$lead_ids = array(56); // int[] | A comma-separated list of ids of losing records
$merge_in_crm = true; // bool | If set, will attempt to merge the designated records in a natively-synched CRM.  Only valid for instances with are natively synched to SFDC.

try {
    $result = $apiInstance->mergeLeadsUsingPOST($lead_id, $lead_id2, $lead_ids, $merge_in_crm);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->mergeLeadsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **lead_id** | **int**| The id of the winning lead record |
 **lead_id2** | **int**| The id of the losing record | [optional]
 **lead_ids** | [**int[]**](../Model/int.md)| A comma-separated list of ids of losing records | [optional]
 **merge_in_crm** | **bool**| If set, will attempt to merge the designated records in a natively-synched CRM.  Only valid for instances with are natively synched to SFDC. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseWithoutResult**](../Model/ResponseWithoutResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **pushToMarketoUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfPushLeadToMarketo pushToMarketoUsingPOST($push_lead_to_marketo_request)

Push Lead to Marketo

Upserts a lead, and generates a Push Lead to Marketo activity.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$push_lead_to_marketo_request = new \NecLimDul\MarketoRest\Lead\Model\PushLeadToMarketoRequest(); // \NecLimDul\MarketoRest\Lead\Model\PushLeadToMarketoRequest | pushLeadToMarketoRequest

try {
    $result = $apiInstance->pushToMarketoUsingPOST($push_lead_to_marketo_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->pushToMarketoUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **push_lead_to_marketo_request** | [**\NecLimDul\MarketoRest\Lead\Model\PushLeadToMarketoRequest**](../Model/PushLeadToMarketoRequest.md)| pushLeadToMarketoRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfPushLeadToMarketo**](../Model/ResponseOfPushLeadToMarketo.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncLeadUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLead syncLeadUsingPOST($sync_lead_request)

Sync Leads

Syncs a list of leads to the target instance.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sync_lead_request = new \NecLimDul\MarketoRest\Lead\Model\SyncLeadRequest(); // \NecLimDul\MarketoRest\Lead\Model\SyncLeadRequest | syncLeadRequest

try {
    $result = $apiInstance->syncLeadUsingPOST($sync_lead_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->syncLeadUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_lead_request** | [**\NecLimDul\MarketoRest\Lead\Model\SyncLeadRequest**](../Model/SyncLeadRequest.md)| syncLeadRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLead**](../Model/ResponseOfLead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePartitionsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLead updatePartitionsUsingPOST($update_lead_partition_request)

Update Lead Partition

Updates the lead partition for a list of leads.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\LeadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$update_lead_partition_request = new \NecLimDul\MarketoRest\Lead\Model\UpdateLeadPartitionRequest(); // \NecLimDul\MarketoRest\Lead\Model\UpdateLeadPartitionRequest | updateLeadPartitionRequest

try {
    $result = $apiInstance->updatePartitionsUsingPOST($update_lead_partition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LeadsApi->updatePartitionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_lead_partition_request** | [**\NecLimDul\MarketoRest\Lead\Model\UpdateLeadPartitionRequest**](../Model/UpdateLeadPartitionRequest.md)| updateLeadPartitionRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLead**](../Model/ResponseOfLead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

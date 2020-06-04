# NecLimDul\MarketoRest\Lead\StaticListsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLeadsToListUsingPOST**](StaticListsApi.md#addLeadsToListUsingPOST) | **POST** /rest/v1/lists/{listId}/leads.json | Add to List
[**areLeadsMemberOfListUsingGET**](StaticListsApi.md#areLeadsMemberOfListUsingGET) | **GET** /rest/v1/lists/{listId}/leads/ismember.json | Member of List
[**getLeadsByListIdUsingGET**](StaticListsApi.md#getLeadsByListIdUsingGET) | **GET** /rest/v1/list/{listId}/leads.json | Get Leads By List Id
[**getLeadsByListIdUsingGET1**](StaticListsApi.md#getLeadsByListIdUsingGET1) | **GET** /rest/v1/lists/{listId}/leads.json | Get Leads By List Id
[**getListByIdUsingGET**](StaticListsApi.md#getListByIdUsingGET) | **GET** /rest/v1/lists/{listId}.json | Get List by Id
[**getListsUsingGET**](StaticListsApi.md#getListsUsingGET) | **GET** /rest/v1/lists.json | Get Lists
[**removeLeadsFromListUsingDELETE**](StaticListsApi.md#removeLeadsFromListUsingDELETE) | **DELETE** /rest/v1/lists/{listId}/leads.json | Remove from List


# **addLeadsToListUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfListOperationOutputData addLeadsToListUsingPOST($list_id, $id, $list_operation_request)

Add to List

Adds a given set of person records to a target static list.  There is a limit of 300 lead ids per request.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 56; // int | Id of target list
$id = array(56); // int[] | Comma-separated list of lead ids to add to the list
$list_operation_request = new \NecLimDul\MarketoRest\Lead\Model\ListOperationRequest(); // \NecLimDul\MarketoRest\Lead\Model\ListOperationRequest | Optional JSON request body for submitting leads

try {
    $result = $apiInstance->addLeadsToListUsingPOST($list_id, $id, $list_operation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->addLeadsToListUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| Id of target list |
 **id** | [**int[]**](../Model/int.md)| Comma-separated list of lead ids to add to the list | [optional]
 **list_operation_request** | [**\NecLimDul\MarketoRest\Lead\Model\ListOperationRequest**](../Model/ListOperationRequest.md)| Optional JSON request body for submitting leads | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfListOperationOutputData**](../Model/ResponseOfListOperationOutputData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **areLeadsMemberOfListUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfListOperationOutputData areLeadsMemberOfListUsingGET($list_id, $id, $list_operation_request)

Member of List

Checks if leads are members of a given static list.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 56; // int | Id of the static list to check against
$id = array(56); // int[] | Comma-separated list of lead ids to check
$list_operation_request = new \NecLimDul\MarketoRest\Lead\Model\ListOperationRequest(); // \NecLimDul\MarketoRest\Lead\Model\ListOperationRequest | Optional JSON request body

try {
    $result = $apiInstance->areLeadsMemberOfListUsingGET($list_id, $id, $list_operation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->areLeadsMemberOfListUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| Id of the static list to check against |
 **id** | [**int[]**](../Model/int.md)| Comma-separated list of lead ids to check | [optional]
 **list_operation_request** | [**\NecLimDul\MarketoRest\Lead\Model\ListOperationRequest**](../Model/ListOperationRequest.md)| Optional JSON request body | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfListOperationOutputData**](../Model/ResponseOfListOperationOutputData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadsByListIdUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLead getLeadsByListIdUsingGET($list_id, $fields, $batch_size, $next_page_token)

Get Leads By List Id

Retrieves person records which are members of the given static list.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 56; // int | Id of the static list to retrieve records from
$fields = array('fields_example'); // string[] | Comma-separated list of lead fields to return for each record.  If unset will return email, updatedAt, createdAt, lastName, firstName and id
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = 'next_page_token_example'; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getLeadsByListIdUsingGET($list_id, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->getLeadsByListIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| Id of the static list to retrieve records from |
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of lead fields to return for each record.  If unset will return email, updatedAt, createdAt, lastName, firstName and id | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLead**](../Model/ResponseOfLead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadsByListIdUsingGET1**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLead getLeadsByListIdUsingGET1($list_id, $fields, $batch_size, $next_page_token)

Get Leads By List Id

Retrieves person records which are members of the given static list.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 56; // int | Id of the static list to retrieve records from
$fields = array('fields_example'); // string[] | Comma-separated list of lead fields to return for each record.  If unset will return email, updatedAt, createdAt, lastName, firstName and id
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = 'next_page_token_example'; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getLeadsByListIdUsingGET1($list_id, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->getLeadsByListIdUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| Id of the static list to retrieve records from |
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of lead fields to return for each record.  If unset will return email, updatedAt, createdAt, lastName, firstName and id | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLead**](../Model/ResponseOfLead.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListByIdUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfStaticList getListByIdUsingGET($list_id)

Get List by Id

Returns a list record by its id.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 56; // int | Id of the static list to retrieve records from

try {
    $result = $apiInstance->getListByIdUsingGET($list_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->getListByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| Id of the static list to retrieve records from |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfStaticList**](../Model/ResponseOfStaticList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getListsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfStaticList getListsUsingGET($id, $name, $program_name, $workspace_name, $batch_size, $next_page_token)

Get Lists

Returns a set of static list records based on given filter parameters. Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = array(56); // int[] | Comma-separated list of static list ids to return
$name = array('name_example'); // string[] | Comma-separated list of static list names to return
$program_name = array('program_name_example'); // string[] | Comma-separated list of program names.  If set will return all static lists that are children of the given programs
$workspace_name = array('workspace_name_example'); // string[] | Comma-separated list of workspace names.  If set will return all static lists that are children of the given workspaces
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = 'next_page_token_example'; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getListsUsingGET($id, $name, $program_name, $workspace_name, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->getListsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| Comma-separated list of static list ids to return | [optional]
 **name** | [**string[]**](../Model/string.md)| Comma-separated list of static list names to return | [optional]
 **program_name** | [**string[]**](../Model/string.md)| Comma-separated list of program names.  If set will return all static lists that are children of the given programs | [optional]
 **workspace_name** | [**string[]**](../Model/string.md)| Comma-separated list of workspace names.  If set will return all static lists that are children of the given workspaces | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfStaticList**](../Model/ResponseOfStaticList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeLeadsFromListUsingDELETE**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfListOperationOutputData removeLeadsFromListUsingDELETE($list_id, $id, $list_operation_request)

Remove from List

Removes a given set of person records from a target static list.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$list_id = 56; // int | Id of static list to remove leads from
$id = array(56); // int[] | id
$list_operation_request = new \NecLimDul\MarketoRest\Lead\Model\ListOperationRequest(); // \NecLimDul\MarketoRest\Lead\Model\ListOperationRequest | listOperationRequest

try {
    $result = $apiInstance->removeLeadsFromListUsingDELETE($list_id, $id, $list_operation_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->removeLeadsFromListUsingDELETE: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **list_id** | **int**| Id of static list to remove leads from |
 **id** | [**int[]**](../Model/int.md)| id |
 **list_operation_request** | [**\NecLimDul\MarketoRest\Lead\Model\ListOperationRequest**](../Model/ListOperationRequest.md)| listOperationRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfListOperationOutputData**](../Model/ResponseOfListOperationOutputData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


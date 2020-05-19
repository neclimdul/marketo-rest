# NecLimDul\MarketoRest\Lead\NamedAccountListsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addNamedAccountListMembersUsingPOST**](NamedAccountListsApi.md#addNamedAccountListMembersUsingPOST) | **POST** /rest/v1/namedAccountList/{id}/namedAccounts.json | Add Named Account List Members
[**deleteNamedAccountListsUsingPOST**](NamedAccountListsApi.md#deleteNamedAccountListsUsingPOST) | **POST** /rest/v1/namedAccountLists/delete.json | Delete Named Account Lists
[**getNamedAccountListMembersUsingGET**](NamedAccountListsApi.md#getNamedAccountListMembersUsingGET) | **GET** /rest/v1/namedAccountList/{id}/namedAccounts.json | Get Named Account List Members
[**getNamedAccountListsUsingGET**](NamedAccountListsApi.md#getNamedAccountListsUsingGET) | **GET** /rest/v1/namedAccountLists.json | Get Named Account Lists
[**removeNamedAccountListMembersUsingPOST**](NamedAccountListsApi.md#removeNamedAccountListMembersUsingPOST) | **POST** /rest/v1/namedAccountList/{id}/namedAccounts/remove.json | Remove Named Account List Members
[**syncNamedAccountListsUsingPOST**](NamedAccountListsApi.md#syncNamedAccountListsUsingPOST) | **POST** /rest/v1/namedAccountLists.json | Sync Named Account Lists


# **addNamedAccountListMembersUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount addNamedAccountListMembersUsingPOST($id, $add_named_account_list_member_request)

Add Named Account List Members

Adds named account records to a named account list.  Required Permissions: Read-Write Named Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id of target named account list
$add_named_account_list_member_request = new \NecLimDul\MarketoRest\Lead\Model\AddNamedAccountListMemberRequest(); // \NecLimDul\MarketoRest\Lead\Model\AddNamedAccountListMemberRequest | addNamedAccountListMemberRequest

try {
    $result = $apiInstance->addNamedAccountListMembersUsingPOST($id, $add_named_account_list_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountListsApi->addNamedAccountListMembersUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of target named account list |
 **add_named_account_list_member_request** | [**\NecLimDul\MarketoRest\Lead\Model\AddNamedAccountListMemberRequest**](../Model/AddNamedAccountListMemberRequest.md)| addNamedAccountListMemberRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount**](../Model/ResponseOfNamedAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteNamedAccountListsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccountList deleteNamedAccountListsUsingPOST($delete_named_account_list_request)

Delete Named Account Lists

Delete named account lists by dedupe fields, or by id field.  Required Permissions: Read-Write Named Account List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_named_account_list_request = new \NecLimDul\MarketoRest\Lead\Model\DeleteNamedAccountListRequest(); // \NecLimDul\MarketoRest\Lead\Model\DeleteNamedAccountListRequest | deleteNamedAccountListRequest

try {
    $result = $apiInstance->deleteNamedAccountListsUsingPOST($delete_named_account_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountListsApi->deleteNamedAccountListsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_named_account_list_request** | [**\NecLimDul\MarketoRest\Lead\Model\DeleteNamedAccountListRequest**](../Model/DeleteNamedAccountListRequest.md)| deleteNamedAccountListRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccountList**](../Model/ResponseOfNamedAccountList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNamedAccountListMembersUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount getNamedAccountListMembersUsingGET($id, $fields, $batch_size, $next_page_token)

Get Named Account List Members

Retrieves the named accounts which are members of the given list.  Required Permissions: Read-Only Named Account, Read-Write Named Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id of the named account list
$fields = array("fields_example"); // string[] | Comma-separated list of fields to include in the response
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getNamedAccountListMembersUsingGET($id, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountListsApi->getNamedAccountListMembersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of the named account list |
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of fields to include in the response | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount**](../Model/ResponseOfNamedAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNamedAccountListsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccountList getNamedAccountListsUsingGET($filter_type, $filter_values, $batch_size, $next_page_token)

Get Named Account Lists

Retrieves a list of named account list records based on the filter type and values given.  Required Permissions: Read-Only Named Account List, Read-Write Named Account List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter_type = "filter_type_example"; // string | The named account list field to filter on (\"dedupeFields\" or \"idFields\").
$filter_values = array("filter_values_example"); // string[] | Comma-separated list of values to match against
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getNamedAccountListsUsingGET($filter_type, $filter_values, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountListsApi->getNamedAccountListsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_type** | **string**| The named account list field to filter on (\&quot;dedupeFields\&quot; or \&quot;idFields\&quot;). |
 **filter_values** | [**string[]**](../Model/string.md)| Comma-separated list of values to match against |
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccountList**](../Model/ResponseOfNamedAccountList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeNamedAccountListMembersUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount removeNamedAccountListMembersUsingPOST($id, $remove_named_account_list_member_request)

Remove Named Account List Members

Removes named account members from a named account list.  Required Permissions: Read-Write Named Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | Id of target named account list
$remove_named_account_list_member_request = new \NecLimDul\MarketoRest\Lead\Model\RemoveNamedAccountListMemberRequest(); // \NecLimDul\MarketoRest\Lead\Model\RemoveNamedAccountListMemberRequest | removeNamedAccountListMemberRequest

try {
    $result = $apiInstance->removeNamedAccountListMembersUsingPOST($id, $remove_named_account_list_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountListsApi->removeNamedAccountListMembersUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| Id of target named account list |
 **remove_named_account_list_member_request** | [**\NecLimDul\MarketoRest\Lead\Model\RemoveNamedAccountListMemberRequest**](../Model/RemoveNamedAccountListMemberRequest.md)| removeNamedAccountListMemberRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount**](../Model/ResponseOfNamedAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncNamedAccountListsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccountList syncNamedAccountListsUsingPOST($sync_named_account_list_request)

Sync Named Account Lists

Creates and/or updates named account list records.  Required Permissions: Read-Write Named Account List

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sync_named_account_list_request = new \NecLimDul\MarketoRest\Lead\Model\SyncNamedAccountListRequest(); // \NecLimDul\MarketoRest\Lead\Model\SyncNamedAccountListRequest | syncNamedAccountListRequest

try {
    $result = $apiInstance->syncNamedAccountListsUsingPOST($sync_named_account_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountListsApi->syncNamedAccountListsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_named_account_list_request** | [**\NecLimDul\MarketoRest\Lead\Model\SyncNamedAccountListRequest**](../Model/SyncNamedAccountListRequest.md)| syncNamedAccountListRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccountList**](../Model/ResponseOfNamedAccountList.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


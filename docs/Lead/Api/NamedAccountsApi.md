# NecLimDul\MarketoRest\Lead\NamedAccountsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteNamedAccountsUsingPOST**](NamedAccountsApi.md#deleteNamedAccountsUsingPOST) | **POST** /rest/v1/namedaccounts/delete.json | Delete NamedAccounts
[**describeUsingGET3**](NamedAccountsApi.md#describeUsingGET3) | **GET** /rest/v1/namedaccounts/describe.json | Describe NamedAccounts
[**getNamedAccountsUsingGET**](NamedAccountsApi.md#getNamedAccountsUsingGET) | **GET** /rest/v1/namedaccounts.json | Get NamedAccounts
[**syncNamedAccountsUsingPOST**](NamedAccountsApi.md#syncNamedAccountsUsingPOST) | **POST** /rest/v1/namedaccounts.json | Sync NamedAccounts


# **deleteNamedAccountsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount deleteNamedAccountsUsingPOST($delete_named_account_request)

Delete NamedAccounts

Deletes a list of namedaccount records from the target instance.  Input records should have only one member, based on the value of 'dedupeBy'.  Required Permissions: Read-Write Named Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_named_account_request = new \NecLimDul\MarketoRest\Lead\Model\DeleteNamedAccountRequest(); // \NecLimDul\MarketoRest\Lead\Model\DeleteNamedAccountRequest | deleteAccountRequest

try {
    $result = $apiInstance->deleteNamedAccountsUsingPOST($delete_named_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountsApi->deleteNamedAccountsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_named_account_request** | [**\NecLimDul\MarketoRest\Lead\Model\DeleteNamedAccountRequest**](../Model/DeleteNamedAccountRequest.md)| deleteAccountRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount**](../Model/ResponseOfNamedAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeUsingGET3**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData describeUsingGET3()

Describe NamedAccounts

Returns metadata about namedaccounts and the fields available for interaction via the API.  Required Permissions: Read-Only Named Account, Read-Write Named Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->describeUsingGET3();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountsApi->describeUsingGET3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData**](../Model/ResponseOfObjectMetaData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getNamedAccountsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount getNamedAccountsUsingGET($filter_type, $filter_values, $fields, $batch_size, $next_page_token)

Get NamedAccounts

Retrieves namedaccount records from the destination instance based on the submitted filter.  Required Permissions: Read-Only Named Account, Read-Write Named Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter_type = 'filter_type_example'; // string | NamedAccounts field to filter on.  Can be any searchable fields
$filter_values = array('filter_values_example'); // string[] | A comma-separated list of values to match against
$fields = array('fields_example'); // string[] | Comma-separated list of fields to include in the response
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = 'next_page_token_example'; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getNamedAccountsUsingGET($filter_type, $filter_values, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountsApi->getNamedAccountsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_type** | **string**| NamedAccounts field to filter on.  Can be any searchable fields |
 **filter_values** | [**string[]**](../Model/string.md)| A comma-separated list of values to match against |
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of fields to include in the response | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount**](../Model/ResponseOfNamedAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncNamedAccountsUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount syncNamedAccountsUsingPOST($sync_named_account_request)

Sync NamedAccounts

Allows inserts, updates, or upserts of namedaccounts to the target instance.  Required Permissions: Read-Write Named Account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\NamedAccountsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sync_named_account_request = new \NecLimDul\MarketoRest\Lead\Model\SyncNamedAccountRequest(); // \NecLimDul\MarketoRest\Lead\Model\SyncNamedAccountRequest | syncAccountRequest

try {
    $result = $apiInstance->syncNamedAccountsUsingPOST($sync_named_account_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NamedAccountsApi->syncNamedAccountsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_named_account_request** | [**\NecLimDul\MarketoRest\Lead\Model\SyncNamedAccountRequest**](../Model/SyncNamedAccountRequest.md)| syncAccountRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfNamedAccount**](../Model/ResponseOfNamedAccount.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


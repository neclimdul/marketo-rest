# NecLimDul\MarketoRest\Asset\FragmentsNewApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneContentUsingPOSTFragment()**](FragmentsNewApi.md#cloneContentUsingPOSTFragment) | **POST** /rest/asset/v2/fragment/clone | Clone Fragment
[**createContentUsingPOSTFragment()**](FragmentsNewApi.md#createContentUsingPOSTFragment) | **POST** /rest/asset/v2/fragment | Create Fragment
[**deleteContentUsingPOSTFragment()**](FragmentsNewApi.md#deleteContentUsingPOSTFragment) | **POST** /rest/asset/v2/fragment/{id}/delete | Delete Fragment
[**filterContentUsingGETFragment()**](FragmentsNewApi.md#filterContentUsingGETFragment) | **GET** /rest/asset/v2/fragment/filter | List Fragments
[**getContentUsedByUsingPOSTFragment()**](FragmentsNewApi.md#getContentUsedByUsingPOSTFragment) | **POST** /rest/asset/v2/fragment/usedby | Get Fragment Used By
[**getContentUsingGETFragment()**](FragmentsNewApi.md#getContentUsingGETFragment) | **GET** /rest/asset/v2/fragment/{id} | Get Fragment by Id
[**stateTransitionUsingPOSTFragment()**](FragmentsNewApi.md#stateTransitionUsingPOSTFragment) | **POST** /rest/asset/v2/fragment/state/transition | Update Fragment Status
[**updateContentUsingPOSTFragment()**](FragmentsNewApi.md#updateContentUsingPOSTFragment) | **POST** /rest/asset/v2/fragment/{id}/update | Update Fragment


## `cloneContentUsingPOSTFragment()`

```php
cloneContentUsingPOSTFragment($access_token, $x_app_type, $clone_asset_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Clone Fragment

Clones an existing fragment. Required Permissions: Read-Write Assets, Access Design Studio, Edit Snippet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FragmentsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$clone_asset_request = new \NecLimDul\MarketoRest\Asset\Model\CloneAssetRequest(); // \NecLimDul\MarketoRest\Asset\Model\CloneAssetRequest | cloneAssetRequest

try {
    $result = $apiInstance->cloneContentUsingPOSTFragment($access_token, $x_app_type, $clone_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FragmentsNewApi->cloneContentUsingPOSTFragment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **clone_asset_request** | [**\NecLimDul\MarketoRest\Asset\Model\CloneAssetRequest**](../Model/CloneAssetRequest.md)| cloneAssetRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createContentUsingPOSTFragment()`

```php
createContentUsingPOSTFragment($access_token, $x_app_type, $create_fragment_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Create Fragment

Creates a new fragment. Required Permissions: Read-Write Assets, Access Design Studio, Edit Snippet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FragmentsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$create_fragment_request = new \NecLimDul\MarketoRest\Asset\Model\CreateFragmentRequest(); // \NecLimDul\MarketoRest\Asset\Model\CreateFragmentRequest | createFragmentRequest

try {
    $result = $apiInstance->createContentUsingPOSTFragment($access_token, $x_app_type, $create_fragment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FragmentsNewApi->createContentUsingPOSTFragment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **create_fragment_request** | [**\NecLimDul\MarketoRest\Asset\Model\CreateFragmentRequest**](../Model/CreateFragmentRequest.md)| createFragmentRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteContentUsingPOSTFragment()`

```php
deleteContentUsingPOSTFragment($access_token, $x_app_type, $id): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Delete Fragment

Deletes a fragment by its ID. Required Permissions: Read-Write Assets, Access Design Studio, Delete Snippet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FragmentsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->deleteContentUsingPOSTFragment($access_token, $x_app_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FragmentsNewApi->deleteContentUsingPOSTFragment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **id** | **string**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `filterContentUsingGETFragment()`

```php
filterContentUsingGETFragment($access_token, $x_app_type, $workspace_id, $folder_id, $folder_ids, $status, $page_index, $page_size, $created_by, $created_at_end, $created_at_start, $modified_by, $modified_at_start, $modified_at_end, $name, $fragment_type, $sort_key, $sort_order, $is_created_by_me, $is_modified_by_me, $script_engine, $is_value_non_nullable, $include_archived): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

List Fragments

Filters and lists fragments by the given criteria. Required Permissions: Read-Only Assets, Access Design Studio, Access Snippet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FragmentsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$workspace_id = 'workspace_id_example'; // string
$folder_id = 'folder_id_example'; // string
$folder_ids = array('folder_ids_example'); // string[]
$status = array('status_example'); // string[]
$page_index = 56; // int
$page_size = 56; // int
$created_by = 'created_by_example'; // string
$created_at_end = 'created_at_end_example'; // string
$created_at_start = 'created_at_start_example'; // string
$modified_by = 'modified_by_example'; // string
$modified_at_start = 'modified_at_start_example'; // string
$modified_at_end = 'modified_at_end_example'; // string
$name = 'name_example'; // string
$fragment_type = 'fragment_type_example'; // string
$sort_key = 'sort_key_example'; // string
$sort_order = 'sort_order_example'; // string
$is_created_by_me = True; // bool
$is_modified_by_me = True; // bool
$script_engine = 'script_engine_example'; // string
$is_value_non_nullable = 'is_value_non_nullable_example'; // string
$include_archived = True; // bool

try {
    $result = $apiInstance->filterContentUsingGETFragment($access_token, $x_app_type, $workspace_id, $folder_id, $folder_ids, $status, $page_index, $page_size, $created_by, $created_at_end, $created_at_start, $modified_by, $modified_at_start, $modified_at_end, $name, $fragment_type, $sort_key, $sort_order, $is_created_by_me, $is_modified_by_me, $script_engine, $is_value_non_nullable, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FragmentsNewApi->filterContentUsingGETFragment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **workspace_id** | **string**|  |
 **folder_id** | **string**|  | [optional]
 **folder_ids** | [**string[]**](../Model/string.md)|  | [optional]
 **status** | [**string[]**](../Model/string.md)|  | [optional]
 **page_index** | **int**|  | [optional]
 **page_size** | **int**|  | [optional]
 **created_by** | **string**|  | [optional]
 **created_at_end** | **string**|  | [optional]
 **created_at_start** | **string**|  | [optional]
 **modified_by** | **string**|  | [optional]
 **modified_at_start** | **string**|  | [optional]
 **modified_at_end** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **fragment_type** | **string**|  | [optional]
 **sort_key** | **string**|  | [optional]
 **sort_order** | **string**|  | [optional]
 **is_created_by_me** | **bool**|  | [optional]
 **is_modified_by_me** | **bool**|  | [optional]
 **script_engine** | **string**|  | [optional]
 **is_value_non_nullable** | **string**|  | [optional]
 **include_archived** | **bool**|  | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContentUsedByUsingPOSTFragment()`

```php
getContentUsedByUsingPOSTFragment($access_token, $x_app_type, $used_by_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Get Fragment Used By

Returns a list of assets that reference the specified fragment. Required Permissions: Read-Only Assets, Access Design Studio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FragmentsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$used_by_request = new \NecLimDul\MarketoRest\Asset\Model\UsedByRequestDto(); // \NecLimDul\MarketoRest\Asset\Model\UsedByRequestDto | usedByRequest

try {
    $result = $apiInstance->getContentUsedByUsingPOSTFragment($access_token, $x_app_type, $used_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FragmentsNewApi->getContentUsedByUsingPOSTFragment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **used_by_request** | [**\NecLimDul\MarketoRest\Asset\Model\UsedByRequestDto**](../Model/UsedByRequestDto.md)| usedByRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContentUsingGETFragment()`

```php
getContentUsingGETFragment($access_token, $x_app_type, $id): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Get Fragment by Id

Retrieves a fragment by its ID. Required Permissions: Read-Only Assets, Access Design Studio, Access Snippet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FragmentsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->getContentUsingGETFragment($access_token, $x_app_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FragmentsNewApi->getContentUsingGETFragment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **id** | **string**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stateTransitionUsingPOSTFragment()`

```php
stateTransitionUsingPOSTFragment($access_token, $x_app_type, $state_transition_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Update Fragment Status

Performs a state transition on a fragment. Required Permissions: Read-Write Assets, Access Design Studio, Approve Snippet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FragmentsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$state_transition_request = new \NecLimDul\MarketoRest\Asset\Model\StateTransitionRequest(); // \NecLimDul\MarketoRest\Asset\Model\StateTransitionRequest | stateTransitionRequest

try {
    $result = $apiInstance->stateTransitionUsingPOSTFragment($access_token, $x_app_type, $state_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FragmentsNewApi->stateTransitionUsingPOSTFragment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **state_transition_request** | [**\NecLimDul\MarketoRest\Asset\Model\StateTransitionRequest**](../Model/StateTransitionRequest.md)| stateTransitionRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContentUsingPOSTFragment()`

```php
updateContentUsingPOSTFragment($access_token, $x_app_type, $id, $update_fragment_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Update Fragment

Updates an existing fragment. Required Permissions: Read-Write Assets, Access Design Studio, Edit Snippet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FragmentsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$id = 'id_example'; // string | id
$update_fragment_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateFragmentRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateFragmentRequest | updateFragmentRequest

try {
    $result = $apiInstance->updateContentUsingPOSTFragment($access_token, $x_app_type, $id, $update_fragment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FragmentsNewApi->updateContentUsingPOSTFragment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **id** | **string**| id |
 **update_fragment_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateFragmentRequest**](../Model/UpdateFragmentRequest.md)| updateFragmentRequest | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

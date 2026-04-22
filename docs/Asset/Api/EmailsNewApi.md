# NecLimDul\MarketoRest\Asset\EmailsNewApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneContentUsingPOSTEmail()**](EmailsNewApi.md#cloneContentUsingPOSTEmail) | **POST** /rest/asset/v2/email/clone | Clone Email
[**createContentUsingPOSTEmail()**](EmailsNewApi.md#createContentUsingPOSTEmail) | **POST** /rest/asset/v2/email | Create Email
[**deleteContentUsingPOSTEmail()**](EmailsNewApi.md#deleteContentUsingPOSTEmail) | **POST** /rest/asset/v2/email/{id}/delete | Delete Email
[**filterContentUsingGETEmail()**](EmailsNewApi.md#filterContentUsingGETEmail) | **GET** /rest/asset/v2/email/filter | List Emails
[**getContentUsedByUsingPOSTEmail()**](EmailsNewApi.md#getContentUsedByUsingPOSTEmail) | **POST** /rest/asset/v2/email/usedby | Get Email Used By
[**getContentUsingGETEmail()**](EmailsNewApi.md#getContentUsingGETEmail) | **GET** /rest/asset/v2/email/{id} | Get Email by Id
[**stateTransitionUsingPOSTEmail()**](EmailsNewApi.md#stateTransitionUsingPOSTEmail) | **POST** /rest/asset/v2/email/state/transition | Update Email Status
[**updateContentUsingPOSTEmail()**](EmailsNewApi.md#updateContentUsingPOSTEmail) | **POST** /rest/asset/v2/email/{id}/update | Update Email


## `cloneContentUsingPOSTEmail()`

```php
cloneContentUsingPOSTEmail($access_token, $x_app_type, $clone_asset_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Clone Email

Clones an existing email asset. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$clone_asset_request = new \NecLimDul\MarketoRest\Asset\Model\CloneAssetRequest(); // \NecLimDul\MarketoRest\Asset\Model\CloneAssetRequest | cloneAssetRequest

try {
    $result = $apiInstance->cloneContentUsingPOSTEmail($access_token, $x_app_type, $clone_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsNewApi->cloneContentUsingPOSTEmail: ', $e->getMessage(), PHP_EOL;
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

## `createContentUsingPOSTEmail()`

```php
createContentUsingPOSTEmail($access_token, $x_app_type, $create_email_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Create Email

Creates a new email asset. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$create_email_request = new \NecLimDul\MarketoRest\Asset\Model\CreateEmailV2Request(); // \NecLimDul\MarketoRest\Asset\Model\CreateEmailV2Request | createEmailRequest

try {
    $result = $apiInstance->createContentUsingPOSTEmail($access_token, $x_app_type, $create_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsNewApi->createContentUsingPOSTEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **create_email_request** | [**\NecLimDul\MarketoRest\Asset\Model\CreateEmailV2Request**](../Model/CreateEmailV2Request.md)| createEmailRequest |

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

## `deleteContentUsingPOSTEmail()`

```php
deleteContentUsingPOSTEmail($access_token, $x_app_type, $id): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Delete Email

Deletes an email asset by its ID. Required Permissions: Read-Write Assets, Access Design Studio, Delete Email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->deleteContentUsingPOSTEmail($access_token, $x_app_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsNewApi->deleteContentUsingPOSTEmail: ', $e->getMessage(), PHP_EOL;
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

## `filterContentUsingGETEmail()`

```php
filterContentUsingGETEmail($access_token, $x_app_type, $workspace_id, $folder_id, $folder_ids, $status, $page_index, $page_size, $created_by, $created_at_end, $created_at_start, $modified_by, $modified_at_start, $modified_at_end, $name, $sort_key, $sort_order, $is_created_by_me, $is_modified_by_me, $template_id, $script_engine, $is_value_non_nullable, $include_archived): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

List Emails

Filters and lists email assets by the given criteria. Required Permissions: Read-Only Assets, Access Design Studio, Access Email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsNewApi(
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
$sort_key = 'sort_key_example'; // string
$sort_order = 'sort_order_example'; // string
$is_created_by_me = True; // bool
$is_modified_by_me = True; // bool
$template_id = 'template_id_example'; // string
$script_engine = 'script_engine_example'; // string
$is_value_non_nullable = 'is_value_non_nullable_example'; // string
$include_archived = True; // bool

try {
    $result = $apiInstance->filterContentUsingGETEmail($access_token, $x_app_type, $workspace_id, $folder_id, $folder_ids, $status, $page_index, $page_size, $created_by, $created_at_end, $created_at_start, $modified_by, $modified_at_start, $modified_at_end, $name, $sort_key, $sort_order, $is_created_by_me, $is_modified_by_me, $template_id, $script_engine, $is_value_non_nullable, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsNewApi->filterContentUsingGETEmail: ', $e->getMessage(), PHP_EOL;
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
 **sort_key** | **string**|  | [optional]
 **sort_order** | **string**|  | [optional]
 **is_created_by_me** | **bool**|  | [optional]
 **is_modified_by_me** | **bool**|  | [optional]
 **template_id** | **string**|  | [optional]
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

## `getContentUsedByUsingPOSTEmail()`

```php
getContentUsedByUsingPOSTEmail($access_token, $x_app_type, $used_by_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Get Email Used By

Returns a list of assets that reference the specified email. Required Permissions: Read-Only Assets, Access Design Studio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$used_by_request = new \NecLimDul\MarketoRest\Asset\Model\UsedByRequestDto(); // \NecLimDul\MarketoRest\Asset\Model\UsedByRequestDto | usedByRequest

try {
    $result = $apiInstance->getContentUsedByUsingPOSTEmail($access_token, $x_app_type, $used_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsNewApi->getContentUsedByUsingPOSTEmail: ', $e->getMessage(), PHP_EOL;
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

## `getContentUsingGETEmail()`

```php
getContentUsingGETEmail($access_token, $x_app_type, $id): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Get Email by Id

Retrieves an email asset by its ID. Required Permissions: Read-Only Assets, Access Design Studio, Access Email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->getContentUsingGETEmail($access_token, $x_app_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsNewApi->getContentUsingGETEmail: ', $e->getMessage(), PHP_EOL;
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

## `stateTransitionUsingPOSTEmail()`

```php
stateTransitionUsingPOSTEmail($access_token, $x_app_type, $state_transition_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Update Email Status

Performs a state transition on an email. Required Permissions: Read-Write Assets, Access Design Studio, Approve Email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$state_transition_request = new \NecLimDul\MarketoRest\Asset\Model\StateTransitionRequest(); // \NecLimDul\MarketoRest\Asset\Model\StateTransitionRequest | stateTransitionRequest

try {
    $result = $apiInstance->stateTransitionUsingPOSTEmail($access_token, $x_app_type, $state_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsNewApi->stateTransitionUsingPOSTEmail: ', $e->getMessage(), PHP_EOL;
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

## `updateContentUsingPOSTEmail()`

```php
updateContentUsingPOSTEmail($access_token, $x_app_type, $id, $update_email_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Update Email

Updates an existing email asset. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$id = 'id_example'; // string | id
$update_email_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateEmailRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateEmailRequest | updateEmailRequest

try {
    $result = $apiInstance->updateContentUsingPOSTEmail($access_token, $x_app_type, $id, $update_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsNewApi->updateContentUsingPOSTEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **id** | **string**| id |
 **update_email_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateEmailRequest**](../Model/UpdateEmailRequest.md)| updateEmailRequest | [optional]

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

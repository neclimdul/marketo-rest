# NecLimDul\MarketoRest\Asset\EmailTemplatesNewApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneContentUsingPOSTEmailtemplate()**](EmailTemplatesNewApi.md#cloneContentUsingPOSTEmailtemplate) | **POST** /rest/asset/v2/emailtemplate/clone | Clone Email Template
[**createContentUsingPOSTEmailtemplate()**](EmailTemplatesNewApi.md#createContentUsingPOSTEmailtemplate) | **POST** /rest/asset/v2/emailtemplate | Create Email Template
[**deleteContentUsingPOSTEmailtemplate()**](EmailTemplatesNewApi.md#deleteContentUsingPOSTEmailtemplate) | **POST** /rest/asset/v2/emailtemplate/{id}/delete | Delete Email Template
[**filterContentUsingGETEmailtemplate()**](EmailTemplatesNewApi.md#filterContentUsingGETEmailtemplate) | **GET** /rest/asset/v2/emailtemplate/filter | List Email Templates
[**getContentUsedByUsingPOSTEmailtemplate()**](EmailTemplatesNewApi.md#getContentUsedByUsingPOSTEmailtemplate) | **POST** /rest/asset/v2/emailtemplate/usedby | Get Email Template Used By
[**getContentUsingGETEmailtemplate()**](EmailTemplatesNewApi.md#getContentUsingGETEmailtemplate) | **GET** /rest/asset/v2/emailtemplate/{id} | Get Email Template by Id
[**stateTransitionUsingPOSTEmailtemplate()**](EmailTemplatesNewApi.md#stateTransitionUsingPOSTEmailtemplate) | **POST** /rest/asset/v2/emailtemplate/state/transition | Update Email Template Status
[**updateContentUsingPOSTEmailtemplate()**](EmailTemplatesNewApi.md#updateContentUsingPOSTEmailtemplate) | **POST** /rest/asset/v2/emailtemplate/{id}/update | Update Email Template


## `cloneContentUsingPOSTEmailtemplate()`

```php
cloneContentUsingPOSTEmailtemplate($access_token, $x_app_type, $clone_asset_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Clone Email Template

Clones an existing email template. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$clone_asset_request = new \NecLimDul\MarketoRest\Asset\Model\CloneAssetRequest(); // \NecLimDul\MarketoRest\Asset\Model\CloneAssetRequest | cloneAssetRequest

try {
    $result = $apiInstance->cloneContentUsingPOSTEmailtemplate($access_token, $x_app_type, $clone_asset_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesNewApi->cloneContentUsingPOSTEmailtemplate: ', $e->getMessage(), PHP_EOL;
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

## `createContentUsingPOSTEmailtemplate()`

```php
createContentUsingPOSTEmailtemplate($access_token, $x_app_type, $create_email_template_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Create Email Template

Creates a new email template. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$create_email_template_request = new \NecLimDul\MarketoRest\Asset\Model\CreateEmailTemplateV2Request(); // \NecLimDul\MarketoRest\Asset\Model\CreateEmailTemplateV2Request | createEmailTemplateRequest

try {
    $result = $apiInstance->createContentUsingPOSTEmailtemplate($access_token, $x_app_type, $create_email_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesNewApi->createContentUsingPOSTEmailtemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **create_email_template_request** | [**\NecLimDul\MarketoRest\Asset\Model\CreateEmailTemplateV2Request**](../Model/CreateEmailTemplateV2Request.md)| createEmailTemplateRequest |

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

## `deleteContentUsingPOSTEmailtemplate()`

```php
deleteContentUsingPOSTEmailtemplate($access_token, $x_app_type, $id): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Delete Email Template

Deletes an email template by its ID. Required Permissions: Read-Write Assets, Access Design Studio, Delete Email Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->deleteContentUsingPOSTEmailtemplate($access_token, $x_app_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesNewApi->deleteContentUsingPOSTEmailtemplate: ', $e->getMessage(), PHP_EOL;
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

## `filterContentUsingGETEmailtemplate()`

```php
filterContentUsingGETEmailtemplate($access_token, $x_app_type, $workspace_id, $folder_id, $folder_ids, $status, $page_index, $page_size, $created_by, $created_at_end, $created_at_start, $modified_by, $modified_at_start, $modified_at_end, $name, $sort_key, $sort_order, $is_created_by_me, $is_modified_by_me, $script_engine, $is_value_non_nullable, $include_archived): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

List Email Templates

Filters and lists email templates by the given criteria. Required Permissions: Read-Only Assets, Access Design Studio, Access Email Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesNewApi(
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
$script_engine = 'script_engine_example'; // string
$is_value_non_nullable = 'is_value_non_nullable_example'; // string
$include_archived = True; // bool

try {
    $result = $apiInstance->filterContentUsingGETEmailtemplate($access_token, $x_app_type, $workspace_id, $folder_id, $folder_ids, $status, $page_index, $page_size, $created_by, $created_at_end, $created_at_start, $modified_by, $modified_at_start, $modified_at_end, $name, $sort_key, $sort_order, $is_created_by_me, $is_modified_by_me, $script_engine, $is_value_non_nullable, $include_archived);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesNewApi->filterContentUsingGETEmailtemplate: ', $e->getMessage(), PHP_EOL;
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

## `getContentUsedByUsingPOSTEmailtemplate()`

```php
getContentUsedByUsingPOSTEmailtemplate($access_token, $x_app_type, $used_by_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Get Email Template Used By

Returns a list of assets that reference the specified email template. Required Permissions: Read-Only Assets, Access Design Studio.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$used_by_request = new \NecLimDul\MarketoRest\Asset\Model\UsedByRequestDto(); // \NecLimDul\MarketoRest\Asset\Model\UsedByRequestDto | usedByRequest

try {
    $result = $apiInstance->getContentUsedByUsingPOSTEmailtemplate($access_token, $x_app_type, $used_by_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesNewApi->getContentUsedByUsingPOSTEmailtemplate: ', $e->getMessage(), PHP_EOL;
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

## `getContentUsingGETEmailtemplate()`

```php
getContentUsingGETEmailtemplate($access_token, $x_app_type, $id): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Get Email Template by Id

Retrieves an email template by its ID. Required Permissions: Read-Only Assets, Access Design Studio, Access Email Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$id = 'id_example'; // string | id

try {
    $result = $apiInstance->getContentUsingGETEmailtemplate($access_token, $x_app_type, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesNewApi->getContentUsingGETEmailtemplate: ', $e->getMessage(), PHP_EOL;
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

## `stateTransitionUsingPOSTEmailtemplate()`

```php
stateTransitionUsingPOSTEmailtemplate($access_token, $x_app_type, $state_transition_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Update Email Template Status

Performs a state transition on an email template. Required Permissions: Read-Write Assets, Access Design Studio, Approve Email Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$state_transition_request = new \NecLimDul\MarketoRest\Asset\Model\StateTransitionRequest(); // \NecLimDul\MarketoRest\Asset\Model\StateTransitionRequest | stateTransitionRequest

try {
    $result = $apiInstance->stateTransitionUsingPOSTEmailtemplate($access_token, $x_app_type, $state_transition_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesNewApi->stateTransitionUsingPOSTEmailtemplate: ', $e->getMessage(), PHP_EOL;
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

## `updateContentUsingPOSTEmailtemplate()`

```php
updateContentUsingPOSTEmailtemplate($access_token, $x_app_type, $id, $update_email_template_request): \NecLimDul\MarketoRest\Asset\Model\ApiResponse
```

Update Email Template

Updates an existing email template. Required Permissions: Read-Write Assets, Access Design Studio, Edit Email Template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesNewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$access_token = 'access_token_example'; // string | Token for Authorization
$x_app_type = 'x_app_type_example'; // string | Application type header
$id = 'id_example'; // string | id
$update_email_template_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateEmailTemplateRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateEmailTemplateRequest | updateEmailTemplateRequest

try {
    $result = $apiInstance->updateContentUsingPOSTEmailtemplate($access_token, $x_app_type, $id, $update_email_template_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesNewApi->updateContentUsingPOSTEmailtemplate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **access_token** | **string**| Token for Authorization |
 **x_app_type** | **string**| Application type header |
 **id** | **string**| id |
 **update_email_template_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateEmailTemplateRequest**](../Model/UpdateEmailTemplateRequest.md)| updateEmailTemplateRequest | [optional]

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

# NecLimDul\MarketoRest\Asset\SnippetsApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveSnippetUsingPOST()**](SnippetsApi.md#approveSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/approveDraft.json | Approve Snippet Draft
[**cloneSnippetUsingPOST()**](SnippetsApi.md#cloneSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/clone.json | Clone Snippet
[**createSnippetUsingPOST()**](SnippetsApi.md#createSnippetUsingPOST) | **POST** /rest/asset/v1/snippets.json | Create Snippet
[**deleteSnippetUsingPOST()**](SnippetsApi.md#deleteSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/delete.json | Delete Snippet
[**discardSnippetUsingPOST()**](SnippetsApi.md#discardSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/discardDraft.json | Discard Snippet Draft
[**getDynamicContentUsingGET()**](SnippetsApi.md#getDynamicContentUsingGET) | **GET** /rest/asset/v1/snippet/{id}/dynamicContent.json | Get Dynamic Content
[**getSnippetByIdUsingGET()**](SnippetsApi.md#getSnippetByIdUsingGET) | **GET** /rest/asset/v1/snippet/{id}.json | Get Snippet by Id
[**getSnippetContentByIdUsingGET()**](SnippetsApi.md#getSnippetContentByIdUsingGET) | **GET** /rest/asset/v1/snippet/{id}/content.json | Get Snippet Content
[**getSnippetUsingGET()**](SnippetsApi.md#getSnippetUsingGET) | **GET** /rest/asset/v1/snippets.json | Get Snippets
[**unapproveSnippetUsingPOST()**](SnippetsApi.md#unapproveSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/unapprove.json | Unapprove Snippet
[**updateContentUsingPOST1()**](SnippetsApi.md#updateContentUsingPOST1) | **POST** /rest/asset/v1/snippet/{id}/content.json | Update Snippet Content
[**updateDynamicContentUsingPOST()**](SnippetsApi.md#updateDynamicContentUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/dynamicContent/{segmentId}.json | Update Snippet Dynamic Content
[**updateSnippetUsingPOST()**](SnippetsApi.md#updateSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}.json | Update Snippet Metadata


## `approveSnippetUsingPOST()`

```php
approveSnippetUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse
```

Approve Snippet Draft

Approves the current draft of the snippet.  Required Permissions: Approve Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->approveSnippetUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->approveSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneSnippetUsingPOST()`

```php
cloneSnippetUsingPOST($id, $name, $folder, $description): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse
```

Clone Snippet

Clones the target snippet.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$name = 'name_example'; // string | Name for the cloned snippet
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$description = 'description_example'; // string | Description of the cloned snippet

try {
    $result = $apiInstance->cloneSnippetUsingPOST($id, $name, $folder, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->cloneSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **name** | **string**| Name for the cloned snippet |
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **description** | **string**| Description of the cloned snippet | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSnippetUsingPOST()`

```php
createSnippetUsingPOST($folder, $name, $description): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse
```

Create Snippet

Creates a new snippet.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$name = 'name_example'; // string | Name of the snippet
$description = 'description_example'; // string | Description of the snippet

try {
    $result = $apiInstance->createSnippetUsingPOST($folder, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->createSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the snippet |
 **description** | **string**| Description of the snippet | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSnippetUsingPOST()`

```php
deleteSnippetUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Delete Snippet

Deletes the target snippet.  The snippet may not be in use by emails or landing pages.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->deleteSnippetUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->deleteSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discardSnippetUsingPOST()`

```php
discardSnippetUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Discard Snippet Draft

Discards the current draft of the snippet.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->discardSnippetUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->discardSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDynamicContentUsingGET()`

```php
getDynamicContentUsingGET($id, $status): object
```

Get Dynamic Content

Gets the list of dynamic content sections for the snippet.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getDynamicContentUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getDynamicContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSnippetByIdUsingGET()`

```php
getSnippetByIdUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse
```

Get Snippet by Id

Retrieves the target snippet record.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getSnippetByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getSnippetByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSnippetContentByIdUsingGET()`

```php
getSnippetContentByIdUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetContentResponse
```

Get Snippet Content

Retrieves the content of the target snippet.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getSnippetContentByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getSnippetContentByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetContentResponse**](../Model/ResponseOfSnippetContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSnippetUsingGET()`

```php
getSnippetUsingGET($status, $max_return, $offset): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse
```

Get Snippets

Retrieves a list of accessible snippets from the target instance.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = 'status_example'; // string | Status filter for draft or approved versions
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getSnippetUsingGET($status, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getSnippetUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unapproveSnippetUsingPOST()`

```php
unapproveSnippetUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse
```

Unapprove Snippet

Unapproves the current version of the snippet.  The snippet may not be in use.  The snippet will be reverted to a draft-only state.  Required Permissions: Approve Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->unapproveSnippetUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->unapproveSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateContentUsingPOST1()`

```php
updateContentUsingPOST1($id, $content, $type): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Update Snippet Content

Updates the content of the target snippet.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$content = 'content_example'; // string | Content of the snippet
$type = 'type_example'; // string | Type of snippet content

try {
    $result = $apiInstance->updateContentUsingPOST1($id, $content, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->updateContentUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **content** | **string**| Content of the snippet |
 **type** | **string**| Type of snippet content |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDynamicContentUsingPOST()`

```php
updateDynamicContentUsingPOST($id, $segment_id, $type, $value): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Update Snippet Dynamic Content

Updates the target dynamic content section.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$segment_id = 56; // int | segmentId
$type = 'type_example'; // string | Type of dynamic content section
$value = 'value_example'; // string | Value of the dynamic content section

try {
    $result = $apiInstance->updateDynamicContentUsingPOST($id, $segment_id, $type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->updateDynamicContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **segment_id** | **int**| segmentId |
 **type** | **string**| Type of dynamic content section | [optional]
 **value** | **string**| Value of the dynamic content section | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSnippetUsingPOST()`

```php
updateSnippetUsingPOST($id, $description, $is_archive, $name): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse
```

Update Snippet Metadata

Updates the metadata of the snippet.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SnippetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$description = 'description_example'; // string | Description of the snippet
$is_archive = 'is_archive_example'; // string | Archival status of the snippet
$name = 'name_example'; // string | Name of the snippet

try {
    $result = $apiInstance->updateSnippetUsingPOST($id, $description, $is_archive, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->updateSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **description** | **string**| Description of the snippet | [optional]
 **is_archive** | **string**| Archival status of the snippet | [optional]
 **name** | **string**| Name of the snippet | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# NecLimDul\MarketoRest\Asset\SnippetsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveSnippetUsingPOST**](SnippetsApi.md#approveSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/approveDraft.json | Approve Snippet Draft
[**cloneSnippetUsingPOST**](SnippetsApi.md#cloneSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/clone.json | Clone Snippet
[**createSnippetUsingPOST**](SnippetsApi.md#createSnippetUsingPOST) | **POST** /rest/asset/v1/snippets.json | Create Snippet
[**deleteSnippetUsingPOST**](SnippetsApi.md#deleteSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/delete.json | Delete Snippet
[**discardSnippetUsingPOST**](SnippetsApi.md#discardSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/discardDraft.json | Discard Snippet Draft
[**getDynamicContentUsingGET**](SnippetsApi.md#getDynamicContentUsingGET) | **GET** /rest/asset/v1/snippet/{id}/dynamicContent.json | Get Dynamic Content
[**getSnippetByIdUsingGET**](SnippetsApi.md#getSnippetByIdUsingGET) | **GET** /rest/asset/v1/snippet/{id}.json | Get Snippet by Id
[**getSnippetContentByIdUsingGET**](SnippetsApi.md#getSnippetContentByIdUsingGET) | **GET** /rest/asset/v1/snippet/{id}/content.json | Get Snippet Content
[**getSnippetUsingGET**](SnippetsApi.md#getSnippetUsingGET) | **GET** /rest/asset/v1/snippets.json | Get Snippets
[**unapproveSnippetUsingPOST**](SnippetsApi.md#unapproveSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/unapprove.json | Unapprove Snippet
[**updateContentUsingPOST1**](SnippetsApi.md#updateContentUsingPOST1) | **POST** /rest/asset/v1/snippet/{id}/content.json | Update Snippet Content
[**updateDynamicContentUsingPOST**](SnippetsApi.md#updateDynamicContentUsingPOST) | **POST** /rest/asset/v1/snippet/{id}/dynamicContent/{segmentId}.json | Update Snippet Dynamic Content
[**updateSnippetUsingPOST**](SnippetsApi.md#updateSnippetUsingPOST) | **POST** /rest/asset/v1/snippet/{id}.json | Update Snippet Metadata


# **approveSnippetUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse approveSnippetUsingPOST($id)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneSnippetUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse cloneSnippetUsingPOST($id, $clone_snippet_request)

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
$clone_snippet_request = new \NecLimDul\MarketoRest\Asset\Model\CloneSnippetRequest(); // \NecLimDul\MarketoRest\Asset\Model\CloneSnippetRequest | cloneSnippetRequest

try {
    $result = $apiInstance->cloneSnippetUsingPOST($id, $clone_snippet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->cloneSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_snippet_request** | [**\NecLimDul\MarketoRest\Asset\Model\CloneSnippetRequest**](../Model/CloneSnippetRequest.md)| cloneSnippetRequest | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSnippetUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse createSnippetUsingPOST($create_snippet_request)

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
$create_snippet_request = new \NecLimDul\MarketoRest\Asset\Model\CreateSnippetRequest(); // \NecLimDul\MarketoRest\Asset\Model\CreateSnippetRequest | createSnippetRequest

try {
    $result = $apiInstance->createSnippetUsingPOST($create_snippet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->createSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_snippet_request** | [**\NecLimDul\MarketoRest\Asset\Model\CreateSnippetRequest**](../Model/CreateSnippetRequest.md)| createSnippetRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSnippetUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteSnippetUsingPOST($id)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discardSnippetUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse discardSnippetUsingPOST($id)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDynamicContentUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ModelResponse getDynamicContentUsingGET($id, $status)

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
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getDynamicContentUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getDynamicContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ModelResponse**](../Model/ModelResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippetByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse getSnippetByIdUsingGET($id, $status)

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
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getSnippetByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getSnippetByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippetContentByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetContentResponse getSnippetContentByIdUsingGET($id, $status)

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
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getSnippetContentByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getSnippetContentByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSnippetUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse getSnippetUsingGET($status, $max_return, $offset)

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
$status = "status_example"; // string | Status filter for draft or approved versions
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getSnippetUsingGET($status, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->getSnippetUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveSnippetUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse unapproveSnippetUsingPOST($id)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateContentUsingPOST1**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse updateContentUsingPOST1($id, $content, $type)

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
$content = "content_example"; // string | Content of the snippet
$type = "type_example"; // string | Type of snippet content

try {
    $result = $apiInstance->updateContentUsingPOST1($id, $content, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->updateContentUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDynamicContentUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse updateDynamicContentUsingPOST($id, $segment_id, $request)

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
$request = new \NecLimDul\MarketoRest\Asset\Model\UpdateSnippetDynamicContentRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateSnippetDynamicContentRequest | request

try {
    $result = $apiInstance->updateDynamicContentUsingPOST($id, $segment_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->updateDynamicContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **segment_id** | **int**| segmentId |
 **request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateSnippetDynamicContentRequest**](../Model/UpdateSnippetDynamicContentRequest.md)| request |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSnippetUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse updateSnippetUsingPOST($id, $update_snippet_request)

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
$update_snippet_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateSnippetRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateSnippetRequest | updateSnippetRequest

try {
    $result = $apiInstance->updateSnippetUsingPOST($id, $update_snippet_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SnippetsApi->updateSnippetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_snippet_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateSnippetRequest**](../Model/UpdateSnippetRequest.md)| updateSnippetRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSnippetResponse**](../Model/ResponseOfSnippetResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# NecLimDul\MarketoRest\Asset\StaticListsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createStaticListUsingPOST**](StaticListsApi.md#createStaticListUsingPOST) | **POST** /rest/asset/v1/staticLists.json | Create Static List
[**deleteStaticListByIdUsingPOST**](StaticListsApi.md#deleteStaticListByIdUsingPOST) | **POST** /rest/asset/v1/staticList/{id}/delete.json | Delete Static List
[**getStaticListByIdUsingGET**](StaticListsApi.md#getStaticListByIdUsingGET) | **GET** /rest/asset/v1/staticList/{id}.json | Get Static List by Id
[**getStaticListByNameUsingGET**](StaticListsApi.md#getStaticListByNameUsingGET) | **GET** /rest/asset/v1/staticList/byName.json | Get Static List by Name
[**getStaticListsUsingGET**](StaticListsApi.md#getStaticListsUsingGET) | **GET** /rest/asset/v1/staticLists.json | Get Static Lists
[**updateStaticListUsingPOST**](StaticListsApi.md#updateStaticListUsingPOST) | **POST** /rest/asset/v1/staticList/{id}.json | Update Static List Metadata


# **createStaticListUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse createStaticListUsingPOST($create_static_list_request)

Create Static List

Creates a new Static List.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_static_list_request = new \NecLimDul\MarketoRest\Asset\Model\CreateStaticListRequest(); // \NecLimDul\MarketoRest\Asset\Model\CreateStaticListRequest | createStaticListRequest

try {
    $result = $apiInstance->createStaticListUsingPOST($create_static_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->createStaticListUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_static_list_request** | [**\NecLimDul\MarketoRest\Asset\Model\CreateStaticListRequest**](../Model/CreateStaticListRequest.md)| createStaticListRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse**](../Model/ResponseOfStaticListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteStaticListByIdUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteStaticListByIdUsingPOST($id)

Delete Static List

Deletes the designated Static List. Required Permissions: Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Id of the static list to delete

try {
    $result = $apiInstance->deleteStaticListByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->deleteStaticListByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the static list to delete |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaticListByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse getStaticListByIdUsingGET($id)

Get Static List by Id

Retrieves a Static List record by its id. Required Permissions: Read-Asset or Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Id of the static list to retrieve

try {
    $result = $apiInstance->getStaticListByIdUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->getStaticListByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the static list to retrieve |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse**](../Model/ResponseOfStaticListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaticListByNameUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse getStaticListByNameUsingGET($name)

Get Static List by Name

Retrieves a Static List record by its name. Required Permissions: Read-Asset or Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of static list to retrieve

try {
    $result = $apiInstance->getStaticListByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->getStaticListByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of static list to retrieve |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse**](../Model/ResponseOfStaticListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getStaticListsUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse getStaticListsUsingGET($folder, $offset, $max_return, $earliest_updated_at, $latest_updated_at)

Get Static Lists

Retrieves a list of Static List records. Required Permissions: Read-Asset or Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$offset = 56; // int | Integer offset for paging
$max_return = 56; // int | Maximum number of static lists to return.  Max 200, default 20.
$earliest_updated_at = "earliest_updated_at_example"; // string | Exclude static lists prior to this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$latest_updated_at = "latest_updated_at_example"; // string | Exclude static lists after this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.

try {
    $result = $apiInstance->getStaticListsUsingGET($folder, $offset, $max_return, $earliest_updated_at, $latest_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->getStaticListsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **max_return** | **int**| Maximum number of static lists to return.  Max 200, default 20. | [optional]
 **earliest_updated_at** | **string**| Exclude static lists prior to this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **latest_updated_at** | **string**| Exclude static lists after this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse**](../Model/ResponseOfStaticListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateStaticListUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse updateStaticListUsingPOST($id, $update_static_list_request)

Update Static List Metadata

Updates the metadata of a static list asset.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\StaticListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of static list to update
$update_static_list_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateStaticListRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateStaticListRequest | updateStaticListRequest

try {
    $result = $apiInstance->updateStaticListUsingPOST($id, $update_static_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StaticListsApi->updateStaticListUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of static list to update |
 **update_static_list_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateStaticListRequest**](../Model/UpdateStaticListRequest.md)| updateStaticListRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfStaticListResponse**](../Model/ResponseOfStaticListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


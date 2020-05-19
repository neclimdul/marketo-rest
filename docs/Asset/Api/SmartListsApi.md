# NecLimDul\MarketoRest\Asset\SmartListsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloneSmartListUsingPOST**](SmartListsApi.md#cloneSmartListUsingPOST) | **POST** /rest/asset/v1/smartList/{id}/clone.json | Clone Smart List
[**deleteSmartListByIdUsingPOST**](SmartListsApi.md#deleteSmartListByIdUsingPOST) | **POST** /rest/asset/v1/smartList/{id}/delete.json | Delete Smart List
[**getSmartListByIdUsingGET**](SmartListsApi.md#getSmartListByIdUsingGET) | **GET** /rest/asset/v1/smartList/{id}.json | Get Smart List by Id
[**getSmartListByNameUsingGET**](SmartListsApi.md#getSmartListByNameUsingGET) | **GET** /rest/asset/v1/smartList/byName.json | Get Smart List by Name
[**getSmartListsUsingGET**](SmartListsApi.md#getSmartListsUsingGET) | **GET** /rest/asset/v1/smartLists.json | Get Smart Lists


# **cloneSmartListUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponse cloneSmartListUsingPOST($id, $clone_smart_list_request)

Clone Smart List

Clones the designated Smart List. Required Permissions: Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of smart list to clone
$clone_smart_list_request = new \NecLimDul\MarketoRest\Asset\Model\CloneSmartListRequest(); // \NecLimDul\MarketoRest\Asset\Model\CloneSmartListRequest | cloneSmartListRequest

try {
    $result = $apiInstance->cloneSmartListUsingPOST($id, $clone_smart_list_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsApi->cloneSmartListUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of smart list to clone |
 **clone_smart_list_request** | [**\NecLimDul\MarketoRest\Asset\Model\CloneSmartListRequest**](../Model/CloneSmartListRequest.md)| cloneSmartListRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponse**](../Model/ResponseOfSmartListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSmartListByIdUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteSmartListByIdUsingPOST($id)

Delete Smart List

Deletes the designated Smart List. Required Permissions: Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Id of the smart list to delete

try {
    $result = $apiInstance->deleteSmartListByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsApi->deleteSmartListByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart list to delete |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmartListByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponseWithRules getSmartListByIdUsingGET($id, $include_rules)

Get Smart List by Id

Retrieves a Smart List record by its id. Required Permissions: Read-Asset or Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Id of the smart list to retrieve
$include_rules = true; // bool | Set true to populate smart list rules.  Default false

try {
    $result = $apiInstance->getSmartListByIdUsingGET($id, $include_rules);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsApi->getSmartListByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart list to retrieve |
 **include_rules** | **bool**| Set true to populate smart list rules.  Default false | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponseWithRules**](../Model/ResponseOfSmartListResponseWithRules.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmartListByNameUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponse getSmartListByNameUsingGET($name)

Get Smart List by Name

Retrieves a Smart List record by its name. Required Permissions: Read-Asset or Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of smart list to retrieve

try {
    $result = $apiInstance->getSmartListByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsApi->getSmartListByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of smart list to retrieve |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponse**](../Model/ResponseOfSmartListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmartListsUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponse getSmartListsUsingGET($folder, $offset, $max_return, $earliest_updated_at, $latest_updated_at)

Get Smart Lists

Retrieves a list of user created Smart List records. Required Permissions: Read-Asset or Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartListsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$offset = 56; // int | Integer offset for paging
$max_return = 56; // int | Maximum number of smart lists to return.  Max 200, default 20.
$earliest_updated_at = "earliest_updated_at_example"; // string | Exclude smart lists prior to this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$latest_updated_at = "latest_updated_at_example"; // string | Exclude smart lists after this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.

try {
    $result = $apiInstance->getSmartListsUsingGET($folder, $offset, $max_return, $earliest_updated_at, $latest_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartListsApi->getSmartListsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **max_return** | **int**| Maximum number of smart lists to return.  Max 200, default 20. | [optional]
 **earliest_updated_at** | **string**| Exclude smart lists prior to this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **latest_updated_at** | **string**| Exclude smart lists after this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponse**](../Model/ResponseOfSmartListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


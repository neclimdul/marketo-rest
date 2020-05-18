# MarketoRest\Asset\TagsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTagByNameUsingGET**](TagsApi.md#getTagByNameUsingGET) | **GET** /rest/asset/v1/tagType/byName.json | Get Tag By Name
[**getTagTypesUsingGET**](TagsApi.md#getTagTypesUsingGET) | **GET** /rest/asset/v1/tagTypes.json | Get Tag Types


# **getTagByNameUsingGET**
> \MarketoRest\Asset\Model\ResponseOfTagResponse getTagByNameUsingGET($name)

Get Tag By Name

Retrieves a tag by its name.  This will also return the set of valid values for the tag.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the tag

try {
    $result = $apiInstance->getTagByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the tag |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfTagResponse**](../Model/ResponseOfTagResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTagTypesUsingGET**
> \MarketoRest\Asset\Model\ResponseOfTagResponseGetAll getTagTypesUsingGET($max_return, $offset)

Get Tag Types

Retrieves a list of available tag types.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\TagsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getTagTypesUsingGET($max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TagsApi->getTagTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\MarketoRest\Asset\Model\ResponseOfTagResponseGetAll**](../Model/ResponseOfTagResponseGetAll.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


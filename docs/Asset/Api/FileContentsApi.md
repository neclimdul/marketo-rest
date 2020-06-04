# NecLimDul\MarketoRest\Asset\FileContentsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateContentUsingPOST**](FileContentsApi.md#updateContentUsingPOST) | **POST** /rest/asset/v1/file/{id}/content.json | Update File Content


# **updateContentUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse updateContentUsingPOST($id, $file, $id)

Update File Content

Replaces the current content of the file with the included payload.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FileContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id for file in database
$file = 'file_example'; // string | Multipart file. Content of the file.
$id = 56; // int | Id of the file

try {
    $result = $apiInstance->updateContentUsingPOST($id, $file, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FileContentsApi->updateContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id for file in database |
 **file** | **string**| Multipart file. Content of the file. |
 **id** | **int**| Id of the file |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


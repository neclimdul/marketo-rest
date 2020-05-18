# MarketoRest\Asset\FileContentsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateContentUsingPOST**](FileContentsApi.md#updateContentUsingPOST) | **POST** /rest/asset/v1/file/{id}/content.json | Update File Content


# **updateContentUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfFileResponse updateContentUsingPOST($id, $request)

Update File Content

Replaces the current content of the file with the included payload.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\FileContentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id for file in database
$request = new \MarketoRest\Asset\Model\UpdateFileContentRequest(); // \MarketoRest\Asset\Model\UpdateFileContentRequest | request

try {
    $result = $apiInstance->updateContentUsingPOST($id, $request);
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
 **request** | [**\MarketoRest\Asset\Model\UpdateFileContentRequest**](../Model/UpdateFileContentRequest.md)| request |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


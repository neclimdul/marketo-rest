# NecLimDul\MarketoRest\Asset\FilesApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFileUsingPOST()**](FilesApi.md#createFileUsingPOST) | **POST** /rest/asset/v1/files.json | Create File
[**getFileByIdUsingGET()**](FilesApi.md#getFileByIdUsingGET) | **GET** /rest/asset/v1/file/{id}.json | Get File by Id
[**getFileByNameUsingGET()**](FilesApi.md#getFileByNameUsingGET) | **GET** /rest/asset/v1/file/byName.json | Get File by Name
[**getFilesUsingGET()**](FilesApi.md#getFilesUsingGET) | **GET** /rest/asset/v1/files.json | Get Files


## `createFileUsingPOST()`

```php
createFileUsingPOST($file, $folder, $name, $description, $insert_only): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse
```

Create File

Creates a new file from the included payload. Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$file = 'file_example'; // string | Multipart file.  Content of the file.
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$name = 'name_example'; // string | Name of the File
$description = 'description_example'; // string | Description of the asset
$insert_only = True; // bool | Whether the calls hould fail if there is already an existing file with the same name

try {
    $result = $apiInstance->createFileUsingPOST($file, $folder, $name, $description, $insert_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->createFileUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string**| Multipart file.  Content of the file. |
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the File |
 **description** | **string**| Description of the asset | [optional]
 **insert_only** | **bool**| Whether the calls hould fail if there is already an existing file with the same name | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileByIdUsingGET()`

```php
getFileByIdUsingGET($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse
```

Get File by Id

Returns the file record for the given id.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id for file in database

try {
    $result = $apiInstance->getFileByIdUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id for file in database |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFileByNameUsingGET()`

```php
getFileByNameUsingGET($name): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse
```

Get File by Name

Returns files records for the given name.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the file

try {
    $result = $apiInstance->getFileByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFileByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the file |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFilesUsingGET()`

```php
getFilesUsingGET($get_files_request, $folder): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse
```

Get Files

Returns the files from the given folder. Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$get_files_request = new \NecLimDul\MarketoRest\Asset\Model\GetFilesRequest(); // \NecLimDul\MarketoRest\Asset\Model\GetFilesRequest | getFilesRequest
$folder = 'folder_example'; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $apiInstance->getFilesUsingGET($get_files_request, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->getFilesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **get_files_request** | [**\NecLimDul\MarketoRest\Asset\Model\GetFilesRequest**](../Model/GetFilesRequest.md)| getFilesRequest |
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFileResponse**](../Model/ResponseOfFileResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# NecLimDul\MarketoRest\Asset\FoldersApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFolderUsingPOST()**](FoldersApi.md#createFolderUsingPOST) | **POST** /rest/asset/v1/folders.json | Create Folder
[**deleteFolderUsingPOST()**](FoldersApi.md#deleteFolderUsingPOST) | **POST** /rest/asset/v1/folder/{id}/delete.json | Delete Folder
[**getFolderByIdUsingGET()**](FoldersApi.md#getFolderByIdUsingGET) | **GET** /rest/asset/v1/folder/{id}.json | Get Folder by Id
[**getFolderByNameUsingGET()**](FoldersApi.md#getFolderByNameUsingGET) | **GET** /rest/asset/v1/folder/byName.json | Get Folder by Name
[**getFolderContentUsingGET()**](FoldersApi.md#getFolderContentUsingGET) | **GET** /rest/asset/v1/folder/{id}/content.json | Get Folder Contents
[**getFolderUsingGET()**](FoldersApi.md#getFolderUsingGET) | **GET** /rest/asset/v1/folders.json | Get Folders
[**updateFolderUsingPOST()**](FoldersApi.md#updateFolderUsingPOST) | **POST** /rest/asset/v1/folder/{id}.json | Update Folder Metadata


## `createFolderUsingPOST()`

```php
createFolderUsingPOST($name, $parent, $description): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse
```

Create Folder

Creates a new folder.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the Folder
$parent = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$description = 'description_example'; // string | Description of the asset

try {
    $result = $apiInstance->createFolderUsingPOST($name, $parent, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->createFolderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the Folder |
 **parent** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **description** | **string**| Description of the asset | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFolderUsingPOST()`

```php
deleteFolderUsingPOST($id, $type): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Delete Folder

Deletes the designated folder.  Deletion will fail if the folder has content.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the folder to delete
$type = 'Folder'; // string | type

try {
    $result = $apiInstance->deleteFolderUsingPOST($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->deleteFolderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the folder to delete |
 **type** | **string**| type | [default to &#39;Folder&#39;]

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

## `getFolderByIdUsingGET()`

```php
getFolderByIdUsingGET($id, $type): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse
```

Get Folder by Id

Returns the folder record with the given id.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the folder to retrieve
$type = 'Folder'; // string | Type of folder.  'Folder' or 'Program'

try {
    $result = $apiInstance->getFolderByIdUsingGET($id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the folder to retrieve |
 **type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; | [default to &#39;Folder&#39;]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderByNameUsingGET()`

```php
getFolderByNameUsingGET($name, $type, $root, $work_space): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse
```

Get Folder by Name

Returns a folder record for the given name.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the folder.  Not applicable for Programs
$type = 'type_example'; // string | Type of folder.  'Folder' or 'Program'
$root = 'root_example'; // string | Parent folder reference
$work_space = 'work_space_example'; // string | Name of the workspace

try {
    $result = $apiInstance->getFolderByNameUsingGET($name, $type, $root, $work_space);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the folder.  Not applicable for Programs |
 **type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; | [optional]
 **root** | **string**| Parent folder reference | [optional]
 **work_space** | **string**| Name of the workspace | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderContentUsingGET()`

```php
getFolderContentUsingGET($id, $type, $max_return, $offset): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderContentResponse
```

Get Folder Contents

Returns records for the contents of a given folder.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the folder to retrieve
$type = 'type_example'; // string | Type of folder.  'Folder' or 'Program'.  Default is 'Folder'
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getFolderContentUsingGET($id, $type, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the folder to retrieve |
 **type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39;.  Default is &#39;Folder&#39; |
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderContentResponse**](../Model/ResponseOfFolderContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFolderUsingGET()`

```php
getFolderUsingGET($root, $max_depth, $max_return, $offset, $work_space): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse
```

Get Folders

Retrieves child folders from within a given root folder.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$root = 'root_example'; // string | Parent folder reference
$max_depth = 56; // int | Maximum folder depth to traverse, Default 2
$max_return = 56; // int | Maximum number of folders to return. Default 20, maximum 200
$offset = 56; // int | Integer offset for paging.  Default 0
$work_space = 'work_space_example'; // string | Name of the workspace

try {
    $result = $apiInstance->getFolderUsingGET($root, $max_depth, $max_return, $offset, $work_space);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->getFolderUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **root** | **string**| Parent folder reference | [optional]
 **max_depth** | **int**| Maximum folder depth to traverse, Default 2 | [optional]
 **max_return** | **int**| Maximum number of folders to return. Default 20, maximum 200 | [optional]
 **offset** | **int**| Integer offset for paging.  Default 0 | [optional]
 **work_space** | **string**| Name of the workspace | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFolderUsingPOST()`

```php
updateFolderUsingPOST($id, $type, $description, $is_archive, $name): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse
```

Update Folder Metadata

Updates the metadata for a given folder.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FoldersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the folder to update
$type = 'type_example'; // string | Type of folder.  'Folder' or 'Program'
$description = 'description_example'; // string | Description of the asset
$is_archive = True; // bool | Whether the folder is archived or not.  Toggling this value will change the archival status of the folder
$name = 'name_example'; // string | Name of the Folder

try {
    $result = $apiInstance->updateFolderUsingPOST($id, $type, $description, $is_archive, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FoldersApi->updateFolderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the folder to update |
 **type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; |
 **description** | **string**| Description of the asset | [optional]
 **is_archive** | **bool**| Whether the folder is archived or not.  Toggling this value will change the archival status of the folder | [optional]
 **name** | **string**| Name of the Folder | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFolderResponse**](../Model/ResponseOfFolderResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

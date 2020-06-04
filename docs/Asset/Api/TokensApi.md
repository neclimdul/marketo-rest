# NecLimDul\MarketoRest\Asset\TokensApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTokenTOFolderUsingPOST()**](TokensApi.md#addTokenTOFolderUsingPOST) | **POST** /rest/asset/v1/folder/{id}/tokens.json | Create Token
[**deleteTokenByNameUsingPOST()**](TokensApi.md#deleteTokenByNameUsingPOST) | **POST** /rest/asset/v1/folder/{id}/tokens/delete.json | Delete Token by Name
[**getTokensByFolderIdUsingGET()**](TokensApi.md#getTokensByFolderIdUsingGET) | **GET** /rest/asset/v1/folder/{id}/tokens.json | Get Tokens by Folder Id


## `addTokenTOFolderUsingPOST()`

```php
addTokenTOFolderUsingPOST($id, $folder_type, $name, $type, $value): \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse
```

Create Token

Create or update a token in the parent folder.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the folder to which the token will be associated with
$folder_type = 'folder_type_example'; // string | Type of folder.  'Folder' or 'Program'
$name = 'name_example'; // string | Name of the token. Max length is 50 characters)
$type = 'type_example'; // string | Type of the token
$value = 'value_example'; // string | Value of the token

try {
    $result = $apiInstance->addTokenTOFolderUsingPOST($id, $folder_type, $name, $type, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->addTokenTOFolderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the folder to which the token will be associated with |
 **folder_type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; |
 **name** | **string**| Name of the token. Max length is 50 characters) |
 **type** | **string**| Type of the token |
 **value** | **string**| Value of the token |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse**](../Model/ResponseOfTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteTokenByNameUsingPOST()`

```php
deleteTokenByNameUsingPOST($id, $folder_type, $name, $type): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Delete Token by Name

Deletes a token with the given name from the parent folder.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$folder_type = 'folder_type_example'; // string
$name = 'name_example'; // string
$type = 'type_example'; // string

try {
    $result = $apiInstance->deleteTokenByNameUsingPOST($id, $folder_type, $name, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->deleteTokenByNameUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **folder_type** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **type** | **string**|  | [optional]

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

## `getTokensByFolderIdUsingGET()`

```php
getTokensByFolderIdUsingGET($id, $folder_type): \NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse
```

Get Tokens by Folder Id

Retrieves the list of available My Tokens in the target folder.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$folder_type = 'Folder'; // string | Type of folder.  'Folder' or 'Program'

try {
    $result = $apiInstance->getTokensByFolderIdUsingGET($id, $folder_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getTokensByFolderIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **folder_type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; | [optional] [default to &#39;Folder&#39;]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfTokenResponse**](../Model/ResponseOfTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

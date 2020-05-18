# MarketoRest\Asset\TokensApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addTokenTOFolderUsingPOST**](TokensApi.md#addTokenTOFolderUsingPOST) | **POST** /rest/asset/v1/folder/{id}/tokens.json | Create Token
[**deleteTokenByNameUsingPOST**](TokensApi.md#deleteTokenByNameUsingPOST) | **POST** /rest/asset/v1/folder/{id}/tokens/delete.json | Delete Token by Name
[**getTokensByFolderIdUsingGET**](TokensApi.md#getTokensByFolderIdUsingGET) | **GET** /rest/asset/v1/folder/{id}/tokens.json | Get Tokens by Folder Id


# **addTokenTOFolderUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfTokenResponse addTokenTOFolderUsingPOST($id, $create_token_request)

Create Token

Create or update a token in the parent folder.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$create_token_request = new \MarketoRest\Asset\Model\CreateTokenRequest(); // \MarketoRest\Asset\Model\CreateTokenRequest | createTokenRequest

try {
    $result = $apiInstance->addTokenTOFolderUsingPOST($id, $create_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->addTokenTOFolderUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **create_token_request** | [**\MarketoRest\Asset\Model\CreateTokenRequest**](../Model/CreateTokenRequest.md)| createTokenRequest |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfTokenResponse**](../Model/ResponseOfTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTokenByNameUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfIdResponse deleteTokenByNameUsingPOST($id, $delete_token_request)

Delete Token by Name

Deletes a token with the given name from the parent folder.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$delete_token_request = new \MarketoRest\Asset\Model\DeleteTokenRequest(); // \MarketoRest\Asset\Model\DeleteTokenRequest | deleteTokenRequest

try {
    $result = $apiInstance->deleteTokenByNameUsingPOST($id, $delete_token_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->deleteTokenByNameUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **delete_token_request** | [**\MarketoRest\Asset\Model\DeleteTokenRequest**](../Model/DeleteTokenRequest.md)| deleteTokenRequest |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTokensByFolderIdUsingGET**
> \MarketoRest\Asset\Model\ResponseOfTokenResponse getTokensByFolderIdUsingGET($id, $folder_type)

Get Tokens by Folder Id

Retrieves the list of available My Tokens in the target folder.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\TokensApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$folder_type = "Folder"; // string | Type of folder.  'Folder' or 'Program'

try {
    $result = $apiInstance->getTokensByFolderIdUsingGET($id, $folder_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TokensApi->getTokensByFolderIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **folder_type** | **string**| Type of folder.  &#39;Folder&#39; or &#39;Program&#39; | [optional] [default to Folder]

### Return type

[**\MarketoRest\Asset\Model\ResponseOfTokenResponse**](../Model/ResponseOfTokenResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


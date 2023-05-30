# NecLimDul\MarketoRest\Identity\IdentityApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**identityUsingGET()**](IdentityApi.md#identityUsingGET) | **GET** /identity/oauth/token | Identity
[**identityUsingPOST()**](IdentityApi.md#identityUsingPOST) | **POST** /identity/oauth/token | Identity


## `identityUsingGET()`

```php
identityUsingGET($client_id, $client_secret, $grant_type): \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity
```

Identity

Retrieve an access token from Marketo.  Calls to this endpoint are not counted towards API call limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Identity\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string | Client ID from Admin > Integration > Launchpoint menu.
$client_secret = 'client_secret_example'; // string | Client Secret from Admin > Integration > Launchpoint menu.
$grant_type = 'grant_type_example'; // string | Grant type.

try {
    $result = $apiInstance->identityUsingGET($client_id, $client_secret, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->identityUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client ID from Admin &gt; Integration &gt; Launchpoint menu. |
 **client_secret** | **string**| Client Secret from Admin &gt; Integration &gt; Launchpoint menu. |
 **grant_type** | **string**| Grant type. |

### Return type

[**\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity**](../Model/ResponseOfIdentity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `identityUsingPOST()`

```php
identityUsingPOST($client_id, $client_secret, $grant_type): \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity
```

Identity

Retrieve an access token from Marketo.  Calls to this endpoint are not counted towards API call limit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Identity\Api\IdentityApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$client_id = 'client_id_example'; // string | Client ID from Admin > Integration > Launchpoint menu.
$client_secret = 'client_secret_example'; // string | Client Secret from Admin > Integration > Launchpoint menu.
$grant_type = 'grant_type_example'; // string | Grant type.

try {
    $result = $apiInstance->identityUsingPOST($client_id, $client_secret, $grant_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->identityUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client ID from Admin &gt; Integration &gt; Launchpoint menu. |
 **client_secret** | **string**| Client Secret from Admin &gt; Integration &gt; Launchpoint menu. |
 **grant_type** | **string**| Grant type. |

### Return type

[**\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity**](../Model/ResponseOfIdentity.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

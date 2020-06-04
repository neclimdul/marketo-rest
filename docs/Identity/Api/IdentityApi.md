# NecLimDul\MarketoRest\Identity\IdentityApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**identityUsingGET**](IdentityApi.md#identityUsingGET) | **GET** /identity/oauth/token | Identity


# **identityUsingGET**
> \NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity identityUsingGET($client_id, $client_secret, $grant_type, $partner_id)

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
$partner_id = 'partner_id_example'; // string | LaunchPoint Technology Partner <a href='http://developers.marketo.com/support/Marketo_LaunchPoint_Technology_Partner_API_Key.pdf'>API Key</a>.

try {
    $result = $apiInstance->identityUsingGET($client_id, $client_secret, $grant_type, $partner_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IdentityApi->identityUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **client_id** | **string**| Client ID from Admin &gt; Integration &gt; Launchpoint menu. |
 **client_secret** | **string**| Client Secret from Admin &gt; Integration &gt; Launchpoint menu. |
 **grant_type** | **string**| Grant type. |
 **partner_id** | **string**| LaunchPoint Technology Partner &lt;a href&#x3D;&#39;http://developers.marketo.com/support/Marketo_LaunchPoint_Technology_Partner_API_Key.pdf&#39;&gt;API Key&lt;/a&gt;. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Identity\Model\ResponseOfIdentity**](../Model/ResponseOfIdentity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


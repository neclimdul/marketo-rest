# MarketoRest\Asset\LandingPageContentApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLandingPageContentUsingPOST**](LandingPageContentApi.md#addLandingPageContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/content.json | Add Landing Page Content Section
[**getLandingPageContentUsingGET**](LandingPageContentApi.md#getLandingPageContentUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/content.json | Get Landing Page Content
[**getLandingPageDynamicContentsUsingGET**](LandingPageContentApi.md#getLandingPageDynamicContentsUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json | Get Landing Page Dynamic Content
[**removeLandingPageContentUsingPOST**](LandingPageContentApi.md#removeLandingPageContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/content/{contentId}/delete.json | Delete Landing Page Content Section
[**updateLandingPageContentUsingPOST**](LandingPageContentApi.md#updateLandingPageContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/content/{contentId}.json | Update Landing Page Content Section
[**updateLandingPageDynamicContentUsingPOST**](LandingPageContentApi.md#updateLandingPageDynamicContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json | Update Landing Page Dynamic Content Section


# **addLandingPageContentUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfIdResponse addLandingPageContentUsingPOST($id, $request)

Add Landing Page Content Section

Adds a content section to the target landing page. Parameters must be sent as application/x-www-form-urlencoded (not JSON).  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$request = new \MarketoRest\Asset\Model\CreateLandingPageContentRequest(); // \MarketoRest\Asset\Model\CreateLandingPageContentRequest | request

try {
    $result = $apiInstance->addLandingPageContentUsingPOST($id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->addLandingPageContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **request** | [**\MarketoRest\Asset\Model\CreateLandingPageContentRequest**](../Model/CreateLandingPageContentRequest.md)| request |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageContentUsingGET**
> \MarketoRest\Asset\Model\ResponseOfLandingPageContentResponse getLandingPageContentUsingGET($id, $status)

Get Landing Page Content

Retrieves the list of content sections in the target landing page.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getLandingPageContentUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->getLandingPageContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\MarketoRest\Asset\Model\ResponseOfLandingPageContentResponse**](../Model/ResponseOfLandingPageContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageDynamicContentsUsingGET**
> \MarketoRest\Asset\Model\ResponseOfLandingPageDynamicContentResponse getLandingPageDynamicContentsUsingGET($id, $content_id)

Get Landing Page Dynamic Content

Retrieves the dynamic content from the target section. Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of landing page
$content_id = "content_id_example"; // string | Id of landing page dynamic content section

try {
    $result = $apiInstance->getLandingPageDynamicContentsUsingGET($id, $content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->getLandingPageDynamicContentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of landing page |
 **content_id** | **string**| Id of landing page dynamic content section |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfLandingPageDynamicContentResponse**](../Model/ResponseOfLandingPageDynamicContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeLandingPageContentUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfIdResponse removeLandingPageContentUsingPOST($id, $content_id)

Delete Landing Page Content Section

Removes the target content section from the parent landing page. Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of landing page
$content_id = "content_id_example"; // string | Id of landing page content section

try {
    $result = $apiInstance->removeLandingPageContentUsingPOST($id, $content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->removeLandingPageContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of landing page |
 **content_id** | **string**| Id of landing page content section |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageContentUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfIdResponse updateLandingPageContentUsingPOST($id, $content_id, $request)

Update Landing Page Content Section

Updates a content section the landing page. Parameters must be sent as application/x-www-form-urlencoded (not JSON).  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of landing page
$content_id = "content_id_example"; // string | Id of landing page content section
$request = new \MarketoRest\Asset\Model\UpdateLandingPageContentRequest(); // \MarketoRest\Asset\Model\UpdateLandingPageContentRequest | Content properties

try {
    $result = $apiInstance->updateLandingPageContentUsingPOST($id, $content_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->updateLandingPageContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of landing page |
 **content_id** | **string**| Id of landing page content section |
 **request** | [**\MarketoRest\Asset\Model\UpdateLandingPageContentRequest**](../Model/UpdateLandingPageContentRequest.md)| Content properties |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageDynamicContentUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfIdResponse updateLandingPageDynamicContentUsingPOST($id, $content_id, $request)

Update Landing Page Dynamic Content Section

Updates the content of the target dynamic content section. Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the landing page
$content_id = "content_id_example"; // string | Id of the landing page dynamic content
$request = new \MarketoRest\Asset\Model\UpdateLandingPageDynamicContentRequest(); // \MarketoRest\Asset\Model\UpdateLandingPageDynamicContentRequest | Dynamic content properties

try {
    $result = $apiInstance->updateLandingPageDynamicContentUsingPOST($id, $content_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->updateLandingPageDynamicContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the landing page |
 **content_id** | **string**| Id of the landing page dynamic content |
 **request** | [**\MarketoRest\Asset\Model\UpdateLandingPageDynamicContentRequest**](../Model/UpdateLandingPageDynamicContentRequest.md)| Dynamic content properties | [optional]

### Return type

[**\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


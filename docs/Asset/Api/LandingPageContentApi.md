# NecLimDul\MarketoRest\Asset\LandingPageContentApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addLandingPageContentUsingPOST()**](LandingPageContentApi.md#addLandingPageContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/content.json | Add Landing Page Content Section
[**getLandingPageContentUsingGET()**](LandingPageContentApi.md#getLandingPageContentUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/content.json | Get Landing Page Content
[**getLandingPageDynamicContentsUsingGET()**](LandingPageContentApi.md#getLandingPageDynamicContentsUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json | Get Landing Page Dynamic Content
[**removeLandingPageContentUsingPOST()**](LandingPageContentApi.md#removeLandingPageContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/content/{contentId}/delete.json | Delete Landing Page Content Section
[**updateLandingPageContentUsingPOST()**](LandingPageContentApi.md#updateLandingPageContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/content/{contentId}.json | Update Landing Page Content Section
[**updateLandingPageDynamicContentUsingPOST()**](LandingPageContentApi.md#updateLandingPageDynamicContentUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/dynamicContent/{contentId}.json | Update Landing Page Dynamic Content Section


## `addLandingPageContentUsingPOST()`

```php
addLandingPageContentUsingPOST($id, $content_id, $type, $background_color, $border_color, $border_style, $border_width, $height, $hide_desktop, $hide_mobile, $image_open_new_window, $left, $link_url, $opacity, $top, $value, $width, $z_index): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Add Landing Page Content Section

Adds a content section to the target landing page. Parameters must be sent as application/x-www-form-urlencoded (not JSON).  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$content_id = 'content_id_example'; // string | Id of the content section.  Also the HTML id of the section.
$type = 'type_example'; // string | Type of content section
$background_color = 'background_color_example'; // string | background-color property of the HTML section
$border_color = 'border_color_example'; // string | border-color property of the HTML section
$border_style = 'border_style_example'; // string | border-style property of the HTML section
$border_width = 'border_width_example'; // string | border-width property of the HTML section
$height = 'height_example'; // string | height property of the HTML section
$hide_desktop = True; // bool | Hide the section when displayed on a desktop browser.  Default false
$hide_mobile = True; // bool | Hide the section when displayed on a mobile browser.  Default false
$image_open_new_window = 'image_open_new_window_example'; // string
$left = 'left_example'; // string | left property of the HTML section
$link_url = 'link_url_example'; // string | URL parameter of a link type section
$opacity = 'opacity_example'; // string | opacity property of the HTML section
$top = 'top_example'; // string | top property of the HTML section
$value = 'value_example'; // string | Type of content section
$width = 'width_example'; // string | width property of the HTML section
$z_index = 'z_index_example'; // string | z-index property of the HTML section

try {
    $result = $apiInstance->addLandingPageContentUsingPOST($id, $content_id, $type, $background_color, $border_color, $border_style, $border_width, $height, $hide_desktop, $hide_mobile, $image_open_new_window, $left, $link_url, $opacity, $top, $value, $width, $z_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->addLandingPageContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **content_id** | **string**| Id of the content section.  Also the HTML id of the section. |
 **type** | **string**| Type of content section |
 **background_color** | **string**| background-color property of the HTML section | [optional]
 **border_color** | **string**| border-color property of the HTML section | [optional]
 **border_style** | **string**| border-style property of the HTML section | [optional]
 **border_width** | **string**| border-width property of the HTML section | [optional]
 **height** | **string**| height property of the HTML section | [optional]
 **hide_desktop** | **bool**| Hide the section when displayed on a desktop browser.  Default false | [optional]
 **hide_mobile** | **bool**| Hide the section when displayed on a mobile browser.  Default false | [optional]
 **image_open_new_window** | **string**|  | [optional]
 **left** | **string**| left property of the HTML section | [optional]
 **link_url** | **string**| URL parameter of a link type section | [optional]
 **opacity** | **string**| opacity property of the HTML section | [optional]
 **top** | **string**| top property of the HTML section | [optional]
 **value** | **string**| Type of content section | [optional]
 **width** | **string**| width property of the HTML section | [optional]
 **z_index** | **string**| z-index property of the HTML section | [optional]

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

## `getLandingPageContentUsingGET()`

```php
getLandingPageContentUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageContentResponse
```

Get Landing Page Content

Retrieves the list of content sections in the target landing page.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getLandingPageContentUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->getLandingPageContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageContentResponse**](../Model/ResponseOfLandingPageContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLandingPageDynamicContentsUsingGET()`

```php
getLandingPageDynamicContentsUsingGET($id, $content_id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageDynamicContentResponse
```

Get Landing Page Dynamic Content

Retrieves the dynamic content from the target section. Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of landing page
$content_id = 'content_id_example'; // string | Id of landing page dynamic content section

try {
    $result = $apiInstance->getLandingPageDynamicContentsUsingGET($id, $content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->getLandingPageDynamicContentsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of landing page |
 **content_id** | **string**| Id of landing page dynamic content section |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageDynamicContentResponse**](../Model/ResponseOfLandingPageDynamicContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeLandingPageContentUsingPOST()`

```php
removeLandingPageContentUsingPOST($id, $content_id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Delete Landing Page Content Section

Removes the target content section from the parent landing page. Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of landing page
$content_id = 'content_id_example'; // string | Id of landing page content section

try {
    $result = $apiInstance->removeLandingPageContentUsingPOST($id, $content_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->removeLandingPageContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of landing page |
 **content_id** | **string**| Id of landing page content section |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLandingPageContentUsingPOST()`

```php
updateLandingPageContentUsingPOST($id, $content_id, $type, $background_color, $border_color, $border_style, $border_width, $height, $hide_desktop, $hide_mobile, $image_open_new_window, $index, $left, $link_url, $opacity, $top, $value, $width, $z_index): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Update Landing Page Content Section

Updates a content section the landing page. Parameters must be sent as application/x-www-form-urlencoded (not JSON).  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of landing page
$content_id = 'content_id_example'; // string | Id of landing page content section
$type = 'type_example'; // string | Type of content section
$background_color = 'background_color_example'; // string | background-color property of the HTML section
$border_color = 'border_color_example'; // string | border-color property of the HTML section
$border_style = 'border_style_example'; // string | border-style property of the HTML section
$border_width = 'border_width_example'; // string | border-width property of the HTML section
$height = 'height_example'; // string | height property of the HTML section
$hide_desktop = True; // bool | Hide the section when displayed on a desktop browser.  Default false
$hide_mobile = True; // bool | Hide the section when displayed on a mobile browser.  Default false
$image_open_new_window = 'image_open_new_window_example'; // string
$index = 56; // int | Index of the content section.  Determines the order of the section in the landing page
$left = 'left_example'; // string | left property of the HTML section
$link_url = 'link_url_example'; // string | URL parameter of a link type section
$opacity = 'opacity_example'; // string | opacity property of the HTML section
$top = 'top_example'; // string | top property of the HTML section
$value = 'value_example'; // string | Type of content section
$width = 'width_example'; // string | width property of the HTML section
$z_index = 'z_index_example'; // string | z-index property of the HTML section

try {
    $result = $apiInstance->updateLandingPageContentUsingPOST($id, $content_id, $type, $background_color, $border_color, $border_style, $border_width, $height, $hide_desktop, $hide_mobile, $image_open_new_window, $index, $left, $link_url, $opacity, $top, $value, $width, $z_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->updateLandingPageContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of landing page |
 **content_id** | **string**| Id of landing page content section |
 **type** | **string**| Type of content section |
 **background_color** | **string**| background-color property of the HTML section | [optional]
 **border_color** | **string**| border-color property of the HTML section | [optional]
 **border_style** | **string**| border-style property of the HTML section | [optional]
 **border_width** | **string**| border-width property of the HTML section | [optional]
 **height** | **string**| height property of the HTML section | [optional]
 **hide_desktop** | **bool**| Hide the section when displayed on a desktop browser.  Default false | [optional]
 **hide_mobile** | **bool**| Hide the section when displayed on a mobile browser.  Default false | [optional]
 **image_open_new_window** | **string**|  | [optional]
 **index** | **int**| Index of the content section.  Determines the order of the section in the landing page | [optional]
 **left** | **string**| left property of the HTML section | [optional]
 **link_url** | **string**| URL parameter of a link type section | [optional]
 **opacity** | **string**| opacity property of the HTML section | [optional]
 **top** | **string**| top property of the HTML section | [optional]
 **value** | **string**| Type of content section | [optional]
 **width** | **string**| width property of the HTML section | [optional]
 **z_index** | **string**| z-index property of the HTML section | [optional]

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

## `updateLandingPageDynamicContentUsingPOST()`

```php
updateLandingPageDynamicContentUsingPOST($id, $content_id, $background_color, $border_color, $border_style, $border_width, $height, $hide_desktop, $hide_mobile, $image_open_new_window, $left, $link_url, $opacity, $segment, $top, $type, $value, $width, $z_index): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Update Landing Page Dynamic Content Section

Updates the content of the target dynamic content section. Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageContentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the landing page
$content_id = 'content_id_example'; // string | Id of the landing page dynamic content
$background_color = 'background_color_example'; // string | background-color property of the HTML section
$border_color = 'border_color_example'; // string | border-color property of the HTML section
$border_style = 'border_style_example'; // string | border-style property of the HTML section
$border_width = 'border_width_example'; // string | border-width property of the HTML section
$height = 'height_example'; // string | height property of the HTML section
$hide_desktop = True; // bool | Hide the section when displayed on a desktop browser.  Default false
$hide_mobile = True; // bool | Hide the section when displayed on a mobile browser.  Default false
$image_open_new_window = 'image_open_new_window_example'; // string
$left = 'left_example'; // string | left property of the HTML section
$link_url = 'link_url_example'; // string | URL parameter of a link type section
$opacity = 'opacity_example'; // string | opacity property of the HTML section
$segment = 'segment_example'; // string | Name of the segment to display content section for
$top = 'top_example'; // string | top property of the HTML section
$type = 'type_example'; // string | Type of content section
$value = 'value_example'; // string | Type of content section
$width = 'width_example'; // string | width property of the HTML section
$z_index = 'z_index_example'; // string | z-index property of the HTML section

try {
    $result = $apiInstance->updateLandingPageDynamicContentUsingPOST($id, $content_id, $background_color, $border_color, $border_style, $border_width, $height, $hide_desktop, $hide_mobile, $image_open_new_window, $left, $link_url, $opacity, $segment, $top, $type, $value, $width, $z_index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageContentApi->updateLandingPageDynamicContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the landing page |
 **content_id** | **string**| Id of the landing page dynamic content |
 **background_color** | **string**| background-color property of the HTML section | [optional]
 **border_color** | **string**| border-color property of the HTML section | [optional]
 **border_style** | **string**| border-style property of the HTML section | [optional]
 **border_width** | **string**| border-width property of the HTML section | [optional]
 **height** | **string**| height property of the HTML section | [optional]
 **hide_desktop** | **bool**| Hide the section when displayed on a desktop browser.  Default false | [optional]
 **hide_mobile** | **bool**| Hide the section when displayed on a mobile browser.  Default false | [optional]
 **image_open_new_window** | **string**|  | [optional]
 **left** | **string**| left property of the HTML section | [optional]
 **link_url** | **string**| URL parameter of a link type section | [optional]
 **opacity** | **string**| opacity property of the HTML section | [optional]
 **segment** | **string**| Name of the segment to display content section for | [optional]
 **top** | **string**| top property of the HTML section | [optional]
 **type** | **string**| Type of content section | [optional]
 **value** | **string**| Type of content section | [optional]
 **width** | **string**| width property of the HTML section | [optional]
 **z_index** | **string**| z-index property of the HTML section | [optional]

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

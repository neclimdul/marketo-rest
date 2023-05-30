# NecLimDul\MarketoRest\Asset\LandingPagesApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveLandingPageUsingPOST()**](LandingPagesApi.md#approveLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/approveDraft.json | Approve Landing Page Draft
[**browseLandingPagesUsingGET()**](LandingPagesApi.md#browseLandingPagesUsingGET) | **GET** /rest/asset/v1/landingPages.json | Get Landing Pages
[**cloneLandingPageUsingPOST()**](LandingPagesApi.md#cloneLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/clone.json | Clone Landing Page
[**createLandingPageUsingPOST()**](LandingPagesApi.md#createLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPages.json | Create Landing Page
[**deleteLandingPageByIdUsingPOST()**](LandingPagesApi.md#deleteLandingPageByIdUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/delete.json | Delete Landing Page
[**discardLandingPageByIdUsingPOST()**](LandingPagesApi.md#discardLandingPageByIdUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/discardDraft.json | Discard Landing Page Draft
[**getLandingPageByIdUsingGET()**](LandingPagesApi.md#getLandingPageByIdUsingGET) | **GET** /rest/asset/v1/landingPage/{id}.json | Get Landing Page by Id
[**getLandingPageByNameUsingGET()**](LandingPagesApi.md#getLandingPageByNameUsingGET) | **GET** /rest/asset/v1/landingPage/byName.json | Get Landing Page by Name
[**getLandingPageFullContentUsingGET()**](LandingPagesApi.md#getLandingPageFullContentUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/fullContent.json | Get Landing Page Full Content
[**getVariablesUsingGET()**](LandingPagesApi.md#getVariablesUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/variables.json | Get Landing Page Variables
[**unapproveLandingPageByIdUsingPOST()**](LandingPagesApi.md#unapproveLandingPageByIdUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/unapprove.json | Unapprove Landing Page
[**updateLandingPageUsingPOST()**](LandingPagesApi.md#updateLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}.json | Update Landing Page Metadata
[**updateLandingPageVariableUsingPOST()**](LandingPagesApi.md#updateLandingPageVariableUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/variable/{variableId}.json | Update Landing Page Variable


## `approveLandingPageUsingPOST()`

```php
approveLandingPageUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Approve Landing Page Draft

Approves the current draft of the landing page.  Required Permissions: Approve Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->approveLandingPageUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->approveLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

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

## `browseLandingPagesUsingGET()`

```php
browseLandingPagesUsingGET($status, $max_return, $offset, $folder): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse
```

Get Landing Pages

Retrieves a list of accessible landing pages from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = 'status_example'; // string | Status filter for draft or approved versions
$max_return = 56; // int | Maximum number of landing pages to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging
$folder = 'folder_example'; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $apiInstance->browseLandingPagesUsingGET($status, $max_return, $offset, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->browseLandingPagesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **max_return** | **int**| Maximum number of landing pages to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneLandingPageUsingPOST()`

```php
cloneLandingPageUsingPOST($id, $folder, $name, $description, $template): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse
```

Clone Landing Page

Clones the target landing page. Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$name = 'name_example'; // string | Name of the landing page
$description = 'description_example'; // string | Description of the asset
$template = 56; // int | Id of the template used

try {
    $result = $apiInstance->cloneLandingPageUsingPOST($id, $folder, $name, $description, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->cloneLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the landing page |
 **description** | **string**| Description of the asset | [optional]
 **template** | **int**| Id of the template used | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLandingPageUsingPOST()`

```php
createLandingPageUsingPOST($folder, $name, $template, $custom_head_html, $description, $facebook_og_tags, $keywords, $mobile_enabled, $prefill_form, $robots, $title, $url_page_name, $workspace): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse
```

Create Landing Page

Creates a new landing page.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$name = 'name_example'; // string | Name of the landing page
$template = 56; // int | Id of the template used
$custom_head_html = 'custom_head_html_example'; // string | Any custom HTML to embed in the <head> tag of the page
$description = 'description_example'; // string | Description of the asset
$facebook_og_tags = 'facebook_og_tags_example'; // string | Any OpenGraph meta tags to apply to the page
$keywords = 'keywords_example'; // string
$mobile_enabled = True; // bool | Whether the page has mobile viewing enabled.  Free-form pages only.  Default false
$prefill_form = True; // bool | Boolean to toggle whether forms embedded in the page will prefill.  Default false
$robots = 'robots_example'; // string | Robots directives to apply to the pages meta tags
$title = 'title_example'; // string | Title element of the landing page
$url_page_name = 'url_page_name_example'; // string | URL path of the page.  Derived from the name field if unset
$workspace = 'workspace_example'; // string | Name of the workspace

try {
    $result = $apiInstance->createLandingPageUsingPOST($folder, $name, $template, $custom_head_html, $description, $facebook_og_tags, $keywords, $mobile_enabled, $prefill_form, $robots, $title, $url_page_name, $workspace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->createLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the landing page |
 **template** | **int**| Id of the template used |
 **custom_head_html** | **string**| Any custom HTML to embed in the &lt;head&gt; tag of the page | [optional]
 **description** | **string**| Description of the asset | [optional]
 **facebook_og_tags** | **string**| Any OpenGraph meta tags to apply to the page | [optional]
 **keywords** | **string**|  | [optional]
 **mobile_enabled** | **bool**| Whether the page has mobile viewing enabled.  Free-form pages only.  Default false | [optional]
 **prefill_form** | **bool**| Boolean to toggle whether forms embedded in the page will prefill.  Default false | [optional]
 **robots** | **string**| Robots directives to apply to the pages meta tags | [optional]
 **title** | **string**| Title element of the landing page | [optional]
 **url_page_name** | **string**| URL path of the page.  Derived from the name field if unset | [optional]
 **workspace** | **string**| Name of the workspace | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteLandingPageByIdUsingPOST()`

```php
deleteLandingPageByIdUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Delete Landing Page

Deletes the target landing page. Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->deleteLandingPageByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->deleteLandingPageByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

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

## `discardLandingPageByIdUsingPOST()`

```php
discardLandingPageByIdUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Discard Landing Page Draft

Discards the current draft of the landing page. Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->discardLandingPageByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->discardLandingPageByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

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

## `getLandingPageByIdUsingGET()`

```php
getLandingPageByIdUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse
```

Get Landing Page by Id

Returns the landing record for the given id. Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getLandingPageByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getLandingPageByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLandingPageByNameUsingGET()`

```php
getLandingPageByNameUsingGET($name, $status, $max_return, $offset): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse
```

Get Landing Page by Name

Returns the landing page record for the given name. Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the landing page
$status = 'status_example'; // string | Status filter for draft or approved versions
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getLandingPageByNameUsingGET($name, $status, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getLandingPageByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the landing page |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLandingPageFullContentUsingGET()`

```php
getLandingPageFullContentUsingGET($id, $lead_id, $segmentation): \NecLimDul\MarketoRest\Asset\Model\ResponseOfGetLandingPageFullContentResponse
```

Get Landing Page Full Content

Returns the serialized HTML version of the landing page.  Required Permissions: Read-Only Assets, Read-Write Assets.  If leadId is passed in the request: Read-Only Lead, Read-Write Lead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the landing page.
$lead_id = 56; // int | The lead id to impersonate.  Landing page is rendered as though it was viewed by this lead.
$segmentation = 'segmentation_example'; // string | JSON array of of segmentations.  Each segmentation must be a JSON object with members 'segmentationId', and 'segmentId'.<br>Example: [{\"segmentationId\":1030,\"segmentId\":1103}]

try {
    $result = $apiInstance->getLandingPageFullContentUsingGET($id, $lead_id, $segmentation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getLandingPageFullContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the landing page. |
 **lead_id** | **int**| The lead id to impersonate.  Landing page is rendered as though it was viewed by this lead. | [optional]
 **segmentation** | **string**| JSON array of of segmentations.  Each segmentation must be a JSON object with members &#39;segmentationId&#39;, and &#39;segmentId&#39;.&lt;br&gt;Example: [{\&quot;segmentationId\&quot;:1030,\&quot;segmentId\&quot;:1103}] | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfGetLandingPageFullContentResponse**](../Model/ResponseOfGetLandingPageFullContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getVariablesUsingGET()`

```php
getVariablesUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageVariableResponse
```

Get Landing Page Variables

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the landing page
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getVariablesUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getVariablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the landing page |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageVariableResponse**](../Model/ResponseOfLandingPageVariableResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `unapproveLandingPageByIdUsingPOST()`

```php
unapproveLandingPageByIdUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse
```

Unapprove Landing Page

Unapproves the landing page, reverting it to a draft-only state. Required Permissions: Approve Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->unapproveLandingPageByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->unapproveLandingPageByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLandingPageUsingPOST()`

```php
updateLandingPageUsingPOST($id, $custom_head_html, $description, $facebook_og_tags, $keywords, $meta_tags_description, $mobile_enabled, $name, $robots, $style_over_ride, $title, $url_page_name): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse
```

Update Landing Page Metadata

Updates the metadata for the targe landing page.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$custom_head_html = 'custom_head_html_example'; // string | Any custom HTML to embed in the <head> tag of the page
$description = 'description_example'; // string | Description of the asset
$facebook_og_tags = 'facebook_og_tags_example'; // string | Any OpenGraph meta tags to apply to the page
$keywords = 'keywords_example'; // string
$meta_tags_description = 'meta_tags_description_example'; // string | Meta description property of the page
$mobile_enabled = True; // bool | Whether the page has mobile viewing enabled.  Free-form pages only.  Default false
$name = 'name_example'; // string | Name of the landing page
$robots = 'robots_example'; // string | Robots directives to apply to the pages meta tags
$style_over_ride = 'style_over_ride_example'; // string | Additional CSS styles to append to the landing page <head>
$title = 'title_example'; // string | Title element of the landing page
$url_page_name = 'url_page_name_example'; // string | URL path of the page.  Derived from the name field if unset

try {
    $result = $apiInstance->updateLandingPageUsingPOST($id, $custom_head_html, $description, $facebook_og_tags, $keywords, $meta_tags_description, $mobile_enabled, $name, $robots, $style_over_ride, $title, $url_page_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->updateLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **custom_head_html** | **string**| Any custom HTML to embed in the &lt;head&gt; tag of the page | [optional]
 **description** | **string**| Description of the asset | [optional]
 **facebook_og_tags** | **string**| Any OpenGraph meta tags to apply to the page | [optional]
 **keywords** | **string**|  | [optional]
 **meta_tags_description** | **string**| Meta description property of the page | [optional]
 **mobile_enabled** | **bool**| Whether the page has mobile viewing enabled.  Free-form pages only.  Default false | [optional]
 **name** | **string**| Name of the landing page | [optional]
 **robots** | **string**| Robots directives to apply to the pages meta tags | [optional]
 **style_over_ride** | **string**| Additional CSS styles to append to the landing page &lt;head&gt; | [optional]
 **title** | **string**| Title element of the landing page | [optional]
 **url_page_name** | **string**| URL path of the page.  Derived from the name field if unset | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateLandingPageVariableUsingPOST()`

```php
updateLandingPageVariableUsingPOST($id, $variable_id, $value): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageVariableResponse
```

Update Landing Page Variable

Updates the value of the given variable.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$variable_id = 'variable_id_example'; // string | variableId
$value = 56; // int | New value of the variable

try {
    $result = $apiInstance->updateLandingPageVariableUsingPOST($id, $variable_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->updateLandingPageVariableUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **variable_id** | **string**| variableId |
 **value** | **int**| New value of the variable |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageVariableResponse**](../Model/ResponseOfLandingPageVariableResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

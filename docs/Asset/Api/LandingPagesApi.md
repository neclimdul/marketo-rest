# NecLimDul\MarketoRest\Asset\LandingPagesApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveLandingPageUsingPOST**](LandingPagesApi.md#approveLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/approveDraft.json | Approve Landing Page Draft
[**browseLandingPagesUsingGET**](LandingPagesApi.md#browseLandingPagesUsingGET) | **GET** /rest/asset/v1/landingPages.json | Get Landing Pages
[**cloneLandingPageUsingPOST**](LandingPagesApi.md#cloneLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/clone.json | Clone Landing Page
[**createLandingPageUsingPOST**](LandingPagesApi.md#createLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPages.json | Create Landing Page
[**deleteLandingPageByIdUsingPOST**](LandingPagesApi.md#deleteLandingPageByIdUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/delete.json | Delete Landing Page
[**discardLandingPageByIdUsingPOST**](LandingPagesApi.md#discardLandingPageByIdUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/discardDraft.json | Discard Landing Page Draft
[**getLandingPageByIdUsingGET**](LandingPagesApi.md#getLandingPageByIdUsingGET) | **GET** /rest/asset/v1/landingPage/{id}.json | Get Landing Page by Id
[**getLandingPageByNameUsingGET**](LandingPagesApi.md#getLandingPageByNameUsingGET) | **GET** /rest/asset/v1/landingPage/byName.json | Get Landing Page by Name
[**getLandingPageFullContentUsingGET**](LandingPagesApi.md#getLandingPageFullContentUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/fullContent.json | Get Landing Page Full Content
[**getVariablesUsingGET**](LandingPagesApi.md#getVariablesUsingGET) | **GET** /rest/asset/v1/landingPage/{id}/variables.json | Get Landing Page Variables
[**unapproveLandingPageByIdUsingPOST**](LandingPagesApi.md#unapproveLandingPageByIdUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/unapprove.json | Unapprove Landing Page
[**updateLandingPageUsingPOST**](LandingPagesApi.md#updateLandingPageUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}.json | Update Landing Page Metadata
[**updateLandingPageVariableUsingPOST**](LandingPagesApi.md#updateLandingPageVariableUsingPOST) | **POST** /rest/asset/v1/landingPage/{id}/variable/{variableId}.json | Update Landing Page Variable


# **approveLandingPageUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse approveLandingPageUsingPOST($id)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseLandingPagesUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse browseLandingPagesUsingGET($status, $max_return, $offset, $folder)

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
$status = "status_example"; // string | Status filter for draft or approved versions
$max_return = 56; // int | Maximum number of landing pages to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $apiInstance->browseLandingPagesUsingGET($status, $max_return, $offset, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->browseLandingPagesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneLandingPageUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse cloneLandingPageUsingPOST($id, $clone_landing_page_request)

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
$clone_landing_page_request = new \NecLimDul\MarketoRest\Asset\Model\CloneLandingPageRequest(); // \NecLimDul\MarketoRest\Asset\Model\CloneLandingPageRequest | cloneLandingPageRequest

try {
    $result = $apiInstance->cloneLandingPageUsingPOST($id, $clone_landing_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->cloneLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_landing_page_request** | [**\NecLimDul\MarketoRest\Asset\Model\CloneLandingPageRequest**](../Model/CloneLandingPageRequest.md)| cloneLandingPageRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLandingPageUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse createLandingPageUsingPOST($create_landing_page_request)

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
$create_landing_page_request = new \NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRequest(); // \NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRequest | createLandingPageRequest

try {
    $result = $apiInstance->createLandingPageUsingPOST($create_landing_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->createLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_landing_page_request** | [**\NecLimDul\MarketoRest\Asset\Model\CreateLandingPageRequest**](../Model/CreateLandingPageRequest.md)| createLandingPageRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLandingPageByIdUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteLandingPageByIdUsingPOST($id)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discardLandingPageByIdUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse discardLandingPageByIdUsingPOST($id)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse getLandingPageByIdUsingGET($id, $status)

Get Landing Page by Id

Returns the landning record for the given id. Required Permissions: Read-Only Assets, Read-Write Assets

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
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getLandingPageByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getLandingPageByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageByNameUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse getLandingPageByNameUsingGET($name, $status, $max_return, $offset)

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
$name = "name_example"; // string | Name of the landing page
$status = "status_example"; // string | Status filter for draft or approved versions
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getLandingPageByNameUsingGET($name, $status, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getLandingPageByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageFullContentUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfGetLandingPageFullContentResponse getLandingPageFullContentUsingGET($id, $lead_id, $segmentation)

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
$segmentation = "segmentation_example"; // string | JSON array of of segmentations.  Each segmentation must be a JSON object with members 'segmentationId', and 'segmentId'.<br>Example: [{\"segmentationId\":1030,\"segmentId\":1103}]

try {
    $result = $apiInstance->getLandingPageFullContentUsingGET($id, $lead_id, $segmentation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getLandingPageFullContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getVariablesUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageVariableResponse getVariablesUsingGET($id, $status)

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
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getVariablesUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->getVariablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveLandingPageByIdUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse unapproveLandingPageByIdUsingPOST($id)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse updateLandingPageUsingPOST($id, $update_landing_page_request)

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
$update_landing_page_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateLandingPageRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateLandingPageRequest | updateLandingPageRequest

try {
    $result = $apiInstance->updateLandingPageUsingPOST($id, $update_landing_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->updateLandingPageUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_landing_page_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateLandingPageRequest**](../Model/UpdateLandingPageRequest.md)| updateLandingPageRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageResponse**](../Model/ResponseOfLandingPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageVariableUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLandingPageVariableResponse updateLandingPageVariableUsingPOST($id, $variable_id, $value)

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
$variable_id = "variable_id_example"; // string | variableId
$value = 56; // int | New value of the variable

try {
    $result = $apiInstance->updateLandingPageVariableUsingPOST($id, $variable_id, $value);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPagesApi->updateLandingPageVariableUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# NecLimDul\MarketoRest\Asset\LandingPageTemplatesApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveLandingPageTemplateUsingPOST**](LandingPageTemplatesApi.md#approveLandingPageTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}/approveDraft.json | Approve Landing Page Template Draft
[**cloneLpTemplateUsingPOST**](LandingPageTemplatesApi.md#cloneLpTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}/clone.json | Clone Landing Page Template
[**createLpTemplateUsingPOST**](LandingPageTemplatesApi.md#createLpTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplates.json | Create Landing Page Template
[**deleteLpTemplateUsingPOST**](LandingPageTemplatesApi.md#deleteLpTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}/delete.json | Delete Landing Page Template
[**discardDraftUsingPOST2**](LandingPageTemplatesApi.md#discardDraftUsingPOST2) | **POST** /rest/asset/v1/landingPageTemplate/{id}/discardDraft.json | Discard Landing Page Template Draft
[**getLandingPageTemplateByIdUsingGET**](LandingPageTemplatesApi.md#getLandingPageTemplateByIdUsingGET) | **GET** /rest/asset/v1/landingPageTemplate/{id}.json | Get Landing Page Template by Id
[**getLandingPageTemplateByNameUsingGET**](LandingPageTemplatesApi.md#getLandingPageTemplateByNameUsingGET) | **GET** /rest/asset/v1/landingPageTemplate/byName.json | Get Landing Page Template by Name
[**getLandingPageTemplateContentUsingGET**](LandingPageTemplatesApi.md#getLandingPageTemplateContentUsingGET) | **GET** /rest/asset/v1/landingPageTemplate/{id}/content.json | Get Landing Page Template Content
[**getLandingPageTemplatesUsingGET**](LandingPageTemplatesApi.md#getLandingPageTemplatesUsingGET) | **GET** /rest/asset/v1/landingPageTemplates.json | Get Landing Page Templates
[**unapproveLandingPageTemplateUsingPOST**](LandingPageTemplatesApi.md#unapproveLandingPageTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}/unapprove.json | Unapprove Landing Page Template
[**updateLpTemplateUsingPOST**](LandingPageTemplatesApi.md#updateLpTemplateUsingPOST) | **POST** /rest/asset/v1/landingPageTemplate/{id}.json | Update Landing Page Template Metadata


# **approveLandingPageTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse approveLandingPageTemplateUsingPOST($id)

Approve Landing Page Template Draft

Approves the current landing page template draft.  This will delete the current approved version of the template if there is one.  Required Permissions: Approve Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->approveLandingPageTemplateUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->approveLandingPageTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneLpTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse cloneLpTemplateUsingPOST($id, $folder, $name, $description)

Clone Landing Page Template

Clones the target landing page template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder | 
$name = 'name_example'; // string | Name of the landing page template
$description = 'description_example'; // string | Description of the landing page template

try {
    $result = $apiInstance->cloneLpTemplateUsingPOST($id, $folder, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->cloneLpTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the landing page template |
 **description** | **string**| Description of the landing page template | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLpTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse createLpTemplateUsingPOST($folder, $name, $description, $enable_munchkin, $template_type)

Create Landing Page Template

Creates a new landing page template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder | 
$name = 'name_example'; // string | Name of the landing page template
$description = 'description_example'; // string | Description of the landing page template
$enable_munchkin = True; // bool | Whether to enable munchkin on the derived pages.  Defaults to true
$template_type = 'template_type_example'; // string | Type of template to create.  Defaults to freeForm

try {
    $result = $apiInstance->createLpTemplateUsingPOST($folder, $name, $description, $enable_munchkin, $template_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->createLpTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the landing page template |
 **description** | **string**| Description of the landing page template | [optional]
 **enable_munchkin** | **bool**| Whether to enable munchkin on the derived pages.  Defaults to true | [optional]
 **template_type** | **string**| Type of template to create.  Defaults to freeForm | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLpTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteLpTemplateUsingPOST($id)

Delete Landing Page Template

Deletes the target landing page template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->deleteLpTemplateUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->deleteLpTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discardDraftUsingPOST2**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse discardDraftUsingPOST2($id)

Discard Landing Page Template Draft

Discrads the current draft of the landing page template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->discardDraftUsingPOST2($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->discardDraftUsingPOST2: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageTemplateByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse getLandingPageTemplateByIdUsingGET($id, $status)

Get Landing Page Template by Id

Retrieves the record for the target landing page template.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getLandingPageTemplateByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->getLandingPageTemplateByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageTemplateByNameUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse getLandingPageTemplateByNameUsingGET($name)

Get Landing Page Template by Name

Retrieves the landing page template record for the given name.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the landing page template

try {
    $result = $apiInstance->getLandingPageTemplateByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->getLandingPageTemplateByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the landing page template |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageTemplateContentUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateGetContentResponse getLandingPageTemplateContentUsingGET($id, $status)

Get Landing Page Template Content

Retrieves the content of the target landing page.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getLandingPageTemplateContentUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->getLandingPageTemplateContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateGetContentResponse**](../Model/ResponseOfLpTemplateGetContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageTemplatesUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse getLandingPageTemplatesUsingGET($max_return, $offset, $status, $folder)

Get Landing Page Templates

Retrieves the list of accessible landing page templates from the target instance.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging
$status = 'status_example'; // string | Status filter for draft or approved versions
$folder = 'folder_example'; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $apiInstance->getLandingPageTemplatesUsingGET($max_return, $offset, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->getLandingPageTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveLandingPageTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse unapproveLandingPageTemplateUsingPOST($id)

Unapprove Landing Page Template

Unapproves the landing page template and reverts it to a draft-only state.  Required Permissions: Approve Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->unapproveLandingPageTemplateUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->unapproveLandingPageTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLpTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse updateLpTemplateUsingPOST($id, $description, $enable_munchkin, $name)

Update Landing Page Template Metadata

Updates the metadata for the target landing page template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\LandingPageTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$description = 'description_example'; // string | Description of the landing page template
$enable_munchkin = True; // bool | Whether to enable munchkin on the derived pages.  Defaults to true
$name = 'name_example'; // string | Name of the landing page template

try {
    $result = $apiInstance->updateLpTemplateUsingPOST($id, $description, $enable_munchkin, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageTemplatesApi->updateLpTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **description** | **string**| Description of the landing page template | [optional]
 **enable_munchkin** | **bool**| Whether to enable munchkin on the derived pages.  Defaults to true | [optional]
 **name** | **string**| Name of the landing page template | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpTemplateResponse**](../Model/ResponseOfLpTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


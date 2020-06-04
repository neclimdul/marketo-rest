# NecLimDul\MarketoRest\Asset\FormsApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveFromUsingPOST()**](FormsApi.md#approveFromUsingPOST) | **POST** /rest/asset/v1/form/{id}/approveDraft.json | Approve Form Draft
[**browseForms2UsingGET()**](FormsApi.md#browseForms2UsingGET) | **GET** /rest/asset/v1/forms.json | Get Forms
[**cloneLpFormsUsingPOST()**](FormsApi.md#cloneLpFormsUsingPOST) | **POST** /rest/asset/v1/form/{id}/clone.json | Clone Form
[**createLpFormsUsingPOST()**](FormsApi.md#createLpFormsUsingPOST) | **POST** /rest/asset/v1/forms.json | Create Form
[**deleteFormByIdUsingPOST()**](FormsApi.md#deleteFormByIdUsingPOST) | **POST** /rest/asset/v1/form/{id}/delete.json | Delete Form
[**discardFormByIdUsingPOST()**](FormsApi.md#discardFormByIdUsingPOST) | **POST** /rest/asset/v1/form/{id}/discardDraft.json | Discard Form Draft
[**getFormUsedByUsingGET()**](FormsApi.md#getFormUsedByUsingGET) | **GET** /rest/asset/v1/form/{id}/usedBy.json | Get Form Used By
[**getLpFormByIdUsingGET()**](FormsApi.md#getLpFormByIdUsingGET) | **GET** /rest/asset/v1/form/{id}.json | Get Form By Id
[**getLpFormByNameUsingGET()**](FormsApi.md#getLpFormByNameUsingGET) | **GET** /rest/asset/v1/form/byName.json | Get Form by Name
[**getThankYouPageByIdUsingGET()**](FormsApi.md#getThankYouPageByIdUsingGET) | **GET** /rest/asset/v1/form/{id}/thankYouPage.json | Get Thank You Page by Form Id
[**updateFormSubmitButtonUsingPOST()**](FormsApi.md#updateFormSubmitButtonUsingPOST) | **POST** /rest/asset/v1/form/{id}/submitButton.json | Update Submit Button
[**updateFormsUsingPOST()**](FormsApi.md#updateFormsUsingPOST) | **POST** /rest/asset/v1/form/{id}.json | Update Form Metadata
[**updateThankYouPageByIdUsingPOST()**](FormsApi.md#updateThankYouPageByIdUsingPOST) | **POST** /rest/asset/v1/form/{id}/thankYouPage.json | Update Thank You Page


## `approveFromUsingPOST()`

```php
approveFromUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse
```

Approve Form Draft

Approves the current draft of the form.  This will delete the current approved version of the form.  Required Permissions: Approve Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->approveFromUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->approveFromUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `browseForms2UsingGET()`

```php
browseForms2UsingGET($folder, $status, $max_return, $offset): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse
```

Get Forms

Retrieves a list of accessible form records from the target instance.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = 'folder_example'; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$status = 'status_example'; // string | Status filter for draft or approved versions
$max_return = 'max_return_example'; // string | Maximum number of channels to return.  Max 200, default 20
$offset = 'offset_example'; // string | Integer offset for paging

try {
    $result = $apiInstance->browseForms2UsingGET($folder, $status, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->browseForms2UsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **max_return** | **string**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **string**| Integer offset for paging | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cloneLpFormsUsingPOST()`

```php
cloneLpFormsUsingPOST($id, $name, $folder, $description): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse
```

Clone Form

Clones the target form.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$name = 'name_example'; // string | Name for the cloned form
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$description = 'description_example'; // string | Description of the cloned form

try {
    $result = $apiInstance->cloneLpFormsUsingPOST($id, $name, $folder, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->cloneLpFormsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **name** | **string**| Name for the cloned form |
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **description** | **string**| Description of the cloned form | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createLpFormsUsingPOST()`

```php
createLpFormsUsingPOST($folder, $description, $font_family, $font_size, $known_visitor, $label_position, $language, $locale, $name, $progressive_profiling, $theme): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse
```

Create Form

Creates a new form.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$description = 'description_example'; // string | Description of the form
$font_family = 'font_family_example'; // string | font-family property for the form
$font_size = 'font_size_example'; // string | font-size property of the form
$known_visitor = new \NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO(); // \NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO
$label_position = 'label_position_example'; // string | Default positioning of labels.
$language = 'language_example'; // string | Language of the form
$locale = 'locale_example'; // string | Locale of the form
$name = 'name_example'; // string | Name of the form
$progressive_profiling = True; // bool | Whether progressive profiling is enabled for the form
$theme = 'theme_example'; // string | CSS theme for the form to use

try {
    $result = $apiInstance->createLpFormsUsingPOST($folder, $description, $font_family, $font_size, $known_visitor, $label_position, $language, $locale, $name, $progressive_profiling, $theme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->createLpFormsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **description** | **string**| Description of the form | [optional]
 **font_family** | **string**| font-family property for the form | [optional]
 **font_size** | **string**| font-size property of the form | [optional]
 **known_visitor** | [**\NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO**](../Model/FormKnownVisitorDTO.md)|  | [optional]
 **label_position** | **string**| Default positioning of labels. | [optional]
 **language** | **string**| Language of the form | [optional]
 **locale** | **string**| Locale of the form | [optional]
 **name** | **string**| Name of the form | [optional]
 **progressive_profiling** | **bool**| Whether progressive profiling is enabled for the form | [optional]
 **theme** | **string**| CSS theme for the form to use | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFormByIdUsingPOST()`

```php
deleteFormByIdUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Delete Form

Deletes the target form.  Forms which are in use by landing pages may not be deleted until they are removed from all landing pages.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->deleteFormByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->deleteFormByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
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

## `discardFormByIdUsingPOST()`

```php
discardFormByIdUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Discard Form Draft

Discards the current draft of the form.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->discardFormByIdUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->discardFormByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
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

## `getFormUsedByUsingGET()`

```php
getFormUsedByUsingGET($id, $offset, $max_return): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFormUsedByResponse
```

Get Form Used By

Returns a list of asset records which depend on a given form.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the form
$offset = 56; // int | Integer offset for paging
$max_return = 56; // int | Maximum number of assets to return.  Max 200, default 20

try {
    $result = $apiInstance->getFormUsedByUsingGET($id, $offset, $max_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getFormUsedByUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the form |
 **offset** | **int**| Integer offset for paging | [optional]
 **max_return** | **int**| Maximum number of assets to return.  Max 200, default 20 | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFormUsedByResponse**](../Model/ResponseOfFormUsedByResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLpFormByIdUsingGET()`

```php
getLpFormByIdUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse
```

Get Form By Id

Retrieves a form record by its id. Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getLpFormByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getLpFormByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getLpFormByNameUsingGET()`

```php
getLpFormByNameUsingGET($name, $status, $folder): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse
```

Get Form by Name

Retrieves a form record by its name. Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the form
$status = 'status_example'; // string | Status filter for draft or approved versions
$folder = 'folder_example'; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $apiInstance->getLpFormByNameUsingGET($name, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getLpFormByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the form |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getThankYouPageByIdUsingGET()`

```php
getThankYouPageByIdUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfThankYouPageResponse
```

Get Thank You Page by Form Id

Returns the thank you page configuration for a given form.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getThankYouPageByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getThankYouPageByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfThankYouPageResponse**](../Model/ResponseOfThankYouPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFormSubmitButtonUsingPOST()`

```php
updateFormSubmitButtonUsingPOST($id, $button_position, $button_style, $label, $waiting_label): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse
```

Update Submit Button

Updates the submit button configuration for the target form.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$button_position = 56; // int | Location in pixels of the button relative to the left of the form
$button_style = 'button_style_example'; // string | Style of the button
$label = 'label_example'; // string | Label text of the button
$waiting_label = 'waiting_label_example'; // string | Waiting text of the button

try {
    $result = $apiInstance->updateFormSubmitButtonUsingPOST($id, $button_position, $button_style, $label, $waiting_label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateFormSubmitButtonUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **button_position** | **int**| Location in pixels of the button relative to the left of the form | [optional]
 **button_style** | **string**| Style of the button | [optional]
 **label** | **string**| Label text of the button | [optional]
 **waiting_label** | **string**| Waiting text of the button | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFormsUsingPOST()`

```php
updateFormsUsingPOST($id, $custom_css, $description, $font_family, $font_size, $known_visitor, $label_position, $language, $locale, $name, $progressive_profiling, $theme): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse
```

Update Form Metadata

Updates the metadata of the target form.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$custom_css = 'custom_css_example'; // string | Custom CSS to apply to the form
$description = 'description_example'; // string | Description of the form
$font_family = 'font_family_example'; // string | font-family property for the form
$font_size = 'font_size_example'; // string | font-size property of the form
$known_visitor = new \NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO(); // \NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO
$label_position = 'label_position_example'; // string | Default positioning of labels.
$language = 'language_example'; // string | Language of the form
$locale = 'locale_example'; // string | Locale of the form
$name = 'name_example'; // string | Name of the form
$progressive_profiling = True; // bool | Whether progressive profiling is enabled for the form
$theme = 'theme_example'; // string | CSS theme for the form to use

try {
    $result = $apiInstance->updateFormsUsingPOST($id, $custom_css, $description, $font_family, $font_size, $known_visitor, $label_position, $language, $locale, $name, $progressive_profiling, $theme);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateFormsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **custom_css** | **string**| Custom CSS to apply to the form | [optional]
 **description** | **string**| Description of the form | [optional]
 **font_family** | **string**| font-family property for the form | [optional]
 **font_size** | **string**| font-size property of the form | [optional]
 **known_visitor** | [**\NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO**](../Model/FormKnownVisitorDTO.md)|  | [optional]
 **label_position** | **string**| Default positioning of labels. | [optional]
 **language** | **string**| Language of the form | [optional]
 **locale** | **string**| Locale of the form | [optional]
 **name** | **string**| Name of the form | [optional]
 **progressive_profiling** | **bool**| Whether progressive profiling is enabled for the form | [optional]
 **theme** | **string**| CSS theme for the form to use | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateThankYouPageByIdUsingPOST()`

```php
updateThankYouPageByIdUsingPOST($id, $thankyou): \NecLimDul\MarketoRest\Asset\Model\ResponseOfThankYouPageResponse
```

Update Thank You Page

Updates the thank you page configuration for a given form.  This update is destructive and the resulting draft will not have any memory of the previous configuration.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$thankyou = new \NecLimDul\MarketoRest\Asset\Model\ThankYouPageRequest(); // \NecLimDul\MarketoRest\Asset\Model\ThankYouPageRequest[] | JSON array of followup rules

try {
    $result = $apiInstance->updateThankYouPageByIdUsingPOST($id, $thankyou);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateThankYouPageByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **thankyou** | [**\NecLimDul\MarketoRest\Asset\Model\ThankYouPageRequest[]**](../Model/\NecLimDul\MarketoRest\Asset\Model\ThankYouPageRequest.md)| JSON array of followup rules | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfThankYouPageResponse**](../Model/ResponseOfThankYouPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# NecLimDul\MarketoRest\Asset\FormsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveFromUsingPOST**](FormsApi.md#approveFromUsingPOST) | **POST** /rest/asset/v1/form/{id}/approveDraft.json | Approve Form Draft
[**browseForms2UsingGET**](FormsApi.md#browseForms2UsingGET) | **GET** /rest/asset/v1/forms.json | Get Forms
[**cloneLpFormsUsingPOST**](FormsApi.md#cloneLpFormsUsingPOST) | **POST** /rest/asset/v1/form/{id}/clone.json | Clone Form
[**createLpFormsUsingPOST**](FormsApi.md#createLpFormsUsingPOST) | **POST** /rest/asset/v1/forms.json | Create Form
[**deleteFormByIdUsingPOST**](FormsApi.md#deleteFormByIdUsingPOST) | **POST** /rest/asset/v1/form/{id}/delete.json | Delete Form
[**discardFormByIdUsingPOST**](FormsApi.md#discardFormByIdUsingPOST) | **POST** /rest/asset/v1/form/{id}/discardDraft.json | Discard Form Draft
[**getFormUsedByUsingGET**](FormsApi.md#getFormUsedByUsingGET) | **GET** /rest/asset/v1/form/{id}/usedBy.json | Get Form Used By
[**getLpFormByIdUsingGET**](FormsApi.md#getLpFormByIdUsingGET) | **GET** /rest/asset/v1/form/{id}.json | Get Form By Id
[**getLpFormByNameUsingGET**](FormsApi.md#getLpFormByNameUsingGET) | **GET** /rest/asset/v1/form/byName.json | Get Form by Name
[**getThankYouPageByIdUsingGET**](FormsApi.md#getThankYouPageByIdUsingGET) | **GET** /rest/asset/v1/form/{id}/thankYouPage.json | Get Thank You Page by Form Id
[**updateFormSubmitButtonUsingPOST**](FormsApi.md#updateFormSubmitButtonUsingPOST) | **POST** /rest/asset/v1/form/{id}/submitButton.json | Update Submit Button
[**updateFormsUsingPOST**](FormsApi.md#updateFormsUsingPOST) | **POST** /rest/asset/v1/form/{id}.json | Update Form Metadata
[**updateThankYouPageByIdUsingPOST**](FormsApi.md#updateThankYouPageByIdUsingPOST) | **POST** /rest/asset/v1/form/{id}/thankYouPage.json | Update Thank You Page


# **approveFromUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse approveFromUsingPOST($id)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseForms2UsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse browseForms2UsingGET($folder, $status, $max_return, $offset)

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
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$status = "status_example"; // string | Status filter for draft or approved versions
$max_return = "max_return_example"; // string | Maximum number of channels to return.  Max 200, default 20
$offset = "offset_example"; // string | Integer offset for paging

try {
    $result = $apiInstance->browseForms2UsingGET($folder, $status, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->browseForms2UsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneLpFormsUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse cloneLpFormsUsingPOST($id, $clone_form_request)

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
$clone_form_request = new \NecLimDul\MarketoRest\Asset\Model\CloneFormRequest(); // \NecLimDul\MarketoRest\Asset\Model\CloneFormRequest | cloneFormRequest

try {
    $result = $apiInstance->cloneLpFormsUsingPOST($id, $clone_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->cloneLpFormsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_form_request** | [**\NecLimDul\MarketoRest\Asset\Model\CloneFormRequest**](../Model/CloneFormRequest.md)| cloneFormRequest | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createLpFormsUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse createLpFormsUsingPOST($create_form_request)

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
$create_form_request = new \NecLimDul\MarketoRest\Asset\Model\CreateLpFormRequest(); // \NecLimDul\MarketoRest\Asset\Model\CreateLpFormRequest | createFormRequest

try {
    $result = $apiInstance->createLpFormsUsingPOST($create_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->createLpFormsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_form_request** | [**\NecLimDul\MarketoRest\Asset\Model\CreateLpFormRequest**](../Model/CreateLpFormRequest.md)| createFormRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFormByIdUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteFormByIdUsingPOST($id)

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

# **discardFormByIdUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse discardFormByIdUsingPOST($id)

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

# **getFormUsedByUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfFormUsedByResponse getFormUsedByUsingGET($id, $offset, $max_return)

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
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLpFormByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse getLpFormByIdUsingGET($id, $status)

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
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getLpFormByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getLpFormByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLpFormByNameUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse getLpFormByNameUsingGET($name, $status, $folder)

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
$name = "name_example"; // string | Name of the form
$status = "status_example"; // string | Status filter for draft or approved versions
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $apiInstance->getLpFormByNameUsingGET($name, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getLpFormByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getThankYouPageByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfThankYouPageResponse getThankYouPageByIdUsingGET($id, $status)

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
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getThankYouPageByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->getThankYouPageByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFormSubmitButtonUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse updateFormSubmitButtonUsingPOST($id, $submit_button_request)

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
$submit_button_request = new \NecLimDul\MarketoRest\Asset\Model\SubmitButtonRequest(); // \NecLimDul\MarketoRest\Asset\Model\SubmitButtonRequest | submitButtonRequest

try {
    $result = $apiInstance->updateFormSubmitButtonUsingPOST($id, $submit_button_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateFormSubmitButtonUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **submit_button_request** | [**\NecLimDul\MarketoRest\Asset\Model\SubmitButtonRequest**](../Model/SubmitButtonRequest.md)| submitButtonRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFormsUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse updateFormsUsingPOST($id, $update_form_meta_data_request)

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
$update_form_meta_data_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateFormMetaDataRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateFormMetaDataRequest | updateFormMetaDataRequest

try {
    $result = $apiInstance->updateFormsUsingPOST($id, $update_form_meta_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateFormsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_form_meta_data_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateFormMetaDataRequest**](../Model/UpdateFormMetaDataRequest.md)| updateFormMetaDataRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormResponse**](../Model/ResponseOfLpFormResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateThankYouPageByIdUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfThankYouPageResponse updateThankYouPageByIdUsingPOST($id, $thank_you_page_request)

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
$thank_you_page_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateThankYouPageRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateThankYouPageRequest | thankYouPageRequest

try {
    $result = $apiInstance->updateThankYouPageByIdUsingPOST($id, $thank_you_page_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormsApi->updateThankYouPageByIdUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **thank_you_page_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateThankYouPageRequest**](../Model/UpdateThankYouPageRequest.md)| thankYouPageRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfThankYouPageResponse**](../Model/ResponseOfThankYouPageResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


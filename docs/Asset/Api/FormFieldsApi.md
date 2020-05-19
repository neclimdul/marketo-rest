# NecLimDul\MarketoRest\Asset\FormFieldsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFieldSetUsingPOST**](FormFieldsApi.md#addFieldSetUsingPOST) | **POST** /rest/asset/v1/form/{id}/fieldSet.json | Add Fieldset to Form
[**addFieldToAFormUsingPOST**](FormFieldsApi.md#addFieldToAFormUsingPOST) | **POST** /rest/asset/v1/form/{id}/fields.json | Add Field to Form
[**addFormFieldVisibilityRuleUsingPOST**](FormFieldsApi.md#addFormFieldVisibilityRuleUsingPOST) | **POST** /rest/asset/v1/form/{formId}/field/{fieldId}/visibility.json | Add Form Field Visibility Rules
[**addRichTextFieldUsingPOST**](FormFieldsApi.md#addRichTextFieldUsingPOST) | **POST** /rest/asset/v1/form/{id}/richText.json | Add Rich Text Field
[**deleteFormFieldFromFieldSetUsingPOST**](FormFieldsApi.md#deleteFormFieldFromFieldSetUsingPOST) | **POST** /rest/asset/v1/form/{id}/fieldSet/{fieldSetId}/field/{fieldId}/delete.json | Delete Field from Fieldset
[**deleteFormFieldUsingPOST**](FormFieldsApi.md#deleteFormFieldUsingPOST) | **POST** /rest/asset/v1/form/{id}/field/{fieldId}/delete.json | Delete Form Field
[**getAllFieldsUsingGET**](FormFieldsApi.md#getAllFieldsUsingGET) | **GET** /rest/asset/v1/form/fields.json | Get Available Form Fields
[**getAllProgramMemberFieldsUsingGET**](FormFieldsApi.md#getAllProgramMemberFieldsUsingGET) | **GET** /rest/asset/v1/form/programMemberFields.json | Get Available Form Program Member Fields
[**getFormFieldByFormVidUsingGET**](FormFieldsApi.md#getFormFieldByFormVidUsingGET) | **GET** /rest/asset/v1/form/{id}/fields.json | Get Fields for Form
[**updateFieldPositionsUsingPOST**](FormFieldsApi.md#updateFieldPositionsUsingPOST) | **POST** /rest/asset/v1/form/{id}/reArrange.json | Update Field Positions
[**updateFormFieldUsingPOST**](FormFieldsApi.md#updateFormFieldUsingPOST) | **POST** /rest/asset/v1/form/{id}/field/{fieldId}.json | Update Form Field


# **addFieldSetUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse addFieldSetUsingPOST($id, $add_form_field_set_request)

Add Fieldset to Form

Adds a field set to the target form.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$add_form_field_set_request = new \NecLimDul\MarketoRest\Asset\Model\AddFormFieldSetRequest(); // \NecLimDul\MarketoRest\Asset\Model\AddFormFieldSetRequest | addFormFieldSetRequest

try {
    $result = $apiInstance->addFieldSetUsingPOST($id, $add_form_field_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addFieldSetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **add_form_field_set_request** | [**\NecLimDul\MarketoRest\Asset\Model\AddFormFieldSetRequest**](../Model/AddFormFieldSetRequest.md)| addFormFieldSetRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFieldToAFormUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse addFieldToAFormUsingPOST($id, $add_form_field_set_request)

Add Field to Form

Adds a field to a form. Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$add_form_field_set_request = new \NecLimDul\MarketoRest\Asset\Model\AddFormFieldRequest(); // \NecLimDul\MarketoRest\Asset\Model\AddFormFieldRequest | addFormFieldSetRequest

try {
    $result = $apiInstance->addFieldToAFormUsingPOST($id, $add_form_field_set_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addFieldToAFormUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **add_form_field_set_request** | [**\NecLimDul\MarketoRest\Asset\Model\AddFormFieldRequest**](../Model/AddFormFieldRequest.md)| addFormFieldSetRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addFormFieldVisibilityRuleUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfFormVisibilityRuleResponse addFormFieldVisibilityRuleUsingPOST($form_id, $field_id, $add_form_field_visibility_request)

Add Form Field Visibility Rules

Adds a visibility rule to the target form field.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$form_id = 56; // int | formId
$field_id = "field_id_example"; // string | fieldId
$add_form_field_visibility_request = new \NecLimDul\MarketoRest\Asset\Model\AddFormFieldVisibilityRequest(); // \NecLimDul\MarketoRest\Asset\Model\AddFormFieldVisibilityRequest | addFormFieldVisibilityRequest

try {
    $result = $apiInstance->addFormFieldVisibilityRuleUsingPOST($form_id, $field_id, $add_form_field_visibility_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addFormFieldVisibilityRuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_id** | **int**| formId |
 **field_id** | **string**| fieldId |
 **add_form_field_visibility_request** | [**\NecLimDul\MarketoRest\Asset\Model\AddFormFieldVisibilityRequest**](../Model/AddFormFieldVisibilityRequest.md)| addFormFieldVisibilityRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFormVisibilityRuleResponse**](../Model/ResponseOfFormVisibilityRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addRichTextFieldUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse addRichTextFieldUsingPOST($id, $add_rich_text_request)

Add Rich Text Field

Adds a rich-text type field to the form.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$add_rich_text_request = new \NecLimDul\MarketoRest\Asset\Model\AddRichTextRequest(); // \NecLimDul\MarketoRest\Asset\Model\AddRichTextRequest | addRichTextRequest

try {
    $result = $apiInstance->addRichTextFieldUsingPOST($id, $add_rich_text_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addRichTextFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **add_rich_text_request** | [**\NecLimDul\MarketoRest\Asset\Model\AddRichTextRequest**](../Model/AddRichTextRequest.md)| addRichTextRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFormFieldFromFieldSetUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteFormFieldFromFieldSetUsingPOST($id, $field_set_id, $field_id)

Delete Field from Fieldset

Removes the target field from the fieldset. Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$field_set_id = "field_set_id_example"; // string | fieldSetId
$field_id = "field_id_example"; // string | fieldId

try {
    $result = $apiInstance->deleteFormFieldFromFieldSetUsingPOST($id, $field_set_id, $field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->deleteFormFieldFromFieldSetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **field_set_id** | **string**| fieldSetId |
 **field_id** | **string**| fieldId |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteFormFieldUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteFormFieldUsingPOST($id, $field_id)

Delete Form Field

Deletes a field from a form. Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$field_id = "field_id_example"; // string | fieldId

try {
    $result = $apiInstance->deleteFormFieldUsingPOST($id, $field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->deleteFormFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **field_id** | **string**| fieldId |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllFieldsUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfFieldsMetaDataResponse getAllFieldsUsingGET($max_return, $offset)

Get Available Form Fields

Retrieves a list of all valid fields for use in forms. Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_return = 56; // int | Maximum number of fields to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getAllFieldsUsingGET($max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->getAllFieldsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of fields to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFieldsMetaDataResponse**](../Model/ResponseOfFieldsMetaDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllProgramMemberFieldsUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfFieldsMetaDataResponse getAllProgramMemberFieldsUsingGET($max_return, $offset)

Get Available Form Program Member Fields

Retrieves a list of all valid Program Member fields for use in forms. Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_return = 56; // int | Maximum number of fields to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getAllProgramMemberFieldsUsingGET($max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->getAllProgramMemberFieldsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of fields to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFieldsMetaDataResponse**](../Model/ResponseOfFieldsMetaDataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFormFieldByFormVidUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse getFormFieldByFormVidUsingGET($id, $status)

Get Fields for Form

Retrieves the list of fields in the target form.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getFormFieldByFormVidUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->getFormFieldByFormVidUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFieldPositionsUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse updateFieldPositionsUsingPOST($id, $re_arrange_request)

Update Field Positions

Reorders the list of fields in a form. Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$re_arrange_request = new \NecLimDul\MarketoRest\Asset\Model\ReArrangeRequest(); // \NecLimDul\MarketoRest\Asset\Model\ReArrangeRequest | reArrangeRequest

try {
    $result = $apiInstance->updateFieldPositionsUsingPOST($id, $re_arrange_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->updateFieldPositionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **re_arrange_request** | [**\NecLimDul\MarketoRest\Asset\Model\ReArrangeRequest**](../Model/ReArrangeRequest.md)| reArrangeRequest | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFormFieldUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse updateFormFieldUsingPOST($id, $field_id, $update_form_field_request)

Update Form Field

Updates the configuration for that target field. Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\FormFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$field_id = "field_id_example"; // string | fieldId
$update_form_field_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateFormFieldRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateFormFieldRequest | updateFormFieldRequest

try {
    $result = $apiInstance->updateFormFieldUsingPOST($id, $field_id, $update_form_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->updateFormFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **field_id** | **string**| fieldId |
 **update_form_field_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateFormFieldRequest**](../Model/UpdateFormFieldRequest.md)| updateFormFieldRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


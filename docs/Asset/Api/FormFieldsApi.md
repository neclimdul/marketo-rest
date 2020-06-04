# NecLimDul\MarketoRest\Asset\FormFieldsApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addFieldSetUsingPOST()**](FormFieldsApi.md#addFieldSetUsingPOST) | **POST** /rest/asset/v1/form/{id}/fieldSet.json | Add Fieldset to Form
[**addFieldToAFormUsingPOST()**](FormFieldsApi.md#addFieldToAFormUsingPOST) | **POST** /rest/asset/v1/form/{id}/fields.json | Add Field to Form
[**addFormFieldVisibilityRuleUsingPOST()**](FormFieldsApi.md#addFormFieldVisibilityRuleUsingPOST) | **POST** /rest/asset/v1/form/{formId}/field/{fieldId}/visibility.json | Add Form Field Visibility Rules
[**addRichTextFieldUsingPOST()**](FormFieldsApi.md#addRichTextFieldUsingPOST) | **POST** /rest/asset/v1/form/{id}/richText.json | Add Rich Text Field
[**deleteFormFieldFromFieldSetUsingPOST()**](FormFieldsApi.md#deleteFormFieldFromFieldSetUsingPOST) | **POST** /rest/asset/v1/form/{id}/fieldSet/{fieldSetId}/field/{fieldId}/delete.json | Delete Field from Fieldset
[**deleteFormFieldUsingPOST()**](FormFieldsApi.md#deleteFormFieldUsingPOST) | **POST** /rest/asset/v1/form/{id}/field/{fieldId}/delete.json | Delete Form Field
[**getAllFieldsUsingGET()**](FormFieldsApi.md#getAllFieldsUsingGET) | **GET** /rest/asset/v1/form/fields.json | Get Available Form Fields
[**getAllProgramMemberFieldsUsingGET()**](FormFieldsApi.md#getAllProgramMemberFieldsUsingGET) | **GET** /rest/asset/v1/form/programMemberFields.json | Get Available Form Program Member Fields
[**getFormFieldByFormVidUsingGET()**](FormFieldsApi.md#getFormFieldByFormVidUsingGET) | **GET** /rest/asset/v1/form/{id}/fields.json | Get Fields for Form
[**updateFieldPositionsUsingPOST()**](FormFieldsApi.md#updateFieldPositionsUsingPOST) | **POST** /rest/asset/v1/form/{id}/reArrange.json | Update Field Positions
[**updateFormFieldUsingPOST()**](FormFieldsApi.md#updateFormFieldUsingPOST) | **POST** /rest/asset/v1/form/{id}/field/{fieldId}.json | Update Form Field


## `addFieldSetUsingPOST()`

```php
addFieldSetUsingPOST($id, $label): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse
```

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
$label = 'label_example'; // string | Label of the fieldset

try {
    $result = $apiInstance->addFieldSetUsingPOST($id, $label);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addFieldSetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **label** | **string**| Label of the fieldset |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addFieldToAFormUsingPOST()`

```php
addFieldToAFormUsingPOST($id, $field_id, $blank_fields, $default_value, $field_width, $form_prefill, $is_sensitive, $hint_text, $initially_checked, $instructions, $label, $label_to_right, $label_width, $mask_input, $max_length, $max_value, $min_value, $multi_select, $required, $validation_message, $values, $visible_lines): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse
```

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
$field_id = 'field_id_example'; // string | Id of the field
$blank_fields = 56; // int | Number of blank fields to show when progressive profiling is enabled
$default_value = 'default_value_example'; // string | Optional default value for the field
$field_width = 56; // int | Width of the input or select element
$form_prefill = True; // bool | Whether the field should prefill.  Default true
$is_sensitive = True; // bool | Whether the field is marked as sensitive.  Default false
$hint_text = 'hint_text_example'; // string | Hint text for the field
$initially_checked = True; // bool | Whether the field should be checked upon loading.  Default false
$instructions = 'instructions_example'; // string | Instructions for the field
$label = 'label_example'; // string | Label of the field
$label_to_right = True; // bool | Whether the field label should be displayed to the right of the input/select element. Default false
$label_width = 56; // int | Width of the field label element
$mask_input = 'mask_input_example'; // string | Optional input mask for the field
$max_length = 56; // int | Maximum length for text type fields
$max_value = 3.4; // float | Maximum value accepted by the field
$min_value = 3.4; // float | Minimum value accepted by the field
$multi_select = True; // bool | Whether the field should allow multiple selections. Default false
$required = True; // bool | Whether the field is required to submit the form.  Default false
$validation_message = 'validation_message_example'; // string | Validation message to display on failed validation
$values = 'values_example'; // string | Comma-separated list of accepted values for the field.  Only for select-field types
$visible_lines = 56; // int | Number of lines to display for the field element

try {
    $result = $apiInstance->addFieldToAFormUsingPOST($id, $field_id, $blank_fields, $default_value, $field_width, $form_prefill, $is_sensitive, $hint_text, $initially_checked, $instructions, $label, $label_to_right, $label_width, $mask_input, $max_length, $max_value, $min_value, $multi_select, $required, $validation_message, $values, $visible_lines);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addFieldToAFormUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **field_id** | **string**| Id of the field |
 **blank_fields** | **int**| Number of blank fields to show when progressive profiling is enabled | [optional]
 **default_value** | **string**| Optional default value for the field | [optional]
 **field_width** | **int**| Width of the input or select element | [optional]
 **form_prefill** | **bool**| Whether the field should prefill.  Default true | [optional]
 **is_sensitive** | **bool**| Whether the field is marked as sensitive.  Default false | [optional]
 **hint_text** | **string**| Hint text for the field | [optional]
 **initially_checked** | **bool**| Whether the field should be checked upon loading.  Default false | [optional]
 **instructions** | **string**| Instructions for the field | [optional]
 **label** | **string**| Label of the field | [optional]
 **label_to_right** | **bool**| Whether the field label should be displayed to the right of the input/select element. Default false | [optional]
 **label_width** | **int**| Width of the field label element | [optional]
 **mask_input** | **string**| Optional input mask for the field | [optional]
 **max_length** | **int**| Maximum length for text type fields | [optional]
 **max_value** | **float**| Maximum value accepted by the field | [optional]
 **min_value** | **float**| Minimum value accepted by the field | [optional]
 **multi_select** | **bool**| Whether the field should allow multiple selections. Default false | [optional]
 **required** | **bool**| Whether the field is required to submit the form.  Default false | [optional]
 **validation_message** | **string**| Validation message to display on failed validation | [optional]
 **values** | **string**| Comma-separated list of accepted values for the field.  Only for select-field types | [optional]
 **visible_lines** | **int**| Number of lines to display for the field element | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addFormFieldVisibilityRuleUsingPOST()`

```php
addFormFieldVisibilityRuleUsingPOST($form_id, $field_id, $visibility_rule): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFormVisibilityRuleResponse
```

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
$field_id = 'field_id_example'; // string | fieldId
$visibility_rule = new \NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRequest(); // \NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRequest

try {
    $result = $apiInstance->addFormFieldVisibilityRuleUsingPOST($form_id, $field_id, $visibility_rule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addFormFieldVisibilityRuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **form_id** | **int**| formId |
 **field_id** | **string**| fieldId |
 **visibility_rule** | [**\NecLimDul\MarketoRest\Asset\Model\FormFieldVisibilityRequest**](../Model/FormFieldVisibilityRequest.md)|  | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfFormVisibilityRuleResponse**](../Model/ResponseOfFormVisibilityRuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `addRichTextFieldUsingPOST()`

```php
addRichTextFieldUsingPOST($id, $text): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse
```

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
$text = 'text_example'; // string | Multipart file. HTML Content for the rich text field.

try {
    $result = $apiInstance->addRichTextFieldUsingPOST($id, $text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->addRichTextFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **text** | **string**| Multipart file. HTML Content for the rich text field. |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFormFieldFromFieldSetUsingPOST()`

```php
deleteFormFieldFromFieldSetUsingPOST($id, $field_set_id, $field_id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

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
$field_set_id = 'field_set_id_example'; // string | fieldSetId
$field_id = 'field_id_example'; // string | fieldId

try {
    $result = $apiInstance->deleteFormFieldFromFieldSetUsingPOST($id, $field_set_id, $field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->deleteFormFieldFromFieldSetUsingPOST: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteFormFieldUsingPOST()`

```php
deleteFormFieldUsingPOST($id, $field_id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

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
$field_id = 'field_id_example'; // string | fieldId

try {
    $result = $apiInstance->deleteFormFieldUsingPOST($id, $field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->deleteFormFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllFieldsUsingGET()`

```php
getAllFieldsUsingGET($max_return, $offset): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFieldsMetaDataResponse
```

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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAllProgramMemberFieldsUsingGET()`

```php
getAllProgramMemberFieldsUsingGET($max_return, $offset): \NecLimDul\MarketoRest\Asset\Model\ResponseOfFieldsMetaDataResponse
```

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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormFieldByFormVidUsingGET()`

```php
getFormFieldByFormVidUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse
```

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
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getFormFieldByFormVidUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->getFormFieldByFormVidUsingGET: ', $e->getMessage(), PHP_EOL;
}
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

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFieldPositionsUsingPOST()`

```php
updateFieldPositionsUsingPOST($id, $positions): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

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
$positions = new \NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition(); // \NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition[]

try {
    $result = $apiInstance->updateFieldPositionsUsingPOST($id, $positions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->updateFieldPositionsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **positions** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition[]**](../Model/\NecLimDul\MarketoRest\Asset\Model\UpdateFieldPosition.md)|  | [optional]

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

## `updateFormFieldUsingPOST()`

```php
updateFormFieldUsingPOST($id, $field_id, $blank_fields, $default_value, $field_type, $field_width, $form_prefill, $is_sensitive, $hint_text, $initially_checked, $instructions, $label, $label_to_right, $label_width, $mask_input, $max_length, $max_value, $min_value, $multi_select, $required, $validation_message, $values, $visible_lines): \NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse
```

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
$field_id = 'field_id_example'; // string | fieldId
$blank_fields = 56; // int | Number of blank fields to show when progressive profiling is enabled
$default_value = 'default_value_example'; // string | Optional default value for the field
$field_type = 'field_type_example'; // string | Type of field
$field_width = 56; // int | Width of the input or select element
$form_prefill = True; // bool | Whether the field should prefill.  Default true
$is_sensitive = True; // bool | Whether the field is marked as sensitive.  Default false
$hint_text = 'hint_text_example'; // string | Hint text for the field
$initially_checked = True; // bool | Whether the field should be checked upon loading.  Default false
$instructions = 'instructions_example'; // string | Instructions for the field
$label = 'label_example'; // string | Label of the field
$label_to_right = True; // bool | Whether the field label should be displayed to the right of the input/select element. Default false
$label_width = 56; // int | Width of the field label element
$mask_input = 'mask_input_example'; // string | Optional input mask for the field
$max_length = 56; // int | Maximum length for text type fields
$max_value = 3.4; // float | Maximum value accepted by the field
$min_value = 3.4; // float | Minimum value accepted by the field
$multi_select = True; // bool | Whether the field should allow multiple selections. Default false
$required = True; // bool | Whether the field is required to submit the form.  Default false
$validation_message = 'validation_message_example'; // string | Validation message to display on failed validation
$values = 'values_example'; // string | Array of JSON objects that contain field attributes. Only for select-field types.  Example: values=[{'label':'Select...','value':'','isDefault':true,'selected':true}, {'label':'MR','value':'Mr'}, {'label':'MS','value':'Ms'}, {'label':'MRS','value':'Mrs'}, {'label':'DR','value':'Dr'}, {'label':'PROF','value':'Prof'}]
$visible_lines = 56; // int | Number of lines to display for the field element

try {
    $result = $apiInstance->updateFormFieldUsingPOST($id, $field_id, $blank_fields, $default_value, $field_type, $field_width, $form_prefill, $is_sensitive, $hint_text, $initially_checked, $instructions, $label, $label_to_right, $label_width, $mask_input, $max_length, $max_value, $min_value, $multi_select, $required, $validation_message, $values, $visible_lines);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FormFieldsApi->updateFormFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **field_id** | **string**| fieldId |
 **blank_fields** | **int**| Number of blank fields to show when progressive profiling is enabled | [optional]
 **default_value** | **string**| Optional default value for the field | [optional]
 **field_type** | **string**| Type of field | [optional]
 **field_width** | **int**| Width of the input or select element | [optional]
 **form_prefill** | **bool**| Whether the field should prefill.  Default true | [optional]
 **is_sensitive** | **bool**| Whether the field is marked as sensitive.  Default false | [optional]
 **hint_text** | **string**| Hint text for the field | [optional]
 **initially_checked** | **bool**| Whether the field should be checked upon loading.  Default false | [optional]
 **instructions** | **string**| Instructions for the field | [optional]
 **label** | **string**| Label of the field | [optional]
 **label_to_right** | **bool**| Whether the field label should be displayed to the right of the input/select element. Default false | [optional]
 **label_width** | **int**| Width of the field label element | [optional]
 **mask_input** | **string**| Optional input mask for the field | [optional]
 **max_length** | **int**| Maximum length for text type fields | [optional]
 **max_value** | **float**| Maximum value accepted by the field | [optional]
 **min_value** | **float**| Minimum value accepted by the field | [optional]
 **multi_select** | **bool**| Whether the field should allow multiple selections. Default false | [optional]
 **required** | **bool**| Whether the field is required to submit the form.  Default false | [optional]
 **validation_message** | **string**| Validation message to display on failed validation | [optional]
 **values** | **string**| Array of JSON objects that contain field attributes. Only for select-field types.  Example: values&#x3D;[{&#39;label&#39;:&#39;Select...&#39;,&#39;value&#39;:&#39;&#39;,&#39;isDefault&#39;:true,&#39;selected&#39;:true}, {&#39;label&#39;:&#39;MR&#39;,&#39;value&#39;:&#39;Mr&#39;}, {&#39;label&#39;:&#39;MS&#39;,&#39;value&#39;:&#39;Ms&#39;}, {&#39;label&#39;:&#39;MRS&#39;,&#39;value&#39;:&#39;Mrs&#39;}, {&#39;label&#39;:&#39;DR&#39;,&#39;value&#39;:&#39;Dr&#39;}, {&#39;label&#39;:&#39;PROF&#39;,&#39;value&#39;:&#39;Prof&#39;}] | [optional]
 **visible_lines** | **int**| Number of lines to display for the field element | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfLpFormFieldResponse**](../Model/ResponseOfLpFormFieldResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

# NecLimDul\MarketoRest\Asset\EmailsApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**addModuleUsingPOST()**](EmailsApi.md#addModuleUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/add.json | Add Email Module
[**approveDraftUsingPOST()**](EmailsApi.md#approveDraftUsingPOST) | **POST** /rest/asset/v1/email/{id}/approveDraft.json | Approve Email Draft
[**cloneEmailUsingPOST()**](EmailsApi.md#cloneEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}/clone.json | Clone Email
[**createEmailFullContentUsingPOST()**](EmailsApi.md#createEmailFullContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/fullContent.json | Update Email Full Content
[**createEmailUsingPOST()**](EmailsApi.md#createEmailUsingPOST) | **POST** /rest/asset/v1/emails.json | Create Email
[**deleteEmailUsingPOST()**](EmailsApi.md#deleteEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}/delete.json | Delete Email
[**deleteModuleUsingPOST()**](EmailsApi.md#deleteModuleUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/delete.json | Delete Module
[**discardDraftUsingPOST()**](EmailsApi.md#discardDraftUsingPOST) | **POST** /rest/asset/v1/email/{id}/discardDraft.json | Discard Email Draft
[**duplicateModuleUsingPOST()**](EmailsApi.md#duplicateModuleUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/duplicate.json | Duplicate Email Module
[**getEmailByIdUsingGET()**](EmailsApi.md#getEmailByIdUsingGET) | **GET** /rest/asset/v1/email/{id}.json | Get Email By Id
[**getEmailByNameUsingGET()**](EmailsApi.md#getEmailByNameUsingGET) | **GET** /rest/asset/v1/email/byName.json | Get Email by Name
[**getEmailCCFieldsUsingGET()**](EmailsApi.md#getEmailCCFieldsUsingGET) | **GET** /rest/asset/v1/email/ccFields.json | Get Email CC Fields
[**getEmailContentByIdUsingGET()**](EmailsApi.md#getEmailContentByIdUsingGET) | **GET** /rest/asset/v1/email/{id}/content.json | Get Email Content
[**getEmailDynamicContentUsingGET()**](EmailsApi.md#getEmailDynamicContentUsingGET) | **GET** /rest/asset/v1/email/{id}/dynamicContent/{contentId}.json | Get Email Dynamic Content
[**getEmailFullContentUsingGET()**](EmailsApi.md#getEmailFullContentUsingGET) | **GET** /rest/asset/v1/email/{id}/fullContent.json | Get Email Full Content
[**getEmailUsingGET()**](EmailsApi.md#getEmailUsingGET) | **GET** /rest/asset/v1/emails.json | Get Emails
[**getEmailVariablesUsingGET()**](EmailsApi.md#getEmailVariablesUsingGET) | **GET** /rest/asset/v1/email/{id}/variables.json | Get Email Variables
[**rearrangeModulesUsingPOST()**](EmailsApi.md#rearrangeModulesUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/rearrange.json | Rearrange Email Modules
[**renameUsingPOST()**](EmailsApi.md#renameUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/rename.json | Rename Email Module
[**sendSampleEmailUsingPOST()**](EmailsApi.md#sendSampleEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}/sendSample.json | Send Sample Email
[**unapproveDraftUsingPOST()**](EmailsApi.md#unapproveDraftUsingPOST) | **POST** /rest/asset/v1/email/{id}/unapprove.json | Unapprove Email
[**updateEmailComponentContentUsingPOST()**](EmailsApi.md#updateEmailComponentContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{htmlId}.json | Update Email Content Section
[**updateEmailContentUsingPOST()**](EmailsApi.md#updateEmailContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/content.json | Update Email Content
[**updateEmailDynamicContentUsingPOST()**](EmailsApi.md#updateEmailDynamicContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/dynamicContent/{contentId}.json | Update Email Dynamic Content Section
[**updateEmailUsingPOST()**](EmailsApi.md#updateEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}.json | Update Email Metadata
[**updateVariableUsingPOST()**](EmailsApi.md#updateVariableUsingPOST) | **POST** /rest/asset/v1/email/{id}/variable/{name}.json | Update Email Variable


## `addModuleUsingPOST()`

```php
addModuleUsingPOST($id, $module_id, $name, $index): object
```

Add Email Module

Adds a new module to an email, with the given id.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$module_id = 'module_id_example'; // string | moduleId
$name = 'name_example'; // string | Name of the module
$index = 56; // int | Index of the module.  Determines the order of the module in the email.

try {
    $result = $apiInstance->addModuleUsingPOST($id, $module_id, $name, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->addModuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |
 **name** | **string**| Name of the module |
 **index** | **int**| Index of the module.  Determines the order of the module in the email. |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approveDraftUsingPOST()`

```php
approveDraftUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Approve Email Draft

Approves the current draft of an email.  Required Permissions: Approve Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->approveDraftUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->approveDraftUsingPOST: ', $e->getMessage(), PHP_EOL;
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

## `cloneEmailUsingPOST()`

```php
cloneEmailUsingPOST($id, $folder, $name, $description, $operational): \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse
```

Clone Email

Clones the target email. Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$name = 'name_example'; // string | Name of the new email asset
$description = 'description_example'; // string | Description of the asset
$operational = True; // bool | Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false

try {
    $result = $apiInstance->cloneEmailUsingPOST($id, $folder, $name, $description, $operational);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->cloneEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the new email asset |
 **description** | **string**| Description of the asset | [optional]
 **operational** | **bool**| Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailFullContentUsingPOST()`

```php
createEmailFullContentUsingPOST($id, $content): \NecLimDul\MarketoRest\Asset\Model\ResponseOfUpdateEmailFullContentResponse
```

Update Email Full Content

Replaces the HTML of an Email that has had its relationship broken from its template.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the email
$content = 'content_example'; // string | Multipart file. File containing HTML document to update with.  File cannot include JavaScript or script tags.

try {
    $result = $apiInstance->createEmailFullContentUsingPOST($id, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->createEmailFullContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the email |
 **content** | **string**| Multipart file. File containing HTML document to update with.  File cannot include JavaScript or script tags. |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfUpdateEmailFullContentResponse**](../Model/ResponseOfUpdateEmailFullContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEmailUsingPOST()`

```php
createEmailUsingPOST($folder, $from_email, $from_name, $name, $reply_email, $subject, $template, $description, $operational, $text_only): \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse
```

Create Email

Creates a new email asset.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$from_email = 'from_email_example'; // string | From-address of the Email
$from_name = 'from_name_example'; // string | From-name of the Email
$name = 'name_example'; // string | Name of the email
$reply_email = 'reply_email_example'; // string | Reply-To address of the Email
$subject = 'subject_example'; // string | Subject Line of the Email
$template = 56; // int | Id of the parent template
$description = 'description_example'; // string | Description of the asset
$operational = True; // bool | Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false
$text_only = 'text_only_example'; // string | Setting to include text-only version of email when sent

try {
    $result = $apiInstance->createEmailUsingPOST($folder, $from_email, $from_name, $name, $reply_email, $subject, $template, $description, $operational, $text_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->createEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **from_email** | **string**| From-address of the Email |
 **from_name** | **string**| From-name of the Email |
 **name** | **string**| Name of the email |
 **reply_email** | **string**| Reply-To address of the Email |
 **subject** | **string**| Subject Line of the Email |
 **template** | **int**| Id of the parent template |
 **description** | **string**| Description of the asset | [optional]
 **operational** | **bool**| Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false | [optional]
 **text_only** | **string**| Setting to include text-only version of email when sent | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteEmailUsingPOST()`

```php
deleteEmailUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Delete Email

Deletes the target email.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->deleteEmailUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
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

## `deleteModuleUsingPOST()`

```php
deleteModuleUsingPOST($id, $module_id): object
```

Delete Module

Deletes the given module from the email.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$module_id = 'module_id_example'; // string | moduleId

try {
    $result = $apiInstance->deleteModuleUsingPOST($id, $module_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteModuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `discardDraftUsingPOST()`

```php
discardDraftUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Discard Email Draft

Discards the current draft of an email.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->discardDraftUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->discardDraftUsingPOST: ', $e->getMessage(), PHP_EOL;
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

## `duplicateModuleUsingPOST()`

```php
duplicateModuleUsingPOST($id, $module_id, $name): object
```

Duplicate Email Module

Creates a copy of the designated module in an email.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$module_id = 'module_id_example'; // string | moduleId
$name = 'name_example'; // string | Name of the new module

try {
    $result = $apiInstance->duplicateModuleUsingPOST($id, $module_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->duplicateModuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |
 **name** | **string**| Name of the new module |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailByIdUsingGET()`

```php
getEmailByIdUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse
```

Get Email By Id

Returns an email records by its id.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getEmailByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailByNameUsingGET()`

```php
getEmailByNameUsingGET($name, $status, $folder): \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse
```

Get Email by Name

Returns an email records based on the given name.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the email
$status = 'status_example'; // string | Status filter for draft or approved versions
$folder = 'folder_example'; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $apiInstance->getEmailByNameUsingGET($name, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the email |
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailCCFieldsUsingGET()`

```php
getEmailCCFieldsUsingGET(): \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailCCFieldsResponse
```

Get Email CC Fields

Returns the set of fields enabled for Email CC in the target instance.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getEmailCCFieldsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailCCFieldsUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailCCFieldsResponse**](../Model/ResponseOfEmailCCFieldsResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailContentByIdUsingGET()`

```php
getEmailContentByIdUsingGET($id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailContentResponse
```

Get Email Content

Returns the content of the designated email.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getEmailContentByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailContentByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailContentResponse**](../Model/ResponseOfEmailContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailDynamicContentUsingGET()`

```php
getEmailDynamicContentUsingGET($id, $content_id, $status): \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailDynamicContentResponse
```

Get Email Dynamic Content

Retrieves the dyanmic content record for the given section.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of email
$content_id = 'content_id_example'; // string | Id of email dynamic content section
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getEmailDynamicContentUsingGET($id, $content_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailDynamicContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of email |
 **content_id** | **string**| Id of email dynamic content section |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailDynamicContentResponse**](../Model/ResponseOfEmailDynamicContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailFullContentUsingGET()`

```php
getEmailFullContentUsingGET($id, $status, $lead_id, $type): \NecLimDul\MarketoRest\Asset\Model\ResponseOfGetEmailFullContentResponse
```

Get Email Full Content

Returns the serialized HTML version of the email.  Required Permissions: Read-Only Assets, Read-Write Assets.  If leadId is passed in the request: Read-Only Lead, Read-Write Lead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the email
$status = 'status_example'; // string | Status filter for draft or approved versions.  Defaults to approved if asset is approved, draft if not.
$lead_id = 56; // int | The lead id to impersonate.  Email is rendered as though it was received by this lead.
$type = 'type_example'; // string | Email content type to return.  Default is HTML.

try {
    $result = $apiInstance->getEmailFullContentUsingGET($id, $status, $lead_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailFullContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the email |
 **status** | **string**| Status filter for draft or approved versions.  Defaults to approved if asset is approved, draft if not. | [optional]
 **lead_id** | **int**| The lead id to impersonate.  Email is rendered as though it was received by this lead. | [optional]
 **type** | **string**| Email content type to return.  Default is HTML. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfGetEmailFullContentResponse**](../Model/ResponseOfGetEmailFullContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailUsingGET()`

```php
getEmailUsingGET($status, $folder, $offset, $max_return): \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse
```

Get Emails

Returns a list of emails matching the given filter parameters.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$status = 'status_example'; // string | Status filter for draft or approved versions
$folder = 'folder_example'; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$offset = 56; // int | Integer offset for paging
$max_return = 56; // int | Maximum number of emails to return.  Max 200, default 20

try {
    $result = $apiInstance->getEmailUsingGET($status, $folder, $offset, $max_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **max_return** | **int**| Maximum number of emails to return.  Max 200, default 20 | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmailVariablesUsingGET()`

```php
getEmailVariablesUsingGET($id): object
```

Get Email Variables

Returns a list of the available variables in an email.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->getEmailVariablesUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailVariablesUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `rearrangeModulesUsingPOST()`

```php
rearrangeModulesUsingPOST($id): object
```

Rearrange Email Modules

Rearranges the modules in an email.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->rearrangeModulesUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->rearrangeModulesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renameUsingPOST()`

```php
renameUsingPOST($id, $module_id, $name): object
```

Rename Email Module

Renames a module.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$module_id = 'module_id_example'; // string | moduleId
$name = 'name_example'; // string | New module name

try {
    $result = $apiInstance->renameUsingPOST($id, $module_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->renameUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |
 **name** | **string**| New module name |

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sendSampleEmailUsingPOST()`

```php
sendSampleEmailUsingPOST($id, $email_address, $lead_id, $text_only): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Send Sample Email

Sends a sample email to the given email address.  Leads may be impersonated to populate data for tokens and dynamic content. Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the email
$email_address = 'email_address_example'; // string | Email address to receive sample email
$lead_id = 'lead_id_example'; // string | Id of a lead to impersonate.  Tokens and dynamic content will be populated as though it were sent to the lead.
$text_only = True; // bool | Whether to send to text only version along with the HTML version.  Default false.

try {
    $result = $apiInstance->sendSampleEmailUsingPOST($id, $email_address, $lead_id, $text_only);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->sendSampleEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the email |
 **email_address** | **string**| Email address to receive sample email |
 **lead_id** | **string**| Id of a lead to impersonate.  Tokens and dynamic content will be populated as though it were sent to the lead. | [optional]
 **text_only** | **bool**| Whether to send to text only version along with the HTML version.  Default false. | [optional]

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

## `unapproveDraftUsingPOST()`

```php
unapproveDraftUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Unapprove Email

Unapproves the email and reverts it to a draft-only state.  Required Permissions: Approve Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->unapproveDraftUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->unapproveDraftUsingPOST: ', $e->getMessage(), PHP_EOL;
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

## `updateEmailComponentContentUsingPOST()`

```php
updateEmailComponentContentUsingPOST($id, $html_id, $type, $value, $alt_text, $external_url, $height, $image, $link_url, $over_write, $style, $text_value, $video_url, $width): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Update Email Content Section

Updates the content in the given section.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$html_id = 'html_id_example'; // string | htmlId
$type = 'type_example'; // string | Type of content to set for the section.
$value = 'value_example'; // string | Value to set for the section.  For type Text, the HTML content of the section.  For type DynamicContent, the id of the segmentation to use for the content.  For type Snippet, the id of the snippet to embed
$alt_text = 'alt_text_example'; // string | Sets the value of the alt parameter for the resulting img element
$external_url = 'external_url_example'; // string
$height = 56; // int | Overrides naitve height of the image.  The resulting file will be resized to the given height
$image = 'image_example'; // string | Multipart file that allows you to load an image from your computer
$link_url = 'link_url_example'; // string
$over_write = True; // bool | Allows overwriting of the existing image content section
$style = 'style_example'; // string | Sets the value of the style parameter for the content section
$text_value = 'text_value_example'; // string
$video_url = 'video_url_example'; // string | Sets the Url of the video element.  Videos must be either from YouTube or Vimeo
$width = 56; // int | Overrides native width of the image.  The resulting file will be resized to the given width

try {
    $result = $apiInstance->updateEmailComponentContentUsingPOST($id, $html_id, $type, $value, $alt_text, $external_url, $height, $image, $link_url, $over_write, $style, $text_value, $video_url, $width);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailComponentContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **html_id** | **string**| htmlId |
 **type** | **string**| Type of content to set for the section. |
 **value** | **string**| Value to set for the section.  For type Text, the HTML content of the section.  For type DynamicContent, the id of the segmentation to use for the content.  For type Snippet, the id of the snippet to embed |
 **alt_text** | **string**| Sets the value of the alt parameter for the resulting img element | [optional]
 **external_url** | **string**|  | [optional]
 **height** | **int**| Overrides naitve height of the image.  The resulting file will be resized to the given height | [optional]
 **image** | **string**| Multipart file that allows you to load an image from your computer | [optional]
 **link_url** | **string**|  | [optional]
 **over_write** | **bool**| Allows overwriting of the existing image content section | [optional]
 **style** | **string**| Sets the value of the style parameter for the content section | [optional]
 **text_value** | **string**|  | [optional]
 **video_url** | **string**| Sets the Url of the video element.  Videos must be either from YouTube or Vimeo | [optional]
 **width** | **int**| Overrides native width of the image.  The resulting file will be resized to the given width | [optional]

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

## `updateEmailContentUsingPOST()`

```php
updateEmailContentUsingPOST($id, $from_email, $from_name, $reply_to, $subject): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Update Email Content

Updates the content of an email.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$from_email = new \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField(); // \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField
$from_name = new \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField(); // \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField
$reply_to = new \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField(); // \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField
$subject = new \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField(); // \NecLimDul\MarketoRest\Asset\Model\EmailHeaderField

try {
    $result = $apiInstance->updateEmailContentUsingPOST($id, $from_email, $from_name, $reply_to, $subject);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **from_email** | [**\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField**](../Model/EmailHeaderField.md)|  | [optional]
 **from_name** | [**\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField**](../Model/EmailHeaderField.md)|  | [optional]
 **reply_to** | [**\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField**](../Model/EmailHeaderField.md)|  | [optional]
 **subject** | [**\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField**](../Model/EmailHeaderField.md)|  | [optional]

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

## `updateEmailDynamicContentUsingPOST()`

```php
updateEmailDynamicContentUsingPOST($id, $content_id, $type, $value, $alt_text, $external_url, $height, $image, $link_url, $over_write, $style, $video_url, $width): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Update Email Dynamic Content Section

Updates dynamic content in the given section.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of email
$content_id = 'content_id_example'; // string | Id of email dynamic content section
$type = 'type_example'; // string | Type of content to set for the section.
$value = 'value_example'; // string | Value to set for the section.  For type Text, the HTML content of the section.  For type DynamicContent, the id of the segmentation to use for the content.  For type Snippet, the id of the snippet to embed
$alt_text = 'alt_text_example'; // string | Sets the value of the alt parameter for the resulting img element
$external_url = 'external_url_example'; // string
$height = 56; // int | Overrides naitve height of the image.  The resulting file will be resized to the given height
$image = 'image_example'; // string | Multipart file that allows you to add an image from your computer
$link_url = 'link_url_example'; // string
$over_write = True; // bool | Allows overwriting of the existing image content section
$style = 'style_example'; // string | Sets the value of the style parameter for the content section
$video_url = 'video_url_example'; // string | Sets the Url of the video element.  Videos must be either from YouTube or Vimeo
$width = 56; // int | Overrides native width of the image.  The resulting file will be resized to the given width

try {
    $result = $apiInstance->updateEmailDynamicContentUsingPOST($id, $content_id, $type, $value, $alt_text, $external_url, $height, $image, $link_url, $over_write, $style, $video_url, $width);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailDynamicContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of email |
 **content_id** | **string**| Id of email dynamic content section |
 **type** | **string**| Type of content to set for the section. |
 **value** | **string**| Value to set for the section.  For type Text, the HTML content of the section.  For type DynamicContent, the id of the segmentation to use for the content.  For type Snippet, the id of the snippet to embed |
 **alt_text** | **string**| Sets the value of the alt parameter for the resulting img element | [optional]
 **external_url** | **string**|  | [optional]
 **height** | **int**| Overrides naitve height of the image.  The resulting file will be resized to the given height | [optional]
 **image** | **string**| Multipart file that allows you to add an image from your computer | [optional]
 **link_url** | **string**|  | [optional]
 **over_write** | **bool**| Allows overwriting of the existing image content section | [optional]
 **style** | **string**| Sets the value of the style parameter for the content section | [optional]
 **video_url** | **string**| Sets the Url of the video element.  Videos must be either from YouTube or Vimeo | [optional]
 **width** | **int**| Overrides native width of the image.  The resulting file will be resized to the given width | [optional]

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

## `updateEmailUsingPOST()`

```php
updateEmailUsingPOST($id, $description, $name, $pre_header, $operational, $published, $text_only, $web_view): \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse
```

Update Email Metadata

Updates the metadata of an email asset.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$description = 'description_example'; // string | Description of the asset
$name = 'name_example'; // string | Name of the Email
$pre_header = 'pre_header_example'; // string | Preheader text for the email
$operational = True; // bool | Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false
$published = True; // bool | Whether the email has been published to Sales Insight.  Default false
$text_only = True; // bool | Setting to include text-only version of email when sent
$web_view = True; // bool | Whether the email has been enabled to allow the 'View as Web Page' when received

try {
    $result = $apiInstance->updateEmailUsingPOST($id, $description, $name, $pre_header, $operational, $published, $text_only, $web_view);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **description** | **string**| Description of the asset | [optional]
 **name** | **string**| Name of the Email | [optional]
 **pre_header** | **string**| Preheader text for the email | [optional]
 **operational** | **bool**| Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false | [optional]
 **published** | **bool**| Whether the email has been published to Sales Insight.  Default false | [optional]
 **text_only** | **bool**| Setting to include text-only version of email when sent | [optional]
 **web_view** | **bool**| Whether the email has been enabled to allow the &#39;View as Web Page&#39; when received | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateVariableUsingPOST()`

```php
updateVariableUsingPOST($id, $name, $value, $module_id): object
```

Update Email Variable

Updates the value of a given variable in an email.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$name = 'name_example'; // string | name
$value = 'value_example'; // string | Value to update variable with
$module_id = 'module_id_example'; // string | Module that variable is associated with. Required for updating module variables. Not needed for global variables.

try {
    $result = $apiInstance->updateVariableUsingPOST($id, $name, $value, $module_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateVariableUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **name** | **string**| name |
 **value** | **string**| Value to update variable with | [optional]
 **module_id** | **string**| Module that variable is associated with. Required for updating module variables. Not needed for global variables. | [optional]

### Return type

**object**

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

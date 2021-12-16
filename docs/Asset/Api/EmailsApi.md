# NecLimDul\MarketoRest\Asset\EmailsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addModuleUsingPOST**](EmailsApi.md#addModuleUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/add.json | Add Email Module
[**approveDraftUsingPOST**](EmailsApi.md#approveDraftUsingPOST) | **POST** /rest/asset/v1/email/{id}/approveDraft.json | Approve Email Draft
[**cloneEmailUsingPOST**](EmailsApi.md#cloneEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}/clone.json | Clone Email
[**createEmailFullContentUsingPOST**](EmailsApi.md#createEmailFullContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/fullContent.json | Update Email Full Content
[**createEmailUsingPOST**](EmailsApi.md#createEmailUsingPOST) | **POST** /rest/asset/v1/emails.json | Create Email
[**deleteEmailUsingPOST**](EmailsApi.md#deleteEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}/delete.json | Delete Email
[**deleteModuleUsingPOST**](EmailsApi.md#deleteModuleUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/delete.json | Delete Module
[**discardDraftUsingPOST**](EmailsApi.md#discardDraftUsingPOST) | **POST** /rest/asset/v1/email/{id}/discardDraft.json | Discard Email Draft
[**duplicateModuleUsingPOST**](EmailsApi.md#duplicateModuleUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/duplicate.json | Duplicate Email Module
[**getEmailByIdUsingGET**](EmailsApi.md#getEmailByIdUsingGET) | **GET** /rest/asset/v1/email/{id}.json | Get Email By Id
[**getEmailByNameUsingGET**](EmailsApi.md#getEmailByNameUsingGET) | **GET** /rest/asset/v1/email/byName.json | Get Email by Name
[**getEmailCCFieldsUsingGET**](EmailsApi.md#getEmailCCFieldsUsingGET) | **GET** /rest/asset/v1/email/ccFields.json | Get Email CC Fields
[**getEmailContentByIdUsingGET**](EmailsApi.md#getEmailContentByIdUsingGET) | **GET** /rest/asset/v1/email/{id}/content.json | Get Email Content
[**getEmailDynamicContentUsingGET**](EmailsApi.md#getEmailDynamicContentUsingGET) | **GET** /rest/asset/v1/email/{id}/dynamicContent/{contentId}.json | Get Email Dynamic Content
[**getEmailFullContentUsingGET**](EmailsApi.md#getEmailFullContentUsingGET) | **GET** /rest/asset/v1/email/{id}/fullContent.json | Get Email Full Content
[**getEmailUsingGET**](EmailsApi.md#getEmailUsingGET) | **GET** /rest/asset/v1/emails.json | Get Emails
[**getEmailVariablesUsingGET**](EmailsApi.md#getEmailVariablesUsingGET) | **GET** /rest/asset/v1/email/{id}/variables.json | Get Email Variables
[**rearrangeModulesUsingPOST**](EmailsApi.md#rearrangeModulesUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/rearrange.json | Rearrange Email Modules
[**renameUsingPOST**](EmailsApi.md#renameUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{moduleId}/rename.json | Rename Email Module
[**sendSampleEmailUsingPOST**](EmailsApi.md#sendSampleEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}/sendSample.json | Send Sample Email
[**unapproveDraftUsingPOST**](EmailsApi.md#unapproveDraftUsingPOST) | **POST** /rest/asset/v1/email/{id}/unapprove.json | Unapprove Email
[**updateEmailComponentContentUsingPOST**](EmailsApi.md#updateEmailComponentContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/content/{htmlId}.json | Update Email Content Section
[**updateEmailContentUsingPOST**](EmailsApi.md#updateEmailContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/content.json | Update Email Content
[**updateEmailDynamicContentUsingPOST**](EmailsApi.md#updateEmailDynamicContentUsingPOST) | **POST** /rest/asset/v1/email/{id}/dynamicContent/{contentId}.json | Update Email Dynamic Content Section
[**updateEmailUsingPOST**](EmailsApi.md#updateEmailUsingPOST) | **POST** /rest/asset/v1/email/{id}.json | Update Email Metadata
[**updateVariableUsingPOST**](EmailsApi.md#updateVariableUsingPOST) | **POST** /rest/asset/v1/email/{id}/variable/{name}.json | Update Email Variable


# **addModuleUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse addModuleUsingPOST($id, $module_id, $name, $index)

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
$module_id = "module_id_example"; // string | moduleId
$name = "name_example"; // string | Name of the module
$index = 56; // int | Index of the module.  Determines the order of the module in the email.

try {
    $result = $apiInstance->addModuleUsingPOST($id, $module_id, $name, $index);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->addModuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |
 **name** | **string**| Name of the module |
 **index** | **int**| Index of the module.  Determines the order of the module in the email. |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse**](../Model/ResponseOfEmailModuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approveDraftUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse approveDraftUsingPOST($id)

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

# **cloneEmailUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse cloneEmailUsingPOST($id, $clone_email_request)

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
$clone_email_request = new \NecLimDul\MarketoRest\Asset\Model\CloneEmailRequest(); // \NecLimDul\MarketoRest\Asset\Model\CloneEmailRequest | cloneEmailRequest

try {
    $result = $apiInstance->cloneEmailUsingPOST($id, $clone_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->cloneEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_email_request** | [**\NecLimDul\MarketoRest\Asset\Model\CloneEmailRequest**](../Model/CloneEmailRequest.md)| cloneEmailRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmailFullContentUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfUpdateEmailFullContentResponse createEmailFullContentUsingPOST($id, $update_email_full_content_request)

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
$update_email_full_content_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateEmailFullContentRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateEmailFullContentRequest | Content is multipart file parameter

try {
    $result = $apiInstance->createEmailFullContentUsingPOST($id, $update_email_full_content_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->createEmailFullContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the email |
 **update_email_full_content_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateEmailFullContentRequest**](../Model/UpdateEmailFullContentRequest.md)| Content is multipart file parameter |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfUpdateEmailFullContentResponse**](../Model/ResponseOfUpdateEmailFullContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmailUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse createEmailUsingPOST($create_email_request)

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
$create_email_request = new \NecLimDul\MarketoRest\Asset\Model\CreateEmailRequest(); // \NecLimDul\MarketoRest\Asset\Model\CreateEmailRequest | createEmailRequest

try {
    $result = $apiInstance->createEmailUsingPOST($create_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->createEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_email_request** | [**\NecLimDul\MarketoRest\Asset\Model\CreateEmailRequest**](../Model/CreateEmailRequest.md)| createEmailRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteEmailUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteEmailUsingPOST($id)

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

# **deleteModuleUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse deleteModuleUsingPOST($id, $module_id)

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
$module_id = "module_id_example"; // string | moduleId

try {
    $result = $apiInstance->deleteModuleUsingPOST($id, $module_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->deleteModuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse**](../Model/ResponseOfEmailModuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discardDraftUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse discardDraftUsingPOST($id)

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

# **duplicateModuleUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse duplicateModuleUsingPOST($id, $module_id, $name)

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
$module_id = "module_id_example"; // string | moduleId
$name = "name_example"; // string | Name of the new module

try {
    $result = $apiInstance->duplicateModuleUsingPOST($id, $module_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->duplicateModuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |
 **name** | **string**| Name of the new module |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse**](../Model/ResponseOfEmailModuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse getEmailByIdUsingGET($id, $status)

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
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getEmailByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailByNameUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse getEmailByNameUsingGET($name, $status, $folder)

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
$name = "name_example"; // string | Name of the email
$status = "status_example"; // string | Status filter for draft or approved versions
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'

try {
    $result = $apiInstance->getEmailByNameUsingGET($name, $status, $folder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailCCFieldsUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailCCFieldsResponse getEmailCCFieldsUsingGET()

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
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailCCFieldsResponse**](../Model/ResponseOfEmailCCFieldsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailContentByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailContentResponse getEmailContentByIdUsingGET($id, $status)

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
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getEmailContentByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailContentByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailDynamicContentUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailDynamicContentResponse getEmailDynamicContentUsingGET($id, $content_id, $status)

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
$content_id = "content_id_example"; // string | Id of email dynamic content section
$status = "status_example"; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getEmailDynamicContentUsingGET($id, $content_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailDynamicContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailFullContentUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfGetEmailFullContentResponse getEmailFullContentUsingGET($id, $status, $lead_id, $type)

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
$status = "status_example"; // string | Status filter for draft or approved versions.  Defaults to approved if asset is approved, draft if not.
$lead_id = 56; // int | The lead id to impersonate.  Email is rendered as though it was received by this lead.
$type = "type_example"; // string | Email content type to return.  Default is HTML.

try {
    $result = $apiInstance->getEmailFullContentUsingGET($id, $status, $lead_id, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailFullContentUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
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

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse getEmailUsingGET($status, $folder, $offset, $max_return, $earliest_updated_at, $latest_updated_at)

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
$status = "status_example"; // string | Status filter for draft or approved versions
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$offset = 56; // int | Integer offset for paging
$max_return = 56; // int | Maximum number of emails to return.  Max 200, default 20
$earliest_updated_at = "earliest_updated_at_example"; // string | Exclude emails prior to this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$latest_updated_at = "latest_updated_at_example"; // string | Exclude emails after this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.

try {
    $result = $apiInstance->getEmailUsingGET($status, $folder, $offset, $max_return, $earliest_updated_at, $latest_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->getEmailUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Status filter for draft or approved versions | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **max_return** | **int**| Maximum number of emails to return.  Max 200, default 20 | [optional]
 **earliest_updated_at** | **string**| Exclude emails prior to this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **latest_updated_at** | **string**| Exclude emails after this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailVariablesUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailVariableResponse getEmailVariablesUsingGET($id)

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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailVariableResponse**](../Model/ResponseOfEmailVariableResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rearrangeModulesUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse rearrangeModulesUsingPOST($id, $positions)

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
$positions = "positions_example"; // string | JSON array of module positions.  Each position must be a JSON object with members 'index' and a 'moduleId'

try {
    $result = $apiInstance->rearrangeModulesUsingPOST($id, $positions);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->rearrangeModulesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **positions** | **string**| JSON array of module positions.  Each position must be a JSON object with members &#39;index&#39; and a &#39;moduleId&#39; | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse**](../Model/ResponseOfEmailModuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **renameUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse renameUsingPOST($id, $module_id, $name)

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
$module_id = "module_id_example"; // string | moduleId
$name = "name_example"; // string | New module name

try {
    $result = $apiInstance->renameUsingPOST($id, $module_id, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->renameUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **module_id** | **string**| moduleId |
 **name** | **string**| New module name |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailModuleResponse**](../Model/ResponseOfEmailModuleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendSampleEmailUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSendSampleResponse sendSampleEmailUsingPOST($id, $send_sample_email_request)

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
$send_sample_email_request = new \NecLimDul\MarketoRest\Asset\Model\SendSampleEmailRequest(); // \NecLimDul\MarketoRest\Asset\Model\SendSampleEmailRequest | sendSampleEmailRequest

try {
    $result = $apiInstance->sendSampleEmailUsingPOST($id, $send_sample_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->sendSampleEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the email |
 **send_sample_email_request** | [**\NecLimDul\MarketoRest\Asset\Model\SendSampleEmailRequest**](../Model/SendSampleEmailRequest.md)| sendSampleEmailRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSendSampleResponse**](../Model/ResponseOfSendSampleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveDraftUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse unapproveDraftUsingPOST($id)

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

# **updateEmailComponentContentUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse updateEmailComponentContentUsingPOST($id, $html_id, $request)

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
$html_id = "html_id_example"; // string | htmlId
$request = new \NecLimDul\MarketoRest\Asset\Model\UpdateEmailComponentContentRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateEmailComponentContentRequest | request

try {
    $result = $apiInstance->updateEmailComponentContentUsingPOST($id, $html_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailComponentContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **html_id** | **string**| htmlId |
 **request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateEmailComponentContentRequest**](../Model/UpdateEmailComponentContentRequest.md)| request |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailContentUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse updateEmailContentUsingPOST($id, $update_email_request)

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
$update_email_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateEmailComponentDataRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateEmailComponentDataRequest | updateEmailRequest

try {
    $result = $apiInstance->updateEmailContentUsingPOST($id, $update_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_email_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateEmailComponentDataRequest**](../Model/UpdateEmailComponentDataRequest.md)| updateEmailRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailDynamicContentUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse updateEmailDynamicContentUsingPOST($id, $content_id, $request)

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
$content_id = "content_id_example"; // string | Id of email dynamic content section
$request = new \NecLimDul\MarketoRest\Asset\Model\UpdateEmailDynamicContentRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateEmailDynamicContentRequest | Content properties

try {
    $result = $apiInstance->updateEmailDynamicContentUsingPOST($id, $content_id, $request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailDynamicContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of email |
 **content_id** | **string**| Id of email dynamic content section |
 **request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateEmailDynamicContentRequest**](../Model/UpdateEmailDynamicContentRequest.md)| Content properties |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse updateEmailUsingPOST($id, $update_email_request)

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
$update_email_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateEmailMetaDataRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateEmailMetaDataRequest | updateEmailRequest

try {
    $result = $apiInstance->updateEmailUsingPOST($id, $update_email_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateEmailUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_email_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateEmailMetaDataRequest**](../Model/UpdateEmailMetaDataRequest.md)| updateEmailRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailResponse**](../Model/ResponseOfEmailResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateVariableUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailVariableResponse updateVariableUsingPOST($id, $name, $update_variable_request)

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
$name = "name_example"; // string | name
$update_variable_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateVariableRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateVariableRequest | updateVariableRequest

try {
    $result = $apiInstance->updateVariableUsingPOST($id, $name, $update_variable_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailsApi->updateVariableUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **name** | **string**| name |
 **update_variable_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateVariableRequest**](../Model/UpdateVariableRequest.md)| updateVariableRequest | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailVariableResponse**](../Model/ResponseOfEmailVariableResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


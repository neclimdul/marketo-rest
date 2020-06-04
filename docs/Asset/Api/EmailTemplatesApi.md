# NecLimDul\MarketoRest\Asset\EmailTemplatesApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveDraftUsingPOST1**](EmailTemplatesApi.md#approveDraftUsingPOST1) | **POST** /rest/asset/v1/emailTemplate/{id}/approveDraft.json | Approve Email Template Draft
[**cloneTemplateUsingPOST**](EmailTemplatesApi.md#cloneTemplateUsingPOST) | **POST** /rest/asset/v1/emailTemplate/{id}/clone.json | Clone Email Template
[**createEmailTemplateUsingPOST**](EmailTemplatesApi.md#createEmailTemplateUsingPOST) | **POST** /rest/asset/v1/emailTemplates.json | Create Email Template
[**deleteTemplateUsingPOST**](EmailTemplatesApi.md#deleteTemplateUsingPOST) | **POST** /rest/asset/v1/emailTemplate/{id}/delete.json | Delete Email Template
[**discardDraftUsingPOST1**](EmailTemplatesApi.md#discardDraftUsingPOST1) | **POST** /rest/asset/v1/emailTemplate/{id}/discardDraft.json | Discard Email Template Draft
[**getEmailTemplateUsedByUsingGET**](EmailTemplatesApi.md#getEmailTemplateUsedByUsingGET) | **GET** /rest/asset/v1/emailTemplates/{id}/usedBy.json | Get Email Template Used By
[**getEmailTemplatesUsingGET**](EmailTemplatesApi.md#getEmailTemplatesUsingGET) | **GET** /rest/asset/v1/emailTemplates.json | Get Email Templates
[**getTemplateByIdUsingGET**](EmailTemplatesApi.md#getTemplateByIdUsingGET) | **GET** /rest/asset/v1/emailTemplate/{id}.json | Get Email Template by Id
[**getTemplateByNameUsingGET**](EmailTemplatesApi.md#getTemplateByNameUsingGET) | **GET** /rest/asset/v1/emailTemplate/byName.json | Get Email Template by Name
[**getTemplateContentByIdUsingGET**](EmailTemplatesApi.md#getTemplateContentByIdUsingGET) | **GET** /rest/asset/v1/emailTemplate/{id}/content | Get Email Template Content by Id
[**unapproveDraftUsingPOST1**](EmailTemplatesApi.md#unapproveDraftUsingPOST1) | **POST** /rest/asset/v1/emailTemplate/{id}/unapprove.json | Unapprove Email Template Draft
[**updateEmailTemplateContentUsingPOST**](EmailTemplatesApi.md#updateEmailTemplateContentUsingPOST) | **POST** /rest/asset/v1/emailTemplate/{id}/content.json | Update Email Template Content
[**updateEmailTemplateUsingPOST**](EmailTemplatesApi.md#updateEmailTemplateUsingPOST) | **POST** /rest/asset/v1/emailTemplate/{id}.json | Update Email Template Metadata


# **approveDraftUsingPOST1**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse approveDraftUsingPOST1($id)

Approve Email Template Draft

Approves the current draft of the email template.  Required Permissions: Approve Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->approveDraftUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->approveDraftUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse cloneTemplateUsingPOST($id, $folder, $name, $description)

Clone Email Template

Clones the designated email template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder | 
$name = 'name_example'; // string | Name of the Email Template
$description = 'description_example'; // string | Description of the asset

try {
    $result = $apiInstance->cloneTemplateUsingPOST($id, $folder, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->cloneTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the Email Template |
 **description** | **string**| Description of the asset | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createEmailTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse createEmailTemplateUsingPOST($name, $folder, $content, $description)

Create Email Template

Creates a new email template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the Email Template.  Must be unique under the parent folder.
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder | 
$content = 'content_example'; // string | HTML content for template.  Multipart file.
$description = 'description_example'; // string | Description of the email template

try {
    $result = $apiInstance->createEmailTemplateUsingPOST($name, $folder, $content, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->createEmailTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the Email Template.  Must be unique under the parent folder. |
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **content** | **string**| HTML content for template.  Multipart file. |
 **description** | **string**| Description of the email template | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteTemplateUsingPOST($id)

Delete Email Template

Deletes the designated email template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->deleteTemplateUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->deleteTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
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

# **discardDraftUsingPOST1**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse discardDraftUsingPOST1($id)

Discard Email Template Draft

Discards the current draft of the email template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->discardDraftUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->discardDraftUsingPOST1: ', $e->getMessage(), PHP_EOL;
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

# **getEmailTemplateUsedByUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateUsedByResponse getEmailTemplateUsedByUsingGET($id, $offset, $max_return)

Get Email Template Used By

Returns a list of email records which depend on a given email template.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the email template
$offset = 56; // int | Integer offset for paging
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20

try {
    $result = $apiInstance->getEmailTemplateUsedByUsingGET($id, $offset, $max_return);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getEmailTemplateUsedByUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the email template |
 **offset** | **int**| Integer offset for paging | [optional]
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateUsedByResponse**](../Model/ResponseOfEmailTemplateUsedByResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEmailTemplatesUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse getEmailTemplatesUsingGET($offset, $max_return, $status)

Get Email Templates

Returns a list of email template records accessible in the target instance.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$offset = 56; // int | Integer offset for paging
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getEmailTemplatesUsingGET($offset, $max_return, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getEmailTemplatesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| Integer offset for paging | [optional]
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse getTemplateByIdUsingGET($id, $status)

Get Email Template by Id

Returns an email template record by its id. Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getTemplateByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getTemplateByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateByNameUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse getTemplateByNameUsingGET($name, $status)

Get Email Template by Name

Retrieves and email template record by the given name.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | name
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getTemplateByNameUsingGET($name, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getTemplateByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| name |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getTemplateContentByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateContentResponse getTemplateContentByIdUsingGET($id, $status)

Get Email Template Content by Id

Returns the content for a given email template.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$status = 'status_example'; // string | Status filter for draft or approved versions

try {
    $result = $apiInstance->getTemplateContentByIdUsingGET($id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->getTemplateContentByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **status** | **string**| Status filter for draft or approved versions | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateContentResponse**](../Model/ResponseOfEmailTemplateContentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveDraftUsingPOST1**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse unapproveDraftUsingPOST1($id)

Unapprove Email Template Draft

Unapproves the current approved version of the Email Template.  Required Permissions: Approve Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->unapproveDraftUsingPOST1($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->unapproveDraftUsingPOST1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailTemplateContentUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse updateEmailTemplateContentUsingPOST($id, $content)

Update Email Template Content

Updates the content of the given email template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$content = 'content_example'; // string | Content for the email template.  Multipart file.

try {
    $result = $apiInstance->updateEmailTemplateContentUsingPOST($id, $content);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->updateEmailTemplateContentUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **content** | **string**| Content for the email template.  Multipart file. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEmailTemplateUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse updateEmailTemplateUsingPOST($id, $description, $name)

Update Email Template Metadata

Updates the metadata for the designated email template.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\EmailTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$description = 'description_example'; // string | Description of the asset
$name = 'name_example'; // string | Name of the Email Template

try {
    $result = $apiInstance->updateEmailTemplateUsingPOST($id, $description, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailTemplatesApi->updateEmailTemplateUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **description** | **string**| Description of the asset | [optional]
 **name** | **string**| Name of the Email Template | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfEmailTemplateResponse**](../Model/ResponseOfEmailTemplateResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


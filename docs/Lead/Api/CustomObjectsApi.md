# MarketoRest\Lead\CustomObjectsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomObjectTypeFieldsUsingPOST**](CustomObjectsApi.md#addCustomObjectTypeFieldsUsingPOST) | **POST** /rest/v1/customobjects/schema/{apiName}/addField.json | Add Custom Object Type Fields
[**approveCustomObjectTypeUsingPOST**](CustomObjectsApi.md#approveCustomObjectTypeUsingPOST) | **POST** /rest/v1/customobjects/schema/{apiName}/approve.json | Approve Custom Object Type
[**deleteCustomObjectTypeFieldsUsingPOST**](CustomObjectsApi.md#deleteCustomObjectTypeFieldsUsingPOST) | **POST** /rest/v1/customobjects/schema/{apiName}/deleteField.json | Delete Custom Object Type Fields
[**deleteCustomObjectTypeUsingPOST**](CustomObjectsApi.md#deleteCustomObjectTypeUsingPOST) | **POST** /rest/v1/customobjects/schema/{apiName}/delete.json | Delete Custom Object Type
[**deleteCustomObjectsUsingPOST**](CustomObjectsApi.md#deleteCustomObjectsUsingPOST) | **POST** /rest/v1/customobjects/{customObjectName}/delete.json | Delete Custom Objects
[**describeCustomObjectTypeUsingGET**](CustomObjectsApi.md#describeCustomObjectTypeUsingGET) | **GET** /rest/v1/customobjects/schema/{apiName}/describe.json | Describe Custom Object Type
[**describeUsingGET1**](CustomObjectsApi.md#describeUsingGET1) | **GET** /rest/v1/customobjects/{customObjectName}/describe.json | Describe Custom Objects
[**discardCustomObjectTypeUsingPOST**](CustomObjectsApi.md#discardCustomObjectTypeUsingPOST) | **POST** /rest/v1/customobjects/schema/{apiName}/discardDraft.json | Discard Custom Object Type Draft
[**getCustomObjectTypeFieldDataTypesUsingGET**](CustomObjectsApi.md#getCustomObjectTypeFieldDataTypesUsingGET) | **GET** /rest/v1/customobjects/schema/fieldDataTypes.json | Get Custom Object Type Field Data Types
[**getCustomObjectTypeLinkableObjectsUsingGET**](CustomObjectsApi.md#getCustomObjectTypeLinkableObjectsUsingGET) | **GET** /rest/v1/customobjects/schema/linkableObjects.json | Get Custom Object Linkable Objects
[**getCustomObjectsUsingGET**](CustomObjectsApi.md#getCustomObjectsUsingGET) | **GET** /rest/v1/customobjects/{customObjectName}.json | Get Custom Objects
[**listCustomObjectTypesUsingGET**](CustomObjectsApi.md#listCustomObjectTypesUsingGET) | **GET** /rest/v1/customobjects/schema.json | List Custom Object Types
[**listCustomObjectsUsingGET**](CustomObjectsApi.md#listCustomObjectsUsingGET) | **GET** /rest/v1/customobjects.json | List Custom Objects
[**syncCustomObjectTypeUsingPOST**](CustomObjectsApi.md#syncCustomObjectTypeUsingPOST) | **POST** /rest/v1/customobjects/schema.json | Sync Custom Object Type
[**syncCustomObjectsUsingPOST**](CustomObjectsApi.md#syncCustomObjectsUsingPOST) | **POST** /rest/v1/customobjects/{customObjectName}.json | Sync Custom Objects
[**updateCustomObjectTypeFieldUsingPOST**](CustomObjectsApi.md#updateCustomObjectTypeFieldUsingPOST) | **POST** /rest/v1/customobjects/schema/{apiName}/{fieldApiName}/updateField.json | Update Custom Object Type Field


# **addCustomObjectTypeFieldsUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfCustomObjectType addCustomObjectTypeFieldsUsingPOST($api_name, $add_custom_object_type_fields_request)

Add Custom Object Type Fields

Adds fields to custom object type.  Required Permissions: Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API name of custom object type
$add_custom_object_type_fields_request = new \MarketoRest\Lead\Model\AddCustomObjectTypeFieldsRequest(); // \MarketoRest\Lead\Model\AddCustomObjectTypeFieldsRequest | JSON object containing custom object type fields

try {
    $result = $apiInstance->addCustomObjectTypeFieldsUsingPOST($api_name, $add_custom_object_type_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->addCustomObjectTypeFieldsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API name of custom object type |
 **add_custom_object_type_fields_request** | [**\MarketoRest\Lead\Model\AddCustomObjectTypeFieldsRequest**](../Model/AddCustomObjectTypeFieldsRequest.md)| JSON object containing custom object type fields |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObjectType**](../Model/ResponseOfCustomObjectType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approveCustomObjectTypeUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfCustomObjectType approveCustomObjectTypeUsingPOST($api_name)

Approve Custom Object Type

Approves the current draft of the type, and makes it the live version.  This will delete the current live version of the type.  Required Permissions: Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object type to approve

try {
    $result = $apiInstance->approveCustomObjectTypeUsingPOST($api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->approveCustomObjectTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object type to approve |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObjectType**](../Model/ResponseOfCustomObjectType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomObjectTypeFieldsUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfCustomObjectType deleteCustomObjectTypeFieldsUsingPOST($api_name, $delete_custom_object_type_fields_request)

Delete Custom Object Type Fields

Deletes fields from custom object type.  Required Permissions: Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API name of custom object type
$delete_custom_object_type_fields_request = new \MarketoRest\Lead\Model\DeleteCustomObjectTypeFieldsRequest(); // \MarketoRest\Lead\Model\DeleteCustomObjectTypeFieldsRequest | JSON object containing custom object type fields

try {
    $result = $apiInstance->deleteCustomObjectTypeFieldsUsingPOST($api_name, $delete_custom_object_type_fields_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->deleteCustomObjectTypeFieldsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API name of custom object type |
 **delete_custom_object_type_fields_request** | [**\MarketoRest\Lead\Model\DeleteCustomObjectTypeFieldsRequest**](../Model/DeleteCustomObjectTypeFieldsRequest.md)| JSON object containing custom object type fields |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObjectType**](../Model/ResponseOfCustomObjectType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomObjectTypeUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfCustomObjectType deleteCustomObjectTypeUsingPOST($api_name)

Delete Custom Object Type

Deletes the target custom object type.  The type must first be removed from use by any assets, such as triggers or filters.  Required Permissions: Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object type to delete

try {
    $result = $apiInstance->deleteCustomObjectTypeUsingPOST($api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->deleteCustomObjectTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object type to delete |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObjectType**](../Model/ResponseOfCustomObjectType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomObjectsUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfCustomObject deleteCustomObjectsUsingPOST($custom_object_name, $delete_custom_object_request)

Delete Custom Objects

Deletes a given set of custom object records.  Required Permissions: Read-Write Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_object_name = "custom_object_name_example"; // string | customObjectName
$delete_custom_object_request = new \MarketoRest\Lead\Model\DeleteCustomObjectRequest(); // \MarketoRest\Lead\Model\DeleteCustomObjectRequest | deleteCustomObjectRequest

try {
    $result = $apiInstance->deleteCustomObjectsUsingPOST($custom_object_name, $delete_custom_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->deleteCustomObjectsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_object_name** | **string**| customObjectName |
 **delete_custom_object_request** | [**\MarketoRest\Lead\Model\DeleteCustomObjectRequest**](../Model/DeleteCustomObjectRequest.md)| deleteCustomObjectRequest | [optional]

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObject**](../Model/ResponseOfCustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeCustomObjectTypeUsingGET**
> \MarketoRest\Lead\Model\ResponseOfObjectMetaData describeCustomObjectTypeUsingGET($api_name, $state)

Describe Custom Object Type

Returns metadata regarding a given custom object type (including relationships and fields).  Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API name of custom object type to describe
$state = "state_example"; // string | State of custom object type to filter on.  By default, if an approved version exists, it is returned.  Otherwise, the draft version is returned.

try {
    $result = $apiInstance->describeCustomObjectTypeUsingGET($api_name, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->describeCustomObjectTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API name of custom object type to describe |
 **state** | **string**| State of custom object type to filter on.  By default, if an approved version exists, it is returned.  Otherwise, the draft version is returned. | [optional]

### Return type

[**\MarketoRest\Lead\Model\ResponseOfObjectMetaData**](../Model/ResponseOfObjectMetaData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeUsingGET1**
> \MarketoRest\Lead\Model\ResponseOfObjectMetaData describeUsingGET1($custom_object_name)

Describe Custom Objects

Returns metadata regarding a given custom object.  Required Permissions: Read-Only Custom Object, Read-Write Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_object_name = "custom_object_name_example"; // string | customObjectName

try {
    $result = $apiInstance->describeUsingGET1($custom_object_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->describeUsingGET1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_object_name** | **string**| customObjectName |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfObjectMetaData**](../Model/ResponseOfObjectMetaData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discardCustomObjectTypeUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfCustomObjectType discardCustomObjectTypeUsingPOST($api_name)

Discard Custom Object Type Draft

Discards the current draft of the custom object type.  Required Permissions: Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the custom object type draft to discard

try {
    $result = $apiInstance->discardCustomObjectTypeUsingPOST($api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->discardCustomObjectTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the custom object type draft to discard |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObjectType**](../Model/ResponseOfCustomObjectType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomObjectTypeFieldDataTypesUsingGET**
> \MarketoRest\Lead\Model\ResponseOfCustomObjectTypeFieldDataTypes getCustomObjectTypeFieldDataTypesUsingGET()

Get Custom Object Type Field Data Types

Returns a list of permissible data types that are assigned to custom object fields.  Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCustomObjectTypeFieldDataTypesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->getCustomObjectTypeFieldDataTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObjectTypeFieldDataTypes**](../Model/ResponseOfCustomObjectTypeFieldDataTypes.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomObjectTypeLinkableObjectsUsingGET**
> \MarketoRest\Lead\Model\ResponseOfObjectLinkableObject getCustomObjectTypeLinkableObjectsUsingGET()

Get Custom Object Linkable Objects

Returns a list of linkable custom objects and their fields.  Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCustomObjectTypeLinkableObjectsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->getCustomObjectTypeLinkableObjectsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MarketoRest\Lead\Model\ResponseOfObjectLinkableObject**](../Model/ResponseOfObjectLinkableObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomObjectsUsingGET**
> \MarketoRest\Lead\Model\ResponseOfCustomObject getCustomObjectsUsingGET($custom_object_name, $filter_type, $filter_values, $custom_object_lookup_request, $fields, $batch_size, $next_page_token)

Get Custom Objects

Retrieves a list of custom objects records based on filter and set of values.  There are two unique types of requests for this endpoint: one is executed normally using a GET with URL parameters, the other is by passing a JSON object in the body of a POST and specifying _method=GET in the querystring.  The latter is used when dedupeFields attribute has more than one field, which is known as a \"compound key\".  Required Permissions: Read-Only Custom Object, Read-Write Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_object_name = "custom_object_name_example"; // string | Name of custom object type to retrieve records for
$filter_type = "filter_type_example"; // string | Field to filter on. Searchable fields can be retrieved with Describe Custom Object
$filter_values = array("filter_values_example"); // string[] | Comma-separated list of field values to match against.
$custom_object_lookup_request = new \MarketoRest\Lead\Model\LookupCustomObjectRequest(); // \MarketoRest\Lead\Model\LookupCustomObjectRequest | Optional JSON request for retrieving custom objects with compound keys.  Example:<br><code>{<br>\"filterType\":\"dedupeFields\",<br>\"fields\":[<br>\"marketoGuid\",<br>\"Bedrooms\",<br>\"yearBuilt\"<br>],<br>\"input\":[<br>{<br>\"mlsNum\":\"1962352\",<br>\"houseOwnerId\":\"42645756\"<br>},<br>{<br>\"mlsNum\":\"3962352\",<br>\"houseOwnerId\":\"62645756\"<br>}<br>]<br>}</code><br>
$fields = array("fields_example"); // string[] | Comma-separated list of fields to return for each record.  If unset marketoGuid, dedupeFields, updatedAt, createdAt will be returned
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getCustomObjectsUsingGET($custom_object_name, $filter_type, $filter_values, $custom_object_lookup_request, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->getCustomObjectsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_object_name** | **string**| Name of custom object type to retrieve records for |
 **filter_type** | **string**| Field to filter on. Searchable fields can be retrieved with Describe Custom Object |
 **filter_values** | [**string[]**](../Model/string.md)| Comma-separated list of field values to match against. |
 **custom_object_lookup_request** | [**\MarketoRest\Lead\Model\LookupCustomObjectRequest**](../Model/LookupCustomObjectRequest.md)| Optional JSON request for retrieving custom objects with compound keys.  Example:&lt;br&gt;&lt;code&gt;{&lt;br&gt;\&quot;filterType\&quot;:\&quot;dedupeFields\&quot;,&lt;br&gt;\&quot;fields\&quot;:[&lt;br&gt;\&quot;marketoGuid\&quot;,&lt;br&gt;\&quot;Bedrooms\&quot;,&lt;br&gt;\&quot;yearBuilt\&quot;&lt;br&gt;],&lt;br&gt;\&quot;input\&quot;:[&lt;br&gt;{&lt;br&gt;\&quot;mlsNum\&quot;:\&quot;1962352\&quot;,&lt;br&gt;\&quot;houseOwnerId\&quot;:\&quot;42645756\&quot;&lt;br&gt;},&lt;br&gt;{&lt;br&gt;\&quot;mlsNum\&quot;:\&quot;3962352\&quot;,&lt;br&gt;\&quot;houseOwnerId\&quot;:\&quot;62645756\&quot;&lt;br&gt;}&lt;br&gt;]&lt;br&gt;}&lt;/code&gt;&lt;br&gt; | [optional]
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of fields to return for each record.  If unset marketoGuid, dedupeFields, updatedAt, createdAt will be returned | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObject**](../Model/ResponseOfCustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomObjectTypesUsingGET**
> \MarketoRest\Lead\Model\ResponseOfObjectMetaData listCustomObjectTypesUsingGET($names, $state)

List Custom Object Types

Returns a list of Custom Object Types available in the target instance, along with id, deduplication, relationship, and field information for each type.  Required Permissions: Read-Only Custom Object Type, Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$names = array("names_example"); // string[] | Comma-separated list of API names of custom object types to filter on
$state = "state_example"; // string | State of custom object type to filter on.  By default, if an approved version exists, it is returned.  Otherwise, the draft version is returned.

try {
    $result = $apiInstance->listCustomObjectTypesUsingGET($names, $state);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->listCustomObjectTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **names** | [**string[]**](../Model/string.md)| Comma-separated list of API names of custom object types to filter on | [optional]
 **state** | **string**| State of custom object type to filter on.  By default, if an approved version exists, it is returned.  Otherwise, the draft version is returned. | [optional]

### Return type

[**\MarketoRest\Lead\Model\ResponseOfObjectMetaData**](../Model/ResponseOfObjectMetaData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCustomObjectsUsingGET**
> \MarketoRest\Lead\Model\ResponseOfObjectMetaData listCustomObjectsUsingGET($names)

List Custom Objects

Returns a list of Custom Object types available in the target instance, along with id and deduplication information for each type.  Required Permissions: Read-Only Custom Object, Read-Write Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$names = array("names_example"); // string[] | Comma-separated list of names to filter types on

try {
    $result = $apiInstance->listCustomObjectsUsingGET($names);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->listCustomObjectsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **names** | [**string[]**](../Model/string.md)| Comma-separated list of names to filter types on | [optional]

### Return type

[**\MarketoRest\Lead\Model\ResponseOfObjectMetaData**](../Model/ResponseOfObjectMetaData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncCustomObjectTypeUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfCustomObjectType syncCustomObjectTypeUsingPOST($sync_custom_object_type_request)

Sync Custom Object Type

Inserts, updates, or upserts custom object type record to the target instance.  Required Permissions: Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sync_custom_object_type_request = new \MarketoRest\Lead\Model\SyncCustomObjectTypeRequest(); // \MarketoRest\Lead\Model\SyncCustomObjectTypeRequest | JSON object containing custom object type attributes

try {
    $result = $apiInstance->syncCustomObjectTypeUsingPOST($sync_custom_object_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->syncCustomObjectTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_custom_object_type_request** | [**\MarketoRest\Lead\Model\SyncCustomObjectTypeRequest**](../Model/SyncCustomObjectTypeRequest.md)| JSON object containing custom object type attributes |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObjectType**](../Model/ResponseOfCustomObjectType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncCustomObjectsUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfCustomObject syncCustomObjectsUsingPOST($custom_object_name, $sync_custom_object_request)

Sync Custom Objects

Inserts, updates, or upserts custom object records to the target instance.  Required Permissions: Read-Write Custom Object

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_object_name = "custom_object_name_example"; // string | customObjectName
$sync_custom_object_request = new \MarketoRest\Lead\Model\SyncCustomObjectRequest(); // \MarketoRest\Lead\Model\SyncCustomObjectRequest | syncCustomObjectRequest

try {
    $result = $apiInstance->syncCustomObjectsUsingPOST($custom_object_name, $sync_custom_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->syncCustomObjectsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_object_name** | **string**| customObjectName |
 **sync_custom_object_request** | [**\MarketoRest\Lead\Model\SyncCustomObjectRequest**](../Model/SyncCustomObjectRequest.md)| syncCustomObjectRequest |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObject**](../Model/ResponseOfCustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomObjectTypeFieldUsingPOST**
> \MarketoRest\Lead\Model\ResponseOfCustomObjectType updateCustomObjectTypeFieldUsingPOST($api_name, $field_api_name, $update_custom_object_type_field_request)

Update Custom Object Type Field

Updates a field in custom object type.  Required Permissions: Read-Write Custom Object Type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\CustomObjectsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API name of custom object type
$field_api_name = "field_api_name_example"; // string | API name of custom object type field
$update_custom_object_type_field_request = new \MarketoRest\Lead\Model\UpdateCustomObjectTypeFieldRequest(); // \MarketoRest\Lead\Model\UpdateCustomObjectTypeFieldRequest | JSON object containing custom object type fields

try {
    $result = $apiInstance->updateCustomObjectTypeFieldUsingPOST($api_name, $field_api_name, $update_custom_object_type_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomObjectsApi->updateCustomObjectTypeFieldUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API name of custom object type |
 **field_api_name** | **string**| API name of custom object type field |
 **update_custom_object_type_field_request** | [**\MarketoRest\Lead\Model\UpdateCustomObjectTypeFieldRequest**](../Model/UpdateCustomObjectTypeFieldRequest.md)| JSON object containing custom object type fields |

### Return type

[**\MarketoRest\Lead\Model\ResponseOfCustomObjectType**](../Model/ResponseOfCustomObjectType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


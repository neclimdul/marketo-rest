# NecLimDul\MarketoRest\Lead\ActivitiesApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCustomActivityUsingPOST**](ActivitiesApi.md#addCustomActivityUsingPOST) | **POST** /rest/v1/activities/external.json | Add Custom Activities
[**approveCustomActivityTypeUsingPOST**](ActivitiesApi.md#approveCustomActivityTypeUsingPOST) | **POST** /rest/v1/activities/external/type/{apiName}/approve.json | Approve Custom Activity Type
[**createCustomActivityTypeAttributesUsingPOST**](ActivitiesApi.md#createCustomActivityTypeAttributesUsingPOST) | **POST** /rest/v1/activities/external/type/{apiName}/attributes/create.json | Create Custom Activity Type Attributes
[**createCustomActivityTypeUsingPOST**](ActivitiesApi.md#createCustomActivityTypeUsingPOST) | **POST** /rest/v1/activities/external/type.json | Create Custom Activity Type
[**deleteCustomActivityTypeAttributesUsingPOST**](ActivitiesApi.md#deleteCustomActivityTypeAttributesUsingPOST) | **POST** /rest/v1/activities/external/type/{apiName}/attributes/delete.json | Delete Custom Activity Type Attributes
[**deleteCustomActivityTypeUsingPOST**](ActivitiesApi.md#deleteCustomActivityTypeUsingPOST) | **POST** /rest/v1/activities/external/type/{apiName}/delete.json | Delete Custom Activity Type
[**describeCustomActivityTypeUsingGET**](ActivitiesApi.md#describeCustomActivityTypeUsingGET) | **GET** /rest/v1/activities/external/type/{apiName}/describe.json | Describe Custom Activity Type
[**discardDraftofCustomActivityTypeUsingPOST**](ActivitiesApi.md#discardDraftofCustomActivityTypeUsingPOST) | **POST** /rest/v1/activities/external/type/{apiName}/discardDraft.json | Discard Custom Activity Type Draft
[**getActivitiesPagingTokenUsingGET**](ActivitiesApi.md#getActivitiesPagingTokenUsingGET) | **GET** /rest/v1/activities/pagingtoken.json | Get Paging Token
[**getAllActivityTypesUsingGET**](ActivitiesApi.md#getAllActivityTypesUsingGET) | **GET** /rest/v1/activities/types.json | Get Activity Types
[**getCustomActivityTypeUsingGET**](ActivitiesApi.md#getCustomActivityTypeUsingGET) | **GET** /rest/v1/activities/external/types.json | Get Custom Activity Types
[**getDeletedLeadsUsingGET**](ActivitiesApi.md#getDeletedLeadsUsingGET) | **GET** /rest/v1/activities/deletedleads.json | Get Deleted Leads
[**getLeadActivitiesUsingGET**](ActivitiesApi.md#getLeadActivitiesUsingGET) | **GET** /rest/v1/activities.json | Get Lead Activities
[**getLeadChangesUsingGET**](ActivitiesApi.md#getLeadChangesUsingGET) | **GET** /rest/v1/activities/leadchanges.json | Get Lead Changes
[**updateCustomActivityTypeAttributesUsingPOST**](ActivitiesApi.md#updateCustomActivityTypeAttributesUsingPOST) | **POST** /rest/v1/activities/external/type/{apiName}/attributes/update.json | Update Custom Activity Type Attributes
[**updateCustomActivityTypeUsingPOST**](ActivitiesApi.md#updateCustomActivityTypeUsingPOST) | **POST** /rest/v1/activities/external/type/{apiName}.json | Update Custom Activity Type


# **addCustomActivityUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivity addCustomActivityUsingPOST($custom_activity_request)

Add Custom Activities

Allows insertion of custom activities associated to given lead records.  Requires provisioning of custom activity types to utilize.  Required Permissions: Read-Write Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_activity_request = new \NecLimDul\MarketoRest\Lead\Model\CustomActivityRequest(); // \NecLimDul\MarketoRest\Lead\Model\CustomActivityRequest | customActivityRequest

try {
    $result = $apiInstance->addCustomActivityUsingPOST($custom_activity_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->addCustomActivityUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_activity_request** | [**\NecLimDul\MarketoRest\Lead\Model\CustomActivityRequest**](../Model/CustomActivityRequest.md)| customActivityRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivity**](../Model/ResponseOfCustomActivity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **approveCustomActivityTypeUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType approveCustomActivityTypeUsingPOST($api_name)

Approve Custom Activity Type

Approves the current draft of the type, and makes it the live version.  This will delete the current live version of the type.  Required Permissions: Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the activity type

try {
    $result = $apiInstance->approveCustomActivityTypeUsingPOST($api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->approveCustomActivityTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the activity type |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomActivityTypeAttributesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType createCustomActivityTypeAttributesUsingPOST($api_name, $custom_activity_type_attribute_request)

Create Custom Activity Type Attributes

Adds activity attributes to the target type.  These are added to the draft version of the type.  Required Permissions: Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the activity type
$custom_activity_type_attribute_request = new \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttributeRequest(); // \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttributeRequest | customActivityTypeAttributeRequest

try {
    $result = $apiInstance->createCustomActivityTypeAttributesUsingPOST($api_name, $custom_activity_type_attribute_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->createCustomActivityTypeAttributesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the activity type |
 **custom_activity_type_attribute_request** | [**\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttributeRequest**](../Model/CustomActivityTypeAttributeRequest.md)| customActivityTypeAttributeRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createCustomActivityTypeUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType createCustomActivityTypeUsingPOST($custom_activity_type_request)

Create Custom Activity Type

Creates a new custom activity type draft in the target instance.  Required Permissions: Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$custom_activity_type_request = new \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeRequest(); // \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeRequest | customActivityTypeRequest

try {
    $result = $apiInstance->createCustomActivityTypeUsingPOST($custom_activity_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->createCustomActivityTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **custom_activity_type_request** | [**\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeRequest**](../Model/CustomActivityTypeRequest.md)| customActivityTypeRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomActivityTypeAttributesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType deleteCustomActivityTypeAttributesUsingPOST($api_name, $custom_activity_type_attribute_request)

Delete Custom Activity Type Attributes

Deletes the target attributes from the custom activity type draft.  The apiName of each attribute is the primary key for the update.  Required Permissions: Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the activity type
$custom_activity_type_attribute_request = new \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttributeRequest(); // \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttributeRequest | customActivityTypeAttributeRequest

try {
    $result = $apiInstance->deleteCustomActivityTypeAttributesUsingPOST($api_name, $custom_activity_type_attribute_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->deleteCustomActivityTypeAttributesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the activity type |
 **custom_activity_type_attribute_request** | [**\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttributeRequest**](../Model/CustomActivityTypeAttributeRequest.md)| customActivityTypeAttributeRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCustomActivityTypeUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType deleteCustomActivityTypeUsingPOST($api_name)

Delete Custom Activity Type

Deletes the target custom activity type.  The type must first be removed from use by any assets, such as triggers or filters.  Required Permissions: Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the activity type

try {
    $result = $apiInstance->deleteCustomActivityTypeUsingPOST($api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->deleteCustomActivityTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the activity type |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeCustomActivityTypeUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType describeCustomActivityTypeUsingGET($api_name, $draft)

Describe Custom Activity Type

Returns metadata for a specific custom activity type.  Required Permissions: Read-Only Activity Metadata, Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the activity type
$draft = true; // bool | draft

try {
    $result = $apiInstance->describeCustomActivityTypeUsingGET($api_name, $draft);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->describeCustomActivityTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the activity type |
 **draft** | **bool**| draft | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **discardDraftofCustomActivityTypeUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType discardDraftofCustomActivityTypeUsingPOST($api_name)

Discard Custom Activity Type Draft

Discards the current draft of the custom activity type.  Required Permissions: Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the activity type

try {
    $result = $apiInstance->discardDraftofCustomActivityTypeUsingPOST($api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->discardDraftofCustomActivityTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the activity type |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivitiesPagingTokenUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfVoid getActivitiesPagingTokenUsingGET($since_datetime)

Get Paging Token

Returns a paging token for use in retrieving activities and data value changes.  Required Permissions: Read-Only Activity, Read-Write Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$since_datetime = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Earliest datetime to retrieve activities from

try {
    $result = $apiInstance->getActivitiesPagingTokenUsingGET($since_datetime);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getActivitiesPagingTokenUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **since_datetime** | **\DateTime**| Earliest datetime to retrieve activities from |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfVoid**](../Model/ResponseOfVoid.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllActivityTypesUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfActivityType getAllActivityTypesUsingGET()

Get Activity Types

Returns a list of available activity types in the target instance, along with associated metadata of each type.  Required Permissions: Read-Only Activity, Read-Write Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAllActivityTypesUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getAllActivityTypesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfActivityType**](../Model/ResponseOfActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCustomActivityTypeUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType getCustomActivityTypeUsingGET()

Get Custom Activity Types

Returns metadata regarding custom activities provisioned in the target instance.  Required Permissions: Read-Only Activity Metadata, Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getCustomActivityTypeUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getCustomActivityTypeUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDeletedLeadsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfActivity getDeletedLeadsUsingGET($next_page_token, $batch_size)

Get Deleted Leads

Returns a list of leads deleted after a given datetime.  Deletions greater than 14 days old may be pruned.  Required Permissions: Read-Only Activity, Read-Write Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$next_page_token = "next_page_token_example"; // string | Token representation of a datetime returned by the Get Paging Token endpoint.  This endpoint will return activities after this datetime
$batch_size = 56; // int | Maximum number of records to return.  Maximum and default is 300.

try {
    $result = $apiInstance->getDeletedLeadsUsingGET($next_page_token, $batch_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getDeletedLeadsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_page_token** | **string**| Token representation of a datetime returned by the Get Paging Token endpoint.  This endpoint will return activities after this datetime |
 **batch_size** | **int**| Maximum number of records to return.  Maximum and default is 300. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfActivity**](../Model/ResponseOfActivity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadActivitiesUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfActivity getLeadActivitiesUsingGET($next_page_token, $activity_type_ids, $asset_ids, $list_id, $lead_ids, $batch_size)

Get Lead Activities

Returns a list of activities from after a datetime given by the nextPageToken parameter.  Also allows for filtering by lead static list membership, or by a list of up to 30 lead ids.  Required Permissions: Read-Only Activity, Read-Write Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$next_page_token = "next_page_token_example"; // string | Token representation of a datetime returned by the Get Paging Token endpoint.  This endpoint will return activities after this datetime
$activity_type_ids = array(56); // int[] | Comma-separated list of activity type ids. These can be retrieved with the Get Activity Types API.
$asset_ids = array(56); // int[] | Id of the primary asset for an activity.  This is based on the primary asset id of a given activity type.  Should only be used when a single activity type is set
$list_id = 56; // int | Id of a static list.  If set, will only return activities of members of this static list.
$lead_ids = array(56); // int[] | Comma-separated list of lead ids.  If set, will only return activities of the leads with these ids.  Allows up to 30 entries.
$batch_size = 56; // int | Maximum number of records to return.  Maximum and default is 300.

try {
    $result = $apiInstance->getLeadActivitiesUsingGET($next_page_token, $activity_type_ids, $asset_ids, $list_id, $lead_ids, $batch_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getLeadActivitiesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_page_token** | **string**| Token representation of a datetime returned by the Get Paging Token endpoint.  This endpoint will return activities after this datetime |
 **activity_type_ids** | [**int[]**](../Model/int.md)| Comma-separated list of activity type ids. These can be retrieved with the Get Activity Types API. |
 **asset_ids** | [**int[]**](../Model/int.md)| Id of the primary asset for an activity.  This is based on the primary asset id of a given activity type.  Should only be used when a single activity type is set | [optional]
 **list_id** | **int**| Id of a static list.  If set, will only return activities of members of this static list. | [optional]
 **lead_ids** | [**int[]**](../Model/int.md)| Comma-separated list of lead ids.  If set, will only return activities of the leads with these ids.  Allows up to 30 entries. | [optional]
 **batch_size** | **int**| Maximum number of records to return.  Maximum and default is 300. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfActivity**](../Model/ResponseOfActivity.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLeadChangesUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadChange getLeadChangesUsingGET($next_page_token, $fields, $list_id, $lead_ids, $batch_size)

Get Lead Changes

Returns a list of Data Value Changes and New Lead activities after a given datetime. Required Permissions: Read-Only Activity, Read-Write Activity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$next_page_token = "next_page_token_example"; // string | Token representation of a datetime returned by the Get Paging Token endpoint.  This endpoint will return activities after this datetime
$fields = array("fields_example"); // string[] | Comma-separated list of field names to return changes for.  Field names can be retrieved with the Describe Lead API.
$list_id = 56; // int | Id of a static list.  If set, will only return activities of members of this static list.
$lead_ids = array(56); // int[] | Comma-separated list of lead ids.  If set, will only return activities of the leads with these ids.  Allows up to 30 entries.
$batch_size = 56; // int | Maximum number of records to return.  Maximum and default is 300.

try {
    $result = $apiInstance->getLeadChangesUsingGET($next_page_token, $fields, $list_id, $lead_ids, $batch_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->getLeadChangesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **next_page_token** | **string**| Token representation of a datetime returned by the Get Paging Token endpoint.  This endpoint will return activities after this datetime |
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of field names to return changes for.  Field names can be retrieved with the Describe Lead API. |
 **list_id** | **int**| Id of a static list.  If set, will only return activities of members of this static list. | [optional]
 **lead_ids** | [**int[]**](../Model/int.md)| Comma-separated list of lead ids.  If set, will only return activities of the leads with these ids.  Allows up to 30 entries. | [optional]
 **batch_size** | **int**| Maximum number of records to return.  Maximum and default is 300. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadChange**](../Model/ResponseOfLeadChange.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomActivityTypeAttributesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType updateCustomActivityTypeAttributesUsingPOST($api_name, $custom_activity_type_attribute_request)

Update Custom Activity Type Attributes

Updates the attributes of the custom activity type draft.  The apiName of each attribute is the primary key for the update.  Required Permissions: Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the activity type
$custom_activity_type_attribute_request = new \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttributeRequest(); // \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttributeRequest | customActivityTypeAttributeRequest

try {
    $result = $apiInstance->updateCustomActivityTypeAttributesUsingPOST($api_name, $custom_activity_type_attribute_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->updateCustomActivityTypeAttributesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the activity type |
 **custom_activity_type_attribute_request** | [**\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttributeRequest**](../Model/CustomActivityTypeAttributeRequest.md)| customActivityTypeAttributeRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCustomActivityTypeUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType updateCustomActivityTypeUsingPOST($api_name, $custom_activity_type_request)

Update Custom Activity Type

Updates the target custom activity type.  All changes are applied to the draft version of the type.  Required Permissions: Read-Write Activity Metadata

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ActivitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$api_name = "api_name_example"; // string | API Name of the activity type
$custom_activity_type_request = new \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeRequest(); // \NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeRequest | customActivityTypeRequest

try {
    $result = $apiInstance->updateCustomActivityTypeUsingPOST($api_name, $custom_activity_type_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivitiesApi->updateCustomActivityTypeUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **api_name** | **string**| API Name of the activity type |
 **custom_activity_type_request** | [**\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeRequest**](../Model/CustomActivityTypeRequest.md)| customActivityTypeRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomActivityType**](../Model/ResponseOfCustomActivityType.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


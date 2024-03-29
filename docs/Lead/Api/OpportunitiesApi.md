# NecLimDul\MarketoRest\Lead\OpportunitiesApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOpportunitiesUsingPOST**](OpportunitiesApi.md#deleteOpportunitiesUsingPOST) | **POST** /rest/v1/opportunities/delete.json | Delete Opportunities
[**deleteOpportunityRolesUsingPOST**](OpportunitiesApi.md#deleteOpportunityRolesUsingPOST) | **POST** /rest/v1/opportunities/roles/delete.json | Delete Opportunity Roles
[**describeOpportunityRoleUsingGET**](OpportunitiesApi.md#describeOpportunityRoleUsingGET) | **GET** /rest/v1/opportunities/roles/describe.json | Describe Opportunity Role
[**describeUsingGET4**](OpportunitiesApi.md#describeUsingGET4) | **GET** /rest/v1/opportunities/describe.json | Describe Opportunity
[**getOpportunitiesUsingGET**](OpportunitiesApi.md#getOpportunitiesUsingGET) | **GET** /rest/v1/opportunities.json | Get Opportunities
[**getOpportunityFieldByNameUsingGET**](OpportunitiesApi.md#getOpportunityFieldByNameUsingGET) | **GET** /rest/v1/opportunities/schema/fields/{fieldApiName}.json | Get Opportunity Field by Name
[**getOpportunityFieldsUsingGET**](OpportunitiesApi.md#getOpportunityFieldsUsingGET) | **GET** /rest/v1/opportunities/schema/fields.json | Get Opportunity Fields
[**getOpportunityRolesUsingGET**](OpportunitiesApi.md#getOpportunityRolesUsingGET) | **GET** /rest/v1/opportunities/roles.json | Get Opportunity Roles
[**syncOpportunitiesUsingPOST**](OpportunitiesApi.md#syncOpportunitiesUsingPOST) | **POST** /rest/v1/opportunities.json | Sync Opportunities
[**syncOpportunityRolesUsingPOST**](OpportunitiesApi.md#syncOpportunityRolesUsingPOST) | **POST** /rest/v1/opportunities/roles.json | Sync Opportunity Roles


# **deleteOpportunitiesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject deleteOpportunitiesUsingPOST($delete_custom_object_request)

Delete Opportunities

Deletes a list of opportunity records from the target instance.  Input records should only have one member, based on the value of 'dedupeBy'.  Required Permissions: Read-Write Named Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_custom_object_request = new \NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest(); // \NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest | deleteCustomObjectRequest

try {
    $result = $apiInstance->deleteOpportunitiesUsingPOST($delete_custom_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->deleteOpportunitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_custom_object_request** | [**\NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest**](../Model/DeleteCustomObjectRequest.md)| deleteCustomObjectRequest | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject**](../Model/ResponseOfCustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOpportunityRolesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject deleteOpportunityRolesUsingPOST($delete_custom_object_request)

Delete Opportunity Roles

Deletes a list of opportunities from the target instance.  Required Permissions: Read-Write Named Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_custom_object_request = new \NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest(); // \NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest | deleteCustomObjectRequest

try {
    $result = $apiInstance->deleteOpportunityRolesUsingPOST($delete_custom_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->deleteOpportunityRolesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_custom_object_request** | [**\NecLimDul\MarketoRest\Lead\Model\DeleteCustomObjectRequest**](../Model/DeleteCustomObjectRequest.md)| deleteCustomObjectRequest | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject**](../Model/ResponseOfCustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeOpportunityRoleUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData describeOpportunityRoleUsingGET()

Describe Opportunity Role

Returns object and field metadata for Opportunity Roles in the target instance.  Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->describeOpportunityRoleUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->describeOpportunityRoleUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData**](../Model/ResponseOfObjectMetaData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeUsingGET4**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData describeUsingGET4()

Describe Opportunity

Returns object and field metadata for Opportunity type records in the target instance.  Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->describeUsingGET4();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->describeUsingGET4: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData**](../Model/ResponseOfObjectMetaData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunitiesUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject getOpportunitiesUsingGET($filter_type, $filter_values, $custom_object_lookup_request, $fields, $batch_size, $next_page_token)

Get Opportunities

Returns a list of opportunities based on a filter and set of values.  Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter_type = "filter_type_example"; // string | Opportunities field to filter on
$filter_values = array("filter_values_example"); // string[] | Comma-separated list of values to match against
$custom_object_lookup_request = new \NecLimDul\MarketoRest\Lead\Model\LookupCustomObjectRequest(); // \NecLimDul\MarketoRest\Lead\Model\LookupCustomObjectRequest | customObjectLookupRequest
$fields = array("fields_example"); // string[] | Comma-separated list of fields to include in the response
$batch_size = 56; // int | Maximum number of records to return in the response.  Max and default is 300
$next_page_token = "next_page_token_example"; // string | Paging token returned from a previous response

try {
    $result = $apiInstance->getOpportunitiesUsingGET($filter_type, $filter_values, $custom_object_lookup_request, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunitiesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_type** | **string**| Opportunities field to filter on |
 **filter_values** | [**string[]**](../Model/string.md)| Comma-separated list of values to match against |
 **custom_object_lookup_request** | [**\NecLimDul\MarketoRest\Lead\Model\LookupCustomObjectRequest**](../Model/LookupCustomObjectRequest.md)| customObjectLookupRequest | [optional]
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of fields to include in the response | [optional]
 **batch_size** | **int**| Maximum number of records to return in the response.  Max and default is 300 | [optional]
 **next_page_token** | **string**| Paging token returned from a previous response | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject**](../Model/ResponseOfCustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunityFieldByNameUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadField getOpportunityFieldByNameUsingGET($field_api_name)

Get Opportunity Field by Name

Retrieves metadata for single opportunity field.  Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field_api_name = "field_api_name_example"; // string | The API name of opportunity field

try {
    $result = $apiInstance->getOpportunityFieldByNameUsingGET($field_api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunityFieldByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_api_name** | **string**| The API name of opportunity field |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadField**](../Model/ResponseOfLeadField.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunityFieldsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadField getOpportunityFieldsUsingGET($batch_size, $next_page_token)

Get Opportunity Fields

Retrieves metadata for all opportunity fields in the target instance.  Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_size = 56; // int | The batch size to return. The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter. See Paging Tokens for more info.

try {
    $result = $apiInstance->getOpportunityFieldsUsingGET($batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunityFieldsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **batch_size** | **int**| The batch size to return. The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter. See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadField**](../Model/ResponseOfLeadField.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOpportunityRolesUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject getOpportunityRolesUsingGET($filter_type, $filter_values, $custom_object_lookup_request, $fields, $batch_size, $next_page_token)

Get Opportunity Roles

Returns a list of opportunity roles based on a filter and set of values.  Required Permissions: Read-Only Opportunity, Read-Write Named Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter_type = "filter_type_example"; // string | The role field to filter on.  Searchable fields can be retrieved with the Describe Opportunity call.
$filter_values = array("filter_values_example"); // string[] | Comma-separated list of field values to return records for
$custom_object_lookup_request = new \NecLimDul\MarketoRest\Lead\Model\LookupCustomObjectRequest(); // \NecLimDul\MarketoRest\Lead\Model\LookupCustomObjectRequest | Optional JSON request for retrieving opportunity roles with compound keys
$fields = array("fields_example"); // string[] | Comma-separated list of fields to include in the response
$batch_size = 56; // int | Maximum number of records to return in the response.  Max and default is 300
$next_page_token = "next_page_token_example"; // string | Paging token returned from a previous response

try {
    $result = $apiInstance->getOpportunityRolesUsingGET($filter_type, $filter_values, $custom_object_lookup_request, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->getOpportunityRolesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_type** | **string**| The role field to filter on.  Searchable fields can be retrieved with the Describe Opportunity call. |
 **filter_values** | [**string[]**](../Model/string.md)| Comma-separated list of field values to return records for |
 **custom_object_lookup_request** | [**\NecLimDul\MarketoRest\Lead\Model\LookupCustomObjectRequest**](../Model/LookupCustomObjectRequest.md)| Optional JSON request for retrieving opportunity roles with compound keys | [optional]
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of fields to include in the response | [optional]
 **batch_size** | **int**| Maximum number of records to return in the response.  Max and default is 300 | [optional]
 **next_page_token** | **string**| Paging token returned from a previous response | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject**](../Model/ResponseOfCustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncOpportunitiesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject syncOpportunitiesUsingPOST($sync_custom_object_request)

Sync Opportunities

Allows inserting, updating, or upserting of opportunity records into the target instance.  Required Permissions: Read-Write Named Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sync_custom_object_request = new \NecLimDul\MarketoRest\Lead\Model\SyncCustomObjectRequest(); // \NecLimDul\MarketoRest\Lead\Model\SyncCustomObjectRequest | syncCustomObjectRequest

try {
    $result = $apiInstance->syncOpportunitiesUsingPOST($sync_custom_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->syncOpportunitiesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_custom_object_request** | [**\NecLimDul\MarketoRest\Lead\Model\SyncCustomObjectRequest**](../Model/SyncCustomObjectRequest.md)| syncCustomObjectRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject**](../Model/ResponseOfCustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncOpportunityRolesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject syncOpportunityRolesUsingPOST($sync_custom_object_request)

Sync Opportunity Roles

Allows inserts, updates and upserts of Opportunity Role records in the target instance.  Required Permissions: Read-Write Named Opportunity

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\OpportunitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sync_custom_object_request = new \NecLimDul\MarketoRest\Lead\Model\SyncCustomObjectRequest(); // \NecLimDul\MarketoRest\Lead\Model\SyncCustomObjectRequest | syncCustomObjectRequest

try {
    $result = $apiInstance->syncOpportunityRolesUsingPOST($sync_custom_object_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OpportunitiesApi->syncOpportunityRolesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_custom_object_request** | [**\NecLimDul\MarketoRest\Lead\Model\SyncCustomObjectRequest**](../Model/SyncCustomObjectRequest.md)| syncCustomObjectRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCustomObject**](../Model/ResponseOfCustomObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


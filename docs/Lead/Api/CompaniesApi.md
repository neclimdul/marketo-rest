# NecLimDul\MarketoRest\Lead\CompaniesApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCompaniesUsingPOST**](CompaniesApi.md#deleteCompaniesUsingPOST) | **POST** /rest/v1/companies/delete.json | Delete Companies
[**describeUsingGET**](CompaniesApi.md#describeUsingGET) | **GET** /rest/v1/companies/describe.json | Describe Companies
[**getCompaniesUsingGET**](CompaniesApi.md#getCompaniesUsingGET) | **GET** /rest/v1/companies.json | Get Companies
[**getCompanyFieldByNameUsingGET**](CompaniesApi.md#getCompanyFieldByNameUsingGET) | **GET** /rest/v1/companies/schema/fields/{fieldApiName}.json | Get Company Field by Name
[**getCompanyFieldsUsingGET**](CompaniesApi.md#getCompanyFieldsUsingGET) | **GET** /rest/v1/companies/schema/fields.json | Get Company Fields
[**syncCompaniesUsingPOST**](CompaniesApi.md#syncCompaniesUsingPOST) | **POST** /rest/v1/companies.json | Sync Companies


# **deleteCompaniesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany deleteCompaniesUsingPOST($delete_company_request)

Delete Companies

Deletes the included list of company records from the destination instance.  Required Permissions: Read-Write Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_company_request = new \NecLimDul\MarketoRest\Lead\Model\DeleteCompanyRequest(); // \NecLimDul\MarketoRest\Lead\Model\DeleteCompanyRequest | deleteCompanyRequest

try {
    $result = $apiInstance->deleteCompaniesUsingPOST($delete_company_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->deleteCompaniesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_company_request** | [**\NecLimDul\MarketoRest\Lead\Model\DeleteCompanyRequest**](../Model/DeleteCompanyRequest.md)| deleteCompanyRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany**](../Model/ResponseOfCompany.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData describeUsingGET()

Describe Companies

Returns metadata about companies and the fields available for interaction via the API.  Required Permissions: Read-Only Company, Read-Write Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->describeUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->describeUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **getCompaniesUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany getCompaniesUsingGET($filter_type, $filter_values, $fields, $batch_size, $next_page_token)

Get Companies

Retrieves company records from the destination instance based on the submitted filter.  Required Permissions: Read-Only Company, Read-Write Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter_type = "filter_type_example"; // string | The company field to filter on.  Searchable fields can be retrieved with the Describe Company call.
$filter_values = array("filter_values_example"); // string[] | Comma-separated list of values to match against
$fields = array("fields_example"); // string[] | Comma-separated list of fields to include in the response
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getCompaniesUsingGET($filter_type, $filter_values, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompaniesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_type** | **string**| The company field to filter on.  Searchable fields can be retrieved with the Describe Company call. |
 **filter_values** | [**string[]**](../Model/string.md)| Comma-separated list of values to match against |
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of fields to include in the response | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany**](../Model/ResponseOfCompany.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyFieldByNameUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadField getCompanyFieldByNameUsingGET($field_api_name)

Get Company Field by Name

Retrieves metadata for single company field.  Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$field_api_name = "field_api_name_example"; // string | The API name of company field

try {
    $result = $apiInstance->getCompanyFieldByNameUsingGET($field_api_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyFieldByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **field_api_name** | **string**| The API name of company field |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadField**](../Model/ResponseOfLeadField.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyFieldsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfLeadField getCompanyFieldsUsingGET($batch_size, $next_page_token)

Get Company Fields

Retrieves metadata for all company fields in the target instance.  Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$batch_size = 56; // int | The batch size to return. The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter. See Paging Tokens for more info.

try {
    $result = $apiInstance->getCompanyFieldsUsingGET($batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->getCompanyFieldsUsingGET: ', $e->getMessage(), PHP_EOL;
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

# **syncCompaniesUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany syncCompaniesUsingPOST($sync_company_request)

Sync Companies

Allows inserting, updating, or upserting of company records into Marketo. Required Permissions: Read-Write Company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sync_company_request = new \NecLimDul\MarketoRest\Lead\Model\SyncCompanyRequest(); // \NecLimDul\MarketoRest\Lead\Model\SyncCompanyRequest | syncCompanyRequest

try {
    $result = $apiInstance->syncCompaniesUsingPOST($sync_company_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->syncCompaniesUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_company_request** | [**\NecLimDul\MarketoRest\Lead\Model\SyncCompanyRequest**](../Model/SyncCompanyRequest.md)| syncCompanyRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCompany**](../Model/ResponseOfCompany.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


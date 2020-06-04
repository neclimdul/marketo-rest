# NecLimDul\MarketoRest\Lead\SalesPersonsApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSalesPersonUsingPOST()**](SalesPersonsApi.md#deleteSalesPersonUsingPOST) | **POST** /rest/v1/salespersons/delete.json | Delete SalesPersons
[**describeUsingGET5()**](SalesPersonsApi.md#describeUsingGET5) | **GET** /rest/v1/salespersons/describe.json | Describe SalesPersons
[**getSalesPersonUsingGET()**](SalesPersonsApi.md#getSalesPersonUsingGET) | **GET** /rest/v1/salespersons.json | Get SalesPersons
[**syncSalesPersonsUsingPOST()**](SalesPersonsApi.md#syncSalesPersonsUsingPOST) | **POST** /rest/v1/salespersons.json | Sync SalesPersons


## `deleteSalesPersonUsingPOST()`

```php
deleteSalesPersonUsingPOST($delete_sales_person_request): \NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson
```

Delete SalesPersons

Deletes a list of salesperson records from the target instance.  Input records should have only one member, based on the value of 'dedupeBy'.  Required Permissions: Read-Write Sales Person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Lead\Api\SalesPersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$delete_sales_person_request = new \NecLimDul\MarketoRest\Lead\Model\DeleteSalesPersonRequest(); // \NecLimDul\MarketoRest\Lead\Model\DeleteSalesPersonRequest | deleteSalesPersonRequest

try {
    $result = $apiInstance->deleteSalesPersonUsingPOST($delete_sales_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPersonsApi->deleteSalesPersonUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **delete_sales_person_request** | [**\NecLimDul\MarketoRest\Lead\Model\DeleteSalesPersonRequest**](../Model/DeleteSalesPersonRequest.md)| deleteSalesPersonRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson**](../Model/ResponseOfSalesPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `describeUsingGET5()`

```php
describeUsingGET5(): \NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData
```

Describe SalesPersons

Returns metadata about salespersons and the fields available for interaction via the API.  Required Permissions: Read-Only Sales Person, Read-Write Sales Person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Lead\Api\SalesPersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->describeUsingGET5();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPersonsApi->describeUsingGET5: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfObjectMetaData**](../Model/ResponseOfObjectMetaData.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSalesPersonUsingGET()`

```php
getSalesPersonUsingGET($filter_type, $filter_values, $fields, $batch_size, $next_page_token): \NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson
```

Get SalesPersons

Retrieves salesperson records from the destination instance based on the submitted filter.  Required Permissions: Read-Only Sales Person, Read-Write Sales Person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Lead\Api\SalesPersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter_type = 'filter_type_example'; // string | The sales person field to filter on. Searchable fields can be retrieved with the Describe Sales Person call.
$filter_values = array('filter_values_example'); // string[] | Comma seperated list of search values.
$fields = array('fields_example'); // string[] | Comma-separated list of fields to include in the response
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = 'next_page_token_example'; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getSalesPersonUsingGET($filter_type, $filter_values, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPersonsApi->getSalesPersonUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter_type** | **string**| The sales person field to filter on. Searchable fields can be retrieved with the Describe Sales Person call. |
 **filter_values** | [**string[]**](../Model/string.md)| Comma seperated list of search values. |
 **fields** | [**string[]**](../Model/string.md)| Comma-separated list of fields to include in the response | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson**](../Model/ResponseOfSalesPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `syncSalesPersonsUsingPOST()`

```php
syncSalesPersonsUsingPOST($sync_sales_person_request): \NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson
```

Sync SalesPersons

Allows inserts, updates, or upserts of salespersons to the target instance.  Required Permissions: Read-Write Sales Person

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Lead\Api\SalesPersonsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$sync_sales_person_request = new \NecLimDul\MarketoRest\Lead\Model\SyncSalesPersonRequest(); // \NecLimDul\MarketoRest\Lead\Model\SyncSalesPersonRequest | syncSalesPersonRequest

try {
    $result = $apiInstance->syncSalesPersonsUsingPOST($sync_sales_person_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SalesPersonsApi->syncSalesPersonsUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **sync_sales_person_request** | [**\NecLimDul\MarketoRest\Lead\Model\SyncSalesPersonRequest**](../Model/SyncSalesPersonRequest.md)| syncSalesPersonRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfSalesPerson**](../Model/ResponseOfSalesPerson.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

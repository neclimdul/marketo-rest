# MarketoRest\Lead\UsageApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDailyErrorsUsingGET**](UsageApi.md#getDailyErrorsUsingGET) | **GET** /rest/v1/stats/errors.json | Get Daily Errors
[**getDailyUsageUsingGET**](UsageApi.md#getDailyUsageUsingGET) | **GET** /rest/v1/stats/usage.json | Get Daily Usage
[**getLast7DaysErrorsUsingGET**](UsageApi.md#getLast7DaysErrorsUsingGET) | **GET** /rest/v1/stats/errors/last7days.json | Get Weekly Errors
[**getLast7DaysUsageUsingGET**](UsageApi.md#getLast7DaysUsageUsingGET) | **GET** /rest/v1/stats/usage/last7days.json | Get Weekly Usage


# **getDailyErrorsUsingGET**
> \MarketoRest\Lead\Model\ResponseOfUsageData getDailyErrorsUsingGET()

Get Daily Errors

Retrieves a list of API users and a count of each error type they have encountered in the current day.  Required Permissions: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDailyErrorsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getDailyErrorsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MarketoRest\Lead\Model\ResponseOfUsageData**](../Model/ResponseOfUsageData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDailyUsageUsingGET**
> \MarketoRest\Lead\Model\ResponseOfUsageData getDailyUsageUsingGET()

Get Daily Usage

Returns a list of API users and the number of calls they have consumed for the day.  Required Permissions: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getDailyUsageUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getDailyUsageUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MarketoRest\Lead\Model\ResponseOfUsageData**](../Model/ResponseOfUsageData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLast7DaysErrorsUsingGET**
> \MarketoRest\Lead\Model\ResponseOfUsageData getLast7DaysErrorsUsingGET()

Get Weekly Errors

Returns a list of API users and a count of each error type they have encountered in the past 7 days.  Required Permissions: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLast7DaysErrorsUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getLast7DaysErrorsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MarketoRest\Lead\Model\ResponseOfUsageData**](../Model/ResponseOfUsageData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLast7DaysUsageUsingGET**
> \MarketoRest\Lead\Model\ResponseOfUsageData getLast7DaysUsageUsingGET()

Get Weekly Usage

Returns a list of API users and the number of calls they have consumed in the past 7 days.  Required Permissions: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Lead\Api\UsageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getLast7DaysUsageUsingGET();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UsageApi->getLast7DaysUsageUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\MarketoRest\Lead\Model\ResponseOfUsageData**](../Model/ResponseOfUsageData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


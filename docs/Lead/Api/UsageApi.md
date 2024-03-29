# NecLimDul\MarketoRest\Lead\UsageApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getDailyErrorsUsingGET**](UsageApi.md#getDailyErrorsUsingGET) | **GET** /rest/v1/stats/errors.json | Get Daily Errors
[**getDailyUsageUsingGET**](UsageApi.md#getDailyUsageUsingGET) | **GET** /rest/v1/stats/usage.json | Get Daily Usage
[**getLast7DaysErrorsUsingGET**](UsageApi.md#getLast7DaysErrorsUsingGET) | **GET** /rest/v1/stats/errors/last7days.json | Get Weekly Errors
[**getLast7DaysUsageUsingGET**](UsageApi.md#getLast7DaysUsageUsingGET) | **GET** /rest/v1/stats/usage/last7days.json | Get Weekly Usage


# **getDailyErrorsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData getDailyErrorsUsingGET()

Get Daily Errors

Retrieves a count of each error type they have encountered in the current day.  Required Permissions: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\UsageApi(
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

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData**](../Model/ResponseOfErrorsData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDailyUsageUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData getDailyUsageUsingGET()

Get Daily Usage

Returns the number of calls consumed for the day.  Required Permissions: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\UsageApi(
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

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData**](../Model/ResponseOfUsageData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLast7DaysErrorsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData getLast7DaysErrorsUsingGET()

Get Weekly Errors

Returns a count of each error type they have encountered in the past 7 days.  Required Permissions: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\UsageApi(
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

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfErrorsData**](../Model/ResponseOfErrorsData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLast7DaysUsageUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData getLast7DaysUsageUsingGET()

Get Weekly Usage

Returns the number of calls consumed in the past 7 days.  Required Permissions: None

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\UsageApi(
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

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfUsageData**](../Model/ResponseOfUsageData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


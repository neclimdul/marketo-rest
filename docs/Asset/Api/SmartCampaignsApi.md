# NecLimDul\MarketoRest\Asset\SmartCampaignsApi

All URIs are relative to https://localhost:8080.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateSmartCampaignUsingPOST()**](SmartCampaignsApi.md#activateSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}/activate.json | Activate Smart Campaign
[**cloneSmartCampaignUsingPOST()**](SmartCampaignsApi.md#cloneSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}/clone.json | Clone Smart Campaign
[**createSmartCampaignUsingPOST()**](SmartCampaignsApi.md#createSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaigns.json | Create Smart Campaign
[**deactivateSmartCampaignUsingPOST()**](SmartCampaignsApi.md#deactivateSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}/deactivate.json | Deactivate Smart Campaign
[**deleteSmartCampaignUsingPOST()**](SmartCampaignsApi.md#deleteSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}/delete.json | Delete Smart Campaign
[**getAllSmartCampaignsGET()**](SmartCampaignsApi.md#getAllSmartCampaignsGET) | **GET** /rest/asset/v1/smartCampaigns.json | Get Smart Campaigns
[**getSmartCampaignByIdUsingGET()**](SmartCampaignsApi.md#getSmartCampaignByIdUsingGET) | **GET** /rest/asset/v1/smartCampaign/{id}.json | Get Smart Campaign by Id
[**getSmartCampaignByNameUsingGET()**](SmartCampaignsApi.md#getSmartCampaignByNameUsingGET) | **GET** /rest/asset/v1/smartCampaign/byName.json | Get Smart Campaign by Name
[**getSmartListBySmartCampaignIdUsingGET()**](SmartCampaignsApi.md#getSmartListBySmartCampaignIdUsingGET) | **GET** /rest/asset/v1/smartCampaign/{id}/smartList.json | Get Smart List by Smart Campaign Id
[**updateSmartCampaignUsingPOST()**](SmartCampaignsApi.md#updateSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}.json | Update Smart Campaign


## `activateSmartCampaignUsingPOST()`

```php
activateSmartCampaignUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Activate Smart Campaign

Activates a trigger smart campaign.  Required Permissions: Activate Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the smart campaign

try {
    $result = $apiInstance->activateSmartCampaignUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->activateSmartCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart campaign |

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

## `cloneSmartCampaignUsingPOST()`

```php
cloneSmartCampaignUsingPOST($id, $folder, $name, $description): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse
```

Clone Smart Campaign

Clones a smart campaign.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the smart campaign
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$name = 'name_example'; // string | Name of the smart campaign
$description = 'description_example'; // string | Description of the smart campaign

try {
    $result = $apiInstance->cloneSmartCampaignUsingPOST($id, $folder, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->cloneSmartCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart campaign |
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the smart campaign |
 **description** | **string**| Description of the smart campaign | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSmartCampaignUsingPOST()`

```php
createSmartCampaignUsingPOST($folder, $name, $description): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse
```

Create Smart Campaign

Creates a new smart campaign.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$folder = new \NecLimDul\MarketoRest\Asset\Model\Folder(); // \NecLimDul\MarketoRest\Asset\Model\Folder
$name = 'name_example'; // string | Name of the smart campaign
$description = 'description_example'; // string | Description of the smart campaign

try {
    $result = $apiInstance->createSmartCampaignUsingPOST($folder, $name, $description);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->createSmartCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](../Model/Folder.md)|  |
 **name** | **string**| Name of the smart campaign |
 **description** | **string**| Description of the smart campaign | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/x-www-form-urlencoded`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deactivateSmartCampaignUsingPOST()`

```php
deactivateSmartCampaignUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Deactivate Smart Campaign

Deactivates a trigger smart campaign.  Required Permissions: Deactivate Campaign

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the smart campaign

try {
    $result = $apiInstance->deactivateSmartCampaignUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->deactivateSmartCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart campaign |

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

## `deleteSmartCampaignUsingPOST()`

```php
deleteSmartCampaignUsingPOST($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse
```

Delete Smart Campaign

Deletes a smart campaign.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the smart campaign

try {
    $result = $apiInstance->deleteSmartCampaignUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->deleteSmartCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart campaign |

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

## `getAllSmartCampaignsGET()`

```php
getAllSmartCampaignsGET($max_return, $offset, $folder, $earliest_updated_at, $latest_updated_at, $is_active): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse
```

Get Smart Campaigns

Retrieves all smart campaigns. Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_return = 56; // int | Maximum number of smart campaigns to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging
$folder = 'folder_example'; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$earliest_updated_at = 'earliest_updated_at_example'; // string | Exclude smart campaigns prior to this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$latest_updated_at = 'latest_updated_at_example'; // string | Exclude smart campaigns after this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$is_active = True; // bool | Set true to return only active campaigns.  Default false

try {
    $result = $apiInstance->getAllSmartCampaignsGET($max_return, $offset, $folder, $earliest_updated_at, $latest_updated_at, $is_active);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->getAllSmartCampaignsGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of smart campaigns to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]
 **earliest_updated_at** | **string**| Exclude smart campaigns prior to this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **latest_updated_at** | **string**| Exclude smart campaigns after this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **is_active** | **bool**| Set true to return only active campaigns.  Default false | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmartCampaignByIdUsingGET()`

```php
getSmartCampaignByIdUsingGET($id): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse
```

Get Smart Campaign by Id

Returns the smart campaign for the given id.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id for the smart campaign

try {
    $result = $apiInstance->getSmartCampaignByIdUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->getSmartCampaignByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id for the smart campaign |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmartCampaignByNameUsingGET()`

```php
getSmartCampaignByNameUsingGET($name): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse
```

Get Smart Campaign by Name

Returns the smart campaign for the given name.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name for the smart campaign

try {
    $result = $apiInstance->getSmartCampaignByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->getSmartCampaignByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name for the smart campaign |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSmartListBySmartCampaignIdUsingGET()`

```php
getSmartListBySmartCampaignIdUsingGET($id, $include_rules): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponseWithRules
```

Get Smart List by Smart Campaign Id

Retrieves a Smart List record by its Smart Campaign id. Required Permissions: Read-Asset or Read-Write Asset

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id for the smart campaign containing smart list to retrieve
$include_rules = True; // bool | Set true to populate smart list rules.  Default false

try {
    $result = $apiInstance->getSmartListBySmartCampaignIdUsingGET($id, $include_rules);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->getSmartListBySmartCampaignIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id for the smart campaign containing smart list to retrieve |
 **include_rules** | **bool**| Set true to populate smart list rules.  Default false | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponseWithRules**](../Model/ResponseOfSmartListResponseWithRules.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSmartCampaignUsingPOST()`

```php
updateSmartCampaignUsingPOST($id, $update_smart_campaign_request): \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse
```

Update Smart Campaign

Update the smart campaign for the given id.  Required Permissions: Read-Write Assets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new NecLimDul\MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id for the smart campaign
$update_smart_campaign_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateSmartCampaignRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateSmartCampaignRequest | updateSmartCampaignRequest

try {
    $result = $apiInstance->updateSmartCampaignUsingPOST($id, $update_smart_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->updateSmartCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id for the smart campaign |
 **update_smart_campaign_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateSmartCampaignRequest**](../Model/UpdateSmartCampaignRequest.md)| updateSmartCampaignRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

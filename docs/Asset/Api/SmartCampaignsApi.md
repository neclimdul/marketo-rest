# MarketoRest\Asset\SmartCampaignsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateSmartCampaignUsingPOST**](SmartCampaignsApi.md#activateSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}/activate.json | Activate Smart Campaign
[**cloneSmartCampaignUsingPOST**](SmartCampaignsApi.md#cloneSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}/clone.json | Clone Smart Campaign
[**createSmartCampaignUsingPOST**](SmartCampaignsApi.md#createSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaigns.json | Create Smart Campaign
[**deactivateSmartCampaignUsingPOST**](SmartCampaignsApi.md#deactivateSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}/deactivate.json | Deactivate Smart Campaign
[**deleteSmartCampaignUsingPOST**](SmartCampaignsApi.md#deleteSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}/delete.json | Delete Smart Campaign
[**getAllSmartCampaignsGET**](SmartCampaignsApi.md#getAllSmartCampaignsGET) | **GET** /rest/asset/v1/smartCampaigns.json | Get Smart Campaigns
[**getSmartCampaignByIdUsingGET**](SmartCampaignsApi.md#getSmartCampaignByIdUsingGET) | **GET** /rest/asset/v1/smartCampaign/{id}.json | Get Smart Campaign by Id
[**getSmartCampaignByNameUsingGET**](SmartCampaignsApi.md#getSmartCampaignByNameUsingGET) | **GET** /rest/asset/v1/smartCampaign/byName.json | Get Smart Campaign by Name
[**getSmartListBySmartCampaignIdUsingGET**](SmartCampaignsApi.md#getSmartListBySmartCampaignIdUsingGET) | **GET** /rest/asset/v1/smartCampaign/{id}/smartList.json | Get Smart List by Smart Campaign Id
[**updateSmartCampaignUsingPOST**](SmartCampaignsApi.md#updateSmartCampaignUsingPOST) | **POST** /rest/asset/v1/smartCampaign/{id}.json | Update Smart Campaign


# **activateSmartCampaignUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfIdResponse activateSmartCampaignUsingPOST($id)

Activate Smart Campaign

Activates a trigger smart campaign.  Required Permissions: Activate Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart campaign |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneSmartCampaignUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse cloneSmartCampaignUsingPOST($id, $clone_smart_campaign_request)

Clone Smart Campaign

Clones a smart campaign.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of the smart campaign
$clone_smart_campaign_request = new \MarketoRest\Asset\Model\CloneSmartCampaignRequest(); // \MarketoRest\Asset\Model\CloneSmartCampaignRequest | cloneSmartCampaignRequest

try {
    $result = $apiInstance->cloneSmartCampaignUsingPOST($id, $clone_smart_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->cloneSmartCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart campaign |
 **clone_smart_campaign_request** | [**\MarketoRest\Asset\Model\CloneSmartCampaignRequest**](../Model/CloneSmartCampaignRequest.md)| cloneSmartCampaignRequest |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSmartCampaignUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse createSmartCampaignUsingPOST($create_smart_campaign_request)

Create Smart Campaign

Creates a new smart campaign.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_smart_campaign_request = new \MarketoRest\Asset\Model\CreateSmartCampaignRequest(); // \MarketoRest\Asset\Model\CreateSmartCampaignRequest | createSmartCampaignRequest

try {
    $result = $apiInstance->createSmartCampaignUsingPOST($create_smart_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->createSmartCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_smart_campaign_request** | [**\MarketoRest\Asset\Model\CreateSmartCampaignRequest**](../Model/CreateSmartCampaignRequest.md)| createSmartCampaignRequest |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deactivateSmartCampaignUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfIdResponse deactivateSmartCampaignUsingPOST($id)

Deactivate Smart Campaign

Deactivates a trigger smart campaign.  Required Permissions: Deactivate Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart campaign |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSmartCampaignUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfIdResponse deleteSmartCampaignUsingPOST($id)

Delete Smart Campaign

Deletes a smart campaign.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of the smart campaign |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllSmartCampaignsGET**
> \MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse getAllSmartCampaignsGET($max_return, $offset, $folder, $earliest_updated_at, $latest_updated_at)

Get Smart Campaigns

Retrieves all smart campaigns. Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_return = 56; // int | Maximum number of smart campaigns to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging
$folder = "folder_example"; // string | JSON representation of parent folder, with members 'id', and 'type' which may be 'Folder' or 'Program'
$earliest_updated_at = "earliest_updated_at_example"; // string | Exclude smart campaigns prior to this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$latest_updated_at = "latest_updated_at_example"; // string | Exclude smart campaigns after this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.

try {
    $result = $apiInstance->getAllSmartCampaignsGET($max_return, $offset, $folder, $earliest_updated_at, $latest_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->getAllSmartCampaignsGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of smart campaigns to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **folder** | **string**| JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | [optional]
 **earliest_updated_at** | **string**| Exclude smart campaigns prior to this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **latest_updated_at** | **string**| Exclude smart campaigns after this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]

### Return type

[**\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmartCampaignByIdUsingGET**
> \MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse getSmartCampaignByIdUsingGET($id)

Get Smart Campaign by Id

Returns the smart campaign for the given id.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
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
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id for the smart campaign |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmartCampaignByNameUsingGET**
> \MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse getSmartCampaignByNameUsingGET($name)

Get Smart Campaign by Name

Returns the smart campaign for the given name.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name for the smart campaign

try {
    $result = $apiInstance->getSmartCampaignByNameUsingGET($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->getSmartCampaignByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name for the smart campaign |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmartListBySmartCampaignIdUsingGET**
> \MarketoRest\Asset\Model\ResponseOfSmartListResponseWithRules getSmartListBySmartCampaignIdUsingGET($id, $include_rules)

Get Smart List by Smart Campaign Id

Retrieves a Smart List record by its Smart Campaign id. Required Permissions: Read-Asset or Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 789; // int | Id for the smart campaign containing smart list to retrieve
$include_rules = true; // bool | Set true to populate smart list rules.  Default false

try {
    $result = $apiInstance->getSmartListBySmartCampaignIdUsingGET($id, $include_rules);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->getSmartListBySmartCampaignIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id for the smart campaign containing smart list to retrieve |
 **include_rules** | **bool**| Set true to populate smart list rules.  Default false | [optional]

### Return type

[**\MarketoRest\Asset\Model\ResponseOfSmartListResponseWithRules**](../Model/ResponseOfSmartListResponseWithRules.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSmartCampaignUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse updateSmartCampaignUsingPOST($id, $update_smart_campaign_request)

Update Smart Campaign

Update the smart campaign for the given id.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\SmartCampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id for the smart campaign
$update_smart_campaign_request = new \MarketoRest\Asset\Model\UpdateSmartCampaignRequest(); // \MarketoRest\Asset\Model\UpdateSmartCampaignRequest | updateSmartCampaignRequest

try {
    $result = $apiInstance->updateSmartCampaignUsingPOST($id, $update_smart_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SmartCampaignsApi->updateSmartCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id for the smart campaign |
 **update_smart_campaign_request** | [**\MarketoRest\Asset\Model\UpdateSmartCampaignRequest**](../Model/UpdateSmartCampaignRequest.md)| updateSmartCampaignRequest |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfSmartCampaignResponse**](../Model/ResponseOfSmartCampaignResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


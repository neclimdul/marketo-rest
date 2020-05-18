# MarketoRest\Asset\LandingPageRedirectRulesApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createLandingPageRedirectRuleUsingPOST**](LandingPageRedirectRulesApi.md#createLandingPageRedirectRuleUsingPOST) | **POST** /rest/asset/v1/redirectRules.json | Create Landing Page Redirect Rule
[**deleteLandingPageRedirectRuleUsingPOST**](LandingPageRedirectRulesApi.md#deleteLandingPageRedirectRuleUsingPOST) | **POST** /rest/asset/v1/redirectRule/{id}/delete.json | Delete Landing Page Redirect Rule
[**getLandingPageDomainsUsingGET**](LandingPageRedirectRulesApi.md#getLandingPageDomainsUsingGET) | **GET** /rest/asset/v1/landingPageDomains.json | Get Landing Page Domains
[**getLandingPageRedirectRuleByIdUsingGET**](LandingPageRedirectRulesApi.md#getLandingPageRedirectRuleByIdUsingGET) | **GET** /rest/asset/v1/redirectRule/{id}.json | Get Landing Page Redirect Rule by Id
[**getLandingPageRedirectRulesUsingGET**](LandingPageRedirectRulesApi.md#getLandingPageRedirectRulesUsingGET) | **GET** /rest/asset/v1/redirectRules.json | Get Landing Page Redirect Rules
[**updateLandingPageRedirectRuleUsingPOST**](LandingPageRedirectRulesApi.md#updateLandingPageRedirectRuleUsingPOST) | **POST** /rest/asset/v1/redirectRule/{id}.json | Update Landing Page Redirect Rule


# **createLandingPageRedirectRuleUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfLandingPageRedirectRules createLandingPageRedirectRuleUsingPOST($create_landing_page_redirect_rule_request)

Create Landing Page Redirect Rule

Create a new landing page redirect rule. Required Permissions: Read Write Redirect Rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageRedirectRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_landing_page_redirect_rule_request = new \MarketoRest\Asset\Model\CreateLandingPageRedirectRuleRequest(); // \MarketoRest\Asset\Model\CreateLandingPageRedirectRuleRequest | createLandingPageRedirectRuleRequest

try {
    $result = $apiInstance->createLandingPageRedirectRuleUsingPOST($create_landing_page_redirect_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageRedirectRulesApi->createLandingPageRedirectRuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_landing_page_redirect_rule_request** | [**\MarketoRest\Asset\Model\CreateLandingPageRedirectRuleRequest**](../Model/CreateLandingPageRedirectRuleRequest.md)| createLandingPageRedirectRuleRequest |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfLandingPageRedirectRules**](../Model/ResponseOfLandingPageRedirectRules.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteLandingPageRedirectRuleUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfIdResponse deleteLandingPageRedirectRuleUsingPOST($id)

Delete Landing Page Redirect Rule

Delete a landing page redirect rule. Required Permissions: Read Write Redirect Rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageRedirectRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of landing page redirect rule

try {
    $result = $apiInstance->deleteLandingPageRedirectRuleUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageRedirectRulesApi->deleteLandingPageRedirectRuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of landing page redirect rule |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageDomainsUsingGET**
> \MarketoRest\Asset\Model\ResponseOfLandingPageDomains getLandingPageDomainsUsingGET($max_return, $offset)

Get Landing Page Domains

Retrieves a list of landing page domain and domain aliases. Required Permissions: Read Only Redirect Rules, Read Write Redirect Rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageRedirectRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_return = 56; // int | Maximum number of landing page domains and domain aliases to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getLandingPageDomainsUsingGET($max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageRedirectRulesApi->getLandingPageDomainsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of landing page domains and domain aliases to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\MarketoRest\Asset\Model\ResponseOfLandingPageDomains**](../Model/ResponseOfLandingPageDomains.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageRedirectRuleByIdUsingGET**
> \MarketoRest\Asset\Model\ResponseOfLandingPageRedirectRules getLandingPageRedirectRuleByIdUsingGET($id)

Get Landing Page Redirect Rule by Id

Retrieves the landing page redirect rule record. Required Permissions: Read Only Redirect Rules, Read Write Redirect Rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageRedirectRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of landing page redirect rule

try {
    $result = $apiInstance->getLandingPageRedirectRuleByIdUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageRedirectRulesApi->getLandingPageRedirectRuleByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of landing page redirect rule |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfLandingPageRedirectRules**](../Model/ResponseOfLandingPageRedirectRules.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLandingPageRedirectRulesUsingGET**
> \MarketoRest\Asset\Model\ResponseOfLandingPageRedirectRules getLandingPageRedirectRulesUsingGET($max_return, $offset, $redirect_tolanding_page_id, $redirect_to_path, $earliest_updated_at, $latest_updated_at)

Get Landing Page Redirect Rules

Retrieves a list of landing page redirect rules from the target instance. Required Permissions: Read Only Redirect Rules, Read Write Redirect Rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageRedirectRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_return = 56; // int | Maximum number of landing page redirect rules to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging
$redirect_tolanding_page_id = "redirect_tolanding_page_id_example"; // string | Landing page id of landing page to redirect to
$redirect_to_path = "redirect_to_path_example"; // string | Path of landing page to redirect to
$earliest_updated_at = "earliest_updated_at_example"; // string | Exclude landing page redirect rules prior to this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$latest_updated_at = "latest_updated_at_example"; // string | Exclude landing page redirect rules after this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.

try {
    $result = $apiInstance->getLandingPageRedirectRulesUsingGET($max_return, $offset, $redirect_tolanding_page_id, $redirect_to_path, $earliest_updated_at, $latest_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageRedirectRulesApi->getLandingPageRedirectRulesUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of landing page redirect rules to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **redirect_tolanding_page_id** | **string**| Landing page id of landing page to redirect to | [optional]
 **redirect_to_path** | **string**| Path of landing page to redirect to | [optional]
 **earliest_updated_at** | **string**| Exclude landing page redirect rules prior to this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **latest_updated_at** | **string**| Exclude landing page redirect rules after this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]

### Return type

[**\MarketoRest\Asset\Model\ResponseOfLandingPageRedirectRules**](../Model/ResponseOfLandingPageRedirectRules.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateLandingPageRedirectRuleUsingPOST**
> \MarketoRest\Asset\Model\ResponseOfLandingPageRedirectRules updateLandingPageRedirectRuleUsingPOST($id, $update_landing_page_redirect_rule_request)

Update Landing Page Redirect Rule

Update an existing landing page redirect rule. Required Permissions: Read Write Redirect Rules

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new MarketoRest\Asset\Api\LandingPageRedirectRulesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | Id of landing page redirect rule
$update_landing_page_redirect_rule_request = new \MarketoRest\Asset\Model\UpdateLandingPageRedirectRuleRequest(); // \MarketoRest\Asset\Model\UpdateLandingPageRedirectRuleRequest | updateLandingPageRedirectRuleRequest

try {
    $result = $apiInstance->updateLandingPageRedirectRuleUsingPOST($id, $update_landing_page_redirect_rule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LandingPageRedirectRulesApi->updateLandingPageRedirectRuleUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| Id of landing page redirect rule |
 **update_landing_page_redirect_rule_request** | [**\MarketoRest\Asset\Model\UpdateLandingPageRedirectRuleRequest**](../Model/UpdateLandingPageRedirectRuleRequest.md)| updateLandingPageRedirectRuleRequest |

### Return type

[**\MarketoRest\Asset\Model\ResponseOfLandingPageRedirectRules**](../Model/ResponseOfLandingPageRedirectRules.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


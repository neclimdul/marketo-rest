# NecLimDul\MarketoRest\Asset\ProgramsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**approveProgramUsingPOST**](ProgramsApi.md#approveProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}/approve.json | Approve Program
[**browseProgramsUsingGET**](ProgramsApi.md#browseProgramsUsingGET) | **GET** /rest/asset/v1/programs.json | Get Programs
[**cloneProgramUsingPOST**](ProgramsApi.md#cloneProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}/clone.json | Clone Program
[**createProgramUsingPOST**](ProgramsApi.md#createProgramUsingPOST) | **POST** /rest/asset/v1/programs.json | Create Program
[**deleteProgramUsingPOST**](ProgramsApi.md#deleteProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}/delete.json | Delete Program
[**getProgramByIdUsingGET**](ProgramsApi.md#getProgramByIdUsingGET) | **GET** /rest/asset/v1/program/{id}.json | Get Program by Id
[**getProgramByNameUsingGET**](ProgramsApi.md#getProgramByNameUsingGET) | **GET** /rest/asset/v1/program/byName.json | Get Program by Name
[**getProgramListByTagUsingGET**](ProgramsApi.md#getProgramListByTagUsingGET) | **GET** /rest/asset/v1/program/byTag.json | Get Programs by Tag
[**getSmartListByProgramIdUsingGET**](ProgramsApi.md#getSmartListByProgramIdUsingGET) | **GET** /rest/asset/v1/program/{programId}/smartList.json | Get Smart List by Program Id
[**unapproveProgramUsingPOST**](ProgramsApi.md#unapproveProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}/unapprove.json | Unapprove Program
[**updateProgramUsingPOST**](ProgramsApi.md#updateProgramUsingPOST) | **POST** /rest/asset/v1/program/{id}.json | Update Program Metadata


# **approveProgramUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse approveProgramUsingPOST($id)

Approve Program

Approves the target program.  Only valid for unapproved email programs.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->approveProgramUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->approveProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **browseProgramsUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfBrowseAllPrograms browseProgramsUsingGET($max_return, $offset, $filter_type, $earliest_updated_at, $latest_updated_at)

Get Programs

Retrieves the list of accessible programs from the target instance. Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging
$filter_type = "filter_type_example"; // string | Optional filter.  Requires filterValues
$earliest_updated_at = "earliest_updated_at_example"; // string | Exclude programs prior to this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.
$latest_updated_at = "latest_updated_at_example"; // string | Exclude programs after this date. Must be valid ISO-8601 string.  See <a href=\"http://developers.marketo.com/rest-api/lead-database/fields/field-types/\">Datetime</a> field type description.

try {
    $result = $apiInstance->browseProgramsUsingGET($max_return, $offset, $filter_type, $earliest_updated_at, $latest_updated_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->browseProgramsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]
 **filter_type** | **string**| Optional filter.  Requires filterValues | [optional]
 **earliest_updated_at** | **string**| Exclude programs prior to this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]
 **latest_updated_at** | **string**| Exclude programs after this date. Must be valid ISO-8601 string.  See &lt;a href&#x3D;\&quot;http://developers.marketo.com/rest-api/lead-database/fields/field-types/\&quot;&gt;Datetime&lt;/a&gt; field type description. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfBrowseAllPrograms**](../Model/ResponseOfBrowseAllPrograms.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cloneProgramUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse cloneProgramUsingPOST($id, $clone_program_request)

Clone Program

Clones the target program.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$clone_program_request = new \NecLimDul\MarketoRest\Asset\Model\CloneProgramRequest(); // \NecLimDul\MarketoRest\Asset\Model\CloneProgramRequest | cloneProgramRequest

try {
    $result = $apiInstance->cloneProgramUsingPOST($id, $clone_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->cloneProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **clone_program_request** | [**\NecLimDul\MarketoRest\Asset\Model\CloneProgramRequest**](../Model/CloneProgramRequest.md)| cloneProgramRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProgramUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse createProgramUsingPOST($create_program_request)

Create Program

Creates a new program.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$create_program_request = new \NecLimDul\MarketoRest\Asset\Model\CreateProgramRequest(); // \NecLimDul\MarketoRest\Asset\Model\CreateProgramRequest | createProgramRequest

try {
    $result = $apiInstance->createProgramUsingPOST($create_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->createProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **create_program_request** | [**\NecLimDul\MarketoRest\Asset\Model\CreateProgramRequest**](../Model/CreateProgramRequest.md)| createProgramRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteProgramUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse deleteProgramUsingPOST($id)

Delete Program

Deletes the target program.  The program may not contain any assets which are in use outside the program.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->deleteProgramUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->deleteProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramByIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse getProgramByIdUsingGET($id)

Get Program by Id

Retrieves the program record for the given id.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->getProgramByIdUsingGET($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getProgramByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramByNameUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse getProgramByNameUsingGET($name, $include_tags, $include_costs)

Get Program by Name

Retrieves the program record for the given name.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = "name_example"; // string | Name of the program
$include_tags = true; // bool | Set true to populate program tags
$include_costs = true; // bool | Set true to populate program costs

try {
    $result = $apiInstance->getProgramByNameUsingGET($name, $include_tags, $include_costs);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getProgramByNameUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**| Name of the program |
 **include_tags** | **bool**| Set true to populate program tags | [optional]
 **include_costs** | **bool**| Set true to populate program costs | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramListByTagUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse getProgramListByTagUsingGET($tag_type, $tag_value, $max_return, $offset)

Get Programs by Tag

Retrieves a list of programs matching the tag type and tag values given.  Required Permissions: Read-Only Assets, Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$tag_type = "tag_type_example"; // string | Type of program tag
$tag_value = "tag_value_example"; // string | Value of the tag
$max_return = 56; // int | Maximum number of channels to return.  Max 200, default 20
$offset = 56; // int | Integer offset for paging

try {
    $result = $apiInstance->getProgramListByTagUsingGET($tag_type, $tag_value, $max_return, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getProgramListByTagUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **tag_type** | **string**| Type of program tag |
 **tag_value** | **string**| Value of the tag |
 **max_return** | **int**| Maximum number of channels to return.  Max 200, default 20 | [optional]
 **offset** | **int**| Integer offset for paging | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSmartListByProgramIdUsingGET**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponseWithRules getSmartListByProgramIdUsingGET($program_id, $include_rules)

Get Smart List by Program Id

Retrieves a Smart List record by its Email Program id. Required Permissions: Read-Asset or Read-Write Asset

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = 789; // int | Id for the email program containing smart list to retrieve
$include_rules = true; // bool | Set true to populate smart list rules.  Default false

try {
    $result = $apiInstance->getSmartListByProgramIdUsingGET($program_id, $include_rules);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->getSmartListByProgramIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **int**| Id for the email program containing smart list to retrieve |
 **include_rules** | **bool**| Set true to populate smart list rules.  Default false | [optional]

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfSmartListResponseWithRules**](../Model/ResponseOfSmartListResponseWithRules.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unapproveProgramUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse unapproveProgramUsingPOST($id)

Unapprove Program

Unapproves the target program.  Only valid for approved email programs.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id

try {
    $result = $apiInstance->unapproveProgramUsingPOST($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->unapproveProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfIdResponse**](../Model/ResponseOfIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateProgramUsingPOST**
> \NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse updateProgramUsingPOST($id, $update_program_request)

Update Program Metadata

Updates the target program's metadata.  Required Permissions: Read-Write Assets

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Asset\Api\ProgramsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = 56; // int | id
$update_program_request = new \NecLimDul\MarketoRest\Asset\Model\UpdateProgramRequest(); // \NecLimDul\MarketoRest\Asset\Model\UpdateProgramRequest | updateProgramRequest

try {
    $result = $apiInstance->updateProgramUsingPOST($id, $update_program_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramsApi->updateProgramUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| id |
 **update_program_request** | [**\NecLimDul\MarketoRest\Asset\Model\UpdateProgramRequest**](../Model/UpdateProgramRequest.md)| updateProgramRequest |

### Return type

[**\NecLimDul\MarketoRest\Asset\Model\ResponseOfProgramResponse**](../Model/ResponseOfProgramResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


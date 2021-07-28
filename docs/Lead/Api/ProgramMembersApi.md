# NecLimDul\MarketoRest\Lead\ProgramMembersApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProgramMemberUsingPOST**](ProgramMembersApi.md#deleteProgramMemberUsingPOST) | **POST** /rest/v1/programs/{programId}/members/delete.json | Delete Program Members
[**describeProgramMemberUsingGET2**](ProgramMembersApi.md#describeProgramMemberUsingGET2) | **GET** /rest/v1/programs/members/describe.json | Describe Program Member
[**getProgramMembersUsingGET**](ProgramMembersApi.md#getProgramMembersUsingGET) | **GET** /rest/v1/programs/{programId}/members.json | Get Program Members
[**syncProgramMemberDataUsingPOST**](ProgramMembersApi.md#syncProgramMemberDataUsingPOST) | **POST** /rest/v1/programs/{programId}/members.json | Sync Program Member Data
[**syncProgramMemberStatusUsingPOST**](ProgramMembersApi.md#syncProgramMemberStatusUsingPOST) | **POST** /rest/v1/programs/{programId}/members/status.json | Sync Program Member Status


# **deleteProgramMemberUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMemberDelete deleteProgramMemberUsingPOST($program_id, $delete_program_member_request)

Delete Program Members

Delete a list of members from the destination instance.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = 789; // int | The id of target program.
$delete_program_member_request = new \NecLimDul\MarketoRest\Lead\Model\DeleteProgramMemberRequest(); // \NecLimDul\MarketoRest\Lead\Model\DeleteProgramMemberRequest | deleteProgramMemberRequest

try {
    $result = $apiInstance->deleteProgramMemberUsingPOST($program_id, $delete_program_member_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramMembersApi->deleteProgramMemberUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **int**| The id of target program. |
 **delete_program_member_request** | [**\NecLimDul\MarketoRest\Lead\Model\DeleteProgramMemberRequest**](../Model/DeleteProgramMemberRequest.md)| deleteProgramMemberRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMemberDelete**](../Model/ResponseOfProgramMemberDelete.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **describeProgramMemberUsingGET2**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMemberAttributes2 describeProgramMemberUsingGET2()

Describe Program Member

Returns metadata about program member objects in the target instance, including a list of all fields available for interaction via the APIs.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->describeProgramMemberUsingGET2();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramMembersApi->describeProgramMemberUsingGET2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMemberAttributes2**](../Model/ResponseOfProgramMemberAttributes2.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProgramMembersUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMember getProgramMembersUsingGET($program_id, $filter_type, $filter_values, $fields, $batch_size, $next_page_token)

Get Program Members

Returns a list of up to 300 program members on a list of values in a particular field.  If you specify a filterType that is a custom field, the custom field’s dataType must be either “string” or “integer”.  If you specify a filterType other than “leadId”, a maximum of 100,000 program member records can be processed by the request.  Required Permissions: Read-Only Lead, Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = 789; // int | The id of target program.
$filter_type = "filter_type_example"; // string | The program member field to filter on.  Any custom field (string or integer types only) or any searchable field.  Searchable fields can be obtained via the <a href=\"/rest-api/endpoint-reference/lead-database-endpoint-reference/#/Leads/describeProgramMemberUsingGET2\">Describe Program Member</a> endpoint.
$filter_values = array("filter_values_example"); // string[] | A comma-separated list of values to filter on in the specified fields.
$fields = array("fields_example"); // string[] | A comma-separated list of lead fields to return for each record.
$batch_size = 56; // int | The batch size to return.  The max and default value is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.

try {
    $result = $apiInstance->getProgramMembersUsingGET($program_id, $filter_type, $filter_values, $fields, $batch_size, $next_page_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramMembersApi->getProgramMembersUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **int**| The id of target program. |
 **filter_type** | **string**| The program member field to filter on.  Any custom field (string or integer types only) or any searchable field.  Searchable fields can be obtained via the &lt;a href&#x3D;\&quot;/rest-api/endpoint-reference/lead-database-endpoint-reference/#/Leads/describeProgramMemberUsingGET2\&quot;&gt;Describe Program Member&lt;/a&gt; endpoint. |
 **filter_values** | [**string[]**](../Model/string.md)| A comma-separated list of values to filter on in the specified fields. |
 **fields** | [**string[]**](../Model/string.md)| A comma-separated list of lead fields to return for each record. | [optional]
 **batch_size** | **int**| The batch size to return.  The max and default value is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMember**](../Model/ResponseOfProgramMember.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncProgramMemberDataUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMemberData syncProgramMemberDataUsingPOST($program_id, $sync_program_member_data_request)

Sync Program Member Data

Changes the program member data of a list of leads in a target program. Only existing members of the program may have their data changed with this API. Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = 789; // int | The id of target program.
$sync_program_member_data_request = new \NecLimDul\MarketoRest\Lead\Model\SyncProgramMemberDataRequest(); // \NecLimDul\MarketoRest\Lead\Model\SyncProgramMemberDataRequest | syncProgramMemberDataRequest

try {
    $result = $apiInstance->syncProgramMemberDataUsingPOST($program_id, $sync_program_member_data_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramMembersApi->syncProgramMemberDataUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **int**| The id of target program. |
 **sync_program_member_data_request** | [**\NecLimDul\MarketoRest\Lead\Model\SyncProgramMemberDataRequest**](../Model/SyncProgramMemberDataRequest.md)| syncProgramMemberDataRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMemberData**](../Model/ResponseOfProgramMemberData.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncProgramMemberStatusUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMemberStatus syncProgramMemberStatusUsingPOST($program_id, $sync_program_member_status_request)

Sync Program Member Status

Changes the program member status of a list of leads in a target program.  If member is not part of the program, member is added to the program.  Required Permissions: Read-Write Lead

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\ProgramMembersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$program_id = 789; // int | The id of target program.
$sync_program_member_status_request = new \NecLimDul\MarketoRest\Lead\Model\SyncProgramMemberStatusRequest(); // \NecLimDul\MarketoRest\Lead\Model\SyncProgramMemberStatusRequest | syncProgramMemberStatusRequest

try {
    $result = $apiInstance->syncProgramMemberStatusUsingPOST($program_id, $sync_program_member_status_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProgramMembersApi->syncProgramMemberStatusUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **program_id** | **int**| The id of target program. |
 **sync_program_member_status_request** | [**\NecLimDul\MarketoRest\Lead\Model\SyncProgramMemberStatusRequest**](../Model/SyncProgramMemberStatusRequest.md)| syncProgramMemberStatusRequest |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfProgramMemberStatus**](../Model/ResponseOfProgramMemberStatus.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


# NecLimDul\MarketoRest\Lead\CampaignsApi

All URIs are relative to *https://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getCampaignByIdUsingGET**](CampaignsApi.md#getCampaignByIdUsingGET) | **GET** /rest/v1/campaigns/{campaignId}.json | Get Campaign By Id
[**getCampaignsUsingGET**](CampaignsApi.md#getCampaignsUsingGET) | **GET** /rest/v1/campaigns.json | Get Campaigns
[**scheduleCampaignUsingPOST**](CampaignsApi.md#scheduleCampaignUsingPOST) | **POST** /rest/v1/campaigns/{campaignId}/schedule.json | Schedule Campaign
[**triggerCampaignUsingPOST**](CampaignsApi.md#triggerCampaignUsingPOST) | **POST** /rest/v1/campaigns/{campaignId}/trigger.json | Request Campaign


# **getCampaignByIdUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign getCampaignByIdUsingGET($campaign_id)

Get Campaign By Id

Returns the record of a campaign by its id.  Required Permissions: Read-Only Campaigns, Read-Write Campaigns<br><br>Note: This endpoint has been superceded.  Use <a href=\"/rest-api/endpoint-reference/asset-endpoint-reference/#!/Smart_Campaigns/getSmartCampaignByIdUsingGET\">Get Smart Campaign by Id</a> endpoint instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 56; // int | campaignId

try {
    $result = $apiInstance->getCampaignByIdUsingGET($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaignByIdUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| campaignId |

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign**](../Model/ResponseOfCampaign.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCampaignsUsingGET**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign getCampaignsUsingGET($id, $name, $program_name, $workspace_name, $batch_size, $next_page_token, $is_triggerable)

Get Campaigns

Returns a list of campaign records.  Required Permissions: Read-Only Campaigns, Read-Write Campaigns<br><br>Note: This endpoint has been superceded.  Use <a href=\"/rest-api/endpoint-reference/asset-endpoint-reference/#/Smart_Campaigns/getAllSmartCampaignsGET\">Get Smart Campaigns</a> endpoint instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = array(56); // int[] | Comma-separated list of campaign ids to return records for
$name = array("name_example"); // string[] | Comma-separated list of names to filter on
$program_name = array("program_name_example"); // string[] | Comma-separated list of program names to filter on.  If set, will filter to only campaigns which are children of the designated programs.
$workspace_name = array("workspace_name_example"); // string[] | Comma-separated list of workspace names to filter on.  If set, will only return campaigns in the given workspaces.
$batch_size = 56; // int | Maximum number of records to return.  Maximum and default is 300.
$next_page_token = "next_page_token_example"; // string | A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info.
$is_triggerable = true; // bool | Set to true to return active Campaigns which have a Campaign is Requested trigger and source is Web Service API

try {
    $result = $apiInstance->getCampaignsUsingGET($id, $name, $program_name, $workspace_name, $batch_size, $next_page_token, $is_triggerable);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->getCampaignsUsingGET: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**int[]**](../Model/int.md)| Comma-separated list of campaign ids to return records for | [optional]
 **name** | [**string[]**](../Model/string.md)| Comma-separated list of names to filter on | [optional]
 **program_name** | [**string[]**](../Model/string.md)| Comma-separated list of program names to filter on.  If set, will filter to only campaigns which are children of the designated programs. | [optional]
 **workspace_name** | [**string[]**](../Model/string.md)| Comma-separated list of workspace names to filter on.  If set, will only return campaigns in the given workspaces. | [optional]
 **batch_size** | **int**| Maximum number of records to return.  Maximum and default is 300. | [optional]
 **next_page_token** | **string**| A token will be returned by this endpoint if the result set is greater than the batch size and can be passed in a subsequent call through this parameter.  See Paging Tokens for more info. | [optional]
 **is_triggerable** | **bool**| Set to true to return active Campaigns which have a Campaign is Requested trigger and source is Web Service API | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign**](../Model/ResponseOfCampaign.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **scheduleCampaignUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign scheduleCampaignUsingPOST($campaign_id, $schedule_campaign_request)

Schedule Campaign

Remotely schedules a batch campaign to run at a given time.  My tokens local to the campaign's parent program can be overridden for the run to customize content.  When using the \"cloneToProgramName\" parameter described below, this endpoint is limited to 20 calls per day. Required Permissions: Execute Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 56; // int | Id of the batch campaign to schedule.
$schedule_campaign_request = new \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest(); // \NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest | scheduleCampaignRequest

try {
    $result = $apiInstance->scheduleCampaignUsingPOST($campaign_id, $schedule_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->scheduleCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| Id of the batch campaign to schedule. |
 **schedule_campaign_request** | [**\NecLimDul\MarketoRest\Lead\Model\ScheduleCampaignRequest**](../Model/ScheduleCampaignRequest.md)| scheduleCampaignRequest | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign**](../Model/ResponseOfCampaign.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **triggerCampaignUsingPOST**
> \NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign triggerCampaignUsingPOST($campaign_id, $trigger_campaign_request)

Request Campaign

Passes a set of leads to a trigger campaign to run through the campaign's flow.  The designated campaign must have a Campaign is Requested: Web Service API trigger, and must be active.  My tokens local to the campaign's parent program can be overridden for the run to customize content. A maximum of 100 leads are allowed per call. Required Permissions: Execute Campaign

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new NecLimDul\MarketoRest\Lead\Api\CampaignsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$campaign_id = 56; // int | The id of the campaign to trigger
$trigger_campaign_request = new \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest(); // \NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest | triggerCampaignRequest

try {
    $result = $apiInstance->triggerCampaignUsingPOST($campaign_id, $trigger_campaign_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignsApi->triggerCampaignUsingPOST: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **int**| The id of the campaign to trigger |
 **trigger_campaign_request** | [**\NecLimDul\MarketoRest\Lead\Model\TriggerCampaignRequest**](../Model/TriggerCampaignRequest.md)| triggerCampaignRequest | [optional]

### Return type

[**\NecLimDul\MarketoRest\Lead\Model\ResponseOfCampaign**](../Model/ResponseOfCampaign.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


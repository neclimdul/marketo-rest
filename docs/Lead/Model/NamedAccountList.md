# NamedAccountList

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | **string** | Datetime when the named account list was created | [optional] 
**marketo_guid** | **string** | Unique GUID of the custom object records | 
**name** | **string** | Name of named account list | [optional] 
**reasons** | [**\NecLimDul\MarketoRest\Lead\Model\Reason[]**](Reason.md) |  | [optional] 
**seq** | **int** | Integer indicating the sequence of the record in response.  This value is correlated to the order of the records included in the request input.  Seq should only be part of responses and should not be submitted. | 
**status** | **string** |  | [optional] 
**type** | **string** | Type of named account list (\&quot;default\&quot; if created by user or API, \&quot;external\&quot; if managed by CRM-View) | [optional] 
**updateable** | **bool** | Whether the list is updateable (true if created by user or API, false if managed by CRM-View) | [optional] 
**updated_at** | **string** | Datetime when the named account list was most recently updated | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

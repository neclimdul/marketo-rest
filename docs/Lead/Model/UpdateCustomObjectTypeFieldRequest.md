# UpdateCustomObjectTypeFieldRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | API Name of custom object field | [optional] 
**display_name** | **string** | UI display-name of the custom object field | [optional] 
**data_type** | **string** | Datatype of the custom object field | [optional] 
**description** | **string** | Description of the custom object field | [optional] 
**is_dedupe_field** | **bool** | Set to true to enable field as unique identifier for deduplicating records.  Default is false | [optional] 
**related_to** | [**\NecLimDul\MarketoRest\Lead\Model\CustomObjectTypeFieldRelatedTo**](CustomObjectTypeFieldRelatedTo.md) | Define custom object link field | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

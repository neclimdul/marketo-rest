# SyncCustomObjectRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Type of sync operation to perform | [optional] 
**dedupe_by** | **string** | Field to deduplicate on.  If the value in the field for a given record is not unique, an error will be returned for the individual record. | [optional] 
**input** | [**\MarketoRest\Lead\Model\CustomObject[]**](CustomObject.md) | List of input records | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



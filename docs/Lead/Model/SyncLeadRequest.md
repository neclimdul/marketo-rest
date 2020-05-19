# SyncLeadRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Type of sync operation to perform.  Defaults to createOrUpdate if unset | [optional] 
**async_processing** | **bool** | If set to true, the call will return immediately | [optional] 
**input** | [**\NecLimDul\MarketoRest\Lead\Model\Lead[]**](Lead.md) | List of leads for input | 
**lookup_field** | **string** | Field to deduplicate on.  The field must be present in each lead record of the input.  Defaults to email if unset | [optional] 
**partition_name** | **string** | Name of the partition to operate on, if applicable.  Should be set whenever possible, when interacting with an instance where partitions are enabled. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



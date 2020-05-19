# LeadChange

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_date** | [**\DateTime**](\DateTime.md) | Datetime of the activity | 
**activity_type_id** | **int** | Id of the activity type | 
**attributes** | [**\NecLimDul\MarketoRest\Lead\Model\Attribute[]**](Attribute.md) | List of secondary attributes | 
**campaign_id** | **int** |  | [optional] 
**fields** | [**\NecLimDul\MarketoRest\Lead\Model\LeadChangeField[]**](LeadChangeField.md) |  | [optional] 
**id** | **int** | Integer id of the activity.  For instances which have been migrated to Activity Service, this field may not be present, and should not be treated as unique. | 
**lead_id** | **int** | Id of the lead associated to the activity | 
**marketo_guid** | **string** | Unique id of the activity (128 character string) | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



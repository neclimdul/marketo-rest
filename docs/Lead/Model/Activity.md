# Activity

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_date** | [**\DateTime**](\DateTime.md) | Datetime of the activity | 
**activity_type_id** | **int** | Id of the activity type | 
**attributes** | [**\NecLimDul\MarketoRest\Lead\Model\Attribute[]**](Attribute.md) | List of secondary attributes | 
**campaign_id** | **int** | Id of the associated Smart Campaign, if applicable | [optional] 
**id** | **int** | Integer id of the activity. This value could exceed Int.MAX. For instances which have been migrated to Activity Service, this field may not be present, and should not be treated as unique. | 
**lead_id** | **int** | Id of the lead associated to the activity | 
**marketo_guid** | **string** | Unique id of the activity (128 character string) | [optional] 
**primary_attribute_value** | **string** | Value of the primary attribute | [optional] 
**primary_attribute_value_id** | **int** | Id of the primary attribute field | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

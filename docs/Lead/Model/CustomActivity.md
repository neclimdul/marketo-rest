# CustomActivity

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_date** | **string** | Datetime of the activity | 
**activity_type_id** | **int** | Id of the activity type | 
**api_name** | **string** |  | [optional] 
**attributes** | [**\MarketoRest\Lead\Model\Attribute[]**](Attribute.md) | List of secondary attributes | 
**errors** | [**\MarketoRest\Lead\Model\Error[]**](Error.md) | Array of errors that occurred if the request was unsuccessful | 
**id** | **int** | Integer id of the activity.  For instances which have been migrated to Activity Service, this field may not be present, and should not be treated as unique. | 
**lead_id** | **int** | Id of the lead associated to the activity | 
**marketo_guid** | **string** | Unique id of the activity (128 character string) | [optional] 
**primary_attribute_value** | **string** | Value of the primary attribute | 
**status** | **string** | Status of the operation performed on the record | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



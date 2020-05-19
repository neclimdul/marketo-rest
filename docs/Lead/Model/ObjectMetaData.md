# ObjectMetaData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | [**\DateTime**](\DateTime.md) | Datetime when the object type was created | 
**dedupe_fields** | **string[]** | List of dedupe fields.  Arrays with multiple members are compound keys | 
**description** | **string** | Description of the object type | 
**display_name** | **string** | UI display-name of the object type | 
**plural_name** | **string** | UI plural-name of the custom object type | 
**fields** | [**\NecLimDul\MarketoRest\Lead\Model\ObjectField[]**](ObjectField.md) | List of fields available on the object type | 
**id_field** | **string** | Primary id key of the object type | 
**api_name** | **string** | Name of the object type | 
**relationships** | [**\NecLimDul\MarketoRest\Lead\Model\ObjectRelation[]**](ObjectRelation.md) | List of relationships which the object has | 
**searchable_fields** | [**string[][]**](array.md) | List of fields valid for use as a filter type in a query | 
**updated_at** | [**\DateTime**](\DateTime.md) | Datetime when the object type was most recently updated | 
**state** | **string** | Approval state of object type | [optional] 
**version** | **string** | Version of object type that is returned in response | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



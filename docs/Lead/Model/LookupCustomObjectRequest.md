# LookupCustomObjectRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_size** | **int** | Maximum number of records to return in the response.  Max and default is 300 | [optional] 
**fields** | **string[]** | List of fields to return. If not specified, will return the following fields: marketoGuid, dedupeFields, updatedAt, createdAt, filterType | [optional] 
**filter_type** | **string** | Field to search on.  Valid values are: dedupeFields, idFields, and any field defined in searchableFields attribute of Describe endpoint.  Default is dedupeFields | [optional] 
**input** | [**\NecLimDul\MarketoRest\Lead\Model\CustomObject[]**](CustomObject.md) | Search values when using a compound key.  Each element must include each of the fields in the compound key.  Compound keys are determined by the contents of \&quot;dedupeFields\&quot; in the Describe result for the object | 
**next_page_token** | **string** | Paging token returned from a previous response | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



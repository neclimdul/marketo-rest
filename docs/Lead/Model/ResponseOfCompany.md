# ResponseOfCompany

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**errors** | [**\NecLimDul\MarketoRest\Lead\Model\Error[]**](Error.md) | Array of errors that occurred if the request was unsuccessful | 
**more_result** | **bool** | Boolean indicating if there are more results in subsequent pages | [optional] 
**next_page_token** | **string** | Paging token given if the result set exceeded the allowed batch size | [optional] 
**request_id** | **string** | Id of the request made | 
**result** | [**\NecLimDul\MarketoRest\Lead\Model\Company[]**](Company.md) | Array of results for individual records in the operation, may be empty | 
**success** | **bool** | Whether the request succeeded | 
**warnings** | [**\NecLimDul\MarketoRest\Lead\Model\Warning[]**](Warning.md) | Array of warnings given for the operation | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

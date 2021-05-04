# ProgramMemberDeleteResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | Status of the operation performed on the record | 
**reasons** | [**\NecLimDul\MarketoRest\Lead\Model\Reason[]**](Reason.md) | List of reasons why an operation did not succeed.  Reasons are only present in API responses and should not be submitted | [optional] 
**lead_id** | **int** | Id of the lead associated to the program member | 
**seq** | **int** | Integer indicating the sequence of the record in response.  This value is correlated to the order of the records included in the request input.  Seq should only be part of responses and should not be submitted. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

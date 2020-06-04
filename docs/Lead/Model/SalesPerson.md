# SalesPerson

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique integer id of the salesperson record | [optional]
**reasons** | [**\NecLimDul\MarketoRest\Lead\Model\Reason[]**](Reason.md) | List of reasons why an operation did not succeed.  Reasons are only present in API responses and should not be submitted | [optional]
**seq** | **int** | Integer indicating the sequence of the record in response.  This value is correlated to the order of the records included in the request input.  Seq should only be part of responses and should not be submitted. | [optional]
**status** | **string** | Status of the operation performed on the record | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

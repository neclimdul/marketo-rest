# UpdateProgramRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**costs** | [**\MarketoRest\Asset\Model\CostRequest[]**](CostRequest.md) | Lists of associated period costs that allow you to append, replace, or delete. To append new costs, simply add them to costs array.  To replace costs (destructive update), pass new costs and set costsDestructiveUpdate to true. To delete costs, do not pass costs parameter and set costsDestructiveUpdate to true | [optional] 
**costs_destructive_update** | **bool** | Set true to destroy existing costs and replace them with the specified costs | [optional] 
**description** | **string** | Updated description for the program | [optional] 
**end_date** | **string** | End date of the program.  Applicable to event, email, and webinar type programs | [optional] 
**name** | **string** | Name of the program | [optional] 
**start_date** | **string** | Start date of program.  Applicable to event, email and webinar type programs | [optional] 
**tags** | [**\MarketoRest\Asset\Model\TagRequest[]**](TagRequest.md) | List of associated program tags | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



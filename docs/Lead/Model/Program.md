# Program

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique integer id of a program record | 
**acquired_by** | **bool** | Whether the lead was acquired by the parent program | 
**is_exhausted** | **bool** | Whether the lead is currently exhausted in the stream, if applicable | 
**membership_date** | **string** | Date the lead first became a member of the program | 
**nurture_cadence** | **string** | Cadence of the parent stream if applicable | [optional] 
**progression_status** | **string** | Program status of the lead in the parent program | 
**reached_success** | **bool** | Whether the lead is in a success-status in the parent program | 
**stream** | **string** | Stream that the lead is a member of, if the parent program is an engagement program | [optional] 
**updated_at** | **string** | Datetime when the program was most recently updated | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

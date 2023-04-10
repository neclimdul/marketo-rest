# ExportProgramMemberFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**program_id** | **int** | Id of program to retrieve members from. Cannot be used in combination with \&quot;programIds\&quot; filter | 
**program_ids** | **int[]** | Array of program ids to retrieve members from. Cannot be used in combination with \&quot;programId\&quot; filter | 
**is_exhausted** | **bool** | Filter program membership records for people who have exhausted content | [optional] 
**nurture_cadence** | **string** | Filter program membership records for a given nurture cadence | [optional] 
**status_names** | **string[]** | Array of program member status names.  Can be default and/or user-defined.  Multiple status names are ORed together. | [optional] 
**updated_at** | [**\NecLimDul\MarketoRest\Lead\Model\DateRange**](DateRange.md) | Date range to filter program members on | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

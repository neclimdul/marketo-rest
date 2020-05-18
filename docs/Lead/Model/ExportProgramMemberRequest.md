# ExportProgramMemberRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**column_header_names** | [**\MarketoRest\Lead\Model\ColumnHeaderNames**](ColumnHeaderNames.md) | File header field names override (corresponds with REST API name) | [optional] 
**fields** | **string[]** | Comma-separated list of fields to include in the file | 
**filter** | [**\MarketoRest\Lead\Model\ExportProgramMemberFilter**](ExportProgramMemberFilter.md) | Program member record selection criteria. Must be the following: \&quot;programId\&quot; | 
**format** | **string** | File format to create(\&quot;CSV\&quot;, \&quot;TSV\&quot;, \&quot;SSV\&quot;).  Default is \&quot;CSV\&quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



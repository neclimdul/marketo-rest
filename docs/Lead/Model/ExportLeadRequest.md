# ExportLeadRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**column_header_names** | [**\MarketoRest\Lead\Model\ColumnHeaderNames**](ColumnHeaderNames.md) | File header field names override (corresponds with REST API name) | [optional] 
**fields** | **string[]** | Comma-separated list of fields to include in the file | 
**filter** | [**\MarketoRest\Lead\Model\ExportLeadFilter**](ExportLeadFilter.md) | Lead record selection criteria. Can be one of the following: \&quot;createdAt\&quot;, \&quot;updatedAt\&quot;, \&quot;staticListName\&quot;, \&quot;staticListId\&quot;, \&quot;smartListName\&quot;, \&quot;smartListId\&quot; | 
**format** | **string** | File format to create(\&quot;CSV\&quot;, \&quot;TSV\&quot;, \&quot;SSV\&quot;).  Default is \&quot;CSV\&quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



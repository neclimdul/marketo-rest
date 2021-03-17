# ExportActivityRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**column_header_names** | [**\NecLimDul\MarketoRest\Lead\Model\ColumnHeaderNames**](ColumnHeaderNames.md) | File header field names override (corresponds with REST API name) | [optional] 
**fields** | **string[]** | Array of strings containing field values.  Used to reduce the number of fields contained in export file.  Select one or more of: marketoGUID, leadId, activityDate, activityTypeId, campaignId, primaryAttributeValueId, primaryAttributeValue | 
**filter** | [**\NecLimDul\MarketoRest\Lead\Model\ExportActivityFilter**](ExportActivityFilter.md) | Record selection criteria. \&quot;createAt\&quot; is required, \&quot;activityTypeIds\&quot; is optional | 
**format** | **string** | File format to create(\&quot;CSV\&quot;, \&quot;TSV\&quot;, \&quot;SSV\&quot;).  Default is \&quot;CSV\&quot; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

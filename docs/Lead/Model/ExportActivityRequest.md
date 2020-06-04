# ExportActivityRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**column_header_names** | [**\NecLimDul\MarketoRest\Lead\Model\ColumnHeaderNames**](ColumnHeaderNames.md) |  | [optional]
**fields** | **string[]** | Array of strings containing field values.  Used to reduce the number of fields contained in export file.  Select one or more of: marketoGUID, leadId, activityDate, activityTypeId, campaignId, primaryAttributeValueId, primaryAttributeValue |
**filter** | [**\NecLimDul\MarketoRest\Lead\Model\ExportActivityFilter**](ExportActivityFilter.md) |  |
**format** | **string** | File format to create(\&quot;CSV\&quot;, \&quot;TSV\&quot;, \&quot;SSV\&quot;).  Default is \&quot;CSV\&quot; | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

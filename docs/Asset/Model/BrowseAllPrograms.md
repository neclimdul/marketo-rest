# BrowseAllPrograms

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | Channel of the program | 
**created_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was created | [optional] 
**description** | **string** | Description of the asset | [optional] 
**folder** | [**\MarketoRest\Asset\Model\Folder**](Folder.md) | JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | 
**id** | **int** | Id of the asset | [optional] 
**name** | **string** | Name of the asset | [optional] 
**sfdc_id** | **string** | SFDC id of the program if linked to an SFDC campaign | [optional] 
**sfdc_name** | **string** | Name of the linked SFDC campaign if applicable | [optional] 
**status** | **string** | Status of the program.  Only valid for Email and engagement program types. | 
**type** | **string** | Type of the program | 
**updated_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was most recently updated | [optional] 
**url** | **string** | Url of the asset in the Marketo UI | [optional] 
**workspace** | **string** | Name of the workspace | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



# CreateFileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the asset | [optional] 
**file** | **string** | Multipart file.  Content of the file. | 
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) | JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | 
**insert_only** | **bool** | Whether the calls hould fail if there is already an existing file with the same name | [optional] 
**name** | **string** | Name of the File | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

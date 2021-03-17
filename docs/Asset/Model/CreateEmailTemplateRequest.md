# CreateEmailTemplateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the Email Template.  Must be unique under the parent folder. | 
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) | JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | 
**description** | **string** | Description of the email template | [optional] 
**content** | **string** | HTML content for template.  Multipart file. | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

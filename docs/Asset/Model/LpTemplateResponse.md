# LpTemplateResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was created | [optional] 
**description** | **string** | Description of the asset | [optional] 
**enable_munchkin** | **bool** | Whether to enable munchkin on the derived pages.  Defaults to true | 
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) | JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | 
**id** | **int** | Id of the asset | [optional] 
**name** | **string** | Name of the asset | [optional] 
**status** | **string** | Status filter for draft or approved versions | 
**template_type** | **string** | Type of template to create.  Defaults to freeForm | 
**updated_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was most recently updated | [optional] 
**url** | **string** | Url of the asset in the Marketo UI | [optional] 
**workspace** | **string** | Name of the workspace.  Max 255 characters | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

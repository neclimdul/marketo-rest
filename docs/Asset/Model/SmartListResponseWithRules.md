# SmartListResponseWithRules

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id of the smart list | 
**name** | **string** | Name of the smart list | 
**description** | **string** | Description of the smart list | 
**created_at** | [**\DateTime**](\DateTime.md) | Datetime the smart list was created | 
**updated_at** | [**\DateTime**](\DateTime.md) | Datetime the smart list was most recently updated | 
**url** | **string** | Url of the smart list in the Marketo UI | 
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) | JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | 
**workspace** | **string** | Name of the workspace | 
**rules** | [**\NecLimDul\MarketoRest\Asset\Model\SmartListRules**](SmartListRules.md) | Rules contained in the smart list | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

# CreateEmailRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | Description of the asset | [optional] 
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) | JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | 
**from_email** | **string** | From-address of the Email | 
**from_name** | **string** | From-name of the Email | 
**name** | **string** | Name of the email | 
**operational** | **bool** | Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false | [optional] 
**reply_email** | **string** | Reply-To address of the Email | 
**subject** | **string** | Subject Line of the Email | 
**template** | **int** | Id of the parent template | 
**text_only** | **string** | Setting to include text-only version of email when sent | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

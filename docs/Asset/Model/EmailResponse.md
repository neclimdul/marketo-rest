# EmailResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was created | [optional]
**description** | **string** | Description of the asset | [optional]
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) |  |
**from_email** | [**\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField**](EmailHeaderField.md) |  |
**from_name** | [**\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField**](EmailHeaderField.md) |  |
**id** | **int** | Id of the asset | [optional]
**name** | **string** | Name of the asset | [optional]
**operational** | **bool** | Whether the email is operational.  Operational emails bypass unsubscribe status.  Defaults to false |
**publish_to_msi** | **bool** | Whether the email is published to Marketo Sales Insight |
**reply_email** | [**\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField**](EmailHeaderField.md) |  |
**status** | **string** | Status filter for draft or approved versions |
**subject** | [**\NecLimDul\MarketoRest\Asset\Model\EmailHeaderField**](EmailHeaderField.md) |  |
**template** | **int** | Id of the parent template |
**text_only** | **bool** | Setting to include text-only version of email when sent |
**updated_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was most recently updated | [optional]
**url** | **string** | Url of the asset in the Marketo UI | [optional]
**version** | **int** | The type version of the email | [optional]
**web_view** | **bool** | Whether &#39;View as Webpage&#39; function is enabled for the email |
**workspace** | **string** | Name of the workspace | [optional]
**auto_copy_to_text** | **bool** | Setting to automatically copy HTML version to Text version |
**pre_header** | **string** | The email preheader text (max 1024 characters) |
**cc_fields** | [**\NecLimDul\MarketoRest\Asset\Model\EmailCCFields[]**](EmailCCFields.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

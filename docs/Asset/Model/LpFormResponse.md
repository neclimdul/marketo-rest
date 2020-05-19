# LpFormResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**button_label** | **string** | Label text of the button | 
**button_location** | **int** | Location in pixels of the button relative to the left of the form | 
**created_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was created | [optional] 
**description** | **string** | Description of the asset | [optional] 
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) | JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | 
**font_family** | **string** | font-family property for the form | 
**font_size** | **string** | font-size property of the form | 
**id** | **int** | Id of the asset | [optional] 
**known_visitor** | [**\NecLimDul\MarketoRest\Asset\Model\FormKnownVisitorDTO**](FormKnownVisitorDTO.md) | Known visitor behavior for the form | 
**label_position** | **string** | Default positioning of labels. | 
**language** | **string** | Language of the form | 
**locale** | **string** | Locale of the form | 
**name** | **string** | Name of the asset | [optional] 
**progressive_profiling** | **bool** | Whether progressive profiling is enabled for the form | 
**status** | **string** | Status filter for draft or approved versions | 
**thank_you_list** | [**\NecLimDul\MarketoRest\Asset\Model\FormThankYouPageDTO[]**](FormThankYouPageDTO.md) | List of thank you page behaviors for the form | 
**theme** | **string** | CSS theme for the form to use | 
**updated_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was most recently updated | [optional] 
**url** | **string** | Url of the asset in the Marketo UI | [optional] 
**waiting_label** | **string** | Waiting text of the button | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



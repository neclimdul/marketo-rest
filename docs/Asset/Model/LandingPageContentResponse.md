# LandingPageContentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **object** | Content of the section.  Expected values vary based on type.  Image: An image URL.  RichText: HTML Content.  HTML: HTML Content.  Form: A form id.  Rectangle: Empty. Snippet: A snippet id. | [optional] 
**followup_type** | **string** | Follow-up behavior of a form.  Only available for form-type content sections.  Defaults to form defined behavior. | [optional] 
**followup_value** | **string** | Where to follow-up on form submission.  When followupType is lp, accepts the integer id of a landing page.  For url, it accepts a url string. | [optional] 
**formatting_options** | [**\NecLimDul\MarketoRest\Asset\Model\JsonNode**](JsonNode.md) |  | [optional] 
**id** | **object** | Id of the content section, may be a string or an int | 
**index** | **int** | Index of the content section.  Index orients the elements from lowest to highest | [optional] 
**type** | **string** | Type of content section | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

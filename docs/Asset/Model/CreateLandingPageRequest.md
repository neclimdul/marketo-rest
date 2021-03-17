# CreateLandingPageRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**custom_head_html** | **string** | Any custom HTML to embed in the &lt;head&gt; tag of the page | [optional] 
**description** | **string** | Description of the asset | [optional] 
**facebook_og_tags** | **string** | Any OpenGraph meta tags to apply to the page | [optional] 
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) | JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | 
**keywords** | **string** |  | [optional] 
**mobile_enabled** | **bool** | Whether the page has mobile viewing enabled.  Free-form pages only.  Default false | [optional] 
**name** | **string** | Name of the landing page | 
**prefill_form** | **bool** | Boolean to toggle whether forms embedded in the page will prefill.  Default false | [optional] 
**robots** | **string** | Robots directives to apply to the pages meta tags | [optional] 
**template** | **int** | Id of the template used | 
**title** | **string** | Title element of the landing page | [optional] 
**url_page_name** | **string** | URL path of the page.  Derived from the name field if unset | [optional] 
**workspace** | **string** | Name of the workspace | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

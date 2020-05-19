# LandingPageRedirectRule

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Internal id for landing page redirect rule | 
**redirect_from_url** | **string** | Redirect &#39;from&#39; URL of the Landing Page.  Combination of the hostname and redirectFrom landing page or path | 
**redirect_to_url** | **string** | Redirect &#39;to&#39; URL of the Landing Page.  Could be a Marketo landing page or non-Marketo URL. | 
**hostname** | **string** | The hostname for the landing pages.  Branding domain or alias.  Max 255 characters. | 
**redirect_from** | [**\NecLimDul\MarketoRest\Asset\Model\RedirectFrom**](RedirectFrom.md) | JSON representation of redirect from landing page, with members &#39;type&#39; which may be &#39;landingPageId&#39; or &#39;path&#39;, and &#39;value&#39; | 
**redirect_to** | [**\NecLimDul\MarketoRest\Asset\Model\RedirectTo**](RedirectTo.md) | JSON representation of redirect to landing page, with members &#39;type&#39; which may be &#39;landingPageId&#39; or &#39;url&#39;, and &#39;value&#39; | 
**created_at** | [**\DateTime**](\DateTime.md) | Datetime the landing page redirect rule was created | 
**updated_at** | [**\DateTime**](\DateTime.md) | Datetime the landing page redirect rule was most recently updated | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



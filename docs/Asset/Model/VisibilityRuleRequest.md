# VisibilityRuleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**alt_label** | **string** |  | [optional] 
**operator** | **string** | Operation to apply to target field.  Evaluated against the list of values when applicable. | 
**pick_list_values** | [**\NecLimDul\MarketoRest\Asset\Model\PickListDTO[]**](PickListDTO.md) | Alternative label to display when rules are applied. | [optional] 
**subject_field** | **string** | Target field id to apply the operation defined by operator to | 
**values** | **string[]** | Comma-separated list of values to match against.  Valid for operators &#39;is&#39;, &#39;isNot&#39;, &#39;startsWith&#39;, &#39;notStartsWith&#39;, &#39;endsWith&#39;, &#39;notEndsWith&#39;, &#39;contains&#39;, and &#39;notContains&#39; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

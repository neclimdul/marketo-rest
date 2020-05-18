# ThankYouPageRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**default** | **bool** | When true, this is the default rule, and will be applied when a user does not qualify for any of the other rules | [optional] 
**followup_type** | **string** | Type of followup.  When set to url, will follow to the url set in followupValue.  When set to lp, will follow to the Landing page with the id given in followupValue | 
**followup_value** | **string** | Where to follow to on submission.  Given as a URL or and Integer depending on followupType | 
**operator** | **string** | Operator to evaluate aginst the subject field | 
**subject_field** | **string** | Field to apply to operator to | 
**values** | **string[]** | Comma-separated list of values to compare to with the operator | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



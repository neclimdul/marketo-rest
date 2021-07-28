# UpdateFormFieldRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blank_fields** | **int** | Number of blank fields to show when progressive profiling is enabled | [optional] 
**default_value** | **string** | Optional default value for the field | [optional] 
**field_type** | **string** | Type of field | [optional] 
**field_width** | **int** | Width of the input or select element | [optional] 
**form_prefill** | **bool** | Whether the field should prefill.  Default true | [optional] 
**is_sensitive** | **bool** | Whether the field is marked as sensitive.  Default false | [optional] 
**hint_text** | **string** | Hint text for the field | [optional] 
**initially_checked** | **bool** | Whether the field should be checked upon loading.  Default false | [optional] 
**instructions** | **string** | Instructions for the field | [optional] 
**label** | **string** | Label of the field | [optional] 
**label_to_right** | **bool** | Whether the field label should be displayed to the right of the input/select element. Default false | [optional] 
**label_width** | **int** | Width of the field label element | [optional] 
**mask_input** | **string** | Optional input mask for the field | [optional] 
**max_length** | **int** | Maximum length for text type fields | [optional] 
**max_value** | **float** | Maximum value accepted by the field | [optional] 
**min_value** | **float** | Minimum value accepted by the field | [optional] 
**multi_select** | **bool** | Whether the field should allow multiple selections. Default false | [optional] 
**required** | **bool** | Whether the field is required to submit the form.  Default false | [optional] 
**validation_message** | **string** | Validation message to display on failed validation | [optional] 
**values** | **string** | Array of JSON objects that contain field attributes. Only for select-field types.  Example: values&#x3D;[{&#39;label&#39;:&#39;Select...&#39;,&#39;value&#39;:&#39;&#39;,&#39;isDefault&#39;:true,&#39;selected&#39;:true}, {&#39;label&#39;:&#39;MR&#39;,&#39;value&#39;:&#39;Mr&#39;}, {&#39;label&#39;:&#39;MS&#39;,&#39;value&#39;:&#39;Ms&#39;}, {&#39;label&#39;:&#39;MRS&#39;,&#39;value&#39;:&#39;Mrs&#39;}, {&#39;label&#39;:&#39;DR&#39;,&#39;value&#39;:&#39;Dr&#39;}, {&#39;label&#39;:&#39;PROF&#39;,&#39;value&#39;:&#39;Prof&#39;}] | [optional] 
**visible_lines** | **int** | Number of lines to display for the field element | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)

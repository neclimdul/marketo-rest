# CustomActivityType

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_name** | **string** | API Name of the type.  The API name must be unique and alphanumeric, containing at least one letter.  It is highly recommended to prepend a unique namespace of up to sixteen characters to the API name.  Required on creation | [optional]
**attributes** | [**\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute[]**](CustomActivityTypeAttribute.md) | List of attributes for the activity type.  May only be added or update through Create or Update Custom Activity Type Attributes | [optional]
**created_at** | **string** | Datetime when the activity type was created | [optional]
**description** | **string** | Description of the activity type | [optional]
**filter_name** | **string** | Human-readable name for the associated filter of the activity type.  Required on creation | [optional]
**id** | **int** |  | [optional]
**name** | **string** | Human-readable display name of the type.  Required on creation | [optional]
**primary_attribute** | [**\NecLimDul\MarketoRest\Lead\Model\CustomActivityTypeAttribute**](CustomActivityTypeAttribute.md) |  | [optional]
**status** | **string** | State of the activity type | [optional]
**trigger_name** | **string** | Human-readable name for the associated trigger of the activity type.  Required on creation | [optional]
**updated_at** | **string** | Datetime when the activity type was most recently updated | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

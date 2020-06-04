# ProgramResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channel** | **string** | Channel of the program | 
**costs** | [**\NecLimDul\MarketoRest\Asset\Model\Costs[]**](Costs.md) | Lists of associated period costs | 
**created_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was created | [optional] 
**description** | **string** | Description of the asset | [optional] 
**end_date** | [**\DateTime**](\DateTime.md) | End date of the program.  Applicable to event, email, and webinar type programs | [optional] 
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) |  | 
**id** | **int** | Id of the asset | [optional] 
**name** | **string** | Name of the asset | [optional] 
**sfdc_id** | **string** | SFDC id of the program if linked to an SFDC campaign | [optional] 
**sfdc_name** | **string** | Name of the linked SFDC campaign if applicable | [optional] 
**start_date** | [**\DateTime**](\DateTime.md) | Start date of program.  Applicable to event, email and webinar type programs | [optional] 
**status** | **string** | Status of the program.  Only valid for Email and engagement program types. | 
**tags** | [**\NecLimDul\MarketoRest\Asset\Model\Tags[]**](Tags.md) | List of associated program tags | 
**type** | **string** | Type of the program | 
**updated_at** | [**\DateTime**](\DateTime.md) | Datetime the asset was most recently updated | [optional] 
**url** | **string** | Url of the asset in the Marketo UI | [optional] 
**workspace** | **string** | Name of the workspace | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



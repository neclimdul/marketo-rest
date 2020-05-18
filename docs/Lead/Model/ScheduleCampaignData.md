# ScheduleCampaignData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**clone_to_program_name** | **string** | Name of the resulting program.  When set, this attribute will cause the campaign, parent program, and all of its assets, to be created with the resulting new name.  The parent program will be cloned and the newly created campaign will be scheduled.  The resulting program is created underneath the parent.  Programs with snippets, push notifications, in-app messages, static lists, reports, and social assets may not be cloned in this way | [optional] 
**run_at** | [**\DateTime**](\DateTime.md) | Datetime to run the campaign at.  If unset, the campaign will be run five minutes after the call is made | [optional] 
**tokens** | [**\MarketoRest\Lead\Model\Token[]**](Token.md) | List of my tokens to replace during the run of the target campaign.  The tokens must be available in a parent program or folder to be replaced during the run | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



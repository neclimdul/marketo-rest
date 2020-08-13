# SmartCampaignResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Id of the smart campaign (system managed) | 
**name** | **string** | Name of the smart campaign | 
**description** | **string** | Description of the smart campaign | 
**type** | **string** | Type of the smart campaign. Batch: has at least one filter and no triggers. Trigger: has at least one trigger. Default: has no smart list rules | 
**is_system** | **bool** | Whether smart campaign is system managed.  Defaults to false | 
**is_active** | **bool** | Whether smart campaign is active.  Defaults to false | 
**is_requestable** | **bool** | Whether smart campaign is requestable (is active and contains &#39;Campaign is Requested&#39; trigger with Source of &#39;Web Service API&#39;).  Defaults to false | 
**recurrence** | [**\NecLimDul\MarketoRest\Asset\Model\Recurrence**](Recurrence.md) | Recurrence schedule of batch smart campaign | 
**qualification_rule_type** | **string** | Type of qualification rule.  Defaults to &#39;once&#39; | 
**qualification_rule_interval** | **int** | Interval of qualification rule.  Only set when qualificationRuleType is &#39;interval&#39; | 
**qualification_rule_unit** | **string** | Unit of measure of qualification rule.  Only set when qualificationRuleType is &#39;interval&#39; | 
**max_members** | **int** | Smart campaign membership limit | 
**is_communication_limit_enabled** | **bool** | Whether smart campaign communication limit is enabled (i.e. block non-operational emails).  Defaults to false | 
**smart_list_id** | **int** | Id of the smart campaign&#39;s child smart list | 
**flow_id** | **int** | Id of the smart campaign&#39;s child flow | 
**parent_program_id** | **int** | Parent program Id.  Present if smart campaign is under program or nested folder | [optional] 
**folder** | [**\NecLimDul\MarketoRest\Asset\Model\Folder**](Folder.md) | JSON representation of parent folder, with members &#39;id&#39;, and &#39;type&#39; which may be &#39;Folder&#39; or &#39;Program&#39; | 
**created_at** | [**\DateTime**](\DateTime.md) | Datetime when the smart campaign was created | 
**updated_at** | [**\DateTime**](\DateTime.md) | Datetime when the smart campaign was most recently updated | 
**workspace** | **string** | Name of the smart campaign workspace | 
**computed_url** | **string** | URL to asset in Marketo Engage | [optional] 
**status** | **string** | Status of smart campaign | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



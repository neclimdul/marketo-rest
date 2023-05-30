# SyncCompanyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action** | **string** | Type of sync operation to perform | [optional]
**dedupe_by** | **string** | Field to deduplicate on.  If the value in the field for a given record is not unique, an error will be returned for the individual record. | [optional]
**input** | [**\NecLimDul\MarketoRest\Lead\Model\Company[]**](Company.md) | List of input records. Each &#39;Company&#39; object contains a &#39;searchableField&#39; for lookup purposes, and one or more &#39;fields&#39; to create or update.  Both can be retrieved using the Describe Companies endpoint |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

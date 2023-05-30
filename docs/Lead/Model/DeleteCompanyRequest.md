# DeleteCompanyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delete_by** | **string** | Field to delete company records by.  Key may be \&quot;dedupeFields\&quot; or \&quot;idField\&quot; | [optional]
**input** | [**\NecLimDul\MarketoRest\Lead\Model\Company[]**](Company.md) | List of company objects. Companies in the list should only contain a member matching the dedupeBy value. Each &#39;Company&#39; object contains a &#39;searchableField&#39; for lookup purposes which can be retrieved using the Describe Companies endpoint | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

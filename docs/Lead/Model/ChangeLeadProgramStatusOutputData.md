# ChangeLeadProgramStatusOutputData

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | Unique integer id of a lead record |
**reasons** | [**\NecLimDul\MarketoRest\Lead\Model\Reason[]**](Reason.md) | List of reasons why an operation did not succeed.  Reasons are only present in API responses and should not be submitted | [optional]
**status** | **string** | Program status of the record.  Permissible values can be retrieve from the Get Channel by Name API for the designated program&#39;s channel |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

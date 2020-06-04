# ImportCustomObjectResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**batch_id** | **int** | Unique integer id of the import batch |
**import_time** | **string** | Time spent on the batch | [optional]
**message** | **string** | Status message of the batch | [optional]
**num_of_objects_processed** | **int** | Number of rows processed so far | [optional]
**num_of_rows_failed** | **int** | Number of rows failed so far | [optional]
**num_of_rows_with_warning** | **int** | Number of rows with a warning so far | [optional]
**object_api_name** | **string** | Object API Name |
**operation** | **string** | Bulk operation type. Can be import or export |
**status** | **string** | Status of the batch |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

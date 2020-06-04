# ExportResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_at** | [**\DateTime**](\DateTime.md) | Date when the export request was created | [optional]
**error_msg** | **string** | Error message in case of \&quot;Failed\&quot; status | [optional]
**export_id** | **string** | Unique id of the export job |
**file_size** | **int** | Size of exported file in bytes. This will have a value only when status is \&quot;Completed\&quot;, otherwise null | [optional]
**file_checksum** | **string** | SHA-256 hash of exported file. This will have a value only when status is \&quot;Completed\&quot;, otherwise null | [optional]
**finished_at** | [**\DateTime**](\DateTime.md) | Finish time of export job. This will have value only when status is \&quot;Completed\&quot; or \&quot;Failed\&quot;, otherwise null | [optional]
**format** | **string** | Format of file as given in the request (\&quot;CSV\&quot;, \&quot;TSV\&quot;, \&quot;SSV\&quot;) | [optional]
**number_of_records** | **int** | Number of records in the export file.  This will have value only when status is \&quot;Completed\&quot;, otherwise null | [optional]
**queued_at** | [**\DateTime**](\DateTime.md) | Queue time of export job. This will have value when \&quot;Queued\&quot; status is reached, before that null | [optional]
**started_at** | [**\DateTime**](\DateTime.md) | Start time of export job. This will have value when \&quot;Processing\&quot; status is reached, before that null | [optional]
**status** | **string** | Status of the export job (\&quot;Created\&quot;,\&quot;Queued\&quot;,\&quot;Processing\&quot;,\&quot;Canceled\&quot;,\&quot;Completed\&quot;,\&quot;Failed\&quot;) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)

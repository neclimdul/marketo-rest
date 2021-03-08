# Recurrence

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**start_at** | [**\DateTime**](\DateTime.md) | Datetime of the first scheduled campaign to run. Required if setting recurrence. Not required to create a smart campaign that has no recurrence | 
**end_at** | [**\DateTime**](\DateTime.md) | Datetime after which no further runs will be automatically scheduled | 
**interval_type** | **string** | Recurrence interval. Not required to create a smart campaign that has no recurrence | 
**interval** | **int** | Number of interval units between recurrences | 
**weekday_only** | **bool** | Only run smart campaign on weekdays. May only be set if intervalType is &#39;Daily&#39;.  Defaults to false | 
**weekday_mask** | **string[]** | String array of empty or one or more of &#39;Monday&#39;, &#39;Tuesday&#39;, &#39;Wednesday&#39;, &#39;Thursday&#39;, &#39;Friday&#39;, &#39;Saturday&#39;, &#39;Sunday&#39;. May only be set if intervalType is &#39;Weekly&#39; | 
**day_of_month** | **int** | Day of the month to recur. Permissible range 1-31. May only be set if intervalType is &#39;Monthly&#39; and dayOfWeek and weekOfMonth are unset. | 
**day_of_week** | **string** | Day of the week to recur. May only be set if dayOfMonth is not set, and weekOfMonth is set | 
**week_of_month** | **int** | Week of the month to recur. Permissible range 1-4. May only be set if dayOfMonth is not set, and dayOfWeek is set | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)



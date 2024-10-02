# TokenLookupRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_msg_id** | **string** | Unique Id of the request | 
**request_msg_date_time** | [**\DateTime**](\DateTime.md) | DateTime of the request. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | 
**transaction_id** | **string** | Id of Cembrapay Transaction. Api will return Token, linked to the Transaction. | [optional] 
**token** | **string** | Alias (base64 string) or Guid of Token that we look up. Can be provided instead of Id of Transaction | [optional] 
**registration_process_id** | **string** | Unique identifier of Registration session. Required for RST requests. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


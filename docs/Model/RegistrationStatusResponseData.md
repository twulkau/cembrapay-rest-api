# RegistrationStatusResponseData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**registration_process_id** | **string** | Unique identifier of Registration session. Required for RST requests. | [optional] 
**redirect_url_registration** | **string** | URL that must be used for redirecting customer to CembraPay Registration pages. | [optional] 
**registration_status** | [**\CembraPay\RestApi\Model\RegistrationStatus**](RegistrationStatus.md) |  | [optional] 
**registration_started_date_time** | [**\DateTime**](\DateTime.md) | DateTime of registration session creation. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | [optional] 
**token** | **string** | Token can be provided instead or together with Customer details in SCR, AUT or CHK requests. | [optional] 
**transaction_status** | [**\CembraPay\RestApi\Model\TransactionStatusResponseData**](TransactionStatusResponseData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


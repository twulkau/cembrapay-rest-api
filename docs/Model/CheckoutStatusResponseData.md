# CheckoutStatusResponseData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**checkout_process_id** | **string** | Unique identifier of Checkout session. Required for CHK and CST requests. | [optional] 
**redirect_url_checkout** | **string** | URL that must be used for redirecting customer to CembraPay Checkout pages. | [optional] 
**checkout_status** | [**\CembraPay\RestApi\Model\CheckoutStatus**](CheckoutStatus.md) |  | [optional] 
**checkout_started_date_time** | [**\DateTime**](\DateTime.md) | DateTime of checkout session creation. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | [optional] 
**token** | **string** | Token can be provided instead or together with Customer details in SCR, AUT or CHK requests. | [optional] 
**transaction_status** | [**\CembraPay\RestApi\Model\TransactionStatusResponseData**](TransactionStatusResponseData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


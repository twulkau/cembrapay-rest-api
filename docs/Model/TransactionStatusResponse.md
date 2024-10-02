# TransactionStatusResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_msg_id** | **string** | Unique Id of the request | [optional] 
**request_msg_date_time** | [**\DateTime**](\DateTime.md) | DateTime of the request. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | [optional] 
**reply_msg_id** | **string** | Unique Id of the response | [optional] 
**reply_msg_date_time** | [**\DateTime**](\DateTime.md) | DateTime of the response. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | [optional] 
**errors** | [**\CembraPay\RestApi\Model\Error[]**](Error.md) | List of errors, occured during request processing. | [optional] 
**idempotency_key** | **string** | Idempotency key, to unique identify operation and support consistent retries | [optional] 
**request_merchant_id** | **string** | Unique Id of the Merchant | [optional] 
**transaction_id** | **string** | Id of Transaction. Required for SET, CAN, CNT, TST | [optional] 
**merchant_cust_ref** | **string** | Customer identifier in Merchants system | [optional] 
**merchant_order_ref** | **string** | Order reference in Merchants system. Required for AUT, CHK, SET, CAN and CNT requests. Field value is not case-sensitive | [optional] 
**token** | **string** | Token can be provided instead or together with Customer details in SCR, AUT or CHK requests. | [optional] 
**token_label** | **string** | This is used to describe Token for customers. Can be stored by merchant. Format for Transactional Products \&quot;CembraPay\&quot;, Format for Account Products \&quot;CembraPay**9478\&quot; &lt;- Last 4 digits of CembraPay account. | [optional] 
**registration_process_id** | **string** | Unique identifier of Registration session. Required for RST requests. | [optional] 
**checkout_process_id** | **string** | Unique identifier of Checkout session. Required for CHK and CST requests. | [optional] 
**processing_status** | [**\CembraPay\RestApi\Model\TransactionStatusProcessingStatus**](TransactionStatusProcessingStatus.md) |  | [optional] 
**authorization** | [**\CembraPay\RestApi\Model\AuthorizationResponseData**](AuthorizationResponseData.md) |  | [optional] 
**transaction_status** | [**\CembraPay\RestApi\Model\TransactionStatusResponseData**](TransactionStatusResponseData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


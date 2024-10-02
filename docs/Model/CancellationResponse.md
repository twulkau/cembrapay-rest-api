# CancellationResponse

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
**processing_status** | [**\CembraPay\RestApi\Model\CancellationProcessingStatus**](CancellationProcessingStatus.md) |  | [optional] 
**authorization** | [**\CembraPay\RestApi\Model\AuthorizationResponseData**](AuthorizationResponseData.md) |  | [optional] 
**transaction_status** | [**\CembraPay\RestApi\Model\TransactionStatusResponseData**](TransactionStatusResponseData.md) |  | [optional] 
**cancellation** | [**\CembraPay\RestApi\Model\CancellationResponseData**](CancellationResponseData.md) |  | [optional] 
**credit_note** | [**\CembraPay\RestApi\Model\CreditNoteResponseData**](CreditNoteResponseData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


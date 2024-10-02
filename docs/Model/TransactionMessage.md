# TransactionMessage

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_msg_type** | **string** | - AUT: authorization request. Can be with immediate settlement. - SET: settlement request. - CAN: cancellation request. Cancels unsettled amount partly or fully. - CNT: credit note request. Cancels settled amount partly or fully. - TKL: token lookup request. - TST: transaction status request. - CST: checkout status request. - CFM: authorization confirmation request. | [optional] 
**request_msg_id** | **string** | Unique Id of the request | [optional] 
**request_msg_date_time** | [**\DateTime**](\DateTime.md) | DateTime of the request. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | [optional] 
**request_received_date_time** | [**\DateTime**](\DateTime.md) | DateTime when request was received for processing. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | [optional] 
**response_msg_id** | **string** | Id of response | [optional] 
**response_msg_date_time** | [**\DateTime**](\DateTime.md) | DateTime of response | [optional] 
**processing_status** | [**\CembraPay\RestApi\Model\ProcessingStatus**](ProcessingStatus.md) |  | [optional] 
**error** | [**\CembraPay\RestApi\Model\Error[]**](Error.md) | List of errors, occured during request processing. | [optional] 
**idempotency_key** | **string** | Idempotency key, to unique identify operation and support consistent retries | [optional] 
**has_instant_settlement** | **bool** | For AUT request, in case Settlement created during AUT. For AUT requests only. | [optional] 
**is_full_cancellation** | **bool** | For CAN request, in case CreditNote created during Cancellation. For CAN requests only. | [optional] 
**merchant_invoice_ref** | **string** | Invoice reference in Merchants system, provided for the settlement in request. For SET requests only. | [optional] 
**settlement_id** | **string** | Id of created settlement. This Id must be provided in Credit Note request. For SET requests only. | [optional] 
**is_final** | **bool** | For SET request, in case Cancellation created during Final settlement. For SET requests only. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


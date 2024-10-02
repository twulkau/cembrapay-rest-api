# SettlementResponse

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
**psp_transaction_id** | **string** | Id of transaction in PSP system. Must be provided by PSP, when communication with api is made through PSP. | [optional] 
**processing_status** | [**\CembraPay\RestApi\Model\SettlementProcessingStatus**](SettlementProcessingStatus.md) |  | [optional] 
**settlement** | [**\CembraPay\RestApi\Model\SettlementResponseData**](SettlementResponseData.md) |  | [optional] 
**authorization** | [**\CembraPay\RestApi\Model\AuthorizationResponseData**](AuthorizationResponseData.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

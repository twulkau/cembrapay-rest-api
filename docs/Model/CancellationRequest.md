# CancellationRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_msg_id** | **string** | Unique Id of the request | 
**request_msg_date_time** | [**\DateTime**](\DateTime.md) | DateTime of the request. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | 
**idempotency_key** | **string** | Idempotency key, to unique identify operation and support consistent retries | [optional] 
**amount** | **int** | Amount must be in smallest money unit for the Currency (cents for CHF) | 
**currency** | **string** | Currency, ISO4217 3 letters | 
**transaction_id** | **string** | Id of Transaction. It is mandatory except the cases when Authorization was sent via the old API | [optional] 
**merchant_order_ref** | **string** | Order reference in Merchants system. Field value is not case-sensitive. | 
**msg_extensions** | [**\CembraPay\RestApi\Model\MsgExtension[]**](MsgExtension.md) | List of additional data entries. Only known Keys will be processed. Prior agreement with CembraPay required about data structure and usage | [optional] 
**is_full_cancelation** | **bool** | When &#x27;true&#x27; - all settlements will be canceled and unsettled amount released. Transaction goes to final state, no more requests expected | [optional] 
**psp_transaction_id** | **string** | Id of transaction in PSP system. Must be provided by PSP, when communication with api is made through PSP. Mandatory for CPMI payment method. | [optional] 
**settlement_details** | [**\CembraPay\RestApi\Model\CancellationSettlementDetails**](CancellationSettlementDetails.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


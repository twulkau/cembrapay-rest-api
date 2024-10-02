# AuthorizationRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**request_msg_id** | **string** | Unique Id of the request | 
**request_msg_date_time** | [**\DateTime**](\DateTime.md) | DateTime of the request. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | 
**idempotency_key** | **string** | Idempotency key, to unique identify operation and support consistent retries | [optional] 
**amount** | **int** | Amount must be in smallest money unit for the Currency (cents for CHF) | 
**currency** | **string** | Currency, ISO4217 3 letters | 
**cust_auth** | [**\CembraPay\RestApi\Model\CustAuth**](CustAuth.md) |  | [optional] 
**billing_addr** | [**\CembraPay\RestApi\Model\BillingAddr**](BillingAddr.md) |  | [optional] 
**cust_contacts** | [**\CembraPay\RestApi\Model\CustContacts**](CustContacts.md) |  | [optional] 
**delivery_details** | [**\CembraPay\RestApi\Model\DeliveryDetails**](DeliveryDetails.md) |  | [optional] 
**transaction_id** | **string** | Id of Transaction | [optional] 
**merchant_order_ref** | **string** | Order reference in Merchants system. Field value is not case-sensitive. | 
**psp_transaction_id** | **string** | Id of transaction in PSP system. Must be provided by PSP, when communication with api is made through PSP. Mandatory for CPMI payment method. | [optional] 
**settlement_details** | [**\CembraPay\RestApi\Model\AuthorizationSettlementDetails**](AuthorizationSettlementDetails.md) |  | [optional] 
**order** | [**\CembraPay\RestApi\Model\Order**](Order.md) |  | [optional] 
**cust_details** | [**\CembraPay\RestApi\Model\CustDetails**](CustDetails.md) |  | [optional] 
**session_info** | [**\CembraPay\RestApi\Model\SessionInfo**](SessionInfo.md) |  | [optional] 
**cembra_pay_details** | [**\CembraPay\RestApi\Model\CembraPayDetails**](CembraPayDetails.md) |  | [optional] 
**merchant_details** | [**\CembraPay\RestApi\Model\MerchantDetails**](MerchantDetails.md) |  | [optional] 
**customer_consents** | [**\CembraPay\RestApi\Model\CustomerConsent[]**](CustomerConsent.md) | List of Customer consents. Mandatory except authorizations submitted by Token to CPMI payment method | [optional] 
**msg_extensions** | [**\CembraPay\RestApi\Model\MsgExtension[]**](MsgExtension.md) | List of additional data entries. Only known Keys will be processed. Prior agreement with CembraPay required about data structure and usage | [optional] 
**token** | **string** | Id of Token can be provided instead or together with Customer details. Token is supported only for CPMI or WALLET payment methods. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


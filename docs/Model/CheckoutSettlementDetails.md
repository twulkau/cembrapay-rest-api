# CheckoutSettlementDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**consumer_invoice_information** | **string** | This information can be used to display additional information about purchase on the consumers invoice. Usage is restricted to account based products only. Value must be encoded base64 | [optional] 
**instant_settlement** | **bool** | When set to &#x27;true&#x27;, Settlement for full Authorization amount will be immediately registered for the Transaction. Instant Settlement is Final - no settlements expected for the Transaction | [optional] 
**merchant_invoice_ref** | **string** | Invoice reference in Merchants system. In case Merchant system doesn&#x27;t have invoices, Order reference can be provided in this field. Field value is not case-sensitive. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


# RequiredCembraPayDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requested_credit_limit** | **double** | Optional amount of requested credit limit, which should be taken into account during Consumer onboarding (for new Consumers) | [optional] 
**invoice_delivery_type** | [**\CembraPay\RestApi\Model\InvoiceDeliveryType**](InvoiceDeliveryType.md) |  | [optional] 
**first_installment_amount** | **int** | Optional field, is only accepted if configuration setup to allow usage of this field. Can be used in special cases when defined first payment amount was agreed with customer. Amount in smallest money unit for the Currency (cents for CHF) | [optional] 
**cembra_pay_payment_method** | **string** | Type of CembraPay product. Always required for requests of type REG and SCR.  Also is required for requests of type AUT, when token is not provided. List of product types (can be extended by new products): - SINGLE-INVOICE - SINGLE-INVOICE-RISKONMERCHANT - CEMBRAPAY-INVOICE - CEMBRAPAY-INVOICE-RISKONMERCHANT - INSTALLMENT_3 - INSTALLMENT_4 - INSTALLMENT_6 - INSTALLMENT_12 - INSTALLMENT_24 - INSTALLMENT_36 - INSTALLMENT_48 - INSTALLMENT_3-RISKONMERCHANT - INSTALLMENT_4-RISKONMERCHANT - INSTALLMENT_6-RISKONMERCHANT - INSTALLMENT_12-RISKONMERCHANT - INSTALLMENT_24-RISKONMERCHANT - INSTALLMENT_36-RISKONMERCHANT - INSTALLMENT_48-RISKONMERCHANT - WALLET - CPMI | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


# Order

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**basket_items_google_taxonomies** | **string[]** | List of Google Taxonomies for Basket items. | [optional] 
**basket_items_prices** | **int[]** | List of Prices for Basket items. Sometimes can be only lowest and highest price. Prices in smallest money unit for the Currency (cents for CHF). | [optional] 
**downpayment_to_merchant_amount** | **int** | In case Customer makes downpayment to merchant then it should be provided. This amount is part of the main Amount, so customer will be financed/blocked difference. Amount in smallest money unit for the Currency (cents for CHF). | [optional] 
**subscription_type** | [**\CembraPay\RestApi\Model\SubscriptionType**](SubscriptionType.md) |  | [optional] 
**payout_info** | **string** | Additional Identifier that can be submitted during AUT or CHK and will be shown in CembraPay RAF (Reconciliation Advisory File) to merchant | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


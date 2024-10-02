# AuthorizationResponseData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**authorization_valid_till** | [**\DateTime**](\DateTime.md) | DateTime when Authorization will be expired. Settlements/Cancellations are accepted only for Valid (not expired) authorizations. Authorization is valid for a preconfigured number of days from Authorization created. AuthorizationValidTill will be only returned if AuthorizationRemainingAmount &gt; 0. ISO8601 Date with time in format &#x27;yyyy-MM-ddTHH:mm:ssZ&#x27;. | [optional] 
**authorized_remaining_amount** | **double** | Amount must be in smallest money unit for the Currency (cents for CHF). Required for SCR, AUT, REG, CHK, SET, CAN, CNT, CFM. | [optional] 
**authorization_currency** | **string** | Currency, ISO4217 3 letters. | [optional] 
**authorized_payment_method** | **string** | Payment method, wihch is authorized by CembraPay. In some cases risk owner can be changed to risk on Merchant and in this case transaction will have much shorter expiration untill purchase is confirmed via Confirmation request or via subsequent settlement. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


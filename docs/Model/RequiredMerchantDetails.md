# RequiredMerchantDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**terminal_id** | **string** | In cases when merchant operate in multiple sales locations, the terminal id should uniquely identify each point of sales (each store). | [optional] 
**return_url_success** | **string** | This is return URL (encoded base64), the customer upon successful completion of transaction on CembraPay, will be redirected back to merchant. Mandatory for REG and CHK requests. | 
**return_url_error** | **string** | This is return URL (encoded base64), the customer upon ERROR of transaction on CembraPay, will be redirected back to merchant. Mandatory for REG and CHK requests. | 
**return_url_cancel** | **string** | This is return URL (encoded base64), where customer will be redirected in case he cancels transaction via pressing Cancel button on UI. Mandatory for REG and CHK requests. | 
**transaction_channel** | [**\CembraPay\RestApi\Model\TransactionChannel**](TransactionChannel.md) |  | [optional] 
**integration_module** | **string** | This is optional field to track Integration versioning on the client/merchant side. Used for debugging and traceability. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


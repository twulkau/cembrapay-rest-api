# DeliveryDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**delivery_details_different** | **bool** | Must be set to &#x27;true&#x27;, when Delivery address is different from Billing address | [optional] 
**delivery_first_name** | **string** | First Name of recipient person. | [optional] 
**delivery_last_name** | **string** | Last Name of recipient person. | [optional] 
**delivery_company_name** | **string** | Company Name of the recipient. | [optional] 
**delivery_salutation** | [**\CembraPay\RestApi\Model\SalutationType**](SalutationType.md) |  | [optional] 
**delivery_department** | **string** | Department name of the recipient. | [optional] 
**delivery_addr_first_line** | **string** | First line of delivery address. | [optional] 
**delivery_addr_second_line** | **string** | Second line of delivery address. Can contain some additional data for example &#x27;3rd floor&#x27;. | [optional] 
**delivery_addr_house_nr** | **string** | House number of delivery address, icluding extensions, for example &#x27;22a&#x27;. | [optional] 
**delivery_addr_postal_code** | **string** | Postal code of delivery address. | [optional] 
**delivery_addr_town** | **string** | Town of delivery address. | [optional] 
**delivery_addr_country** | **string** | Country of delivery address, ISO3166-1 alpha 2 code (two letters). | [optional] 
**delivery_method** | [**\CembraPay\RestApi\Model\DeliveryMethod**](DeliveryMethod.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


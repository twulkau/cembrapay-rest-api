# CustDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchant_cust_ref** | **string** | Customer identifier in Merchants system. Mandatory for requests of type SCR, AUT, REG or CHK. Field value is not case-sensitive. | 
**logged_in** | **bool** | This field must be set to &#x27;true&#x27; in case, if Customer is logged into Merchants system (Customer is known to Merchant). | [optional] 
**cust_type** | [**\CembraPay\RestApi\Model\CustomerType**](CustomerType.md) |  | [optional] 
**first_name** | **string** | First name of Customer &#x27;P&#x27;(person), or Ordering person for Customer &#x27;C&#x27;(company). Mandatory for persons. | [optional] 
**last_name** | **string** | Last name of Customer &#x27;P&#x27;(person), or Ordering person for Customer &#x27;C&#x27;(company). Mandatory for persons. | [optional] 
**language** | **string** | Customers preferable language. ISO639-1 two letters language code. | [optional] 
**date_of_birth** | [**\DateTime**](\DateTime.md) | Customer&#x27;s date of birth. ISO8601 Date Only in format &#x27;yyyy-MM-dd&#x27;. | [optional] 
**is_above18** | **bool** | &#x27;true&#x27; if Customer(person) is known as person above 18 years old - e.g. Customer had approved this in Merchants system. | [optional] 
**salutation** | [**\CembraPay\RestApi\Model\SalutationType**](SalutationType.md) |  | [optional] 
**company_reg_num** | **string** | Registration number of Customer(company). Not expected for persons. | [optional] 
**company_name** | **string** | Legal Name of Customer(company). Mandatory for Companies. | [optional] 
**company_department** | **string** | Department of Customer(company). | [optional] 
**doc_type** | **string** | Type of verified document. | [optional] 
**doc_issuer** | **string** | Issuer of verified document. | [optional] 
**doc_nr** | **string** | Number of verified document. | [optional] 
**doc_valid_till** | [**\DateTime**](\DateTime.md) | Validity date of verified document. ISO8601 Date Only in format &#x27;yyyy-MM-dd&#x27;.. | [optional] 
**permit_type** | **string** | Type of Swiss Residence permission. Not expected for Customer(company) | [optional] 
**in_switzerland_since** | [**\DateTime**](\DateTime.md) | Date from which Customer(person) lives in Swizerland. ISO8601 Date Only in format &#x27;yyyy-MM-dd&#x27;.. Not expected for Customer(company). | [optional] 
**nationality** | **string** | Nationality of Customer(person), ISO3166-1 alpha 2 code (two letters). Not expected for Customer(company) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


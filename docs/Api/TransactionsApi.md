# CembraPay\RestApi\TransactionsApi

All URIs are relative to *https://ext-test.api.cembrapay.ch*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vversionTransactionsAuthorizePost**](TransactionsApi.md#vversiontransactionsauthorizepost) | **POST** /v{version}/Transactions/authorize | Authorization request
[**vversionTransactionsCancelPost**](TransactionsApi.md#vversiontransactionscancelpost) | **POST** /v{version}/Transactions/cancel | Cancelation request
[**vversionTransactionsConfirmPost**](TransactionsApi.md#vversiontransactionsconfirmpost) | **POST** /v{version}/Transactions/confirm | Confirmation request
[**vversionTransactionsCreditPost**](TransactionsApi.md#vversiontransactionscreditpost) | **POST** /v{version}/Transactions/credit | Credit request
[**vversionTransactionsSettlePost**](TransactionsApi.md#vversiontransactionssettlepost) | **POST** /v{version}/Transactions/settle | Settlement request
[**vversionTransactionsStatusPost**](TransactionsApi.md#vversiontransactionsstatuspost) | **POST** /v{version}/Transactions/status | Get Status request
[**vversionTransactionsTokenPost**](TransactionsApi.md#vversiontransactionstokenpost) | **POST** /v{version}/Transactions/token | Get Token request

# **vversionTransactionsAuthorizePost**
> \CembraPay\RestApi\Model\AuthorizationResponse vversionTransactionsAuthorizePost($version, $body)

Authorization request

Usual scenario for using this endpoint is after Screening request was already made and TransactionId is known.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Basic
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: Bearer
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CembraPay\RestApi\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\AuthorizationRequest(); // \CembraPay\RestApi\Model\AuthorizationRequest | 

try {
    $result = $apiInstance->vversionTransactionsAuthorizePost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->vversionTransactionsAuthorizePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\AuthorizationRequest**](../Model/AuthorizationRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\AuthorizationResponse**](../Model/AuthorizationResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vversionTransactionsCancelPost**
> \CembraPay\RestApi\Model\CancellationResponse vversionTransactionsCancelPost($version, $body)

Cancelation request

Cancelations are used to cancel authorizations fully or partially.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Basic
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: Bearer
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CembraPay\RestApi\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\CancellationRequest(); // \CembraPay\RestApi\Model\CancellationRequest | 

try {
    $result = $apiInstance->vversionTransactionsCancelPost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->vversionTransactionsCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\CancellationRequest**](../Model/CancellationRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\CancellationResponse**](../Model/CancellationResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vversionTransactionsConfirmPost**
> \CembraPay\RestApi\Model\ConfirmationResponse vversionTransactionsConfirmPost($version, $body)

Confirmation request

Used to submit a confirmation of the Authorization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Basic
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: Bearer
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CembraPay\RestApi\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\ConfirmationRequest(); // \CembraPay\RestApi\Model\ConfirmationRequest | 

try {
    $result = $apiInstance->vversionTransactionsConfirmPost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->vversionTransactionsConfirmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\ConfirmationRequest**](../Model/ConfirmationRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\ConfirmationResponse**](../Model/ConfirmationResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vversionTransactionsCreditPost**
> \CembraPay\RestApi\Model\CreditNoteResponse vversionTransactionsCreditPost($version, $body)

Credit request

Credit Notes are used to cancel settlements fully or partially.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Basic
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: Bearer
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CembraPay\RestApi\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\CreditNoteRequest(); // \CembraPay\RestApi\Model\CreditNoteRequest | 

try {
    $result = $apiInstance->vversionTransactionsCreditPost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->vversionTransactionsCreditPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\CreditNoteRequest**](../Model/CreditNoteRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\CreditNoteResponse**](../Model/CreditNoteResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vversionTransactionsSettlePost**
> \CembraPay\RestApi\Model\SettlementResponse vversionTransactionsSettlePost($version, $body)

Settlement request

Settlement can be made for already authorized transactions.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Basic
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: Bearer
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CembraPay\RestApi\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\SettlementRequest(); // \CembraPay\RestApi\Model\SettlementRequest | 

try {
    $result = $apiInstance->vversionTransactionsSettlePost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->vversionTransactionsSettlePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\SettlementRequest**](../Model/SettlementRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\SettlementResponse**](../Model/SettlementResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vversionTransactionsStatusPost**
> \CembraPay\RestApi\Model\TransactionStatusResponse vversionTransactionsStatusPost($version, $body)

Get Status request

Used to get status and details of particular transaction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Basic
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: Bearer
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CembraPay\RestApi\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\TransactionStatusRequest(); // \CembraPay\RestApi\Model\TransactionStatusRequest | 

try {
    $result = $apiInstance->vversionTransactionsStatusPost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->vversionTransactionsStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\TransactionStatusRequest**](../Model/TransactionStatusRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\TransactionStatusResponse**](../Model/TransactionStatusResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vversionTransactionsTokenPost**
> \CembraPay\RestApi\Model\TokenLookupResponse vversionTransactionsTokenPost($version, $body)

Get Token request

Used to get token with status by token itself or known transaction id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Basic
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');// Configure API key authorization: Bearer
$config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = CembraPay\RestApi\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new CembraPay\RestApi\Api\TransactionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\TokenLookupRequest(); // \CembraPay\RestApi\Model\TokenLookupRequest | 

try {
    $result = $apiInstance->vversionTransactionsTokenPost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->vversionTransactionsTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\TokenLookupRequest**](../Model/TokenLookupRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\TokenLookupResponse**](../Model/TokenLookupResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


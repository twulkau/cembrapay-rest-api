# CembraPay\RestApi\TransactionsApi

All URIs are relative to *https://ext-test.api.cembrapay.ch*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1TransactionsAuthorizePost**](TransactionsApi.md#v1transactionsauthorizepost) | **POST** /v1/Transactions/authorize | Authorization request
[**v1TransactionsCancelPost**](TransactionsApi.md#v1transactionscancelpost) | **POST** /v1/Transactions/cancel | Cancelation request
[**v1TransactionsConfirmPost**](TransactionsApi.md#v1transactionsconfirmpost) | **POST** /v1/Transactions/confirm | Confirmation request
[**v1TransactionsCreditPost**](TransactionsApi.md#v1transactionscreditpost) | **POST** /v1/Transactions/credit | Credit request
[**v1TransactionsSettlePost**](TransactionsApi.md#v1transactionssettlepost) | **POST** /v1/Transactions/settle | Settlement request
[**v1TransactionsStatusPost**](TransactionsApi.md#v1transactionsstatuspost) | **POST** /v1/Transactions/status | Get Status request
[**v1TransactionsTokenPost**](TransactionsApi.md#v1transactionstokenpost) | **POST** /v1/Transactions/token | Get Token request

# **v1TransactionsAuthorizePost**
> \CembraPay\RestApi\Model\AuthorizationResponse v1TransactionsAuthorizePost($body)

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
$body = new \CembraPay\RestApi\Model\AuthorizationRequest(); // \CembraPay\RestApi\Model\AuthorizationRequest | 

try {
    $result = $apiInstance->v1TransactionsAuthorizePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1TransactionsAuthorizePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CembraPay\RestApi\Model\AuthorizationRequest**](../Model/AuthorizationRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\AuthorizationResponse**](../Model/AuthorizationResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TransactionsCancelPost**
> \CembraPay\RestApi\Model\CancellationResponse v1TransactionsCancelPost($body)

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
$body = new \CembraPay\RestApi\Model\CancellationRequest(); // \CembraPay\RestApi\Model\CancellationRequest | 

try {
    $result = $apiInstance->v1TransactionsCancelPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1TransactionsCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CembraPay\RestApi\Model\CancellationRequest**](../Model/CancellationRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\CancellationResponse**](../Model/CancellationResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TransactionsConfirmPost**
> \CembraPay\RestApi\Model\ConfirmationResponse v1TransactionsConfirmPost($body)

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
$body = new \CembraPay\RestApi\Model\ConfirmationRequest(); // \CembraPay\RestApi\Model\ConfirmationRequest | 

try {
    $result = $apiInstance->v1TransactionsConfirmPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1TransactionsConfirmPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CembraPay\RestApi\Model\ConfirmationRequest**](../Model/ConfirmationRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\ConfirmationResponse**](../Model/ConfirmationResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TransactionsCreditPost**
> \CembraPay\RestApi\Model\CreditNoteResponse v1TransactionsCreditPost($body)

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
$body = new \CembraPay\RestApi\Model\CreditNoteRequest(); // \CembraPay\RestApi\Model\CreditNoteRequest | 

try {
    $result = $apiInstance->v1TransactionsCreditPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1TransactionsCreditPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CembraPay\RestApi\Model\CreditNoteRequest**](../Model/CreditNoteRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\CreditNoteResponse**](../Model/CreditNoteResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TransactionsSettlePost**
> \CembraPay\RestApi\Model\SettlementResponse v1TransactionsSettlePost($body)

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
$body = new \CembraPay\RestApi\Model\SettlementRequest(); // \CembraPay\RestApi\Model\SettlementRequest | 

try {
    $result = $apiInstance->v1TransactionsSettlePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1TransactionsSettlePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CembraPay\RestApi\Model\SettlementRequest**](../Model/SettlementRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\SettlementResponse**](../Model/SettlementResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TransactionsStatusPost**
> \CembraPay\RestApi\Model\TransactionStatusResponse v1TransactionsStatusPost($body)

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
$body = new \CembraPay\RestApi\Model\TransactionStatusRequest(); // \CembraPay\RestApi\Model\TransactionStatusRequest | 

try {
    $result = $apiInstance->v1TransactionsStatusPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1TransactionsStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CembraPay\RestApi\Model\TransactionStatusRequest**](../Model/TransactionStatusRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\TransactionStatusResponse**](../Model/TransactionStatusResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **v1TransactionsTokenPost**
> \CembraPay\RestApi\Model\TokenLookupResponse v1TransactionsTokenPost($body)

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
$body = new \CembraPay\RestApi\Model\TokenLookupRequest(); // \CembraPay\RestApi\Model\TokenLookupRequest | 

try {
    $result = $apiInstance->v1TransactionsTokenPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TransactionsApi->v1TransactionsTokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CembraPay\RestApi\Model\TokenLookupRequest**](../Model/TokenLookupRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\TokenLookupResponse**](../Model/TokenLookupResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


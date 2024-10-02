# CembraPay\RestApi\CheckoutApi

All URIs are relative to *https://ext-test.api.cembrapay.ch*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vversionCheckoutPost**](CheckoutApi.md#vversioncheckoutpost) | **POST** /v{version}/Checkout | Checkout request
[**vversionCheckoutStatusPost**](CheckoutApi.md#vversioncheckoutstatuspost) | **POST** /v{version}/Checkout/status | Checkout status request

# **vversionCheckoutPost**
> \CembraPay\RestApi\Model\CheckoutResponse vversionCheckoutPost($version, $body)

Checkout request

Used to start checkout session and safely provide data to be used during checkout process. To complete checkout, user must be redirected to url provided in response.

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

$apiInstance = new CembraPay\RestApi\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\CheckoutRequest(); // \CembraPay\RestApi\Model\CheckoutRequest | 

try {
    $result = $apiInstance->vversionCheckoutPost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->vversionCheckoutPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\CheckoutRequest**](../Model/CheckoutRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\CheckoutResponse**](../Model/CheckoutResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vversionCheckoutStatusPost**
> \CembraPay\RestApi\Model\CheckoutStatusResponse vversionCheckoutStatusPost($version, $body)

Checkout status request

Used to get status of checkout session by checkout session id.

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

$apiInstance = new CembraPay\RestApi\Api\CheckoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\CheckoutStatusRequest(); // \CembraPay\RestApi\Model\CheckoutStatusRequest | 

try {
    $result = $apiInstance->vversionCheckoutStatusPost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CheckoutApi->vversionCheckoutStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\CheckoutStatusRequest**](../Model/CheckoutStatusRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\CheckoutStatusResponse**](../Model/CheckoutStatusResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


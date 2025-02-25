# CembraPay\RestApi\ScreeningApi

All URIs are relative to *https://ext-test.api.cembrapay.ch*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1ScreeningPost**](ScreeningApi.md#v1screeningpost) | **POST** /v1/Screening | Screening request

# **v1ScreeningPost**
> \CembraPay\RestApi\Model\ScreeningResponse v1ScreeningPost($body)

Screening request

Screening used to do lightweight check of the Consumer. Rejection during screening doesn't obligatory mean that subsequent Authorization will fail.

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

$apiInstance = new CembraPay\RestApi\Api\ScreeningApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CembraPay\RestApi\Model\ScreeningRequest(); // \CembraPay\RestApi\Model\ScreeningRequest | 

try {
    $result = $apiInstance->v1ScreeningPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScreeningApi->v1ScreeningPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CembraPay\RestApi\Model\ScreeningRequest**](../Model/ScreeningRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\ScreeningResponse**](../Model/ScreeningResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


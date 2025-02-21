# CembraPay\RestApi\SignaturePublicKeyApi

All URIs are relative to *https://ext-test.api.cembrapay.ch*

Method | HTTP request | Description
------------- | ------------- | -------------
[**v1SignaturePublicKeyPost**](SignaturePublicKeyApi.md#v1signaturepublickeypost) | **POST** /v1/SignaturePublicKey | Public key

# **v1SignaturePublicKeyPost**
> \CembraPay\RestApi\Model\Certificate v1SignaturePublicKeyPost($body)

Public key

Returns public key to validate signed url

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

$apiInstance = new CembraPay\RestApi\Api\SignaturePublicKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \CembraPay\RestApi\Model\CertificateParameters(); // \CembraPay\RestApi\Model\CertificateParameters | 

try {
    $result = $apiInstance->v1SignaturePublicKeyPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignaturePublicKeyApi->v1SignaturePublicKeyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\CembraPay\RestApi\Model\CertificateParameters**](../Model/CertificateParameters.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\Certificate**](../Model/Certificate.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


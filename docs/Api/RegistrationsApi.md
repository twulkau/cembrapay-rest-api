# CembraPay\RestApi\RegistrationsApi

All URIs are relative to *https://ext-test.api.cembrapay.ch*

Method | HTTP request | Description
------------- | ------------- | -------------
[**vversionRegistrationsPost**](RegistrationsApi.md#vversionregistrationspost) | **POST** /v{version}/Registrations | Register request
[**vversionRegistrationsStatusPost**](RegistrationsApi.md#vversionregistrationsstatuspost) | **POST** /v{version}/Registrations/status | Registration Status request

# **vversionRegistrationsPost**
> \CembraPay\RestApi\Model\RegistrationResponse vversionRegistrationsPost($version, $body)

Register request

Used to start registration session and safely provide data to be used during registration. To complete the registration, user must be redirected to url provided in response.

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

$apiInstance = new CembraPay\RestApi\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\RegistrationRequest(); // \CembraPay\RestApi\Model\RegistrationRequest | 

try {
    $result = $apiInstance->vversionRegistrationsPost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->vversionRegistrationsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\RegistrationRequest**](../Model/RegistrationRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\RegistrationResponse**](../Model/RegistrationResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **vversionRegistrationsStatusPost**
> \CembraPay\RestApi\Model\RegistrationStatusResponse vversionRegistrationsStatusPost($version, $body)

Registration Status request

Used to get status of registration session by registration session id.

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

$apiInstance = new CembraPay\RestApi\Api\RegistrationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$version = "version_example"; // string | The requested API version
$body = new \CembraPay\RestApi\Model\RegistrationStatusRequest(); // \CembraPay\RestApi\Model\RegistrationStatusRequest | 

try {
    $result = $apiInstance->vversionRegistrationsStatusPost($version, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegistrationsApi->vversionRegistrationsStatusPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **version** | **string**| The requested API version |
 **body** | [**\CembraPay\RestApi\Model\RegistrationStatusRequest**](../Model/RegistrationStatusRequest.md)|  | [optional]

### Return type

[**\CembraPay\RestApi\Model\RegistrationStatusResponse**](../Model/RegistrationStatusResponse.md)

### Authorization

[Basic](../../README.md#Basic), [Bearer](../../README.md#Bearer)

### HTTP request headers

 - **Content-Type**: application/json, text/json, application/_*+json
 - **Accept**: text/plain, application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


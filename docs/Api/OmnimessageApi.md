# Swagger\Client\OmnimessageApi

All URIs are relative to *https://api.messente.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendOmnimessage**](OmnimessageApi.md#sendOmnimessage) | **POST** /omnimessage | Sends an Omnimessage


# **sendOmnimessage**
> \Swagger\Client\Model\OmniMessageCreateSuccessResponse sendOmnimessage($body)

Sends an Omnimessage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Swagger\Client\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new Swagger\Client\Api\OmnimessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Omnimessage(); // \Swagger\Client\Model\Omnimessage | Omnimessage to be sent

try {
    $result = $apiInstance->sendOmnimessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\Omnimessage**](../Model/Omnimessage.md)| Omnimessage to be sent |

### Return type

[**\Swagger\Client\Model\OmniMessageCreateSuccessResponse**](../Model/OmniMessageCreateSuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

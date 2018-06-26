# Messente\Omnichannel\OmnimessageApi

All URIs are relative to *https://api.messente.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelScheduledMessage**](OmnimessageApi.md#cancelScheduledMessage) | **DELETE** /omnimessage/{omnimessage_id} | Cancels a scheduled Omnimessage
[**sendOmnimessage**](OmnimessageApi.md#sendOmnimessage) | **POST** /omnimessage | Sends an Omnimessage


# **cancelScheduledMessage**
> cancelScheduledMessage($omnimessageId)

Cancels a scheduled Omnimessage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Messente\Omnichannel\Api\OmnimessageApi();
$omnimessageId = "omnimessageId_example"; // string | UUID of the scheduled Omnimessage to be cancelled

try {
    $api_instance->cancelScheduledMessage($omnimessageId);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->cancelScheduledMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **omnimessageId** | **string**| UUID of the scheduled Omnimessage to be cancelled |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)

# **sendOmnimessage**
> \Messente\Omnichannel\Model\OmniMessageCreateSuccessResponse sendOmnimessage($body)

Sends an Omnimessage



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Messente\Omnichannel\Api\OmnimessageApi();
$body = new \Messente\Omnichannel\Model\Omnimessage(); // \Messente\Omnichannel\Model\Omnimessage | Omnimessage to be sent

try {
    $result = $api_instance->sendOmnimessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Messente\Omnichannel\Model\Omnimessage**](../Model/Omnimessage.md)| Omnimessage to be sent |

### Return type

[**\Messente\Omnichannel\Model\OmniMessageCreateSuccessResponse**](../Model/OmniMessageCreateSuccessResponse.md)

### Authorization

[basicAuth](../../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)


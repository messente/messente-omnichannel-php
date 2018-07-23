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

use \Messente\Omnichannel\Configuration;
use \Messente\Omnichannel\Api\OmnimessageApi;

// Configure HTTP basic authorization: basicAuth
$config = Configuration::getDefaultConfiguration()
    ->setUsername('<MESSENTE_API_USERNAME>')
    ->setPassword('<MESSENTE_API_PASSWORD>');

$apiInstance = new OmnimessageApi(
    new GuzzleHttp\Client(),
    $config
);

$omnimessageId = "omnimessageId"; // string | UUID of the Omnimessage to for which the delivery report is to be retrieved

try {
    $apiInstance->cancelScheduledMessage($omnimessageId);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->cancelScheduledMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **omnimessageId** | [**string**](../Model/.md)| UUID of the scheduled Omnimessage to be cancelled |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendOmnimessage**
> \Messente\Omnichannel\Model\OmniMessageCreateSuccessResponse sendOmnimessage($omnimessage)

Sends an Omnimessage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

use \Messente\Omnichannel\Api\OmnimessageApi;
use \Messente\Omnichannel\Configuration;
use \Messente\Omnichannel\Model\Omnimessage;
use \Messente\Omnichannel\Model\Viber;
use \Messente\Omnichannel\Model\SMS;

// Configure HTTP basic authorization: basicAuth
$config = Configuration::getDefaultConfiguration()
    ->setUsername('<MESSENTE_API_USERNAME>')
    ->setPassword('<MESSENTE_API_PASSWORD>');


$apiInstance = new OmnimessageApi(
    new GuzzleHttp\Client(),
    $config
);

$omnimessage = new Omnimessage(
    ["to" => "<phone number in international format>"]
);

$viber = new Viber(
    ["text" => "Hello Viber!"]
);

$sms = new SMS(
    ["text" => "Hello SMS!"]
);

$omnimessage->setMessages([$viber, $sms]);


try {
    $result = $apiInstance->sendOmnimessage($omnimessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **omnimessage** | [**\Messente\Omnichannel\Model\Omnimessage**](../Model/Omnimessage.md)| Omnimessage to be sent |

### Return type

[**\Messente\Omnichannel\Model\OmniMessageCreateSuccessResponse**](../Model/OmniMessageCreateSuccessResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)


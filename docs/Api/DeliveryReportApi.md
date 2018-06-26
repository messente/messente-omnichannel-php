# Messente\Omnichannel\DeliveryReportApi

All URIs are relative to *https://api.messente.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**retrieveDeliveryReport**](DeliveryReportApi.md#retrieveDeliveryReport) | **GET** /omnimessage/{omnimessage_id}/status | 


# **retrieveDeliveryReport**
> \Messente\Omnichannel\Model\DeliveryReportResponse retrieveDeliveryReport($omnimessageId)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

$api_instance = new Messente\Omnichannel\Api\DeliveryReportApi();
$omnimessageId = "omnimessageId_example"; // string | UUID of the Omnimessage to for which the delivery report is to be retrieved

try {
    $result = $api_instance->retrieveDeliveryReport($omnimessageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryReportApi->retrieveDeliveryReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **omnimessageId** | **string**| UUID of the Omnimessage to for which the delivery report is to be retrieved |

### Return type

[**\Messente\Omnichannel\Model\DeliveryReportResponse**](../Model/DeliveryReportResponse.md)

### Authorization

[basicAuth](../../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../../README.md#documentation-for-models) [[Back to README]](../../../README.md)


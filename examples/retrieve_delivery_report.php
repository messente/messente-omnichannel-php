<?php
require_once(__DIR__ . '../vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Omnichannel\Configuration::getDefaultConfiguration()
	-> setUsername('<MESSENTE_API_USERNAME>')
	-> setPassword('<MESSENTE_API_PASSWORD>');

$apiInstance = new Messente\Omnichannel\Api\DeliveryReportApi(
	new GuzzleHttp\Client(),
	$config
);
$omnimessageId = "omnimessageId"; // string | UUID of the Omnimessage to for which the delivery report is to be retrieved

try {
    $result = $apiInstance->retrieveDeliveryReport($omnimessageId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DeliveryReportApi->retrieveDeliveryReport: ', $e->getMessage(), PHP_EOL;
}

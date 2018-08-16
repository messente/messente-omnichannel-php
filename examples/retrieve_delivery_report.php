<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use \Messente\Omnichannel\Configuration;
use \Messente\Omnichannel\Api\DeliveryReportApi;


// Configure HTTP basic authorization: basicAuth
$config = Configuration::getDefaultConfiguration()
    ->setUsername('<MESSENTE_API_USERNAME>')
    ->setPassword('<MESSENTE_API_PASSWORD>');

$apiInstance = new DeliveryReportApi(
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

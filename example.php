<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth

$config = new Swagger\Client\Configuration();
$config ->setUsername('YOUR_MESSENTE_API_USERNAME')
        ->setPassword('YOUR_MESSENTE_API_PASSWORD');

$apiInstance = new Swagger\Client\Api\OmnimessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\Omnimessage();
$viber = new \Swagger\Client\Model\Viber();
$viber->setSender("<phone_number or sender name (optional)>");
$viber->setText("Hello from PHP!");
$body->setViber($viber);
$body->setTo("<phone_number>");


$scenarioItem = new \Swagger\Client\Model\ScenarioItem();
$scenarioItem->setChannel();
$body->setScenarios([$scenarioItem]);

try {
    $result = $apiInstance->sendOmnimessage($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}

?>

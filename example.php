<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth

$config = new Messente\Omnichannel\Configuration();
$config ->setUsername('<MESSENTE_API_USERNAME>')
        ->setPassword('<MESSENTE_API_PASSWORD>');

$apiInstance = new Messente\Omnichannel\Api\OmnimessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$omnimessage = new \Messente\Omnichannel\Model\Omnimessage();
$omnimessage->setTo("<phone number in international format>");

$viber = new \Messente\Omnichannel\Model\Viber();
$viber->setSender("Messente");
$viber->setSender("<phone_number or sender name (optional)>");
$viber->setText("Hello from PHP!");

$sms = new \Messente\Omnichannel\Model\SMS();
$sms->setSender("<phone_number or sender name (optional)>");
$sms->setText("Hello from PHP!");

$omnimessage->setViber($viber);
$omnimessage->setSms($sms);


$viberScenarioItem = new \Messente\Omnichannel\Model\ScenarioItem(Array("channel"=> "viber"));
$smsScenarioItem = new \Messente\Omnichannel\Model\ScenarioItem(Array("channel"=> "sms"));
$omnimessage->setScenarios([$viberScenarioItem, $smsScenarioItem]);

try {
    $result = $apiInstance->sendOmnimessage($omnimessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}

?>

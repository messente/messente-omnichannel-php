<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setUsername('<MESSENTE_API_USERNAME>');
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setPassword('<MESSENTE_API_PASSWORD>');

$apiInstance = new Messente\Omnichannel\Api\OmnimessageApi();
$body = new \Messente\Omnichannel\Model\Omnimessage(); // \Messente\Omnichannel\Model\Omnimessage | Omnimessage to be sent

$omnimessage = new \Messente\Omnichannel\Model\Omnimessage();

// optionally send the message at same specified time
$omnimessage->setTo("<phone number in international format>");

$viber = new \Messente\Omnichannel\Model\Viber();
$viber->setSender("<sender name (optional)>");
$viber->setText("Hello from PHP!");

$sms = new \Messente\Omnichannel\Model\SMS();
$sms->setSender("<sender name (optional)>");
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

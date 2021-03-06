<?php
require_once(__DIR__ . '/../vendor/autoload.php');

use \Messente\Omnichannel\Api\OmnimessageApi;
use \Messente\Omnichannel\Configuration;
use \Messente\Omnichannel\Model\Omnimessage;
use \Messente\Omnichannel\Model\Viber;
use \Messente\Omnichannel\Model\SMS;
use \Messente\Omnichannel\Model\WhatsApp;
use \Messente\Omnichannel\Model\WhatsAppText;


// Configure HTTP basic authorization: basicAuth
$config = Configuration::getDefaultConfiguration()
	->setUsername('<MESSENTE_API_USERNAME>')
	->setPassword('<MESSENTE_API_PASSWORD>');

$apiInstance = new OmnimessageApi(
	new GuzzleHttp\Client(),
	$config
);

$omnimessage = new Omnimessage([
	"to" => "<phone number in e.164 format>"
]);

$viber = new Viber(
	["text" => "Hello Viber!", "sender" => "MyViberSender"]
);

$sms = new SMS(
	["text" => "Hello SMS!", "sender" => "MySmsSender"]
);


$whatsAppText = new WhatsAppText(["body" => "Hello WhatsApp!"]);

$whatsapp = new WhatsApp(
	['text' => $whatsAppText, "sender" => "MyWhatsAppSender"]
);

$omnimessage->setMessages([$whatsapp, $viber, $sms]);


try {
    $result = $apiInstance->sendOmnimessage($omnimessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}

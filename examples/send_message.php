<?php
require_once(__DIR__ . '/../vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Omnichannel\Configuration::getDefaultConfiguration()
	-> setUsername('<MESSENTE_API_USERNAME>')
	-> setPassword('<MESSENTE_API_PASSWORD>');


$apiInstance = new Messente\Omnichannel\Api\OmnimessageApi(
		new GuzzleHttp\Client(),
		$config
);

$omnimessage = new \Messente\Omnichannel\Model\Omnimessage(
	["to" => "<recipient phonenumber>"]
);

$viber = new \Messente\Omnichannel\Model\Viber(
	["text" => "Hello Viber!"]
);

$sms = new \Messente\Omnichannel\Model\SMS(
	["text" => "Hello SMS!"]
);

$omnimessage->setMessages([$viber, $sms]);


try {
    $result = $apiInstance->sendOmnimessage($omnimessage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OmnimessageApi->sendOmnimessage: ', $e->getMessage(), PHP_EOL;
}

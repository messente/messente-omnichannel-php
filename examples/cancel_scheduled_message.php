<?php
	require_once(__DIR__ . '/vendor/autoload.php');

	// Configure HTTP basic authorization: basicAuth
	Messente\Omnichannel\Configuration::getDefaultConfiguration()->setUsername('YOUR_USERNAME');
	Messente\Omnichannel\Configuration::getDefaultConfiguration()->setPassword('YOUR_PASSWORD');

	$api_instance = new Messente\Omnichannel\Api\OmnimessageApi();
	$omnimessageId = "omnimessageId"; // string | UUID of the Omnimessage to for which the delivery report is to be retrieved

	try {
		$result = $api_instance->cancelScheduledMessage($omnimessageId);
		print_r($result);
	} catch (Exception $e) {
		echo 'Exception when calling DeliveryReportApi->retrieveDeliveryReport: ', $e->getMessage(), PHP_EOL;
	}

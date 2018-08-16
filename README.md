# messente-omnichannel-php

This is the PHP library for Messente Omnichannel API

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/messente/messente-omnichannel-php.git"
    }
  ],
  "require": {
    "messente/messente-omnichannel-php": "*@master"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
require_once(__DIR__ . '/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure HTTP basic authorization: basicAuth
$config = Messente\Omnichannel\Configuration::getDefaultConfiguration()
	-> setUsername('<MESSENTE_API_USERNAME>')
	-> setPassword('<MESSENTE_API_PASSWORD>');


$apiInstance = new Messente\Omnichannel\Api\OmnimessageApi(
		new GuzzleHttp\Client(),
		$config
);

$omnimessage = new \Messente\Omnichannel\Model\Omnimessage(
	["to" => "<phone number in international format>"]
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
```

## Documentation for API Endpoints

All URIs are relative to *https://api.messente.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DeliveryReportApi* | [**retrieveDeliveryReport**](docs/Api/DeliveryReportApi.md#retrievedeliveryreport) | **GET** /omnimessage/{omnimessage_id}/status | Retrieves the delivery report for the Omnimessage
*OmnimessageApi* | [**cancelScheduledMessage**](docs/Api/OmnimessageApi.md#cancelscheduledmessage) | **DELETE** /omnimessage/{omnimessage_id} | Cancels a scheduled Omnimessage
*OmnimessageApi* | [**sendOmnimessage**](docs/Api/OmnimessageApi.md#sendomnimessage) | **POST** /omnimessage | Sends an Omnimessage


## Documentation For Models

 - [Channel](docs/Model/Channel.md)
 - [DeliveryReportResponse](docs/Model/DeliveryReportResponse.md)
 - [DeliveryResult](docs/Model/DeliveryResult.md)
 - [Err](docs/Model/Err.md)
 - [ErrorItem](docs/Model/ErrorItem.md)
 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [Message](docs/Model/Message.md)
 - [MessageResult](docs/Model/MessageResult.md)
 - [OmniMessageCreateSuccessResponse](docs/Model/OmniMessageCreateSuccessResponse.md)
 - [Omnimessage](docs/Model/Omnimessage.md)
 - [ResponseErrorCode](docs/Model/ResponseErrorCode.md)
 - [ResponseErrorTitle](docs/Model/ResponseErrorTitle.md)
 - [SMS](docs/Model/SMS.md)
 - [Status](docs/Model/Status.md)
 - [Viber](docs/Model/Viber.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author

messente@messente.com



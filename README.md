# messente-omnichannel-php

This is the PHP library from Messente Omnichannel API


## Requirements

PHP 5.4.0 and later

## Installation & Usage
### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/messente/messente-omnichannel-php"
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
    require_once('/path/to/./autoload.php');
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
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setUsername('<MESSENTE_API_USERNAME>');
Messente\Omnichannel\Configuration::getDefaultConfiguration()->setPassword('<MESSENTE_API_PASSWORD>');

$apiInstance = new Messente\Omnichannel\Api\OmnimessageApi();
$body = new \Messente\Omnichannel\Model\Omnimessage(); // \Messente\Omnichannel\Model\Omnimessage | Omnimessage to be sent

$omnimessage = new \Messente\Omnichannel\Model\Omnimessage();
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
```

## Documentation for API Endpoints

All URIs are relative to *https://api.messente.com/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*OmnimessageApi* | [**sendOmnimessage**](docs/Api/OmnimessageApi.md#sendomnimessage) | **POST** /omnimessage | Sends an Omnimessage


## Documentation For Models

 - [ErrorResponse](docs/Model/ErrorResponse.md)
 - [MessageResult](docs/Model/MessageResult.md)
 - [OmniMessageCreateSuccessResponse](docs/Model/OmniMessageCreateSuccessResponse.md)
 - [Omnimessage](docs/Model/Omnimessage.md)
 - [SMS](docs/Model/SMS.md)
 - [ScenarioItem](docs/Model/ScenarioItem.md)
 - [Scenarios](docs/Model/Scenarios.md)
 - [Viber](docs/Model/Viber.md)


## Documentation For Authorization


## basicAuth

- **Type**: HTTP basic authentication


## Author

messente@messente.com



# SwaggerClient-php
This is the beta version of Omnichannel API

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
      "url": "https://github.com//.git"
    }
  ],
  "require": {
    "/": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/SwaggerClient-php/vendor/autoload.php');
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

admin@messente.com


# This is my package laravel-mqtt

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nerdmonkey/laravel-mqtt.svg?style=flat-square)](https://packagist.org/packages/nerdmonkey/laravel-mqtt)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/nerdmonkey/laravel-mqtt/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/nerdmonkey/laravel-mqtt/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/nerdmonkey/laravel-mqtt/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/nerdmonkey/laravel-mqtt/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/nerdmonkey/laravel-mqtt.svg?style=flat-square)](https://packagist.org/packages/nerdmonkey/laravel-mqtt)

A lightweight and efficient MQTT (Message Queuing Telemetry Transport) package for Laravel, providing seamless integration with MQTT brokers. With Laravel MQTT, you can easily establish MQTT connections, subscribe to topics, publish messages, and handle incoming MQTT messages within your Laravel applications. This package offers a clean and intuitive API, enabling real-time communication and data exchange between your Laravel projects and MQTT-enabled devices. Boost your Laravel application with MQTT capabilities using Laravel MQTT.

## Installation

You can install the package via composer:

```bash
composer require nerdmonkey/laravel-mqtt
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-mqtt-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-mqtt-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-mqtt-views"
```

## Usage

```php
$mqtt = new Nerdmonkey\Mqtt();
echo $mqtt->echoPhrase('Hello, Nerdmonkey!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Sydel Palinlin](https://github.com/nerdmonkey)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

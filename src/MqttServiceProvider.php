<?php

namespace Nerdmonkey\Mqtt;

use Nerdmonkey\Mqtt\Commands\MqttCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MqttServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-mqtt')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-mqtt_table')
            ->hasCommand(MqttCommand::class);
    }
}

<?php

namespace Nerdmonkey\Mqtt\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nerdmonkey\Mqtt\MqttServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Nerdmonkey\\Mqtt\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            MqttServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-mqtt_table.php.stub';
        $migration->up();
        */
    }
}

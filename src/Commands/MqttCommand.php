<?php

namespace Nerdmonkey\Mqtt\Commands;

use Illuminate\Console\Command;

class MqttCommand extends Command
{
    public $signature = 'laravel-mqtt';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

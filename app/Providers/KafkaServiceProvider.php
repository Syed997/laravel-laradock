<?php

namespace App\Providers;

use App\Kafka\Consumer;
use App\Kafka\Produce;
use Illuminate\Support\ServiceProvider;

class KafkaServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(Consumer::class, function () {
            return new Consumer();
        });

        $this->app->singleton(Produce::class, function () {
            return new Produce();
        });
    }
}

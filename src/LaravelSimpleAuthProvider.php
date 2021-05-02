<?php

namespace Dasundev\LaravelSimpleAuth;

use Dasundev\LaravelSimpleAuth\Commands\MakeCommand;
use Illuminate\Support\ServiceProvider;

class LaravelSimpleAuthProvider extends ServiceProvider {


    public function boot()
    {
        $this->registerCommands();;
    }

    protected function registerCommands() {
        if (! $this->app->runningInConsole()) return;

        $this->commands([
            MakeCommand::class
        ]);
    }

}

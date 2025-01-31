<?php

namespace DMS\Breeze;

use Illuminate\Support\ServiceProvider;

class DMSBreezeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (!$this->app->runningInConsole()) {
            return;
        }

        $this->commands([
            Console\ReplaceCommand::class,
        ]);
    }

    public function register()
    {
        //
    }
}

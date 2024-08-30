<?php

namespace Qayum\CrudGenerator\Providers;
use Illuminate\Support\ServiceProvider;
use Qayum\CrudGenerator\Commands\CrudGenerateCommand;
class CrudGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CrudGenerateCommand::class,
            ]);
        }
    }

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../stubs' => resource_path('stubs/crud-generator'),
        ], 'stubs');
    }
}




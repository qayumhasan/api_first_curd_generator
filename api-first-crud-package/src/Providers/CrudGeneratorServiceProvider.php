<?php

namespace Qayum\CrudGenerator\Providers;
use Illuminate\Support\ServiceProvider;
class CrudGeneratorServiceProvider extends ServiceProvider
{
    public function register()
    {
        dump('ok');
    }

    public function boot()
    {
        dump('yes');
    }
}




<?php

namespace Zhum\Ceshi;

use Illuminate\Support\ServiceProvider;

class CeshiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('ceshi', function () {
            return new Ceshi;
        });
    }
}
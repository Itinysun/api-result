<?php

namespace Lp\ApiResult;


use Illuminate\Support\ServiceProvider;

class BootApiResultService extends ServiceProvider
{
    public function boot()
    {

    }
    public function register()
    {
        $this->app->singleton('apiResult', function () {
            return new ApiResult();
        });
    }
}
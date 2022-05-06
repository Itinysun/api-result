<?php

namespace Lp\ApiResult;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;
use Lp\ApiResult\Facades\ApiResult;

class BootApiResultService extends ServiceProvider
{
    public function boot()
    {
        Log::info('request id', ['id', ApiResult::id()]);
    }
    public function register()
    {
        $this->app->scoped(InstanceApiResult::class, function () {
            return new InstanceApiResult();
        });
    }
}
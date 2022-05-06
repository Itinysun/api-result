<?php

namespace Lp\ApiResult\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;


/**
 * @method static string id()
 * @method static bool is_success()
 * @method static JsonResponse success(mixed $data = [], string $msg = 'ok')
 * @method static JsonResponse error(int $code, string $msg = 'no error msg', string|array $data = [])
 */
class ApiResult extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'apiResult';
    }
}
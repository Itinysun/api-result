<?php

namespace Itinysun\ApiResult\Facades;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Facade;
use Itinysun\ApiResult\ErrorCode;
use Itinysun\ApiResult\InstanceApiResult;


/**
 * @method static string id()
 * @method static bool is_success()
 * @method static JsonResponse success(mixed $data = [], string $msg = 'ok')
 * @method static JsonResponse error(ErrorCode $code=ErrorCode::ServerError, string $msg = 'no error msg', string|array $data = [])
 */
class ApiResult extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return InstanceApiResult::class;
    }
}

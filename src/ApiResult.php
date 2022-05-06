<?php

namespace Lp\ApiResult;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Str;
use function response;

/**
 *
 */
class ApiResult
{
    /**
     * @var string
     */
    protected string $id;
    /**
     * @var bool
     */
    protected bool $success = false;

    /**
     *
     */
    function __construct()
    {
        $this->id = Str::uuid();
        $this->success = false;
    }

    /**
     * 获取请求ID
     * @return string
     */
    public function id(): string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function is_success(): bool
    {
        return $this->success;
    }

    /**
     * @param mixed $data
     * @param string $msg
     * @return JsonResponse
     */
    public function success(mixed $data = [], string $msg = 'ok'): JsonResponse
    {
        $this->success = true;
        return response()->json([
            'request_id' => $this->id,
            'code' => 200,
            'data' => $data,
            'msg' => $msg
        ]);
    }

    /**
     * @param int $code
     * @param string $msg
     * @return JsonResponse
     */
    public function error(int $code, string $msg = 'no error msg', string|array $data = []): JsonResponse
    {
        $this->success = false;
        return response()->json([
            'request_id' => $this->id,
            'code' => $code,
            'data' => $data,
            'msg' => $msg
        ]);
    }
}

<?php

namespace Lp\ApiResult;



use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use function response;

/**
 *
 */
class InstanceApiResult
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
     * @throws Exception
     */
    function __construct()
    {
        $request = request();
        if($request->hasHeader('X-Request-id')){
            $this->id  = $request->header('X-Request-id');
            if(Cache::has('xri-'.$this->id)){
                throw new Exception('this request has been played',400);
            }
        }else{
            $this->id = Str::uuid();
        }
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
        Cache::set('xri-'.$this->id,1,600);
        return response()->json([
            'request_id' => $this->id,
            'code' => 200,
            'data' => $data,
            'msg' => $msg
        ]);
    }

    /**
     * @param ErrorCode $code
     * @param string $msg
     * @param string|array $data
     * @return JsonResponse
     */
    public function error(ErrorCode $code=ErrorCode::ServerError, string $msg = 'no error msg', string|array $data = []): JsonResponse
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

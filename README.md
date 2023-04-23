# API Response For Laravel

## 安装

```php
composer require itinysun/api-response
```

### 更新

```php
composer update itinysun/api-response
```



## 使用方法

```php
return ApiResult::success($response_body_data)

return ApiResult::error(ErrorCode::needLogin)
```


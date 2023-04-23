# API Response For Laravel

## 安装

```php
composer require itinysun/api-result
```

### 更新

```php
composer update itinysun/api-result
```



## 使用方法

```php
return ApiResult::success($response_body_data)

return ApiResult::error(ErrorCode::needLogin)
```


# Wechat sdk for laravel

## 安装

### 编辑 composer.json

```
    "require" : {
        ...
        "lp/api-result": "dev-master"
    },
    "repositories": {
        ...
        //for product
        "lp/api-result": {
            "type": "vcs",
            "url": "https://git.cctvnc.cn/laravel-vendor/api-result.git"
        }
        //for dev
         "lp/api-result": {
            "type": "path",
            "url": "path to this project"
        }
    }
```

### 更新

```php
composer update lp/wework
```



## 使用方法

```php
ApiResult::success($response_body_data)
```


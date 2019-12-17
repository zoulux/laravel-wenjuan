# laravel-wenjuan

laravel 版本的问卷网 sdk，基于 [jake/wenjuan](https://github.com/zoulux/wenjuan)

## 框架要求
- Laravel/Lumen >= 5.1
- PHP >= 7.0


## 安装

```bash
$ composer require jake/laravel-wenjuan
```

## 配置

- 在 config/app.php 注册 ServiceProvider  (Laravel 5.5 + 无需手动注册)

```bash
'providers' => [
    // ...
    Jake\LaravelWenjuan\WenjuanServiceProvider::class,,
],
```

- 创建配置文件：

```bash
$ php artisan vendor:publish --provider="Jake\LaravelWenjuan\WenjuanServiceProvider"
```

- 修改应用根目录下的 config/wenjuan.php 中对应的参数即可。

## 使用 
请直接参考项目 [jake/wenjuan](https://github.com/zoulux/wenjuan) 

## License
MIT

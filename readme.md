demo.laravel-admin.org
=================

Source code of official [http://demo.laravel-admin.org](http://demo.laravel-admin.org) website.

## Installation

```shell

$ git clone https://github.com/z-song/demo.laravel-admin.org

$ cd demo.laravel-admin.org

$ composer install -vvv

$ php artisan vendor:publish --provider="Encore\Admin\AdminServiceProvider"

# config/app.php
# Encore\Admin\AdminServiceProvider::class,

```

Then create a database with name `laravel_admin_demo` in your mysql. You can find database dump in `storage/mysql_dump/laravel_admin_demo.sql`,  import it:
```sql

mysql> create database `laravel_admin_demo`;

mysql> use `laravel_admin_demo`;

mysql> source storage/mysql_dump/laravel_admin_demo.sql

```

Back to terminal and start the web server:

```shell

$ php artisan serve

```



## v2.0
```
DenyRoutes 修改权限验证



```


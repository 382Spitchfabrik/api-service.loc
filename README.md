## Создание пустого проеката 
В папке будушего проекта выполнить команды
```shell 
composer create-project laravel/laravel .
php artisan install:api
php artisan config:publish cors 
php artisan storage:link
```
вкорне проекта создать файл .htaccess 
```php
RewriteEngine on
RewriteRule ^(.*)$ public/$1 [l] 
```

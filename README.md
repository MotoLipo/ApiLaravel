## Api Laravel
Реализация Api с использованием фрейморвка Laravel и инструмента Swagger. Аутентификация происходит через JWT токен.

## Использование
1. Устанавливаем всё необходимое для проекта `composer install && cp .env.example .env && ./vendor/bin/sail build && ./vendor/bin/sail up -d && ./vendor/bin/sail artisan key:generate &&  ./vendor/bin/sail artisan serve`
2. Делаем миграцию и выполняем seed `./vendor/bin/sail artisan migrate --seed`
3. Генерируем токен по этой ссылке http://localhost/api/documentation#/User/post_api_auth_login и вставляем его в Authorize, который находится на этой же странице. После этого можно пользоваться API
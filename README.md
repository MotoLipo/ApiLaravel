## Api Laravel
Реализация Api с использованием фрейморвка Laravel и инструмента Swagger. Аутентификация происходит через JWT токен.

## Использование
1. Устанавливаем зависимости composer и собираем docker-compose `composer install && ./vendor/bin/sail build`
2. Запускаем docker контейнер и поднимаем сервер laravel `./vendor/bin/sail up -d && ./vendor/bin/sail artisan serve`
3. Создаём .env файл и генерируем ключ `cp .env.example .env && ./vendor/bin/sail artisan key:generate`
4. Делаем миграцию и выполняем seed `./vendor/bin/sail artisan migrate --seed`
5. Генерируем токен по этой ссылке http://localhost/api/documentation#/User/post_api_auth_login и вставляем его в Authorize, который находится на этой же странице. После этого можно пользоваться API
cd `dirname $0`/..

cd my-laravel-app

cp .env.example .env

composer install

php artisan migrate

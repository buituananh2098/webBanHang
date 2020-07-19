#!/usr/bin/env bash
echo 'generate autoload'
composer dump-autoload
echo '================30'
echo '====================================================100'
echo 'clear cache'
php artisan cache:clear
echo '====================================================100'

echo 'clear config'
php artisan config:clear
echo '====================================================100'

echo 'clear event'
php artisan event:clear
echo '====================================================100'

echo 'regenerate event'
php artisan event:generate
echo '====================================================100'

echo 'clear route'
php artisan route:clear
echo '====================================================100'

echo 'clear view'
php artisan view:clear
echo '====================================================100'

echo 'Fresh database'
php artisan migrate:fresh

echo 'Database seed'
php artisan db:seed

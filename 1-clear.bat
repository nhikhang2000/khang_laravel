composer dump-autoload
composer update
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
php artisan storage:link
php artisan --version


composer config -g repos.packagist composer https://packagist.jp
composer global require hirak/prestissimo
composer create-project --prefer-dist laravel/laravel ./src 6.0.*
exit

# laravel-starter
something new about laravel kid
// then cd php

cd php

// paste this to termainal of xamPP

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"

//then paste
echo @php "%~dp0composer.phar" %*>composer.bat

composer -V


composer global require "laravel/installer"


$HOME/.composer/vendor/bin

// build path at system variable

c:\xampp\php
C:\Users\d.dim\AppData\Roaming\Composer\vendor\bin



create porject or clone ;;

composer install

// use window command cp
copy.env .env.example

// linux
cp.env .env.example

//generate
php artisan key:generate

// start server

php artisan serve 

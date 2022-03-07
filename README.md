<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">

<img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
</p>

## About Travel Agency

- ** Laravel 8 **
- ** SCSS **


## Deploying 

'''bash
-  git clone https://github.com/stdimitrov/Travel_Agency.git
-  composer install
'''

-  Create .env file or copy the .env.example and rename it

'''bash
-  php artisan key:generate
-  php artisan config:cache
-  composer dump-autoload
'''

-  create DB table 
-  Configurate the .env 

'''bash
php artisan migrate
php artisan db:seed
php artisan serve
'''


## Еxpected errors

-  If you use Xampp or Lampp, CSS may not load. Look  the patch APP_URL in .env

## Security Vulnerabilities

If you discover a security vulnerability, please send an e-mail to Stanimir Dimitrov via [skdimitrov@yahoo.com](mailto:skdimitrov@yahoo.com). All security vulnerabilities will be promptly addressed.



## About app "Ami Code Pari Na"
### (Evaluation Project for Evident Bd Ltd)

I have built this web application with laravel framework. this project includes:

- Token based (JWT) authentication.
- Secure Login & Registration.
- Search value from given input.
- Storing input element with Sorted descending input element.


## Technical information

### Framework
- Laravel 8
### Database
- MySQL [MariaDB] 8.0.5
### Server
- NGINX (1.18.0)
### Programming Language
- PHP 8.0
### Frontend Design
- Bootstrap 5

## API Info
- API Route for get all input values:
  http://127.0.0.1:8000/api/all-searches/{user_id}
- Database Name: amicodingparina
# GitHub Link
https://github.com/hridoyraisul/Ami-Coding-Pari-Na

#Installation
Run these command as follows:
- git clone https://github.com/hridoyraisul/Ami-Coding-Pari-Na
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate
- php artisan serve

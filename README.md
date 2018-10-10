install and deploy
====
1. install dependencies
```bash
composer install && npm install
```

2. prepare public resources
```bash
npm run production
```
3. prepare environment
```bash
cp .env.example .env
vim .env
```
change this environment constants to your values
```text
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel_test
DB_USERNAME=korman
DB_PASSWORD=

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=2833ba21f07b53
MAIL_PASSWORD=3b90f427b33cc5
MAIL_ENCRYPTION=null
```
4. apply migrations
```bash
php artisan migrate:fresh --seed
```
5. start server
```bash
php artisan serve
```

Users for test
====
  
| email              | pass     | role       |  
|--------------------|----------|------------|  
|root@example.com    | 1root!   | Super Admin|  
|admin@example.com   | 1admin!  | Admin      |  
|manager@example.com | 1manager!| Manager    |  
|user@example.com    | 1user!   | User       |  
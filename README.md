## 📌 Installation
Untuk menjalankan project Laravel, lakukan langkah berikut :

1. Clone this repository
```sh
git clone https://github.com/awaqo/serkom.git
```
2. create environment file
```sh
cp .env.example .env
```
3. Install locally using Composer
```sh
composer install
```
4. Generate app key using command
```sh
php artisan key:generate
```
5. Create database and seeder data using command
```sh
php artisan migrate
```
6. Run the project
```sh
php artisan serve
```
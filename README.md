## Laravel 8.x Role Based Authentication

Laravel Role Based Authentication using [Laravel Breeze & Inertia](https://laravel.com/docs/8.x/starter-kits#laravel-breeze)

## Installation
First clone the repo locally:
```
git clone https://github.com/ahmed-kaif/laravel-multi-auth.git
```

Install PHP dependencies:
```
composer install
```
Install NPM dependencies:
```
npm install
```
Build assets:
```
npm run dev
```
Setup configuration:
```
cp .env.example .env
```
Generate application key:
```
php artisan key:generate
```
Create Database:

Create a MySQL database. You can also use another database (SQLite, Postgres), simply update your configuration accordingly.

Run database migrations:
```
php artisan migrate
```
Run database seeders:
```
php artisan db:seed
```
Run the dev server (the output will give the address):
```
php artisan serve
```

That's it! you are ready to go!!

**There are 3 roles and users:**
- Super Admin
- Admin
- User

Login With:

**User**
- **Email**: user@email.com
- **Password**: 123456789

**Super Admin**
- **Email**: super-admin@email.com
- **Password**: 123456789

**Admin**
- **Email**: admin@email.com
- **Password**: 123456789

Each role has its dedicated Dashboard. see the `routes/web.php` file.
Custom Route Middleware - `Permit.php`

Redirection managed in `Controllers/Auth/AuthenticatedSessionController.php`
And auto role allocation in `Controllers/Auth/RegisteredUserController.php` 

**Any new registered user will get the role _user_. To give a new role you can make your own controller or you can use tinker.**


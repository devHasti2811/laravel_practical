# Laravel CRUD Application

This is a simple Laravel CRUD application with user authentication, post management, image uploads, soft delete functionality, and pagination.

## Features
- User Authentication (Login, Register, Logout)
- Create, Read, Update, and Soft Delete Posts
- Image Uploads (Stored in `storage/app/public/posts`)
- Pagination for Post Listings
- Softdelete posts not Permentally
- Uses Bootstrap for UI Styling

## Prerequisites
Make sure you have the following installed:
- PHP >= 8.1
- Composer
- MySQL or any other supported database
- Node.js & npm (for frontend assets, optional)
- Laravel 10 

## Installation Steps

### 1. Clone the Repository
```sh
git clone git@github.com:devHasti2811/laravel_practical.git
cd laravel_practical
```

### 2. Install Dependencies
```sh
composer install
npm install
```

### 3. Create Environment File
Copy the `.env.example` file to `.env`:
```sh
cp .env.example .env
```

### 4. Configure Environment Variables
Open `.env` and set up your database connection:
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_user
DB_PASSWORD=your_database_password
```

### 5. Run Migrations
```sh
php artisan migrate
```

### 6. Create a Storage Link (for Images)
```sh
php artisan storage:link
```

### 7. Serve the Application
```sh
php artisan serve
npm run dev
```
Access the application at: `http://127.0.0.1:8000`

## Usage
### Register & Login
1. Visit `http://127.0.0.1:8000/register` to create an account.
2. Login at `http://127.0.0.1:8000/login`.

### Managing Posts
- Create a new post from `http://127.0.0.1:8000/posts/create`.
- Edit and delete posts from the dashboard.
- Deleted posts are moved to the trash and can be restored or permanently deleted.


## Additional Commands
- Clear cache: `php artisan cache:clear`
- View logs: `tail -f storage/logs/laravel.log`



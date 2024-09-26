
# Laravel User Notification System

### Installation Steps

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/virubhavsar/todo-list-api-laravel.git
   cd todo-list-api-laravel
   ```

2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

## Database Setup

### Migration
1. **Create a new database**
    ```bash
    todo-list-api
    ```
2. **Run migrations in the project console :"php artisan migrate"**
    ```bash
    php artisan migrate
    ```
3. **Seed the database with initial data:"php artisan db:seed"**
    ```bash
    php artisan db:seed
    ```
4. **Intall the Passport:"php artisan passport:install"**
    ```bash
    php artisan passport:install
    ```

## Configuration

1. **Copy the example environment file and update the configuration:**
   ```bash
   cp .env.example .env
   ```
2. **Update the `.env` file with your database credentials:**
   ```dotenv
   DB_DATABASE=todo-list-api
   DB_USERNAME=root
   DB_PASSWORD=root
   ```
3. **Generate an application key:"php artisan key:generate"**

## Running the Application

1. **Start the Laravel development server:**
   ```bash
   php artisan serve
   ```
### Accessing the Application
- Visit `http://localhost:8000/` in your browser.

2. **Dummy Username & Password**
    ```bash
    Email : john@example.com
    Password : password
    ```
3. **In Postman run as http://localhost:8000/api**
    ```bash
     POST : http://localhost:8000/api/login
     GET  : http://localhost:8000/api/tasks
     GET  : http://localhost:8000/api/tasks/1
     POST : http://localhost:8000/api/tasks
     PUT  : http://localhost:8000/api/tasks/7
     DELETE : http://localhost:8000/api/tasks/5
    ```

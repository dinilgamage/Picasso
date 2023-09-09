## Technologies Used in the Project

- Laravel 
- Bootstrap
- SQLite

## Installation Guide

Follow these steps to set up the system on your local machine:

1. Clone this repository to your local machine:

    ```shell
    git clone https://github.com/dinilgamage/Picasso.git
    
3. Change to the project directory:

    ```shell
    cd Picasso
    
5. Install Composer dependencies:

    ```shell
    composer install
    
7. Install NPM dependencies:

    ```shell
    npm install

9. Create a copy of the `.env.example` file and name it `.env`:

    ```shell
    cp .env.example .env
    
11. Generate an application key:

    ```shell
    php artisan key:generate

13. Configure your database connection in the `.env` file:

    ```shell
    DB_CONNECTION=sqlite
    DB_DATABASE=database.sqlite
    
14. Migrate the database:

    ```shell
    php artisan migrate

15. Start the development server:

    ```shell
    php artisan serve

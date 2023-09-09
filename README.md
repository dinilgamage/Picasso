## Technologies Used in the Project

- Laravel 
- Bootstrap
- SQLite

## Installation

Follow these steps to set up the system on your local machine:

1. Clone this repository to your local machine:

    shell
    git clone https://github.com/dinilgamage/Picasso.git
    

2. Change to the project directory:

    shell
    cd Picasso
    

3. Install Composer dependencies:

    shell
    composer install
    

4. Install NPM dependencies:

    shell
    npm install
    

5. Create a copy of the `.env.example` file and name it `.env`:

    shell
    cp .env.example .env
    

6. Generate an application key:

    shell
    php artisan key:generate
    

7. Configure your database connection in the `.env` file:

    shell
    DB_CONNECTION=sqlite
    DB_DATABASE=database.sqlite
    

9. Migrate the database:

    shell
    php artisan migrate
    

10. Start the development server:

    shell
    php artisan serve
    





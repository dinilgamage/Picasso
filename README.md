# Welcome to Picasso

## Features:
1. Admin dashboard with analytics, user, products, category, order management.
2. Artist dashboard with analytics, wishlist, cart, profile, products, order management, and purchase history.
3. Authentication and middleware.
4. Search and filtering.
5. View and rate all artists, view their average rating, view their details, contact them, and view artist-specific artworks.
6. View all artworks, view the total views of the artwork, and other details.

## Analytics:
1. Artist:
   - Profile Views
   - Total and average artwork views
   - Total and average ratings
   - Artworks on sale and Artworks sold
   - Total Revenue
2. Admin
   - Total users: Total number of users registered in the system
   - Artwork Clicks: Total number of views on all artworks in the system
   - Profile Clicks: Total number of profile views on all artists in the system
   - Total Categories: Total number of categories in the system
   - Ratings Submitted: Total number of users that have rated on artists
   - Total Orders Placed: Total orders placed in the system
   - Charts: 
        - Artwork Distribution: Portion of artworks that has been sold through the system compared to the total artworks on sale
        - Total Views by Category: The total views gained by all artworks in the system belonging to a respective category have gotten collectively.



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
15. Compile the front end:
    ```shell
    npm run dev
16. Start the development server:

    ```shell
    php artisan serve

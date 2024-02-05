# Welcome to Picasso

## Features:
1.	Login and Register
2.	Featured Content – Home Page	
3.	Discover Artists
4.	Discover Artworks
5.	Profile Management	
6.	Analytics (Artist and Admin)	
7.	Artwork Management (Artist and Admin)
8.	Order Management (Artist and Admin)
9.	Order History (Artist and Admin)
10.	User Management (Admin)
11.	Category Management	(Admin)
12.	Rating	
13.	Search and Filtering	
14.	Cart	
15.	Wish List	
16.	Checkout


## Analytics:
1. Artist:
   - Total artwork views: Total views for all artworks posted by the user
   - Average Views per Artwork: Total views divided by artworks posted
   - Total Ratings: Number of users that rated the user
   - Average Rating: The average rating
   - Profile View: Total number of users that viewed the user’s profile.
   - Artworks on Sale: Number of artworks listed that are not sold
   - Artworks Sold: Number of artworks listed that are sold
   - Best performing artwork: Highest viewed artwork of the user
   - Best performing category: Category that has the artworks with the highest number of collective views
   - Total Revenue: Total value of the artworks that were sold

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

## Admin Credentials 
- Email: admin@gmail.com
- Password: admin123

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

15. Seed the database with admin credentials:

    ```shell
    php artisan db:seed --class=UsersTableSeeder
    
    
16. Compile the front end:
    ```shell
    npm run dev
    
17. Start the development server:

    ```shell
    php artisan serve

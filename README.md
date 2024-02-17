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

## Screens
1.	Login and Register

![image](https://github.com/dinilgamage/Picasso/assets/113094888/e7717f56-2ce5-4b2f-9b63-dcac9ae0a0ee)
![image](https://github.com/dinilgamage/Picasso/assets/113094888/c49874d1-e2c3-4fc2-b269-929529e7fb06)

2.	Featured Content – Home Page
   
Trending Category   
![image](https://github.com/dinilgamage/Picasso/assets/113094888/cad8e7bf-a606-4709-a9dc-bae4c48bdfe2)
The home page features a Trending Category section where it displays the category that has artworks with the most amount of collective views, along with two highest views artworks from that category

Most Popular Artists
![image](https://github.com/dinilgamage/Picasso/assets/113094888/6ec55d78-5c53-4406-8878-c5c47612a26c)
This home page section displays the top 4 most popular artists, artists that have the highest profile views. It displays the name and the bio. With a view profile button

Most popular Artwork
![image](https://github.com/dinilgamage/Picasso/assets/113094888/0bcc22bb-3941-4406-b91d-3d2e86454f4c)
This home page showcases the highest viewed artwork, with an option to view it.

New Releases
![image](https://github.com/dinilgamage/Picasso/assets/113094888/6c458c66-1d89-4665-b664-8eb0452ee848)
This home page section showcases the latest releases, which are the artworks that were posted most recently.

Highest Rated Artist
![image](https://github.com/dinilgamage/Picasso/assets/113094888/d1dafce5-02f4-4aff-80ca-19c944278433)
This home page section is dedicated to the highest rated artist, which is the artists with the highest average rating.

3.	Discover Artists

![image](https://github.com/dinilgamage/Picasso/assets/113094888/0cf6bcac-0f76-4350-828d-2034a380ee99)
In this section users can discover artist, each card contains the artist’s name, headline, avatar and average rating. Users have an option to view the artist.

![image](https://github.com/dinilgamage/Picasso/assets/113094888/1a3b92a0-ec5d-46e8-ba92-1f13b811d8ae)
The full screen view of the artist, logged in users can access contact and rate the artist, users that are not logged in can view the artists artworks.

![image](https://github.com/dinilgamage/Picasso/assets/113094888/cf3b67e3-c863-4cb9-8805-59e364eafa66)
When view artworks is clicked the page seamlessly scrolls to the By Artist section with all that specific artists artworks, with an option to view them.

4.	Discover Artworks

![image](https://github.com/dinilgamage/Picasso/assets/113094888/7bd2471a-b8a0-4216-90dd-ee2d3c96c198)
Here you can view all artworks listed, with an option to filter them by category, and or view them, it also displays the number of views for that artwork.

![image](https://github.com/dinilgamage/Picasso/assets/113094888/03e617f6-a420-4677-a763-e17b28c9570c)
This is the full screen view for artworks, with all details of it, including the category it belongs to. A logged in user can choose to Add to cart and or Add to wish list, logged out users can only view the artist of the artwork.

5.	Profile Management

![image](https://github.com/dinilgamage/Picasso/assets/113094888/c86123d9-c3f5-4b2b-a97c-a34a29386bc0)
This is where the user can manage and view their profile, they have the option to edit profile and or edit contact details. 

![image](https://github.com/dinilgamage/Picasso/assets/113094888/484531c1-fdbb-4cba-8279-ab2bdd7816ec)
This is the edit profile view, where they can edit their profile details like avatar, bio, headline, etc. 

![image](https://github.com/dinilgamage/Picasso/assets/113094888/42a186a7-9848-4bdc-831d-3d85c184ac08)
This is the edit contact details view, they can edit their contact details like email and phone.

6.	Analytics 

6.1 Artist
![image](https://github.com/dinilgamage/Picasso/assets/113094888/14cefe24-59cc-410b-81ce-2516344ddde6)

The analytics page showcases the analytics for the user, I’ve made sure the analytics data is authentic and accurate so the user can make data drive choices:

- **Total artwork views:** 
  - Total views for all artworks posted by the user
  - The owner user cannot contribute to the view count of the artworks they own.
  - A single different user cannot spam view artworks; view count only goes up again 24 hours after the initial view

- **Average Views per Artwork:** Total views divided by artworks posted

- **Total Ratings:** Number of users that rated the user

- **Average Rating:** The average rating

- **Profile View:** 
  - Total number of users that viewed the user’s profile. 
  - The owner of the account cannot view their own account and get the views up
  - A single different user cannot spam view a certain user’s account; view count only goes up 24 hours after the initial view.

- **Artworks on Sale:** Number of artworks listed that are not sold

- **Artworks Sold:** Number of artworks listed that are sold

- **Best performing artwork:** Highest viewed artwork of the user

- **Best performing category:** Category that has the artworks with the highest number of collective views

- **Total Revenue:** Total value of the artworks that were sold

6.2 Admin
![image](https://github.com/dinilgamage/Picasso/assets/113094888/47e29776-3ecc-4b12-bc1e-4e4bf5bf8df0)

This analytics page showcases the for the admin user, they have an overview of the entire system:

- **Total users:** Total number of users registered in the system
- **Artwork Clicks:** Total number of views on all artworks in the system
- **Profile Clicks:** Total number of profile views on all artists in the system
- **Total Categories:** Total number of categories in the system
- **Ratings Submitted:** Total number of users that have rated on artists
- **Total Orders Placed:** Total orders placed in the system

- **Charts:** 
  - **Artwork Distribution:** Portion of artworks that has been sold through the system compared to the total artworks on sale
  - **Total Views by Category:** The total views gained by all artworks in the system belonging to a respective category have gotten collectively.

7.	Artwork Management

7.1 Artist
![image](https://github.com/dinilgamage/Picasso/assets/113094888/a733644f-f9db-45b1-9acc-1132af0ae90e)
The user can create artworks and edit and delete existing artworks they own. Following are the views for edit and create artworks.
![image](https://github.com/dinilgamage/Picasso/assets/113094888/24305757-460f-451a-af0d-65f93b696ba0)
![image](https://github.com/dinilgamage/Picasso/assets/113094888/7ca4b778-dda5-4896-a309-02f223d1ea70)

7.2 Admin
![image](https://github.com/dinilgamage/Picasso/assets/113094888/74737fa0-4ca9-414e-9031-2b235f1e251e)
The admin can create and edit and delete ALL artworks listed in the system. Following are the views for edit and create artworks
![image](https://github.com/dinilgamage/Picasso/assets/113094888/8ae3d253-0c8c-404f-a296-8ad92950635a)
![image](https://github.com/dinilgamage/Picasso/assets/113094888/a9d32889-2bf2-493d-bc88-10fe28896725)

8.	Order Management

8.1 Artist
![image](https://github.com/dinilgamage/Picasso/assets/113094888/712d238e-ce17-47cc-9dbb-63950435beb6)
The user can manage their orders here, they can accept or deny pending orders. If two orders were placed on one artwork the artist can choose which order to accept, when they do, the other order will be automatically denied. Once an order is accepted the Accept button will be disabled. The user can also filter by status: Accepted, Cancelled or Pending.

8.2 Admin
![image](https://github.com/dinilgamage/Picasso/assets/113094888/c0882667-fac3-4d1e-9527-15d804bfae63)
The admin can view and accept or deny ALL orders in the system. Admin can also view who the seller and the buyer are. Admin also can filter by status: Accepted, Cancelled or Pending

9.	Order History
   
9.1 Artist
![image](https://github.com/dinilgamage/Picasso/assets/113094888/dd61a3d9-e889-4b7f-9256-397b5548ad1f)
User can view their entire order history, and view the artwork responsible.

9.2 Admin
![image](https://github.com/dinilgamage/Picasso/assets/113094888/ce7055f6-6c7c-48e3-8919-2b84df377499)
The admin can keep a record of and view the history of all orders place in the system.

10.	User Management

![image](https://github.com/dinilgamage/Picasso/assets/113094888/ed6e2d6b-3e6c-4e7d-a32b-ea416e720225)
The admin can create edit or delete existing users and change their roles and permissions. Following are the edit and create views for user management.
![image](https://github.com/dinilgamage/Picasso/assets/113094888/696ce9a7-d4ff-4dd9-ac0f-9d9b9a9a3d8f)
![image](https://github.com/dinilgamage/Picasso/assets/113094888/3d597350-622c-4cb6-af27-997e903cd7c3)

11.	Category Management

![image](https://github.com/dinilgamage/Picasso/assets/113094888/c17ce450-128b-4261-b918-f698fbd8bf38)
The admin can create, edit and or delete categories in the system.
![image](https://github.com/dinilgamage/Picasso/assets/113094888/12080c17-4ea8-4bdf-bd2e-b2e2033755ae)
![image](https://github.com/dinilgamage/Picasso/assets/113094888/39cbc544-2873-42e0-9d3b-96e547463f33)


12.	Rating

![image](https://github.com/dinilgamage/Picasso/assets/113094888/438f1b9d-f9e6-45b2-aa9c-9090c4396e1a)
A logged in user can rate artist, from 1 to 5 showcased by the star system.

13.	Search and Filtering

![image](https://github.com/dinilgamage/Picasso/assets/113094888/0843308e-8f50-45d4-908f-29527d17cb9f)
The user can type into the search bar and search by artwork, artist, material, category, etc. While the user types the system provides auto suggestions and the user can click one of the suggestions to view the artists or artwork. Or they can hit enter and get all the results that match the keyword as shown below.
![image](https://github.com/dinilgamage/Picasso/assets/113094888/dbda5291-0cd8-4864-8495-6e1a281ad3f2)
Here it shows all results for ‘dinil’, there’s one artist and two artworks with matching keywords either in their title, description, bio, etc. In this case both artworks were posted by ‘dinil’.

14.	Cart

![image](https://github.com/dinilgamage/Picasso/assets/113094888/31a207b5-48ba-4f7d-8b04-693b99e4fbab)
Logged in users can add/remove items to cart. They can also clear cart and or proceed to checkout

15.	Wish List

![image](https://github.com/dinilgamage/Picasso/assets/113094888/e1576639-1c80-496f-ad04-b2c88f912dfe)
Logged in users can add/remove items from wish list, and clear the list. They can also view the artwork.

17.	Checkout

![image](https://github.com/dinilgamage/Picasso/assets/113094888/cbc34862-66ec-4138-a87a-c7150d6965b6)
Once user clicks go to checkout in the cart screen, they will be taken to checkout screen here, user can enter their delivery address and click place order



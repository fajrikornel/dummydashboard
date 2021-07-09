# Dummy Live Dashboard
Dashboard that displays dummy 'live' data. Built on top of PHP with Laravel.

## How to use:

1. Clone the git repository
2. Build repository using:

       npm install
       composer install
    
4. Create the .env file containing database and app key variables
5. Migrate the database:

       php artisan migrate:fresh
    
6. Run the dummy dashboard:

       php artisan serve

## Routes

| Route     | Function  |
| --------- | --------- |
| /         | Dashboard |
| /api/data | Data API  |

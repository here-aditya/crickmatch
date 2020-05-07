# Crickmatchapp

This project was generated with [Angular CLI](https://github.com/angular/angular-cli) version 6.2.9.

# Install laravel dependencies
------------------------------
composer dump-autoload
composer install


# Install DB tables & data
----------------------------
php artisan migrate
php artisan db:seed
 

# Run laravel at port 8000
-------------------------
php artisan serve


# To re-generate match fixtures
-----------------------------
# Step 1 :-
-----------
curl -X POST -i 'http://127.0.0.1:8000/oauth/token' --data 'username=here_aditya@yahoo.co.in&password=abcd1234&grant_type=password&client_id=2&client_secret=drUH4vTtEKKpAYweJg3ehxmpDposCHwUQVUz6ULR'


# Step 2 :-
-----------
curl -X POST -H 'Accept: application/json' -H 'Authorization: Bearer ACCESS-TOKEN' -i 'http://127.0.0.1:8000/api/matchfixture'




# Clone the server side codebase - git@github.com:here-aditya/crickmatch.git
The server should be running & codebase should be accessible via -  http://127.0.0.1:8000


# A Database dump file added to database/migrations/crickmatch.sql for full databse import without running migration or seed.
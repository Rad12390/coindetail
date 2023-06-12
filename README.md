step :

1) Laravel Installation by using this command
composer create-project --prefer-dist laravel/laravel
   
2) Install client library 
3) create controller,Migration(database file), Model(for database connectivity)
4) create command and register that command in kernel.php

I have created this command :

php artisan getting:data


If you run this command in the terminal then all the fetched data will save in the database(Table : coins_details)

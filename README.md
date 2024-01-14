# Travel Website Dengan Laravel

### Run Project

Go to the project directory

```bash
  cd TravelLokal
```

-   Rename .env.example file to .env
-   Go to localhost/phpmyadmin and make sure laravel database exists

```bash
    composer install
```

```bash
    php artisan key:generate
```
 If there is an error because of ```laravel/ui``` package 

 ```bash 
 composer require laravel/ui
 ```

```bash
    php artisan artisan migrate:fresh --seed
```


#### Login

-   email = admin@admin.com
-   password = 123

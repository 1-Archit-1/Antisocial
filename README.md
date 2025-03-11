# Antisocial
Social networking website using Laravel, MySQL and Tailwind CSS 

Setup steps: 

1) Install and setup php8 ,apache, MySQL 8, composer 
2) Configure apache and clone repository into the hosting directory
3) create .env file using .env.example , enter database and user details for MySQL
4) Run the following commands: 
    -composer install, to install packages
    -php artisan migrate:install
    -php artisan migrate:fresh
    -php artisan serve 
  The website should be running on your local server
    

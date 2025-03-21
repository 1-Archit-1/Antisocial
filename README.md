
# Antisocial

Antisocial is a social networking website built using Laravel, MySQL, and Tailwind CSS.

## Setup Instructions

Follow these steps to set up the project locally.

### Prerequisites

Before you begin, ensure that you have the following installed:

- PHP 8
- Apache
- MySQL 8
- Composer

### Installation Steps

1. **Install PHP, Apache, MySQL, and Composer**
   - Ensure that PHP 8, Apache, and MySQL 8 are installed on your machine.
   - You can refer to the official documentation for each of these tools for installation guides:
     - [PHP Installation](https://www.php.net/manual/en/install.php)
     - [Apache Installation](https://httpd.apache.org/docs/)
     - [MySQL Installation](https://dev.mysql.com/doc/)
     - [Composer Installation](https://getcomposer.org/doc/00-intro.md)

2. **Configure Apache and Clone the Repository**
   - Configure your Apache server to serve the application.
   - Clone the repository into the hosting directory of your Apache server.

   ```
   git clone https://github.com/1-Archit-1/Antisocial.git
   ```

3. **Create the `.env` File**
   - Copy the `.env.example` file to `.env` in the root directory of the project.

   ```
   cp .env.example .env
   ```

   - Open the `.env` file and configure your settings

4. **Install Dependencies and Set Up the Database**
   - Run the following commands to install the required packages and set up the database:

   ```
   composer install
   php artisan migrate:install
   php artisan migrate:fresh
   ```

5. **Start the Development Server**
   - To start the development server, run:

   ```
   php artisan serve
   ```

   The website should now be running on your local server at `http://127.0.0.1:8000`.

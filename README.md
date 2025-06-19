SeepMela 2082
<h2>Group Project</h2>
<h3>Dynamically generating Portfolio Website using Php Laravel and MySql</h3>
Members
<ul>
  <li><p>Shreyan Shrestha</p></li>
  <li>Dipak</li>
  <li>Nabin</li>
  <li>Bishal</li>
</ul>

Instructions:
Laravel Project
This is a Laravel-based web application that uses MySQL as its database. Follow the instructions below to pull and run the project on your local device.
Prerequisites
Before setting up the project, ensure you have the following installed on your device:

PHP (>= 8.1)
Composer (Dependency Manager for PHP)
MySQL (or another SQL database supported by Laravel)
Node.js and NPM (for front-end assets)
Git

Setup Instructions

Clone the Repository
Clone the project to your local machine using the following command:
git clone https://github.com/your-username/your-repository-name.git

Navigate to the project directory:
cd your-repository-name


Install PHP Dependencies
Install the required PHP packages using Composer:
composer install


Set Up Environment File
Copy the example environment file to create your .env file:
cp .env.example .env

Open the .env file in a text editor and configure your database settings:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password

Replace your_database_name, your_database_username, and your_database_password with your actual MySQL database credentials.

Generate Application Key
Generate a unique application key for your Laravel project:
php artisan key:generate


Set Up the Database
Create a MySQL database for the project (e.g., using a MySQL client like phpMyAdmin or the MySQL CLI):
CREATE DATABASE your_database_name;

Run the migrations to set up the database schema:
php artisan migrate

Optionally, seed the database with sample data (if seeders are included):
php artisan db:seed


Install Front-End Dependencies
Install and compile the front-end assets using NPM:
npm install
npm run dev

For production, use:
npm run build


Run the Application
Start the Laravel development server:
php artisan serve

By default, the application will be available at http://localhost:8000. Open this URL in your browser to access the project.


Additional Notes

Storage Permissions: Ensure the storage and bootstrap/cache directories are writable by your web server. You can set permissions using:
chmod -R 775 storage bootstrap/cache


Troubleshooting: If you encounter issues, check the Laravel logs in storage/logs/laravel.log for details.

Custom Configuration: If the project requires additional configuration (e.g., third-party API keys), check the .env.example file for required variables.


Contributing
Contributions are welcome! Please follow these steps:

Fork the repository.
Create a new branch (git checkout -b feature/your-feature).
Commit your changes (git commit -m 'Add your feature').
Push to the branch (git push origin feature/your-feature).
Open a Pull Request.

License
This project is licensed under the MIT License.


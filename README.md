# Laravel Country City User Management System

## Introduction
This is a simple web application built with Laravel that allows users to manage countries, cities, and users. It provides basic CRUD operations and role-based authentication for administrators and regular users.

## Features
- **Authentication**: Users can register, log in, and log out. Administrators have additional privileges.
- **Role-Based Access Control**: Administrators can add, edit, and delete countries, cities, and users. Regular users have view-only access.
- **Confirmation Dialog**: Users are prompted for confirmation before performing actions like deletion or modification.
- **Soft Delete**: Deleted data is soft deleted and can be viewed by administrators.
- **Data Export**: Administrators can export data tables as Excel file.
- **Interactive Display**: Clicking on a country displays its associated cities, and clicking on a city displays its associated users.

## Installation
1. Clone the repository:

   git clone https://github.com/Ista0x1/laravel-challenge.git
Navigate to the project directory:

cd laravel-challenge
Install composer dependencies:
 
composer install
Copy the .env.example file and rename it to .env. Update the database credentials and other configurations:

Install npm dependencies:

npm install
cp .env.example .env
Generate an application key:


php artisan key:generate
Run migrations and seed the database:

php artisan migrate --seed
Start the development server:

php artisan serve
Access the application in your web browser at http://127.0.0.1:8000/.

Usage
Visit the homepage to log in or register.
Administrators can manage countries, cities.
Regular users have read-only access to view data.
Bonus Features
To view deleted data, navigate to the "Deleted Data" section.
To export data, click on the "Export" button on the respective data table.

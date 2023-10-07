# Visit the master branch for code.

# React E-Commerce with Laravel Backend

This repository houses the backend component for the React_E-commerce project. The Laravel backend is responsible for handling routing, managing database interactions, and providing data to the React frontend.

## Project Overview

- **React Frontend**: The front is built using React.js and serves as the user interface for your e-commerce application. It communicates with the Laravel backend via API routes.

- **Laravel Backend**: Laravel is used for the backend to create API routes, handle database operations, and serve data to the React frontend. It acts as the core engine for the application.

- **MySQL Database**: Data is stored and managed in a MySQL database. Laravel's Eloquent ORM is used for seamless database interactions.

## Features

- **API Routes**: Laravel provides API routes to interact with the front end, including routes for fetching product data, user information, and handling orders.

- **Database Integration**: Laravel manages data in the MySQL database, ensuring efficient storage and retrieval of product information, user details, and order records.

## Getting Started

To set up this project locally, follow these steps:

1. Clone the repository: `git clone https://github.com/yourusername/react-ecommerce-laravel.git`

2. Install Laravel dependencies: `composer install`

3. Create a `.env` file and configure your MySQL database connection settings.

4. Run migrations: `php artisan migrate` to set up the database tables.

5. Start the Laravel server: `php artisan serve`

6. Clone and set up the React frontend from https://github.com/ZeshanArif27/React_Ecommerce (if not done already).

7. Configure React to make API requests to your Laravel routes.

## Contributors

- [Zeeshan Arif](https://github.com/ZeshanArif27) - Frontend and Backend Development

## License

This project is open-source and available under the [MIT License](LICENSE).

Feel free to contribute, report issues, or provide feedback to help improve this e-commerce project!

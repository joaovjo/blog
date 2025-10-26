# Project Overview

This is a Laravel 12 web application. It uses PHP 8.4, Pest for testing, Vite for frontend asset bundling, and Tailwind CSS for styling.

The project includes a `laravel/boost` package, which provides a set of custom tools for development and interaction with an AI assistant.

## Building and Running

### Initial Setup

To set up the project for the first time, run the following command:

```bash
composer run setup
```

This will:
1.  Install Composer dependencies.
2.  Create a `.env` file from `.env.example`.
3.  Generate an application key.
4.  Run database migrations.
5.  Install NPM dependencies.
6.  Build frontend assets.

### Development

To start the development servers (web server, queue worker, and Vite), run:

```bash
composer run dev
```

This will concurrently run:
*   `php artisan serve`
*   `php artisan queue:listen`
*   `npm run dev`

### Building Frontend Assets

To build the frontend assets for production, run:

```bash
npm run build
```

### Running Tests

To run the test suite, use the following command:

```bash
composer run test
```

This is an alias for `php artisan test`. You can pass filters to test specific files or tests:

```bash
# Run all tests in a specific file
php artisan test tests/Feature/ExampleTest.php

# Run a specific test by name
php artisan test --filter=testName
```

## Development Conventions

### Coding Style

This project uses `laravel/pint` for code formatting. Before finalizing changes, run the following command to format your code:

```bash
vendor/bin/pint --dirty
```

### Testing

*   Tests are written using [Pest](https://pestphp.com/).
*   New tests should be created using `php artisan make:test --pest <name>`.
*   Most tests should be feature tests, located in `tests/Feature`.
*   Unit tests are located in `tests/Unit`.
*   Browser tests can be created in `tests/Browser`.
*   Always write tests for new features and bug fixes.

### General Guidelines

*   Follow existing code conventions.
*   Use descriptive names for variables and methods.
*   Reuse existing components where possible.
*   Stick to the existing directory structure.
*   Do not change application dependencies without approval.
*   Use `php artisan make:` commands to create new classes (Controllers, Models, etc.).
*   Use Form Request classes for validation.
*   Use queued jobs for long-running tasks.
*   Use Laravel's built-in authentication and authorization features.
*   Use named routes (`route()` function) for generating URLs.
*   Access configuration values using `config()` helper, not `env()`.

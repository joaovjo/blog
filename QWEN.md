# Qwen Code Context File

## Project Overview

This is a Laravel 12 web application project, designed as a blog platform. It follows the Laravel framework architecture and includes both backend (PHP/Laravel) and frontend (JavaScript/Vite/Tailwind CSS) components.

### Key Technologies & Frameworks
- **Laravel 12**: PHP web application framework
- **PHP 8.2+**: Required PHP version
- **Vite**: Frontend build tool
- **Tailwind CSS**: CSS framework
- **SQLite**: Default database (configurable)
- **PestPHP**: Testing framework
- **Laravel Pint**: Code formatter

### Project Architecture
- `app/`: Main application code (Controllers, Models, etc.)
- `config/`: Laravel configuration files
- `database/`: Database migrations and seeders
- `public/`: Publicly accessible files
- `resources/`: Frontend assets (CSS, JS, Views)
- `routes/`: Application routes
- `storage/`: Storage for logs, cache, and file uploads
- `tests/`: Test files (Unit and Feature tests)

## Building and Running

### Initial Setup
```bash
# Install PHP dependencies
composer install

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run database migrations
php artisan migrate

# Install frontend dependencies
npm install

# Build frontend assets
npm run build
```

### Alternative Setup Command
The project includes a Composer script for one-step setup:
```bash
composer run setup
```

### Running the Application
```bash
# Development mode (with file watching and hot reload)
npm run dev
# OR use the composer script that runs all services
composer run dev

# Start Laravel server
php artisan serve
```

### Testing
```bash
# Run tests
composer run test
# OR
php artisan test
```

## Development Conventions

### Code Style
- The project uses Laravel Pint for PHP code formatting
- Follows PSR-12 coding standards
- Tailwind CSS for styling components

### Frontend Assets
- CSS files are located in `resources/css/`
- JavaScript files are located in `resources/js/`
- Asset compilation is handled by Vite

### Database
- SQLite is configured as default database
- Migrations are stored in `database/migrations/`
- Database configuration can be adjusted in `.env`

### Testing
- Unit tests are in `tests/Unit/`
- Feature tests are in `tests/Feature/`
- Uses PestPHP testing framework with Laravel plugin

### Configuration
- Environment configuration via `.env` file
- Framework configuration in `config/` directory
- Uses Laravel's configuration caching in production

## Key Commands

- `php artisan make:model ModelName` - Create a new model
- `php artisan make:controller ControllerName` - Create a new controller
- `php artisan migrate` - Run database migrations
- `php artisan migrate:rollback` - Rollback last migration batch
- `php artisan db:seed` - Seed the database
- `php artisan tinker` - Interactive shell
- `php artisan route:list` - List all routes
- `php artisan config:cache` - Cache configuration
- `php artisan view:cache` - Cache views
- `php artisan storage:link` - Create symbolic link for storage
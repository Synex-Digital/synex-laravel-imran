# synex-laravel-imran

Backend application for Synex Digital built with Laravel.

## Requirements

- PHP >= 8.2
- Composer
- MySQL

## Setup Instructions

1. Clone repository:
   ```bash
   git clone https://github.com/Synex-Digital/synex-laravel-imran.git
   cd synex-laravel-imran
   ```

2. Copy environment configuration:
   ```bash
   cp .env.example .env
   ```

3. Install dependencies and generate application key:
   ```bash
   composer install
   php artisan key:generate
   ```

4. Configure database in `.env` and run migrations:
   ```bash
   php artisan migrate
   ```

5. Run development server:
   ```bash
   php artisan serve
   ```

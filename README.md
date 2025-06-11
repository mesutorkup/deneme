# PHP ERP Skeleton

This repository contains a simplified ERP skeleton written in PHP using a basic MVC structure. It provides an example of user authentication with role-based access control and serves as a starting point for adding other modules like product management, orders, sample tracking, fabric tracking, and more.

## Setup

1. Create a MySQL database named `erp_db` (or edit `config/database.php` for custom settings).
2. Import the initial schema:

```bash
mysql -u root -p erp_db < database/sql/schema.sql
```

3. Point your web server's document root to the `public/` directory.
4. Manually insert a user into the `users` table to log in initially.

## Usage

- `/login` : User login page
- `/users` : List users (admin only)
- `/users/create` : Create new user (admin only)

Additional modules and database tables should be implemented following the same pattern in the `app/` directory.

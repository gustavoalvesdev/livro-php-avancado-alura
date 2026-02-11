# Livro PHP Avançado - Alura

A Laminas MVC application for learning advanced PHP concepts.

## Prerequisites

Before you begin, ensure you have the following installed:

- **PHP 8.0+** with PDO MySQL support
- **Composer** (https://getcomposer.org/)
- **MySQL/MariaDB** (via XAMPP, Docker, or standalone)
- **Git** (https://git-scm.com/)

## Setup Instructions

### 1. Clone the Repository

```bash
git clone https://github.com/yourusername/livro-php-avancado-alura.git
cd livro-php-avancado-alura
```

Replace `yourusername` with the actual GitHub repository owner.

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure the Database Connection

Copy the local configuration template:

```bash
cp config/autoload/local.php.dist config/autoload/local.php
```

Edit `config/autoload/local.php` and set your database credentials:

```php
<?php
return [
    'db' => [
        'driver' => 'Pdo',
        'dsn' => 'mysql:dbname=corps;hostname=localhost',
        'username' => 'root',
        'password' => ''  // Set your MySQL password here
    ],
    // ... rest of configuration
];
```

**Note for XAMPP users:** The default MySQL password is empty. Adjust as needed if you've set a custom password.

### 4. Create the Database

Create a MySQL database named `corps`:

```sql
CREATE DATABASE corps CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

### 5. Clear the Configuration Cache

**IMPORTANT:** This step is crucial when you first run the application or make configuration changes.

```bash
rm data/cache/module-config-cache.application.config.cache.php
```

Or on Windows PowerShell:

```powershell
Remove-Item "data\cache\module-config-cache.application.config.cache.php"
```

The application will automatically rebuild the cache on the next request.

### 6. Run the Application

**Using PHP's built-in web server:**

```bash
composer serve
```

The application will be available at `http://localhost:8080`

**Using XAMPP:**

1. Place the project in your htdocs folder
2. Configure a virtual host or access via `http://localhost/livro-php-avancado-alura/public`
3. Start Apache and MySQL from the XAMPP control panel

## Troubleshooting

### Database Connection Error: "Access denied for user ''@'localhost'"

This error occurs when:
1. The configuration cache is stale
2. Database credentials are not properly configured

**Solution:**
- Delete the cache file: `data/cache/module-config-cache.application.config.cache.php`
- Verify your database credentials in `config/autoload/local.php`
- Ensure MySQL is running

### Cache Not Being Rebuilt

If changes to configuration files aren't taking effect:

```bash
rm data/cache/module-config-cache.application.config.cache.php
```

The cache will be automatically recreated on the next page request.

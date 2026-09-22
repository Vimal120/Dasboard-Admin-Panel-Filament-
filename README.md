# Dasboard-Admin-Panel-Filament-
A scalable and customizable Admin Panel built with Laravel and Filament, designed for efficient application management, CRUD operations, authentication, and dashboard-based workflows.


# Dashboard Admin Panel

A modern, scalable, and customizable **Admin Dashboard & Management Panel** built with **Laravel** and **Filament**.

This project provides a clean foundation for building web applications that require an administrative interface for managing users, records, settings, reports, and other application data.

---

## 🚀 Features

* 🔐 Admin authentication
* 📊 Dashboard with key statistics
* 🧩 Filament-powered admin panel
* 👤 User management
* 📝 CRUD operations
* 🔎 Search, filtering, and sorting
* 📄 Pagination
* ⚙️ Application settings management
* 📱 Responsive admin interface
* 🛡️ Laravel authentication and authorization
* 🗄️ Database-driven management
* 🎨 Clean and customizable UI
* 📈 Dashboard widgets and reports
* 🔄 Reusable Filament Resources
* 🚀 Easy to extend with additional modules

---

## 🛠️ Tech Stack

| Technology        | Purpose                   |
| ----------------- | ------------------------- |
| **Laravel**       | Backend Framework         |
| **Filament**      | Admin Panel               |
| **PHP**           | Server-side Programming   |
| **MySQL**         | Database                  |
| **Livewire**      | Reactive UI               |
| **Tailwind CSS**  | UI Styling                |
| **Composer**      | PHP Dependency Management |
| **Node.js / NPM** | Frontend Asset Management |

---

## 📋 Requirements

Before installing the project, make sure your system has the following:

* PHP **8.2+**
* Composer
* Laravel
* MySQL **8.0+** or compatible database
* Node.js **18+**
* NPM
* Git

You can verify your installed versions:

```bash
php -v
composer -V
node -v
npm -v
git --version
```

> **Note:** PHP and Laravel version requirements may vary depending on the versions used by this project. Check `composer.json` for the exact requirements.

---

# 📥 Installation

## 1. Clone the Repository

```bash
git clone https://github.com/YOUR-USERNAME/dashboard-admin-panel.git
```

Move into the project directory:

```bash
cd dashboard-admin-panel
```

---

## 2. Install PHP Dependencies

Install Laravel dependencies using Composer:

```bash
composer install
```

---

## 3. Install Frontend Dependencies

```bash
npm install
```

---

## 4. Create Environment File

Copy the example environment file:

### Windows

```bash
copy .env.example .env
```

### Linux / macOS

```bash
cp .env.example .env
```

---

## 5. Generate Application Key

```bash
php artisan key:generate
```

---

# 🗄️ Database Configuration

Open the `.env` file and configure your database.

Example:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dashboard_admin_panel
DB_USERNAME=root
DB_PASSWORD=
```

Create the database in MySQL:

```sql
CREATE DATABASE dashboard_admin_panel;
```

Then run the migrations:

```bash
php artisan migrate
```

If the project contains seeders, you can also run:

```bash
php artisan db:seed
```

Or:

```bash
php artisan migrate --seed
```

---

# 🎨 Filament Setup

This project uses **Filament** to provide the administration panel.

If Filament is not already installed in the project, install it using Composer:

```bash
composer require filament/filament
```

Then install the Filament panel:

```bash
php artisan filament:install --panels
```

Create an administrator account:

```bash
php artisan make:filament-user
```

You will be asked for:

```text
Name:
Email:
Password:
```

Use these credentials to log in to the admin panel.

---

# ▶️ Running the Project

Start the Laravel development server:

```bash
php artisan serve
```

The application will normally be available at:

```text
http://127.0.0.1:8000
```

Start the frontend development server:

```bash
npm run dev
```

For a typical local development setup, keep both commands running:

```bash
php artisan serve
```

and:

```bash
npm run dev
```

---

# 🔐 Admin Panel

After creating a Filament administrator account, open:

```text
http://127.0.0.1:8000/admin
```

Log in using your administrator credentials.

> The exact panel URL can be changed in your Filament Panel Provider.

---

# 📸 Screenshots

Add screenshots of your dashboard here once the UI is ready.

### Dashboard

![Dashboard Screenshot](screenshots/dashboard.png)

### Login

![Login Screenshot](screenshots/login.png)

### User Management

![User Management Screenshot](screenshots/users.png)

### Create / Edit Record

![Create Record Screenshot](screenshots/create-record.png)

> Create a `screenshots` directory in the project root and place your screenshots inside it.

Example:

```text
dashboard-admin-panel/
│
├── screenshots/
│   ├── dashboard.png
│   ├── login.png
│   ├── users.png
│   └── create-record.png
```

---

# 📁 Project Structure

A typical project structure looks like:

```text
dashboard-admin-panel/
│
├── app/
│   ├── Filament/
│   │   ├── Resources/
│   │   ├── Pages/
│   │   └── Widgets/
│   │
│   ├── Http/
│   │   ├── Controllers/
│   │   └── Middleware/
│   │
│   ├── Models/
│   │
│   └── Providers/
│
├── bootstrap/
│
├── config/
│
├── database/
│   ├── factories/
│   ├── migrations/
│   └── seeders/
│
├── public/
│
├── resources/
│   ├── css/
│   ├── js/
│   └── views/
│
├── routes/
│   ├── web.php
│   └── console.php
│
├── storage/
│
├── tests/
│
├── .env.example
├── artisan
├── composer.json
├── package.json
└── README.md
```

---

# 🧩 Creating a Filament Resource

To create a new Filament CRUD resource:

```bash
php artisan make:filament-resource Product
```

This will generate the necessary files for managing the `Product` model through the Filament admin panel.

For example:

```text
app/
└── Filament/
    └── Resources/
        └── ProductResource/
            ├── Pages/
            └── ProductResource.php
```

---

# 📊 Creating a Dashboard Widget

Create a Filament widget:

```bash
php artisan make:filament-widget StatsOverview
```

Widgets can be used to display information such as:

* Total Users
* Total Orders
* Total Products
* Revenue
* Pending Requests
* Recent Activities

---

# 👤 Creating a Model

Create a Laravel model with migration:

```bash
php artisan make:model Product -m
```

Then define your database fields in the generated migration.

Run:

```bash
php artisan migrate
```

---

# 🔄 Common Artisan Commands

### Clear application cache

```bash
php artisan optimize:clear
```

### Run migrations

```bash
php artisan migrate
```

### Roll back migrations

```bash
php artisan migrate:rollback
```

### Create migration

```bash
php artisan make:migration create_products_table
```

### Create model

```bash
php artisan make:model Product
```

### Create controller

```bash
php artisan make:controller ProductController
```

### Create Filament resource

```bash
php artisan make:filament-resource Product
```

### Create Filament page

```bash
php artisan make:filament-page Reports
```

### Create Filament widget

```bash
php artisan make:filament-widget DashboardStats
```

---

# 🧪 Testing

Run the Laravel test suite using:

```bash
php artisan test
```

Or:

```bash
./vendor/bin/phpunit
```

---

# 🏗️ Production Build

Before deploying the application to production, install dependencies:

```bash
composer install --optimize-autoloader --no-dev
```

Build frontend assets:

```bash
npm run build
```

Optimize Laravel:

```bash
php artisan optimize
```

Run migrations:

```bash
php artisan migrate --force
```

Make sure the production `.env` contains the correct configuration:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
```

---

# 🔒 Security

For production environments:

* Never commit `.env` to Git.
* Use a strong `APP_KEY`.
* Set `APP_DEBUG=false`.
* Use secure database credentials.
* Keep Laravel, Filament, PHP, and dependencies updated.
* Use HTTPS.
* Restrict administrator access appropriately.
* Review user roles and permissions before deployment.

---

# 🔧 Configuration

Most application configuration can be found inside:

```text
config/
```

Environment-specific settings should be placed in:

```text
.env
```

Never commit sensitive credentials or API keys to the repository.

---

# 🌱 Recommended Development Workflow

Create a new branch for each feature:

```bash
git checkout -b feature/user-management
```

Make your changes and commit them:

```bash
git add .
git commit -m "Add user management"
```

Push the branch:

```bash
git push origin feature/user-management
```

Then create a Pull Request on GitHub.

---

# 🤝 Contributing

Contributions are welcome.

1. Fork the repository.
2. Create a feature branch.
3. Make your changes.
4. Run the test suite.
5. Commit your changes.
6. Push your branch.
7. Open a Pull Request.

Example:

```bash
git checkout -b feature/new-feature
```

---

# 📝 License

This project is open-source and available under the **MIT License**.

See the `LICENSE` file for more information.

---

# 👨‍💻 Author

**Your Name**

GitHub: `https://github.com/YOUR-USERNAME`

---

# ⭐ Support

If you find this project useful, consider giving the repository a ⭐ on GitHub.

---

## 📌 Project Status

🚧 **Active Development**

This project is continuously being improved with new features, UI enhancements, and administrative functionality.

---

## 📚 Useful Commands — Quick Reference

```bash
# Install dependencies
composer install
npm install

# Environment
cp .env.example .env
php artisan key:generate

# Database
php artisan migrate
php artisan db:seed

# Create admin
php artisan make:filament-user

# Development
php artisan serve
npm run dev

# Clear cache
php artisan optimize:clear

# Testing
php artisan test

# Production build
npm run build
php artisan optimize
```

---

**Built with ❤️ using Laravel & Filament.**

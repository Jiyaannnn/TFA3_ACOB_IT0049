# Ledgerline POS TFA3

**Making It Editable: Forms, Validation, and File Upload** is Jian Edward A. Acob's CodeIgniter 4 project for IT0049 Web System Technologies, section TW32. It extends the TFA2 POS directory with customer and staff creation, editing, form validation, and staff avatar uploads.

## Features

| Page | Purpose |
| --- | --- |
| `/` | Dashboard with live database counts |
| `/customers` | Customer listing with edit links |
| `/customers/new` | Validated new customer form |
| `/customers/{id}/edit` | Prefilled customer edit form |
| `/users` | Staff listing with prepared avatars or placeholder |
| `/users/new` | Validated new user form with unique username |
| `/users/{id}/edit` | Prefilled user edit form with JPG/PNG upload (2 MB maximum) |
| `/about` | Project and student information |

Invalid submissions show field errors while retaining typed values. A successful avatar upload is checked by the framework's image, MIME, and size rules. The image service makes a 320 × 320 JPEG in `public/uploads/avatars`; only the random filename is stored in `users.avatar`.

## Requirements

PHP 8.2 or newer with `intl`, `mysqli`, `mbstring`, `fileinfo`, and `gd`; Composer 2; and MySQL 8 or newer. The application is based on CodeIgniter 4.7.4 as pinned in `composer.lock`.

## Local setup

```bash
cd '/Users/jiyan/School Files/WebSys Tech/TFA3_ACOB_IT0049'
composer install
cp env .env
```

Set these values in `.env`, adjusting the MySQL username and password for your own machine. Do not commit `.env`.

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8083/'
database.default.hostname = 127.0.0.1
database.default.database = ledgerline_pos_tfa3
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
```

Import the submitted database export, then run the application:

```bash
mysql -u root < database/ledgerline_pos_tfa3.sql
php spark serve --port 8083
```

Open `http://localhost:8083/`. The export contains the five original customers and five original users, the avatar column, and CodeIgniter migration history. For a fresh empty database instead of the export, create `ledgerline_pos_tfa3`, run `php spark migrate`, then `php spark db:seed PosSeeder`.

## Deployment

The included `Dockerfile` and `render.yaml` are inherited from the TFA2 project. Hosting requires a persistent MySQL service and a persistent volume for `public/uploads/avatars`; otherwise uploaded pictures disappear after a redeploy. Configure the host's database environment values and `app.baseURL` without placing credentials in Git. Import `database/ledgerline_pos_tfa3.sql` into the hosted database before testing forms.

## Code map

- `app/Config/Routes.php` maps URLs to controller methods.
- `app/Controllers/Customers.php` and `Users.php` validate requests and save records.
- `app/Models/CustomerModel.php` and `UserModel.php` allow only intended database fields.
- `app/Views/customers` and `app/Views/users` render listings and forms.
- `app/Database/Migrations` creates the POS tables and avatar column.

The sample database data is for classroom demonstration. This activity does not include authentication or a production authorization system; deploy only for the required course demonstration.

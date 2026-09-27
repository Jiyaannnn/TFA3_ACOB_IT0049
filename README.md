# Ledgerline Refill TFA3

**Making It Editable: Forms, Validation, and File Upload** extends Jian Edward A. Acob's TSA1 Ledgerline Refill CodeIgniter application. The refill-shop design, Today page, full task list, demo profile, About page, and light/dark theme remain. TFA3 adds editable customer and staff accounts, validation, and staff profile pictures.

- **Student:** Jian Edward A. Acob
- **Section:** TW32
- **Course:** IT0049 - Web System Technologies
- **Framework:** CodeIgniter 4.7.4, PHP, MySQL

## Pages

| Route | Purpose |
| --- | --- |
| `/` | Refill-shop Today page with tasks scheduled for the current date |
| `/tasks` | Complete task list |
| `/profile` | Demo task-system user |
| `/about` | Shop concept and project details |
| `/customers` | Customer directory with edit actions |
| `/customers/new` | Validated new customer form |
| `/customers/{id}/edit` | Prefilled customer edit form |
| `/users` | Staff directory with avatars or placeholders |
| `/users/new` | Validated new user form |
| `/users/{id}/edit` | Prefilled user edit form with optional avatar upload |

Customer creation requires a full name and valid email. User creation requires a full name and unique username. Invalid submissions show field errors and preserve typed values. Edit forms are prefilled from MySQL. An avatar must be a real JPG or PNG no larger than 2 MB. CodeIgniter prepares a 320 × 320 JPEG in `public/uploads/avatars/`; `users.avatar` stores only its filename. Every POST form includes a CSRF token.

## Requirements

PHP 8.2+, Composer 2, MySQL 8+, and PHP extensions `intl`, `mysqli`, `mbstring`, `fileinfo`, and `gd` with JPEG support.

## Local setup

```bash
cd '/Users/jiyan/School Files/WebSys Tech/TFA3_ACOB_IT0049'
composer install
cp env .env
```

Set the following in `.env`. Use your own local MySQL credentials. The default and task databases are separate so the task-system `users` table never replaces the staff `users` table.

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8083/'
database.default.hostname = 127.0.0.1
database.default.database = ledgerline_pos_tfa3
database.default.username = root
database.default.password =
database.default.DBDriver = MySQLi
database.default.port = 3306
database.taskStore.database = ledgerline_refill_tfa3
```

Import the two included exports and start the app:

```bash
mysql -u root < database/ledgerline_pos_tfa3.sql
mysql -u root < database/ledgerline_refill_tfa3.sql
php spark serve --port 8083
```

Open `http://localhost:8083/`. Port 8083 keeps this project separate while an earlier app uses port 8080. You may choose another free port if `app.baseURL` matches it.

For fresh databases instead of the exports, create both databases, run `php spark migrate -g default` and `php spark migrate -g taskStore`, then run `php spark db:seed PosSeeder` and `php spark db:seed TaskSystemSeeder` exactly once.

## Database exports

- `database/ledgerline_pos_tfa3.sql`: five customers, five staff users, avatar column, and one generated initials avatar. The matching public image is included for demonstration.
- `database/ledgerline_refill_tfa3.sql`: nine task records across four dates, one demo task-system user, and migration history.

The TFA3 task data lives in a new database. The original TSA1 project and database were not changed.

## Files to explain

- `app/Config/Routes.php`: URLs and controller methods.
- `app/Controllers/Customers.php` and `Users.php`: validation, database writes, and upload preparation.
- `app/Models/CustomerModel.php` and `UserModel.php`: permitted database fields.
- `app/Models/TaskModel.php` and `TaskUserModel.php`: read-only task and profile data from `taskStore`.
- `app/Views/customers` and `app/Views/users`: directories and forms in the TSA1 refill-shop design.
- `app/Database/Migrations`: POS, task-system, and avatar schema changes.
- `docs/ACOB_IT0049_TFA3_MakingItEditable.docx`: report with real screenshots.

## Submission

Repository: https://github.com/Jiyaannnn/TFA3_ACOB_IT0049

The supplied TFA3 instructions also list a hosted working version. No live hosted URL has been verified for this project. The user chose GitHub publication as the publishing scope. The app has no authentication or role authorization; it is a classroom demonstration, not a production account system.

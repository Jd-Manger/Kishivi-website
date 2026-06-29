# Kishvi Laravel Deployment Checklist

Use this checklist when moving the site live as a Laravel project.

## 1. Server Requirements

- PHP 8.2 or newer must be enabled.
- Required PHP extensions for Laravel must be enabled, including OpenSSL, PDO, Mbstring, Tokenizer, XML, Ctype, JSON, BCMath, Fileinfo, and SQLite or the selected database driver.
- Composer must be available on the deployment machine or dependencies must be installed before upload.
- The web server document root must point to the Laravel `public` directory:
  - `PROJECT_ROOT/public`

Do not point the domain to the project root. The project root contains `.env`, `vendor`, `storage`, and other private files.

## 2. Upload Files

- Upload the full Laravel project to the server.
- Keep `.env` in the project root, not inside `public`.
- Ensure these directories are writable by the web server:
  - `storage`
  - `bootstrap/cache`

## 3. Install PHP Dependencies

From the project root:

```bash
composer install --no-dev --optimize-autoloader
```

If Composer is not available on hosting, run this locally with the same PHP major version and upload the generated `vendor` directory.

## 4. Environment Settings

Set production values in `.env`:

```dotenv
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-real-domain.com
```

Keep the existing `APP_KEY`. Do not expose it publicly.

## 5. Database

The project currently uses SQLite:

```dotenv
DB_CONNECTION=sqlite
```

For SQLite deployment:

- Confirm `database/database.sqlite` exists.
- Confirm the web server can write to the `database` directory and the SQLite file.
- Run migrations if deploying to a fresh database:

```bash
php artisan migrate --force
```

If the live server will use MySQL, update `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD`, then run migrations.

## 6. Mail / SMTP

The contact, post-a-job, and apply-job forms send mail through Laravel Mail.

Use Laravel-compatible SMTP settings:

```dotenv
MAIL_MAILER=smtp
MAIL_SCHEME=null
MAIL_HOST=smtp.example.com
MAIL_PORT=587
MAIL_USERNAME=your-smtp-username
MAIL_PASSWORD=your-smtp-password
MAIL_FROM_ADDRESS=noreply@your-real-domain.com
MAIL_FROM_NAME="${APP_NAME}"
CONTACT_RECEIVER_EMAIL=info@your-real-domain.com
```

Important:

- Do not set `MAIL_SCHEME=tls`; Laravel/Symfony Mailer expects `null`, `smtp`, or `smtps` depending on the provider.
- For most STARTTLS SMTP providers on port 587, keep `MAIL_SCHEME=null`.
- For SMTPS on port 465, use the provider's recommended settings, often `MAIL_SCHEME=smtps`.
- Test all three forms after deployment.

## 7. Frontend Assets

Blade views do not currently use `@vite`. The site loads CSS and JavaScript from `public/css` and `public/js`, plus external CDN assets.

Because `@vite` is not used, `npm install` and `npm run build` are not required for the current live pages.

Only run the Vite build if the Blade files are later changed to use `@vite`.

## 8. Laravel Cache Commands

After setting `.env`, run:

```bash
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan route:list
php artisan about
```

Optional production optimization after verifying everything works:

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## 9. Smoke Test

Check these URLs:

- `/`
- `/about`
- `/industries`
- `/contact`
- `/browse-jobs`
- `/companies`
- `/career-advice`
- `/candidates`
- `/up`

Submit test entries for:

- Contact form
- Post a Job form
- Apply Job form

Confirm each submission reaches `CONTACT_RECEIVER_EMAIL`.

## 10. Security Checks

- Visiting `https://your-real-domain.com/.env` must not show the environment file.
- Visiting `https://your-real-domain.com/composer.json` must not show Composer config.
- `APP_DEBUG` must be `false` on live.
- Directory listing must be disabled.
- Do not commit or share real `.env` secrets.

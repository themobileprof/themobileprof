# AI Coding Assistant Instructions for TheMobileProf

## Project Overview
This is a PHP-based website for TheMobileProf, offering mobile development training and services. It uses Bootstrap for frontend, MySQL for data storage, and Paystack for payments. The site includes static HTML pages, PHP forms for registrations/payments, and email notifications.

## Architecture
- **Frontend**: Static HTML with Bootstrap 4, jQuery, Font Awesome. Pages like `index.html`, `about.html`.
- **Backend**: PHP scripts in root and `includes/` for forms (`process.php`), payments (`includes/process_pay.php`), emails (`mail.php`).
- **Database**: MySQL tables (`courses`, `registration`) via `includes/db.php`.
- **Build**: Gulp for vendor libs (`gulpfile.js`), dev server (`gulp dev`).
- **Deps**: `composer.json` for PHPMailer, `package.json` for frontend libs.

## Key Workflows
- **Development**: `npm install && gulp vendor && gulp dev` starts BrowserSync server.
- **PHP Setup**: `composer install` for PHPMailer.
- **Forms**: POST to `process.php` for payments, `mail.php` for contact.
- **Payments**: Uses Paystack API in `includes/process_pay.php` (classes `process`, `verify`).
- **Emails**: Via PHPMailer or `mail()` function.

## Conventions
- **Includes**: Shared code in `includes/` (e.g., `require_once 'includes/db.php'`).
- **Namespaces**: PHP classes use namespaces (e.g., `use Process\process AS initiate;`).
- **Database**: mysqli queries; escape inputs with `addslash()` from `includes/common.php`.
- **Forms**: Hidden fields for course/month (e.g., `<input type="hidden" name="for" value="Mobile Productivity Training">`).
- **Sessions**: Store user data in `$_SESSION` (e.g., `$_SESSION['course']`).
- **Errors**: Basic validation; redirect on failure.

## Examples
- Add new course: Insert into `courses` table, update form in `mobile-dev-form.php`.
- Handle payment: Instantiate `new Process\process($link)`, call `process_pay()`.
- Send email: Use PHPMailer in `mail.php` or `send_payment_email()` method.

## Notes
- Database: Local MySQL (`seonigeria` db, user `admin`, pass `tummy`).
- Avoid direct DB queries; use classes in `includes/`.
- Test payments on Paystack sandbox before production.
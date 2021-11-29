# Laravel 8 From Scratch

## Project Title: Blog Posts


## Setup
1. Install Laravel - https://laravel.com/docs/8.x/installation
2. Install PHP https://www.php.net/
3. DB used: sqlite https://www.servermania.com/kb/articles/install-sqlite/
4. DB GUI: Tableplus https://tableplus.com/



## Coverage
1. Routes: Introduction, how to access, using wildcards
2. Blade: Introduction, Blade components, Layouts
3. Integration of DB: DB connections, Making Models & Migrations
4. Eloquent: Relationships, Route Model Binding, Mitigate Mass Assignment Vulnerabilities
5. Clockwork: Introduction, Solving N+1 request problems
6. Seeding: Working with Factories, Creating multiple data on one command, Apply relationship to existing Models
7. Integration: Code Clean-up
8. Searching, Filtering, Pagination
9. Authentication
10. Forms creation and Submition
11. Mailchimp API integration
12. Admin Section Creation and Set Authorization rules


# Usage
1. run `php artisan migrate`
2. run `php artisan serve`
3. go to url: `http://127.0.0.1:8000/`
4. login as admin/register
    - **admin email:** `zion@gmail.com`
    - **password:** `12345678`

# Note:
- Only admin can perform Create, Read, Update, Delete posts
- Non-admin users can only comment
- you can change admin user in `app/Providers/AppServiceProvider.php line 44`


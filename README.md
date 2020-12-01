## Standard Set Up

Application built on the newest version of Laravel & Vue using:
php artisan ui vue

When running the application use the standard up commands:

- create DB, I've named it 'challenge' on my local machine
- composer install
- php artisan key:generate
- php artisan cache:clear
- php artisan migrate
- php artisan storage:link

**Ensure your webserver is referencing the /public directory



## Code Guide & Walkthrough

API endpoints can be found here in: app/api.php
Web pages are the initial index page along with the redirect noted as /sh/{id}

Upon submission, I do a string match against the DB to verify whether or not a URL was submitted already, if so I get the ID of the entry & return it as such. If the URL is new to the system, a new entry is created & the newly submitted ID is returned to the URL.

Shortner page takes the ID defined in the URL & returns the original URL along with returning it as a redirect for the system to process.

I'll include a dump of the DB but its extremely small for now. I left an additional column within it if there was ever a desire to generate a random string for the URL instead of leveraging the ID.

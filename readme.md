# LBLOG (A Laravel blogging software) WRITTEN BY [GEORGE WHITCHER](http://www.georgewhitcher.com) #

Thank you for your interest in LBLOG!  To learn more please visit [http://www.georgewhitcher.com](http://www.georgewhitcher.com)

### INSTALLATION ###

* Setup a database and user.
* Configure the database file by going to /app/config/database.php
* Configure your site specific values by going to /app/config/lblog_config.php
* To setup the database and install the default user run php artisan migrate | php artisan db:seed
  (Alternatively a MYSQL file has been provided for manual installations through PHPMYADMIN)
* CHMOD 777 the folders /public/images/posts/featured & public/images/posts/content
* Your site should now be installed.

### ADMINISTRATION ###

* Visit YOUR-DOMAIN.COM/admin
* The default user and password is admin and password (once logged in it is suggested you change these immediately.  This can be done by visiting the users section of the administration.)

### QUESTIONS/COMMENTS ###

* If you have any questions the fastest way to get results is by visiting my website [http://www.georgewhitcher.com](http://www.georgewhitcher.com)
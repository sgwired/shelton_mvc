# shelton_mvc

Basic PHP7 MVC Framework

### Config Settings

---

`/app/config/config.php`

```
// DB Params
define('DB_HOST', 'localhost'); # localhost is good for most settings
define('DB_USER', '_YOUR_USER_');
define('DB_PASS', '_YOUR_PASS_');
define('DB_NAME', '_YOUR_DB_');
```

```
// URL Route
define('URLROOT', '_YOUR_URL_'); # example 'http://localhost/mvc'
// Site Name
define('SITENAME', '_YOUR_SITENAME_');
```

---

### There are 3 .htaccess files

`.htaccess #at the root level`

`public/.htaccess`

`app/.htaccess`

_All 3 .htaccess are required to have proper routing and security. However, you must set the RewriteBase in the public/.htaccess file for the framework to work. This should be set to the document root of your webserver_

```
<IfModule mod_rewrite.c>
    Options -Multiviews
    RewriteEngine On
    RewriteBase /mvc/public
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>
```

# Blogged
Blogged is a simple yet amazing blogging script in PHP, MYSQL, Bootstrap and Jquery
1) Create database.
2) Import blogged_db.sql into your database via phpMyAdmin import.
3) Set database details in config.php to match your database details i.e define('DB_HOST', ''), define('DB_NAME', ''), define('DB_USER', ''), define('DB_PASS', '')
4) Set up SMTP details i.e define('SMTP_HOST', ''), define('SMTP_USER', ''), define('SMTP_PASS', ''). This is for contact form feature.
5) If your using in sub-directory set ROOT_FOLDER variable under 'config.php' to that subdirectory name i.e for example if your subdirectory name is blog then your ROOT_FOLDER variable should be set to define('ROOT_FOLDER', "/blog");. If you are using in root let it be blank i.e define('ROOT_FOLDER', "");.
6) You can set SITE_NAME to whatever you like in config.php.
7) Enjoy 🚀  

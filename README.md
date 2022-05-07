# Blogged
Blogged is a simple yet amazing blogging script in PHP, MYSQL, Bootstrap and Jquery

1) Extract contents to a directory.

2) Create database. 

3) Import blogged_db.sql into your database via phpMyAdmin import.

4) Set database details in config.php to match your database details i.e define('DB_HOST', ''), define('DB_NAME', ''), define('DB_USER', ''), define('DB_PASS', '')

5) Set up SMTP details i.e define('SMTP_HOST', ''), define('SMTP_USER', ''), define('SMTP_PASS', ''). This is for contact form feature.

6) If your using in sub-directory set ROOT_FOLDER variable under 'config.php' to that subdirectory name i.e for example if your subdirectory name is blog then your ROOT_FOLDER variable should be set to define('ROOT_FOLDER', "/blog");. If you are using in root let it be blank i.e define('ROOT_FOLDER', "");.

7) You can set SITE_NAME to whatever you like in config.php, For example : define('SITE_NAME', "My blog");.

8) If you are using this script on Linux, please set 777 permissions on 'uploads' folder.

9) Username : admin password : Testweb@ for admin panel!

10) Enjoy 🚀  

<?php


//main variables
  define("SITE_URL", 'http://'.$_SERVER[HTTP_HOST]. '/emaileditor/');
  define("SITE_DIRECTORY",$_SERVER['DOCUMENT_ROOT'] .'/emaileditor/');


 //elements.json file directory
 define("ELEMENTS_DIRECTORY",SITE_DIRECTORY.'elements.json');

 //uploads directory,url
define("UPLOADS_DIRECTORY",SITE_DIRECTORY.'uploads/');
define("UPLOADS_URL",SITE_URL.'uploads/');

//EXPORTS directory,url
define("EXPORTS_DIRECTORY",SITE_DIRECTORY.'exports/');
define("EXPORTS_URL",SITE_URL.'exports/');

//Db settings

define('DB_SERVER','toota.mysql.ukraine.com.ua');
define('DB_USER','toota_dashemail');
define('DB_PASS' ,'rc8b6lag');
define('DB_NAME', 'toota_dashemail');

define('EMAIL_SMTP','EMAIL SMTP IN HERE');
define('EMAIL_PASS' ,'EMAIL PASSWORD IN HERE');
define('EMAIL_ADDRESS', 'EMAIL ADRESS IN HERE');


//for check used in demo or not
define('IS_DEMO', false);


?>

<?php   

//============ Need to be change project wise
define('ADMIN_LOGIN_PREFIX', 	'mstore_admin_'); 
define('USER_LOGIN_PREFIX', 	'mstore_user_');
define('ADMIN_COOKIE', 			'mstore_admin_remember_me');
define('USER_COOKIE', 			'mstore_remember_me');
define('VENDOR_COOKIE', 		'mstore_vendor_remember_me');
define('DRIVER_COOKIE', 		'mstore_driver_remember_me');

define('ADMIN_ENCRYPTION_KEY',  '25hjscesmtyumstorethh4582o');
define('USER_ENCRYPTION_KEY',   'gh56dfgf3grmstoreutgfcent2');

//============ Need to be change project wise
define('DB_PREFIX', ' msharmi_');
//================================ 


define('TBL_ADMIN' , DB_PREFIX . 'admin_user');
define('TBL_ADMIN_TYPE' , DB_PREFIX . 'admin_user_type');
define('TBL_ADMIN_LOG_DETAILS' , DB_PREFIX . 'admin_login_track');
define('TBL_ADMIN_MODULES' , DB_PREFIX . 'admin_modules');
define('TBL_ADMIN_ROLES' , DB_PREFIX . 'admin_roles');


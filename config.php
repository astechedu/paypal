<?php 
/* 
 * PayPal API configuration 
 * Remember to switch to your live API keys in production! 
 * See your keys here: https://developer.paypal.com/ 
 */ 
define('PAYPAL_API_CLIENT_ID', 'Client_ID');  

define('PAYPAL_API_SECRET', 'Secret'); 

define('PAYPAL_SANDBOX', true); //set false for production 
  
// Database configuration  
define('DB_HOST', 'localhost');  
define('DB_USERNAME', 'root');  
define('DB_PASSWORD', '');  
define('DB_NAME', 'paypal');
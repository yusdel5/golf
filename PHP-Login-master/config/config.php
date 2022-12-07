<?php


/**
 * Database Connection 
 * This is the place where your database constants are saved
 */

define("DB_HOST", "localhost");
define("DB_NAME", "sae3");
define("DB_USER", "yusdel");
define("DB_PASS", "root");




// Allow non-authentificated people to create accounts.
define('PUBLIC_REGISTER', true);  //true or false

// This delay is used to massively slowdown bruteforcing attack. 
define('LOGIN_FAIL_DELAY', 2);  //number in sec.

// Make your PHP-Login script unique.
define( 'NONCE_UNIQUE_KEY' , '' );

/// delay before a link or form become outdated and cause a logout
define( 'NONCE_DURATION' , 300 ); // 300 makes link or form good for 5 minutes from time of generation

/// force pages to use https
define( 'FORCE_HTTPS' , true ); //true or false




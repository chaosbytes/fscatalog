<?php

/**
 * A simple, clean and secure PHP Login Script
 *
 * ADVANCED VERSION
 * (check the website / github / facebook for other versions)
 *
 * A simple PHP Login Script without all the nerd bullshit.
 * Uses PHP SESSIONS, modern SHA512-password-hashing and salting
 * and gives the basic functions a proper login system needs.
 *
 * @package php-login
 * @author Panique <panique@web.de>
 * @link https://github.com/panique/php-login/
 * @license http://opensource.org/licenses/MIT MIT License
 */

// if you are using PHP 5.3 or PHP 5.4 you have to include the password_api_compatibility_library.php
// (this library adds the PHP 5.5 password hashing functions to older versions of PHP)
require_once "libraries/password_compatibility_library.php";

// include the configs / constants for the database connection
require_once "config/db.php";

// include the hashing cost factor (you can delete this line if you have never touched the cost factor,
// the script will then use the standard value)
//require_once("config/hashing.php");

// load the login class
require_once "classes/Login.php";

// create a login object. when this object is created, it will do all login/logout stuff automatically
// so this single line handles the entire login process.
$login = new Login($_POST);

if (isset($_POST['action'])) {
	if ($_POST['action'] === 'checkUserLoggedIn') {
		$data = checkUserLoggedIn($login);
		echo $data;
		die;
	} else if ($_POST['action'] === 'login') {
			$data = checkUserLoggedIn($login);
			echo $data;
			die;
		} else if ($_POST['action'] === 'logout') {
			$data = checkUserLoggedIn($login);
			echo $data;
			die;
		}
}

function checkUserLoggedIn($loginObj) {
	if (isset($_SESSION['user_name'])) {
		return true;
	} else {
		return false;
	}
}
?>
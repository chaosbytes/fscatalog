<?php

/**
 * Configuration file for: verification email data
 * This is the place where your constants are saved
 * 
 * For more info about constants please @see http://php.net/manual/en/function.define.php
 * If you want to know why we use "define" instead of "const" @see http://stackoverflow.com/q/2447791/1114320
 */

/** absolute URL to register.php, necessary for email verification links */
define("EMAIL_VERIFICATION_URL", "http://fscatalog.foursquaregames.com/php/php-login/register.php");

define("EMAIL_VERIFICATION_FROM", "noreply@fscatalog.foursquaregames.com");
define("EMAIL_VERIFICATION_SUBJECT", "Account Activation for Foursquare Catalog");
define("EMAIL_VERIFICATION_CONTENT", "Please click on this link to activate your account:");

<?php

// ---- LOG and DEBUGGING -----------------------------------------------------

$GLOBALS['config']['log_front'] = 0;
$GLOBALS['config']['log_debug'] = 0;
$GLOBALS['config']['log_message'] = 0;
$GLOBALS['config']['log_warn'] = 0;
$GLOBALS['config']['log_error'] = 1;
$GLOBALS['config']['log_core'] = 0;

$GLOBALS['config']['log_signature'] = '[TF]';

// --- APPLICATION CONTOLLER, ACTION and PAGES---------------------------------

$GLOBALS['config']['app'] = array(
	'default_controller'	=> 'task',
		// default controller to call (home page)
	'default_action'		=> 'main'
		// default action to call (home page)
);

$GLOBALS['config']['pages'] = array(
	'Todo'		=> 'task/main',
	'Report'	=> 'task/report',
	'Archives'	=> 'task/archives'
);

// ---- LANGUAGE DEFAULTS -----------------------------------------------------

$GLOBALS['config']['lang'] = array(
	'default'		=> 'en',
	'user'			=> 'en',
	'specialchars'	=> 2
);

// ---- DATE / TIME FORMATS ---------------------------------------------------

// date/time timezone and formats defaults
$GLOBALS['config']['datetime'] = array(
	'timezone_server'	=> new DateTimeZone(APP_TIMEZONE_SERVER),
	'timezone_user'		=> new DateTimeZone(APP_TIMEZONE_SERVER),
	'us_format'			=> false,
);
$GLOBALS['config']['datetime']['now'] = new DateTime('now', $GLOBALS['config']['datetime']['timezone_server']);

// --- Specific DATE FORMATS -------------------------------------------------

define("APP_DATE","%d/%m");
define("APP_DATETIME","%d/%m <small>%H:%M</small>");

// --- TASKFREAK DEFAULTS ---------------------------------------------------------

$GLOBALS['config']['task'] = array(
	'date'		=> APP_SQL_TODAY, // default date is today
	'validate'	=> true	// add validation button
);

$GLOBALS['config']['task']['priority'] = array(
	'options' => array(
		1 => '1) urgent',
		2 => '2) important',
		3 => '3) quickly',
		4 => '4) pretty soon',
		5 => '5) normal',
		6 => '6) after',
		7 => '7) later',
		8 => '8) anytime',
		9 => '9) whatever'
	),
	'default'	=> 5
);

// ---- DEFAULT Javascript ----------------------------------------------------

$GLOBALS['config']['header']['js'] = array(
	'jquery-1.4.2.min.js',
	// 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js',
);


// ---- SKINS and Templates ---------------------------------------------------

$GLOBALS['config']['skin'] = 'default';

// ---- LANGUAGE --------------------------------------------------------------

$GLOBALS['config']['lang']['default'] = 'en';
$GLOBALS['config']['lang']['user'] = 'en';
$GLOBALS['config']['lang']['specialchars'] = 2;
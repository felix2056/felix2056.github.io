<?php
ob_start();
session_start();
error_reporting(0);  
ini_set('display_startup_errors',0);  
ini_set('display_errors',0);
set_time_limit(0);
include __DIR__ . "/Medoo.php";
include __DIR__ . "/functions.php";
date_default_timezone_set('Asia/Kolkata');
$datetime   = date('Y-m-d G:i');

//Admin
$username 	= "admin";
$password 	= "admin!";

//Database Details
use Medoo\Medoo;
$db = new Medoo([
	'database_type' => 'mysql',
	'database_name' => 'admin_default',
	'server' 		=> 'localhost',
	'username' 		=> 'abc',
	'password' 		=> 'xyz',
 ]);


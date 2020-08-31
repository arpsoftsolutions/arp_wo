<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db   = "db_wo";
	
	// error handling
	//error_reporting(0);

	// set location
	define('ADMINPATH', 'http://localhost/arp_wo/admin/');
	define('HOMEPATH', 'http://localhost/arp_wo/');

	mysql_connect($host, $user, $pass);

	mysql_select_db($db);
?>
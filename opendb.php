<?php
	$dbhost = 'localhost';
	$dbuser = 'wq';
	$dbpass = '';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
	$dbname = 'wq';
	$dbc = mysql_select_db($dbname) or die("Failed to connect");
?>
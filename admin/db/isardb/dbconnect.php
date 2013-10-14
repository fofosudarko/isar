<?php

// Create user-defined constants

$mysql_host = "mysql10.000webhost.com";
$mysql_user = "a2021051_root";
$mysql_password = "qwASzxopKLnm1290";
$mysql_database = "a2021051_isar";


// Make a database connection

$dbLink = @mysqli_connect("$mysql_host", "$mysql_user", "$mysql_password", "$mysql_database");

// Checking valid db connection

if ( !$dbLink ) {
	trigger_error('Could not create link to MySQL'.mysqli_connect_error());
}

?>

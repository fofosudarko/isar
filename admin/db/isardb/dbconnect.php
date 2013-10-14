<?php

// Create user-defined constants

$mysql_host = "localhost";
$mysql_user = "root";
$mysql_password = "daCODEr1";
$mysql_database = "isar";


// Make a database connection

$dbLink = @mysqli_connect("$mysql_host", "$mysql_user", "$mysql_password", "$mysql_database");

// Checking valid db connection

if ( !$dbLink ) {
	trigger_error('Could not create link to MySQL'.mysqli_connect_error());
}

?>

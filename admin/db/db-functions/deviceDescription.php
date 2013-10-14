<?php
include_once ("/home/a2021051/public_html/sar/direct/globalvars.php");

function show_device_description ($did)
{
    // Including path to database connection
    $doc_root = $_SERVER["DOCUMENT_ROOT"];
    include ("/home/a2021051/public_html/admin/db/isardb/dbconnect.php");

    $query = "SELECT device_description FROM device_description WHERE device_id=$did";

    $query_results = mysqli_query ($dbLink, $query) or die (mysqli_error());

    while ($device_description = mysqli_fetch_array ($query_results, MYSQLI_ASSOC))
    {
        return $device_description["device_description"];
    }

    // Close database connection
    mysqli_close ($dbLink);
}

function show_all_device_descriptions ()
{
	global $PATH;
	include ($PATH."admin/db/isardb/dbconnect.php");

	$query = "SELECT * FROM device_description";

	$query_results = mysqli_query ($dbLink, $query) or die (mysql_error ());

	// creating devices array
	$i = 0;
	$j = 0;

	while ($device_description_rows = mysqli_fetch_array ($query_results, MYSQLI_ASSOC)) {
		$devices_id[$i++] = $device_description_rows["device_id"];
		$devices_description[$j++] = $device_description_rows["device_description"];
	}

	return array ($devices_id, $devices_description);
	
	// Close database connection
	mysqli_close ($dbLink);
}
?>

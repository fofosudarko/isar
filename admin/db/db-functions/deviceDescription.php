<?php
function deviceDescription ($did)
{
    // Including path to database connection
    $doc_root = $_SERVER["DOCUMENT_ROOT"];
    include ("/home/fod/www/projects/isar/admin/db/isardb/dbconnect.php");

    $query = "SELECT device_description FROM device_description WHERE device_id=$did";

    $getQueryResult = mysqli_query($dbLink, $query) or die (mysqli_error());

    while ($deviceDescription = mysqli_fetch_array($getQueryResult, MYSQLI_ASSOC))
    {
        return $deviceDescription["device_description"];
    }

    // Close database connection
    mysqli_close($dbLink);
}
?>

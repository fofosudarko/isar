<?php
// Creating brand name function page

function brandName($bid)
{
    // no positional parameters
    // Function namespace
	$doc_root = $_SERVER["DOCUMENT_ROOT"];
	include ("/home/a2021051/public_html/admin/db/isardb/dbconnect.php");

    $query = "SELECT brand_name FROM brand WHERE brand_id=$bid";
    $queryResult = mysqli_query($dbLink, $query) or die(mysqli_error());

    while ($brandName = mysqli_fetch_array($queryResult, MYSQLI_ASSOC))
    {
        return $brandName['brand_name'];
    }

    mysqli_close($dbLink);
}

?>

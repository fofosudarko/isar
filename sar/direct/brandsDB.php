<?php
// Creating database connection
function brandsDB() {
    // Primarily going to return array of brand names
    // Creating database connection to isar

    include("/home/a2021051/public_html/admin/db/isardb/dbconnect.php");

    $query = "select * from brand";

    $queryResult = mysqli_query($dbLink, $query) or die(mysql_error());

    // Creating brandsDB array
    $i = 0;
    $m = 0;

    while ($brandNameRow = mysqli_fetch_array($queryResult, MYSQLI_ASSOC)) {
        $brandsDBid[$m] = $brandNameRow['brand_id'];
        $brandsDBName[$i] = $brandNameRow['brand_name'];
        $m++;
        $i++;
    }

	$brandsDB = array(
		"brandsDBid" => $brandsDBid,
		"brandsDBName" => $brandsDBName,
	);

    return $brandsDB;

    // Closing database connection
    mysqli_close($dbLink);
}
?>

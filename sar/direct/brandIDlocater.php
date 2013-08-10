<?
// Creating brand id locater function

function brandIDlocater($brandName="") {
	// Creating path to database connection
	include_once ("/home/fod/www/projects/isar/admin/db/isardb/dbconnect.php");

	// trimming whitespaces from both sides of parameter
	$brandName = trim($brandName);

	// Making MySQL query
	$query = "select brand_id from brand where brand_name = '$brandName'";

	// Retrieving query result
	$queryResult = mysqli_query($dbLink, $query) or die (mysqli_error());

	// Returning query result
	while ($brandID = mysqli_fetch_array($queryResult, MYSQLI_ASSOC)) {
		return $brandID["brand_id"];
	}

	// Closing database connection
	mysqli_close($dbLink);
}

?>

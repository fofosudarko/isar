<?php

function appleModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

if (isset($_GET["submit-ipad"])) {
	$encryptedCategoryID = $_GET["select-ipad-model"];
	$cid = base64_decode($encryptedCategoryID);
	$getResults = results($brandName, $cid);
	return $getResults;
}
else if (isset($_GET["submit-iphone"])) {
	$encryptedCategoryID = $_GET["select-iphone-model"];
	$cid = base64_decode($encryptedCategoryID);
	$getResults = results($brandName, $cid);
	return $getResults;
}

}
?>

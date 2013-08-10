<?php

function appleModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

if (isset($_POST["submit-ipad"])) {
	$encryptedCategoryID = $_POST["select-ipad-model"];
	$cid = base64_decode($encryptedCategoryID);
	$getResults = results($brandName, $cid);
	return $getResults;
}
else if (isset($_POST["submit-iphone"])) {
	$encryptedCategoryID = $_POST["select-iphone-model"];
	$cid = base64_decode($encryptedCategoryID);
	$getResults = results($brandName, $cid);
	return $getResults;
}

}
?>

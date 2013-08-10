<?php

function doroModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

if (isset($_POST["submit-HandleEasy"])) {
    $encryptedCategoryID = $_POST["select-handleEasy-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
}
else if (isset($_POST["submit-HandlePlus"])) {
    $encryptedCategoryID = $_POST["select-handlePlus-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
}
else if (isset($_POST["submit-PhoneEasy"])) {
    $encryptedCategoryID = $_POST["select-phoneEasy-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
}
}
?>

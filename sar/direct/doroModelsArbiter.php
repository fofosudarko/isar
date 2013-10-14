<?php

function doroModelsArbiter($brandName) {

include_once ("/home/a2021051/public_html/sar/direct/results.php");

if (isset($_GET["submit-HandleEasy"])) {
    $encryptedCategoryID = $_GET["select-handleEasy-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
}
else if (isset($_GET["submit-HandlePlus"])) {
    $encryptedCategoryID = $_GET["select-handlePlus-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
}
else if (isset($_GET["submit-PhoneEasy"])) {
    $encryptedCategoryID = $_GET["select-phoneEasy-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
}
}
?>

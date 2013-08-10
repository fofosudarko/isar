<?php

function lgModelsArbiter($brandName) {
    
$brandName = $_POST["brand-name"];

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");    
    
if (isset($_POST["submit-BC-model"])) {
    $encryptedCategoryID = $_POST["select-bc-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	 return $getResults;
} else if (isset($_POST["submit-FG-model"])) {
    $encryptedCategoryID = $_POST["select-fg-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_POST["submit-GBDS-model"])) {
    $encryptedCategoryID = $_POST["select-gbds-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_POST["submit-GTUW-model"])) {
    $encryptedCategoryID = $_POST["select-gtuw-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_POST["submit-KCEF-model"])) {
    $encryptedCategoryID = $_POST["select-kcef-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_POST["submit-KGMP-model"])) {
    $encryptedCategoryID = $_POST["select-kgmp-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_POST["submit-KSU-model"])) {
    $encryptedCategoryID = $_POST["select-ksu-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_POST["submit-LM-model"])) {
    $encryptedCategoryID = $_POST["select-lm-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_POST["submit-PS-model"])) {
    $encryptedCategoryID = $_POST["select-ps-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_POST["submit-TU-model"])) {
    $encryptedCategoryID = $_POST["select-tu-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
}
}
?>

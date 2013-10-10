<?php

function lgModelsArbiter($brandName) {
    
$brandName = $_GET["brand-name"];

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");    
    
if (isset($_GET["submit-BC-model"])) {
    $encryptedCategoryID = $_GET["select-bc-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	 return $getResults;
} else if (isset($_GET["submit-FG-model"])) {
    $encryptedCategoryID = $_GET["select-fg-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_GET["submit-GBDS-model"])) {
    $encryptedCategoryID = $_GET["select-gbds-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_GET["submit-GTUW-model"])) {
    $encryptedCategoryID = $_GET["select-gtuw-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_GET["submit-KCEF-model"])) {
    $encryptedCategoryID = $_GET["select-kcef-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_GET["submit-KGMP-model"])) {
    $encryptedCategoryID = $_GET["select-kgmp-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_GET["submit-KSU-model"])) {
    $encryptedCategoryID = $_GET["select-ksu-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_GET["submit-LM-model"])) {
    $encryptedCategoryID = $_GET["select-lm-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_GET["submit-PS-model"])) {
    $encryptedCategoryID = $_GET["select-ps-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
} else if (isset($_GET["submit-TU-model"])) {
    $encryptedCategoryID = $_GET["select-tu-model"];
    $cid = base64_decode($encryptedCategoryID);
    $getResults = results($brandName, $cid);
	return $getResults;
}
}
?>

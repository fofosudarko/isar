<?php

function htcModelsArbiter($brandName) {

include_once ("/home/a2021051/public_html/sar/direct/results.php");

    if (isset($_GET["submit-7AC-model"])) {
        $encryptedCategoryID = $_GET["select-7ac-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-DEF-model"])) {
        $encryptedCategoryID = $_GET["select-def-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-GH-model"])) {
        $encryptedCategoryID = $_GET["select-gh-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-ILM-model"])) {
        $encryptedCategoryID = $_GET["select-ilm-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-PR-model"])) {
        $encryptedCategoryID = $_GET["select-pr-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-S-model"])) {
        $encryptedCategoryID = $_GET["select-s-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-ST-model"])) {
        $encryptedCategoryID = $_GET["select-st-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-Touch-model"])) {
        $encryptedCategoryID = $_GET["select-touch-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-TW-model"])) {
        $encryptedCategoryID = $_GET["select-tw-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    }
}
?>

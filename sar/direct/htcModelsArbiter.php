<?php

function htcModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

    if (isset($_POST["submit-7AC-model"])) {
        $encryptedCategoryID = $_POST["select-7ac-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-DEF-model"])) {
        $encryptedCategoryID = $_POST["select-def-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-GH-model"])) {
        $encryptedCategoryID = $_POST["select-gh-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-ILM-model"])) {
        $encryptedCategoryID = $_POST["select-ilm-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-PR-model"])) {
        $encryptedCategoryID = $_POST["select-pr-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-S-model"])) {
        $encryptedCategoryID = $_POST["select-s-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-ST-model"])) {
        $encryptedCategoryID = $_POST["select-st-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-Touch-model"])) {
        $encryptedCategoryID = $_POST["select-touch-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-TW-model"])) {
        $encryptedCategoryID = $_POST["select-tw-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    }
}
?>

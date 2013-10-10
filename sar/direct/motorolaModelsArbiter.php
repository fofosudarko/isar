<?php

function motorolaModelsArbiter($brandName) {
    
include_once ("/home/fod/www/projects/isar/sar/direct/results.php");     
    
    if (isset($_GET["submit-A-model"])) {
        $encryptedCategoryID = $_GET["select-A-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-C-model"])) {
        $encryptedCategoryID = $_GET["select-C-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-DEFY_E-model"])) {
        $encryptedCategoryID = $_GET["select-DEFY-E-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-MOTO_KRZR_PEBL-model"])) {
        $encryptedCategoryID = $_GET["select-MOTO-KRZR-PEBL-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-RAZR-model"])) {
        $encryptedCategoryID = $_GET["select-RAZR-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-RIZR-model"])) {
        $encryptedCategoryID = $_GET["select-RIZR-ROKR-MP-SLVR-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-V-model"])) {
        $encryptedCategoryID = $_GET["select-V-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_GET["submit-W-model"])) {
        $encryptedCategoryID = $_GET["select-W-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    }
}

?>

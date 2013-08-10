<?php

function motorolaModelsArbiter($brandName) {
    
include_once ("/home/fod/www/projects/isar/sar/direct/results.php");     
    
    if (isset($_POST["submit-A-model"])) {
        $encryptedCategoryID = $_POST["select-A-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-C-model"])) {
        $encryptedCategoryID = $_POST["select-C-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-DEFY_E-model"])) {
        $encryptedCategoryID = $_POST["select-DEFY-E-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-MOTO_KRZR_PEBL-model"])) {
        $encryptedCategoryID = $_POST["select-MOTO-KRZR-PEBL-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-RAZR-model"])) {
        $encryptedCategoryID = $_POST["select-RAZR-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-RIZR-model"])) {
        $encryptedCategoryID = $_POST["select-RIZR-ROKR-MP-SLVR-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-V-model"])) {
        $encryptedCategoryID = $_POST["select-V-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    } else if (isset($_POST["submit-W-model"])) {
        $encryptedCategoryID = $_POST["select-W-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
	    return $getResults;
    }
}

?>

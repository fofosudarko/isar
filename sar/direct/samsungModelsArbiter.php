<?php

function samsungModelsArbiter($brandName)
{

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

    if (isset($_POST["submit-BCE-model"])) {
        $encryptedCategoryID = $_POST["select-BCE-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-GTBC-model"])) {
        $encryptedCategoryID = $_POST["select-GTBC-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-GTEI-model"])) {
        $encryptedCategoryID = $_POST["select-GTEI-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-GTMPS-model"])) {
        $encryptedCategoryID = $_POST["select-GTMPS-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-IJMS-model"])) {
        $encryptedCategoryID = $_POST["select-IJMS-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-SABC-model"])) {
        $encryptedCategoryID = $_POST["select-SGH-ABC-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-SD-model"])) {
        $encryptedCategoryID = $_POST["select-SGH-D-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-SE-model"])) {
        $encryptedCategoryID = $_POST["select-SGH-E-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-SFG-model"])) {
        $encryptedCategoryID = $_POST["select-SGH-FG-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-SIJ-model"])) {
        $encryptedCategoryID = $_POST["select-SGH-IJ-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-SLM-model"])) {
        $encryptedCategoryID = $_POST["select-SGH-LM-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-SPSUV-model"])) {
        $encryptedCategoryID = $_POST["select-SGH-PSUV-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-SX-model"])) {
        $encryptedCategoryID = $_POST["select-SGH-X-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-SZ-model"])) {
        $encryptedCategoryID = $_POST["select-SGH-Z-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-Ultra-model"])) {
        $encryptedCategoryID = $_POST["select-Ultra-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    }
}
?>

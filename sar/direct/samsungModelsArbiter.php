<?php

function samsungModelsArbiter($brandName)
{

include_once ("/home/a2021051/public_html/sar/direct/results.php");

    if (isset($_GET["submit-BCE-model"])) {
        $encryptedCategoryID = $_GET["select-BCE-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-GTBC-model"])) {
        $encryptedCategoryID = $_GET["select-GTBC-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-GTEI-model"])) {
        $encryptedCategoryID = $_GET["select-GTEI-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-GTMPS-model"])) {
        $encryptedCategoryID = $_GET["select-GTMPS-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-IJMS-model"])) {
        $encryptedCategoryID = $_GET["select-IJMS-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-SABC-model"])) {
        $encryptedCategoryID = $_GET["select-SGH-ABC-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-SD-model"])) {
        $encryptedCategoryID = $_GET["select-SGH-D-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-SE-model"])) {
        $encryptedCategoryID = $_GET["select-SGH-E-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-SFG-model"])) {
        $encryptedCategoryID = $_GET["select-SGH-FG-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-SIJ-model"])) {
        $encryptedCategoryID = $_GET["select-SGH-IJ-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-SLM-model"])) {
        $encryptedCategoryID = $_GET["select-SGH-LM-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-SPSUV-model"])) {
        $encryptedCategoryID = $_GET["select-SGH-PSUV-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-SX-model"])) {
        $encryptedCategoryID = $_GET["select-SGH-X-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-SZ-model"])) {
        $encryptedCategoryID = $_GET["select-SGH-Z-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-Ultra-model"])) {
        $encryptedCategoryID = $_GET["select-Ultra-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    }
}
?>

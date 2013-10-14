<?php

function sonyericssonModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

    if (isset($_GET["submit-ACE-model"])) {
        $encryptedCategoryID = $_GET["select-ACE-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-FGH-model"])) {
        $encryptedCategoryID = $_GET["select-FGH-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-J-model"])) {
        $encryptedCategoryID = $_GET["select-J-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-K-model"])) {
        $encryptedCategoryID = $_GET["select-K-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-LMNP-model"])) {
        $encryptedCategoryID = $_GET["select-LMNP-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-RS-model"])) {
        $encryptedCategoryID = $_GET["select-RS-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-TV-model"])) {
        $encryptedCategoryID = $_GET["select-TV-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-W-model"])) {
        $encryptedCategoryID = $_GET["select-W-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-XY-model"])) {
        $encryptedCategoryID = $_GET["select-XY-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-Z-model"])) {
        $encryptedCategoryID = $_GET["select-Z-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    }
}
?>

<?php

function sonyericssonModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

    if (isset($_POST["submit-ACE-model"])) {
        $encryptedCategoryID = $_POST["select-ACE-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-FGH-model"])) {
        $encryptedCategoryID = $_POST["select-FGH-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-J-model"])) {
        $encryptedCategoryID = $_POST["select-J-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-K-model"])) {
        $encryptedCategoryID = $_POST["select-K-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-LMNP-model"])) {
        $encryptedCategoryID = $_POST["select-LMNP-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-RS-model"])) {
        $encryptedCategoryID = $_POST["select-RS-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-TV-model"])) {
        $encryptedCategoryID = $_POST["select-TV-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-W-model"])) {
        $encryptedCategoryID = $_POST["select-W-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-XY-model"])) {
        $encryptedCategoryID = $_POST["select-XY-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-Z-model"])) {
        $encryptedCategoryID = $_POST["select-Z-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    }
}
?>

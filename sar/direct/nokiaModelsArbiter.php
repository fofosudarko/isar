<?php

function nokiaModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

    if (isset($_GET["submit-1000-model"])) {
        $encryptedCategoryID = $_GET["select-1000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-2000-model"])) {
        $encryptedCategoryID = $_GET["select-2000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-3000-model"])) {
        $encryptedCategoryID = $_GET["select-3000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-5000-model"])) {
        $encryptedCategoryID = $_GET["select-5000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-6000-model"])) {
        $encryptedCategoryID = $_GET["select-6000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-7000-model"])) {
        $encryptedCategoryID = $_GET["select-7000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-8000-model"])) {
        $encryptedCategoryID = $_GET["select-8000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-9000-model"])) {
        $encryptedCategoryID = $_GET["select-9000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-C-model"])) {
        $encryptedCategoryID = $_GET["select-C-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-E-model"])) {
        $encryptedCategoryID = $_GET["select-E-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-N-Gage-model"])) {
        $encryptedCategoryID = $_GET["select-N-Gage-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-N7-model"])) {
        $encryptedCategoryID = $_GET["select-N7-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-N8-model"])) {
        $encryptedCategoryID = $_GET["select-N8-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-N9-model"])) {
        $encryptedCategoryID = $_GET["select-N9-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_GET["submit-X-model"])) {
        $encryptedCategoryID = $_GET["select-X-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    }
}
?>

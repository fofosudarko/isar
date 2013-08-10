<?php

function nokiaModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

    if (isset($_POST["submit-1000-model"])) {
        $encryptedCategoryID = $_POST["select-1000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-2000-model"])) {
        $encryptedCategoryID = $_POST["select-2000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-3000-model"])) {
        $encryptedCategoryID = $_POST["select-3000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-5000-model"])) {
        $encryptedCategoryID = $_POST["select-5000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-6000-model"])) {
        $encryptedCategoryID = $_POST["select-6000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-7000-model"])) {
        $encryptedCategoryID = $_POST["select-7000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-8000-model"])) {
        $encryptedCategoryID = $_POST["select-8000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-9000-model"])) {
        $encryptedCategoryID = $_POST["select-9000-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-C-model"])) {
        $encryptedCategoryID = $_POST["select-C-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-E-model"])) {
        $encryptedCategoryID = $_POST["select-E-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-N-Gage-model"])) {
        $encryptedCategoryID = $_POST["select-N-Gage-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-N7-model"])) {
        $encryptedCategoryID = $_POST["select-N7-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-N8-model"])) {
        $encryptedCategoryID = $_POST["select-N8-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-N9-model"])) {
        $encryptedCategoryID = $_POST["select-N9-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    } else if (isset($_POST["submit-X-model"])) {
        $encryptedCategoryID = $_POST["select-X-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    }
}
?>

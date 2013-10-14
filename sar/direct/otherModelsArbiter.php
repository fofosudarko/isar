<?php

function otherModelsArbiter($brandName) {

include_once ("/home/a2021051/public_html/sar/direct/results.php");

    if (isset($_GET["submit-other-model"])) {
        $encryptedCategoryID = $_GET["select-other-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    }
}

?>

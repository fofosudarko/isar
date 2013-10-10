<?php

function otherModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

    if (isset($_GET["submit-other-model"])) {
        $encryptedCategoryID = $_GET["select-other-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    }
}

?>

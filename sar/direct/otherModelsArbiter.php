<?php

function otherModelsArbiter($brandName) {

include_once ("/home/fod/www/projects/isar/sar/direct/results.php");

    if (isset($_POST["submit-other-model"])) {
        $encryptedCategoryID = $_POST["select-other-model"];
        $cid = base64_decode($encryptedCategoryID);
        $getResults = results($brandName, $cid);
        return $getResults;
    }
}

?>

<?php

// Creating results sar function page

function results($brandName="", $cid) {
    // Including database connection file path
    include ("/home/fod/www/projects/isar/admin/db/isardb/dbconnect.php");
    
    $brandName = trim($brandName);
    $brandName = strtolower($brandName);
    
    // Get first letter of $brandName string value    
    $getModelAlias = substr($brandName, 0, 1); // alias for model
        
    if ($brandName == "blackberry") {
        // select first letter and sixth letter    
        $getBBFirstLetter = substr($brandName, 0, 1);
        $getBBSixthLetter = substr($brandName, -5, 1);
        $brandName = $getBBFirstLetter.$getBBSixthLetter;
        
        $getFirstLetter = substr($brandName, 0, 1);
        $getAnotherLetter = substr($brandName, -2, 1);
        $getModelCategoryAlias = $getFirstLetter.$getAnotherLetter; // alias for model_category
    } else {
        $getFirstLetter = substr($brandName, 0, 1);
        $getLastLetter = substr($brandName, -1, 1);
        $getModelCategoryAlias = $getFirstLetter.$getLastLetter; // alias for model_category
    }
    
    if ($brandName == "sony ericsson") {
        // Discard the whitespace and concatenate the two string values        
        $expStrings = explode(" ", $brandName);
        $a = $expStrings[0];
        $b = $expStrings[1];
        $brandName = $a.$b;
    
        // select the '4' string value and convert to capital and replace the value in $brandName;        
        $getFourthLetter = substr($brandName, -8, 1);
        $capLetter = strtoupper($getFourthLetter);
        
        // Replace $capLetter        
        $brandName = substr_replace($brandName, $capLetter, -8, 1);
    }
    
    $query = "select model_name, category, sar, add_info from ".$brandName."_model_category as $getModelCategoryAlias left join (brand as brd, ".$brandName."_model as $getModelAlias) on ($getModelCategoryAlias.brand=brd.brand_id and $getModelCategoryAlias.model=$getModelAlias.model_id) where $getModelCategoryAlias.category_id=$cid";
    
    $getQueryResult = mysqli_query($dbLink, $query) or die (mysqli_error());
    
    while ($resultRows = mysqli_fetch_array($getQueryResult, MYSQLI_ASSOC)) {
        $modelName = $resultRows["model_name"];
        $modelCategory = $resultRows["category"];
        $sar = $resultRows["sar"];
        $addInfo = $resultRows["add_info"];
    }

    $results = array ( 
        $modelName,
        $modelCategory,
        $sar,
        $addInfo
    );
    
    return $results;
    
    // Close database connection    
    mysqli_close($dbLink);
}
?>

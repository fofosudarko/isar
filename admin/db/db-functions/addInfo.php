<?php
// Creating additional info function page
function addInfo($brandName="", $bid, $mid, $cid)
{
    // Including database connection file path
    $doc_root = $_SERVER["DOCUMENT_ROOT"];
    include ("/home/fod/www/projects/isar/admin/db/isardb/dbconnect.php");

    $brandName = trim($brandName);
    $brandName = strtolower($brandName);

    // Get first letter of $brandName string value
    $getModelAlias = substr($brandName, 0, 1); // alias for model

    if ($brandName == "blackberry")
    {
        // select first letter and sixth letter
        $getBBFirstLetter = substr($brandName, 0, 1);
        $getBBSixthLetter = substr($brandName, -5, 1);
        $brandName = $getBBFirstLetter.$getBBSixthLetter;

        $getFirstLetter = substr($brandName, 0, 1);
        $getAnotherLetter = substr($brandName, -2, 1);
        $getModelCategoryAlias = $getFirstLetter.$getAnotherLetter; // alias for model_category
    }
    else
    {
        $getFirstLetter = substr($brandName, 0, 1);
        $getLastLetter = substr($brandName, -1, 1);
        $getModelCategoryAlias = $getFirstLetter.$getLastLetter; // alias for model_category
    }   
    
    if ($brandName == "sony ericsson")
    {
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

    $query = "SELECT add_info FROM ".$brandName."_model_category AS $getModelCategoryAlias LEFT JOIN (brand AS brd, ".$brandName."_model AS $getModelAlias) ON ($getModelCategoryAlias.brand=brd.brand_id AND $getModelCategoryAlias.model=$getModelAlias.model_id) WHERE brd.brand_id=$bid AND $getModelAlias.model_id=$mid AND $getModelCategoryAlias.category_id=$cid";

    $getQueryResult = mysqli_query($dbLink, $query) or die (mysqli_error());

    while ($addInfo = mysqli_fetch_array($getQueryResult, MYSQLI_ASSOC))
    {
        return $addInfo["add_info"];
    }

    // Close database connection
    mysqli_close($dbLink);
}
?>

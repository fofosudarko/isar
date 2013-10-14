<?php
// Creating a model name function page

function modelName($brandName, $bid, $mid)
{
    // Preparing string value for database query    
    $brandName = trim($brandName);
    $brandName = strtolower($brandName);
    
    // Get first letter of $brandName string value    
    $getModelAlias = substr($brandName, 0, 1);
    $doc_root = $_SERVER['DOCUMENT_ROOT'];
    
    // Including database connection file path    
    include ("/home/fod/www/projects/isar/admin/db/isardb/dbconnect.php");
    
    if ($brandName == "blackberry")
    {
        // select first letter and sixth letter    
        $getBBFirstLetter = substr($brandName, 0, 1);
        $getBBSixthLetter = substr($brandName, -5, 1);
        $brandName = $getBBFirstLetter.$getBBSixthLetter;
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

    $query = "SELECT model_name FROM ".$brandName."_model AS $getModelAlias LEFT JOIN (brand AS brd) 
        ON ($getModelAlias.brand = brd.brand_id) WHERE brd.brand_id=$bid AND $getModelAlias.model_id=$mid";
    
    // Get database query result    
    $getQueryResult = mysqli_query($dbLink, $query) or die (mysqli_error());
    
    while ($modelName = mysqli_fetch_array($getQueryResult, MYSQLI_ASSOC)) 
    {  
        return $modelName["model_name"];
    }
    
    // Close database connection
    mysqli_close($dbLink); 
    
}

?>

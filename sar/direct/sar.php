<?php
// session_start();
// Create sar results page
// Get hidden field value from input field
$brandName = $_GET["brand-name"];
?>

<?php
switch ($brandName) {
    case "Apple":
        include_once ("/home/fod/www/projects/isar/sar/direct/appleModelsArbiter.php");
        $resultsArray = appleModelsArbiter($brandName);
        break;
    case "Doro":
        include_once ("/home/fod/www/projects/isar/sar/direct/doroModelsArbiter.php");
        $resultsArray = doroModelsArbiter($brandName);
        break;
    case "HTC":
        include_once ("/home/fod/www/projects/isar/sar/direct/htcModelsArbiter.php");
        $resultsArray = htcModelsArbiter($brandName);
        break;
    case "LG":
        include_once ("/home/fod/www/projects/isar/sar/direct/lgModelsArbiter.php");
        $resultsArray = lgModelsArbiter($brandName);
        break;
    case "Motorola":
        include_once ("/home/fod/www/projects/isar/sar/direct/motorolaModelsArbiter.php");
        $resultsArray = motorolaModelsArbiter($brandName);
        break;
    case "Nokia":
        include_once ("/home/fod/www/projects/isar/sar/direct/nokiaModelsArbiter.php");
        $resultsArray = nokiaModelsArbiter($brandName);
        break;
    case "Samsung":
        include_once ("/home/fod/www/projects/isar/sar/direct/samsungModelsArbiter.php");
        $resultsArray = samsungModelsArbiter($brandName);
        break;
    case "Sony Ericsson": 
        include_once ("/home/fod/www/projects/isar/sar/direct/sonyericssonModelsArbiter.php");                           
        $resultsArray = sonyericssonModelsArbiter($brandName);
        break;
    default:
        include_once ("/home/fod/www/projects/isar/sar/direct/otherModelsArbiter.php");
        $resultsArray = otherModelsArbiter($brandName);   
}

//list($modelName, $modelCategory, $sar, $addInfo) = $resultsArray;

//print $modelName."<br><br>";
//print $modelCategory."<br><br>";
//print $sar."<br><br>";
//print $addInfo."<br><br>";

?>

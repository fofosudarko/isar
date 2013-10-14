<?php

/*  Create modelsDropDownMenu function

	Input parameters:
	String brandName,
	Array modelsDB,
	Array cssProperties, --> to be done later

	Output:
	String modelsDropDownMenu (variety)
*/

function modelsDropDownMenu($brandName, $modelsDB)
{
	// Get array values from modelsDB Array
	// Using switch... case

	// Include file functions in case blocks

	switch ($brandName) {
	    case "Apple":
	        include_once ("/home/fod/www/projects/isar/sar/direct/appleModelsDropDownMenu.php");
	        list($appleModels, $appleModelsID, $getAppleModelsKeys) = appleModelsDropDownMenu($brandName, $modelsDB);
	        showAppleDropDownMenu($appleModels, $appleModelsID, $getAppleModelsKeys);
	        break;
	    case "Doro":
	        include_once ("/home/fod/www/projects/isar/sar/direct/doroModelsDropDownMenu.php");
	        list($doroModels, $doroModelsID, $getDoroModelsKeys) = doroModelsDropDownMenu($brandName, $modelsDB);
	        showDoroDropDownMenu($doroModels, $doroModelsID, $getDoroModelsKeys);
	        break;
	    case "HTC":
	        include_once ("/home/fod/www/projects/isar/sar/direct/htcModelsDropDownMenu.php");
	        list($htcModels, $htcModelsID, $getHTCModelsKeys) = htcModelsDropDownMenu($brandName, $modelsDB);
	        showHTCDropDownMenu($htcModels, $htcModelsID, $getHTCModelsKeys);
	        break;
	    case "LG":
	        include_once ("/home/fod/www/projects/isar/sar/direct/lgModelsDropDownMenu.php");
	        list($lgModels, $lgModelsID, $getLGModelsKeys) = lgModelsDropDownMenu($brandName, $modelsDB);
	        showLGDropDownMenu($lgModels, $lgModelsID, $getLGModelsKeys);
	        break;
	    case "Motorola":
	        include_once ("/home/fod/www/projects/isar/sar/direct/motorolaModelsDropDownMenu.php");
	        list($motorolaModels, $motorolaModelsID, $getMotorolaModelsKeys) = motorolaModelsDropDownMenu($brandName, $modelsDB);
	        showMotorolaDropDownMenu($motorolaModels, $motorolaModelsID, $getMotorolaModelsKeys);
	        break;
	    case "Nokia":
	        include_once ("/home/fod/www/projects/isar/sar/direct/nokiaModelsDropDownMenu.php");
	        list($nokiaModels, $nokiaModelsID, $getNokiaModelsKeys) = nokiaModelsDropDownMenu($brandName, $modelsDB);
	        showNokiaDropDownMenu($nokiaModels, $nokiaModelsID, $getNokiaModelsKeys);
	        break;
	    case "Samsung":
	        include_once ("/home/fod/www/projects/isar/sar/direct/samsungModelsDropDownMenu.php");
	        list($samsungModels, $samsungModelsID, $getSamsungModelsKeys) = samsungModelsDropDownMenu($brandName, $modelsDB);
	        showSamsungDropDownMenu($samsungModels, $samsungModelsID, $getSamsungModelsKeys);
	        break;
	    case "Sony Ericsson":
	        include_once ("/home/fod/www/projects/isar/sar/direct/sonyericssonModelsDropDownMenu.php");
	        list($sonyericssonModels, $sonyericssonModelsID, $getSonyEricssonModelsKeys) = sonyericssonModelsDropDownMenu($brandName, $modelsDB);
	        showSonyEricssonDropDownMenu($sonyericssonModels, $sonyericssonModelsID, $getSonyEricssonModelsKeys);
	        break;
	    default:
	        include_once ("/home/fod/www/projects/isar/sar/direct/otherModelsDropDownMenu.php");
	        return otherModelsDropDownMenu($brandName, $modelsDB);
	}
}

?>

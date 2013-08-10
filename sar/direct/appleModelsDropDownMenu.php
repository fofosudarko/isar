<?php

/*
	Create apple models drop down menu
	Input parameters:
	Array $modelsDB,
	String $brandName

	Output results:
	Array $appleModels,
	Array $getAppleModelsKeys,
	
	New addition:
	int models_db_category_id
*/

function appleModelsDropDownMenu($brandName, $modelsDB) {
	/*
		Algorithm for ModelsDropDownMenu
		1. Create an associative array that uses names of models as keys/index
		2. Use either ereg(String pattern, ) or preg_match to match contents of $modelsDB array received from modelsDropDownMenu
		3. Compare indices/keys of models_db_model_name and modelsDBmodelCategory
		4. Create an array and assign the matched values to it
	*/
	
	$appleModels = array (
		"iPad" => "",
		"iPhone" => "",
	);
	
	$appleModelsID = array ();
	
	$getModelsDB = $modelsDB;

	$getAppleModelsKeys = array_keys($appleModels);

	for ($counter=0; $counter<sizeof($getModelsDB["models_db_model_name"]); $counter++) {
		// REGEX pattern: "i[pP]ad" and "i[pP]hone"
		if ((ereg("(i[Pp]ad)", $getAppleModelsKeys[0])) && ($getAppleModelsKeys[0] == $getModelsDB["models_db_model_name"][$counter])) {
			static $i=0;
			
			$appleModels["iPad"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;".$getModelsDB["models_db_add_info"][$counter];
			$appleModelsID["iPadID"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter]; 
			
			$i++;
		} else if ((ereg("(i[Pp]hone)", $getAppleModelsKeys[1])) && ($getAppleModelsKeys[1] == $getModelsDB["models_db_model_name"][$counter])) {
			static $m=0;
			
			$appleModels["iPhone"][$m] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;".$getModelsDB["models_db_add_info"][$counter];
			$appleModelsID["iPhoneID"]["category_id"][$m] = $getModelsDB["models_db_category_id"][$counter];
			
			$m++;
		}
	}

function showAppleDropDownMenu($appleModels, $appleModelsID, $getAppleModelsKeys) {

	/*
		Input parameters:
		Array $appleModels,
		Array $getAppleModelsKeys

		Output parameters:
		String showAppleDropDownMenu
	*/

		global $brandName;
		
		$iPad = $getAppleModelsKeys[0];
		$iPhone = $getAppleModelsKeys[1];
		
		// Get model and category id from appleDropDownMenu function

    
    $beginMdSelArea = <<<EOF
    <div class="md-sel-area"
EOF;

    $endMdSelArea = <<<EOF
    </div>
EOF;

		// General models content box
		$startModelsBox = <<<EOF
	<div class="models-content-box">
EOF;
		$endModelsBox = <<<EOF
	</div>
EOF;

	// ---- iPad ----
	$diviPadHeader = <<<EOF
	<div class="header-box">
		<div class="header-content"><h3><a href="#" title="$iPad"><span>$iPad</span></a></h3></div>
	</div>
EOF;

	$startiPadModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-ipad-model" name="select-ipad-model">
EOF;

	$endiPadModelSelect = <<<EOF
	</select>
</div>
EOF;

	// ---- iPhone ----
	$diviPhoneHeader = <<<EOF
	<div style="top: 100px;" class="header-box">
	<div style="" class="header-content"><h3><a href="#" title="$iPhone"><span>$iPhone</span></a></h3></div>
</div>
EOF;

	$startiPhoneModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-iphone-model" name="select-iphone-model">
EOF;

	$endiPhoneModelSelect = <<<EOF
	</select>
</div>
EOF;

    $brandBanner = <<<EOF
<input type="hidden" name="brand-name" value="$brandName" />
EOF;

       
	// ---- Display iPad contents ----
	//print $startModelsBox;
	print $diviPadHeader;
	print $beginMdSelArea." style='top: 50px;'>";
	print $startiPadModelSelect;
	for ($i=0; $i<sizeof($appleModels["iPad"]); $i++) {
		print "<option class='models-option-style' value='";
		print base64_encode($appleModelsID["iPadID"]["category_id"][$i]);
		print "'>";
		print $appleModels["iPad"][$i];
		print "</option>";
	}
	print $endiPadModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-ipad");
	print $endMdSelArea;
	
	// ---- Display iPhone contents ----
	
	echo $diviPhoneHeader;
	print $beginMdSelArea."style='top: 130px;'>";
	print $startiPhoneModelSelect;
	for ($m=0; $m<sizeof($appleModels["iPhone"]); $m++)	{
		print "<option class='models-option-style' value='";
		print base64_encode($appleModelsID["iPhoneID"]["category_id"][$m]);
		print "'>";
		print $appleModels["iPhone"][$m];
		print "</option>";
	}
	print $endiPhoneModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-iphone");
	print $endMdSelArea;
		
	print $brandBanner;
}

	return array ($appleModels, $appleModelsID, $getAppleModelsKeys);
}

?>

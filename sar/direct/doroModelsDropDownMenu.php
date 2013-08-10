<?php

/*
	Create doro models drop down menu
	Input parameters:
	Array $modelsDB,
	String $brandName

	Output results:
	Array $doroModels,
	Array $getDoroModelsKeys,
*/

function doroModelsDropDownMenu($brandName, $modelsDB) {
	$doroModels = array (
		"HandleEasy" => "",
		"HandlePlus" => "",
		"PhoneEasy" => "",
	);

    $doroModelsID = array ();

	$getModelsDB = $modelsDB;
	$getDoroModelsKeys = array_keys($doroModels);

	for ($counter=0; $counter<sizeof($getModelsDB["models_db_model_name"]); $counter++) {
		// REGEX pattern: "[hH]andle[Ee]asy", "[hH]andle[pP]lus" and "[pP]hone[Ee]asy"
		if ((ereg("([hH]andle[Ee]asy)", $getDoroModelsKeys[0])) && ($getDoroModelsKeys[0] == $getModelsDB["models_db_model_name"][$counter])) {
			static $i=0;
			$doroModels["HandleEasy"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;";
			$doroModelsID["handleEasyID"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter];
			$i++;
		} else if ((ereg("([hH]andle[Pp]lus)", $getDoroModelsKeys[1])) && ($getDoroModelsKeys[1] == $getModelsDB["models_db_model_name"][$counter])) {
			static $m=0;
			$doroModels["HandlePlus"][$m] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;";
			$doroModelsID["handlePlusID"]["category_id"][$m] = $getModelsDB["models_db_category_id"][$counter];
			$m++;
		} else if ((ereg("([pP]hone[Ee]asy)", $getDoroModelsKeys[2])) && ($getDoroModelsKeys[2] == $getModelsDB["models_db_model_name"][$counter])) {
			static $n=0;
			$doroModels["PhoneEasy"][$n] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;";
			$doroModelsID["phoneEasyID"]["category_id"][$n] = $getModelsDB["models_db_category_id"][$counter];
			$n++;
		}
	}

function showDoroDropDownMenu($doroModels, $doroModelsID, $getDoroModelsKeys) {
	/*
		Input parameters:
		Array $doroModels,
		Array $getDoroModelsKeys,

		Output results:
		String showDoroDropDownMenu
	*/

$beginMdSelArea = <<<EOF
    <div class="md-sel-area"
EOF;

    $endMdSelArea = <<<EOF
    </div>
EOF;

	global $brandName;
	
	$handleEasy = $getDoroModelsKeys[0];
	$handlePlus = $getDoroModelsKeys[1];
	$phoneEasy = $getDoroModelsKeys[2];

	$brandBanner = <<<EOF
<input type="hidden" name="brand-name" value="$brandName" />
EOF;
	
	// General models content box
	$startModelsBox = <<<EOF
	<div class="models-content-box">
EOF;

	$endModelsBox = <<<EOF
	</div>
EOF;

	// ---- HandleEasy ----
	$divHandleEasyHeader = <<<EOF
	<div style="width: 300px; top: 30px; left: 235px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$handleEasy"><span>$handleEasy</span></a></h3></div>
	</div>
EOF;

	$startHandleEasyModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-handleEasy-model" name="select-handleEasy-model">
EOF;

	$endHandleEasyModelSelect = <<<EOF
	</select>
</div>
EOF;

	// ---- HandlePlus ----
	$divHandlePlusHeader = <<<EOF
<div style="width: 300px; top: 90px; left: 235px;" class="header-box">
<div style="" class="header-content"><h3><a href="#" title="$handlePlus"><span>$handlePlus</span></a></h3></div>
</div>
EOF;

	$startHandlePlusModelSelect = <<<EOF
<div class="model-select-positioning"><select class="app select-model" id="select-handlePlus-model" name="select-handlePlus-model">
EOF;

	$endHandlePlusModelSelect = <<<EOF
</select>
</div>
EOF;

	// ---- PhoneEasy ----
	$divPhoneEasyHeader = <<<EOF
<div style="width: 300px; top: 150px; left: 235px;" class="header-box">
<div style="" class="header-content"><h3><a href="#" title="$phoneEasy"><span>$phoneEasy</span></a></h3></div>
</div>
EOF;

	$startPhoneEasyModelSelect = <<<EOF
<div class="model-select-positioning">
<select class="app select-model" id="select-phoneEasy-model" name="select-phoneEasy-model">
EOF;

	$endPhoneEasyModelSelect = <<<EOF
</select>
</div>
EOF;

	// ---- Display HandleEasy contents ----
	//print $startModelsBox;
	print $divHandleEasyHeader;
	print $beginMdSelArea." style='top: 60px;'>";
	print $startHandleEasyModelSelect;
	for ($i=0; $i<sizeof($doroModels["HandleEasy"]); $i++) {
		print "<option class='models-option-style' value='";
		print base64_encode($doroModelsID["handleEasyID"]["category_id"][$i]);
		print "'>";
		print $doroModels["HandleEasy"][$i];
		print "</option>";
	}
	print $endHandleEasyModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-HandleEasy");
	print $endMdSelArea;
	//print $endModelsBox;

	// ---- Display HandlePlus contents ----
	//echo $startModelsBox;
	echo $divHandlePlusHeader;
	print $beginMdSelArea." style='top: 120px;'>";
	echo $startHandlePlusModelSelect;
	for ($m=0; $m<sizeof($doroModels["HandlePlus"]); $m++) {
		print "<option class='models-option-style' value='";
		print base64_encode($doroModelsID["handlePlusID"]["category_id"][$m]);
		print "'>";
		print $doroModels["HandlePlus"][$m];
		print "</option>";
	}
	echo $endHandlePlusModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-HandlePlus");
	print $endMdSelArea;
	//echo $endModelsBox;

	// ---- Display PhoneEasy contents ----
	//echo $startModelsBox;
	echo $divPhoneEasyHeader;
	print $beginMdSelArea." style='top: 180px;'>";
	echo $startPhoneEasyModelSelect;
	for ($n=0; $n<sizeof($doroModels["PhoneEasy"]); $n++) {
		print "<option class='models-option-style' value='";
		print base64_encode($doroModelsID["phoneEasyID"]["category_id"][$n]);
		print "'>";
		print $doroModels["PhoneEasy"][$n];
		print "</option>";
	}
	echo $endPhoneEasyModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-PhoneEasy");
	print $endMdSelArea;
	//echo $endModelsBox;
	
	print $brandBanner;
}

	return array ($doroModels, $doroModelsID, $getDoroModelsKeys);
}
?>

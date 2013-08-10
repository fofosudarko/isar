<?php

/*
	Create lg models drop down menu
	Input parameters:
	Array $modelsDB,
	String $brandName

	Output results:
	Array $lgModels,
	Array $getLGModelsKeys,
*/

function lgModelsDropDownMenu($brandName, $modelsDB)
{
    $lgModels = array (
        "B | C" => "",
        "F | G" => "",
        "GB | GD | GS" => "",
        "GT | GU | GW" => "",
        "KC | KE | KF" => "",
        "KG | KM | KP" => "",
        "KS | KU" => "",
        "L | M" => "",
        "P | S" => "",
        "T | U" => "",
    );

    $lgModelsDB = array ();

    $getModelsDB = $modelsDB;
    $getLGModelsKeys = array_keys($lgModels);

    for ($counter=0; $counter<sizeof($getModelsDB["models_db_model_name"]); $counter++) {
        // REGEX pattern: "^[BbCc]", "(^F)|(^G[^BbDdSsTtUuWw])", "^G([Bb]|[Dd]|[Ss])", "^G([Tt]|[Uu]|[Ww])"
        // REGEX pattern (contd): "^K([Cc]|[Ee]|[Ff])", "^K([Gg]|[Mm]|[Pp])", "^K([Ss]|[Uu])", "(^[LlMm])", "(^[PpSs])", "^[Uu]"
        
        if ((ereg("^[BbCc]", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter])) && (ereg("[BbCc]", $getLGModelsKeys[0]))) {
        	static $a=0;

        	if ($getModelsDB["models_db_model_name"][$counter] == "Chocolate") {
        		$lgModels["B | C"][$a] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
        	    $lgModelsID["BC"]["category_id"][$a] = $getModelsDB["models_db_category_id"][$counter];
        	} else {
        		$lgModels["B | C"][$a] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	    $lgModelsID["BC"]["category_id"][$a] = $getModelsDB["models_db_category_id"][$counter];
        	}

        	$a+=1;
        } else if ((ereg("(^F)|(^[Gg][^BbSsDdTtUuWw])", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter])) &&	(ereg("[FG]", $getLGModelsKeys[1]))) {
        	static $b=0;
        	$lgModels["F | G"][$b] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	$lgModelsID["FG"]["category_id"][$b] = $getModelsDB["models_db_category_id"][$counter];
        	$b=$b+1;
        } else if ((ereg("[GgBbDdSs]", $getLGModelsKeys[2])) && (ereg("^G([Bb]|[Dd]|[Ss])", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
        	static $c=0;
        	$lgModels["GB | GD | GS"][$c] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	$lgModelsID["GBDS"]["category_id"][$c] = $getModelsDB["models_db_category_id"][$counter];
        	$c++;
        } else if ((ereg("[GgTtUuWw]", $getLGModelsKeys[3])) &&	(ereg("^G([Tt]|[Uu]|[Ww])", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
        	static $d=0;
        	$lgModels["GT | GU | GW"][$d] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	$lgModelsID["GTUW"]["category_id"][$d] = $getModelsDB["models_db_category_id"][$counter];
        	$d+=1;
        } else if ((ereg("[KkcCeEfF]", $getLGModelsKeys[4])) && (ereg("^K([Cc]|[Ee]|[Ff])", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
        	static $e=0;
        	$lgModels["KC | KE | KF"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	$lgModelsID["KCEF"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
        	$e=$e+1;
        } else if ((ereg("[KkGgMmPp]", $getLGModelsKeys[5])) &&	(ereg("^K([Gg]|[Mm]|[Pp])", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
        	static $f=0;
        	$lgModels["KG | KM | KP"][$f] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	$lgModelsID["KGMP"]["category_id"][$f] = $getModelsDB["models_db_category_id"][$counter];
        	$f=$f+1;
        } else if ((ereg("[KkSsUu]", $getLGModelsKeys[6])) && (ereg("^K([Ss]|[Uu])", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
        	static $g=0;
        	$lgModels["KS | KU"][$g] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	$lgModelsID["KSU"]["category_id"][$g] = $getModelsDB["models_db_category_id"][$counter];
        	$g++;
        } else if ((ereg("[LlMm]", $getLGModelsKeys[7])) && (ereg("^[LlMm]", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
        	static $h=0;
        	$lgModels["L | M"][$h] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	$lgModelsID["LM"]["category_id"][$h] = $getModelsDB["models_db_category_id"][$counter];
        	$h+=1;
        } else if ((ereg("[PpSs]", $getLGModelsKeys[8])) && (ereg("^[PpSs]", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
        	static $i=0;

        	switch ($getModelsDB["models_db_model_name"][$counter]) {
        	    case "Prada":
        	        $lgModels["P | S"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
        	        $lgModelsID["PS"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter];
        	        break;
        	    case "Shine":
        	        $lgModels["P | S"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
        	        $lgModelsID["PS"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter];
        	        break;
        	    case "Secret":
        	        $lgModels["P | S"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
        	        $lgModelsID["PS"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter];
        	        break;        
        	    default:
        	        $lgModels["P | S"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	        $lgModelsID["PS"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter];
        	}

        	$i++;
        } else if ((ereg("[UuTt]", $getLGModelsKeys[9])) && (ereg("^[TtUu]", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
        	static $j=0;
        	$lgModels["T | U"][$j] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
        	$lgModelsID["TU"]["category_id"][$j] = $getModelsDB["models_db_category_id"][$counter];
        	$j+=1;
        }
    }

function showLGDropDownMenu($lgModels, $lgModelsID, $getLGModelsKeys)
{
    
    /*
		Input parameters:
		Array $lgModels,
		Array $getLGModelsKeys

		Output parameters:
		String showLGDropDownMenu
	*/
	
	global $brandName;

$beginMdSelArea = <<<EOF
    <div class="md-sel-area"
EOF;

    $endMdSelArea = <<<EOF
    </div>
EOF;
	
	$BC = $getLGModelsKeys[0];
	$FG = $getLGModelsKeys[1];
	$GB_GD_GS = $getLGModelsKeys[2];
	$GT_GU_GW = $getLGModelsKeys[3];
	$KC_KE_KF = $getLGModelsKeys[4];
	$KG_KM_KP = $getLGModelsKeys[5];
	$KS_KU = $getLGModelsKeys[6];
	$LM = $getLGModelsKeys[7];
	$PS = $getLGModelsKeys[8];
	$TU = $getLGModelsKeys[9];
	
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

    // ---- BC ----
	$divBCHeader = <<<EOF
	<div style="" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$BC"><span>$BC</span></a></h3></div>
	</div>
EOF;

	$startBCModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-bc-model" name="select-bc-model">
EOF;

	$endBCModelSelect = <<<EOF
	</select>
</div>
EOF;

    // ---- FG ----
	$divFGHeader = <<<EOF
	<div style="top: 40px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$FG"><span>$FG</span></a></h3></div>
	</div>
EOF;

	$startFGModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-fg-model" name="select-fg-model">
EOF;

	$endFGModelSelect = <<<EOF
	</select>
</div>
EOF;

    // ---- GB | GD | GS ----
	$divGB_GD_GSHeader = <<<EOF
	<div style="width: 400px; left: 180px; top: 60px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$GB_GD_GS"><span>$GB_GD_GS</span></a></h3></div>
	</div>
EOF;

	$startGB_GD_GSModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-GB_GD_GS-model" name="select-gbds-model">
EOF;

	$endGB_GD_GSModelSelect = <<<EOF
	</select>
</div>
EOF;

    // ---- GT | GU | GW ----
	$divGT_GU_GWHeader = <<<EOF
	<div style="width: 400px; left: 180px; top: 80px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$GT_GU_GW"><span>$GT_GU_GW</span></a></h3></div>
	</div>
EOF;

	$startGT_GU_GWModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-GT_GU_GW-model" name="select-gtuw-model">
EOF;

	$endGT_GU_GWModelSelect = <<<EOF
	</select>
</div>
EOF;

    // ---- KC_KE_KF ----
	$divKC_KE_KFHeader = <<<EOF
	<div style="width: 400px; left: 180px; top: 100px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$KC_KE_KF"><span>$KC_KE_KF</span></a></h3></div>
	</div>
EOF;

	$startKC_KE_KFModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-KC_KE_KF-model" name="select-kcef-model">
EOF;

	$endKC_KE_KFModelSelect = <<<EOF
	</select>
</div>
EOF;

    // ---- KG_KM_KP ----
	$divKG_KM_KPHeader = <<<EOF
	<div style="width: 400px; left: 180px; top: 120px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$KG_KM_KP"><span>$KG_KM_KP</span></a></h3></div>
	</div>
EOF;

	$startKG_KM_KPModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-KG_KM_KP-model" name="select-kgmp-model">
EOF;

	$endKG_KM_KPModelSelect = <<<EOF
	</select>
</div>
EOF;

    // ---- KS_KU ----
	$divKS_KUHeader = <<<EOF
	<div style=" top: 140px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$KS_KU"><span>$KS_KU</span></a></h3></div>
	</div>
EOF;

	$startKS_KUModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-KS_KU-model" name="select-ksu-model">
EOF;

	$endKS_KUModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- LM ----
	$divLMHeader = <<<EOF
	<div style=" top: 160px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$LM"><span>$LM</span></a></h3></div>
	</div>
EOF;

	$startLMModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-LM-model" name="select-lm-model">
EOF;

	$endLMModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- PS ----
	$divPSHeader = <<<EOF
	<div style=" top: 180px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$PS"><span>$PS</span></a></h3></div>
	</div>
EOF;

	$startPSModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-PS-model" name="select-ps-model">
EOF;

	$endPSModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- TU ----
	$divTUHeader = <<<EOF
	<div style=" top: 200px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$TU"><span>$TU</span></a></h3></div>
	</div>
EOF;

	$startTUModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-TU-model" name="select-tu-model">
EOF;

	$endTUModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- Display BC contents ----
	//print $startModelsBox;
	print $divBCHeader;
	print $beginMdSelArea.' style="">';
	print $startBCModelSelect;
	for ($a=0; $a<sizeof($lgModels["B | C"]); $a++)	{
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["BC"]["category_id"][$a]);
		print "'>";
		print $lgModels["B | C"][$a];
		print "</option>";
	}
	print $endBCModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-BC-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display FG contents ----
	//print $startModelsBox;
	print $divFGHeader;
	print $beginMdSelArea.' style="top: 50px;">';
	print $startFGModelSelect;
	for ($b=0; $b<sizeof($lgModels["F | G"]); $b++)	{
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["FG"]["category_id"][$b]);
		print "'>";
		print $lgModels["F | G"][$b];
		print "</option>";
	}
	print $endFGModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-FG-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display GB | GD | GS contents ----
	//print $startModelsBox;
	print $divGB_GD_GSHeader;
	print $beginMdSelArea.' style=" top: 70px;">';
	print $startGB_GD_GSModelSelect;
	for ($c=0; $c<sizeof($lgModels["GB | GD | GS"]); $c++) {
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["GBDS"]["category_id"][$c]);
		print "'>";
		print $lgModels["GB | GD | GS"][$c];
		print "</option>";
	}
	print $endGB_GD_GSModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-GBDS-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display GT | GU | GW contents ----
	//print $startModelsBox;
	print $divGT_GU_GWHeader;
	print $beginMdSelArea.' style=" top: 90px;">';
	print $startGT_GU_GWModelSelect;
	for ($d=0; $d<sizeof($lgModels["GT | GU | GW"]); $d++) {
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["GTUW"]["category_id"][$d]);
		print "'>";
		print $lgModels["GT | GU | GW"][$d];
		print "</option>";
	}
	print $endGT_GU_GWModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-GTUW-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display KC | KE | KF contents ----
	//print $startModelsBox;
	print $divKC_KE_KFHeader;
	print $beginMdSelArea.' style=" top: 110px;">';
	print $startKC_KE_KFModelSelect;
	for ($e=0; $e<sizeof($lgModels["KC | KE | KF"]); $e++) {
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["KCEF"]["category_id"][$e]);
		print "'>";
		print $lgModels["KC | KE | KF"][$e];
		print "</option>";
	}
	print $endKC_KE_KFModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-KCEF-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display KG | KM | KP contents ----
	//print $startModelsBox;
	print $divKG_KM_KPHeader;
	print $beginMdSelArea.' style=" top: 130px;">';
	print $startKG_KM_KPModelSelect;
	for ($f=0; $f<sizeof($lgModels["KG | KM | KP"]); $f++) {
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["KGMP"]["category_id"][$f]);
		print "'>";
		print $lgModels["KG | KM | KP"][$f];
		print "</option>";
	}
	print $endKG_KM_KPModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-KGMP-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display KS | KU contents ----
	//print $startModelsBox;
	print $divKS_KUHeader;
	print $beginMdSelArea.' style=" top: 150px;">';
	print $startKS_KUModelSelect;
	for ($g=0; $g<sizeof($lgModels["KS | KU"]); $g++) {
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["KSU"]["category_id"][$g]);
		print "'>";
		print $lgModels["KS | KU"][$g];
		print "</option>";
	}
	print $endKS_KUModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-KSU-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display L | M contents ----
	//print $startModelsBox;
	print $divLMHeader;
	print $beginMdSelArea.' style=" top: 170px;">';
	print $startLMModelSelect;
	for ($h=0; $h<sizeof($lgModels["L | M"]); $h++)	{
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["LM"]["category_id"][$h]);
		print "'>";
		print $lgModels["L | M"][$h];
		print "</option>";
	}
	print $endLMModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-LM-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display P | S contents ----
	//print $startModelsBox;
	print $divPSHeader;
	print $beginMdSelArea.' style=" top: 190px;">';
	print $startPSModelSelect;
	for ($i=0; $i<sizeof($lgModels["P | S"]); $i++)	{
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["PS"]["category_id"][$i]);
		print "'>";
		print $lgModels["P | S"][$i];
		print "</option>";
	}
	print $endPSModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-PS-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display T | U contents ----
	//print $startModelsBox;
	print $divTUHeader;
	print $beginMdSelArea.' style=" top: 210px;">';
	print $startTUModelSelect;
	for ($j=0; $j<sizeof($lgModels["T | U"]); $j++)	{
		print "<option class='models-option-style' value='";
		print base64_encode($lgModelsID["TU"]["category_id"][$j]);
		print "'>";
		print $lgModels["T | U"][$j];
		print "</option>";
	}
	print $endTUModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-TU-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	print $brandBanner;			
}

    return array ($lgModels, $lgModelsID, $getLGModelsKeys);
}

?>

<?php

/*
	Create motorola models drop down menu
	Input parameters:
	Array $modelsDB,
	String $brandName

	Output results:
	Array $motorolaModels,
	Array $getMotorolaModelsKeys,
*/

function motorolaModelsDropDownMenu($brandName, $modelsDB)
{
    $motorolaModels = array (
        "A" => "",
        "C" => "",
        "DEFY | E" => "",
        "MOTO | MOTOKRZR | MOTOPEBL" => "",
        "MOTORAZR" => "",
        "MOTORIZR | MOTOROKR | MP | SLVR" => "",
        "V" => "",
        "W" => "",
    );
    
    $motorolaModelsDB = array ();
    
    $getModelsDB = $modelsDB;
    $getMotorolaModelsKeys = array_keys($motorolaModels);
    
    for ($counter=0; $counter<sizeof($getModelsDB["models_db_model_name"]); $counter++) {
        // REGEX pattern: "(^[Aa])", "(^[Cc])", "(^([DdEeFfYy]))|(^[Ee])", "(MOTO)$|(ROKR)$|(PEBL)$"
        // REGEX pattern: "(RAZR)$", "(RIZR)$|(ROKR)$|^(MP)$|^(SLVR)$", "^[Vv]"
        // REGEX pattern: "^[Ww]"
        
        if ((ereg("[Aa]", $getMotorolaModelsKeys[0])) && (ereg("^([Aa])" , $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
            static $a=0;
            $motorolaModels["A"][$a] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $motorolaModelsID["A"]["category_id"][$a] = $getModelsDB["models_db_category_id"][$counter];
            $a+=1;
        } else if ((ereg("[Cc]", $getMotorolaModelsKeys[1])) && (ereg("^([Cc])" , $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
            static $b=0;
            $motorolaModels["C"][$b] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $motorolaModelsID["C"]["category_id"][$b] = $getModelsDB["models_db_category_id"][$counter];
            $b=$b+1;
        } else if ((ereg("[DdEeFf]", $getMotorolaModelsKeys[2])) && (ereg("(^([DdEeFfYy]))|(^[Ee])" , $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
            static $c=0;
            $motorolaModels["DEFY | E"][$c] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $motorolaModelsID["DEFY_E"]["category_id"][$c] = $getModelsDB["models_db_category_id"][$counter];
            $c+=1;
        } else if ((ereg("([MmOoTtKkRrZzPpEeBbLl])", $getMotorolaModelsKeys[3])) && (ereg("(MOTO)$|(KRZR)$|(PEBL)$", $getModelsDB["models_db_model_name"][$counter]))) {
            static $d=0;
            $motorolaModels["MOTO | MOTOKRZR | MOTOPEBL"][$d] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $motorolaModelsID["MOTO-KRZR-PEBL"]["category_id"][$d] = $getModelsDB["models_db_category_id"][$counter];
            $d++;
        } else if ((ereg("([MmOotTRrAaZz])", $getMotorolaModelsKeys[4])) && (ereg("(RAZR)$",$getModelsDB["models_db_model_name"][$counter]))) {
            static $e=0;
            $motorolaModels["MOTORAZR"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $motorolaModelsID["RAZR"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
            $e++;
        } else if ((ereg("([MmOoTtRrIiZzKkPpSsLlVv])", $getMotorolaModelsKeys[5])) && (ereg("(RIZR)$|(ROKR)$|^(MP)$|^(SLVR)$", $getModelsDB["models_db_model_name"][$counter]))) {
            static $f=0;

            switch ($getModelsDB["models_db_model_name"][$counter]) {
                case "MP":
                    $motorolaModels["MOTORIZR | MOTOROKR | MP | SLVR"][$f] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
                    $motorolaModelsID["RIZR-ROKR-MP-SLVR"]["category_id"][$f] = $getModelsDB["models_db_category_id"][$counter];
                    break;
                default:
                    $motorolaModels["MOTORIZR | MOTOROKR | MP | SLVR"][$f] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];     
                    $motorolaModelsID["RIZR-ROKR-MP-SLVR"]["category_id"][$f] = $getModelsDB["models_db_category_id"][$counter];
            }

            $f++;
        } else if ((ereg("[Vv]", $getMotorolaModelsKeys[6])) && (ereg("^([Vv])$", $getModelsDB["models_db_model_name"][$counter]))) {
            static $g=0;
            $motorolaModels["V"][$g] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $motorolaModelsID["V"]["category_id"][$g] = $getModelsDB["models_db_category_id"][$counter];
            $g+=1;
        } else if ((ereg("[Ww]", $getMotorolaModelsKeys[7])) && (ereg("([Ww])", $getModelsDB["models_db_model_name"][$counter]))) {
            static $h=0;
            $motorolaModels["W"][$h] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $motorolaModelsID["W"]["category_id"][$h] = $getModelsDB["models_db_category_id"][$counter];
            $h=$h+1;
        }
    }
    
function showMotorolaDropDownMenu($motorolaModels, $motorolaModelsID, $getMotorolaModelsKeys) {

    /*
		Input parameters:
		Array $motorolaModels,
		Array $getMotorolaModelsKeys

		Output parameters:
		String showMotorolaDropDownMenu
	*/
$beginMdSelArea = <<<EOF
    <div class="md-sel-area"
EOF;

    $endMdSelArea = <<<EOF
    </div>
EOF;
	
	global $brandName;
	
	$A = $getMotorolaModelsKeys[0];
	$C = $getMotorolaModelsKeys[1];
	$DEFY_E = $getMotorolaModelsKeys[2];
	$MOTO_KRZR_PEBL = $getMotorolaModelsKeys[3];
	$RAZR = $getMotorolaModelsKeys[4];
	$RIZR_ROKR_MP_SLVR = $getMotorolaModelsKeys[5];
	$V = $getMotorolaModelsKeys[6];
	$W = $getMotorolaModelsKeys[7];
	
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

// ---- A ----
	$divAHeader = <<<EOF
	<div style="" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$A"><span>$A</span></a></h3></div>
	</div>
EOF;

	$startAModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-A-model" name="select-A-model">
EOF;

	$endAModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- C ----
	$divCHeader = <<<EOF
	<div style="top: 40px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$C"><span>$C</span></a></h3></div>
	</div>
EOF;

	$startCModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-C-model" name="select-C-model">
EOF;

	$endCModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- DEFY | E ----
	$divDEFY_EHeader = <<<EOF
	<div style="width: 300px; left: 230px; top: 60px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$DEFY_E"><span>$DEFY_E</span></a></h3></div>
	</div>
EOF;

	$startDEFY_EModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-DEFY-E-model" name="select-DEFY-E-model">
EOF;

	$endDEFY_EModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- MOTO | MOTOKRZR | MOTOPEBL ----
	$divMOTO_KRZR_PEBLHeader = <<<EOF
	<div style="width: 700px; left: 40px; top: 80px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$MOTO_KRZR_PEBL"><span>$MOTO_KRZR_PEBL</span></a></h3></div>
	</div>
EOF;

	$startMOTO_KRZR_PEBLModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-MOTO-KRZR-PEBL-model" name="select-MOTO-KRZR-PEBL-model">
EOF;

	$endMOTO_KRZR_PEBLModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- MOTORAZR ----
	$divRAZRHeader = <<<EOF
	<div style="width: 300px; left: 240px; top: 100px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$RAZR"><span>$RAZR</span></a></h3></div>
	</div>
EOF;

	$startRAZRModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-RAZR-model" name="select-RAZR-model">
EOF;

	$endRAZRModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- MOTORIZR | MOTOROKR | MP | SLVR ----
	$divRIZR_ROKR_MP_SLVRHeader = <<<EOF
	<div style="width: 760px; left: 10px; top: 120px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$RIZR_ROKR_MP_SLVR"><span>$RIZR_ROKR_MP_SLVR</span></a></h3></div>
	</div>
EOF;

	$startRIZR_ROKR_MP_SLVRModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-RIZR-ROKR-MP-SLVR-model" name="select-RIZR-ROKR-MP-SLVR-model">
EOF;

	$endRIZR_ROKR_MP_SLVRModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- V ----
	$divVHeader = <<<EOF
	<div style="top: 140px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$V"><span>$V</span></a></h3></div>
	</div>
EOF;

	$startVModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-V-model" name="select-V-model">
EOF;

	$endVModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- W ----
	$divWHeader = <<<EOF
	<div style="top: 160px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$W"><span>$W</span></a></h3></div>
	</div>
EOF;

	$startWModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-W-model" name="select-W-model">
EOF;

	$endWModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- Display A contents ----
	//print $startModelsBox;
	print $divAHeader;
	print $beginMdSelArea.' style="">';
	print $startAModelSelect;
	for ($a=0; $a<sizeof($motorolaModels["A"]); $a++) 
		print "<option class='models-option-style' value='".base64_encode($motorolaModelsID["A"]["category_id"][$a])."'>".$motorolaModels["A"][$a]."</option>";
	
	print $endAModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-A-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";

// ---- Display C contents ----
	//print $startModelsBox;
	print $divCHeader;
	print $beginMdSelArea.' style="top: 50px;">';
	print $startCModelSelect;
	for ($b=0; $b<sizeof($motorolaModels["C"]); $b++) 
		print "<option class='models-option-style' value='".base64_encode($motorolaModelsID["C"]["category_id"][$b])."'>".$motorolaModels["C"][$b]."</option>";
	
	print $endCModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-C-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display DEFY | E contents ----
	//print $startModelsBox;
	print $divDEFY_EHeader;
	print $beginMdSelArea.' style="top: 70px;">';
	print $startDEFY_EModelSelect;
	for ($c=0; $c<sizeof($motorolaModels["DEFY | E"]); $c++) 
		print "<option class='models-option-style' value='".base64_encode($motorolaModelsID["DEFY_E"]["category_id"][$c])."'>".$motorolaModels["DEFY | E"][$c]."</option>";
	
	print $endDEFY_EModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-DEFY_E-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display MOTO | MOTOKIZR | MOTOPEBL contents ----
	//print $startModelsBox;
	print $divMOTO_KRZR_PEBLHeader;
	print $beginMdSelArea.' style="top: 90px; left: 35px;">';
	print $startMOTO_KRZR_PEBLModelSelect;
	for ($d=0; $d<sizeof($motorolaModels["MOTO | MOTOKRZR | MOTOPEBL"]); $d++) 
		print "<option class='models-option-style' value='".base64_encode($motorolaModelsID["MOTO-KRZR-PEBL"]["category_id"][$d])."'>".$motorolaModels["MOTO | MOTOKRZR | MOTOPEBL"][$d]."</option>";
	
	print $endMOTO_KRZR_PEBLModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-MOTO_KRZR_PEBL-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display MOTORAZR contents ----
	//print $startModelsBox;
	print $divRAZRHeader;
	print $beginMdSelArea.' style="top: 110px;">';
	print $startRAZRModelSelect;
	for ($e=0; $e<sizeof($motorolaModels["MOTORAZR"]); $e++) 
		print "<option class='models-option-style' value='".base64_encode($motorolaModelsID["RAZR"]["category_id"][$e])."'>".$motorolaModels["MOTORAZR"][$e]."</option>";
	
	print $endRAZRModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-RAZR-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display MOTORIZR | MOTOROKR | MP | SLVRcontents ----
	//print $startModelsBox;
	print $divRIZR_ROKR_MP_SLVRHeader;
	print $beginMdSelArea.' style="top: 130px; left: 40px;">';
	print $startRIZR_ROKR_MP_SLVRModelSelect;
	for ($f=0; $f<sizeof($motorolaModels["MOTORIZR | MOTOROKR | MP | SLVR"]); $f++) 
		print "<option class='models-option-style' value='".base64_encode($motorolaModelsID["RIZR-ROKR-MP-SLVR"]["category_id"][$f])."'>".$motorolaModels["MOTORIZR | MOTOROKR | MP | SLVR"][$f]."</option>";
	
	print $endRIZR_ROKR_MP_SLVRModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-RIZR-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display V contents ----
	//print $startModelsBox;
	print $divVHeader;
	print $beginMdSelArea.' style="top: 150px;">';
	print $startVModelSelect;
	for ($g=0; $g<sizeof($motorolaModels["V"]); $g++) 
		print "<option class='models-option-style' value='".base64_encode($motorolaModelsID["V"]["category_id"][$g])."'>".$motorolaModels["V"][$g]."</option>";
	
	print $endVModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-V-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display W contents ----
	//print $startModelsBox;
	print $divWHeader;
	print $beginMdSelArea.' style="top: 170px;">';
	print $startWModelSelect;
	for ($h=0; $h<sizeof($motorolaModels["W"]); $h++) 
		print "<option class='models-option-style' value='".base64_encode($motorolaModelsID["W"]["category_id"][$h])."'>".$motorolaModels["W"][$h]."</option>";
	
	print $endWModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-W-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	print $brandBanner;						
}
    
    return array ($motorolaModels, $motorolaModelsID, $getMotorolaModelsKeys);
}
?>

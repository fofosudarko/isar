<?php

/*
	Create htc models drop down menu
	Input parameters:
	Array $modelsDB,
	String $brandName

	Output results:
	Array $htcModels,
	Array $getLGModelsKeys,
*/

function htcModelsDropDownMenu($brandName, $modelsDB) {
    $htcModels = array (
        "7 | A | C" => "",
        "D | E | F" => "",
        "G | HD | Hero" => "",
        "I | L | M" => "",
        "P | R" => "",
        "S" => "",
        "Sa | Se | Sh | Sn | Ta | Ti" => "",
        "Touch" => "",
        "TyTN | Wildfire" => "",
    );
    
    $htcModelsID = array ();
    
    $getModelsDB = $modelsDB;
    $getHTCModelsKeys = array_keys($htcModels);
    
    for ($counter=0; $counter<sizeof($getModelsDB["models_db_model_name"]); $counter++) {
        // REGEX pattern: "(^[7AaCc])", "(^[DdEeFf])", "(^[GgHh])", "(^[LlMmIi])", "(^[PpRr])",
        // REGEX pattern: "(^[Ss][^AaEeHhNn])", "(^[Ss][AaEeHhNn])|(^[Tt][^OoYy])", "([Tt][Oo][Uu][cC][hH])",
        // REGEX pattern: "(^[Tt][Yy])|(^[Ww])" 
        
        if ((ereg("[7AaCc]", $getHTCModelsKeys[0])) && (ereg("(^[7AaCc])", $getModelsDB["models_db_model_name"][$counter]))) {
            static $a=0;
            $htcModels["7 | A | C"][$a] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $htcModelsID["7AC"]["category_id"][$a] = $getModelsDB["models_db_category_id"][$counter];
            $a++;
        } else if ((ereg("[DdEeFf]", $getHTCModelsKeys[1])) && (ereg("(^[DdEeFf])", $getModelsDB["models_db_model_name"][$counter]))) {
            static $b=0;
            $htcModels["D | E | F"][$b] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $htcModelsID["DEF"]["category_id"][$b] = $getModelsDB["models_db_category_id"][$counter];
            $b+=1;
        } else if ((ereg("[GgHh]", $getHTCModelsKeys[2])) && (ereg("(^[GgHh])", $getModelsDB["models_db_model_name"][$counter]))) {
            static $c=0;
            $htcModels["G | HD | Hero"][$c] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $htcModelsID["GH"]["category_id"][$c] = $getModelsDB["models_db_category_id"][$counter];
            $c=$c+1;
        } else if ((ereg("[iILlMm]", $getHTCModelsKeys[3])) && (ereg("(^[LlMmIi])", $getModelsDB["models_db_model_name"][$counter]))) {
            static $d=0;
            $htcModels["I | L | M"][$d] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $htcModelsID["ILM"]["category_id"][$d] = $getModelsDB["models_db_category_id"][$counter];
            $d=$d+1;
        } else if ((ereg("[PpRr]", $getHTCModelsKeys[4])) && (ereg("(^[PpRr])", $getModelsDB["models_db_model_name"][$counter]))) {
            static $e=0;
            switch ($getModelsDB["models_db_model_name"][$counter]) {
            	case "P":
                	$htcModels["P | R"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
                	$htcModelsID["PR"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
                	break;
            	default: 
                	$htcModels["P | R"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
               		$htcModelsID["PR"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
            	}
            $e+=1;
        } else if ((ereg("[Ss]", $getHTCModelsKeys[5])) && (ereg("(^[Ss][^AaEeHhNn])", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
            static $f=0;
            $htcModels["S"][$f] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $htcModelsID["S"]["category_id"][$f] = $getModelsDB["models_db_category_id"][$counter];
            $f++;
        } else if ((ereg("[SsAaHhNnTtIi]", $getHTCModelsKeys[6])) && (ereg("(^[Ss][AaEeHhNn])|(^[Tt][^OoYy])", $getModelsDB["models_db_model_name"][$counter]))) {
            static $g=0;
            $htcModels["Sa | Se | Sh | Sn | Ta | Ti"][$g] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $htcModelsID["ST"]["category_id"][$g] = $getModelsDB["models_db_category_id"][$counter];
            $g++;
        } else if ((ereg("[TtOoUuCcHh]", $getHTCModelsKeys[7])) && (ereg("([Tt][Oo][Uu][cC][hH])", $getModelsDB["models_db_model_name"][$counter]))) {
            static $h=0;
            $htcModels["Touch"][$h] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $htcModelsID["Touch"]["category_id"][$h] = $getModelsDB["models_db_category_id"][$counter];
            $h+=1;
        } else if ((ereg("[TtYyWwIi]", $getHTCModelsKeys[8])) && (ereg("(^[Tt][Yy])|(^[Ww])", $getModelsDB["models_db_model_name"][$counter]))) {
            static $i=0;
            $htcModels["TyTN | Wildfire"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $htcModelsID["TW"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter];
            $i=$i+1;
        }
    }


function showHTCDropDownMenu($htcModels, $htcModelsID, $getHTCModelsKeys)
{
    
   /*
		Input parameters:
		Array $lgModels,
		Array $getLGModelsKeys

		Output parameters:
		String showLGDropDownMenu
	*/

$beginMdSelArea = <<<EOF
    <div class="md-sel-area"
EOF;

    $endMdSelArea = <<<EOF
    </div>
EOF;
	
	global $brandName;
	
	$_7AC = $getHTCModelsKeys[0];
	$DEF = $getHTCModelsKeys[1];
	$GH = $getHTCModelsKeys[2];
	$ILM = $getHTCModelsKeys[3];
	$PR = $getHTCModelsKeys[4];
	$S = $getHTCModelsKeys[5];
	$_ST = $getHTCModelsKeys[6];
	$Touch = $getHTCModelsKeys[7];
	$_TW = $getHTCModelsKeys[8];
	
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

// ---- 7AC ----
	$div7ACHeader = <<<EOF
	<div style="width: 300px; left: 235px;" class="header-box">
		<div style="" class="header-content"><h3><a title="$_7AC" href="#"><span>$_7AC</span></a></h3></div>
	</div>
EOF;

	$start7ACModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-7ac-model" name="select-7ac-model">
EOF;

$end7ACModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- DEF ----
	$divDEFHeader = <<<EOF
	<div style="width: 300px; left: 235px; top: 45px;" class="header-box">
		<div style="" class="header-content"><h3><a title="$DEF" href="#"><span>$DEF</span></a></h3></div>
	</div>
EOF;

	$startDEFModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-def-model" name="select-def-model">
EOF;

$endDEFModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- GH ----
	$divGHHeader = <<<EOF
	<div style="width: 400px; left: 180px; top: 80px;" class="header-box">
		<div style="" class="header-content"><h3><a title="$GH" href="#"><span>$GH</span></a></h3></div>
	</div>
EOF;

	$startGHModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-gh-model" name="select-gh-model">
EOF;

$endGHModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- ILM ----
	$divILMHeader = <<<EOF
	<div style="width: 300px; left: 235px; top: 115px;" class="header-box">
		<div style="" class="header-content"><h3><a title="$ILM" href="#"><span>$ILM</span></a></h3></div>
	</div>
EOF;

	$startILMModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-ilm-model" name="select-ilm-model">
EOF;

$endILMModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- PR ----
	$divPRHeader = <<<EOF
	<div style="width: 300px; left: 235px; top: 145px;" class="header-box">
		<div style="" class="header-content"><h3><a title="$PR" href="#"><span>$PR</span></a></h3></div>
	</div>
EOF;

	$startPRModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-pr-model" name="select-pr-model">
EOF;

$endPRModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- S ----
	$divSHeader = <<<EOF
	<div style="width: 300px; left: 235px; top: 175px;" class="header-box">
		<div style="" class="header-content"><h3><a title="$S" href="#"><span>$S</span></a></h3></div>
	</div>
EOF;

	$startSModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-s-model" name="select-s-model">
EOF;

$endSModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- _ST ----
	$div_STHeader = <<<EOF
	<div style="width: 500px; left: 135px; top: 205px;" class="header-box">
		<div style="" class="header-content"><h3><a title="$_ST" href="#"><span>$_ST</span></a></h3></div>
	</div>
EOF;

	$start_STModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-st-model" name="select-st-model">
EOF;

$end_STModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- Touch ----
	$divTouchHeader = <<<EOF
	<div style="width: 300px; left: 235px; top: 235px;" class="header-box">
		<div style="" class="header-content"><h3><a title="$Touch" href="#"><span>$Touch</span></a></h3></div>
	</div>
EOF;

	$startTouchModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-touch-model" name="select-touch-model">
EOF;

$endTouchModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- _TW ----
	$divTWHeader = <<<EOF
	<div style="width: 400px; left: 180px; top: 265px;" class="header-box">
		<div style="" class="header-content"><h3><a title="$_TW" href="#"><span>$_TW</span></a></h3></div>
	</div>
EOF;

	$startTWModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-tw-model" name="select-tw-model">
EOF;

$endTWModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- Display 7AC contents ----
	//print $startModelsBox;
	print $div7ACHeader;
	print $beginMdSelArea.' style="top: 35px;">';
	print $start7ACModelSelect;
	for ($a=0; $a<sizeof($htcModels["7 | A | C"]); $a++) {
		print "<option class='models-option-style' value='";
		print base64_encode($htcModelsID["7AC"]["category_id"][$a]);
		print "'>";
		print $htcModels["7 | A | C"][$a];
		print "</option>";
	}
	print $end7ACModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-7AC-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display DEF contents ----
	//print $startModelsBox;
	print $divDEFHeader;
	print $beginMdSelArea.' style="top: 65px;">';
	print $startDEFModelSelect;
	for ($b=0; $b<sizeof($htcModels["D | E | F"]); $b++) {
		print "<option class='models-option-style' value='";
		print base64_encode($htcModelsID["DEF"]["category_id"][$b]);
		print "'>";
		print $htcModels["D | E | F"][$b];
		print "</option>";
	}
	print $endDEFModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-DEF-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display GH contents ----
	//print $startModelsBox;
	print $divGHHeader;
	print $beginMdSelArea.' style="top: 100px;">';
	print $startGHModelSelect;
	for ($c=0; $c<sizeof($htcModels["G | HD | Hero"]); $c++) {
		print "<option class='models-option-style' value='";
		print base64_encode($htcModelsID["GH"]["category_id"][$c]);
		print "'>";
		print $htcModels["G | HD | Hero"][$c];
		print "</option>";
	}
	print $endGHModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-GH-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display ILM contents ----
	//print $startModelsBox;
	print $divILMHeader;
	print $beginMdSelArea.' style="top: 130px;">';
	print $startILMModelSelect;
	for ($d=0; $d<sizeof($htcModels["I | L | M"]); $d++) {
		print "<option class='models-option-style' value='";
		print base64_encode($htcModelsID["ILM"]["category_id"][$d]);
		print "'>";
		print $htcModels["I | L | M"][$d];
		print "</option>";
	}
	print $endILMModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-ILM-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display PR contents ----
	//print $startModelsBox;
	print $divPRHeader;
	print $beginMdSelArea.'style="top: 160px;">';
	print $startPRModelSelect;
	for ($e=0; $e<sizeof($htcModels["P | R"]); $e++) {
		print "<option class='models-option-style' value='";
		print base64_encode($htcModelsID["PR"]["category_id"][$e]);
		print "'>";
		print $htcModels["P | R"][$e];
		print "</option>";
	}
	print $endPRModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-PR-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display S contents ----
	//print $startModelsBox;
	print $divSHeader;
	print $beginMdSelArea." style='top: 190px;'>";
	print $startSModelSelect;
	for ($f=0; $f<sizeof($htcModels["S"]); $f++) {
		print "<option class='models-option-style' value='";
		print base64_encode($htcModelsID["S"]["category_id"][$f]);
		print "'>";
		print $htcModels["S"][$f];
		print "</option>";
	}
	print $endSModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-S-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display _ST contents ----
	//print $startModelsBox;
	print $div_STHeader;
	print $beginMdSelArea."style='top: 220px;'>";
	print $start_STModelSelect;
	for ($g=0; $g<sizeof($htcModels["Sa | Se | Sh | Sn | Ta | Ti"]); $g++) {
		print "<option class='models-option-style' value='";
		print base64_encode($htcModelsID["ST"]["category_id"][$g]);
		print "'>";
		print $htcModels["Sa | Se | Sh | Sn | Ta | Ti"][$g];
		print "</option>";
	}
	print $end_STModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-ST-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display Touch contents ----
	//print $startModelsBox;
	print $divTouchHeader;
	print $beginMdSelArea."style='top: 250px;'>";
	print $startTouchModelSelect;
	for ($h=0; $h<sizeof($htcModels["Touch"]); $h++) {
		print "<option class='models-option-style' value='";
		print base64_encode($htcModelsID["Touch"]["category_id"][$h]);
		print "'>";
		print $htcModels["Touch"][$h];
		print "</option>";
	}
	print $endTouchModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-Touch-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display _TW contents ----
	//print $startModelsBox;
	print $divTWHeader;
	print $beginMdSelArea." style='top: 280px;'>";
	print $startTWModelSelect;
	for ($i=0; $i<sizeof($htcModels["TyTN | Wildfire"]); $i++) {
		print "<option class='models-option-style' value='";
		print base64_encode($htcModelsID["TW"]["category_id"][$i]);
		print "'>";
		print $htcModels["TyTN | Wildfire"][$i];
		print "</option>";
	}
	print $endTWModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-TW-model");
	print $endMdSelArea;
	//print $endModelsBox;
	
	print $brandBanner;
}
    
    return array ($htcModels, $htcModelsID, $getHTCModelsKeys);
}

?>

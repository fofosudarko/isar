<?php

/*
	Create sony ericsson models drop down menu
	Input parameters:
	Array $modelsDB,
	String $brandName

	Output results:
	Array $sonyericssonModels,
	Array $getSonyEricssonModelsKeys,
*/

function sonyericssonModelsDropDownMenu($brandName, $modelsDB) {
    $sonyericssonModels = array (
        "A | C | E" => "",
        "F | G | H" => "",
        "J" => "",
        "K" => "",
        "L | M | N | P" => "",
        "R | S" => "",
        "T | V" => "",
        "W" => "",
        "X | Y" => "",
        "Z" => "",
    );
    
    $sonyericssonModelsID = array ();
    
    $getModelsDB = $modelsDB;
    $getSonyEricssonModelsKeys = array_keys($sonyericssonModels);
    
    for ($counter=0; $counter<sizeof($getModelsDB["models_db_model_name"]); $counter++) {
        // REGEX pattern:
        // REGEX pattern:
        
        if ((preg_match("/[AaCcEe]/", $getSonyEricssonModelsKeys[0])) && (preg_match("/^([Aa])|^([Cc])|^([Ee])/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $a=0;

            if (ereg("^[Cc]$", $getModelsDB["models_db_model_name"][$counter])) {
                $sonyericssonModels["A | C | E"][$a] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["ACE"]["category_id"][$a] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $sonyericssonModels["A | C | E"][$a] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["ACE"]["category_id"][$a] = $getModelsDB["models_db_category_id"][$counter];
            }

            $a++;
        } else if ((preg_match("/[FfGgHh]/", $getSonyEricssonModelsKeys[1])) && (preg_match("/^F$|^G|^[Hh]azel/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $b=0;

            $sonyericssonModels["F | G | H"][$b] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $sonyericssonModelsID["FGH"]["category_id"][$b] = $getModelsDB["models_db_category_id"][$counter];
            
			$b+=1;
        } else if ((preg_match("/[Jj]/", $getSonyEricssonModelsKeys[2])) && (preg_match("/^([Jj])/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $c=0;

            if (preg_match("/^Jal/", $getModelsDB["models_db_model_name"][$counter])) {
                $sonyericssonModels["J"][$c] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["J"]["category_id"][$c] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $sonyericssonModels["J"][$c] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["J"]["category_id"][$c] = $getModelsDB["models_db_category_id"][$counter];
            }

            $c=$c+1;
        } else if ((preg_match("/[Kk]/", $getSonyEricssonModelsKeys[3])) && (preg_match("/^[Kk]$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $d=0;

            $sonyericssonModels["K"][$d] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $sonyericssonModelsID["K"]["category_id"][$d] = $getModelsDB["models_db_category_id"][$counter];
            
			$d++;
        } else if ((preg_match("/[LlMmNnPp]/", $getSonyEricssonModelsKeys[4])) && (preg_match("/^[LlMmNnPp]/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $e=0;

            if (ereg("^[Mm]$|^[Pp]$", $getModelsDB["models_db_model_name"][$counter])) {
                $sonyericssonModels["L | M | N | P"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["LMNP"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $sonyericssonModels["L | M | N | P"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["LMNP"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
            }

            $e+=1;
        } else if ((preg_match("/[RrSs]/", $getSonyEricssonModelsKeys[5])) && (preg_match("/^[RrSs]/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $f=0;

            if (ereg("^[Ss][AaPp]", $getModelsDB["models_db_model_name"][$counter])) {
                $sonyericssonModels["R | S"][$f] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["RS"]["category_id"][$f] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $sonyericssonModels["R | S"][$f] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["RS"]["category_id"][$f] = $getModelsDB["models_db_category_id"][$counter];
            }

            $f+=1;
        } else if ((preg_match("/[TtVv]/", $getSonyEricssonModelsKeys[6])) && (preg_match("/^[Tt]|^[Vv]/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $g=0;

            if (ereg("^Viv|^txt", $getModelsDB["models_db_model_name"][$counter])) {
                $sonyericssonModels["T | V"][$g] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["TV"]["category_id"][$g] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $sonyericssonModels["T | V"][$g] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
                $sonyericssonModelsID["TV"]["category_id"][$g] = $getModelsDB["models_db_category_id"][$counter];
            }

            $g++;
        } else if ((preg_match("/[Ww]/", $getSonyEricssonModelsKeys[7])) && (preg_match("/^[Ww]$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $h=0;

            $sonyericssonModels["W"][$h] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $sonyericssonModelsID["W"]["category_id"][$h] = $getModelsDB["models_db_category_id"][$counter];
            
			$h+=1;
        } else if ((preg_match("/[XxYy]/", $getSonyEricssonModelsKeys[8])) && (preg_match("/^[Xx]|^[Yy]/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $i=0;

            $sonyericssonModels["X | Y"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
            $sonyericssonModelsID["XY"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter];
            
			$i+=1;
        } else if ((preg_match("/[Zz]/", $getSonyEricssonModelsKeys[9])) && (preg_match("/^[Zz]/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $j=0;

            $sonyericssonModels["Z"][$j] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $sonyericssonModelsID["Z"]["category_id"][$j] = $getModelsDB["models_db_category_id"][$counter];
            
			$j=$j+1;
        }
    }
    
function showSonyEricssonDropDownMenu($sonyericssonModels, $sonyericssonModelsID, $getSonyEricssonModelsKeys) {

/*
		Input parameters:
		Array $sonyericssonModels,
		Array $getSonyEricssonModelsKeys

		Output parameters:
		String showSonyEricssonDropDownMenu
*/

$beginMdSelArea = <<<EOF
    <div class="md-sel-area"
EOF;

    $endMdSelArea = <<<EOF
    </div>
EOF;

    global $brandName;
    
    $ACE = $getSonyEricssonModelsKeys[0];
    $FGH = $getSonyEricssonModelsKeys[1];
    $J = $getSonyEricssonModelsKeys[2];
    $K = $getSonyEricssonModelsKeys[3];
    $LMNP = $getSonyEricssonModelsKeys[4];
    $RS = $getSonyEricssonModelsKeys[5];
    $TV = $getSonyEricssonModelsKeys[6];
    $W = $getSonyEricssonModelsKeys[7];
    $XY = $getSonyEricssonModelsKeys[8];
    $Z = $getSonyEricssonModelsKeys[9];
    
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

// ---- A | C | E ----
	$divACEHeader = <<<EOF
	<div style="top: 0px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$ACE"><span>$ACE</span></a></h3></div>
	</div>
EOF;

	$startACEModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-ACE-model" name="select-ACE-model">
EOF;

	$endACEModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- F | G | H ----
	$divFGHHeader = <<<EOF
	<div style="top: 20px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$FGH"><span>$FGH</span></a></h3></div>
	</div>
EOF;

	$startFGHModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-FGH-model" name="select-FGH-model">
EOF;

	$endFGHModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- J ----
	$divJHeader = <<<EOF
	<div style="top: 40px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$J"><span>$J</span></a></h3></div>
	</div>
EOF;

	$startJModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-J-model" name="select-J-model">
EOF;

	$endJModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- K ----
	$divKHeader = <<<EOF
	<div style="top: 60px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$K"><span>$K</span></a></h3></div>
	</div>
EOF;

	$startKModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-K-model" name="select-K-model">
EOF;

	$endKModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- L | M | N | P ----
	$divLMNPHeader = <<<EOF
	<div style="top: 80px; width: 400px; left: 180px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$LMNP"><span>$LMNP</span></a></h3></div>
	</div>
EOF;

	$startLMNPModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-LMNP-model" name="select-LMNP-model">
EOF;

	$endLMNPModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- R | S ----
	$divRSHeader = <<<EOF
	<div style="top: 100px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$RS"><span>$RS</span></a></h3></div>
	</div>
EOF;

	$startRSModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-RS-model" name="select-RS-model">
EOF;

	$endRSModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- T | V ----
	$divTVHeader = <<<EOF
	<div style="top: 120px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$TV"><span>$TV</span></a></h3></div>
	</div>
EOF;

	$startTVModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-TV-model" name="select-TV-model">
EOF;

	$endTVModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- W ----
	$divWHeader = <<<EOF
	<div style="top: 140px;" class="header-box">
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

// ---- X | Y ----
	$divXYHeader = <<<EOF
	<div style="top: 160px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$XY"><span>$XY</span></a></h3></div>
	</div>
EOF;

	$startXYModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-XY-model" name="select-XY-model">
EOF;

	$endXYModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- Z ----
	$divZHeader = <<<EOF
	<div style="top: 180px;" class="header-box">
		<div class="header-content"><h3><a href="#" title="$Z"><span>$Z</span></a></h3></div>
	</div>
EOF;

	$startZModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-Z-model" name="select-Z-model">
EOF;

	$endZModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- Display A | C | E contents ----
	
	print $divACEHeader;
	print $beginMdSelArea.' style="top: 10px;">';
	print $startACEModelSelect;
	for ($a=0; $a<sizeof($sonyericssonModels["A | C | E"]); $a++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["ACE"]["category_id"][$a]);
		print "'>";
		print $sonyericssonModels["A | C | E"][$a];
		print "</option>";
	}
	print $endACEModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-ACE-model");
	print $endMdSelArea;
	
// ---- Display F | G | H contents ----
	
	print $divFGHHeader;
	print $beginMdSelArea.' style="top: 30px;">';
	print $startFGHModelSelect;
	for ($b=0; $b<sizeof($sonyericssonModels["F | G | H"]); $b++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["FGH"]["category_id"][$b]);
		print "'>";
		print $sonyericssonModels["F | G | H"][$b];
		print "</option>";
	}
	print $endFGHModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-FGH-model");
	print $endMdSelArea;
		
// ---- Display J contents ----
	
	print $divJHeader;
	print $beginMdSelArea.' style="top: 50px;">';
	print $startJModelSelect;
	for ($c=0; $c<sizeof($sonyericssonModels["J"]); $c++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["J"]["category_id"][$c]);
		print "'>";
		print $sonyericssonModels["J"][$c];
		print "</option>";
	}
	print $endJModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-J-model");
	print $endMdSelArea;
		
// ---- Display K contents ----
	
	print $divKHeader;
	print $beginMdSelArea.' style="top: 70px;">';
	print $startKModelSelect;
	for ($d=0; $d<sizeof($sonyericssonModels["K"]); $d++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["K"]["category_id"][$d]);
		print "'>";
		print $sonyericssonModels["K"][$d];
		print "</option>";
	}
	print $endKModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-K-model");
	print $endMdSelArea;
		
// ---- Display L | M | N | P contents ----
	
	print $divLMNPHeader;
	print $beginMdSelArea.' style="top: 90px;">';
	print $startLMNPModelSelect;
	for ($e=0; $e<sizeof($sonyericssonModels["L | M | N | P"]); $e++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["LMNP"]["category_id"][$e]);
		print "'>";
		print $sonyericssonModels["L | M | N | P"][$e];
		print "</option>";
	}
	print $endLMNPModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-LMNP-model");
	print $endMdSelArea;
	
	
// ---- Display R | S contents ----
	
	print $divRSHeader;
	print $beginMdSelArea.' style="top: 110px;">';
	print $startRSModelSelect;
	for ($f=0; $f<sizeof($sonyericssonModels["R | S"]); $f++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["RS"]["category_id"][$f]);
		print "'>";
		print $sonyericssonModels["R | S"][$f];
		print "</option>";
	}
	print $endRSModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-RS-model");
	print $endMdSelArea;
		
// ---- Display T | V contents ----
	
	print $divTVHeader;
	print $beginMdSelArea.' style="top: 130px;">';
	print $startTVModelSelect;
	for ($g=0; $g<sizeof($sonyericssonModels["T | V"]); $g++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["TV"]["category_id"][$g]);
		print "'>";
		print $sonyericssonModels["T | V"][$g];
		print "</option>";
	}
	print $endTVModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-TV-model");
	print $endMdSelArea;
		
// ---- Display W contents ----
	
	print $divWHeader;
	print $beginMdSelArea.' style="top: 150px;">';
	print $startWModelSelect;
	for ($h=0; $h<sizeof($sonyericssonModels["W"]); $h++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["W"]["category_id"][$h]);
		print "'>";
		print $sonyericssonModels["W"][$h];
		print "</option>";
	}
	print $endWModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-W-model");
	print $endMdSelArea;
		
// ---- Display X | Y contents ----
	
	print $divXYHeader;
	print $beginMdSelArea.' style="top: 170px;">';
	print $startXYModelSelect;
	for ($i=0; $i<sizeof($sonyericssonModels["X | Y"]); $i++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["XY"]["category_id"][$i]);
		print "'>";
		print $sonyericssonModels["X | Y"][$i];
		print "</option>";
	}
	print $endXYModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-XY-model");
	print $endMdSelArea;
		
// ---- Display Z contents ----
	
	print $divZHeader;
	print $beginMdSelArea.' style="top: 190px;">';
	print $startZModelSelect;
	for ($j=0; $j<sizeof($sonyericssonModels["Z"]); $j++) {
		print "<option class='models-option-style' value='";
		print base64_encode($sonyericssonModelsID["Z"]["category_id"][$j]);
		print "'>";
		print $sonyericssonModels["Z"][$j];
		print "</option>";
	}
	print $endZModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-Z-model");
	print $endMdSelArea;
		
	print $brandBanner;								
}

    return array ($sonyericssonModels, $sonyericssonModelsID, $getSonyEricssonModelsKeys);
}

?>

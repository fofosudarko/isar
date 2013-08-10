<?php

/*
	Create samsung models drop down menu
	Input parameters:
	Array $modelsDB,
	String $brandName

	Output results:
	Array $samsungModels,
	Array $getSamsungModelsKeys,
*/

function samsungModelsDropDownMenu($brandName, $modelsDB) {
    $samsungModels = array (
        "B | C | E" => "",
        "GT-B | GT-C" => "",
        "GT-E | GT-I" => "",
        "GT-M | GT-P | GT-S" => "",
        "I | Jet | M | S" => "",
        "SGH-A | SGH-B | SGH-C" => "",
        "SGH-D" => "",
        "SGH-E" => "",
        "SGH-F | SGH-G" => "",
        "SGH-I | SGH-J" => "",
        "SGH-L | SGH-M" => "",
        "SGH-P | SGH-S | SGH-U | SGH-V" => "",
        "SGH-X" => "",
        "SGH-Z" => "",
        "Ultra" => "",
    );
    
    $samsungModelsID = array ();
    
    $getModelsDB = $modelsDB;
    $getSamsungModelsKeys = array_keys($samsungModels);
    
    for ($counter=0; $counter<sizeof($getModelsDB["models_db_model_name"]); $counter++) {
        // REGEX pattern: 
        
        if ((ereg("[BbcCEe]", $getSamsungModelsKeys[0])) && (ereg("^([Bb])$|^([Cc])$|^([Ee])$", $getModelsDB["models_db_model_name"][$counter]))) {
            static $a=0;

            $samsungModels["B | C | E"][$a] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["BCE"]["category_id"][$a] = $getModelsDB["models_db_category_id"][$counter];
            
			$a++;
        } else if ((preg_match("/[GgBbCcTt]/", $getSamsungModelsKeys[1])) && (preg_match("/^([Gg][Tt]-[Bb])$|^([Gg][Tt]-[Cc])$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $b=0;

            $samsungModels["GT-B | GT-C"][$b] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["GTBC"]["category_id"][$b] = $getModelsDB["models_db_category_id"][$counter];
            
			$b++;
        } else if ((preg_match("/[GgEeTtiI]/", $getSamsungModelsKeys[2])) && (preg_match("/^([Gg][Tt]-[Ee])$|^([Gg][Tt]-[Ii])$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $c=0;

            $samsungModels["GT-E | GT-I"][$c] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["GTEI"]["category_id"][$c] = $getModelsDB["models_db_category_id"][$counter];
            
			$c+=1;
        } else if ((preg_match("/([GgMmTtSsPp])/", $getSamsungModelsKeys[3])) && (preg_match("/^([Gg][Tt]-[mM])$|^([Gg][Tt]-[Pp])$|^([Gg][Tt]-[Ss])$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $d=0;

            $samsungModels["GT-M | GT-P | GT-S"][$d] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["GTMPS"]["category_id"][$d] = $getModelsDB["models_db_category_id"][$counter];
            
			$d+=1;
        } else if ((preg_match("/[IiJjeEtTmM]/", $getSamsungModelsKeys[4])) && (preg_match("/^([Ii])$|^([Jj][Ee][Tt])$|^([Mm])$|^S$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $e=0;

            if ($getModelsDB["models_db_model_name"][$counter] === "Jet") {
                $samsungModels["I | Jet | M | S"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter];
                $samsungModelsID["IJMS"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $samsungModels["I | Jet | M | S"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
                $samsungModelsID["IJMS"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
            }

            $e=$e+1;
        } else if ((preg_match("/[SsGgHhAaBbCc]/", $getSamsungModelsKeys[5])) && (preg_match("/^(SGH-A)$|^(SGH-B)$|^(SGH-C)$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $f=0;

            $samsungModels["SGH-A | SGH-B | SGH-C"][$f] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["SGHABC"]["category_id"][$f] = $getModelsDB["models_db_category_id"][$counter];
            
			$f+=1;
        } else if ((preg_match("/[SsGgHhDd]/", $getSamsungModelsKeys[6])) && (preg_match("/^(SGH-D)$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $g=0;

            $samsungModels["SGH-D"][$g] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["SGHD"]["category_id"][$g] = $getModelsDB["models_db_category_id"][$counter];
            
			$g+=1;
        } else if ((preg_match("/[SsGgHhEe]/", $getSamsungModelsKeys[7])) && (preg_match("/^(SGH-E)$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $h=0;

            $samsungModels["SGH-E"][$h] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["SGHE"]["category_id"][$h] = $getModelsDB["models_db_category_id"][$counter];
            
			$h+=1;
        } else if ((preg_match("/[SsGgHhFfGg]/", $getSamsungModelsKeys[8])) && (preg_match("/^(SGH-F)$|^(SGH-G)$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $i=0;

            $samsungModels["SGH-F | SGH-G"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["SGHFG"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter];
            
			$i+=1;
        } else if ((preg_match("/[SsGgHhIiJj]/", $getSamsungModelsKeys[9])) && (preg_match("/^(SGH-I)$|^(SGH-J)$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $j=0;

            $samsungModels["SGH-I | SGH-J"][$j] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["SGHIJ"]["category_id"][$j] = $getModelsDB["models_db_category_id"][$counter];
            
			$j+=1;
        } else if ((preg_match("/[SsGgHhLlMm]/", $getSamsungModelsKeys[10])) && (preg_match("/^(SGH-L)$|^(SGH-M)$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $k=0;

            $samsungModels["SGH-L | SGH-M"][$k] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["SGHLM"]["category_id"][$k] = $getModelsDB["models_db_category_id"][$counter];
            
			$k=$k+1;
        } else if ((preg_match("/[SsGgHhPpUuVv]/", $getSamsungModelsKeys[11])) && (preg_match("/^(SGH-P)$|^(SGH-S)$|^(SGH-U)$|^(SGH-V)$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $l=0;

            $samsungModels["SGH-P | SGH-S | SGH-U | SGH-V"][$l] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["SGHPSUV"]["category_id"][$l] = $getModelsDB["models_db_category_id"][$counter];
            
			$l=$l+1;
        } else if ((preg_match("/[SsGgHhXx]/", $getSamsungModelsKeys[12])) && (preg_match("/^(SGH-X)$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $m=0;

            $samsungModels["SGH-X"][$m] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["SGHX"]["category_id"][$m] = $getModelsDB["models_db_category_id"][$counter];
            
			$m+=1;
        } else if ((preg_match("/[SsGgHhZz]/", $getSamsungModelsKeys[13])) && (preg_match("/^(SGH-Z)$/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $n=0;

            $samsungModels["SGH-Z"][$n] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["SGHZ"]["category_id"][$n] = $getModelsDB["models_db_category_id"][$counter];
            
			$n+=1;
        } else if ((preg_match("/[UuTtAaLlRr]/", $getSamsungModelsKeys[14])) && (preg_match("/^(Ultra)/", $getModelsDB["models_db_model_name"][$counter]))) {
            static $o=0;

            $samsungModels["Ultra"][$o] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter];
            $samsungModelsID["Ultra"]["category_id"][$o] = $getModelsDB["models_db_category_id"][$counter];
            
			$o+=1;
        }
    }

function showSamsungDropDownMenu($samsungModels, $samsungModelsID, $getSamsungModelsKeys) {
    
/*
		Input parameters:
		Array $samsungModels,
		Array $getSamsungModelsKeys

		Output parameters:
		String showSamsungDropDownMenu
*/

$beginMdSelArea = <<<EOF
    <div class="md-sel-area"
EOF;

    $endMdSelArea = <<<EOF
    </div>
EOF;

    global $brandName;
    
    $BCE = $getSamsungModelsKeys[0];
    $GT_BC = $getSamsungModelsKeys[1];
    $GT_EI = $getSamsungModelsKeys[2];
    $GT_MPS = $getSamsungModelsKeys[3];
    $IJetMS = $getSamsungModelsKeys[4];
    $SGH_ABC = $getSamsungModelsKeys[5];
    $SGH_D = $getSamsungModelsKeys[6];
    $SGH_E = $getSamsungModelsKeys[7];
    $SGH_FG = $getSamsungModelsKeys[8];
    $SGH_IJ = $getSamsungModelsKeys[9];
    $SGH_LM = $getSamsungModelsKeys[10];
    $SGH_PSUV = $getSamsungModelsKeys[11];
    $SGH_X = $getSamsungModelsKeys[12];
    $SGH_Z = $getSamsungModelsKeys[13];
    $Ultra = $getSamsungModelsKeys[14];
    
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

// ---- B | C | E ----
	$divBCEHeader = <<<EOF
	<div style="top: 0px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$BCE"><span>$BCE</span></a></h3></div>
	</div>
EOF;

	$startBCEModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-BCE-model" name="select-BCE-model">
EOF;

	$endBCEModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- GT-B | GT-C ----
	$divGT_BCHeader = <<<EOF
	<div style="width: 400px; left: 175px; top: 20px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$GT_BC"><span>$GT_BC</span></a></h3></div>
	</div>
EOF;

	$startGT_BCModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-GTBC-model" name="select-GTBC-model">
EOF;

	$endGT_BCModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- GT-E | GT-I ----
	$divGT_EIHeader = <<<EOF
	<div style="width: 400px; left: 175px; top: 40px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$GT_EI"><span>$GT_EI</span></a></h3></div>
	</div>
EOF;

	$startGT_EIModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-GTEI-model" name="select-GTEI-model">
EOF;

	$endGT_EIModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- GT-M | GT-P | GT-S ----
	$divGT_MPSHeader = <<<EOF
	<div style="width: 400px; left: 175px; top: 60px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$GT_MPS"><span>$GT_MPS</span></a></h3></div>
	</div>
EOF;

	$startGT_MPSModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-GTMPS-model" name="select-GTMPS-model">
EOF;

	$endGT_MPSModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- I | Jet | M | S----
	$divIJetMSHeader = <<<EOF
	<div style="width: 400px; left: 175px; top: 80px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$IJetMS"><span>$IJetMS</span></a></h3></div>
	</div>
EOF;

	$startIJetMSModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-IJMS-model" name="select-IJMS-model">
EOF;

	$endIJetMSModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- SGH-A | SGH-B | SGH-C ----
	$divSGH_ABCHeader = <<<EOF
	<div style="width: 500px; left: 120px; top: 100px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$SGH_ABC"><span>$SGH_ABC</span></a></h3></div>
	</div>
EOF;

	$startSGH_ABCModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-SGH-ABC-model" name="select-SGH-ABC-model">
EOF;

	$endSGH_ABCModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- SGH-D ----
	$divSGH_DHeader = <<<EOF
	<div style="top: 120px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$SGH_D"><span>$SGH_D</span></a></h3></div>
	</div>
EOF;

	$startSGH_DModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-SGH-D-model" name="select-SGH-D-model">
EOF;

	$endSGH_DModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- SGH-E ----
	$divSGH_EHeader = <<<EOF
	<div style="top: 140px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$SGH_E"><span>$SGH_E</span></a></h3></div>
	</div>
EOF;

	$startSGH_EModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-SGH-E-model" name="select-SGH-E-model">
EOF;

	$endSGH_EModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- SGH-F | SGH-G ----
	$divSGH_FGHeader = <<<EOF
	<div style="top: 160px; width: 400px; left: 175px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$SGH_FG"><span>$SGH_FG</span></a></h3></div>
	</div>
EOF;

	$startSGH_FGModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-SGH-FG-model" name="select-SGH-FG-model">
EOF;

	$endSGH_FGModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- SGH-I | SGH-J ----
	$divSGH_IJHeader = <<<EOF
	<div style="top: 180px; width: 400px; left: 175px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$SGH_IJ"><span>$SGH_IJ</span></a></h3></div>
	</div>
EOF;

	$startSGH_IJModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-SGH-IJ-model" name="select-SGH-IJ-model">
EOF;

	$endSGH_IJModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- SGH-L | SGH-M ----
	$divSGH_LMHeader = <<<EOF
	<div style="top: 200px; width: 400px; left: 175px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$SGH_LM"><span>$SGH_LM</span></a></h3></div>
	</div>
EOF;

	$startSGH_LMModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-SGH-LM-model" name="select-SGH-LM-model">
EOF;

	$endSGH_LMModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- SGH-P | SGH-S | SGH-U | SGH-V ----
	$divSGH_PSUVHeader = <<<EOF
	<div style="top: 220px; left: 10px; width: 720px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$SGH_PSUV"><span>$SGH_PSUV</span></a></h3></div>
	</div>
EOF;

	$startSGH_PSUVModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-SGH-PSUV-model" name="select-SGH-PSUV-model">
EOF;

	$endSGH_PSUVModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- SGH-X ----
	$divSGH_XHeader = <<<EOF
	<div style="top: 240px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$SGH_X"><span>$SGH_X</span></a></h3></div>
	</div>
EOF;

	$startSGH_XModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-SGH-X-model" name="select-SGH-X-model">
EOF;

	$endSGH_XModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- SGH-Z ----
	$divSGH_ZHeader = <<<EOF
	<div style="top: 260px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$SGH_Z"><span>$SGH_Z</span></a></h3></div>
	</div>
EOF;

	$startSGH_ZModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-SGH-Z-model" name="select-SGH-Z-model">
EOF;

	$endSGH_ZModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- Ultra ----
	$divUltraHeader = <<<EOF
	<div style="top: 280px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$Ultra"><span>$Ultra</span></a></h3></div>
	</div>
EOF;

	$startUltraModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-Ultra-model" name="select-Ultra-model">
EOF;

	$endUltraModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- Display B | C | E contents ----
	//print $startModelsBox;
	print $divBCEHeader;
	print $beginMdSelArea.' style="top: 10px;">';
	print $startBCEModelSelect;
	for ($a=0; $a<sizeof($samsungModels["B | C | E"]); $a++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["BCE"]["category_id"][$a]);
		print "'>";
		print $samsungModels["B | C | E"][$a];
		print "</option>";
	}
	print $endBCEModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-BCE-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";

// ---- Display GT-B | GT-C contents ----
	//print $startModelsBox;
	print $divGT_BCHeader;
	print $beginMdSelArea.' style="top: 30px;">';
	print $startGT_BCModelSelect;
	for ($b=0; $b<sizeof($samsungModels["GT-B | GT-C"]); $b++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["GTBC"]["category_id"][$b]);
		print "'>";
		print $samsungModels["GT-B | GT-C"][$b];
		print "</option>";
	}
	print $endGT_BCModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-GTBC-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display GT-E | GT-I contents ----
	//print $startModelsBox;
	print $divGT_EIHeader;
	print $beginMdSelArea.' style="top: 50px;">';
	print $startGT_EIModelSelect;
	for ($c=0; $c<sizeof($samsungModels["GT-E | GT-I"]); $c++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["GTEI"]["category_id"][$c]);
		print "'>";
		print $samsungModels["GT-E | GT-I"][$c];
		print "</option>";
	}
	print $endGT_EIModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-GTEI-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display GT-M | GT-P | GT-S contents ----
	//print $startModelsBox;
	print $divGT_MPSHeader;
	print $beginMdSelArea.' style="top: 70px;">';
	print $startGT_MPSModelSelect;
	for ($d=0; $d<sizeof($samsungModels["GT-M | GT-P | GT-S"]); $d++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["GTMPS"]["category_id"][$d]);
		print "'>";
		print $samsungModels["GT-M | GT-P | GT-S"][$d];
		print "</option>";
	}
	print $endGT_MPSModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-GTMPS-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display I | Jet | M | S contents ----
	//print $startModelsBox;
	print $divIJetMSHeader;
	print $beginMdSelArea.' style="top: 90px;">';
	print $startIJetMSModelSelect;
	for ($e=0; $e<sizeof($samsungModels["I | Jet | M | S"]); $e++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["IJMS"]["category_id"][$e]);
		print "'>";
		print $samsungModels["I | Jet | M | S"][$e];
		print "</option>";
	}
	print $endIJetMSModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-IJMS-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display SGH-A | SGH-B | SGH-C contents ----
	//print $startModelsBox;
	print $divSGH_ABCHeader;
	print $beginMdSelArea.' style="top: 110px;">';
	print $startSGH_ABCModelSelect;
	for ($f=0; $f<sizeof($samsungModels["SGH-A | SGH-B | SGH-C"]); $f++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["SGHABC"]["category_id"][$f]);
		print "'>";
		print $samsungModels["SGH-A | SGH-B | SGH-C"][$f];
		print "</option>";
	}
	print $endSGH_ABCModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-SABC-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display SGH-D contents ----
	//print $startModelsBox;
	print $divSGH_DHeader;
	print $beginMdSelArea.' style="top: 130px;">';
	print $startSGH_DModelSelect;
	for ($g=0; $g<sizeof($samsungModels["SGH-D"]); $g++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["SGHD"]["category_id"][$g]);
		print "'>";
		print $samsungModels["SGH-D"][$g];
		print "</option>";
	}
	print $endSGH_DModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-SD-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display SGH-E contents ----
	//print $startModelsBox;
	print $divSGH_EHeader;
	print $beginMdSelArea.' style="top: 150px;">';
	print $startSGH_EModelSelect;
	for ($h=0; $h<sizeof($samsungModels["SGH-E"]); $h++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["SGHE"]["category_id"][$h]);
		print "'>";
		print $samsungModels["SGH-E"][$h];
		print "</option>";
	}
	print $endSGH_EModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-SE-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display SGH-F | SGH-G contents ----
	//print $startModelsBox;
	print $divSGH_FGHeader;
	print $beginMdSelArea.' style="top: 170px;">';
	print $startSGH_FGModelSelect;
	for ($i=0; $i<sizeof($samsungModels["SGH-F | SGH-G"]); $i++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["SGHFG"]["category_id"][$i]);
		print "'>";
		print $samsungModels["SGH-F | SGH-G"][$i];
		print "</option>";
	}
	print $endSGH_FGModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-SFG-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display SGH-I | SGH-J contents ----
	//print $startModelsBox;
	print $divSGH_IJHeader;
	print $beginMdSelArea.' style="top: 190px;">';
	print $startSGH_IJModelSelect;
	for ($j=0; $j<sizeof($samsungModels["SGH-I | SGH-J"]); $j++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["SGHIJ"]["category_id"][$j]);
		print "'>";
		print $samsungModels["SGH-I | SGH-J"][$j];
		print "</option>";
	}
	print $endSGH_IJModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-SIJ-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display SGH-L | SGH-M contents ----
	//print $startModelsBox;
	print $divSGH_LMHeader;
	print $beginMdSelArea.' style="top: 210px;">';
	print $startSGH_LMModelSelect;
	for ($k=0; $k<sizeof($samsungModels["SGH-L | SGH-M"]); $k++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["SGHLM"]["category_id"][$k]);
		print "'>";
		print $samsungModels["SGH-L | SGH-M"][$k];
		print "</option>";
	}
	print $endSGH_LMModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-SLM-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display SGH-P | SGH-S | SGH-U | SGH-V contents ----
	//print $startModelsBox;
	print $divSGH_PSUVHeader;
	print $beginMdSelArea.' style="top: 230px;">';
	print $startSGH_PSUVModelSelect;
	for ($l=0; $l<sizeof($samsungModels["SGH-P | SGH-S | SGH-U | SGH-V"]); $l++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["SGHPSUV"]["category_id"][$l]);
		print "'>";
		print $samsungModels["SGH-P | SGH-S | SGH-U | SGH-V"][$l];
		print "</option>";
	}
	print $endSGH_PSUVModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-SPSUV-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display SGH-X contents ----
	//print $startModelsBox;
	print $divSGH_XHeader;
	print $beginMdSelArea.' style="top: 250px;">';
	print $startSGH_XModelSelect;
	for ($m=0; $m<sizeof($samsungModels["SGH-X"]); $m++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["SGHX"]["category_id"][$m]);
		print "'>";
		print $samsungModels["SGH-X"][$m];
		print "</option>";
	}
	print $endSGH_XModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-SX-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display SGH-Z contents ----
	
	print $divSGH_ZHeader;
	print $beginMdSelArea.' style="top: 270px;">';
	print $startSGH_ZModelSelect;
	for ($n=0; $n<sizeof($samsungModels["SGH-Z"]); $n++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["SGHZ"]["category_id"][$n]);
		print "'>";
		print $samsungModels["SGH-Z"][$n];
		print "</option>";
	}
	print $endSGH_ZModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-SZ-model");
	print $endMdSelArea;
	
	
// ---- Display Ultra contents ----
	//print $startModelsBox;
	print $divUltraHeader;
	print $beginMdSelArea.' style="top: 290px;">';
	print $startUltraModelSelect;
	for ($o=0; $o<sizeof($samsungModels["Ultra"]); $o++) {
		print "<option class='models-option-style' value='";
		print base64_encode($samsungModelsID["Ultra"]["category_id"][$o]);
		print "'>";
		print $samsungModels["Ultra"][$o];
		print "</option>";
	}
	print $endUltraModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-Ultra-model");
	print $endMdSelArea;
	//print $endModelsBox;

	print $brandBanner;													
}

    return array ($samsungModels, $samsungModelsID, $getSamsungModelsKeys);
}

?>

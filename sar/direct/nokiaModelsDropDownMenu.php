<?php

/*
	Create motorola models drop down menu
	Input parameters:
	Array $modelsDB,
	String $brandName

	Output results:
	Array $nokiaModels,
	Array $getNokiaModelsKeys,
*/

function nokiaModelsDropDownMenu($brandName, $modelsDB) {
    $nokiaModels = array(
        "1000" => "",
        "2000" => "",
        "3000" => "",
        "5000" => "",
        "6000" => "",
        "7000" => "",
        "8000" => "",
        "9000" => "",
        "C" => "",
        "E" => "",
        "N-Gage" => "",
        "N7" => "",
        "N8" => "",
        "N9" => "",        
        "X" => "",
    );
    
    $nokiaModelsID = array();
    
    $getModelsDB = $modelsDB;
    $getNokiaModelsKeys = array_keys($nokiaModels);
    
    for ($counter=0; $counter<sizeof($getModelsDB["models_db_model_name"]); $counter++) {
        // REGEX pattern: "1000", "2000", "3000", "5000", "6000", "7000", "8000", "9000"
        // REGEX pattern: "C", "E", "N-Gage", "N7", "N8", "N9", "X"
        
        if ((ereg("1000", $getNokiaModelsKeys[0])) && (ereg("^1", $getModelsDB["models_db_model_name"][$counter]))) {
            static $a=0;

            if (preg_match("/([cC]lassic)|([sS]lide)/", $getModelsDB["models_db_category"][$counter])) {
                $nokiaModels["1000"][$a] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["1000"]["category_id"][$a] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $nokiaModels["1000"][$a] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["1000"]["category_id"][$a] = $getModelsDB["models_db_category_id"][$counter];
            }

            $a++;
        } else if ((ereg("2000", $getNokiaModelsKeys[1])) && (ereg("^2",  $getModelsDB["models_db_model_name"][$counter]))) {
            static $b=0;

            if (preg_match("/([cC]lassic)|([sS]lide)|([fF]old)/", $getModelsDB["models_db_category"][$counter])) {
                $nokiaModels["2000"][$b] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["2000"]["category_id"][$b] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $nokiaModels["2000"][$b] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["2000"]["category_id"][$b] = $getModelsDB["models_db_category_id"][$counter];
            }

            $b++;
        } else if ((ereg("3000", $getNokiaModelsKeys[2])) && (ereg("^3", $getModelsDB["models_db_model_name"][$counter]))) {
            static $c=0;

            if (preg_match("/([cC]lassic)|([sS]lide)|([fF]old)/", $getModelsDB["models_db_category"][$counter])) {
                $nokiaModels["3000"][$c] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["3000"]["category_id"][$c] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $nokiaModels["3000"][$c] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["3000"]["category_id"][$c] = $getModelsDB["models_db_category_id"][$counter];
            }

            $c+=1;
        } else if ((ereg("5000", $getNokiaModelsKeys[3])) && (ereg("^5", $getModelsDB["models_db_model_name"][$counter]))) {
            static $d=0;

            if (preg_match("/^([iI]$)/", $getModelsDB["models_db_category"][$counter])) {
                $nokiaModels["5000"][$d] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["5000"]["category_id"][$d] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $nokiaModels["5000"][$d] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["5000"]["category_id"][$d] = $getModelsDB["models_db_category_id"][$counter];
            }

            $d=$d+1;
        } else if ((ereg("6000", $getNokiaModelsKeys[4])) && (ereg("^6", $getModelsDB["models_db_model_name"][$counter]))) {
            static $e=0;

            if (preg_match("/^([iI])/", $getModelsDB["models_db_category"][$counter])) {
                $nokiaModels["6000"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["6000"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $nokiaModels["6000"][$e] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["6000"]["category_id"][$e] = $getModelsDB["models_db_category_id"][$counter];
            }

            $e=$e+1;
        } else if ((ereg("7000", $getNokiaModelsKeys[5])) && (ereg("^7", $getModelsDB["models_db_model_name"][$counter]))) {
            static $f=0;

            if (preg_match("/^([iI])$/", $getModelsDB["models_db_category"][$counter])) {
                $nokiaModels["7000"][$f] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["7000"]["category_id"][$f] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $nokiaModels["7000"][$f] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["7000"]["category_id"][$f] = $getModelsDB["models_db_category_id"][$counter];
            }

            $f=$f+1;
        } else if ((ereg("8000", $getNokiaModelsKeys[6])) && (ereg("^8", $getModelsDB["models_db_model_name"][$counter]))) {
            static $g=0;

            if (preg_match("/^([iI])$/", $getModelsDB["models_db_category"][$counter])) {
                $nokiaModels["8000"][$g] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["8000"]["category_id"][$g] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $nokiaModels["8000"][$g] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["8000"]["category_id"][$g] = $getModelsDB["models_db_category_id"][$counter];
            }

            $g+=1;
        } else if ((ereg("9000", $getNokiaModelsKeys[7])) && (ereg("^9", $getModelsDB["models_db_model_name"][$counter]))) {
            static $h=0;

            if (preg_match("/^([iI])$/", $getModelsDB["models_db_category"][$counter])) {
                $nokiaModels["9000"][$h] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["9000"]["category_id"][$h] = $getModelsDB["models_db_category_id"][$counter];
            } else {
                $nokiaModels["9000"][$h] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
                $nokiaModelsID["9000"]["category_id"][$h] = $getModelsDB["models_db_category_id"][$counter];
            }

            $h+=1;
        } else if ((ereg("[Cc]", $getNokiaModelsKeys[8])) && (ereg("([Cc])$", $getModelsDB["models_db_model_name"][$counter]))) {
            static $i=0;

            $nokiaModels["C"][$i] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
            $nokiaModelsID["C"]["category_id"][$i] = $getModelsDB["models_db_category_id"][$counter];

            $i++;
        } else if ((ereg("[Ee]", $getNokiaModelsKeys[9])) && (ereg("^([Ee])$", $getModelsDB["models_db_model_name"][$counter]))) {
            static $j=0;
			
            $nokiaModels["E"][$j] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
            $nokiaModelsID["E"]["category_id"][$j] = $getModelsDB["models_db_category_id"][$counter];

            $j++;
        } else if ((ereg("(N-Gage)", $getNokiaModelsKeys[10])) && (ereg("Gage$", $getModelsDB["models_db_model_name"][$counter]))) {
            static $k=0;

            $nokiaModels["N-Gage"][$k] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter]."&nbsp;".$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
            $nokiaModelsID["N-Gage"]["category_id"][$k] = $getModelsDB["models_db_category_id"][$counter];

            $k++;
        } else if ((ereg("N7", $getNokiaModelsKeys[11])) && (ereg("^N7", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
            static $l=0;

            $nokiaModels["N7"][$l] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
            $nokiaModelsID["N7"]["category_id"][$l] = $getModelsDB["models_db_category_id"][$counter];

            $l++;
        } else if ((ereg("N8", $getNokiaModelsKeys[12])) && (ereg("^N8", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
            static $m=0;

            $nokiaModels["N8"][$m] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
            $nokiaModelsID["N8"]["category_id"][$m] = $getModelsDB["models_db_category_id"][$counter];

            $m++;
        } else if ((ereg("N9", $getNokiaModelsKeys[13])) && (ereg("^N9", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
            static $n=0;

            $nokiaModels["N9"][$n] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
            $nokiaModelsID["N9"]["category_id"][$n] = $getModelsDB["models_db_category_id"][$counter];
            
			$n++;
        } else if ((ereg("X", $getNokiaModelsKeys[14])) && (ereg("^X", $getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]))) {
            static $o=0;

            $nokiaModels["X"][$o] = $brandName."&nbsp;".$getModelsDB["models_db_model_name"][$counter].$getModelsDB["models_db_category"][$counter]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$getModelsDB["modelsDBaddInfo"][$counter];
            $nokiaModelsID["X"]["category_id"][$o] = $getModelsDB["models_db_category_id"][$counter];
            
			$o++;
        }
    }

function showNokiaDropDownMenu($nokiaModels, $nokiaModelsID, $getNokiaModelsKeys) {

/*
		Input parameters:
		Array $nokiaModels,
		Array $getNokiaModelsKeys

		Output parameters:
		String showNokiaDropDownMenu
*/

$beginMdSelArea = <<<EOF
    <div class="md-sel-area"
EOF;

    $endMdSelArea = <<<EOF
    </div>
EOF;

    global $brandName;
    
    $_1000 = $getNokiaModelsKeys[0];
    $_2000 = $getNokiaModelsKeys[1];
    $_3000 = $getNokiaModelsKeys[2];
    $_5000 = $getNokiaModelsKeys[3];
    $_6000 = $getNokiaModelsKeys[4];
    $_7000 = $getNokiaModelsKeys[5];
    $_8000 = $getNokiaModelsKeys[6];
    $_9000 = $getNokiaModelsKeys[7];
    $C = $getNokiaModelsKeys[8];
    $E = $getNokiaModelsKeys[9];
    $N_Gage = $getNokiaModelsKeys[10];
    $N7 = $getNokiaModelsKeys[11];
    $N8 = $getNokiaModelsKeys[12];
    $N9 = $getNokiaModelsKeys[13];
    $X = $getNokiaModelsKeys[14];

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

// ---- 1000 ----
	$div1000Header = <<<EOF
	<div style="top: 0px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$_1000"><span>$_1000</span></a></h3></div>
	</div>
EOF;

	$start1000ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-1000-model" name="select-1000-model">
EOF;

	$end1000ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- 2000 ----
	$div2000Header = <<<EOF
	<div style="top: 20px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$_2000"><span>$_2000</span></a></h3></div>
	</div>
EOF;

	$start2000ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-2000-model" name="select-2000-model">
EOF;

	$end2000ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- 3000 ----
	$div3000Header = <<<EOF
	<div style="top: 40px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$_3000"><span>$_3000</span></a></h3></div>
	</div>
EOF;

	$start3000ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-3000-model" name="select-3000-model">
EOF;

	$end3000ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- 5000 ----
	$div5000Header = <<<EOF
	<div style="top: 60px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$_5000"><span>$_5000</span></a></h3></div>
	</div>
EOF;

	$start5000ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-5000-model" name="select-5000-model">
EOF;

	$end5000ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- 6000 ----
	$div6000Header = <<<EOF
	<div style="top: 80px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$_6000"><span>$_6000</span></a></h3></div>
	</div>
EOF;

	$start6000ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-6000-model" name="select-6000-model">
EOF;

	$end6000ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- 7000 ----
	$div7000Header = <<<EOF
	<div style="top: 100px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$_7000"><span>$_7000</span></a></h3></div>
	</div>
EOF;

	$start7000ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-7000-model" name="select-7000-model">
EOF;

	$end7000ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- 8000 ----
	$div8000Header = <<<EOF
	<div style="top: 120px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$_8000"><span>$_8000</span></a></h3></div>
	</div>
EOF;

	$start8000ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-8000-model" name="select-8000-model">
EOF;

	$end8000ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- 9000 ----
	$div9000Header = <<<EOF
	<div style="top: 140px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$_9000"><span>$_9000</span></a></h3></div>
	</div>
EOF;

	$start9000ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-9000-model" name="select-9000-model">
EOF;

	$end9000ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- C ----
	$divCHeader = <<<EOF
	<div style="top: 160px;" class="header-box">
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

// ---- E ----
	$divEHeader = <<<EOF
	<div style="top: 180px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$E"><span>$E</span></a></h3></div>
	</div>
EOF;

	$startEModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-E-model" name="select-E-model">
EOF;

	$endEModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- N-Gage ----
	$divN_GageHeader = <<<EOF
	<div style="top: 200px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$N_Gage"><span>$N_Gage</span></a></h3></div>
	</div>
EOF;

	$startN_GageModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-N-Gage-model" name="select-N-Gage-model">
EOF;

	$endN_GageModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- N7 ----
	$divN7Header = <<<EOF
	<div style="top: 220px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$N7"><span>$N7</span></a></h3></div>
	</div>
EOF;

	$startN7ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-N7-model" name="select-N7-model">
EOF;

	$endN7ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- N8 ----
	$divN8Header = <<<EOF
	<div style="top: 240px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$N8"><span>$N8</span></a></h3></div>
	</div>
EOF;

	$startN8ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-N8-model" name="select-N8-model">
EOF;

	$endN8ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- N9 ----
	$divN9Header = <<<EOF
	<div style="top: 260px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$N9"><span>$N9</span></a></h3></div>
	</div>
EOF;

	$startN9ModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-N9-model" name="select-N9-model">
EOF;

	$endN9ModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- X ----
	$divXHeader = <<<EOF
	<div style="top: 280px;" class="header-box">
		<div style="" class="header-content"><h3><a href="#" title="$X"><span>$X</span></a></h3></div>
	</div>
EOF;

	$startXModelSelect = <<<EOF
	<div class="model-select-positioning"><select class="app select-model" id="select-X-model" name="select-X-model">
EOF;

	$endXModelSelect = <<<EOF
	</select>
</div>
EOF;

// ---- Display 1000 contents ----
	//print $startModelsBox;
	print $div1000Header;
	print $beginMdSelArea.' style="top: 10px;">';
	print $start1000ModelSelect;
	for ($a=0; $a<sizeof($nokiaModels["1000"]); $a++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["1000"]["category_id"][$a])."'>".$nokiaModels["1000"][$a]."</option>";
	
	print $end1000ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-1000-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";

// ---- Display 2000 contents ----
	//print $startModelsBox;
	print $div2000Header;
	print $beginMdSelArea.' style="top: 30px;">';
	print $start2000ModelSelect;
	for ($b=0; $b<sizeof($nokiaModels["2000"]); $b++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["2000"]["category_id"][$b])."'>".$nokiaModels["2000"][$b]."</option>";
	
	print $end2000ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-2000-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";

// ---- Display 3000 contents ----
	//print $startModelsBox;
	print $div3000Header;
	print $beginMdSelArea.' style="top: 50px;">';
	print $start3000ModelSelect;
	for ($c=0; $c<sizeof($nokiaModels["3000"]); $c++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["3000"]["category_id"][$c])."'>".$nokiaModels["3000"][$c]."</option>";
	
	print $end3000ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-3000-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";

// ---- Display 5000 contents ----
	//print $startModelsBox;
	print $div5000Header;
	print $beginMdSelArea.' style="top: 70px;">';
	print $start5000ModelSelect;
	for ($d=0; $d<sizeof($nokiaModels["5000"]); $d++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["5000"]["category_id"][$d])."'>".$nokiaModels["5000"][$d]."</option>";
	
	print $end5000ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-5000-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display 6000 contents ----
	//print $startModelsBox;
	print $div6000Header;
	print $beginMdSelArea.' style="top: 90px;">';
	print $start6000ModelSelect;
	for ($e=0; $e<sizeof($nokiaModels["6000"]); $e++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["6000"]["category_id"][$e])."'>".$nokiaModels["6000"][$e]."</option>";
	
	print $end6000ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-6000-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";

// ---- Display 7000 contents ----
	//print $startModelsBox;
	print $div7000Header;
	print $beginMdSelArea.' style="top: 110px;">';
	print $start7000ModelSelect;
	for ($f=0; $f<sizeof($nokiaModels["7000"]); $f++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["7000"]["category_id"][$f])."'>".$nokiaModels["7000"][$f]."</option>";
	
	print $end7000ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-7000-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";

// ---- Display 8000 contents ----
	//print $startModelsBox;
	print $div8000Header;
	print $beginMdSelArea.' style="top: 130px;">';
	print $start8000ModelSelect;
	for ($g=0; $g<sizeof($nokiaModels["8000"]); $g++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["8000"]["category_id"][$g])."'>".$nokiaModels["8000"][$g]."</option>";
	
	print $end8000ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-8000-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";

// ---- Display 9000 contents ----
	//print $startModelsBox;
	print $div9000Header;
	print $beginMdSelArea.' style="top: 150px;">';
	print $start9000ModelSelect;
	for ($h=0; $h<sizeof($nokiaModels["9000"]); $h++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["9000"]["category_id"][$h])."'>".$nokiaModels["9000"][$h]."</option>";
	
	print $end9000ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative" ,$submit="submit-9000-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display C contents ----
	//print $startModelsBox;
	print $divCHeader;
	print $beginMdSelArea.' style="top: 170px;">';
	print $startCModelSelect;
	for ($i=0; $i<sizeof($nokiaModels["C"]); $i++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["C"]["category_id"][$i])."'>".$nokiaModels["C"][$i]."</option>";
	
	print $endCModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-C-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display E contents ----
	//print $startModelsBox;
	print $divEHeader;
	print $beginMdSelArea.' style="top: 190px;">';
	print $startEModelSelect;
	for ($j=0; $j<sizeof($nokiaModels["E"]); $j++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["E"]["category_id"][$j])."'>".$nokiaModels["E"][$j]."</option>";
	
	print $endEModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-E-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display N-Gage contents ----
	//print $startModelsBox;
	print $divN_GageHeader;
	print $beginMdSelArea.' style="top: 210px;">';
	print $startN_GageModelSelect;
	for ($k=0; $k<sizeof($nokiaModels["N-Gage"]); $k++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["N-Gage"]["category_id"][$k])."'>".$nokiaModels["N-Gage"][$k]."</option>";
	
	print $endN_GageModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-N-Gage-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display N7 contents ----
	//print $startModelsBox;
	print $divN7Header;
	print $beginMdSelArea.' style="top: 230px;">';
	print $startN7ModelSelect;
	for ($l=0; $l<sizeof($nokiaModels["N7"]); $l++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["N7"]["category_id"][$l])."'>".$nokiaModels["N7"][$l]."</option>";
	
	print $endN7ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-N7-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display N8 contents ----
	//print $startModelsBox;
	print $divN8Header;
	print $beginMdSelArea.' style="top: 250px;">';
	print $startN8ModelSelect;
	for ($m=0; $m<sizeof($nokiaModels["N8"]); $m++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["N8"]["category_id"][$m])."'>".$nokiaModels["N8"][$m]."</option>";
	
	print $endN8ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-N8-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display N9 contents ----
	//print $startModelsBox;
	print $divN9Header;
	print $beginMdSelArea.' style="top: 270px;">';
	print $startN9ModelSelect;
	for ($n=0; $n<sizeof($nokiaModels["N9"]); $n++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["N9"]["category_id"][$n])."'>".$nokiaModels["N9"][$n]."</option>";
	
	print $endN9ModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-N9-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	
// ---- Display X contents ----
	//print $startModelsBox;
	print $divXHeader;
	print $beginMdSelArea.' style="top: 290px;">';
	print $startXModelSelect;
	for ($o=0; $o<sizeof($nokiaModels["X"]); $o++) 
		print "<option class='models-option-style' value='".base64_encode($nokiaModelsID["X"]["category_id"][$o])."'>".$nokiaModels["X"][$o]."</option>";
	
	print $endXModelSelect;
	print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submit="submit-X-model");
	print $endMdSelArea;
	//print $endModelsBox;

	//print "<br><br><br>";
	print $brandBanner;														
}

    return array($nokiaModels, $nokiaModelsID, $getNokiaModelsKeys);
}

?>

<?php

/*
   Create default drop down menu for models and their categories

   Input parameters:
   String $brandName,
   Array $modelsDBarray, ($modelsDBmodelID) --> Not necessary in this context

   Output:
   String results
*/

function otherModelsDropDownMenu($brandName, $modelsDBarray) {
    include_once ("/home/fod/www/projects/isar/sar/direct/globalvars.php");
    
    global $submit;
    
$beginMdSelArea = <<<EOF
    <div class="md-sel-area"
EOF;

    $endMdSelArea = <<<EOF
    </div>
EOF;

    $getModelsArray = $modelsDBarray;

    $modelName = $getModelsArray["models_db_model_name"];
	$modelCategory = $getModelsArray["models_db_category"];
	$category_id = $getModelsArray["models_db_category_id"];
    
    // General models content box
		$startModelsBox = <<<EOF
	<div style="height: 700px;" class="models-content-box">
EOF;
		$endModelsBox = <<<EOF
	</div>
EOF;
    
    // ---- Other Models ----
	$divHeaderBox = <<<EOF
	<div style="height: 100px; width: 350px; left: 215px; top: 50px;" class="header-box">
		<div style="text-align: center; font-size: 60px; line-height: 100px; color: #ffffff;" class="header-content">$brandName
		<input type="hidden" name="brand-name" value="$brandName" />
		</div>
	</div>
EOF;
    
	$startModelsSelect = <<<EOF
	<div style="top: 280px; position: absolute;" class="model-select-positioning"><select class="app select-model" id="select-other-model" name="select-other-model">
EOF;
    $endModelsSelect = <<<EOF
    </select></div>
EOF;

    //print $startModelsBox;
    print $divHeaderBox;
    print $beginMdSelArea." style='top: 100px; padding-top: 400px;'>";
    print $startModelsSelect;

    for ($counter=0; $counter<sizeof($modelName); $counter++) {
        print "<option class='models-option-style' value='";
        print base64_encode($category_id[$counter]);
        print "'>";
        print $brandName."&nbsp;".$modelName[$counter]."&nbsp;".$modelCategory[$counter];
        print "</option>";
    }

    print $endModelsSelect;
    print "<div style='position: absolute; top: 300px;'>";
    print submitButton($faceText="find&raquo;", $style="" ,$pos="relative", $submitButton="submit-other-model");
    print "</div>";
    print $endMdSelArea; 
    //print $endModelsBox;
        
    return;
}

?>

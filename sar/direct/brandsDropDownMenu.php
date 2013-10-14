<?php

// Creating brands Drop Down Menu form element
// This form carries the <option/> value to models and the models category page
// which would therefore spit out the SAR value and the possible additional info

include ("/home/a2021051/public_html/sar/direct/globalvars.php");

function brandsDropDownMenu() {
	// Going to need the brands Array created by the brandsDB page

	include_once ("/home/a2021051/public_html/sar/direct/brandsDB.php");
	$brandsDB = brandsDB();

	$brandsDBid = $brandsDB["brandsDBid"]; // redundant
	$brandsDBName = $brandsDB["brandsDBName"];

	$brandsSelectMenuScript = <<<EOF
	<!--<script type="text/javascript" language="javascript">
		$("#brands-select-menu").css(
			{
				"border-radius": "5px",
				"box-shadow": "black 0 2px 2px 0",
			}
		);
	</script>-->
EOF;

	$brandsSelectMenuStyle = <<<EOF
	<style type="text/css">

	</style>
EOF;

	// Going to create selection drop down menu

	global $selectBrand;

	print <<<EOF
$brandsSelectMenuScript $brandsSelectMenuStyle <div id="brands-select-positioning"><select class="app" id="brands-select-menu" name="$selectBrand">
EOF;

		for ($counter=0; $counter<sizeof($brandsDBid); $counter++) {
			print "<option class='brands-option-style' name='";
			print md5($brandsDBid[$counter]);
			print "' value='";
			print base64_encode($brandsDBName[$counter]);
			print "'>".$brandsDBName[$counter]."</option>";
		}

	print "</select></div>";

	return;
}

?>

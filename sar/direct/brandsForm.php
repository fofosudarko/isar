<?php

// Creating brandsForm function

function brandsForm ()
{
	// Including the brandsDropDownMenu
	include_once ("/home/fod/www/projects/isar/sar/direct/brandsDropDownMenu.php");
	include_once ("/home/fod/www/projects/isar/sar/direct/globalvars.php");
	include_once ("/home/fod/www/projects/isar/sar/direct/submitButton.php");
	// Creating brands Form

	global $submit;

	$startForm = <<<EOF
	<form method="get" action="models.php">
	<!--<label for="brands-selection"><span>Please select your device's brand</span></label><br><br><br>-->
EOF;

	$endForm = <<<EOF
	</form>
EOF;

	print $startForm;
	brandsDropDownMenu();
	print "<br><br><br><br>";
	print submitButton($faceText="GO&raquo;", $style="left: 310px; top: 250px;", $pos="absolute", $submitBrand="$submit");
	print $endForm;
	return;
}

?>

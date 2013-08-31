<?php

// input button function

function submitButton ($faceText="GO&raquo;", $style="", $pos="absolute", $submit="") {
	$submitButton = <<<EOF
	<div style='$style position: $pos;' class="sub-button-position">
	<input name="$submit" type="submit" style="height: 60px; width: 200px;" class="inline-button" id="submit-button" value="$faceText">
	</div>
EOF;

	return $submitButton;
}

?>

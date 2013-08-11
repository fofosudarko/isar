<?php

// input button function

function submitButton($faceText="GO&raquo;", $style="", $pos="absolute", $submit="") {
	$submitButton = <<<EOF
	<div style='$style position: $pos;' class="sub-button-position">
	<input name="$submit" type="submit" class="inline-button-style" id="submit-button" value="$faceText">
	</div>
EOF;

	return $submitButton;
}

?>

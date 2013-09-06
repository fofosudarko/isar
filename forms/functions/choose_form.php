<?php
include_once ("/home/fod/www/projects/isar/sar/direct/globalvars.php");
  
/* choose appropriate form to fill upon receiving request from brands.php, models.php or sar.php*/
function choose_form ($request, $brand="Brand", $model="Model")
{
  global $PATH;
  $FORMSPATH="forms/functions/";
	
	include_once ($PATH.$FORMSPATH."brand_form.php");
	include_once ($PATH.$FORMSPATH."models_form.php");
	include_once ($PATH.$FORMSPATH."sar_form.php");
	
	if ($request == "brands")
    fill_brands_form ();
	else if ($request == "devices")
    fill_models_form ($brand);
	else if ($request == "sar")
    fill_sar_form ($brand, $model);
}

?>

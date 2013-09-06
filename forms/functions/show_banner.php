<?php
// shows banner
include_once ("/home/fod/www/projects/isar/sar/direct/globalvars.php");

function show_banner ($request)
{
	global $PATH;
	include_once ($PATH."forms/functions/banners.php");

	switch ($request) {
		case "brands": brand_banner (); break;
		case "devices": models_banner (); break;
		case "sar": sar_banner (); break;
		default: print "Nothing";
	}
}
?>

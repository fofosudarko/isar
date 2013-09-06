<?php
include_once ("/home/fod/www/projects/isar/sar/direct/globalvars.php");

function show_device_description_menu ($class="", $name="")
{
	global $PATH;
	include_once ("$PATH"."admin/db/db-functions/deviceDescription.php");
	list ($devices_id, $devices_description) = show_all_device_descriptions ();
	$start_select=<<<SELECT
<select name="$name" class="$class" required>
SELECT;
	$end_select=<<<SELECT
</select>
SELECT;

	print $start_select;
	for ($i=0,$j=0; $i<sizeof($devices_id),$j<sizeof($devices_description); $i++,$j++) {
		print "<option value='".$devices_id[$i]."'>".$devices_description[$j]."</option>";
	}
	print $end_select;

}
?>

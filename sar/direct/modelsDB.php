<?php

// models_db function to retrieve model_name, category and add_info of chosen brand option

/*
	Input Parameters:
	String $brand_name,
	int $bid

	Output results:
	Array $modelName,
	Array $modelCategory,
	Array $add_info
*/

// Get brand_id from brands page

function models_db($brand_name, $bid) {
	// Include database connection file path
	include ("/home/fod/www/projects/isar/admin/db/isardb/dbconnect.php");

	// Remove whitespaces from both sides of $brand_name
	$brand_name = trim($brand_name);
	$brand_name = strtolower($brand_name); // convert string to lowercase

	// Display add_info
	$display_add_info = array (
		"apple" => "apple",
		"sony ericsson" => "sony ericsson",
		"nokia" => "nokia",
	);

	if (array_key_exists($brand_name, $display_add_info)) {
		$add_info = ", add_info";
	} else {
		$add_info = "";
	}

	// Get first letter of $brand_name string value
	$get_model_alias = substr($brand_name, 0, 1); // alias for model

	if ($brand_name == "blackberry")	{
		// select first letter and sixth letter
		$get_bb_1st_letter = substr($brand_name, 0, 1);
		$get_bb_6th_letter = substr($brand_name, -5, 1);
		$brand_name = $get_bb_1st_letter.$get_bb_6th_letter;

		$get_1st_letter = substr($brand_name, 0, 1);
		$get_another_letter = substr($brand_name, -2, 1);
		$get_model_category_alias = $get_1st_letter.$get_another_letter; // alias for model category
	} else {
		$get_1st_letter = substr($brand_name, 0, 1);
		$get_last_letter = substr($brand_name, -1, 1);
		$get_model_category_alias = $get_1st_letter.$get_last_letter; // alias for model category
	}

	if ($brand_name == "sony ericsson") {
		// Discard the whitespace and concatenate the two string values
		$exp_strings = explode(" ", $brand_name);
		$a = $exp_strings[0];
		$b = $exp_strings[1];
		$brand_name = $a.$b;

		// select the '4' string value and convert to uppercase and replace the value in $brand_name
		$get_4th_letter = substr($brand_name, -8, 1);
		$cap_letter = strtoupper($get_4th_letter);

		// Replace $cap_letter
		$brand_name = substr_replace($brand_name, $cap_letter, -8, 1);
	}

	// Make MySQL query
	switch ($brand_name)	{
	    case "nokia":
	        $query = "select model_name, category, category_id $add_info from ".$brand_name."_model_category as $get_model_category_alias left join (brand as brd, ".$brand_name."_model as $get_model_alias) on ($get_model_category_alias.brand=brd.brand_id and $get_model_category_alias.model=$get_model_alias.model_id) order by category_id asc";
        break;
        case "samsung":
            $query = "select model_name, category, category_id $add_info from ".$brand_name."_model_category as $get_model_category_alias left join (brand as brd, ".$brand_name."_model as $get_model_alias) on ($get_model_category_alias.brand=brd.brand_id and $get_model_category_alias.model=$get_model_alias.model_id) order by model_name asc";
        break;
        default:
            $query = "select model_name, category, category_id $add_info from ".$brand_name."_model_category as $get_model_category_alias left join (brand as brd, ".$brand_name."_model as $get_model_alias) on ($get_model_category_alias.brand=brd.brand_id and $get_model_category_alias.model=$get_model_alias.model_id)";
    }
	
	// Retrieve query result
	$query_result = mysqli_query($dbLink, $query) or die(mysqli_error());

	// Iterator
	$i = 0;

	// Return query results
	while ($models_db_rows = mysqli_fetch_array($query_result, MYSQLI_ASSOC)) {
		if (array_key_exists("add_info", $models_db_rows)) {
			$models_db_model_name[$i] = $models_db_rows["model_name"];
			$models_db_category[$i] = $models_db_rows["category"];
			$models_db_category_id[$i] = $models_db_rows["category_id"];
			$models_db_add_info[$i] = $models_db_rows["add_info"];
			$i++;
		} else {
			$models_db_model_name[$i] = $models_db_rows["model_name"];
			$models_db_category[$i] = $models_db_rows["category"];
			$models_db_category_id[$i] = $models_db_rows["category_id"];
			$i++;
		}
	}

	if (empty($models_db_add_info)) {
		$models_db = array (
		    "models_db_model_name" => $models_db_model_name,
		    "models_db_category_id" => $models_db_category_id,
			"models_db_category" => $models_db_category,
		);
	} else {
		$models_db = array (
		    "models_db_model_name" => $models_db_model_name,
			"models_db_category_id" => $models_db_category_id,
			"models_db_category" => $models_db_category,
			"models_db_add_info" => $models_db_add_info,
		);
	}

	return $models_db;

	// Close database connection
	mysqli_close($dbLink);
}

?>

<?php  
	$project_name = "/rank2";

	$project_index = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["SERVER_NAME"].$project_name;

	$project_path = $_SERVER["DOCUMENT_ROOT"].$project_name;

	$GLOBALS["project_index"] = $project_index;
	$GLOBALS["project_path"] = $project_path;

?>
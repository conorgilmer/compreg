<?php
session_start();

//connect to database

	require("db.php");
	
//	if(isset($_SESSION['SESS_ADMINLOGGEDIN']) == TRUE) {
//		header("Location: " . $config_basedir);
	
include('config.php');
$database = SERVER; //"test";
$table = "players";

$result=mysql_query("select * from $table");

// if your only exporting new files
//$result=mysql_query("select * from $table where status=\"new\"");

$out = '';

// Get all fields names in table "name_list" in database "tutorial".
$fields = mysql_list_fields($database,$table);

// Count the table fields and put the value into $columns.
$columns = mysql_num_fields($fields);


// Put the name of all fields to $out.
for ($i = 0; $i < $columns; $i++) {
	$l=mysql_field_name($fields, $i);
	$out .= '"'.$l.'",';
} /* end of for */
$out .="\r\n";

// Add all values in the table to $out.
while ($l = mysql_fetch_array($result)) {
	for ($i = 0; $i < $columns; $i++) {
		$out .='"'.$l["$i"].'",';
	} /* end of for */
$out .="\r\n";


//* set field to exported if you wish to only export new files
//$edit_item = "update $table set status='exported'";
//$edit_item = "update $table set status='exported'";
  //  mysql_query($edit_item) or die(mysql_error());
 
} /* end of while */




// Open file export.csv.
$f = fopen ('export_players.csv','w');

// Put all values from $out to export.csv.
fputs($f, $out);
fclose($f);

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename="export_players.csv"');
readfile('export_players.csv');

//	}
//	else
//		header("Location: " . $config_basedir ."/adminlogin.php");

//	require("footer.php");
?>

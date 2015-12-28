<?php

// import configuration db details
require("config.php");

// connect to db
	$db = mysql_connect($dbhost, $dbuser, $dbpassword);
	mysql_select_db($dbdatabase, $db);

?>

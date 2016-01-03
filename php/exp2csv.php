<?php
    // import in config data
    include('config.php');

    //Connection to database
    mysql_connect($dbhost,$dbuser,$dbpwd);
    mysql_select_db($dbdatabase);

    $table = $dbtable;

    // select from db
    $result = mysql_query("SELECT * FROM $table");
    if (!$result) die('Couldn\'t fetch records');
    $num_fields = mysql_num_fields($result);

    $headers = array();

     // Creating headers for output files
    for ($i = 0; $i < $num_fields; $i++)
    {
        $headers[] = mysql_field_name($result , $i);
    }

     // name of file with date
     //$filename = $table."_out".".csv";
    $filename = $table."_".date('Y-m-d').".csv";
    $fp = fopen($filename, 'w');
    if ($fp && $result)
    {
    	    // write field names      
            fputcsv($fp, $headers);
	    // write rows
            while ($row = mysql_fetch_row($result))
            {
                 fputcsv($fp, array_values($row));
            }
            die;
     }
?>

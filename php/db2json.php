<?php
   
include('config.php');


echo "export $dbtable to json\n";
    // uses mysqli
   

    //open connection to mysql db
    $connection = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbdatabase) or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from $dbtable";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $jsonarray[] = $row;
    }

// write json to output stream 
// to do -  write to file
    echo json_encode($jsonarray);

    //close the db connection
    mysqli_close($connection);

    //write to json file
    $fp = fopen($dbtable.'_data.json', 'w');
    fwrite($fp, json_encode($jsonarray));
    fclose($fp);

?>

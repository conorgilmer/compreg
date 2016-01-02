<?php
   
    include('config.php');


    echo "\nexport $dbtable to json\n\n";
    // uses mysqli
   

    //open connection to mysql db
    $connection = mysqli_connect($dbhost,$dbuser,$dbpwd,$dbdatabase) or die("Error " . mysqli_error($connection));

    //fetch table rows from mysql db
    $sql = "select * from $dbtable";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

    //create an array
    $jsonarray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $jsonarray[] = $row;
    }

    // write json to output stream 
    echo json_encode($jsonarray);

    //close the db connection
    mysqli_close($connection);

    //write to json file
    echo "\n\nwrite to file\n";
    $fp = fopen($dbtable.'_data.json', 'w');
    fwrite($fp, json_encode($jsonarray));
    fclose($fp);

?>

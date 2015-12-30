<?php
require('config.php');

class DB_con
{
 function __construct()
 {
  $conn = mysql_connect(SERVER,USER,PWD) or die('localhost connection problem'.mysql_error());
  mysql_select_db(DB, $conn);
 }
 
 public function insert($email, $fname,$sname,$gender,$icu_code,$icu_rating,$fide_rating,$blitz_rating,$fed)
 {
  $res = mysql_query("INSERT markers(id, email, firstname, surname, gender, icu_code, icu_rating, fide_rating, blitz_rating, federation, tstamp) VALUES('','$email','$fname','$sname','$gender', '$icu_code', '$icu_rating', '$fide_rating' ,'$blitz_rating', '$fed', now())");
  return $res;
 }
 
 public function select($table, $icu_code)
 {
  $res=mysql_query("SELECT * FROM players where icu_code=$icu_code");
  return $res;
 }
}

?>

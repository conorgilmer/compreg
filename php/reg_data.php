<?php
include_once 'dbMySql.php';
$con = new DB_con();

// data insert code starts here.
if(isset($_POST['btn-save']))
{
	$fname        = $_POST['fname'];
	$sname        = $_POST['sname'];
	$gender       = "M"; 
	$email        = $_POST['email'];
	$icu_code     = $_POST['icu_code'];
	$icu_rating   = $_POST['icu_rating'];
	$fide_rating  = $_POST['fide_rating'];
	$blitz_rating = $_POST['blitz_rating'];
	$federation   = $_POST['federation'];
	
	$res=$con->insert($email, $fname, $sname, $gender, $icu_code, $icu_rating, $fide_rating, $blitz_rating, $federation);
	if($res)
	{
		?>
		<script>
		alert('Registration Record inserted...');
        window.location='reg_list.php'
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error inserting registration record...');
        window.location='reg_add.php'
        </script>
		<?php
	}
}
// data insert code ends here.

?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Competition Registration</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<?php include('header.php');?>

<div id="body">
	<div id="content">
    <form method="post">
    <table align="center">
  <tr>
    <th><a href="reg_data.php">Register</a></th>
    <th><a href="list.php">List</a></th>
    <th><a href="index.php">Details</a></th>
    <th><a href="about.php">About</a></th>
    </tr>


    <tr>
    <td colspan="2"><input type="text" name="fname" placeholder="First name" required /></td>
    <td colspan="2"><input type="text" name="sname" placeholder="Surname" required /></td>
    </tr>
    <tr>
    <td colspan="4"><input type="text" name="icu_code" placeholder="ICU Code" required /></td>
    </tr>
    <tr>
    <td colspan="4"><input type="text" name="icu_rating" placeholder="ICU Rating" required /></td>
    </tr>
    <tr>
    <td colspan="4"><input type="text" name="fide_rating" placeholder="fide_rating" required /></td>
    </tr>
    <tr>
    <td colspan="4"><input type="text" name="blitz_rating" placeholder="blitz_rating" required /></td>
    </tr>
    <tr>
    <td colspan="4"><input type="text" name="federation" placeholder="federation" required /></td>
    </tr>
    <tr>
    <td colspan="4"><input type="text" name="email" placeholder="Email Address (wont be shown) "  /></td>
    </tr>
    <tr>
    <td colspan="4">

    <button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
    </tr>
    </table>
    </form>
    </div>
</div>

<?php include('footer.php');?>

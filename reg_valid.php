<?php
session_start();


function isEmail($email)
{
	return(@preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i"
			,$email));
}

 $error_msg = "";
 $icu_code = $_POST['icu_code'];
 $icu_rating = $_POST['icu_rating'];
 $fide_rating = $_POST['fide_rating'];
 $blitz_rating = $_POST['blitz_rating'];
 $email  = $_POST['email'];
 $fname  = $_POST['fname'];
 $sname  = $_POST['sname'];
 $gender = $_POST['gender'];
 $dob    = $_POST['dob'];



	if(trim($fname) == '')
	{
		$error_msg = 'Please confirm your firstname <br>';
	} 
	else if(trim($sname) == '')
	{
		$error_msg = 'Please confirm your surname  <br>';
	} 
	else if(trim($email) == '')
	{
		$error_msg = 'Please confirm your email <br>';
	} 
	else if(trim($icu_code) == '')
	{
		$error_msg = 'Please confirm your icu code <br>';
	} 
	else if(trim($icu_rating) < 700 )
	{
		$error_msg = 'Please enter a real rating <br>';
	} 
	else if(trim($icu_rating) > 3000 )
	{
		$error_msg = 'Please enter a real rating <br>';
	} 

	if($error_msg == '')
	{ 
		$_SESSION['fname'] = $fname;
		$_SESSION['sname'] = $sname;
		$_SESSION['email'] = $email;		
		$_SESSION['dob'] = $dob;		
		$_SESSION['gender'] = $gender;		
		$_SESSION['icu_code'] = $icu_code;		
		$_SESSION['icu_rating'] = $icu_rating;		
		$_SESSION['fide_rating'] = $fide_rating;		
		$_SESSION['blitz_rating'] = $blitz_rating;		


		// go to process page
		header("Location: process_reg.php");
		exit;
		
	} else {//return to input page with error message
		header("Location: reg.php?errmsg=$error_msg");

?>

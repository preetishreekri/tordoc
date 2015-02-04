<?php include_once("function.php");
connect();
$res=check_session($_SESSION['mlmlogin_id'],$_SESSION['mlmloginPass']);
if($res!=1)
{
header("location:index.php");
}
else{
	if(isset($_POST['submit']))
		{		
		

$mobile_no=$_POST['contact_no'];
$gender=$_POST['gender'];
$nationality=$_POST['nationality'];
$address=$_POST['address'];
$district=$_POST['district'];
$state=$_POST['state'];
$address=$_POST['address'];
//$pincode=$_POST['pin_no'];
$pan_no=$_POST['pan_no'];
$email=$_POST['email'];
$n_name=$_POST['nominee_name'];
//$n_relation=$_POST['nominee_relation'];
$bank_name=$_POST['bank_name'];
$acc_no=$_POST['acc_no'];
$bank_branch=$_POST['bank_branch'];
$ifsc_code =$_POST['ifsc'];

$query=mysql_query("update `user_info` set
`gender`='$gender', 
`nationality`='$nationality', 
`address`='$address',
`district`='$district',
`state`='$state', 
`pan_no`='$pan_no', 
`email`='$email',
`n_name`='$n_name',
`ifsc_code`='$ifsc_code',
`bank_name`='$bank_name',
`bank_branch`='$bank_branch',
`acc_no`='$acc_no'
where `login_id`='$_SESSION[mlmlogin_id]'")or die(mysql_error());


//echo "Login ID ".$login_id." <br>Password ".$login_pass." <br>Inserted Successfully";
echo "Inserted Successfully";
	//submit
}
//else1
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="0;edit_personal_details.php"/>
<title>Untitled Document</title>
</head>

<body>

</body>
</html>

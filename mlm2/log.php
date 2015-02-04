<?php
include_once("function.php");
connect();

$a=$_POST['loginEmail'];
$b=$_POST['loginPass'];

$query=mysql_query("select * from `user_info` where `login_id`='$a' and `login_pass`='$b'") or die(mysql_error());
$res1=mysql_num_rows($query);
if($res1!= 1)
{
header('location:index.php');
}
else
{
$result=mysql_fetch_array($query);
	if($result['pass_change_status']!=1 && $result['pin_balance']!=0)
		{
		$_SESSION['mlmlogin_id']=$_POST['loginEmail'];
		$_SESSION['mlmloginPass']=$_POST['loginPass'];
		header('location:change_pass.php');
		}
	else
	{

	$_SESSION['mlmlogin_id']=$_POST['loginEmail'];
	$_SESSION['mlmloginPass']=$_POST['loginPass'];
	//$_SESSION['branch']=$result['branch'];
	header('location:home.php');
	}
}
?>
<html>
<head>
<title></title>
</head>
<body> 
</body>
</html>

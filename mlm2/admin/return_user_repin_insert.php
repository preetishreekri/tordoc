<?php
include_once("function.php");
connect();
$_SESSION['user_send_current_pin']=$_POST['current_pin'];
$_SESSION['user_send_add_pin']=$_POST['pin_balance'];
$_SESSION['user_send_id']=$_POST['login_id'];
$_SESSION['user_send_app_capacity']=$_POST['hdn_app_capacity'];
$res_session=check_session($_SESSION['mlm5_admin_id'],$_SESSION['mlm5_admin_pass']);
if($res_session!=1)
{
header("location:index.php");
}
else
{
	if($_SESSION['mlm5_admin_type']!="Admin" && $_SESSION['mlm5_admin_type']!="Special_Employee" || !isset($_POST['submit']) || !isset($_POST['current_pin']) || !isset($_POST['pin_balance'])|| !isset($_POST['login_id'])|| !isset($_POST['hdn_app_capacity']))
	{header("location:notallowed.php");}
	else{
		if($_POST['current_pin']>=$_POST['pin_balance'])
					{
		
		$new_balance=$_POST['current_pin']-$_POST['pin_balance'];
		$new_app_capacity=$_POST['hdn_app_capacity']+$_POST['pin_balance'];
		
		$query_update_user=mysql_query("update `user_info` set `repin_balance`='$new_balance' where `login_id`='$_POST[login_id]'");
		$query_update_login=mysql_query("update `login_details` set `app_capacity`='$new_app_capacity' where `id`='$_SESSION[mlm5_admin_id]'");
		$query_insert_pin=mysql_query("insert into `pin_no` set
`return_pin`='$_POST[pin_balance]',`id`='$_POST[login_id]',`send_by`='$_SESSION[mlm5_admin_id]'");
		
		header("location:conform_return_repin.php");
					echo "Successfully Inserted";
		
					}
			else
					{
					echo "Please Contact to admin for your Pin Balance";
					header("location:pinover.php");
					//header("location:pinover.php");
					}
		
		}

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title></title>
</head>

<body>
</body>
</html>

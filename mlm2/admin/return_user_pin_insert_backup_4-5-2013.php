<?php 
include_once("function.php");
connect();
$res_session=check_session($_SESSION['mlm5_admin_id'],$_SESSION['mlm5_admin_pass']);
if($res_session!=1)
		{
		header("location:index.php");
		}
else if($_SESSION['mlm5_admin_type']!="Admin" && !isset($_POST['submit']))
		{
		header("location:notallowed.php");
		}
else	
		{
		$que_user_info=mysql_query("SELECT * FROM `user_info` where `login_id`='$_POST[login_id]'");
		$res_user_info=mysql_fetch_array($que_user_info);
		
		$que_pin=mysql_query("SELECT * FROM `login_details` where `id`='$_SESSION[mlm5_admin_id]'");
		$res_pin=mysql_fetch_array($que_pin);
		if($res_user_info['pin_balance']>=$_POST['pin_balance'])
					{
					$last_balance=0;
					$new_balance=0;
					$new_app_capacity=0;
					$last_balance=$res_user_info['pin_balance'];
					$new_balance=$last_balance-$_POST['pin_balance'];
					$query_update_user=mysql_query("update `user_info` set `pin_balance`='$new_balance' where `login_id`='$_POST[login_id]'");
					$new_app_capacity=$res_pin['app_capacity']+$_POST['pin_balance'];
					$query_update_login=mysql_query("update `login_details` set `app_capacity`='$new_app_capacity' where `id`='$_SESSION[mlm5_admin_id]'");
					$query_insert_pin=mysql_query("insert into `pin_no` set
`return_pin`='$_POST[pin_balance]',`id`='$_POST[login_id]',`send_by`='$_SESSION[mlm5_admin_id]'");
					echo "Successfully Inserted";
					}
					else
					{
					echo "Please check the Pin Balance";
					}
		
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="2;home.php"/>
<title>Admin</title>
</head>

<body>
</body>
</html>

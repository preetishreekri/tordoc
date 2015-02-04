<?php 
include_once("function.php");
connect();
$res=check_session($_SESSION['mlm5_admin_id'],$_SESSION['mlm5_admin_pass']);
if($res!=1)
{
header("location:index.php");
}
else
	{
	if($_SESSION['mlm5_admin_type']!="Admin" && $_SESSION['mlm5_admin_type']!="Employee" && $_SESSION['mlm5_admin_type']!="Special_Employee")
		{
	header("location:notallowed.php");
		}
	else
		{
		if(isset($_POST['submit']))
			{
			
			$que=mysql_query("SELECT * FROM `user_info` where `login_id`='$_POST[login_id]'");
			$res1=mysql_fetch_array($que);
			var_dump($res1);
			if(isset($res1['login_id']))
				{
				$que_pin=mysql_query("SELECT * FROM `login_details` where `id`='$_SESSION[mlm5_admin_id]'");
				$res_pin=mysql_fetch_array($que_pin);
				echo "<br><br>";
			var_dump($res_pin);
				if($res_pin['app_capacity']>=$_POST['pin_balance'])
					{
					$last_balance=$res1['pin_balance'];
					$new_balance=$last_balance+$_POST['pin_balance'];
					$query4=mysql_query("update `user_info` set `pin_balance`='$new_balance' where `login_id`='$_POST[login_id]'");
					$new_app_capacity=$res_pin['app_capacity']-$_POST['pin_balance'];
					$query5=mysql_query("update `login_details` set `app_capacity`='$new_app_capacity' where `id`='$_SESSION[mlm5_admin_id]'");
					$query6=mysql_query("insert into `pin_no` set
`pin`='$_POST[pin_balance]',`id`='$_POST[login_id]',`send_by`='$_SESSION[mlm5_admin_id]'");
					
					
					
					
					
					
					
					echo "SELECT * FROM `user_info` where `login_id`='$_POST[login_id]'";
					echo "<br>";
					echo "SELECT * FROM `login_details` where `id`='$_SESSION[mlm5_admin_id]'";
					echo "<br>";
					echo "update `user_info` set `pin_balance`='$new_balance' where `login_id`='$_POST[login_id]'";
					echo "<br>";
					echo "insert into `pin_no` set
`pin`='$_POST[pin_balance]',`id`='$_POST[login_id]',`send_by`='$_SESSION[mlm5_admin_id]'";
					echo "<br>";
					
					echo "Successfully Inserted";
					}
					else
					{
					echo "Please Contact to admin for your Pin Balance";
					}
				}
				else
				{
				echo "please Re-enter ID";
				}
			}
			else
			{
			echo "";
			}
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="265465465;home.php"/>
<title>mlm</title>
</head>

<body>
<br><br>
<a href="send_user_pin.php">Back</a>
</body>
</html>

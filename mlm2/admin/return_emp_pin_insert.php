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
	if($_SESSION['mlm5_admin_type']!="Admin" )
		{
	header("location:notallowed.php");
		}
	else
		{
		if(isset($_POST['submit']))
			{
			
			$que=mysql_query("SELECT * FROM `login_details` where `id`='$_POST[login_id]'");
			$res=mysql_fetch_array($que);
			if(isset($res['id']))
				{
				$que_pin=mysql_query("SELECT * FROM `login_details` where `id`='$_SESSION[mlm5_admin_id]'");
				$res_pin=mysql_fetch_array($que_pin);
				if($res['app_capacity']>=$_POST['pin_balance'])
					{
					$last_balance=$res['app_capacity'];
					$new_balance=$last_balance-$_POST['pin_balance'];
					$query4=mysql_query("update `login_details` set `app_capacity`='$new_balance' where `id`='$_POST[login_id]'");
					$query6=mysql_query("insert into `pin_no_emp` set
`return_pin`='$_POST[pin_balance]',`id`='$_POST[login_id]',`send_by`='$_SESSION[mlm5_admin_id]'");
					echo "Successfully Inserted";
					}
					else
					{
					echo "Please check the Pin Balance";
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
<meta http-equiv="refresh" content="2;home.php"/>
<title>mlm</title>
</head>

<body>

</body>
</html>

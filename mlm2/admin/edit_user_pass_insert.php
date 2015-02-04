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
	if($_SESSION['mlm5_admin_type']!="Admin" && $_SESSION['mlm5_admin_type']!="Special_Employee")
		{
	header("location:notallowed.php");
		}
	else
		{
		if(isset($_POST['submit']))
			{
			
			$que=mysql_query("SELECT * FROM `user_info` where `login_id`='$_POST[login_id]'");
			$res=mysql_fetch_array($que);
			if(isset($res['login_id']))
				{
					$query4=mysql_query("update `user_info` set `login_pass`='$_POST[newpass]' where `login_id`='$_POST[login_id]'");
					echo "Successfully Inserted";
					
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
<title>bhabijee</title>
</head>

<body>

</body>
</html>

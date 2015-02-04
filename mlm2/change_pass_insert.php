<?php 
include_once("function.php");
connect();
$res=check_session($_SESSION['mlmlogin_id'],$_SESSION['mlmloginPass']);
if($res!=1)
{
header("location:index.php");
}
else
	{

		if(isset($_POST['submit']))
			{
			$que=mysql_query("SELECT * FROM `user_info` where `login_id`='$_POST[login_id]'");
			$res=mysql_fetch_array($que);
			if(isset($res['login_id']) && isset($_POST['new_pass']) && $_POST['new_pass']==$_POST['new_pass1'])
				{
				$query4=mysql_query("update `user_info` set `pass_change_status`='1' where `login_id`='$_POST[login_id]'");
				$query5=mysql_query("update `user_info` set `login_pass`='$_POST[new_pass]' where `login_id`='$_POST[login_id]'");
				$_SESSION['mlmloginPass']=$_POST['new_pass'];
				echo "Successfully Inserted";
				}
				else
				{
				echo "please Re-enter password";
				header('location:change_pass.php');
				}
			}
			else
			{
			echo "";
			}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="0;home.php"/>
<title>mlm</title>
</head>

<body>

</body>
</html>

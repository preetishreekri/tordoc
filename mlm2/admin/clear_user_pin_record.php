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
	if($_SESSION['mlm5_admin_type']!="Admin")
		{
	header("location:notallowed.php");
		}
	else
		{
		if(isset($_POST['submit']))
			{
			$query4=mysql_query("update `pin_no` set `status`='1' where `status`='0'")or die(mysql_error());
			echo "Updated successfully";
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="2;home.php"/>
<title></title>
</head>

<body>
</body>
</html>

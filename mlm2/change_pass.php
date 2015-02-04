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

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>tordoc</title>
</head>

<body>
<form name="form1" method="post" action="change_pass_insert.php">
Login ID<input type="text" name="login_id" id="login_id" readonly="true"  value="<?php echo $_SESSION['mlmlogin_id']; ?>" /><br />
New Password<input type="password" name="new_pass" id="new_pass"  />
Re-enter New Password<input type="password" name="new_pass1" id="new_pass1"  />
<input type="submit" name="submit" />
</form>
<?php }?>
</body>
</html>

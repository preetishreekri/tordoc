<?php include_once("function.php");
connect();
$res=check_session($_SESSION['mlmlogin_id'],$_SESSION['mlmloginPass']);
if($res!=1)
{
header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<a href="gen.php?i=<?php echo $_SESSION['mlmlogin_id'];?>">View Tree</a><br />
<a href="applicant_add.php">Add New</a><br />
<a href="applicant_conformation.php">Conformation</a><br />
<a href="logout.php">Logout</a><br />


</body>
</html>

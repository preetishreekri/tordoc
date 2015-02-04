<?php
include_once("function.php");
connect();

$a=$_POST['id'];
$b=$_POST['password'];

$query=mysql_query("select * from `login_details` where `id`='$a' and `password`='$b'") or die(mysql_error());
$res1_log=mysql_num_rows($query);
if($res1_log!= 1)
{
header('location:index.php');
}
else
{
$result=mysql_fetch_array($query);
$_SESSION['mlm5_admin_id']=$_POST['id'];
$_SESSION['mlm5_admin_pass']=$_POST['password'];
$_SESSION['mlm5_admin_type']=$result['type'];
header('location:home.php');
}
?>
<html>
<head>
<title></title>
</head>
<body> 
</body>
</html>

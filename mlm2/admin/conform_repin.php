<?php 
include_once("function.php");
connect();

echo "Current Pin ".$_SESSION['user_send_current_pin']."<br>";
echo "Send Pin ".$_SESSION['user_send_add_pin']."<br>";
echo "Total Pin ".($_SESSION['user_send_current_pin']+$_SESSION['user_send_add_pin'])."<br>";
$que_user_info1=mysql_query("SELECT * FROM `user_info` where `login_id`='$_SESSION[user_send_id]'");
$res_user_info1=mysql_fetch_array($que_user_info1);
echo "Total2 Pin ".$res_user_info1['repin_balance']."<br>";



echo "Sender Pin ".($_SESSION['user_send_app_capacity'])."<br>";
echo "Total Sender Pin ".($_SESSION['user_send_app_capacity']-$_SESSION['user_send_add_pin'])."<br>";
$que_pin_sender=mysql_query("SELECT * FROM `login_details` where `id`='$_SESSION[mlm5_admin_id]'");
$res_pin_sender=mysql_fetch_array($que_pin_sender);
echo "Total2 Sender Pin".$res_pin_sender['app_capacity']."<br>";



if($res_user_info1['repin_balance']==($_SESSION['user_send_current_pin']+$_SESSION['user_send_add_pin']))
echo "Sended Successfully";
else
echo "<span style='color:RED;'> Please return your pin<span>";

unset($_SESSION['user_send_add_pin']);
unset($_SESSION['user_send_current_pin']);
unset($_SESSION['user_send_id']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title></title>
</head>

<body>
<br />
<br /><br /><br />
<a href="home.php" >Back to Home</a>

</body>
</html>

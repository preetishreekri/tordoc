<?php
include_once("function.php");
connect();

$login_id=$_GET['login_id'];
$query_1=mysql_query("select * from `user_info` where `login_id`='$login_id'")or die(mysql_error());
$result_1=mysql_fetch_array($query_1)
?>
<?php echo $result_1['login_pass']; ?>

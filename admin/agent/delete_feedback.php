<?php
include_once("../function.php");
$id=$_GET['id1'];
mysql_query("delete from `feedback` where `slno`='$id'");
$msg="successfully deleted";
header("location:addfeedback.php?msg=$msg");
?>

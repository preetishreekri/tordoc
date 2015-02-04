<?php
include_once("../function.php");
$id=$_GET['id1'];
mysql_query("delete from `details` where `slno`='$id'");
$msg="successfully deleted";
header("location:doctor.php?msg=$msg");
?>

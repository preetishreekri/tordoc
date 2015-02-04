<?php
include_once("function.php");
$id=$_GET['id1'];
mysql_query("delete from `specification` where `slno`='$id'");
$msg="successfully deleted";
header("location:addspeciality.php?msg=$msg");
?>

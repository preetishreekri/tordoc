<?php
include_once("function.php");
$id=$_GET['id1'];
mysql_query("delete from `city` where `slno`='$id'");
$msg="successfully deleted";
header("location:cities.php?msg=$msg");
?>

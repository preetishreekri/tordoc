<?php
include_once("function.php");
$id=$_GET['id1'];
mysql_query("delete from `district` where `id`='$id'");
$msg="successfully deleted";
header("location:district.php?msg=$msg");
?>

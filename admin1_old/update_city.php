<?php
include_once("function.php");
$id=$_POST['hidden_id'];
$cname=htmlentities($_POST['cname'],ENT_QUOTES);
//echo "update `city` set `cityname`='$cname where `slno`='$id'";
mysql_query("update `city` set `cityname`='$cname' where `slno`='$id'");
$msg="successfully updated";
header("location:cities.php?msg=$msg");
?>

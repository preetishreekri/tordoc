<?php
include_once("function.php");
$id=$_POST['hidden_id'];
$sname=htmlentities($_POST['sname'],ENT_QUOTES);
mysql_query("update `specification` set `name`='$sname' where `slno`='$id'");
$msg="successfully updated";
header("location:addspeciality.php?msg=$msg");
?>

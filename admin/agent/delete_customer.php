<?php
include_once("../function.php");
$id=$_GET['id'];
mysql_query("delete from `customer` where `slno`='$id'");
$msg="successfully deleted";
header("location:customer.php?msg=$msg");
?>

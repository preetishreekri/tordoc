<?php
include_once("../function.php");
$imageid=$_GET['id1'];
mysql_query("delete from `image` where `slno`='$imageid'");
$msg="successfully deleted";
header("location:addimage.php?msg=$msg");
?>

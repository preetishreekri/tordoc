<?php
include_once("../function.php");
$id=$_POST['hidden_id'];
$dname=htmlentities($_REQUEST['dname'],ENT_QUOTES);
$email=htmlentities($_REQUEST['email'],ENT_QUOTES);
$pass=htmlentities($_REQUEST['pass'],ENT_QUOTES);
$phone=htmlentities($_REQUEST['phone'],ENT_QUOTES);
$address=htmlentities($_REQUEST['address'],ENT_QUOTES);
$fee=htmlentities($_REQUEST['fee'],ENT_QUOTES);
mysql_query("update `customer` set `name`='$dname',`email`='$email',`password`='$pass',`contact`='$phone',`address`='$address',`fee`='$fee' where `slno`='$id'");
$msg="successfully updated";
header("location:customer.php?msg=$msg");
?>

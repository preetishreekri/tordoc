<?php
include_once('function.php');
$name=htmlentities($_POST['dname'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$pass=htmlentities($_POST['pass'],ENT_QUOTES);
$phone=htmlentities($_POST['phone'],ENT_QUOTES);
$address=htmlentities($_POST['address'],ENT_QUOTES);
$id=$_POST['hid'];

$fet=mysql_query("select * from `login` where `slno`='$id'");
$res=mysql_numrows($fet);
if($res==1)
{
    //echo "update `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`status`='1' where `slno`='$id'";
mysql_query("update `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`status`='1',`address`='$address' where `slno`='$id'") or die(mysql_error());
$msg="updated sucessfully";
}
header("location:manager.php?msg=$msg");
?>
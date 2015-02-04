<?php
include_once('../function.php');
$name=htmlentities($_POST['dname'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$pass=htmlentities($_POST['pass'],ENT_QUOTES);
$phone=htmlentities($_POST['phone'],ENT_QUOTES);
$address=htmlentities($_POST['address'],ENT_QUOTES);
$hd_slno=$_POST['hd_slno'];
$hd_type=htmlentities($_POST['hd_type'],ENT_QUOTES);

$fet=mysql_query("select * from `login` where `username`='$name'");
$res=mysql_numrows($fet);
if($res==0 && $name!="" && $pass!=""){
    if($hd_type=="doctor"){
//echo "insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`status`='1'";
mysql_query("insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`address`='$address',`status`='2',`manager`='$hd_slno',`type`='$hd_type',`percentage`='3'") or die(mysql_error());
    }
    if($hd_type=="user"){
//echo "insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`status`='1'";
mysql_query("insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`address`='$address',`status`='2',`manager`='$hd_slno',`type`='$hd_type',`percentage`='4'") or die(mysql_error());
    }
$msg="sucessfully inserted";
}
else{ $msg="name already exist";}
header("location:agent.php?msg=$msg");
?>
<?php
include_once('function.php');
$name=htmlentities($_POST['dname'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$pass=htmlentities($_POST['pass'],ENT_QUOTES);
$phone=htmlentities($_POST['phone'],ENT_QUOTES);
$address=htmlentities($_POST['address'],ENT_QUOTES);
$manager=htmlentities($_POST['manager'],ENT_QUOTES);

$sql=mysql_query("select * from `login` where `slno`='$manager'");
$re=mysql_fetch_array($sql);
$type=$re['type'];

$fet=mysql_query("select * from `login` where `username`='$name'");
$res=mysql_numrows($fet);
if($res==0 && $name!="" && $pass!=""){
    if($type=="doctor")
    {
//echo "insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`status`='1'";
mysql_query("insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`address`='$address',`status`='2',`manager`='$manager',`type`='$type',`percentage`='3'") or die(mysql_error());
    }
    if($type=="user")
    {
//echo "insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`status`='1'";
mysql_query("insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`address`='$address',`status`='2',`manager`='$manager',`type`='$type',`percentage`='4'") or die(mysql_error());
    }
$msg="sucessfully inserted";
}
else{ $msg="name already exist";}
header("location:agent.php?msg=$msg");
?>
<?php
include_once("function.php");
$dname=htmlentities($_REQUEST['user'],ENT_QUOTES);
$email=htmlentities($_REQUEST['email'],ENT_QUOTES);
$pass=htmlentities($_REQUEST['pass'],ENT_QUOTES);
$phone=htmlentities($_REQUEST['contact'],ENT_QUOTES);
$address=htmlentities($_REQUEST['address'],ENT_QUOTES);
if($dname!="" && $pass!="")
{
	$fet=mysql_query("select * from `customer` where `name`='$dname'");
	$n=mysql_numrows($fet);
	if($n==0)
	{
	//echo "insert into `customer` set `name`='$dname',`email`='$email',`password`='$pass',`contact`='$phone',`address`='$address',`fee`='$fee'";
	mysql_query("insert into `customer` set `name`='$dname',`email`='$email',`password`='$pass',`contact`='$phone',`address`='$address',`fee`='$fee'");		
	$msg="succssfully added";
	}
	else
	{ 
	$msg="Username aleredy exist.Please register with other name";
	}
}
header("location:doctorview.php?msg=$msg");
?>
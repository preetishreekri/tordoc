<?php
include_once('../function.php');
$dname=htmlentities($_REQUEST['dname'],ENT_QUOTES);
$email=htmlentities($_REQUEST['emailid'],ENT_QUOTES);
$pass=htmlentities($_REQUEST['pass'],ENT_QUOTES);
$phone=htmlentities($_REQUEST['phone'],ENT_QUOTES);
$address=htmlentities($_REQUEST['address'],ENT_QUOTES);
//$fee=htmlentities($_REQUEST['fee'],ENT_QUOTES);
$hd_agentid=htmlentities($_REQUEST['hd_agentid'],ENT_QUOTES);
if($dname!="" && $pass!="")
{
	$fet=mysql_query("select * from `customer` where `name`='$dname'");
	$n=mysql_numrows($fet);
	if($n==0)
	{
	mysql_query("insert into `customer` set `name`='$dname',`email`='$email',`password`='$pass',`contact`='$phone',`address`='$address',`fee`='$fee',`agent_id`='$hd_agentid'");		
	$msg="succssfully added";
	}
	else
	{ 
	$msg="Username aleredy exist";
	}
}
header("location:customer.php?msg=$msg");
?>
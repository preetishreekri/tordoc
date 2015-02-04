<?php
include_once("../function.php");
$uid=$_POST['hd_uid'];
$experience=$_POST['exp'];
foreach($experience as $expp) 
{
if($expp!="")
{
	mysql_query("insert into `experience` set `exp_name`='$expp',`uid`='$uid'");
}	
}
header("location:addaward.php?uidval=$uid");
?>
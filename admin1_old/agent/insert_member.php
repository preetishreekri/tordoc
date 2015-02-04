<?php
include_once("../function.php");
$uid=$_POST['hd_uid'];
$member=$_POST['member'];
foreach($member as $memb) 
{
if($memb!="")
{
	mysql_query("insert into `membership` set `member`='$memb',`uid`='$uid'");
}	
}
header("location:addregistration.php?uidval=$uid");
?>
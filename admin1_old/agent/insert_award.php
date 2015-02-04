<?php
include_once("../function.php");
$uid=$_POST['hd_uid'];
$awrd=$_POST['awrd'];
foreach($awrd as $award) 
{
if($award!="")
{
	mysql_query("insert into `award` set `awd_name`='$award',`uid`='$uid'");
}	
}
header("location:addmember.php?uidval=$uid");
?>
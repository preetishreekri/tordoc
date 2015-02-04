<?php
include_once("../function.php");
$uid=$_POST['hd_uid'];
$regist=$_POST['regist'];
foreach($regist as $reg) 
{
if($reg!="")
{
	mysql_query("insert into `registration` set `registration`='$reg',`uid`='$uid'");	
}	
}
header("location:doctor.php?uidval=$uid");
?>
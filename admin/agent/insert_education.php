<?php
include_once("../function.php");
$uid=$_POST['hd_uid'];
$education=$_POST['educate'];
foreach($education as $edu) 
{
if($edu!="")
{
	mysql_query("insert into `education` set `educate_name`='$edu',`uid`='$uid'");	
}	
}
header("location:addexperience.php?uidval=$uid");
?>
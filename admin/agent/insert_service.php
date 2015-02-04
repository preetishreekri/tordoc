<?php
include_once("../function.php");
$uid=$_POST['hd_uid'];
$service=$_POST['ser'];
foreach($service as $serve) 
{
if($serve!=""){
	mysql_query("insert into `services` set `ser_name`='$serve',`uid`='$uid'");		
}
}
header("location:addspecialize.php?uidval=$uid");
?>
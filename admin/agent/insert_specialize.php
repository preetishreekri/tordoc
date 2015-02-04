<?php
include_once("../function.php");
$uid=$_POST['hd_uid'];
$special=$_POST['spec'];
foreach($special as $speci) 
{
if($speci!="")
{
	mysql_query("insert into `specialize` set `spec_name`='$speci',`uid`='$uid'");		
}
}
header("location:addeducation.php?uidval=$uid");
?>
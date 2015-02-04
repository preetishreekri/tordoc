<?php
include_once('function.php');
 $slno=$_GET['id'];

$fet=mysql_query("select * from `login` where `slno`='$slno'")or die(mysql_error());
$res=mysql_numrows($fet);
if($res>0){
mysql_query("update `login` set `status`='3' where `slno`='$slno'") or die(mysql_error());
}
header("location:manager.php");
?>
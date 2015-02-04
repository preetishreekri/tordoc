<?php
include_once("../function.php");
$uid=$_POST['hduid'];
$id=$_POST['hd_slno'];
$docid=$_POST['hdocid'];
$service=$_POST['serve'];
foreach($service as $key => $value) 
{
$serve=$value;
$slno=$id[$key];
$sql=mysql_query("select * from `services` where `slno`='$slno'");
$no=mysql_num_rows($sql);
if($no==0)
{
mysql_query("insert into `services` set `ser_name`='$serve',`uid`='$uid'");
}
else{
mysql_query("update `services` set `ser_name`='$serve' where `slno`='$slno'");
}
}
$msg="successfully updated";
header("location:edit_service.php?uniqueid=$uid&slno=$docid");
?>

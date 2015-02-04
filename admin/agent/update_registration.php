<?php
include_once("../function.php");
$uid=$_POST['hduid'];
$id=$_POST['hd_slno'];
$docid=$_POST['hdocid'];
$regist=$_POST['regist'];
foreach($regist as $key => $value) 
{
$registt=$value;
$slno=$id[$key];
$sql=mysql_query("select * from `registration` where `slno`='$slno'");
$no=mysql_num_rows($sql);
if($no==0)
{
mysql_query("insert into `registration` set `registration`='$registt',`uid`='$uid'");
}
else{
mysql_query("update `registration` set `registration`='$registt' where `slno`='$slno'");
}
}
$msg="successfully updated";
header("location:edit_registration.php?uniqueid=$uid&slno=$docid");
?>

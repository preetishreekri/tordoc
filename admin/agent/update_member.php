<?php
include_once("../function.php");
$uid=$_POST['hduid'];
$id=$_POST['hd_slno'];
$docid=$_POST['hdocid'];
$member=$_POST['member'];
foreach($member as $key => $value) 
{
$memb=$value;
$slno=$id[$key];
$sql=mysql_query("select * from `membership` where `slno`='$slno'");
$no=mysql_num_rows($sql);
if($no==0)
{
mysql_query("insert into `membership` set `member`='$memb',`uid`='$uid'");
}
else{
mysql_query("update `membership` set `member`='$memb' where `slno`='$slno'");
}
}
$msg="successfully updated";
header("location:edit_member.php?uniqueid=$uid&slno=$docid");
?>

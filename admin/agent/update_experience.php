<?php
include_once("../function.php");
$uid=$_POST['hduid'];
$id=$_POST['hd_slno'];
$docid=$_POST['hdocid'];
$exp=$_POST['exp'];
foreach($exp as $key => $value) 
{
$expp=$value;
$slno=$id[$key];
$sql=mysql_query("select * from `experience` where `slno`='$slno'");
$no=mysql_num_rows($sql);
if($no==0)
{
echo "insert into `experience` set `exp_name`='$expp',`uid`='$uid'";
mysql_query("insert into `experience` set `exp_name`='$expp',`uid`='$uid'");
}
else{
echo "update `experience` set `exp_name`='$expp' where `slno`='$slno'";
mysql_query("update `experience` set `exp_name`='$expp' where `slno`='$slno'");
}
}
$msg="successfully updated";
header("location:edit_experience.php?uniqueid=$uid&slno=$docid");
?>

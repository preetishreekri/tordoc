<?php
include_once("../function.php");
$uid=$_POST['hduid'];
$id=$_POST['hd_slno'];
$docid=$_POST['hdocid'];
$educate=$_POST['educate'];
foreach($educate as $key => $value) 
{
$educ=$value;
$slno=$id[$key];
$sql=mysql_query("select * from `education` where `slno`='$slno'");
$no=mysql_num_rows($sql);
if($no==0)
{
mysql_query("insert into `education` set `educate_name`='$educ',`uid`='$uid'");
}
else{
mysql_query("update `education` set `educate_name`='$educ' where `slno`='$slno'");
}
}
$msg="successfully updated";
header("location:edit_education.php?uniqueid=$uid&slno=$docid");
?>

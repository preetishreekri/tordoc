<?php
include_once("../function.php");
$uid=$_POST['hduid'];
$id=$_POST['hd_slno'];
$docid=$_POST['hdocid'];
$awrd=$_POST['awrd'];
foreach($awrd as $key => $value) 
{
$awrdd=$value;
$slno=$id[$key];
$sql=mysql_query("select * from `award` where `slno`='$slno'");
$no=mysql_num_rows($sql);
if($no==0)
{
mysql_query("insert into `award` set `awd_name`='$awrdd',`uid`='$uid'");
}
else{
mysql_query("update `award` set `awd_name`='$awrdd' where `slno`='$slno'");
}
}
$msg="successfully updated";
header("location:edit_award.php?uniqueid=$uid&slno=$docid");
?>

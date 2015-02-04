<?php
include_once("../function.php");
$uid=$_POST['hduid'];
$id=$_POST['hd_slno'];
$docid=$_POST['hdocid'];
$specialize=$_POST['specl'];
foreach($specialize as $key => $value) 
{
$special=$value;
$slno=$id[$key];
$sql=mysql_query("select * from `specialize` where `slno`='$slno'");
$no=mysql_num_rows($sql);
if($no==0)
{
mysql_query("insert into `specialize` set `spec_name`='$special',`uid`='$uid'");
}
else{
mysql_query("update `specialize` set `spec_name`='$special' where `slno`='$slno'");
echo "";
}
}
$msg="successfully updated";
header("location:edit_specialize.php?uniqueid=$uid&slno=$docid");
?>

<?php
include_once("../function.php");
$hd_id=$_POST['hd_id'];
$hd=$_POST['hd'];
$sun=$_POST['sun'];
$mon=$_POST['mon'];
$tues=$_POST['tues'];
$wed=$_POST['wed'];
$thru=$_POST['thru'];
$fri=$_POST['fri'];
$sat=$_POST['sat'];
foreach($hd as  $key => $value)
{
 $sunval=$sun[$key];
 $monval=$mon[$key];
 $tuesval=$tues[$key];
 $wedval=$wed[$key];
 $thruval=$thru[$key];
 $frival=$fri[$key];
 $satval=$sat[$key];
mysql_query("insert into `schedule` set `doctor_id`='$hd_id',`type`='$value',`sunday`='$sunval',`monday`='$monval',`tuesday`='$tuesval',`wednesday`='$wedval',`thrusday`='$thruval',`friday`='$frival',`saturday`='$satval'");
}
header("location:doctor_detail.php");
?>
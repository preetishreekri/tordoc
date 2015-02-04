<?php
include_once("../function.php");
$hd_id=$_POST['hd_id'];
$hd=$_POST['hd'];
$sun=$_POST['sun'];
$mon=$_POST['mon'];
$tues=$_POST['tue'];
$wed=$_POST['wed'];
$thru=$_POST['thru'];
$fri=$_POST['fri'];
$sat=$_POST['sat'];

var_dump($_POST['tue']);

$feeval=$_POST['sunfee'];
$feevalmon=$_POST['monfee'];
$feevaltue=$_POST['tuesfee'];
$feevalwed=$_POST['wedfee'];
$feevalthur=$_POST['thrufee'];
$feevalfri=$_POST['frifee'];
$feevalsat=$_POST['satfee'];


$pat=$_POST['sunpat'];
$patmon=$_POST['monpat'];
$pattue=$_POST['tuespat'];
$patwed=$_POST['wedpat'];
$patthur=$_POST['thrupat'];
$patfri=$_POST['fripat'];
$patsat=$_POST['satpat'];

$strttimesun=$_POST['strtimesun'];

$endtimesun=$_POST['endtimesun'];

$strtimemon=$_POST['strtimemon'];
$endtimemon=$_POST['endtimemon'];

$strttimetue=$_POST['strtimetue'];
$endtimetue=$_POST['endtimetue'];

$strttimewed=$_POST['strtimewed'];
$endtimewed=$_POST['endtimewed'];

$strttimethur=$_POST['strtimethur'];
$endtimethur=$_POST['endtimethur'];

$strttimefri=$_POST['strtimefri'];
$endtimefri=$_POST['endtimefri'];

$strttimesat=$_POST['strtimesat'];
$endtimesat=$_POST['endtimesat'];

foreach($sun as  $key => $value)
{
 
$sunval=$sun[$key].'|'. $feeval[$key].'|'.$strttimesun[$key].'-'.$endtimesun[$key].'|'.$pat[$key];
$monval=$mon[$key].'|'. $feevalmon[$key].'|'.$strtimemon[$key].'-'.$endtimemon[$key].'|'.$patmon[$key];
$tueval=$tues[$key].'|'. $feevaltue[$key].'|'.$strttimetue[$key].'-'.$endtimetue[$key].'|'.$pattue[$key];
$wedval=$wed[$key].'|'. $feevalwed[$key].'|'.$strttimewed[$key].'-'.$endtimewed[$key].'|'.$patwed[$key];
$thruval=$thru[$key].'|'. $feevalthur[$key].'|'.$strttimethur[$key].'-'.$endtimethur[$key].'|'.$patthur[$key];
$frival=$fri[$key].'|'. $feevalfri[$key].'|'.$strttimefri[$key].'-'.$endtimefri[$key].'|'.$patfri[$key];
$satval=$sat[$key].'|'. $feevalsat[$key].'|'.$strttimesat[$key].'-'.$endtimesat[$key].'|'.$patsat[$key];




//if($sunval!='||-|' || $monval!='||-|' || $tueval!='||-|' || $wedval!='||-|' || $thruval!='||-|' || $frival!='||-|' || $satval!='||-|')
//{
echo "insert into `schedule` set `doctor_id`='$hd_id',`sunday`='$sunval',`monday`='$monval',`tuesday`='$tueval',`wednesday`='$wedval',`thursday`='$thruval',`friday`='$frival',`saturday`='$satval'".'<br>';

mysql_query("insert into `schedule` set `doctor_id`='$hd_id',`sunday`='$sunval',`monday`='$monval',`tuesday`='$tueval',`wednesday`='$wedval',`thursday`='$thruval',`friday`='$frival',`saturday`='$satval'")or die(mysql_error());
//}
}

$discount=$_POST['discount'];
$bookingtype=$_POST['bookingtype'];

//mysql_query("update `doctor_details` set `discount`='$discount',`booking_type`='$bookingtype' where `id`='$hd_id'");
 


header("location:doctor_detail.php");
?>
<?php
include_once("admin/function.php");
if(isset($_POST['submit']))
{
    $tim=0;
$_SESSION['time']=time();
 $time=$_SESSION['time'];
    
     $pname=htmlentities($_POST['patient']);
    $reson=htmlentities($_POST['reson']);
    $email=htmlentities($_POST['email']);
    $mobile=htmlentities($_POST['mobile']);
    $address=htmlentities($_POST['address']);
    
     $htime=$_POST['htime'];
    $hdate=$_POST['hdate'];
    $huid=$_POST['huid'];
    $fee=$_POST['hfee'];
    
    echo $pname.'---'.$fee;
    
    echo "insert into `appointment` set `patient_name`='$pname',`patient_reson`='$reson',`patient_email`='$email',`patient_mobile`='$mobile',`address`='$address',`time`='$htime',`date`='$hdate',`doctor_uid`='$huid',`fee`='$fee',`billid`='$time' ";
  mysql_query("insert into `appointment` set `patient_name`='$pname',`patient_reson`='$reson',`patient_email`='$email',`patient_mobile`='$mobile',`address`='$address',`time`='$htime',`date`='$hdate',`doctor_uid`='$huid',`agentid`='$slno',`fee`='$fee',`billid`='$time' ");
    
    
     if($email!="")
{
$message="Thank you for contacting us\n your appointment time is \n Time=".$htime."\n on \n Date=".$hdate."\n fee=".$fee;
$subject="email verification";
$from="krititech.com";
mail($email,$subject,$message,"From: $from\n");
}
$tim=$time;
unset($_SESSION[time]);
header("location:bill.php?bid=$tim");
}
?>
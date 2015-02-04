<?php
include_once("function.php");
if(isset($_POST['submit']))
{

$tim=0;
$total=0;
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
    $dfee=$_POST['dhfee'];
    if(isset($_SESSION['slno']))
    {
    $slno=$_SESSION['slno'];
    //echo "insert into `appointment` set `patient_name`='$pname',`patient_reson`='$reson',`patient_email`='$email',`patient_mobile`='$mobile',`time`='$htime',`date`='$hdate',`doctor_uid`='$huid' ";
    mysql_query("insert into `appointment` set `patient_name`='$pname',`patient_reson`='$reson',`patient_email`='$email',`patient_mobile`='$mobile',`address`='$address',`time`='$htime',`date`='$hdate',`doctor_uid`='$huid',`agentid`='$slno',`fee`='$fee',`billid`='$time' ");
    }
    if(isset($_SESSION['doctor'])){
    $slno=$_SESSION['doctor'];
    //echo "insert into `appointment` set `patient_name`='$pname',`patient_reson`='$reson',`patient_email`='$email',`patient_mobile`='$mobile',`time`='$htime',`date`='$hdate',`doctor_uid`='$huid' ";
    mysql_query("insert into `appointment` set `patient_name`='$pname',`patient_reson`='$reson',`patient_email`='$email',`patient_mobile`='$mobile',`address`='$address',`time`='$htime',`date`='$hdate',`doctor_uid`='$huid',`doctid`='$slno',`fee`='$fee',`billid`='$time' ");
    }
    if(isset($_SESSION['cost_slno']))
    {
        $sln=$_SESSION['cost_slno'];
        $fetcust=mysql_query("select * from `customer` where `slno`='$sln'");
        $rescust=mysql_fetch_array($fetcust);
        $money=$rescust['fee'];
        $tax=$dfee*0.13;
        $total=$dfee+$tax;
        if($money>$total)
        {
            $restmoney=$money-$total;
            //echo "elsepart". "insert into `appointment` set `patient_name`='$pname',`patient_reson`='$reson',`patient_email`='$email',`patient_mobile`='$mobile',`address`='$address',`time`='$htime',`date`='$hdate',`doctor_uid`='$huid',`doctid`='$slno',`fee`='$fee',`billid`='$time' ";
            mysql_query("insert into `appointment` set `patient_name`='$pname',`patient_reson`='$reson',`patient_email`='$email',`patient_mobile`='$mobile',`address`='$address',`time`='$htime',`date`='$hdate',`doctor_uid`='$huid',`doctid`='$slno',`fee`='$total',`billid`='$time',`cost_id`='$sln' ");
            mysql_query("update `customer` set `fee`='$restmoney' where `slno`='$sln'");
        }else{  $msg="insufficient balance"; header("location:appointment.php?msg=$msg"); }
    }
    else
    {
        mysql_query("insert into `appointment` set `patient_name`='$pname',`patient_reson`='$reson',`patient_email`='$email',`patient_mobile`='$mobile',`address`='$address',`time`='$htime',`date`='$hdate',`doctor_uid`='$huid',`doctid`='$slno',`fee`='$fee',`billid`='$time',`cost_id`='$sln' "); 
    }
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
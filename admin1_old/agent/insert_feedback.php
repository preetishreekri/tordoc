<?php
include_once("../function.php");
if(isset($_POST['submit'])){
    $agent=$_SESSION['id'];
$type=htmlentities($_POST['type'],ENT_QUOTES);
$area=htmlentities($_POST['area'],ENT_QUOTES);
$name=htmlentities($_POST['name'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$contact=htmlentities($_POST['contact'],ENT_QUOTES);
$comment=htmlentities($_POST['comment'],ENT_QUOTES);
$date=htmlentities($_POST['rpt'],ENT_QUOTES);
    $sql=mysql_query("select * from `feedback` where `type`='$type' and `area`='$area' and `name`='$name' and `email`='$email' and `contact`='$contact' and `comment`='$comment' and `date`='$date' and `type_id`='$agent'")or die(mysql_error());
    $num=mysql_num_rows($sql);
    if($num==0)
    {
    mysql_query("insert into `feedback` set `type`='$type',`area`='$area',`name`='$name',`email`='$email',`contact`='$contact',`comment`='$comment',`date`='$date',`type_id`='$agent'")or die(mysql_error());
	$msg="successfully added";
    }
	else{
	$msg="this is already exist";
	}
}
header("location:addfeedback.php?msg=$msg");
?>

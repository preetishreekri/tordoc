<?php
include_once("../function.php");
$id=$_POST['hidden_id'];
$type=htmlentities($_POST['type'],ENT_QUOTES);
$area=htmlentities($_POST['area'],ENT_QUOTES);
$name=htmlentities($_POST['name'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$contact=htmlentities($_POST['contact'],ENT_QUOTES);
$comment=htmlentities($_POST['comment'],ENT_QUOTES);
$date=htmlentities($_POST['rpt'],ENT_QUOTES);
mysql_query("update `feedback` set `type`='$type',`area`='$area',`name`='$name',`email`='$email',`contact`='$contact',`comment`='$comment',`date`='$date' where `slno`='$id'");
$msg="successfully updated";
header("location:addfeedback.php?msg=$msg");
?>

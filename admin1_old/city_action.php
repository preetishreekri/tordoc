<?php
include_once("function.php");
$city=htmlentities($_POST['city']);
if($city!="")
{
mysql_query("insert into `city` set `cityname`='$city'");
$msg="sucessfully inserted";
}
header("location:cities.php?msg=$msg");
?>

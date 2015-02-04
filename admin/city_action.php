<?php
include_once("function.php");
$country=htmlentities($_POST['country'],ENT_QUOTES);
$city=htmlentities($_POST['city'],ENT_QUOTES);
if($city!="")
{
mysql_query("insert into `city` set `country_id`='$country',`cityname`='$city'");
$msg="sucessfully inserted";
}
header("location:cities.php?msg=$msg");
?>

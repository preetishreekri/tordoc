<?php
include_once("function.php");
$country=htmlentities($_POST['country']);
if($country!="")
{
mysql_query("insert into `country` set `country_name`='$country'");
$msg="sucessfully inserted";
}
header("location:country.php?msg=$msg");
?>
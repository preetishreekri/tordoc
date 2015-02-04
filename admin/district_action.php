<?php
include_once("function.php");
$country=htmlentities($_POST['country'],ENT_QUOTES);
echo $_POST['city'];
$city=htmlentities($_POST['city'],ENT_QUOTES);
$distict=htmlentities($_POST['district'],ENT_QUOTES);
mysql_query("insert into `district` set `country_id`='$country',`city_id`='$city',`district_name`='$distict'");
$msg="sucessfully inserted";

header("location:district.php?msg=$msg");
?>
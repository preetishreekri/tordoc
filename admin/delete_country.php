<?php
include_once("function.php");
$id=$_POST['countryidval'];

$q=mysql_query("select * from `city` where `country_id`='$id'");
$count=mysql_num_rows($q);

if($count>0)
{
    echo 'NO';
}
else{
    mysql_query("delete from `country` where `id`='$id'");
      echo 'OK';
}
<?php
include_once("function.php");
$id=$_POST['stateid'];

$q=mysql_query("select * from `district` where `city_id`='$id'");
$count=mysql_num_rows($q);

if($count>0)
{
    echo 'NO';
}
else{
    mysql_query("delete from `city` where `slno`='$id'");
      echo 'OK';
}
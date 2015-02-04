<?php
session_start();
ob_start();
$con=mysql_connect("localhost","tordoc","temp@123");
$db=mysql_select_db("tordoc_doctor",$con);

function locationname($areaid)
{
  $query=mysql_query("select `area` from `location` where `id`='$areaid'");
  $res=mysql_fetch_array($query);
  return $res['area'];
}

function countryname($countryid)
{
  $query=mysql_query("select `country_name` from `country` where `id`='$countryid'");
  $res=mysql_fetch_array($query);
  return $res['country_name']; 
   
}


function statename($stateid)
{
  $query=mysql_query("select `cityname` from `city` where `slno`='$stateid'");
  
  $res=mysql_fetch_array($query);
  return $res['cityname']; 
   
}
?>

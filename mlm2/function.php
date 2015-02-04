<?php
ob_start("ob_gzhandler");
session_start();
$con;
$host="localhost";
$user_id="bhabijee_sam";
$pwd="passpass@123";
$database="bhabijee_db";
$database1="bhabijee_db_level";

function connect()
{
global $con,$host,$user_id,$pwd,$database;
$con=mysql_connect($host,$user_id,$pwd)or die(mysql_error());
$con1=mysql_connect($host,$user_id,$pwd)or die(mysql_error());
mysql_select_db($database,$con);
mysql_select_db($database1,$con1);
}


function check_session($id,$pass)
{
$cnt=0;
$que=mysql_query("SELECT * FROM `user_info` WHERE `login_id`='$id' AND `login_pass`='$pass'");
$cnt=mysql_num_rows($que);
//echo $cnt;
return $cnt;
}
?>

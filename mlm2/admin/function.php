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
mysql_select_db($database,$con);
}


function check_session($id,$pass)
{
$cnt12345qwerty=0;
$que12345qwerty=mysql_query("SELECT * FROM `login_details` WHERE `id`='$id' AND `password`='$pass'");
$cnt12345qwerty=mysql_num_rows($que12345qwerty);
//echo $cnt;
return $cnt12345qwerty;
}
?>


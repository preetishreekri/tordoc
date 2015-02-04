<?php
session_start();
$con=mysql_connect("localhost","tordoc","temp@123");
$db=mysql_select_db("tordoc_doctor",$con);
?>

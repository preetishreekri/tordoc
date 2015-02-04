<?php
include_once("function.php");
if(isset($_POST['submit'])){
$specname=htmlentities($_POST['specname'],ENT_QUOTES);
if($specname!=""){
    $sql=mysql_query("select * from `specification` where `name`='$specname'")or die(mysql_error());
    $num=mysql_num_rows($sql);
    if($num==0)
    {
    mysql_query("insert into `specification` set `name`='$specname'")or die(mysql_error());
	$msg="successfully added";
    }
	else{
	$msg="this is already exist";
	}
}
else{
$msg="Please Fillup All Required Fields";
}
}
header("location:addspeciality.php?msg=$msg");
?>

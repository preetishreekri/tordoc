<?php
include_once('function.php');
$name="daya";
$name1=" daya ";
if($name=$name1)
{
   echo $name;
}

?>
<?php
include_once('function.php');
$name=htmlentities($_POST['mname'],ENT_QUOTES);
$type=htmlentities($_POST['type'],ENT_QUOTES);
$email=htmlentities($_POST['email'],ENT_QUOTES);
$pass=htmlentities($_POST['pass'],ENT_QUOTES);
$phone=htmlentities($_POST['phone'],ENT_QUOTES);
$address=htmlentities($_POST['address'],ENT_QUOTES);

$fet=mysql_query("select * from `login` where `username`='$name'");
$res=mysql_numrows($fet);
if($res==0 && $name!="" && $pass!=""){
    if($type=="doctor"){
//echo "insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`status`='1'";
mysql_query("insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`address`='$address',`type`='$type',`status`='1',`percentage`='1'") or die(mysql_error());
    }
    if($type=="user"){
//echo "insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`status`='1'";
mysql_query("insert into `login` set `username`='$name',`email`='$email',`password`='$pass',`phone`='$phone',`address`='$address',`type`='$type',`status`='1',`percentage`='2'") or die(mysql_error());
    }
$msg="sucessfully inserted";
}
else{ $msg="name already exist";}
header("location:manager.php?msg=$msg");
?>
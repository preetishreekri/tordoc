<?php
include_once('../function.php');
$uid=uniqid();
$dname=htmlentities($_REQUEST['dname'],ENT_QUOTES);
$speciality=htmlentities($_REQUEST['dspeciality'],ENT_QUOTES);

$phone=htmlentities($_REQUEST['phone'],ENT_QUOTES);
$email=htmlentities($_REQUEST['email'],ENT_QUOTES);
$pass=htmlentities($_REQUEST['password'],ENT_QUOTES);

$functionality=htmlentities($_REQUEST['function_area'],ENT_QUOTES);
$area_name=htmlentities($_REQUEST['area_name'],ENT_QUOTES);
$designation=htmlentities($_REQUEST['designation'],ENT_QUOTES);
$description=htmlentities($_REQUEST['description'],ENT_QUOTES);
$experience=htmlentities($_REQUEST['experience'],ENT_QUOTES);
$con_fee=htmlentities($_REQUEST['con_fee']);
$timeslot=htmlentities($_POST['timeslot']);
$address=htmlentities($_REQUEST['address'],ENT_QUOTES);
$lat=htmlentities($_REQUEST['lat']);
$lng=htmlentities($_REQUEST['lng']);
$locat=htmlentities($_REQUEST['location'],ENT_QUOTES);
$location=strtolower($locat);
$city=htmlentities($_REQUEST['city'],ENT_QUOTES);

if($email!="")
{
$image=$_FILES['image']['name'];
$ext1=end(explode(".", $_FILES["image"]["name"]));
	if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="JPG" || $ext1=="JPEG")
            {
                $folder="../upload/";
                $filename = $folder . $image ;
                $copied = copy($_FILES['image']['tmp_name'], $filename);
	    }
$sql=mysql_query("select * from `login` where `username`='$_SESSION[agentid]'");	
$res=mysql_fetch_array($sql);	
$sqldetl=mysql_query("select * from `details` where `email`='$email'");
$no=mysql_num_rows($sqldetl);
if($no==0){
if($dname!="")
		{
           // echo "insert into `details` set `doctor_name`='$dname',`speciality`='$speciality',
           // `functionality`='$functionality',`functionality_name`='$area_name',`designation`='$designation',`description`='$description',
            //`experience`='$experience',`fee`='$con_fee',`address`='$address',`timeslot`='$timeslot',`latitude`='$lat',`longitude`='$lng',`location`='$location',`city`='$city',`image`='$filename',`uniqueid`='$uid',`agent_id`='$res[slno]',`phone`='$phone',`email`='$email',`password`='$pass'";
mysql_query("insert into `details` set `doctor_name`='$dname',`speciality`='$speciality',
            `functionality`='$functionality',`functionality_name`='$area_name',`designation`='$designation',`description`='$description',
            `experience`='$experience',`fee`='$con_fee',`address`='$address',`timeslot`='$timeslot',`latitude`='$lat',`longitude`='$lng',`location`='$location',`city`='$city',`image`='$filename',`uniqueid`='$uid',`agent_id`='$res[slno]',`phone`='$phone',`email`='$email',`password`='$pass'");
			}
			}
                        $found=mysql_query("select * from `functionality` where `name`='$area_name'");
                        $num=mysql_numrows($found);
                        if($num==0){ mysql_query("insert into `functionality` set `name`='$area_name'");}
}
header("location:time.php?uid=$uid");
?>
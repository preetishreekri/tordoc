<?php
include_once("function.php");
$id=$_POST['hidden_id'];
$dname=htmlentities($_POST['dname'],ENT_QUOTES);
$dspeciality=htmlentities($_POST['dspeciality'],ENT_QUOTES);
$functionarea=htmlentities($_POST['function_area'],ENT_QUOTES);
$areaname=htmlentities($_POST['area_name'],ENT_QUOTES);
$designation=htmlentities($_POST['designation'],ENT_QUOTES);
$description=htmlentities($_POST['description'],ENT_QUOTES);
$experience=htmlentities($_POST['experience'],ENT_QUOTES);
$fee=htmlentities($_POST['con_fee'],ENT_QUOTES);
$address=htmlentities($_POST['address'],ENT_QUOTES);
$timeslot=htmlentities($_POST['timeslot'],ENT_QUOTES);
$oldimage=$_POST['oldimage'];
$newimage=$_FILES['imgg']['name'];
$latitude=$_POST['lat'];
$longitude=$_POST['lng'];
if($newimage=='')
{
mysql_query("update `details` set `doctor_name`='$dname',`speciality`='$dspeciality',`functionality`='$functionarea',`functionality_name`='$areaname',`designation`='$designation',`description`='$description',`experience`='$experience',`fee`='$fee',`address`='$address',`timeslot`='$timeslot',`latitude`='$latitude',`longitude`='$longitude',`image`='$oldimage' where `slno`='$id'");

 }
else
{
$ext1=end(explode(".", $_FILES["imgg"]["name"]));

if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

         {
                                    $folder="upload/";

                                                $filename = $folder . $newimage;
                                               
                                                $copied = copy($_FILES['imgg']['tmp_name'], $filename);

		}
		mysql_query("update `details` set `doctor_name`='$dname',`speciality`='$dspeciality',`functionality`='$functionarea',`functionality_name`='$areaname',`designation`='$designation',`description`='$description',`experience`='$experience',`fee`='$fee',`address`='$address',`timeslot`='$timeslot',`latitude`='$latitude',`longitude`='$longitude',`image`='$filename' where `slno`='$id'");
}
$msg="successfully updated";
header("location:doctor.php?msg=$msg");
?>

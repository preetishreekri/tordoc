<?php
include_once("function.php");
$clinic=htmlentities($_POST['clinic_name'],ENT_QUOTES);
$building=htmlentities($_POST['building'],ENT_QUOTES);
$street=htmlentities($_POST['street'],ENT_QUOTES);
$landmark=htmlentities($_POST['landmark'],ENT_QUOTES);
$area=htmlentities($_POST['area'],ENT_QUOTES);
$pincode=htmlentities($_POST['pincode'],ENT_QUOTES);
$city=htmlentities($_POST['city'],ENT_QUOTES);
$state=htmlentities($_POST['state'],ENT_QUOTES);
$country=htmlentities($_POST['country'],ENT_QUOTES);
$name=htmlentities($_POST['name'],ENT_QUOTES);
$lat=htmlentities($_REQUEST['lat']);
$lng=htmlentities($_REQUEST['lng']);


$image=$_FILES['picture']['name'];
$ext=end(explode('.',$image));

$timeval=time();
$image=$timeval.'.'.$ext;

$ext1=end(explode(".", $_FILES["picture"]["name"]));
	if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif")

                                               {
                                                $folder="upload/";

                                                $filename = $folder . $image ;
												
                                               
                                                $copied = copy($_FILES['picture']['tmp_name'], $filename);
												
												}


if($clinic!="")
{
$sql=mysql_query("select * from `location` where `clinic_name`='$clinic' and `building`='$building' and `street`='$street' and `landmark`='$landmark' and `area`='$area' and `pincode`='$pincode' and `city`='$city' and `state`='$state' and `country`='$country' and `person_name`='$name' and `latitude`='$lat' and `longitude`='$lng'");
$num=mysql_num_rows($sql);
if($num==0){
    
    
mysql_query("insert into `location` set `clinic_name`='$clinic',`building`='$building',`street`='$street',`landmark`='$landmark',`area`='$area',`pincode`='$pincode',`city`='$city',`state`='$state',`country`='$country',`person_name`='$name',`latitude`='$lat',`longitude`='$lng',`image`='$filename'");
$msg="sucessfully inserted";
}
else
{
$msg="This is already exist";
}
}
header("location:addlocation.php?msg=$msg");
?>
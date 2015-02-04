<?php
include_once("../function.php");
$id=htmlentities($_POST['hidden_id'],ENT_QUOTES);
$oldimage=$_POST['oldimage'];
$newimage=$_FILES['imgg']['name'];
if($newimage=='')
{
$res=mysql_query("update `image` set `image`='$oldimage' where `slno`='$id'");
 }
else
{
$ext1=end(explode(".", $_FILES["imgg"]["name"]));

if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="JPG")

         {
                                    $folder="../upload/";

                                                $filename = $folder . $newimage;
                                               
                                                $copied = copy($_FILES['imgg']['tmp_name'], $filename);

		}
		mysql_query("update `image` set `image`='$filename' where `slno`='$id'");
}
$msg="successfully updated";
header("location:addimage.php?msg=$msg");
?>

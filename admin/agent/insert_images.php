<?php
include_once("../function.php");
$fid=$_POST['hidden'];
$newest =$_FILES['img']['name']; 
foreach($newest as $i=>$i1) 
{
$ext1=end(explode(".", $i1)); 
 if($ext1=="jpg" || $ext1=="jpeg" || $ext1=="png" || $ext1=="gif" || $ext1=="JPG" || $ext1=="JPEG") 
		    { 
			
                         $folder="../upload/"; 
                         $newestimage = $folder.$i1; 
                        $img=$_FILES['img']['tmp_name'][$i]; 
                        $copied = copy($img, $newestimage); 
				
			 
            }
			
					 mysql_query("insert into `image` set `functionalityname_id`='$fid',`image`='$newestimage'");
					 echo "insert into `image` set `functionalityname_id`='$fid',`image`='$newestimage'";
					
}
$msg="successfully saved";
header("location:addimage.php?msg=$msg");
?>
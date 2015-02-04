<?php
include_once("../function.php");
if(!isset($_SESSION['agentid'])){
header("location:../index.php");
}
else{
$imageid=$_GET['id'];
$sqlimage=mysql_query("select * from `image` where `slno`='$imageid'");
$resimage=mysql_fetch_array($sqlimage);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="../css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<!--------------top bar -------->
 <div id="top_bar">
 		<div id="top_box">
				<h2 style="margin-top:0px; padding-top:8px; font-family:Arial, Helvetica, sans-serif; color:#f5f5f5;">Admin Panel</h2>
		</div>
 </div>
 <!--------------top bar end-------->
 
 <!--------------content bar-------->
 <div id="main_bar">
 		<div id="main_box">
				<div id="left_box">
						<?php include_once("leftmenu.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> /
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Edit Image
								</div>
								<div id="content2" style="min-height:350px;">
								<form name="f" method="post" action="updateimage.php"  enctype="multipart/form-data">
											<table class="table" style="height:100px;">
												<tr>
												<input type="hidden" name="hidden_id" value="<?php echo $resimage['slno'];?>"/>
												<td>Old Image</td>
												<td>
												 <img src="<?php echo $resimage['image']; ?>" width="100" height="100" />
												 <input type="hidden" name="oldimage" value="<?php echo $resimage['image']; ?>"/>
												</td>	
												</tr>
												<tr>
												<td>New Image</td>
												<td><input type="file" name="imgg"></td>
												</tr>
												<tr> 
												<td>&nbsp;</td> 
												<td><input type="submit" name="submit" value="update" class="button" ></td> 
												</tr>
											</table>  
								</form>
								</div>
						</div>
				</div>
		</div>
 </div>
  <!--------------content bar end-------->

<!--------------footer---------> 
 <div id="footer-bar">
 		<div id="footer">
			&copy;Copy Right All Rights Reserved 2014	
		</div>
 </div>
  <!--------------footer end---------> 
  </body>
  </html>
  <?php
  }
  ?>
<?php
include_once("function.php");
if(!isset($_SESSION['adminid'])){
header("location:index.php");
}
else{
$id=$_GET['id'];
$sqlspecial=mysql_query("select * from `specification` where `slno`='$id'");
$resspecial=mysql_fetch_array($sqlspecial);
?>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
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
				<?php
				include_once("leftbar.php");
				?>
				<div id="right_box" >
						<div class="headline">
								<a href="">Dashboard </a> /
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Edit Speciality
								</div>
								<div id="content2" style="min-height:350px;">
								<form name="f" method="post" action="update_speciality.php"  enctype="multipart/form-data">
											<table class="table" style="height:100px;">
												<tr>
												<input type="hidden" name="hidden_id" value="<?php echo $resspecial['slno'];?>"/>
												<td>Speciality</td>
                                                <td><input type="text" name="sname" value="<?php echo $resspecial['name'];?>" class="form"></td>
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
  <?php
  }
  ?>
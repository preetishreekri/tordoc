<?php
include_once("../function.php");
if(!isset($_SESSION['agentid'])){
header("location:../index.php");
}
else{
$id=$_GET['id'];
$sqlcustomer=mysql_query("select * from `customer` where `slno`='$id'");
$rescustomer=mysql_fetch_array($sqlcustomer);
	
?>
<head>
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
				<div id="right_box" >
						<div class="headline">
								<a href="">Dashboard </a> /
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Edit Customer Details
								</div>
								<div id="content2" style="min-height:350px;">
								<form name="f" method="post" action="update_customer.php"  enctype="multipart/form-data">
											<table class="table" style="height:100px;">
												<tr>
												<input type="hidden" name="hidden_id" value="<?php echo $rescustomer['slno'];?>"/>
												<td>Name</td>
                                                <td><input type="text" name="dname" value="<?php echo $rescustomer['name'];?>" readonly="true" class="form"></td>
												</tr>
                                                <tr>
                                                                                <td>Email</td>
                                                                                <td><input type="email" name="email" id="email" value="<?php echo $rescustomer['email'];?>" class="form"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>password</td>
                                                                                <td><input type="text" name="pass" id="pass" value="<?php echo $rescustomer['password'];?>" class="form"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>phone</td>
                                                                                <td><input type="text" name="phone" id="phone" value="<?php echo $rescustomer['contact'];?>" class="form"></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Address</td>
																				<td><textarea name="address" id="address" class="form"><?php echo $rescustomer['address'];?></textarea></td>
                                                                           <!-- </tr>
																			<tr>
                                                                                <td>Fee</td>
                                                                                <td><input type="text" name="fee" id="fee" value="<?php //echo $rescustomer['fee'];?>" class="form"></td>
                                                                            </tr>-->
												
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
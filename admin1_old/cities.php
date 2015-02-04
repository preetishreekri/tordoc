<?php
include_once('function.php');
if(!$_SESSION['adminid'])
{
header("location:index.php");
}
else{ ?>
<html>
    <head>
			<title>Admin Panel</title>
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="css/style.css" rel="stylesheet" type="text/css" />
                        <link href="style.css" rel="stylesheet" type="text/css" />
<!--autocomplete start-->
<link rel="stylesheet" href="js/jquery-ui.css">
<script src="js/jquery-ui.js"></script>	
 <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="delete_city.php?id1="+vals;
			}
		}
</script>
<script type="text/javascript">
 function validateAlpha(){
    var textInput = document.getElementById("city").value;
    textInput = textInput.replace(/[^A-Za-z-" "]/g, "");
    document.getElementById("city").value = textInput;
}
</script>
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
						<?php include_once("leftbar.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add city
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="city_action.php" method="post" enctype="multipart/form-data">
									<table class="table" style="line-height:3.1;">
									    <tr>
										<td>Name of city</td>
										<td><input type="text" name="city" value="" id="city" class="form" oninput="validateAlpha();"></td>
									    </tr>
									    <tr>
										<td>&nbsp;</td>
										<td><input type="submit" name="submit" value="insert" class="button"></td>
									    </tr>
									</table>
                                                                    </form>
											<table class="table1" cellpadding="5">
												<tr style="background:url(image/thbg.png);">
													<th>Name of city</th>
													<th colspan="2">Action</th>
												</tr>
												<?php
													
													$sqlcity=mysql_query("select * from `city`");
													while($row=mysql_fetch_array($sqlcity))
													{
												?>
												<tr>
													<td><?php echo $row['cityname'];?></td>
													<td><a href="edit_city.php?id=<?php echo $row['slno'];?>"><img src="image/edit.png"></a></td>
													<td onClick="delete_data(<?php echo $row['slno']; ?>)"><img src="image/delete.png" ></td>
												</tr>
												
													
												
												<?php
													}
												?>
												</tr>
											</table>
								</div>
						</div>
				</div>
		</div>
 </div>
  <!--------------content bar end-------->

		 
		 
			
       <!--------------footer---------> 
 <div id="footer-bar">
 		<div id="footer">
				<?php include_once('footermenu.php');?>
		</div>
 </div>
  <!--------------footer end--------->
    </body>
</html><?php }?>
<?php
include_once('../function.php');
$uidval=$_GET['uidval'];
if(!$_SESSION['agentid'])
{
header("location:../index.php");
}
else{
?>
<html>
    <head>
			<title>Admin Panel</title>
			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="../css/style.css" rel="stylesheet" type="text/css" />

<script>
    $(function(){
	    $('#add1').click(function () {
        $('#tbb').append('<tr><td>Specialize Name</td><td colspan="2"><input type="text" name="spec[]" class="form"/></td></tr>');
		}); 
	   });
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
						<?php include_once("leftmenu.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Specialize
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:#5FBE5F; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="insert_specialize.php" method="post" enctype="multipart/form-data">
									<table class="table" style="line-height:3.1;" >
										<tr>
										<td>Specialize Name</td>
										<td colspan="2">
										<input type="text" name="spec[]" class="form"/>
										<input type="hidden" name="hd_uid" value="<?php echo $uidval;?>"></td>
										</tr>
										<tbody id="tbb"></tbody>
									    <tr> 
										<td><input type="button" name="button" value="addnew" class="button" id="add1"/></td> 
										<td>
										<input type="submit" name="submit" class="button" value="Submit">
										</td> 
										<td><span style="text-decoration:underline;"><a href="addeducation.php?uidval=<?php echo $uidval;?>">Skip</span></a></td>
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
				<?php include_once('footermenu.php');?>
		</div>
 </div>
  <!--------------footer end--------->
    </body>
</html>
<?php
}
?>
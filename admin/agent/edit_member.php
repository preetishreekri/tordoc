<?php
include_once("../function.php");
if(!isset($_SESSION['agentid'])){
header("location:../index.php");
}
else{
$id=$_GET['slno'];
$uid=$_GET['uniqueid'];	
?>
<head>
<title>Admin Panel</title>
			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="../css/style.css" rel="stylesheet" type="text/css" />

<script>
    $(function(){
	var i=0;
	    $('#add1').click(function () {
		i++;
        $('#tbb').append('<tr id='+i+'><td>Memberships</td><td colspan="2"><input type="text" name="member[]" class="form"/></td><td onClick="delete_txtbox('+i+')"><img src="image/delete.png" width="80"></td></tr>');
		});
	    
	   });
   
</script>	
 <script type="text/javascript">
		function delete_data(vals,unid,doctid){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="delete_member.php?id1="+vals+'&uniqueid='+unid+'&docid='+doctid;
			}
		}
</script>
 <script type="text/javascript">
		function delete_txtbox(ival){
			var con=confirm("Do you want to delete?");
			if(con){
			$('#'+ival).remove();
			}
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
						<?php include_once("leftmenu1.php"); ?>
				</div>
				<div id="right_box" >
						<div class="headline">
								<a href="">Dashboard </a> /
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Edit Memberships Details
								</div>
								<div id="content2" style="min-height:350px;">
								<form name="f" method="post" action="update_member.php"  enctype="multipart/form-data">
											<table class="table" style="height:100px;">
											<tr>
											<td>&nbsp;</td>
											<td>
											<input type="hidden" name="hduid" value="<?php echo $_GET['uniqueid'];?>" id="hduid"/>
											<input type="hidden" name="hdocid" value="<?php echo $id;?>" id="hdocid"/>
											</td>
											</tr>
											<?php
												$uid=$_GET['uniqueid'];	
												$sqlmembership=mysql_query("select * from `membership` where `uid`='$uid'");
												while($remembership=mysql_fetch_array($sqlmembership)){
											?>
												<tr>
												<td>Memberships</td>
												<td colspan="2">
												<input type="text" name="member[]" class="form" value="<?php echo $remembership['member'];?>">
												<input type="hidden" name="hd_slno[]" value="<?php echo $remembership['slno'];?>">
												</td>
												<td onClick="delete_data(<?php echo $remembership['slno']; ?>,'<?php echo $uid;?>',<?php echo $id;?>)"><img src="image/delete.png" width="80"></td>
												</tr>
											<?php
												}
											?>
												<tbody id="tbb"></tbody>
												<tr> 
													
													<td><input type="button" name="button" value="addnew" class="button" id="add1"/></td> 
													<td colspan="2"><input type="submit" name="submit" class="button" value="update"></td>												
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
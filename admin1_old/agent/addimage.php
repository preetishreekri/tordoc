<?php
include_once('../function.php');
if(!$_SESSION['agentid'])
{
header("location:../index.php");
}
else{
$getdrugdet=mysql_query("select * from `details`")or die(mysql_error());
while($resdrugdet=mysql_fetch_array($getdrugdet))
{
$a=html_entity_decode($resdrugdet['functionality_name'],ENT_QUOTES);
$getemail[] = array(
'value'  => $a,
'idval' => $resdrugdet['slno']
);
}
?>
<html>
    <head>
			<title>Admin Panel</title>
			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="../css/style.css" rel="stylesheet" type="text/css" />
<!--autocomplete start-->
<link rel="stylesheet" href="../css/jquery-ui.css">
<script src="../js/jquery-ui.js"></script>
<script>
    $(function(){
        var availabledrugs=<?= json_encode($getemail); ?>;
        $('#funcname').autocomplete({
        source: availabledrugs,
        select: function( event, ui )
		{
        console.log(ui);
        var valshow=ui.item.value;
                 $('#funcname').val(valshow);
                 $('#hidden').val(ui.item.idval);
        return false;
		}
        });
});
</script>	
<!--autocomplete end-->
<script>
    $(function(){
	    $('#add1').click(function () {
		 //if ($('#tbb').find('input:file').length < 7) {
        $('#tbb').append('<tr><td>Smallimage</td><td><input type="file" name="img[]"/></td></tr>');
    //}
		});
	    
	   });
   
</script>	
 <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="deleteimage.php?id1="+vals;
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
						<?php include_once("leftmenu.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Small Images
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:#5FBE5F; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="insert_images.php" method="post" enctype="multipart/form-data">
									<table class="table" style="line-height:3.1;" >
									    <tr>
										<td>Functionality Name</td>
										<td>
										<input type="text" name="funcname" class="form2" id="funcname" required>
										<input type="hidden" id="hidden" name="hidden" class="form" >
										</td>
									    </tr>
										<tr>
										<td>Image</td>
										<td><input type="file" name="img[]"/></td>
										</tr>
										<tbody id="tbb"></tbody>
										<tr>
										<td></td>
										<td><span style="font-size:13px; color:red;">Notice:(jpg,jpeg,png,gif are available)</span></td>
										</tr>
									    <tr> 
										<td><input type="button" name="button" value="addimage" class="button" id="add1"/></td> 
										<td><input type="submit" name="submit" class="button" value="Submit"></td> 
									    </tr>
									</table>
								    </form>
									<table class="table1" cellpadding="5" style="margin-top:20px;">
											<tr style="background:url(image/thbg.png);">
											<th>Functionality Name</th>
											<th>Image</th>
											<th colspan="2">Action</th>
											</tr>
											<?php
											$sqlimage=mysql_query("select * from `image`"); 
											while($resimage=mysql_fetch_array($sqlimage)){
											$sqlfuncname=mysql_query("select `functionality_name` from `details` where `slno`='$resimage[functionalityname_id]'");
											$resfuncname=mysql_fetch_array($sqlfuncname);
											?>
											<tr>
											<td><?php echo $resfuncname['functionality_name'];?></td>
											<td><img src="<?php echo $resimage['image']; ?>" width="50"/></td>
											<td><a href="editimage.php?id=<?php echo $resimage['slno'];?>"><img src="image/edit.png"></a></td>
											<td onClick="delete_data(<?php echo $resimage['slno']; ?>)"><img src="image/delete.png" ></td>
											</tr>
																						
											<?php  } ?>
											
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
</html>
<?php
}
?>
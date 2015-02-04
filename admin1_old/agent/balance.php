<?php
include_once('../function.php');
if(!$_SESSION['agentid'])
{
header("location:../index.php");
}
else{ 
//echo $_SESSION['agentid'];
$sqlagentslno=mysql_query("select * from `login` where `username`='$_SESSION[agentid]'");
$resagentslno=mysql_fetch_array($sqlagentslno);
$getdrugdets=mysql_query("select * from `customer` where `agent_id`='$resagentslno[slno]'")or die(mysql_error());
    while($resdrugdets=mysql_fetch_array($getdrugdets))
    {
	$getemail[] = array(
	'value'  => $resdrugdets['name'],
	'idval' => $resdrugdets['slno']
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
<script src="../js/jquery.min.js"></script>
 <!--autocomplete start-->
<link rel="stylesheet" href="../css/jquery-ui.css">
<!--<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>-->
<script src="../js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?= json_encode($getemail); ?>;
        $('.custm').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
  
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('.custm').val(valshow);
		$('#hd_slno').val(ui.item.idval);
        return false;
		}
        });
});
</script>
 <!--autocomplete end-->
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
						<?php 
						include_once("leftmenu.php"); 
						?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Balance
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="update_balance.php" method="post"  align="center">
                                                                       <table class="table" style="line-height:3.1;">
									    
                                                                            <tr>
                                                                                <td>Name</td>
                                                                                <td>
																				<input type="text" name="dname" id="dname" class="form custm">
																				<input type="hidden" name="hd_slno" id="hd_slno"/>
																				<input type="hidden" name="hd_agent" value="<?php echo $resagentslno['slno'];?>"/>
																				</td>
                                                                            </tr>
																			<tr>
                                                                                <td>Fee</td>
                                                                                <td><input type="text" name="fee" id="fee" class="form" ></td>
                                                                            </tr>
																			<tr>
                                                                                <td></td>
                                                                                <td><input type="submit" name="submit" value="submit" class="button"></td>
                                                                            </tr>
                                                                       </table>
                                                                             
									</form>
																	
									<table class="table1" cellpadding="5" style="margin-top:20px;">
											<tr style="background:url(image/thbg.png);">
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Address</th>
											<th>Fee</th>
											</tr>
											<?php
											$sqlcustomer=mysql_query("select * from `customer` where `agent_id`='$resagentslno[slno]' and `fee`!=''"); 
											while($rescustomer=mysql_fetch_array($sqlcustomer)){
											?>
											<tr>
											<td><?php echo $rescustomer['name'];?></td>
											<td><?php echo $rescustomer['email'];?></td>
											<td><?php echo $rescustomer['contact'];?></td>
											<td><?php echo $rescustomer['address'];?></td>
											<td><?php echo $rescustomer['fee'];?></td>
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
</html><?php }?>
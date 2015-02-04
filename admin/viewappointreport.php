<?php
include_once('function.php');
if(!$_SESSION['adminid'])
{
header("location:index.php");
}
else{
    $adminid=$_SESSION['id'];
?>
<html>
    <head>
			<title>Admin Panel</title>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="css/style.css" rel="stylesheet" type="text/css" />
			<!--menu start-->
<link href="css1/dcaccordion.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type='text/javascript' src='js/jquery.cookie.js'></script>
<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='js/jquery.dcjqaccordion.2.7.min.js'></script>
<script type="text/javascript">
$(document).ready(function($){
					$('#accordion-5').dcAccordion({
						eventType: 'click',
						autoClose: false,
						saveState: true,
						disableLink: true,
						menuClose: true,
						speed: 'fast',
						showCount: true
					});
					
});
</script>
<link href="css1/skins/blue.css" rel="stylesheet" type="text/css" />
<link href="css1/skins/graphite.css" rel="stylesheet" type="text/css" />
<link href="css1/skins/grey.css" rel="stylesheet" type="text/css" />
<!--menu end-->
<!--datepicker start--->
<link rel="stylesheet" type="text/css" media="all" href="agent/jsDatePick_ltr.min.css" />
<script type="text/javascript" src="agent/jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
			
		});
		new JsDatePick({
			useMode:2,
			target:"inputField1",
			dateFormat:"%Y-%m-%d"
			
		});
	};
</script>
<!--datepicker end--->
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
										View Appointment Report
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
<form name="f" method="post">
<table class="table" style="height:100px;">
<tr>
<td>Date:</td>
<td>From</td>
<td><input type="text" name="rpt" size="12" id="inputField" class="form"/></td>
<td>To</td>
<td><input type="text" name="rpt1" size="12" id="inputField1" class="form"/></td>
</tr>
<tr>
<td>&nbsp;</td> 
<td>&nbsp;</td> 
<td>
<input type="submit" name="submit" value="submit" class="button"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['rpt']) && isset($_POST['rpt1'])){
?>
<div style="width:auto; height:auto; float:left; margin-left:10px; word-spacing:5px;">
<?php
$from=$_POST['rpt'];
$to=$_POST['rpt1'];
$sql=mysql_query("select * from `appointment` where date between '$_POST[rpt]' and '$_POST[rpt1]' ");
$res=mysql_fetch_array($sql);
echo "<span style='font-family:arial; font-size:16px; color:#51A351;'>Report From"."  ".$from." To ".$to."</span><span style='font-weight:bold;color:#51A351;margin-left:5px;'>:</span>";
?>
</div>
<?php
}
?>
			<table class="table1" cellpadding="5" >
										<tr style="background:url(image/thbg.png);">
											<th>Date</th>
											<th>PatientName</th>
											<th>PatientReason</th>
											<th>PatientEmail</th>
											<th>Doctor Name</th>
											<th>Occupation</th>	
										</tr>
			</table>
								<div id="content2" style="min-height:240px; width:765px; height:240px; overflow:auto; overflow-x:hidden; margin-left:0px; background:none; padding-top:0px; padding-bottom:0px;">
								
									<div style="width:760px; height:350px; float:left;">
									<table class="table1" cellpadding="5" >
										<?php
										if(isset($_POST['rpt'])=="" && isset($_POST['rpt1'])==""){
											    $sqlappoint=mysql_query("select * from `appointment` order by `date`");
											    } 
											    else{
											    $sqlappoint=mysql_query("select * from `appointment` where date between '$_POST[rpt]' and '$_POST[rpt1]'  order by `date`");
											    $no=mysql_num_rows($sqlappoint);
											    if($no>0){
											    }
											    else{
											    echo "<span style='font-family:arial;margin-left:20px;color:red;'>"."You have no records"."</span>";
											    }
											    }
										
											while($resappoint=mysql_fetch_array($sqlappoint))
												{
												$sqldoct=mysql_query("select * from `details` where `uniqueid`='$resappoint[doctor_uid]'");
												while($resdoct=mysql_fetch_array($sqldoct)){
												$sqlspecf=mysql_query("select * from `specification` where `slno`='$resdoct[speciality]'");
												while($resspecf=mysql_fetch_array($sqlspecf)){
										?>
										<tr>
										    <td style="width:13%;"><?php  echo $resappoint['date'];?></td>
											<td style="width:15%;"><?php  echo $resappoint['patient_name'];?></td>
											<td style="width:15%;"><?php  echo $resappoint['patient_reson'];?></td>
											<td><?php  echo $resappoint['patient_email'];?></td>
											<td style="width:15%;"><?php  echo $resdoct['doctor_name'];?></td>	
											<td><?php  echo $resspecf['name'];?></td>
										</tr>
										<?php
												}
												}
												}
										?>
			</table>
			</div>
			</div>
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
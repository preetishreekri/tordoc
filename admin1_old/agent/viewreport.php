<?php
include_once('../function.php');
if(!$_SESSION['agentid'])
{
header("location:../index.php");
}
else{
    $agentid=$_SESSION['id'];
	//echo $agentid;
?>
<html>
    <head>
			<title>Admin Panel</title>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="../css/style.css" rel="stylesheet" type="text/css" />
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
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
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
						<?php include_once("leftmenu.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										View Report
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
$sql=mysql_query("select * from `feedback` where date between '$_POST[rpt]' and '$_POST[rpt1]' ");
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
											<th>Name</th>
											<th>Area</th>
											<th>Email</th>
											<th>Phoneno</th>
											<th>Occupation</th>	
											<th>action</th>	
										</tr>
										<?php
										if($agentid=="1")
										{ if(isset($_POST['rpt'])=="" && isset($_POST['rpt1'])==""){
											    $sqlfeedback=mysql_query("select * from `feedback` order by `date` ");
											    }
											    
											    else{
											    $sqlfeedback=mysql_query("select * from `feedback` where date between '$_POST[rpt]' and '$_POST[rpt1]' order by `date`");
											    $no=mysql_num_rows($sqlfeedback);
											    if($no>0){
											    }
											    else{
											    echo "<span style='font-family:arial;margin-left:20px;color:red;'>"."You have no records"."</span>";
											    }
											    } 
										    }
											else
											{
										if(isset($_POST['rpt'])=="" && isset($_POST['rpt1'])==""){
											    $sqlfeedback=mysql_query("select * from `feedback` where `type_id`='$agentid'  order by `date`");
											    }
											    else{
											    $sqlfeedback=mysql_query("select * from `feedback` where date between '$_POST[rpt]' and '$_POST[rpt1]' and `type_id`='$agentid' order by `date`");
											    $no=mysql_num_rows($sqlfeedback);
											    if($no>0){
											    }
											    else{
											    echo "<span style='font-family:arial;margin-left:20px;color:red;'>"."You have no records"."</span>";
											    }
											    }
											}
										
											while($resfeedback=mysql_fetch_array($sqlfeedback))
												{
										?>
										<tr>
										    <td><?php  echo $resfeedback['date'];?></td>
											<td><?php  echo $resfeedback['name'];?></td>
											<td><?php  echo $resfeedback['area'];?></td>
											<td><?php  echo $resfeedback['email'];?></td>
											<td><?php  echo $resfeedback['contact'];?></td>	
											<td><?php  echo $resfeedback['type'];?></td>
											<td><a href="view_feedback.php?slno=<?php echo $resfeedback['slno'];?>"><input type="button" name="comment" value="view comment" class="button" style="height:25px; font-size:11px; padding:0px;"/></a></td>	
										</tr>
										<?php
												}
										?>
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
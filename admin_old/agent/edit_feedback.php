<?php
include_once("../function.php");
if(!isset($_SESSION['agentid'])){
header("location:../index.php");
}
else{
$id=$_GET['id'];
$sqlfeedback=mysql_query("select * from `feedback` where `slno`='$id'");
$resfeedback=mysql_fetch_array($sqlfeedback);
?>
<head>
<link href="../css/style.css" rel="stylesheet" type="text/css" />
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
	};
</script>
<!--datepicker end--->

<script>
function validate()
{
	var area=document.getElementById('area').value;
	var name=document.getElementById('name').value;
	var emailid=document.getElementById('email').value;
	var contactno=document.getElementById('contact').value;
	var da=document.getElementById('inputField').value;
	var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(area=="")
	{
	alert("Enter area");
	return false;
	}
	if(name=="")
	{
	alert("Enter name");
	return false;
	}
	if(emailid=="")
	{
	alert("Enter emailid");
	return false;
	}
	if(!emailid.match(format))
	{
	alert("You have entered an wrong email address!"); 
	return false;
	}
	if(contactno=="")
	{
	alert("Enter contact number");
	return false;
	}
	if(contactno.length<10){

		alert("Please Enter 10 digit phonenumber");

		return false;

	}
	if(da==""){
	alert("enter date");
	return false;
	}
	if(da!="" && da<ldate)
	{
	
	$("#inputField").val("");
	alert("Enter validate date");

		return false;
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
				<?php
				include_once("leftmenu.php");
				?>
			</div>	
				<div id="right_box" >
						<div class="headline">
								<a href="">Dashboard </a> /
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Edit Feedback
								</div>
								<div id="content2" style="min-height:350px;">
								<form name="f" method="post" action="update_feedback.php" onsubmit="return validate();"  enctype="multipart/form-data">
									<table class="table" style="line-height:3.1;">
									    <tr>
										<td>Type of customer</td>
										<td>
										<input type="hidden" name="hidden_id" value="<?php echo $resfeedback['slno'];?>"/>
										<select class="form" name="type">
										<option value="doctor" <?php if($resfeedback['type']=="doctor"){echo "selected='selected'";}?>>Doctor</option>
										<option value="reseller" <?php if($resfeedback['type']=="reseller"){echo "selected='selected'";}?>>Reseller</option>
										</select>
										</td>
									    </tr>
										<tr>
										<td>Visited Area</td>
										<td><input type="text" name="area" id="area" class="form" value="<?php echo $resfeedback['area']?>"/></td>
										</tr>
										<tr>
										<td>Name</td>
										<td><input type="text" name="name" id="name" class="form" value="<?php echo $resfeedback['name']?>"/></td>
										</tr>
										<tr>
										<td>Emailid</td>
										<td><input type="text" name="email" class="form" id="email" value="<?php echo $resfeedback['email']?>"/></td>
										</tr>
										<tr>
										<td>Contactno</td>
										<td><input type="text" name="contact" class="form" id="contact" onkeyup="return numberonly();" value="<?php echo $resfeedback['contact']?>"/></td>
										</tr>
										<tr>
										<td>Comments</td>
										<td>
										<textarea name="comment" class="form" style="height:70px;"><?php echo $resfeedback['comment']?></textarea>
										</td>
										</tr>
										<tr>
										<td>Date</td>
										<td><input type="text" name="rpt" size="12" id="inputField" class="form" value="<?php echo $resfeedback['date']?>"/></td>
										</tr>
									    <tr>
										<td>&nbsp;</td>
										<td><input type="submit" name="submit" value="Update" class="button"></td>
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
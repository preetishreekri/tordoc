<?php
include_once('../function.php');
if(!$_SESSION['agentid'])
{
header("location:../index.php");
}
else{
     $agentid=$_SESSION['id'];
     $d=date('Y-m-d');
    $date=date('Y-m-d', strtotime($d. ' -2days'));
    //echo date('l jS F (Y-m-d)', strtotime('-3 days'));
    
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
	};
</script>
<!--datepicker end--->
 <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="delete_feedback.php?id1="+vals;
			}
		}
</script>
<script>
function validate()
{
/*var emailid=document.getElementById('email').value;
var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
var contactno=document.getElementById('contact').value;
var da=document.getElementById('inputField').value;
var ldate=document.getElementById('hdate').value;
if(isset(emailid) && !emailid.match(format))

	{

	alert("You have entered an wrong email address!"); 
	return false;
    

	}
	if(contactno.length<10){

		alert("Please Enter 10 digit phonenumber");

		return false;

	}
	if(contactno.length>10){

		alert("Please Enter 10 digit phonenumber");

		return false;

	}
	if (da<ldate)
	{
	$("#inputField").val("");
	alert("Enter validate date");

		return false;
	}*/
	var e = document.getElementById("tp");
        var strtype = e.options[e.selectedIndex].value;
	var area=document.getElementById('area').value;
	var name=document.getElementById('name').value;
	var emailid=document.getElementById('email').value;
	var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
	var contactno=document.getElementById('contact').value;
	var da=document.getElementById('inputField').value;
	var ldate=document.getElementById('hdate').value;
	if(strtype==0)
	{
	alert("select type");
	return false;
	}
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
	if(contactno.length>10){

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
 <script  type='text/javascript'>

function numberonly()

{

	var contactt=document.getElementById('contact').value;

	if(isNaN(contactt)|| contactt.indexOf(" ")!=-1)

	{

              			alert("Enter numeric value");

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
						<?php include_once("leftmenu.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Feedback
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="insert_feedback.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
									<table class="table" style="line-height:3.1;">
									    <tr>
										<td>Type of customer</td>
										<td>
										<select class="form" name="type" id="tp">
										<option value="0">select</option>
										<option value="doctor">Doctor</option>
										<option value="reseller">Reseller</option>
										</select>
										</td>
									    </tr>
										<tr>
										<td>Visited Area</td>
										<td><input type="text" name="area" class="form" id="area"/></td>
										</tr>
										<tr>
										<td>Name</td>
										<td><input type="text" name="name" class="form" id="name"/></td>
										</tr>
										<tr>
										<td>Emailid</td>
										<td><input type="text" name="email" class="form" id="email" /></td>
										</tr>
										<tr>
										<td>Contactno</td>
										<td><input type="text" name="contact" class="form" id="contact" onkeyup="return numberonly();"/></td>
										</tr>
										<tr>
										<td>Comments</td>
										<td>
										<textarea name="comment" class="form" style="height:70px;"></textarea>
										</td>
										</tr>
										<tr>
										<td>Date</td>
										<td><input type="text" name="rpt" size="12" id="inputField" class="form" /></td>
										<input type="hidden" name="hdate" id="hdate" value="<?php echo $date;?>"/>
										</tr>
									    <tr>
										<td>&nbsp;</td>
										<td><input type="submit" name="submit" value="Add" id="submit" class="button"></td>
									    </tr>
									</table>
                                                                    </form>
											<table class="table1" cellpadding="5">
												<tr style="background:url(image/thbg.png);">
													<th>Type</th>
													<th>Area</th>
													<th>Name</th>
													<th>Email</th>
													<th>Contact</th>
													<th>Date</th>
													<th colspan="2">Action</th>
												</tr>
												<?php
													
													$sql=mysql_query("select * from `feedback` where `type_id`='$agentid'");
													while($row=mysql_fetch_array($sql))
													{
												?>
												<tr>
													<td><?php echo $row['type'];?></td>
													<td><?php echo $row['area'];?></td>
													<td><?php echo $row['name'];?></td>
													<td><?php echo $row['email'];?></td>
													<td><?php echo $row['contact'];?></td>
													<td><?php echo $row['date'];?></td>
													<td><a href="edit_feedback.php?id=<?php echo $row['slno'];?>"><img src="image/edit.png"></a></td>
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
</html>
<?php 
}
?>
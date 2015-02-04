<?php
include_once('admin/function.php');
$uid=$_GET['uid'];
$time=$_GET['time'];
$date=$_GET['date'];
$docid=$_GET['docid'];
$fee=$_GET['fee'];
$getdocdet=mysql_query("select * from `doctor_details` where `id`='$docid'");
$resdoccet=mysql_fetch_array($getdocdet);

 $img=$resdoccet['picture'];
$imgval=explode('../',$img);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <title>Social Networking Site</title>
        
        <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="responsiv.css" type="text/css" media="screen" />
        <style>
	    tr{
		height: 30px;
	    }
	</style>
	 <link type="text/css" rel="stylesheet" href="css/responsive-tabs.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
	<!------------------------------------menu---------------------------->	
		<link type="text/css" rel="stylesheet" href="css3/jquery.mmenu.css" />
		
		
		<script type="text/javascript" src="js/jquery-v1.7.1.js"></script>
		<script type="text/javascript" src="js/jquery-hover-effect.js"></script>
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
		<script type="text/javascript">
			$(function() {

				var pos 	= 'mm-top mm-right mm-bottom',
					zpos	= 'mm-front mm-next';

				var $html 	= $('html'),
					$menu	= $('nav#menu'),
					$both	= $html.add( $menu );

				$menu.mmenu();

				//	Add the position-classnames onChange
				$('input[name="pos"]').change(function() {
					$both.removeClass( pos ).addClass( 'mm-' + this.value );
				});
				$('input[name="zpos"]').change(function() {
					$both.removeClass( zpos ).addClass( 'mm-' + this.value );
				});
			});
		</script>
		<script>
		$(function(){
						  $( ".app" ).click(function() {
						  $( ".table_box" ).slideToggle( "slow", function() {
						  });
					});
					
					$( ".list1" ).click(function() {
						  $( ".list2" ).slideToggle( "slow", function() {
						  });
						  });
						  
						  $( ".list3" ).click(function() {
						  $( ".list4" ).slideToggle( "slow", function() {
						  });
						  });
				});
		</script>
<!---------------menu end-------------->
</head>	
<body>
<!--------------------menu----------->
<nav id="menu">
		<ul>
				<li><a href="index.htm">Home</a></li>
				<li><a href="doctorview.htm">Doctor View</a></li>
				<li><a href="appointment.htm">Appointment</a></li>
		</ul>
</nav>
<!--------------menu end------------>
<div id="topbar" style="background:#f8f8f8; border-bottom:1px solid #e5e5e5; padding-bottom:8px;">
		<div id="topbar_content">
				<div id="topbar_contentbox">
						<div class="mobile_menu">
								<a href="#menu"><img src="images/index.png"  /></a>	
						</div>
						<div id="logo">
								<img src="images/logo.png"  />
						</div>
						
						<div id="menu1" style="margin-top:20px;">
								<div id="menubar">
										<div class="menu2" style="border-right:none; float:right;">
											 <a href="#" style="padding:10px; font-size:13px;">What is this Service?</a>
										</div>
										
                				</div>
						</div>
				</div>
		</div>
</div>

<div id="content">
		<div id="content_bar">
				<div id="content_box">
						<div id="content_boxleft" style=" display:none;">
								<div class="list_head list1">
										Appointment
								</div>
								<div class="list_box list2">
										<ul>
												<li><input type="checkbox" name=""  />  Instant Booking</li>
										</ul>
								</div>
								<div class="list_head list3" style="margin-top:15px;">
										Location 
								</div>
								<div class="list_box list4">
										<ul>
												<li><input type="checkbox" name="" />  Chandra Sekhar Pur</li>
												<li><input type="checkbox" name=""  />  Nayapalli</li>
												<li><input type="checkbox" name=""  />  Airport</li>
												<li><input type="checkbox" name=""  />  Saheed Nagar</li>
												<li><input type="checkbox" name=""  />  Jaydev Vihar</li>
												<li><input type="checkbox" name=""  />  Bhubaneswar</li>
												<li><input type="checkbox" name=""  />  Jharapada</li>
												<li><input type="checkbox" name=""  />   Baramunda Colony</li>
												<li><input type="checkbox" name=""  />   Bapujee Nagar</li>
												<li><input type="checkbox" name=""  />   Kharavela Nagar</li>
										</ul>
								</div>
								<div class="list_head" style="margin-top:15px;">
										Availability 
								</div>
						</div>
						<div class="appointment">
						  <div id="rightcontent" style=" border-top:5px solid #244BB3; box-shadow:0px 0px 5px 0px #494949;">
										<div class="rightcontent_box">
												<div class="service_head appointment_date" style="background:url(images/date.png) no-repeat left;">
														On <span style="font-weight:bold; font-size:16px; color: #444;"><?php echo date('d')?> <?php echo date('M');?>, <?php echo date('Y');?></span>
												</div>
												<div class="service_head appointment_date2" style="background:url(images/time.png) no-repeat left;">
														<span style="font-weight:bold; font-size:12px; color: #444;">At <?php echo $time?></span>
												</div>
										</div>
										<div class="rightcontent_box">
												<div class="right_imgbox doctor_imgbox1">
														<img src="admin/<?php echo $imgval[1]?>"  />
												</div>
												<div class="right_textbox" >
														<h2 class="head1">
																Dr.<?php echo $resdoccet['name']?>
																<br />
																<span class="head2">MS - Orthopaedics, MBBS </span>
														</h2>
														<p class="text">
																  <?php echo $resdoccet['expr_year']?> years experience <?php echo $resdoccet['specialization'];?>
																 <br />
																 <br />
																 <?php echo $resdoccet['specialist']?>
														</p>
												</div>
										</div>
										
								</div>
						</div>
						<div class="appointment_table">
								<h1 class="head1" style="color: #444; font-size:27px;">Confirm Appointment</h1>
                                                                <form name="myform" action="appointment_action.php" method="post" onsubmit="return validate()" >
								<table style="width:100%;  font-family: 'OpenSansLight'; font-size:13px; color: #444;">
										<tr>
												<td>Patient/Visitor Name*</td>
										</tr>
										<tr>
												<td><input type="text" name="patient" value="" class="form" placeholder="First name"  /></td>
                                                                                                <input type="hidden" name="htime" value="<?php echo $time;?>" />
												<input type="hidden" name="hdate" value="<?php echo $date;?>" />
												<input type="hidden" name="huid" value="<?php echo $docid;?>" />
                                                                                                <input type="hidden" name="hfee" value="<?php  $extra=$fee*0.23; echo $total=$fee+$extra;?>" />
										</tr>
										<tr>
												<td>Appointment Reason</td>
										</tr>
										<tr>
												<td><input type="text" name="reson" value="" class="form" placeholder="Appointment Reason"  /></td>
										</tr>
										<tr>
												<td>We will send you an SMS and email with the appointment and practice details. </td>
										</tr>
										<tr>
												<td>Email*</td>
										</tr>
										<tr>
												<td><input type="text" name="email" value="" class="form" placeholder="Email"   /></td>
										</tr>
										<tr>
												<td>Mobile*</td>
										</tr>
										<tr>
												<td><input type="text" name="mobile" value="" class="form" placeholder="Mobile"  /><br />You will receive an SMS with a verification code on this number.</td>
										</tr>
										<tr>
												<td><input type="submit" name="submit" value="Submit" style="background:#2c5ec3; border:1px solid #092c74; color:#fff; padding-left:5px; padding-right:5px;"  /></td>
										</tr>
								</table>
                                                                </form>
						</div>
				</div>
		</div>
</div>


</body>
</html>

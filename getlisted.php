<?php
include_once('function.php');
$uid=$_GET['uid'];
$time=$_GET['time'];
$date=$_GET['date'];
?>
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
<body style="background:url(images/bg3.jpg) repeat-y center; background-size:100% auto;">
<!--------------------menu----------->
<nav id="menu">
		<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="doctorview.php">Doctor View</a></li>
				<li><a href="doctorview.php">Appointment</a></li>
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
						
						
				</div>
		</div>
</div>

<div id="content">
		<div id="content_bar">
				<div id="content_box">
						<div class="appointment_table" style="margin-left:0px;">
								<h1 class="head1" style="color: #444; font-size:27px;"></h1>
								<form name="myform" action="appointment_action.php" method="post" >
								<table class="table1">
										<tr>
												<td><input type="text" name="reson" value="" class="form" placeholder="Name"  /></td>
										</tr>
										
										<tr>
												<td><select class="form"><option>Select</option></select></td>
										</tr>
										
										<tr>
												<td><textarea class="form" style="height:60px;"></textarea></td>
										</tr>
										
										<tr>
												<td><input type="email" name="email" value="" class="form" placeholder="Mobile Number" required   /></td>
										</tr>
										
										<tr>
												<td><input type="text" name="mobile" value="" class="form" placeholder="Email" required /></td>
										</tr>
										<tr>
												<td><input type="submit" name="submit" value="Continue to Clinic Details" class="button2"/></td>
										</tr>
								</table>
								</form>
						</div>
						<div id="content_boxleft" style="width:500px; margin-left:20px;">
								<div class="list_head list1" style="background:none; width:100%;">
										<h1 class="head1" style="color: #444; font-size:30px; background:none;">Get Listed</h1>
										<p class="text" style="font-size:16px;">
												Thousands of patients are looking for doctors on Practo.
Let them find you
										</p>
										<div class="list_box1">
												<div class="list_box2">
														<p class="list_text">
														<img src="images/list1.png" >
														<br />
														<span class="list_bold">IT'S FREE FOR LIFE!</span>
														<br />
Let the world know about your clinic, your facilities, services and availability without spending a buck.
														</p>
												</div>
												<div class="list_box3">
														<p class="list_text">
														<img src="images/list2.png" >
														<br />
														<span class="list_bold">LET PATIENTS BOOK<br /> APPOINTMENTS 24X7</span>
														<br />
Your staff can cater to patients only during office hours, but on Practo patients can book appointments when they are free.
														</p>
												</div>
										</div>
										
										<div class="list_box1">
												<div class="list_box2">
														<p class="list_text">
														<img src="images/list3.png" >
														<br />
														<span class="list_bold">CONVERT CURIOUS VISITORS INTO LOYAL PATIENTS</span>
														<br />
Put up appointment booking widgets on your website and blog.
														</p>
												</div>
												<div class="list_box3">
														<p class="list_text">
														<img src="images/list4.png" >
														<br />
														<span class="list_bold">GET YOUR FACEBOOK FANS TO BOOK APPOINTMENTS</span>
														<br />
If they like you on Facebook, all they need is our facebook widget to book appointments with you.
														</p>
												</div>
										</div>
										
								</div>
						</div>
				</div>
		</div>
</div>


</body>
</html>

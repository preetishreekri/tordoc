<?php
include_once('function.php');
if($_GET['uid'])
{
 $uid=$_GET['uid'];

}

$getdrugdets=mysql_query("select * from `specification`")or die(mysql_error());
    while($resdrugdets=mysql_fetch_array($getdrugdets))
    {
	$getemail[] = array(
	'value'  => $resdrugdets['name'],
	'idval' => $resdrugdets['slno']
	);
    }
	$getcity=mysql_query("select * from `city`")or die(mysql_error());
    while($rescity=mysql_fetch_array($getcity))
    {
	$getemails[] = array(
	'value'  => $rescity['cityname'],
	'idval' => $rescity['slno']
	);
    }
	$getdetails=mysql_query("select * from `details`")or die(mysql_error());
    while($resdetails=mysql_fetch_array($getdetails))
    {
	$get[] = array(
	'value'  => $resdetails['doctor_name'],
	'idval' => $resdetails['slno']
	);
    }
	$getclinic=mysql_query("select * from `details`")or die(mysql_error());
    while($resclinic=mysql_fetch_array($getclinic))
    {
	$val=html_entity_decode($resclinic['functionality_name'],ENT_QUOTES);
	$getc[] = array(
	'value'  => $val,
	'idval' => $resclinic['slno']
	);
    }
		$currentt=time();
		$currentdate=date("Y-m-d");
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
	
	<script type="text/javascript" src="js/jquery-1.6.min.js"></script>
		<script type="text/javascript" src="js/jquery.reveal.js"></script>
	<!------------------------------------menu---------------------------->	
		<link type="text/css" rel="stylesheet" href="css3/jquery.mmenu.css" />
		<link rel="stylesheet" href="css/reveal.css">
		
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
<link rel="stylesheet" href="css/reveal.css">	
<script type="text/javascript" src="jquery-1.6.min.js"></script>
<script type="text/javascript" src="js/jquery.reveal.js"></script>
<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css" />
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?=json_encode($getemail);?>;
		console.log(availabledrugs);
        $('.spef_item').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		
		var valshow=ui.item.value;
        $('.spef_item').val(valshow);
		$('.spef_slno').val(ui.item.idval);
        return false;
		}
        });
});
</script>
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?=json_encode($getemails);?>;
		console.log(availabledrugs);
        $('.city_val').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		
		var valshow=ui.item.value;
        $('.city_val').val(valshow);
		$('.city_slno').val(ui.item.idval);
        return false;
		}
        });
});
</script>
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?=json_encode($get);?>;
		console.log(availabledrugs);
        $('.doctor_val').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		
		var valshow=ui.item.value;
        $('.doctor_val').val(valshow);
		$('.doctor_slno').val(ui.item.idval);
        return false;
		}
        });
});
</script>
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?=json_encode($getc);?>;
		console.log(availabledrugs);
        $('.func_val').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		
		var valshow=ui.item.value;
        $('.func_val').val(valshow);
		$('.func_slno').val(ui.item.idval);
        return false;
		}
        });
});
</script>
<!--autocomplete end-->
<script>
		$(function(){
		 $( "#desc" ).hide();
						  $("#more").click(function() 
						  {
						  $("#desc").slideDown();
						  $("#more").hide();
						  $("#shrink").show();
						  });
						  $("#shrink").click(function() 
						  {
						  $("#desc").slideUp();
						  $("#shrink").hide();
						   $("#more").show();
						  });
						  
					});	  
</script>
<style>
    .table_box table tr td a {
	color: #7FAC5A;
	text-decoration: none;
	}
</style>
<script>
							function validate_register()
							{
							var usernmm=document.getElementById('usernmm').value;
							var eml=document.getElementById('eml').value;
							var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
							var pwd=document.getElementById('pwd').value;
							var contt=document.getElementById('contt').value;
							var address=document.getElementById('address').value;
							if(usernmm=="")
							{
							alert("Enter your name");
							return false;
							}
							if(eml=="")
							{
							alert("Enter your email address");
							return false;
							}
							if(!eml.match(format))
							{
							alert("You have entered an wrong email address!"); 
							return false;
							}
							if(pwd=="")
							{
							alert("Enter your password");
							return false;
							}
							if(contt=="")
							{
							alert("enter your contact number");
							return false;
							}
							if(contt.length<10)
							{
							alert("Please Enter 10 digit phonenumber");
							return false;
							}
							if(contt.length>10)
							{
							alert("Please Enter 10 digit phonenumber");
							return false;
							}
							}
					</script>
					<script  type='text/javascript'>

						function numberonly()

						{

							var contactt=document.getElementById('contt').value;

							if(isNaN(contactt)|| contactt.indexOf(" ")!=-1)

							{

												alert("Enter numeric value");

									return false;

							}
						}
					</script>
					<!--google map-->  
<script src="https://maps.google.com/maps?file=api&amp;v=2&amp;key="type="text/javascript"></script>
    <script type="text/javascript">
 function load(a,b) {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        var center = new GLatLng(a,b);
        map.setCenter(center, 15);
        geocoder = new GClientGeocoder();
        var marker = new GMarker(center, {draggable: true});  
        map.addOverlay(marker);
        document.getElementById("lat").value = center.lat().toFixed(5);
        document.getElementById("lng").value = center.lng().toFixed(5);

	  GEvent.addListener(marker, "dragend", function() {
       var point = marker.getPoint();
	      map.panTo(point);
       document.getElementById("lat").value = point.lat().toFixed(5);
       document.getElementById("lng").value = point.lng().toFixed(5);
        });
      }
    }
    </script>
     <!--google map-->
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
						<div class="mobile_menu3">
								<div class="mobile_menu3box">
										<div class="menu2">
											 <a href="doctorview.php">Home</a>
										</div>
										<?php
										if(isset($_SESSION['user']))
										{
										    ?>
										<div class="menu2">
										  <a href="logout.php">Logout</a>
										</div><?php } else {?>
										<div class="menu2">
										  <a href="#" class="big-link" data-reveal-id="myModal" data-animation="none">Log in</a>
										</div>
										<div class="menu2">
										    <a href="#" class="big-link" data-reveal-id="myModal3" data-animation="none">Register</a>
										</div>
										<?php }?>
								</div>
						</div>
						
						<div id="head_search">
						
								<div id="horizontalTab">
								<ul>
									<li><a href="#tab-1" style="text-decoration:none; color:#6d6d6d; font-weight:normal;">Speciality</a></li>
									<li><a href="#tab-2" style="text-decoration:none; color:#6d6d6d; font-weight:normal;">Doctor</a></li>
									<li><a href="#tab-3" style="text-decoration:none; color:#6d6d6d; font-weight:normal;">Clinic</a></li>
									
								</ul>
								<div id="tab-1">
										<form class="form-wrapper search_form" method="post" action="doctorview.php">
											<div class="form_box">
											<input type="text" placeholder="eg. Dentist,Gynecologist" class="spef_item mobile_form" autocomplete="off" style="border-radius:none; padding:15px;width:162px;"/>
											<input type="hidden"  name="hd_spec" class="spec_slno" />
											</div>
											<div class="form_box2">
											<input type="text" placeholder="eg. Bhubaneswar"  class="city_val mobile_form input_box" autocomplete="off" style="padding:15px; width:162px;"/>
											<input type="hidden"  name="hd_city" class="city_slno" />
											
											</div>
											
											<input type="submit" value="" class="submit" />
									

										</form>
								</div>
								<div id="tab-2">
									<form class="form-wrapper search_form" method="post" action="doctorview.php">
											<div class="form_box3">
											<input type="text" placeholder="eg. Dr. Aswini Kar" required autocomplete="off" class="doctor_val mobile_form2"  name="doct_name" style="padding:15px; width:337px;"/>
											<input type="hidden"   name="hd_doctor" class="doctor_slno"/>
											</div>
											<input type="submit" value="" class="submit" />
								  </form>
								</div>
								<div id="tab-3">
									<form class="form-wrapper search_form" method="post" action="doctorview.php">
											<div class="form_box3">
											<input type="text" placeholder="eg. kar Clinic" required autocomplete="off" class="func_val mobile_form2" name="clinic_name" style="padding:15px; width:337px;"/>
											<input type="hidden"   name="hd_clinic" class="func_slno"/>
											</div>
											<input type="submit" value="" class="submit" />
								  </form>
								</div>
								
							 </div>
							 
								
								<!-- jQuery with fallback to the 1.* for old IE -->
						<!--[if lt IE 9]>
							<script src="js/jquery-1.11.0.min.js"></script>
						<![endif]-->
						<!--[if gte IE 9]><!-->
							
						<!--<![endif]-->
					
						<!-- Responsive Tabs JS -->
						<script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>
					
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').responsiveTabs({
									rotate: false,
									startCollapsed: 'accordion',
									collapsible: 'accordion',
									setHash: true,
									activate: function(e, tab) {
										$('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
									},
									activateState: function(e, state) {
										//console.log(state);
										$('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
									}
								});
					
								 $('#horizontalTab').responsiveTabs('activate', 0);
					
							});
						</script>
						</div>
						<div id="menu1">
								<div id="menubar">
										<div class="menu2">
											 <a href="doctorview.php">Home</a>
										</div>
										<?php
										if(isset($_SESSION['user']))
										{
										    ?>
										<div class="menu2">
										  <a href="logout.php">Logout</a>
										</div><?php } else {?>
										<div class="menu2">
										  <a href="#" class="big-link" data-reveal-id="myModal" data-animation="none">Log in</a>
										</div>
										<div class="menu2">
										    <a href="#" class="big-link" data-reveal-id="myModal3" data-animation="none">Register</a>
										</div>
										<?php }?>
                				</div>
								<div id="myModal" class="reveal-modal">
								   LOGIN
								    <form name="myform2" action="login_agent.php" method="post">
								     <table>
								      <tr>
								       <td>User Name</td>
								       <td><input type="text" name="username" class="form" required></td>
								      </tr>
								      <tr>
								       <td>Password</td>
								       <td><input type="password" name="userpass" class="form" required></td>
								      </tr>
								      <tr>
								       <td colspan="2"><input type="submit" name="loguser" value="login"></td>
								      <!-- <td>New User Register Now<input type="submit" name="regisub" value="register"></td>-->
								      </tr>
								     </table>
								    </form>
								   <a class="close-reveal-modal">&#215;</a>
								</div>
								<div id="myModal3" class="reveal-modal">
									 New Register
								   <form name="myform2" action="userinsert.php" method="post" onsubmit="return validate_register();">
								     <table>
								      <tr>
								       <td>Name</td>
								       <td><input type="text" name="user" class="form" id="usernmm"></td>
								      </tr>
								      <tr>
								       <td>email</td>
								       <td><input type="email" name="email" class="form" id="eml"></td>
								      </tr>
								       <tr>
								       <td>Password</td>
								       <td><input type="password" name="pass" class="form" id="pwd"></td>
								      </tr>
								      <tr>
								       <td>contact</td>
								       <td><input type="text" name="contact" class="form" id="contt" onkeyup="return numberonly();"></td>
								      </tr>
								      <tr>
								       <td>address</td>
								       <td><input type="text" name="address" class="form" id="address"></td>
								      </tr>
								      <tr>
								       <td><input type="submit" name="userinsert" value="Register"></td>
								      </tr>
								     </table>
								    </form>
								   <a class="close-reveal-modal">&#215;</a>
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
						<div id="content_boxright">
										<?php
										
										    $fet=mysql_query("select * from `details` where `uniqueid`='$uid'");
										    $res=mysql_fetch_array($fet);
										    
										    $speciality=$res['speciality'];
										    $specialityfetc=mysql_query("select * from `specification` where `slno`='$speciality'");
										    $resspeciality=mysql_fetch_array($specialityfetc);
										    $city=$res['city'];
										    
										    $cityfetc=mysql_query("select * from `city` where `slno`='$city'");
										    $rescity=mysql_fetch_array($cityfetc);
										    $c=$rescity['cityname'];
										    $im=$res['image'];
										    $dimg=ltrim($im,"../");
										
										    ?>
								<div id="content_righthead">
											<div class="list_head" style="font-weight:normal; padding-left:0px; width:80%; font-size:12px; margin-bottom:5px; background:none; ">
										 		<!--<span style="color: #244BB3;">Home</span> /--> <span style="color: #244BB3;"><a href="doctorview.php?hd_city=<?php echo $rescity['slno'];?>" style="color: #244BB3; text-decoration:none;"><?php echo $rescity['cityname']; ?></a></span> / <span style="color: #244BB3;"><a href="doctorview.php?hd_spec=<?php echo $resspeciality['slno'];?>" style="color: #244BB3; text-decoration:none;"><?php echo $resspeciality['name']; ?></a></span> / <span style="color: #244BB3;"><a href="doctorview.php?loc=<?php echo $res['location'];?>" style="color: #244BB3; text-decoration:none;"><?php echo $res['location']; ?></a></span> / <?php echo $res['doctor_name'];?> 
											</div>	
											<div class="list_head" style="font-weight:normal; padding-left:3%; width:22%;  line-height:1.3; background:none; text-align:right; float:right;  font-size:13px; margin-bottom:5px; display:none;">
										 		 <span style=" color:#244bb3;">How we rank doctors (PRA)</span>
												 <br />
												 <span style="font-weight:bold;">Helpline</span> <span>+91 9590908080</span>
											</div>	
								</div>
								<div id="rightcontent">
										<div class="rightcontent_box">
										    
												<div class="right_imgbox doctor_imgbox1">
																<?php
																if($im){
																?>
														<img src="admin/<?php echo $dimg;?>"  />
														<?php
														}
														else{
														?>
														<img src="admin/upload/aswini.png" />
														<?php
														}
														?>
												</div>
												<div class="right_textbox">
														<h2 class="head1" style=" font-size:26px;color: #000;">
																<?php echo $res['doctor_name'];?>
																<br />
																<span class="head2"><?php echo $res['designation'];?></span>
														</h2>
														<p class="text">
																<?php echo $resspeciality['name']; ?>
																 <br />
																 <br />
																 <?php 
																 $x=$res['description'];
																 $nu=230;
																 $totlength=strlen($x);
																 echo substr($x,0,$nu);
																 ?>
																 <span style="color:#244BB3; float:right; cursor:pointer;" id="more">more</span>
														</p>
														<p class="text" id="desc">
														<?php
														 echo substr($x,$nu,$totlength);
														?>
														 <span style="color:#244BB3; float:right; cursor:pointer;" id="shrink">shrink</span>
														</p>
														
												</div>
												
										</div>
										
										
										
										<div class="rightcontent_box">
												<h3 class="name" style="font-size:16px; margin-top:0px; margin-bottom:5px;"><span style="color: #818181; text-transform:capitalize;"><?php echo $res['location'].",".$c;?></span> </h3>
												<div class="right_imgbox name" style="width:260px;">
														<div class="airport" style="background:url(images/icon7.png) no-repeat left; font-weight:bold; font-size:14px; color: #555;">
														    <?php echo $res['functionality_name'];?>
														</div>
														<p class="text" style="margin-left:25px; float:left;">
																<?php echo $res['address'];?>
																<br />
														</p>
														<div class="clinic" style="margin-left:25px;">
																<?php
														    $fetch1=mysql_query("select * from `functionality` where `name`='$res[functionality_name]'");
														    $fres=mysql_fetch_array($fetch1);
														    $slno=$fres['slno'];
														    $fetch2=mysql_query("select * from `image` where `functionalityname_id`='$slno'");
														    while($fimageres=mysql_fetch_array($fetch2))
														    {
															$im1=$fimageres['image'];
															$dimg1=ltrim($im1,"../");
														    ?>

																<img src="admin/<?php echo $dimg1;?>"  /><?php }?>
														</div>
														<div style="float: left; "><a href="#" class="big-link" data-reveal-id="myModal4" data-animation="none" style="text-decoration: none; color: #244BB3;">view map</a></div>
												</div>
												<div id="myModal4" class="reveal-modal" style="top:60px;">
													<?php include_once('map.php');?>
													<a class="close-reveal-modal">&#215;</a>
												</div>
												
												<div class="right_textbox2 day">
														<div style="clear:both;"></div>
														<div class="airport" style="background:url(images/icon8.png) no-repeat top left;">
																<!--<span style="font-weight:bold; color: #6f6f78;">MON-SAT</span>
																<br />
																5:00PM-9:00PM
																<br />
																<span style="font-weight:bold; color: #6f6f78;">SUN</span>
																<br />
																9:00AM-1:00PM-->
														</div>
														
												</div>
												
												<div class="right_textbox time">
														<div class="airport" style="background:url(images/icon9.png) no-repeat top left;">
														    <?php
														    $sql=mysql_query("SELECT DISTINCT  `session_1st` FROM  `timing`  where `uid`='$uid'");
														    while($res=mysql_fetch_array($sql))
														    { 
														    $m=$res['session_1st'];
															
														    $que=mysql_query("select DISTINCT  `session_2nd` from `timing` where `uid`='$uid' and `session_1st`='$m'") or die(mysql_error());
														    while($que1=mysql_fetch_array($que))
														    {
														    $m1=$que1['session_2nd'];
														    
															  $fetch=mysql_query("select * from `timing` where `session_1st`='$m' and `session_2nd`='$m1' and `uid`='$uid'")or die(mysql_error());
														     $num=mysql_numrows($fetch);
														    if($num>0){
														      $day="";
														      while($found=mysql_fetch_array($fetch))
														      {
															 $day=$day.",".$found['day'];
															 $t=$found['session_2nd'];
														      }
															/*$dtt=rtrim($dt,",");
															   $x=explode(",",$dtt);
															   //echo "<br/>".$x[0]."---".$x[1];
															  $cx=count($x);
															  $fx=$x[0];
															  $lx= $x[$cx-1];
															 
															 // echo $cx;
															 if($fx==$lx)
															 {
															 echo $fx;
															 }
															 else
															 {
															  echo $fx."-".$lx;
															 }
															   $fdaya=ltrim($day,",");
															   $dty=trim($fdaya,"'");
															   $ex=explode(",",$dty);
															  
															   foreach($ex as $exx)
															   {
															 // echo $exx;
															  $v=trim($exx,"'");
															  $va=array($v,);
															   }*/
																?> 
																<span style="font-weight:bold; color: #6f6f78;">
															<?php 
														        $dayy=ltrim($day,",");
															$x=explode(",",$dayy);
														      
															$mon=array('monday','tuesday','wednesday','thursday','friday','saturday','sunday');
															$tue=array('tuesday','wednesday','thursday','friday','saturday','sunday');
															$wed=array('wednesday','thursday','friday','saturday','sunday');
															$thur=array('thursday','friday','saturday','sunday');
															$fri=array('friday','saturday','sunday');
															$sat=array('saturday','sunday');
															$sun=array('sunday');
															$mday=""; $tday=""; $wday=""; $thday=""; $fday=""; $saday=""; $suday="";
															
															 $cx=count($x);
															  $fx=$x[0];
															  $lx= $x[$cx-1];
															  for($i=0;$i<$cx;$i++)
															  {
															   if(in_array($x[$i],$mon) && $x[$i]==$mon[$i])
																 {
																  $mday=$mday.",".$x[$i];
																}
																elseif(in_array($x[$i],$tue) && $x[$i]==$tue[$i])
																 {
																  $tday=$tday.",".$x[$i];
																}
																elseif(in_array($x[$i],$wed) && $x[$i]==$wed[$i])
																 {
																  $wday=$wday.",".$x[$i];
																}
																elseif(in_array($x[$i],$thur) && $x[$i]==$thur[$i])
																 {
																  $thday=$thday.",".$x[$i];
																}
																elseif(in_array($x[$i],$fri) && $x[$i]==$fri[$i])
																 {
																  $fday=$fday.",".$x[$i];
																}
																elseif(in_array($x[$i],$sat) && $x[$i]==$sat[$i])
																 {
																  $saday=$saday.",".$x[$i];
																}
																elseif(in_array($x[$i],$sun) && $x[$i]==$sun[$i])
																 {
																  $suday=$suday.",".$x[$i];
																}
															  }
															  if($mday!=""){   $mday; $mex=explode(",",$mday);  $mcx=count($mex);  $mfx=$mex[1];  $mlx=$mex[$mcx-1]; if($mfx==$mlx){ echo "<span style='text-transform:capitalize;'>".$mlx."</span>";} else{ echo "<span style='text-transform:capitalize;'>".$mfx."-".$mlx."</span>"; }}
															  if($tday!=""){  $tday; $tex=explode(",",$tday); $tcx=count($tex);  $tfx=$tex[1];    $tlx=$tex[$tcx-1]; if($tfx==$tlx){ echo "<span style='text-transform:capitalize;'>".$tlx."</span>";} else{ echo "<span style='text-transform:capitalize;'>".$tfx."-".$tlx."</span>"; }}
															  if($wday!=""){  $wday; $wex=explode(",",$wday); $wcx=count($wex);  $wfx=$wex[1];    $wlx=$wex[$wcx-1]; if($wfx==$wlx){ echo "<span style='text-transform:capitalize;'>".$wlx."</span>";} else{ echo "<span style='text-transform:capitalize;'>".$wfx."-".$wlx."</span>"; }}
															  if($thday!=""){  $thday; $thex=explode(",",$thday); $thcx=count($thex);  $thfx=$thex[1]; $thlx=$thex[$thcx-1]; if($thfx==$thlx){ echo "<span style='text-transform:capitalize;'>".$thlx."</span>";} else{ echo "<span style='text-transform:capitalize;'>".$thfx."-".$thlx."</span>"; }}
															  if($fday!=""){  $fday; $fex=explode(",",$fday); $fcx=count($fex);  $ffx=$fex[1]; $flx=$fex[$fcx-1]; if($ffx==$flx){ echo "<span style='text-transform:capitalize;'>".$flx."</span>";} else{ echo "<span style='text-transform:capitalize;'>".$ffx."-".$flx."</span>"; }}
															  if($saday!=""){  $saday; $saex=explode(",",$saday); $sacx=count($saex);  $safx=$saex[1]; $salx=$saex[$sacx-1]; if($safx==$salx){ echo "<span style='text-transform:capitalize;'>".$salx."</span>";} else{ echo "<span style='text-transform:capitalize;'>".$safx."-".$salx."</span>"; }}
															  if($suday!=""){  $suday; $suex=explode(",",$suday); $sucx=count($suex);  $sufx=$suex[1]; $sulx=$suex[$sucx-1]; if($sufx==$sulx){ echo "<span style='text-transform:capitalize;'>".$sulx."</span>";} else{ echo "<span style='text-transform:capitalize;'>".$sufx."-".$sulx."</span>"; }}
														     
															?>
															</span>
																
																<?php
														      if($m1!="" && $m1!='0:00AM-0:00AM' && $m1!='0:00AM-0:00APM' && $m1!='0:00PM-0:00AM' && $m1!='0:00PM-0:00PM')
														      { 
															  ?>
															  <br/>
															  <?php
															  $fsesion=$m;
															  if($fsesion=='0:00AM-0:00AM')
															  {
															  echo $m1;
															  }
															  else{
															  echo $fsesion.",".$m1;
															  }
														      }
															  else
															  {
															  echo "<br/>".$m;
															  }
															  ?>
																<br />
																<?php
														    } 
														    } 
														    }
															
														    ?>
														</div>	
														<div class="button app" style="margin-top:50px;">
														
																Book Appointment 
														</div>
												</div>
												
										</div>
										
										<div class="table_box table_box" style="display:none;">
										    <?php
														$date = date("Y-m-d");
														$ldate=date('Y-m-d', strtotime($date. ' +2days'));
														while($ldate>=$date){
														$sepparator = '-';
														$parts = explode($sepparator, $date);
														$dayForDate = date("l", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));
														?>
												<table cellpadding="6">
														<tr class="tr1">
																<th style="background:#ccc;">PREV DAY</th>
																<th colspan="2">MORNING</th>
																<th colspan="2">AFTERNOON</th>
																<th colspan="2">EVENING</th>
																<th>NIGHT</th>
														</tr>
														<tr style="border-right:1px solid #ccc; border-collapse:collapse;">
																<td rowspan="6" style="line-height:1.5;"> <!--<span class="td_box">TODAY</span> -->
																		<br />
																		<span style="color:#333;"><?php echo $today=$dayForDate; ?> </span>
																		<br /> 
																		<span style="color:#6f6f72;"><?php  $d=strtotime($today); echo date("M d", $d)?></span>
																</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
														</tr>
														<?php
														$fetchtime=mysql_query("select * from `timing` where `uid`='$uid' and `day`='$today'");
														$restime=mysql_fetch_array($fetchtime);
														$firstsession=$restime['session_1st'];
														$secondsession=$restime['session_2nd'];
														
														$ext=explode("-",$firstsession);
														$ex=$ext[0];
														$exx=$ext[1];
														$slot=mysql_query("select * from `details` where `uniqueid`='$uid'");
														$resslot=mysql_fetch_array($slot);
														$c=$resslot['timeslot'];
														//$c=10;
														$inc   = $c * 60;
														$start = (strtotime($ex)); // 6  AM
														$end   = (strtotime($exx)); // 10 PM
														
														$ext1=explode("-",$secondsession);
														$ex1=$ext1[0];
														$exx1=$ext1[1];

														$inc1   = $c * 60;
														$start1 = (strtotime($ex1)); // 6  AM
														$end1   = (strtotime($exx1)); // 10 PM
														
														
														?>
														<tr>
																
																<td>&nbsp;</td>
																<td>
														 <?php
														 if($firstsession!="0:00AM-0:00AM"){
														 for( $i = $start; $i <$end; $i += $inc )
														{
														     $range=date( 'g:i A', $i );
														     $stime="9:00AM";
														     $ltime="12:00PM";
														     $time = strtotime($range);
														     $st_time    =   strtotime($stime);
														     $end_time    =   strtotime($ltime);
														    if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {$bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range;?>&date=<?php echo $date;?>"><?php echo $range;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } }?>
																
																
																 <?php
														if($secondsession!="0:00AM-0:00AM"){
														 for( $i1 = $start1; $i1 <$end1; $i1 += $inc1 )
														{
														     $range1=date( 'g:i A', $i1 );
														     $stime1="9:00AM";
														     $ltime1="12:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($st_time1<=$time1 and $time1 < $end_time1 and $time1 < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range1;?></a></span>
														    <?php }
														    elseif ($st_time1<=$time1 and $time1 < $end_time1)
														 {
														     $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range1' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range1;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range1;?>&date=<?php echo $date;?>"><?php echo $range1;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } } ?>
														 </td>
																<td>
																    <?php
														if($firstsession!="0:00AM-0:00AM"){
														 for( $i = $start; $i <$end; $i += $inc )
														{
														     $range=date( 'g:i A', $i );
														     $stime="12:00PM";
														     $ltime="3:00PM";
														     $time = strtotime($range);
														     $st_time    =   strtotime($stime);
														     $end_time    =   strtotime($ltime);
														    if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {$bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range;?>&date=<?php echo $date;?>"><?php echo $range;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } }?>
																
																 <?php
														if($secondsession!="0:00AM-0:00AM"){
														 for( $i1 = $start1; $i1 <$end1; $i1 += $inc1 )
														{
														     $range1=date( 'g:i A', $i1 );
														     $stime1="12:00PM";
														     $ltime1="3:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($st_time1<=$time1 and $time1 < $end_time1 and $time1 < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range1;?></a></span>
														    <?php }
														    elseif ($st_time1<=$time1 and $time1 < $end_time1)
														 {
														     $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range1' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range1;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range1;?>&date=<?php echo $date;?>"><?php echo $range1;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } } ?>
																</td>
																<td>
																    <?php
														if($firstsession!="0:00AM-0:00AM"){
														 for( $i = $start; $i <$end; $i += $inc )
														{
														     $range=date( 'g:i A', $i );
														     $stime="3:00PM";
														     $ltime="4:00PM";
														     $time = strtotime($range);
														     $st_time    =   strtotime($stime);
														     $end_time    =   strtotime($ltime);
														    if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {$bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range;?>&date=<?php echo $date;?>"><?php echo $range;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } } ?>
																
																
																 <?php
														if($secondsession!="0:00AM-0:00AM"){
														 for( $i1 = $start1; $i1 <$end1; $i1 += $inc1 )
														{
														     $range1=date( 'g:i A', $i1 );
														     $stime1="3:00PM";
														     $ltime1="4:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($st_time1<=$time1 and $time1 < $end_time1 and $time1 < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range1;?></a></span>
														    <?php }
														    elseif ($st_time1<=$time1 and $time1 < $end_time1)
														 {
														     $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range1' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range1;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range1;?>&date=<?php echo $date;?>"><?php echo $range1;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } } ?>
																</td>
																<td>
																<?php
														 if($firstsession!="0:00AM-0:00AM"){
														 for( $i = $start; $i <$end; $i += $inc )
														{
														     $range=date( 'g:i A', $i );
														     $stime="4:00PM";
														     $ltime="6:00PM";
														     $time = strtotime($range);
														     $st_time    =   strtotime($stime);
														     $end_time    =   strtotime($ltime);
														    if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {$bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range;?>&date=<?php echo $date;?>"><?php echo $range;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } }?>
																
																
																     <?php
														if($secondsession!="0:00AM-0:00AM"){
														 for( $i1 = $start1; $i1 <$end1; $i1 += $inc1 )
														{
														     $range1=date( 'g:i A', $i1 );
														     $stime1="4:00PM";
														     $ltime1="6:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($st_time1<=$time1 and $time1 < $end_time1 and $time1 < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range1;?></a></span>
														    <?php }
														    elseif ($st_time1<=$time1 and $time1 < $end_time1)
														 {
														     $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range1' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range1;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range1;?>&date=<?php echo $date;?>"><?php echo $range1;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } } ?>
																</td>
																<td>
																<?php
														 if($firstsession!="0:00AM-0:00AM"){
														 for( $i = $start; $i <$end; $i += $inc )
														{
														     $range=date( 'g:i A', $i );
														     $stime="6:00PM";
														     $ltime="8:00PM";
														     $time = strtotime($range);
														     $st_time    =   strtotime($stime);
														     $end_time    =   strtotime($ltime);
														   if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {$bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range;?>&date=<?php echo $date;?>"><?php echo $range;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } }?>
																
																
																    <?php
														if($secondsession!="0:00AM-0:00AM"){
														 for( $i1 = $start1; $i1 <$end1; $i1 += $inc1 )
														{
														     $range1=date( 'g:i A', $i1 );
														     $stime1="6:00PM";
														     $ltime1="8:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($st_time1<=$time1 and $time1 < $end_time1 and $time1 < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range1;?></a></span>
														    <?php }
														    elseif ($st_time1<=$time1 and $time1 < $end_time1)
														 {
														     $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range1' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range1;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range1;?>&date=<?php echo $date;?>"><?php echo $range1;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } } ?>
																</td>
																<td>
																<?php
														 if($firstsession!="0:00AM-0:00AM"){
														 for( $i = $start; $i <$end; $i += $inc )
														{
														     $range=date( 'g:i A', $i );
														     $stime="8:00PM";
														     $ltime="11:00PM";
														     $time = strtotime($range);
														     $st_time    =   strtotime($stime);
														     $end_time    =   strtotime($ltime);
														    if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {$bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range;?>&date=<?php echo $date;?>"><?php echo $range;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } }?>
																
																
																
																    <?php
														if($secondsession!="0:00AM-0:00AM"){
														 for( $i1 = $start1; $i1 <$end1; $i1 += $inc1 )
														{
														     $range1=date( 'g:i A', $i1 );
														     $stime1="8:00PM";
														     $ltime1="11:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($st_time1<=$time1 and $time1 < $end_time1 and $time1 < $currentt and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range1;?></a></span>
														    <?php }
														    elseif ($st_time1<=$time1 and $time1 < $end_time1)
														 {
														     $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range1' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range1;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range1;?>&date=<?php echo $date;?>"><?php echo $range1;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } } ?>
																</td>
														</tr>
														
												</table>
												<?php $date=date('Y-m-d', strtotime($date. ' +1days')); }?>
										</div>
										
										<div class="rightcontent_box">
										<?php
										$sqlservice=mysql_query("select * from `services` where `uid`='$uid'");
										$no=mysql_num_rows($sqlservice);					
										?>					
												<div class="airport" style="background:url(images/icon10.png) no-repeat left; font-weight:bold; font-size:14px; color: #555; padding-left:38px; width:100%;">
														Services
												</div>
												<div class="services_content">
														<ul class="services_list">
														    <?php
														    $fservices=mysql_query("select * from `services` where `uid`='$uid' limit 0,5");
														    while($rservices=mysql_fetch_array($fservices))
														    {
														    ?>
																<li><i><img src="images/list.png"></i><?php echo $rservices['ser_name'];?></li><?php }?>
														</ul>
														
												</div>
												<div class="services_content">
														<ul class="services_list">
														    <?php
														    $fservice=mysql_query("select * from `services` where `uid`='$uid' limit 5,5");
															//echo "select * from `services` where `uid`='$uid' limit 5,5";
														    while($rservice=mysql_fetch_array($fservice))
														    {
														    ?>
																<li><i><img src="images/list.png"></i><?php echo $rservice['ser_name'];?></li><?php }?>
														</ul>
														
												</div>
												<div class="services_content">
														<ul class="services_list">
														    <?php
														    $fserve=mysql_query("select * from `services` where `uid`='$uid' limit 10,$no");
														    while($rserve=mysql_fetch_array($fserve))
														    {
														    ?>
																<li><i><img src="images/list.png"></i><?php echo $rserve['ser_name'];?></li><?php }?>
														</ul>
														
												</div>
												
										</div>
										
										<div class="rightcontent_box" style="padding-bottom:0px; padding-top:0px;">
												<div id="services_left">
														<div class="service_head" style="background:url(images/icon11.png) no-repeat left;">
																Specializations
														</div>
														<div class="services_content" style="width:100%; margin-top:0px;">
																<ul class="services_list">
																      <?php
														    $fspecial=mysql_query("select * from `specialize` where `uid`='$uid'");
														    while($rspecial=mysql_fetch_array($fspecial))
														    {
														    ?>
																		<li><i><img src="images/list.png"></i><?php echo $rspecial['spec_name'];?></li><?php }?>
																</ul>
														</div>
														<div class="service_head" style="background:url(images/icon14.png) no-repeat left;">
																Education
														</div>
														<div class="services_content" style="width:100%; margin-top:0px;">
																<ul class="services_list">
																    <?php
														    $fedu=mysql_query("select * from `education` where `uid`='$uid'");
														    while($redu=mysql_fetch_array($fedu))
														    {
														    ?>
																		<li><i><img src="images/list.png"></i><?php echo $redu['educate_name'];?></li><?php }?>
																</ul>
														</div>
														<div class="service_head" style="background:url(images/icon15.png) no-repeat left;">
																 Experience 
														</div>
														<div class="services_content" style="width:100%; margin-top:0px;">
																<ul class="services_list">
																    <?php
														    $fexp=mysql_query("select * from `experience` where `uid`='$uid'");
														    while($rexp=mysql_fetch_array($fexp))
														    {
														    ?>
																		<li><i><img src="images/list.png"></i><?php echo $rexp['exp_name'];?></li><?php }?>
																</ul>
														</div>
												</div>
												
												<div id="services_right">
														<div class="service_head" style="background:url(images/icon12.png) no-repeat left; ">
																 Awards and Recognitions
														</div>
														<div class="services_content" style="width:100%; margin-top:0px;">
																<ul class="services_list">
																    <?php
														    $fexp=mysql_query("select * from `experience` where `uid`='$uid'");
														    while($rexp=mysql_fetch_array($fexp))
														    {
														    ?>
																		<li><i><img src="images/list.png"></i><?php echo $rexp['exp_name'];?></li><?php }?>
																		
																</ul>
														</div>
														
														
														<div class="service_head" style="background:url(images/icon17.png) no-repeat left; ">
																Memberships
														</div>
														<div class="services_content" style="width:100%; margin-top:0px;">
																<ul class="services_list">
																    <?php
														    $fmemb=mysql_query("select * from `membership` where `uid`='$uid'");
														    while($rmemb=mysql_fetch_array($fmemb))
														    {
														    ?>
																		<li><i><img src="images/list.png"></i><?php echo $rmemb['member'];?></li><?php }?>
																</ul>
														</div>
														
														<div class="service_head" style="background:url(images/icon16.png) no-repeat left; ">
																Registrations
														</div>
														<div class="services_content" style="width:100%; margin-top:0px;">
																<ul class="services_list">
																    <?php
														    $freg=mysql_query("select * from `registration` where `uid`='$uid'");
														    while($rreg=mysql_fetch_array($freg))
														    {
														    ?>
																		<li><i><img src="images/list.png"></i><?php echo $rreg['registration'];?></li><?php }?>
																</ul>
														</div>
												</div>
												
										</div>
						  </div>
						</div>
				</div>
		</div>
</div>

<div id="bottom_contentbar">
		<div id="bottom_content">
				<div id="bottom_contentleft">
						<p class="text"><span style="color:#333; font-weight:bold; font-size:14px;">Frequent searches leading to this page</span></p>
						<?php
						 $sqldetail=mysql_query("select * from `details` where `uniqueid`='$uid'");
						 $resdetail=mysql_fetch_array($sqldetail);
						 $loc=mysql_query("select * from `details` where `location`='$resdetail[location]' and `functionality_name`!='$resdetail[functionality_name]'");
						 while($rowloc=mysql_fetch_array($loc)){
						?>
						<ul>
						
						<li><a href="doctorview.php?funcslno=<?php echo $rowloc['slno'];?>"> <?php echo $rowloc['functionality_name']." ".$rowloc['functionality'];?> in </a></li>
						<li style="margin-left:5px;"><a href="doctorview.php?loc=<?php echo $resdetail['location'];?>"><?php echo $resdetail['location'];?></a>,</li>
						<li><a href="doctorview.php?hd_city=<?php echo $resdetail['city'];?>"><?php echo $rescity['cityname'];?>, </a></li>
							
							<!--	<li><a href="#"> Orthopedic Doctors in Airport, </a></li>
								<li><a href="#">Bhubaneswar, </a></li>
								<!--<li><a href="#">Orthopedic Clinics Airport,</a></li>-->
							
						</ul>
						<?php
						}
						?>
				</div>
				<div id="bottom_contentright">
						<p class="text"><span style="color:#333; font-weight:bold; font-size:14px;"><?php echo $resspeciality['name'];?> near <?php echo $resdetail['location'];?></span></p>
						<ul>
						<?php
						$sqlloc=mysql_query("select * from `details` where `speciality`='$resdetail[speciality]' and `location`!='$resdetail[location]' group by location");
						while($resloc=mysql_fetch_array($sqlloc))
						{
						$getlocname=mysql_query("select `name` from `specification` where `slno`='$resloc[speciality]'")or die(mysql_error());
						$reslocname=mysql_fetch_array($getlocname);
						?>
						<li><a href="doctorview.php?loc=<?php echo $resloc['location'];?>"><?php echo $reslocname['name'];?> near <?php echo $resloc['location'];?>, </a></li>
						<?php
						}
						?>
								
							<!--	<li><a href="#">Orthopedist near Airport, </a></li>
								<li><a href="#">Orthopedic Doctors in Airport, </a></li>
								<li><a href="#">Orthopedic Clinics in Kharavela Nagar, </a></li>-->
						</ul>
				</div>
		</div>
</div>


<div id="footer">
		<div id="footer_box">
				<div class="footer_content">
						<ul>
								<li style="font-weight:bold; font-size:13px;">Tordoc</li>
								<li><a href="index.php">Search for doctors</a></li>
								<li><a href="doctorview.php">Doctors directory</a></li>
								<li><a href="#">Advertise</a></li>
						</ul>
				</div>
		</div>
</div>

<div id="footer2">
		<div id="footer2_box">
				copyright all rights reserved
		</div>
</div>
</body>
</html>
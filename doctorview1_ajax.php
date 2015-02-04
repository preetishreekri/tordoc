<?php
include_once('function.php');
if(isset($_SESSION['user']) OR isset($_SESSION['doctor'])){
 $_SESSION['user'];
   $_SESSION['doctor'];
 $agentid=$_SESSION['slno'];
  $locname=$_REQUEST['locat'];
  $specialityid=$_REQUEST['hd_spec'];
  $cityid=$_REQUEST['hd_city'];
 $doctor_name=$_REQUEST['doct_name']; 
 $clin=$_REQUEST['clinic_name'];
 $clinic_name=htmlentities($clin,ENT_QUOTES);
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
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <title>Social Networking Site</title>
        
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="responsiv.css" type="text/css" media="screen" />
        <style>
	    tr{
		height: 30px;
	    }
	</style>
	 <style>
            #slider-range{width:80%;}
            #slider-range,#time{margin:10px;display:block;}
        </style>
	 <link type="text/css" rel="stylesheet" href="css/responsive-tabs.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
	<!------------------------------------menu---------------------------->	
		<link type="text/css" rel="stylesheet" href="css3/jquery.mmenu.css" />
		
		<!--autocomplete start-->
 <script src="js/jquery-2.1.0.min.js"></script>
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
		$('.spec_slno').val(ui.item.idval);
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
		
	<!--<script>
		$(function(){
						  $( ".app" ).click(function() {
						  $( ".table_box" ).slideToggle( "slow", function() {
						  });
					});
					
					$( ".list_head" ).click(function() {
						if($(this).hasClass('box3'))
						{
							$(this).removeClass('box3');
							$(this).addClass('box4');
						}
						else if($(this).hasClass('box4'))
						{
							$(this).removeClass('box4');
							$(this).addClass('box3');
						}
						  $(this).next('.list_box').slideToggle( "slow", function() {
						  	
						  });
						  });
				});
		</script>-->
	<script>
	    function slide(args) {
//alert(args);
						  $( "#"+args ).slideToggle( "slow", function() {
						  });
					
					$( ".list_head" ).click(function() {
						if($(this).hasClass('box3'))
						{
							$(this).removeClass('box3');
							$(this).addClass('box4');
						}
						else if($(this).hasClass('box4'))
						{
							$(this).removeClass('box4');
							$(this).addClass('box3');
						}
						  $(this).next('.list_box').slideToggle( "slow", function() {
						  	
						  });
						  });
	    }
	</script>
		
		<link rel="stylesheet" href="css/reveal.css">	
		<!--<script type="text/javascript" src="jquery-1.6.min.js"></script>-->
		<script type="text/javascript" src="js/jquery.reveal.js"></script>
		
<!---------------menu end-------------->
<style>
    .table_box table tr td a {
	color: #7FAC5A;
	text-decoration: none;
	}
</style>
	<script>
		$(function(){
						  $(".slider-range").slider({
						var xx=$(".time").html();
						$(".hd").val(xx);
							});
					});
	</script>
	<script>
	    function day(dval)
	    {  //alert("dval");
		$.ajax({url:"ajax_day.php?day="+dval,success:function(result){
		    //alert(result);
		 $(".timeval").html(result);   
		}});
	    }
	    function locate(loval)
	    {  //alert(loval);
		$.ajax({url:"ajax_location.php?loc="+loval,success:function(result){
		    //alert(result);
		 $(".timeval").html(result);   
		}});
	    }
	</script>
</head>	
<body>
<!--------------------menu----------->
<nav id="menu">
		<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="doctorview.php">Doctor View</a></li>
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
											 <a href="#">Bhubaneswar</a>
										</div>
										<div class="menu2">
										    <a href="#">Get Listed</a>
										</div>
										<?php
										if(isset($_SESSION['user']) OR isset($_SESSION['doctor']))
										{
										    ?>
										<div class="menu2">
										  <a href="logout.php">Logout</a>
										</div><?php } else {?>
										<div class="menu2">
										  <a href="#" class="big-link" data-reveal-id="myModal" data-animation="none">Log in</a>
										</div><?php }?>
								</div>
						</div>
						
						<div id="head_search">
						<!--<form name="myform" method="post" action="doctorview.php">-->
						<form name="myform" method="post" action="doctorview.php">
								<div id="horizontalTab">
								<ul>
									<li><a href="#tab-1" style="text-decoration:none; color:#6d6d6d; font-weight:normal;">Speciality</a></li>
									<li><a href="#tab-2" style="text-decoration:none; color:#6d6d6d; font-weight:normal;">Doctor</a></li>
									<li><a href="#tab-3" style="text-decoration:none; color:#6d6d6d; font-weight:normal;">Clinic</a></li>
						</form>			
								</ul>
								<div id="tab-1">
										<form class="form-wrapper search_form" method="post" action="doctorview.php">
											<div class="form_box">
											<input type="text" placeholder="eg. Dentist,Gynecologist" class="spef_item mobile_form" autocomplete="off" style="border-radius:none; padding:15px;width:162px;" name="spef_name"/>
											<input type="hidden" name="hd_spec" class="spec_slno"/>
											</div>
											<div class="form_box2">
											<input type="text" placeholder="eg. Vanivihar"  class="city_val mobile_form input_box" autocomplete="off" style="padding:15px; width:162px;" name="cityname"/>
											<input type="hidden" name="hd_city" class="city_slno"/>
											</div>
											
											<input type="submit" value="" class="submit" />
									

										</form>
								</div>
								<div id="tab-2">
									<form class="form-wrapper search_form" method="post" action="doctorview.php">
											<div class="form_box3">
											<input type="text" placeholder="eg. Dr. Aswini Kar"  autocomplete="off" class="doctor_val mobile_form2" name="doct_name" style="padding:15px; width:337px;"/>
											<input type="hidden" name="hd_doctor" class="doctor_slno"/>
											</div>
											<input type="submit" value="" class="submit" />
									</form>
								</div>
								<div id="tab-3">
									<form class="form-wrapper search_form" method="post" action="doctorview.php">
											<div class="form_box3">
											<input type="text" placeholder="eg. kar Clinic"  autocomplete="off" class="func_val mobile_form2" name="clinic_name" style="padding:15px; width:337px;"/>
											<input type="hidden" name="hd_clinic" class="func_slno"/>
											</div>
											<input type="submit" value="" class="submit" />
									</form>
								</div>
								
							 </div>
							<!-- </form>-->
								
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
											 <a href="#">Bhubaneswar</a>
										</div>
										<div class="menu2">
										    <a href="#">Get Listed</a>
										</div>
										<?php
										if(isset($_SESSION['user']) OR isset($_SESSION['doctor']))
										{
										    ?>
										<div class="menu2">
										  <a href="logout.php">Logout</a>
										</div><?php } else {?>
										<div class="menu2">
										  <a href="#" class="big-link" data-reveal-id="myModal" data-animation="none">Log in</a>
										</div><?php }?>
                				</div>
								<div id="myModal" class="reveal-modal">
								    LOGIN
								    <form name="myform" action="login_agent.php" method="post">
								     <table>
								      <tr>
								       <td>Agent name</td>
								       <td><input type="text" name="agentname" class="form" ></td>
								      </tr>
								      <tr>
								       <td>Password</td>
								       <td><input type="password" name="agentpass" class="form" ></td>
								      </tr>
								      <tr>
								       <td><input type="submit" name="logagent" value="login"></td>
								       <td>New User Register Now<input type="submit" name="regisub" value="register"></td>
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
						<div id="content_boxleft">
								<div class="list_head box3">
										Appointment
								</div>
								<div class="list_box ">
										<ul>
												<li><input type="checkbox" name="checkboxG4" id="checkboxG0"  class="css-checkbox" /><label for="checkboxG0" class="css-label"> Instant Booking</label></li>
										</ul>
								</div>
								<div class="list_head box3" style="margin-top:15px;">
										Location 
								</div>
								<div class="list_box">
										<ul>
										    <?php
										    $n=1;
											$locationfetch=mysql_query("select `location` from `details` group by `location`");
											while($locationfound=mysql_fetch_array($locationfetch))
											{ $location=$locationfound['location'];
											
										    ?>
												<li><input type="checkbox" name="checkboxG<?php echo $n;?>" id="checkboxG<?php echo $n;?>"  class="css-checkbox" /><label for="checkboxG<?php echo $n;?>" class="css-label"><span return onclick="locate('<?php echo $location; ?>')" style="text-decoration: none; color:#818181;"><?php echo $locationfound['location']; ?></span></label></li><?php $n++; }?>
										</ul>
								</div>
								<div class="list_head" style="margin-top:15px;">
										Availability 
								</div>
								<div id="day_list">
										<ul>
												<li><a href="doctorview.php" style="background:#6f6f6f; color:#fff; border-radius:5px 0px 0px 5px;">ANY</a></li>
												<li><span return onclick="day('monday')" style="margin-left: 5px;">M</span></li>
												<li><span return onclick="day('tuesday')" style="margin-left: 5px;">T</span></li>
												<li><span return onclick="day('wednesday')" style="margin-left: 5px;">W</span></li>
												<li><span return onclick="day('thursday')" style="margin-left: 5px;">T</span></li>
												<li><span return onclick="day('friday')" style="margin-left: 5px;">F</span></li>
												<li><span return onclick="day('saturday')" style="margin-left: 5px;">S</span></li>
												<li><span return onclick="day('sunday')" style="margin-left: 5px;">S</span></li>
										</ul>
								</div>
								<div style="width:100%; height:auto; float:left; margin-top:15px;">
									<form method="post" action="doctorview.php">
										<div class="slider-range"></div>
												<span class="time" style="float:left;margin-top:10px;"></span>
												<input type="hidden" name="hd" class="hd"/>
												<!--<div class="timeval"></div>-->
									</form>
									<?php
									if($_POST['hd'])
									{
									echo $_POST['hd']."---";
									}
									?>	
												<script src="js/jquery-ui.min.js" type="text/javascript"></script>
												<script type="text/javascript">
													$(".slider-range").slider({
														range: true,
														min: 0,
														max: 1439,
														values: [540, 1020],
														slide: slideTime,
													});
													function slideTime(event, ui){
													
														var val0 = $(".slider-range").slider("values", 0),
															val1 = $(".slider-range").slider("values", 1),
															minutes0 = parseInt(val0 % 60, 10),
															hours0 = parseInt(val0 / 60 % 24, 10),
															minutes1 = parseInt(val1 % 60, 10),
															hours1 = parseInt(val1 / 60 % 24, 10);
																											
														startTime = getTime(hours0, minutes0);
														endTime = getTime(hours1, minutes1);
														$(".time").text(startTime + '-' + endTime);
														$(".hd").val(startTime + '-' + endTime);
														var xx=$(".hd").val();
														var hloc=$("#hlocation").val();
														var hspec=$("#hspecialityid").val();
														var hcityid=$("#hcityid").val();
														var hdoctorname=$("#hdoctorname").val();
														var hclinic=$("#hclinic").val();
														if (hloc!="" || hspec!="" || hcityid!="" || hdoctorname!="" || hclinic!="" )
														{
														    //alert(spec);
														$.ajax({url:"ajax_search.php?hd_spec="+hspec+'&loc='+hloc+'&hd_city='+hcityid+'&doct_name='+hdoctorname+'&clinic_name='+hclinic,success:function(result){
																
																  $(".timeval").html(result);
																  //alert("dddd");
																	}});
														}
														else
														{ 
														//alert("asas");
														$.ajax({url:"ajax_time.php?hdval="+xx,success:function(result){
																
																  $(".timeval").html(result);
																  //alert("dddd");
																	}});
														}
													}
													function getTime(hours, minutes) {
													
														var time = null;
														minutes = minutes + "";
														if (hours < 12) {
															time = "AM";
														}
														else {
															time = "PM";
														}
														if (hours == 0) {
															hours = 12;
														}
														if (hours > 12) {
															hours = hours - 12;
														}
														if (minutes.length == 1) {
															minutes = "0" + minutes;
														}
														
														return hours + ":" + minutes + "" + time;
														
													}
													
													slideTime();
												</script>
								</div>
						</div>
						<div id="content_boxright">
						    <input type="hidden" name="hlocation" id="hlocation" value="<?php echo $locname; ?>">
						    <input type="hidden" name="hspecialityid" id="hspecialityid" value="<?php echo $specialityid; ?>">
						    <input type="hidden" name="hcityid" id="hcityid" value="<?php echo $cityid; ?>">
						    <input type="hidden" name="hdoctorname" id="hdoctorname" value="<?php echo $doctor_name; ?>">
						    <input type="hidden" name="hclinic" id="hclinic" value="<?php echo $clinic_name; ?>">
						    <div class="timeval">
							
						    </div>
						</div>	
						<!--end of content box right-->
						</div>
				</div>
		</div>
</div>

<div id="bottom_contentbar">
		<div id="bottom_content">
				<div id="bottom_contentleft">
						<p class="text"><span style="color:#333; font-weight:bold; font-size:14px;">Frequent searches leading to this page</span></p>
						<ul>
						<?php
						$sqldet=mysql_query("select * from `details` limit 0,5");
						while($resdet=mysql_fetch_array($sqldet))
						{
						$sqlspecf=mysql_query("select * from `specification` where `slno`='$resdet[speciality]'");
						$resspecf=mysql_fetch_array($sqlspecf);
						$sqlcty=mysql_query("select * from `city` where `slno`='$resdet[city]'");
						$rescty=mysql_fetch_array($sqlcty);
						?>
						<li><a href="doctorview.php?funcslno=<?php echo $resdet['slno'];?>"><?php //echo $resspecf['name'];?><?php echo $resdet['functionality_name'];?> in <?php echo $rescty['cityname'];?>, </a></li>
								<!--<li><a href="#"> Orthopedic Doctors in Airport, </a></li>
								<li><a href="#">Bhubaneswar, </a></li>
								<li><a href="#">Orthopedic Clinics Airport,</a></li>-->
						<?php
						}
						?>	
						</ul>
				</div>
				<div id="bottom_contentright">
						<p class="text"><span style="color:#333; font-weight:bold; font-size:14px;">Most searched localities in Bhubaneswar</span></p>
						<ul>
							<?php
						$sqldet=mysql_query("select * from `details` limit 0,5");
						while($resdet=mysql_fetch_array($sqldet))
						{
						$sqlspecf=mysql_query("select * from `specification` where `slno`='$resdet[speciality]'");
						$resspecf=mysql_fetch_array($sqlspecf);
						?>
						<li><a href="doctorview.php?hd_spec=<?php echo $resdet['speciality'];?>&locat=<?php echo $resdet['location'];?>"><?php echo $resspecf['name'];?> Doctors in <?php echo $resdet['location'];?>, </a></li>
								<!--<li><a href="#"> Orthopedic Doctors in Airport, </a></li>
								<li><a href="#">Bhubaneswar, </a></li>
								<li><a href="#">Orthopedic Clinics Airport,</a></li>-->
						<?php
						}
						?>	
						</ul>
				</div>
		</div>
</div>


<div id="footer">
		<div id="footer_box">
				<div class="footer_content">
						<ul>
								<li style="font-weight:bold; font-size:13px;">Practo</li>
								<li><a href="#">Search for doctors</a></li>
								<li><a href="#">Doctors directory</a></li>
								<li><a href="#">Advertise</a></li>
						</ul>
				</div>
				<div class="footer_content">
						<ul>
								<li style="font-weight:bold; font-size:13px;">For Doctors</li>
								<li><a href="#">Search for doctors</a></li>
								<li><a href="#">Doctors directory</a></li>
								<li><a href="#">Advertise</a></li>
						</ul>
				</div>
				<div class="footer_content">
						<ul>
								<li style="font-weight:bold; font-size:13px;">For Doctors</li>
								<li><a href="#">Search for doctors</a></li>
								<li><a href="#">Doctors directory</a></li>
								<li><a href="#">Advertise</a></li>
						</ul>
				</div>
				<div class="footer_content">
						<ul>
								<li style="font-weight:bold; font-size:13px;">For Doctors</li>
								<li><a href="#">Search for doctors</a></li>
								<li><a href="#">Doctors directory</a></li>
								<li><a href="#">Advertise</a></li>
						</ul>
				</div>
				<div class="footer_content">
						<ul>
								<li style="font-weight:bold; font-size:13px;">For Doctors</li>
								<li><a href="#">Search for doctors</a></li>
								<li><a href="#">Doctors directory</a></li>
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
</html><?php } else { header("location:index.php");}?>
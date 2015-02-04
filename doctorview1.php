<?php
include_once('function.php');
if($_GET['loc']){
 $getlocation=$_GET['loc'];
}
if($_GET['day']){
 $getday=$_GET['day'];
}
$locname=$_REQUEST['locat'];
$specialityid=$_REQUEST['hd_spec'];
$cityid=$_REQUEST['hd_city'];
$doctor_name=$_REQUEST['doct_name']; 
$clin=$_REQUEST['clinic_name'];
$clinic_name=htmlentities($clin,ENT_QUOTES);
$sqlcheck=mysql_query("select * from `details` where `location`='$locname' or `speciality`='$specialityid' or `city`='$cityid' or `doctor_name`='$doctor_name' or `functionality_name`='$clinic_name'");
$numcheck=mysql_num_rows($sqlcheck);
if($numcheck<0){
}
else
{
$search_arr=array(); 
if($locname!='0')
{
    $search_arr['location']=$locname;
} 
if($speciality!='0')
{
    $search_arr['speciality']=$specialityid;
} 
if($city!='0')
{
    $search_arr['city']=$cityid;
}
if($doctor_name!='')
{
    $search_arr['doctor_name']=$doctor_name;
}
if($clinic_name!='')
{
    $search_arr['functionality_name']=$clinic_name;
}
$query='';
foreach($search_arr as $key=>$value)
{
if($value!=""){
    $query.="`$key`='$value' and";
	}
} 
$query=substr($query,0,-3);
$queryval="select * from `details` where $query";

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

	if(isset($_GET['msg']))
	{
	$message=$_GET['msg'];
	echo "<script type='text/javascript'>alert('$message');</script>";
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
function showdetail(nval) {
var loctt=$('#hd_loctt'+nval).val();
 if($('#checkboxG'+nval).is(":checked")) {
$.ajax({url:"view_location.php?locatn="+loctt,success:function(result){															
$(".loctval").html(result);
}});
var inps =document.getElementById('hd_chval').value-1;
for(i=1;inps>=i;i++)
{
if(i!=nval)
{
$('#checkboxG'+i).attr('checked',false);
$('#chk').attr('checked',false);

}
}
}
}

function showinstant()
{
 if($('#chk').is(":checked")) {
// alert("ddd");
var checkedVal= $('#chk:checkbox:checked').map(function() {
    return this.value;
}).get();
window.location.href="doctorview_instant.php?checkval="+checkedVal;
}
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
											 <a href="index.php">Home</a>
										</div>
										<?php
										if(isset($_SESSION['user']) OR isset($_SESSION['doctor']) OR isset($_SESSION['cost_slno']))
										{
										    ?>
										<div class="menu2">
										  <a href="logout.php">Logout</a>
										</div><?php } else {?>
										<div class="menu2">
										  <a href="#" class="big-link" data-reveal-id="myModal" data-animation="none">Log in</a>
										</div>
										<div class="menu2">
										    <!--<a href="user_register.php">Register</a>-->
										    <a href="#" class="big-link" data-reveal-id="myModal3" data-animation="none">Register</a>
										</div>
										<?php }?>
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
											 <a href="index.php">Home</a>
										</div>
										<?php
										if(isset($_SESSION['user']) OR isset($_SESSION['doctor']) OR isset($_SESSION['cost_slno']))
										{
										    ?>
										<div class="menu2">
										  <a href="logout.php">Logout</a>
										</div><?php } else {?>
										<div class="menu2">
										  <a href="#" class="big-link" data-reveal-id="myModal" data-animation="none">Log in</a>
										</div>
										<div class="menu2">
										   <!-- <a href="user_register.php">Register</a>-->
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
								       <td><input type="text" name="username" class="form" ></td>
								      </tr>
								      <tr>
								       <td>Password</td>
								       <td><input type="password" name="userpass" class="form" ></td>
								      </tr>
								      <tr>
								       <td><input type="submit" name="loguser" value="login"></td>
								      <!--<td>New User Register Now<input type="submit" name="regisub" value="register"></td>-->
								      </tr>
								     </table>
								    </form>
								   <a class="close-reveal-modal">&#215;</a>
								</div>
								<div id="myModal3" class="reveal-modal">
									 New Register
								    <form name="myform2" action="userinsert.php" method="post">
								     <table>
								      <tr>
								       <td>Name</td>
								       <td><input type="text" name="user" class="form" required ></td>
								      </tr>
								      <tr>
								       <td>email</td>
								       <td><input type="email" name="email" class="form" required ></td>
								      </tr>
								       <tr>
								       <td>Password</td>
								       <td><input type="password" name="pass" class="form" required ></td>
								      </tr>
								      <tr>
								       <td>contact</td>
								       <td><input type="text" name="contact" class="form" required ></td>
								      </tr>
								      <tr>
								       <td>address</td>
								       <td><input type="text" name="address" class="form" required ></td>
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
						<div id="content_boxleft">
								<div class="list_head box3">
										Appointment
								</div>
								<div class="list_box ">
										<ul>
										<?php
										    $j=1;
										?>
												<li><input type="checkbox" name="chk" id="chk"  class="css-checkbox" onClick="return showinstant();" value="1"/>
												<label for="chk" class="css-label">
												<a href="doctorview_instant.php" style="text-decoration: none; color:#818181; text-transform:capitalize;">
												Instant Booking
												</a>
												</label>
												</li>
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
											{ 
											$location=$locationfound['location'];
										    ?>
												<li>
													<input type="hidden" name="hd_loctt" id="hd_loctt<?php echo $n;?>" value="<?php echo $location;?>" />
													<input type="checkbox" name="checkboxG<?php echo $n;?>" id="checkboxG<?php echo $n;?>"  class="css-checkbox" onClick="return showdetail(<?php echo $n;?>);"/>
													<label for="checkboxG<?php echo $n;?>" class="css-label">
													<!--<a href="doctorview.php?loc=<?php echo $location;?>" style="text-decoration: none; color:#818181; text-transform:capitalize;">-->
													<span style="text-transform:capitalize;">
													<?php echo $locationfound['location']; ?>
													</span>
													<!--</a>-->
													</label>
												</li>
												<?php 
												$n++; 
												}
												?>
												<input type="hidden" id="hd_chval" value="<?php echo $n;?>"/>
										</ul>
								</div>
								<div class="list_head" style="margin-top:15px;">
										Availability 
								</div>
								<div id="day_list">
										<ul>
												<li><a href="doctorview.php" style="background:#6f6f6f; color:#fff; border-radius:5px 0px 0px 5px;">ANY</a></li>
												<li><a href="doctorview.php?day=Monday">M</a></li>
												<li><a href="doctorview.php?day=Tuesday">T</a></li>
												<li><a href="doctorview.php?day=Wednesday">W</a></li>
												<li><a href="doctorview.php?day=Thursday">T</a></li>
												<li><a href="doctorview.php?day=Friday">F</a></li>
												<li><a href="doctorview.php?day=Saturday">S</a></li>
												<li><a href="doctorview.php?day=Sunday">S</a></li>
										</ul>
								</div>
								<div style="width:100%; height:auto; float:left; margin-top:15px;">
									<div style="width:200px;">
										<div class="slider-range"></div>
											<form method="post" action="doctorview.php">
												<span class="time" style="float:left;margin-top:10px;"></span>
												<input type="submit" name="subb" value="go" style="margin-left:42px; margin-top:7px; font-size:11px;"/>
												<input type="hidden" name="hdtime" class="hd"/>
											</form>
												
											<!--<div class="timeval"></div>-->
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
														/* $.ajax({url:"view.php?hdval="+xx,success:function(result){
																
																  $(".timeval").html(result);
																	}});*/
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
						</div>
						<div id="content_boxright">
						    <?php
						    if($query!="")
						    {
							$detailsfetch=mysql_query("select * from `details` where $query");
						    $n=mysql_num_rows($detailsfetch);
						    }
						    elseif($_GET['loc'])
						    {
							$detailsfetch=mysql_query("select * from `details` where `location`='$getlocation'");
						    $n=mysql_num_rows($detailsfetch);
						    }
							elseif($_GET['funcslno'])
						    {
							$funcslno=$_GET['funcslno'];
							$detailsfetch=mysql_query("select * from `details` where `slno`='$funcslno'");
						    $n=mysql_num_rows($detailsfetch);
						    }
						    elseif($_GET['day'])
						    {
							$fetchday=mysql_query("select * from `timing` where `day`='$getday'");
						    $n=mysql_num_rows($fetchday);
						    }
							 elseif($_POST['hdtime'])
						    {
						    $timval=$_POST['hdtime'];
						    $tidate = date("Y-m-d");
						    $tisepparator = '-';
						    $tiparts = explode($tisepparator, $tidate);
						    $tidayForDate = date("l", mktime(0, 0, 0, $tiparts[1], $tiparts[2], $tiparts[0]));
								     
							//echo "select * from timing where session_1st like '$atival%' and `day`='$tidayForDate'";
							
						    $atival=$timval[0];
						    $fetchtime=mysql_query("select * from timing where session_1st like '$atival%' and `day`='$tidayForDate'");
						    $n=mysql_num_rows($fetchtime);
						    }
						    else{
						    $detailsfetch=mysql_query("select * from `details`");
						    $n=mysql_num_rows($detailsfetch);
						    }
						    ?>
							<div class="loctval">
								<div id="content_righthead">
											<div class="list_head" style="font-weight:normal; padding-left:3%; width:40%; font-size:13px;">
										 		<?php echo $n;?> matches found for <span style="font-weight:bold;">
												<?php 
												if($_POST['hd_spec'])
												{
												$sname=$_POST['hd_spec'];
												$sqlsp=mysql_query("select * from `specification` where `slno`='$sname'");
												$ressp=mysql_fetch_array($sqlsp);
												echo $ressp['name'];
												}
												
												if($_POST['hd_city'])
												{
												$ctname=$_POST['hd_city'];
												$sqlct=mysql_query("select * from `city` where `slno`='$ctname'");
												$resct=mysql_fetch_array($sqlct);
												if($_POST['hd_spec'])
												{
												echo ",".$resct['cityname'];
												}
												else{echo $resct['cityname'];}
												
												}
												
												if($_POST['doct_name'])
												{
												
												echo $doctor_name=$_POST['doct_name'];
												}
												if($_POST['clinic_name'])
												{
												
												echo $clname=$_POST['clinic_name'];
												}
												?>
												</span> in <?php if($_GET['loc']){ echo $getlocation; } else { echo "india";}?>
											</div>	
											<div class="list_head" style="font-weight:normal; padding-left:3%; width:22%;  line-height:1.3; background:none; text-align:right; float:right;  font-size:13px; margin-bottom:5px;">
										 		 <span style=" color:#244bb3;">How we rank doctors (PRA)</span>
												 <br />
												 <span style="font-weight:bold;">Helpline</span> <span>+91 9590908080</span>
											</div>	
								</div>
								<?php
								if($_GET['day'])
								    {?>
								    <div id="rightcontent">
									 
								    <?php
									$fetday=mysql_query("select * from `timing` where `day`='$getday'");
									while($resday=mysql_fetch_array($fetday))
									{
									    $uid=$resday['uid'];
									    $fetdetails=mysql_query("select * from `details` where `uniqueid`='$uid'");
									    $r=mysql_fetch_array($fetdetails);
										$im=$r['image'];
										$dimg=ltrim($im,"../");
									    ?>
									    <div class="rightcontent_box">
												<div class="right_imgbox">
														<?php if($im){?><img src="admin/<?php echo  $dimg;?>"  /><?php } else {?>
														<img src="admin/upload/aswini.png" /><?php }?><!--<img src="admin/<?php //echo  $dimg;?>"  />--->
												</div>
												<div class="right_textbox doctor_view">
														<h2 class="head1">
																<a href="doctordetails.php?uid=<?php echo $uid;?>" style="color: #244BB3; text-decoration:none;"><?php echo $r['doctor_name'];?></a>
																<br />
																<span class="head2"><?php echo $r['designation'];?></span>
														</h2>
														<p class="text">
														    <?php
														    $speciality=$r['speciality'];
														    $specialityfetc=mysql_query("select * from `specification` where `slno`='$speciality'");
														    $resspeciality=mysql_fetch_array($specialityfetc);
														    ?>
																 <?php echo $r['experience'];?>years experience <?php echo $resspeciality['name']; ?>
																 <br />
																 <br />
																 <?php echo $r['functionality_name'];?> 
														</p>
														<div class="clinic">
														    <?php
														    $fetch1=mysql_query("select * from `functionality` where `name`='$r[functionality_name]'");
														    $fres=mysql_fetch_array($fetch1);
														    $slno=$fres['slno'];
														    $fetch2=mysql_query("select * from `image` where `functionalityname_id`='$slno'");
														    while($fimageres=mysql_fetch_array($fetch2))
														    {
															$imm=$fimageres['image'];
															$dimgg=ltrim($imm,"../");
														    ?>
																<img src="admin/<?php echo $dimgg;?>"  /><?php }?>
														</div>
												</div>
												<div class="right_textbox2">
														<div class="airport" style="width:120px; text-transform:capitalize;">
																<?php echo $r['location'];?>
														</div></br>
														<div class="airport" style="background:url(images/icon4.png) no-repeat left;">
																INR <?php $total=0;   $fee=$r['fee'];  $extra=$fee*0.23;   echo $total=$fee+$extra;?>
														</div>	
														<div style="clear:both;"></div>
														<div class="airport" style="background:url(images/icon5.png) no-repeat left;">
														    <?php
														    $uid=$r['uniqueid'];
														    $sql=mysql_query("SELECT DISTINCT  `session_1st` FROM  `timing`  where `uid`='$uid'");
														    while($res=mysql_fetch_array($sql))
														    { 
														      $m=$res['session_1st'];
														    $que=mysql_query("select DISTINCT  `session_2nd` from `timing` where `uid`='$uid' and `session_1st`='$m'") or die(mysql_error());
														    while($que1=mysql_fetch_array($que))
														    {
														    $m1=$que1['session_2nd'];
														    
															  $fetch=mysql_query("select * from `timing` where `session_1st`='$m' and `session_2nd`='$m1' and `uid`='$uid'  ")or die(mysql_error());
														     $num=mysql_numrows($fetch);
														    if($num>0){
														      $day="";
														      while($found=mysql_fetch_array($fetch))
														      {
															 $day=$day.",".$found['day'];
															 $t=$found['session_2nd'];
														      }?>
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
														      if($m1!="" && $m1!='0:00AM-0:00AM' && $m1!='0:00AM-0:00PM' && $m1!='0:00PM-0:00AM' && $m1!='0:00PM-0:00PM')
														      {?>
														      <br />
														      <?php
															  $fmm=$m;
															if($fmm=='0:00AM-0:00AM')
															{
															echo $m1;
															}
															else
															{
															echo $m.",".$m1;
															}
														     //echo $m."kk,".$m1;
														      }
															  else
															  {
															  echo "<br />".$m;
															  }
														      ?><br /><?php
														    } 
														    } 
														    }
														    ?>
																<!--<span style="font-weight:bold; color: #6f6f78;">SUN</span>
																<br />
																9:00AM-1:00PM-->
														</div>
														<div class="button app" id="app<?php echo $uid;?>" onclick="return slide('<?php echo $uid;?>')">
																Book Appointment 
														</div>
												</div>
										</div>
										
										<div class="table_box" id="<?php echo $uid;?>" style="display:none;">
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
																<td rowspan="6" style="line-height:1.5;"><!--<span class="td_box">TODAY</span>--> 
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
														     if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate )
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {
														     $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
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
														    if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate )
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {
														     $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
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
														    if ($st_time1<=$time1 and $time1 < $end_time1 and $time1 < $currentt and $date==$currentdate )
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
														    if ($st_time<=$time and $time < $end_time and $time < $currentt  and $date==$currentdate)
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {
														    $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
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
														    if ($st_time1<=$time1 and $time1 < $end_time and $time1 < $currentt  and $date==$currentdate)
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
														    if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate )
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {
														    $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
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
														     $stime1="4:00PM";
														     $ltime1="6:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($st_time1<=$time1 and $time1 < $end_time1 and $time1 < $currentt  and $date==$currentdate)
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
														    if ($st_time<=$time and $time < $end_time and $time < $currentt and $date==$currentdate )
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range;?></a></span>
														    <?php }
														    elseif ($st_time<=$time and $time < $end_time)
														 {
														    $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
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
														 {
														    $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
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
														     $stime1="8:00PM";
														     $ltime1="11:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($st_time1<=$time1 and $time1 < $end_time1 and $time1 < $currentt and $date==$currentdate )
														    {
														    ?>
															<span><a href="#" style="color:#cdcdcd;"><?php echo $range1;?></a></span>
														    <?php }
														    elseif($st_time1<=$time1 and $time1 < $end_time1)
														 {$bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range1' and `date`='$date'");
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
													<?php $date=date('Y-m-d', strtotime($date. ' +1days')); }?>	
												</table>
												
										</div>
									    <?php
									}
								   ?> </div>
								   <?php 
								   }
								   elseif($_POST['hdtime'])
								   {
								   ?>
								   
								   
								   <div id="rightcontent">
									 
									<?php
									$adate = date("Y-m-d");
									$asepparator = '-';
									$aparts = explode($asepparator, $adate);
									$adayForDate = date("l", mktime(0, 0, 0, $aparts[1], $aparts[2], $aparts[0]));
								     
									$val=$_POST['hdtime'];
									 $aval=$val[0];
									$sqll=mysql_query("select * from timing where session_1st like '$aval%' and `day`='$adayForDate'");
									//echo "select * from timing where session_1st like '$aval%' and `day`='$adayForDate'";
									while($ress=mysql_fetch_array($sqll))
									{
									    $uid=$ress['uid'];
									    $fetdetails=mysql_query("select * from `details` where `uniqueid`='$uid'");
									    $r=mysql_fetch_array($fetdetails);
										$im=$r['image'];
										$dimg=ltrim($im,"../");
									    ?>
									    <div class="rightcontent_box">
												<div class="right_imgbox">
														<?php if($im){?><img src="admin/<?php echo  $dimg;?>"  /><?php } else {?>
														<img src="admin/upload/aswini.png" /><?php }?>
												</div>
												<div class="right_textbox doctor_view">
														<h2 class="head1">
																<a href="doctordetails.php?uid=<?php echo $uid;?>" style="color: #244BB3; text-decoration:none;"><?php echo $r['doctor_name'];?></a>
																<br />
																<span class="head2"><?php echo $r['designation'];?></span>
														</h2>
														<p class="text">
														    <?php
														    $speciality=$r['speciality'];
														    $specialityfetc=mysql_query("select * from `specification` where `slno`='$speciality'");
														    $resspeciality=mysql_fetch_array($specialityfetc);
														    ?>
																 <?php echo $r['experience'];?>years experience <?php echo $resspeciality['name']; ?>
																 <br />
																 <br />
																 <?php echo $r['functionality_name'];?> 
														</p>
														<div class="clinic">
														    <?php
														    $fetch1=mysql_query("select * from `functionality` where `name`='$r[functionality_name]'");
														    $fres=mysql_fetch_array($fetch1);
														    $slno=$fres['slno'];
														    $fetch2=mysql_query("select * from `image` where `functionalityname_id`='$slno'");
														    while($fimageres=mysql_fetch_array($fetch2))
														    {
															$imm=$fimageres['image'];
															$dimgg=ltrim($imm,"../");
														    ?>
																<img src="admin/<?php echo $dimgg;?>"  /><?php }?>
														</div>
												</div>
												<div class="right_textbox2">
														<div class="airport" style="width:120px; text-transform:capitalize;">
																<?php echo $r['location'];?>
														</div></br>
														<div class="airport" style="background:url(images/icon4.png) no-repeat left;">
																INR <?php $total=0;  $fee=$r['fee'];  $extra=$fee*0.23;   echo $total=$fee+$extra;?>
														</div>	
														<div style="clear:both;"></div>
														<div class="airport" style="background:url(images/icon5.png) no-repeat left;">
														    <?php
														    $uid=$r['uniqueid'];
														    $sql=mysql_query("SELECT DISTINCT  `session_1st` FROM  `timing`  where `uid`='$uid'");
														    while($res=mysql_fetch_array($sql))
														    { 
														      $m=$res['session_1st'];
														    $que=mysql_query("select DISTINCT  `session_2nd` from `timing` where `uid`='$uid' and `session_1st`='$m'") or die(mysql_error());
														    while($que1=mysql_fetch_array($que))
														    {
														    $m1=$que1['session_2nd'];
														    
															  $fetch=mysql_query("select * from `timing` where `session_1st`='$m' and `session_2nd`='$m1' and `uid`='$uid'  ")or die(mysql_error());
														     $num=mysql_numrows($fetch);
														    if($num>0){
														      $day="";
														      while($found=mysql_fetch_array($fetch))
														      {
															 //$day=$found['day'].",".$day;
															 $day=$day.",".$found['day'];
															 $t=$found['session_2nd'];
														      }?>
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
														      {?>
														      <br />
														      <?php
															  $fsesion=$m;
														      if($fsesion=='0:00AM-0:00AM' || $fsesion=='0:00AM-0:00PM' || $fsesion=='0:00PM-0:00PM' || $fsesion=='0:00PM-0:00AM')
															  {
															  echo $m1;
															  }
															  else{
															  echo $fsesion.",".$m1;
															  }
															 //echo $m.",".$m1;
														      }
															  else
															  {
															  echo "<br />".$m;
															  }
														      ?><br /><?php
														    } 
														    } 
														    }
														    ?>
																<!--<span style="font-weight:bold; color: #6f6f78;">SUN</span>
																<br />
																9:00AM-1:00PM-->
														</div>
														<div class="button app" id="app<?php echo $uid;?>" onclick="return slide('<?php echo $uid;?>')">
																Book Appointment 
														</div>
												</div>
										</div>
										
										<div class="table_box" id="<?php echo $uid;?>" style="display:none;">
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
																<td rowspan="6" style="line-height:1.5;"> <!--<span class="td_box">TODAY</span>--> 
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
														 {
														     $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
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
														 {
														    $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
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
														 {
														    $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
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
														    elseif ($st_time<=$time1 and $time1 < $end_time1)
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
															    <?php } } ?>
																
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
															    <?php } } ?>
																
																
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
															    <?php } } ?>
																
																
																
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
														 {$bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range1' and `date`='$date'");
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
													<?php $date=date('Y-m-d', strtotime($date. ' +1days')); }?>	
												</table>
												
										</div>
									    <?php
									}
								   ?> </div>

								   <?php
								   //echo $_POST['hd'];
								   }
								   else
								   {
								?>
					<div id="rightcontent">
								    <?php
								    while($r=mysql_fetch_array($detailsfetch))
								    { $uid=$r['uniqueid'];
									$im=$r['image'];
									$dimg=ltrim($im,"../");
								    ?>
									<!--<div class="timeval">-->
										<div class="rightcontent_box">
												<div class="right_imgbox">
														<?php if($im){?><img src="admin/<?php echo  $dimg;?>"  /><?php } else {?>
														<img src="admin/upload/aswini.png" /><?php }?>
												</div>
												<div class="right_textbox doctor_view">
														<h2 class="head1">
																<a href="doctordetails.php?uid=<?php echo $uid;?>" style="color: #244BB3; text-decoration:none;"><?php echo $r['doctor_name'];?></a>
																<br />
																<span class="head2"><?php echo $r['designation'];?></span>
														</h2>
														<p class="text">
														    <?php
														    $speciality=$r['speciality'];
														    $specialityfetc=mysql_query("select * from `specification` where `slno`='$speciality'");
														    $resspeciality=mysql_fetch_array($specialityfetc);
														    ?>
																 <?php echo $r['experience'];?>years experience <?php echo $resspeciality['name']; ?>
																 <br />
																 <br />
																 <?php echo $r['functionality_name'];?> 
														</p>
														<div class="clinic">
														    <?php
														    $fetch1=mysql_query("select * from `functionality` where `name`='$r[functionality_name]'");
														    $fres=mysql_fetch_array($fetch1);
														    $slno=$fres['slno'];
														    $fetch2=mysql_query("select * from `image` where `functionalityname_id`='$slno'");
														    while($fimageres=mysql_fetch_array($fetch2))
														    {
															$imm=$fimageres['image'];
															$dimgg=ltrim($imm,"../");
														    ?>
																<img src="admin/<?php echo $dimgg;?>"  /><?php }?>
														</div>
												</div>
												<div class="right_textbox2">
														<div class="airport" style="width:120px; text-transform:capitalize;">
																<?php echo $r['location'];?>
														</div></br>
														<div class="airport" style="background:url(images/icon4.png) no-repeat left;">
																INR <?php $total=0;  $fee=$r['fee'];  $extra=$fee*0.23;   echo $total=$fee+$extra;?>
														</div>	
														<div style="clear:both;"></div>
														<div class="airport" style="background:url(images/icon5.png) no-repeat left;">
														    <?php
															$strf="";
														    $uid=$r['uniqueid'];
														    $sql=mysql_query("SELECT DISTINCT  `session_1st` FROM  `timing`  where `uid`='$uid'");
														    while($res=mysql_fetch_array($sql))
														    { 
														      $m=$res['session_1st'];
														    $que=mysql_query("select DISTINCT  `session_2nd` from `timing` where `uid`='$uid' and `session_1st`='$m'") or die(mysql_error());
														    while($que1=mysql_fetch_array($que))
														    {
														    $m1=$que1['session_2nd'];
														    
															  $fetch=mysql_query("select * from `timing` where `session_1st`='$m' and `session_2nd`='$m1' and `uid`='$uid'  ")or die(mysql_error());
														     $num=mysql_numrows($fetch);
														    if($num>0){
														      $day="";
														      while($found=mysql_fetch_array($fetch))
														      {
															 //$day=$found['day'].",".$day;
															 $day=$day.",".$found['day'];
															 $t=$found['session_2nd'];
														      }?>
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
														      {?>
														      <br />
														      <?php
															  $fsesion=$m;
															    if($fsesion=='0:00AM-0:00AM' || $fsesion=='0:00AM-0:00PM' || $fsesion=='0:00PM-0:00PM' || $fsesion=='0:00PM-0:00AM')
															  {
															  echo $m1;
															  }
															  else{
															  echo $fsesion.",".$m1;
															  }
														      //echo $m.",".$m1;
														      }
															  else
															  {
															  echo "<br />".$m;
															  
															  }
														      ?><br /><?php
														    } 
														    } 
														    }
														    ?>
																<!--<span style="font-weight:bold; color: #6f6f78;">SUN</span>
																<br />
																9:00AM-1:00PM-->
														</div>
														<div class="button app" id="app<?php echo $uid;?>" onclick="return slide('<?php echo $uid;?>')">
																Book Appointment 
														</div>
												</div>
										</div>
										
										<div class="table_box" id="<?php echo $uid;?>" style="display:none;">
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
															    <?php } } ?>
																
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
															    <?php } } ?>
																
																
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
															    <?php } } ?>
																
																
																
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
										<!--timeval start-->
										<!--</div>-->
										
										<!--timeval end-->
										<?php
										}
										?>
										
										<?php
										}?>
										
								
								
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
</html>
<?php
}
?>
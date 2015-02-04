<?php
include_once('admin/function.php');
if($_REQUEST['hd_city']!='')
{
$area=$_REQUEST['hd_city'];

$locname=locationname($area);
if(isset($_GET['day']))
{
 $day=$_GET['day'];

 $query=mysql_query("select * from `doctor_details` where id in(SELECT `doctor_id` FROM `schedule` WHERE `$day` LIKE '$area|%')");
}
else{
$query=mysql_query("select * from `doctor_details` where id in(SELECT `doctor_id` FROM `schedule` WHERE `sunday` LIKE '$area|%' OR `monday` LIKE '$area|%'
OR `tuesday` LIKE '$area|%'
OR `wednesday` LIKE '$area|%'
OR `thursday` LIKE '$area|%'
OR `friday` LIKE '$area|%'
OR `saturday` LIKE '$area|%')");
}


$count=mysql_num_rows($query);

}

if($_REQUEST['hd_doctor']!='')
{
   
 $area=$_REQUEST['hd_doctor'];
 $query=mysql_query("select * from `doctor_details` where id='$area'");
 $count=mysql_num_rows($query);
}

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
        
		 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
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
		</script>
		
		<link rel="stylesheet" href="css/reveal.css">	
		<script type="text/javascript" src="jquery-1.6.min.js"></script>
		<script type="text/javascript" src="js/jquery.reveal.js"></script>
		
		
		<script>
function showdetail(nval) {
var loctt=$('#hd_loctt'+nval).val();
 if($('#checkboxG'+nval).is(":checked")) {
 
$.ajax({url:"viewdocby_location.php?locatn="+loctt,success:function(result){															
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
</script>
                
                
                
<script>
	    function slidediv_schedd(val_id) {

		
              $("#schedule"+val_id).slideToggle( "slow", function() {
						  });
					
                
					
					
	    }
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
<div id="topbar">
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
										<div class="menu2">
										  <a href="#">Log in</a>
										</div>
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
										<form class="form-wrapper search_form">
											<div class="form_box">
											<input type="text" placeholder="eg. Dentist,Gynecologist" class="mobile_form" required autocomplete="off" style="border-radius:none;"/>
											</div>
											<div class="form_box2">
											<input type="text" placeholder="eg. Vanivihar" required class="mobile_form input_box" autocomplete="off"/>
											
											</div>
											
											<input type="submit" value="" class="submit" />
									

										</form>
								</div>
								<div id="tab-2">
									<form class="form-wrapper search_form">
											<div class="form_box3">
											<input type="text" placeholder="eg. Dr. Aswini Kar" required autocomplete="off" class="mobile_form2"  />
											</div>
											<input type="submit" value="" class="submit" />
								  </form>
								</div>
								<div id="tab-3">
									<form class="form-wrapper search_form">
											<div class="form_box3">
											<input type="text" placeholder="eg. kar Clinic" required autocomplete="off" class="mobile_form2" />
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
											 <a href="#">Bhubaneswar</a>
										</div>
										<div class="menu2">
										    <a href="#">Get Listed</a>
										</div>
										<div class="menu2">
										    <a href="#" class="big-link" data-reveal-id="myModal" data-animation="none">Log in</a>
										</div>
                				</div>
								<div id="myModal" class="reveal-modal">
									<h1>Reveal Modal Goodness</h1>
									<p>This is a default modal in all its glory, but any of the styles here can easily be changed in the CSS.</p>
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
										 $locationfetch=mysql_query("select * from `location` group by `area`");
											while($locationfound=mysql_fetch_array($locationfetch))
											{ 
											$location=$locationfound['area'];
											?>
												<li>
												 <input type="hidden" name="hd_loctt" id="hd_loctt<?php echo $n;?>" value="<?php echo $locationfound['id'];?>" />
												 <input type="checkbox" name="checkboxG<?php echo $n;?>" id="checkboxG<?php echo $n;?>"  class="css-checkbox" onClick="return showdetail(<?php echo $n;?>);" />
												 <label for="checkboxG<?php echo $n;?>" class="css-label">
												 <?php echo $location?>
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
												<li><a href="doctorview.php?hd_city=<?php echo $area?>" style="background:#6f6f6f; color:#fff; border-radius:5px 0px 0px 5px;">ANY</a></li>
												<li><a href="doctorview.php?day=monday&hd_city=<?php echo $area?>">M</a></li>
												<li><a href="doctorview.php?day=tuesday&hd_city=<?php echo $area?>">T</a></li>
												<li><a href="doctorview.php?day=wednesday&hd_city=<?php echo $area?>">W</a></li>
												<li><a href="doctorview.php?day=thrusday&hd_city=<?php echo $area?>">T</a></li>
												<li><a href="doctorview.php?day=friday&hd_city=<?php echo $area?>">F</a></li>
												<li><a href="doctorview.php?day=saturday&hd_city=<?php echo $area?>">S</a></li>
												<li><a href="doctorview.php?day=sunday&hd_city=<?php echo $area?>">S</a></li>
										</ul>
								</div>
								<div style="width:100%; height:auto; float:left; margin-top:15px;">
										<div id="slider-range"></div>
												<span id="time"></span>
											  
												<script src="js/jquery-ui.min.js" type="text/javascript"></script>
												<script type="text/javascript">
													$("#slider-range").slider({
														range: true,
														min: 0,
														max: 1439,
														values: [540, 1020],
														slide: slideTime
													});
													function slideTime(event, ui){
														var val0 = $("#slider-range").slider("values", 0),
															val1 = $("#slider-range").slider("values", 1),
															minutes0 = parseInt(val0 % 60, 10),
															hours0 = parseInt(val0 / 60 % 24, 10),
															minutes1 = parseInt(val1 % 60, 10),
															hours1 = parseInt(val1 / 60 % 24, 10);
															
														startTime = getTime(hours0, minutes0);
														endTime = getTime(hours1, minutes1);
														$("#time").text(startTime + ' - ' + endTime);
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
														return hours + ":" + minutes + " " + time;
													}
													slideTime();
												</script>
								</div>
						</div>
						<div id="content_boxright">
						 <div class="loctval">
								<div id="content_righthead">
											<div class="list_head" style="font-weight:normal; padding-left:3%; width:40%; font-size:13px;">
										 		<?php echo $count?> matches found for <span style="font-weight:bold;">Doctors</span> in <?php echo $locname?>
											</div>	
											<div class="list_head" style="font-weight:normal; padding-left:3%; width:22%;  line-height:1.3; background:none; text-align:right; float:right;  font-size:13px; margin-bottom:5px;">
										 		 <span style=" color:#244bb3;">How we rank doctors (PRA)</span>
												 <br />
												 <span style="font-weight:bold;">Helpline</span> <span>+91 9590908080</span>
											</div>	
								</div>
								<?php
								while($result=mysql_fetch_array($query))
								{
								 $img=$result['picture'];
								 $imgval=explode('../',$img);
								?>
								
								<div id="rightcontent">
										<div class="rightcontent_box">
												<div class="right_imgbox">
														<img src="admin/<?php echo $imgval[1]?>"  />
												</div>
												<div class="right_textbox doctor_view">
														<h2 class="head1">
																<a href="doctordetails.htm" style="color: #244BB3; text-decoration:none;">Dr.<?php echo $result['name']?></a>
																<br />
																<span class="head2"><?php echo $result['qualification']?></span>
														</h2>
														<p class="text">
																 <?php echo $result['expr_year']?> years experience <?php echo $result['specialization'];?>
																 <br />
																 <br />
																  <?php echo $result['specialist']?>
														</p>
														<div class="clinic" style="display:none;">
																<img src="images/img1.jpg"  />
																<img src="images/img1.jpg"  />
																<img src="images/img1.jpg"  />
														</div>
												</div>
												<div class="right_textbox2">
														<div class="airport">
																Airport, Bhubaneswar
														</div>
														<div class="airport" style="background:url(images/icon4.png) no-repeat left;">
																INR 200 
														</div>	
														<div style="clear:both;"></div>
														<div class="airport" style="background:url(images/icon5.png) no-repeat left;">
																<span style="font-weight:bold; color: #6f6f78;">MON-SAT</span>
																<br />
																5:00PM-9:00PM
																<br />
																<span style="font-weight:bold; color: #6f6f78;">SUN</span>
																<br />
																9:00AM-1:00PM
														</div>
														<div class="button app" id="app<?php echo $result['id'];?>" onclick="return slidediv_schedd(<?php echo $result['id'];?>)">
																Book Appointment 
														</div>
                                                                                               </div>
                                                                                                
                                                                                                
                                                                                      
                                                                                                
                                                                                                
										</div>
                                                                                
                                                                                
                                                                                          
                                                                                                
                                                                                                   <div  id="schedule<?php echo $result['id'];?>" class="table_box1"  style="display:none;">
                                                                                                  
												<table cellpadding="6">
														<tr class="tr1">
																<th style="background:#ccc;">PREV DAY</th>
																<th colspan="2">MORNING</th>
																<th colspan="2">AFTERNOON</th>
																<th colspan="2">EVENING</th>
																<th>NIGHT</th>
														</tr>
                                                                                                                
                                                                                                                 <?php
                                                                                                                 $date=date("Y-m-d");
                                                                                                   $date = date('Y-m-d', strtotime($date. ' -1days'));
                                                                                                  
                                                                                                   $end_date = date('Y-m-d', strtotime($date. ' +2days'));
                                                                                                   while (strtotime($date) <= strtotime($end_date)) {
                                                                                                    $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
												    $day=strtolower(date("l", strtotime($date)));
												    ?>
												    <tr style="border-right:1px solid #ccc; border-collapse:collapse;">
																<td>
																		<span style="color:#333;"><?php echo date("l", strtotime($date)) ?></span>
																		<br /> 
																		<span style="color:#6f6f72;"><?php  $d=strtotime($date); echo date("M d", $d)?></span>
																</td>
																
												   <?php
												  $i=1;
												 $today=date('Y-m-d');
                                                                                                    $que=mysql_query("select $day,`id` from `schedule` where `doctor_id`='$result[id]'")or die(mysql_error());
												    while($res=mysql_fetch_array($que))
												    {
												     $valdet=$res[$day];
												    $val=explode("|",$valdet);
												   if($i==1)
												   {
												   
												    ?>
												    <td colspan="2">
												     <?php
												      if($val[2]!='-')
												      {
												     ?>
												     <a href="appointment.php?uid=<?php echo $res['id'];?>&time=<?php echo $val[2];?>&date=<?php echo $today;?>&docid=<?php echo $result['id']?>&fee=<?php echo $val[1]?>" style="text-decoration: none; color: #7fac5a;">
												    <?php echo $val[2]?>
												    </a>
												    <?php
												      }
												      ?>
												    </td>
												    <?php
												   }
												   elseif($i==2)
												   {
												   ?>
												   <td colspan="2">
												    <?php
												      if($val[2]!='-')
												      {
												     ?>
												    <a href="appointment.php?uid=<?php echo $res['id'];?>&time=<?php echo $val[2];?>&date=<?php echo $today;?>&docid=<?php echo $result['id']?>&fee=<?php echo $val[1]?>" style="text-decoration: none; color: #7fac5a;">
												   <?php echo $val[2]?></a>
												   <?php
												      }
												      ?>
												   </td>
												   <?php
												   }
												   elseif($i==3)
												   {
												    ?>
												    <td colspan="2">
												    
												     <?php
												      if($val[2]!='-')
												      {
												     ?>
												     <a href="appointment.php?uid=<?php echo $res['id'];?>&time=<?php echo $val[2];?>&date=<?php echo $today;?>&docid=<?php echo $result['id']?>&fee=<?php echo $val[1]?>" style="text-decoration: none; color: #7fac5a;"><?php echo $val[2]?>
												     </a>
												     <?php
												      }
												      ?>
												    </td>
												    <?php
												   }
												   else{
												    ?>
												    <td>
												      <?php
												      if($val[2]!='-')
												      {
												       ?>
												     <a href="appointment.php?uid=<?php echo $res['id'];?>&time=<?php echo $val[2];?>&date=<?php echo $today;?>&docid=<?php echo $result['id']?>&fee=<?php echo $val[1]?>" style="text-decoration: none; color: #7fac5a;">
												    <?php echo $val[2]?></a>
												    <?php
												      }
												      ?>
												    </td>
												    <?php
												 
												   }
												    
												     $i++;
												    }
                                                                                                    
                                                                                                                ?>
																
														</tr>
                                                                                                               <?php
                                                                                                   }
                                                                                                   ?>
														
												</table>
										</div>
                                                                                
                                                                                
										<?php
										}
										?>
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
								<li><a href="#"> Orthopedic Doctors in Airport, </a></li>
								<li><a href="#">Bhubaneswar, </a></li>
								<li><a href="#">Orthopedic Clinics Airport,</a></li>
							
						</ul>
				</div>
				<div id="bottom_contentright">
						<p class="text"><span style="color:#333; font-weight:bold; font-size:14px;">Most searched localities in Bhubaneswar</span></p>
						<ul>
								
								<li><a href="#">Orthopedist near Airport, </a></li>
								<li><a href="#">Orthopedic Doctors in Airport, </a></li>
								<li><a href="#">Orthopedic Clinics in Kharavela Nagar, </a></li>
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

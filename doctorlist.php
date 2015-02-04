<?php
include_once('function.php');
$detailsfetch=mysql_query("select * from `details`");
								    while($r=mysql_fetch_array($detailsfetch))
								    {
								    ?>
										<div class="rightcontent_box">
												<div class="right_imgbox">
														<img src="admin/<?php echo  $r['image'];?>"  />
												</div>
												<div class="right_textbox doctor_view">
														<h2 class="head1">
																<a href="doctordetails.htm" style="color: #244BB3; text-decoration:none;"><?php echo $r['doctor_name'];?></a>
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
														    ?>
																<img src="admin/<?php echo $fimageres['image'];?>"  /><?php }?>
														</div>
												</div>
												<div class="right_textbox2">
														<div class="airport">
																<?php echo $r['location'];?>
														</div></br>
														<div class="airport" style="background:url(images/icon4.png) no-repeat left;">
																INR <?php echo $r['fee'];?>
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
														    <span style="font-weight:bold; color: #6f6f78;"> <?php echo $day;?></span>
														    <?php
														      if($m1!="" && $m1!='0:00AM-0:00AM' && $m1!='0:00AM-0:00APM' && $m1!='0:00PM-0:00AM' && $m1!='0:00PM-0:00PM')
														      {?>
														      <br />
														      <?php
														      echo $m.",".$m1;
														      }else{echo $m;}
														      ?><br /><?php
														    } 
														    } 
														    }
														    ?>
																<!--<span style="font-weight:bold; color: #6f6f78;">SUN</span>
																<br />
																9:00AM-1:00PM-->
														</div>
														<div class="button app">
																Book Appointment 
														</div>
												</div>
										</div>
										
										<div class="table_box table_box" style="display:none;">
												<table cellpadding="6">
														<tr class="tr1">
																<th style="background:#ccc;">PREV DAY</th>
																<th colspan="2">MORNING</th>
																<th colspan="2">AFTERNOON</th>
																<th colspan="2">EVENING</th>
																<th>NIGHT</th>
														</tr>
														<tr style="border-right:1px solid #ccc; border-collapse:collapse;">
																<td rowspan="6" style="line-height:1.5;"> <span class="td_box">TODAY</span> 
																		<br />
																		<span style="color:#333;">MON </span>
																		<br /> 
																		<span style="color:#6f6f72;">25 AUG</span>
																</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>5:00PM</td>
																<td>5:15PM</td>
																<td>5:30PM</td>
														</tr>
														<tr>
																
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>5:00PM</td>
																<td>5:15PM</td>
																<td>5:30PM</td>
														</tr>
														<tr>
																
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>5:00PM</td>
																<td>5:15PM</td>
																<td>5:30PM</td>
														</tr>
														<tr>
																
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>5:00PM</td>
																<td>5:15PM</td>
																<td>5:30PM</td>
														</tr>
														<tr>
																
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>5:00PM</td>
																<td>5:15PM</td>
																<td>5:30PM</td>
														</tr><tr>
																
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>&nbsp;</td>
																<td>5:00PM</td>
																<td>5:15PM</td>
																<td>5:30PM</td>
														</tr>
														
												</table>
												
										</div>
										<?php }?>
										<div class="rightcontent_box">
												<div class="right_imgbox">
														<img src="images/doctor1.jpg"  />
												</div>
												<div class="right_textbox doctor_view">
														<h2 class="head1">
																<a href="doctordetails.htm" style="color: #244BB3; text-decoration:none;">Dr.Niranjan kar</a>
																<br />
																<span class="head2">MS - Orthopaedics, MBBS </span>
														</h2>
														<p class="text">
																 44 years experience Orthopedist 
																 <br />
																 <br />
																 DR KAR'S Excellence 
														</p>
														<div class="clinic">
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
														<div class="button">
																Book Appointment 
														</div>
												</div>
										</div>
										
										<div class="rightcontent_box">
												<div class="right_imgbox">
														<img src="images/doctor1.jpg"  />
												</div>
												<div class="right_textbox doctor_view">
														<h2 class="head1">
																Dr.Niranjan kar
																<br />
																<span class="head2">MS - Orthopaedics, MBBS </span>
														</h2>
														<p class="text">
																 44 years experience Orthopedist 
																 <br />
																 <br />
																 DR KAR'S Excellence 
														</p>
														<div class="clinic">
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
														<div class="button">
																Book Appointment 
														</div>
												</div>
										</div>
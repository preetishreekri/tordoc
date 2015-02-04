<?php
include_once('function.php');
$val=$_GET['hdval'];
//echo $val;

$date = date("Y-m-d");
$sepparator = '-';
$parts = explode($sepparator, $date);
$dayForDate = date("l", mktime(0, 0, 0, $parts[1], $parts[2], $parts[0]));

$aval=$val[0];
$sqll=mysql_query("select * from timing where session_1st like '$aval%' and `day`='$dayForDate'");
$n=mysql_num_rows($sqll);
//echo "select * from timing where session_1st like '$aval%' and `day`='$dayForDate'";
?>
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
								<div id="rightcontent">
						
								    <?php
								    while($ress=mysql_fetch_array($sqll)){
											$uid=$ress['uid']; 
											$sqldetail=mysql_query("select * from `details` where `uniqueid`='$uid'");
											while($resdetail=mysql_fetch_array($sqldetail))
											{
											$im=$resdetail['image'];
											$dimg=ltrim($im,"../");
								    ?>
									<!--<div class="timeval">-->
										<div class="rightcontent_box">
												<div class="right_imgbox">
														<img src="admin/<?php echo  $dimg;?>"  />
												</div>
												<div class="right_textbox doctor_view">
														<h2 class="head1">
																<a href="doctordetails.php?uid=<?php echo $uid;?>" style="color: #244BB3; text-decoration:none;"><?php echo $resdetail['doctor_name'];?></a>
																<br />
																<span class="head2"><?php echo $resdetail['designation'];?></span>
														</h2>
														<p class="text">
														    <?php
														    $speciality=$resdetail['speciality'];
														    $specialityfetc=mysql_query("select * from `specification` where `slno`='$speciality'");
														    $resspeciality=mysql_fetch_array($specialityfetc);
														    ?>
																 <?php echo $resdetail['experience'];?>years experience <?php echo $resspeciality['name']; ?>
																 <br />
																 <br />
																 <?php echo $resdetail['functionality_name'];?> 
														</p>
														<div class="clinic">
														    <?php
														    $fetch1=mysql_query("select * from `functionality` where `name`='$resdetail[functionality_name]'");
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
														<div class="airport" style="width:120px;">
																<?php echo $resdetail['location'];?>
														</div></br>
														<div class="airport" style="background:url(images/icon4.png) no-repeat left;">
																INR <?php $fee=$resdetail['fee'];  $extra=$fee*0.23; echo $total=$fee+$extra;?>
														</div>	
														<div style="clear:both;"></div>
														<div class="airport" style="background:url(images/icon5.png) no-repeat left;">
														    <?php
															$strf="";
														    $uid=$resdetail['uniqueid'];
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
															//echo $day;
															$dayy=ltrim($day,",");
															 $dayy."<br/>";
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
															  if($mday!=""){   $mday; $mex=explode(",",$mday);  $mcx=count($mex);  $mfx=$mex[1];  $mlx=$mex[$mcx-1]; if($mfx==$mlx){ echo $mlx;} else{ echo $mfx."-".$mlx; }}
															  if($tday!=""){  $tday; $tex=explode(",",$tday); $tcx=count($tex);  $tfx=$tex[1];    $tlx=$tex[$tcx-1]; if($tfx==$tlx){ echo $tlx;} else{ echo $tfx."-".$tlx; }}
															  if($wday!=""){  $wday; $wex=explode(",",$wday); $wcx=count($wex);  $wfx=$wex[1];    $wlx=$wex[$wcx-1]; if($wfx==$wlx){ echo $wlx;} else{ echo $wfx."-".$wlx; }}
															  if($thday!=""){  $thday; $thex=explode(",",$thday); $thcx=count($thex);  $thfx=$thex[1]; $thlx=$thex[$thcx-1]; if($thfx==$thlx){ echo $thlx;} else{ echo $thfx."-".$thlx; }}
															  if($fday!=""){  $fday; $fex=explode(",",$fday); $fcx=count($fex);  $ffx=$fex[1]; $flx=$fex[$fcx-1]; if($ffx==$flx){ echo $flx;} else{ echo $ffx."-".$flx; }}
															  if($saday!=""){  $saday; $saex=explode(",",$saday); $sacx=count($saex);  $safx=$saex[1]; $salx=$saex[$sacx-1]; if($safx==$salx){ echo $salx;} else{ echo $safx."-".$salx; }}
															  if($suday!=""){  $suday; $suex=explode(",",$suday); $sucx=count($suex);  $sufx=$suex[1]; $sulx=$suex[$sucx-1]; if($sufx==$sulx){ echo $sulx;} else{ echo $sufx."-".$sulx; }}
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
															  echo $m;
															  
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
																<td rowspan="6" style="line-height:1.5;"><!-- <span class="td_box">TODAY</span> -->
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
														    if ($st_time<=$time and $time < $end_time )
														 { $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range;?>&date=<?php echo $date;?>"><?php echo $range;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } }?>
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
														    if ($st_time<=$time and $time < $end_time )
														 { $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range;?>&date=<?php echo $date;?>"><?php echo $range;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } }?>
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
														    if ($time >= $st_time and $time < $end_time )
														 { $bookfetch=mysql_query("select * from `appointment` where `doctor_uid`='$uid' and `time`='$range' and `date`='$date'");
														   $bookcount=mysql_numrows($bookfetch);
														   if($bookcount>0){
														 ?>
														     <span><a href="#" style="color: red;"><?php echo $range;?></a></span>
														     <?php } else {?><span><a href="appointment.php?uid=<?php echo $uid;?>&time=<?php echo $range;?>&date=<?php echo $date;?>"><?php echo $range;?></a></span>
														 <?php
														 }}
														?></br>
															    <?php } } ?>
																</td>
																<td>
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
														    if ($time1 >= $st_time1 and $time1 < $end_time1 )
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
														if($secondsession!="0:00AM-0:00AM"){
														 for( $i1 = $start1; $i1 <$end1; $i1 += $inc1 )
														{
														     $range1=date( 'g:i A', $i1 );
														     $stime1="6:00PM";
														     $ltime1="8:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($time1 >= $st_time1 and $time1 < $end_time1 )
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
														if($secondsession!="0:00AM-0:00AM"){
														 for( $i1 = $start1; $i1 <$end1; $i1 += $inc1 )
														{
														     $range1=date( 'g:i A', $i1 );
														     $stime1="8:00PM";
														     $ltime1="11:00PM";
														     $time1 = strtotime($range1);
														     $st_time1    =   strtotime($stime1);
														     $end_time1    =   strtotime($ltime1);
														    if ($time1 >= $st_time1 and $time1 < $end_time1 )
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
											<?php
								    }}
											?>	

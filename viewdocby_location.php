<?php
include_once('admin/function.php');
$area=$_GET['locatn'];


$query=mysql_query("select * from `doctor_details` where id in(SELECT `doctor_id` FROM `schedule` WHERE `sunday` LIKE '$area|%' OR `monday` LIKE '$area|%'
OR `tuesday` LIKE '$area|%'
OR `wednesday` LIKE '$area|%'
OR `thrusday` LIKE '$area|%'
OR `friday` LIKE '$area|%'
OR `saturday` LIKE '$area|%')");
$count=mysql_num_rows($query);
?>

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
														<div class="button app">
																Book Appointment 
														</div>
												</div>
										</div>
										
										<?php
										}
										?>
								</div>
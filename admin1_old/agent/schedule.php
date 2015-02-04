<?php
include_once("../function.php");
$id=$_GET['id'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="style.css" type="text/css" rel="stylesheet"  />
<style>
#content_bar{ width:100%; height:auto; float:left; margin-top:30px; margin-bottom:30px;}
#content{ width:960px; margin:auto;}
#content_box{ width:960px; height:auto; float:left; border:5px solid #000;}
#content_box1{width:940px; height:auto; float:left; margin:5px; border:2px solid #000;}
#head{ width:940px; height:auto; float:left; text-align:center;}

.head_text{ width:930px; height:auto; float:left; padding:5px; text-align:left; background:#2b7e1d; color:#000; font-size:15px; font-weight:bold; margin-top:20px;}

.table_box{ width:100%; height:auto; float:left;}
.table{width:98%; height:auto; float:left; margin-left:1%; line-height:2.6; margin-top:10px;}
.form{ width:400px; height:25px; border:1px solid #333; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#333;}
.form2{ width:98%; height:25px; border:1px solid #333; font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#333;}
.text{ font-family:Arial, Helvetica, sans-serif; margin-bottom:10px; margin-top:10px; line-height:1.6; color:#000; font-weight:bold; font-size:16px;}
.table1{width:98%; height:auto; float:left; margin-left:1%; margin-top:10px; border-collapse:collapse; border:1px solid #000;}
.table1 tr{ border-collapse:collapse; border:1px solid #000; height:23px;}
.table1 th{ border-collapse:collapse; border:1px solid #000; height:30px; background:#d8f8c1;}
.table1 tr td{ border-collapse:collapse; border:1px solid #000;}
.size{width:100px;}
</style>
</head>
<body>
<div id="content_bar">
		<div id="content">
				<div id="content_box">
						<div id="content_box1">
								
								<div class="head_text" style="margin-top:0px; text-align:center; color:#fff;">
										TIME SCHEDULE
								</div>
								<div class="table_box">
								<form action="insert_schedule.php" method="post">
										<table class="table1" style="margin-bottom:10px;">
												<tr>
														<th>&nbsp;</th>
														<th>&nbsp;</th>
														<th>Sunday</th>
														<th>Monday</th>
														<th>Tuesday</th>
														<th>Wednesday</th>
														<th>Thursday</th>
														<th>Friday</th>
														<th>Saturday</th>
												</tr>
												<tr>
												<input type="hidden" name="hd_id" value="<?php echo $id;?>"/>
														<td rowspan="4" align="center">1st</td>
														<td>Location<input type="hidden" name="hd[]" value="location"/></td>
														<td><input type="text" name="sun[]" class="size"/></td>
														<td><input type="text" name="mon[]" class="size"/></td>
														<td><input type="text" name="tues[]" class="size"/></td>
														<td><input type="text" name="wed[]" class="size"/></td>
														<td><input type="text" name="thru[]" class="size"/></td>
														<td><input type="text" name="fri[]" class="size"/></td>
														<td><input type="text" name="sat[]" class="size"/></td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>Time<input type="hidden" name="hd[]" value="time"/></td>
														<td><input type="text" name="sun[]" class="size"/></td>
														<td><input type="text" name="mon[]" class="size"/></td>
														<td><input type="text" name="tues[]" class="size"/></td>
														<td><input type="text" name="wed[]" class="size"/></td>
														<td><input type="text" name="thru[]" class="size"/></td>
														<td><input type="text" name="fri[]" class="size"/></td>
														<td><input type="text" name="sat[]" class="size"/></td>
												</tr>
												<tr>
														<td>Fee<input type="hidden" name="hd[]" value="fee"/></td>
														<td><input type="text" name="sun[]" class="size"/></td>
														<td><input type="text" name="mon[]" class="size"/></td>
														<td><input type="text" name="tues[]" class="size"/></td>
														<td><input type="text" name="wed[]" class="size"/></td>
														<td><input type="text" name="thru[]" class="size"/></td>
														<td><input type="text" name="fri[]" class="size"/></td>
														<td><input type="text" name="sat[]" class="size"/></td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>No. of pat.</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
												</tr>
												
												
												<tr>
														<td rowspan="4" align="center">2nd</td>
														<td>Location<input type="hidden" name="hd[]" value="location"/></td>
														<td><input type="text" name="sun[]" class="size"/></td>
														<td><input type="text" name="mon[]" class="size"/></td>
														<td><input type="text" name="tues[]" class="size"/></td>
														<td><input type="text" name="wed[]" class="size"/></td>
														<td><input type="text" name="thru[]" class="size"/></td>
														<td><input type="text" name="fri[]" class="size"/></td>
														<td><input type="text" name="sat[]" class="size"/></td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>Time<input type="hidden" name="hd[]" value="time"/></td>
														<td><input type="text" name="sun[]" class="size"/></td>
														<td><input type="text" name="mon[]" class="size"/></td>
														<td><input type="text" name="tues[]" class="size"/></td>
														<td><input type="text" name="wed[]" class="size"/></td>
														<td><input type="text" name="thru[]" class="size"/></td>
														<td><input type="text" name="fri[]" class="size"/></td>
														<td><input type="text" name="sat[]" class="size"/></td>
												</tr>
												<tr>
														<td>Fee<input type="hidden" name="hd[]" value="fee"/></td>
														<td><input type="text" name="sun[]" class="size"/></td>
														<td><input type="text" name="mon[]" class="size"/></td>
														<td><input type="text" name="tues[]" class="size"/></td>
														<td><input type="text" name="wed[]" class="size"/></td>
														<td><input type="text" name="thru[]" class="size"/></td>
														<td><input type="text" name="fri[]" class="size"/></td>
														<td><input type="text" name="sat[]" class="size"/></td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>No. of pat.<input type="hidden" name="hd[]" value="patient_no"/></td>
														<td><input type="text" name="sun[]" class="size"/></td>
														<td><input type="text" name="mon[]" class="size"/></td>
														<td><input type="text" name="tues[]" class="size"/></td>
														<td><input type="text" name="wed[]" class="size"/></td>
														<td><input type="text" name="thru[]" class="size"/></td>
														<td><input type="text" name="fri[]" class="size"/></td>
														<td><input type="text" name="sat[]" class="size"/></td>
												</tr>
												<tr>
												<td colspan="2"><input type="submit" name="submit" value="submit"/></td>
												</tr>
										</table>
								</form>	
								</div>
								<div class="table_box">
										<table class="table" style="margin-bottom:10px;">
												<tr>
														<td>
																<span style="float:left; text-align:center;">
																		Day<br /><input type="text" name="" value="" class="form" style="width:100px;"  />
																</span>
																<span style="float:left; text-align:center;">
																		%<br /><input type="text" name="" value="" class="form" style="width:100px;"  />
																</span>
														</td>
														<td>
																<span style="float:left; text-align:center;">
																		Day<br /><input type="text" name="" value="" class="form" style="width:100px;"  />
																</span>
																<span style="float:left; text-align:center;">
																		%<br /><input type="text" name="" value="" class="form" style="width:100px;"  />
																</span>
														</td>
														<td>
																<span style="float:left; text-align:center;">
																		Day<br /><input type="text" name="" value="" class="form" style="width:100px;"  />
																</span>
																<span style="float:left; text-align:center;">
																		%<br /><input type="text" name="" value="" class="form" style="width:100px;"  />
																</span>
														</td>
														<td>
																<span style="float:left; text-align:center;">
																		Day<br /><input type="text" name="" value="" class="form" style="width:100px;"  />
																</span>
																<span style="float:left; text-align:center;">
																		%<br /><input type="text" name="" value="" class="form" style="width:100px;"  />
																</span>
														</td>
												</tr>
												<tr>
														<td colspan="2">Total Discount <input type="text" name="" value="" class="form" style="width:150px;"  /></td>
														<td colspan="2" style="font-weight:bold;">Appointment Booking type : Instant Booking <input type="checkbox" /> Advance Booking <input type="checkbox" /> </td>
												</tr>
										</table>
								</div>
						</div>
				</div>
		</div>
</div>
</body>
</html>


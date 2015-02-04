<?php
include_once('../function.php');
$uid=$_GET['uid'];
if(!$_SESSION['agentid'] || $uid=="")
{
header("location:../index.php");
}
else{
    
    ?>
<html>
    <head>
			<title>Admin Panel</title>
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="../css/style.css" rel="stylesheet" type="text/css" />
                       

   </head>
    <body>
	<!--------------top bar -------->
 <div id="top_bar">
 		<div id="top_box">
				<h2 style="margin-top:0px; padding-top:8px; font-family:Arial, Helvetica, sans-serif; color:#f5f5f5;">Admin Panel</h2>
		</div>
 </div>
 <!--------------top bar end-------->
 
  <!--------------content bar-------->
 <div id="main_bar">
 		<div id="main_box" style="width:1190px;">
				<div id="left_box">
						<?php include_once("leftmenu.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px; width:900px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Timing
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="time_action.php" method="post" enctype="multipart/form-data">
									<input type="hidden" name="hid" value="<?php echo $uid;?>">
									<table style="font-family:arial; font-size:12px;">
									<tr>
									<th>Day</th>
									<th>First Session<span style="color: #08C;">(Starting time 7:00AM to 4:00PM)</span></th>
									<th>Second Session<span style="color: #08C;">(Starting time 4:00PM to 11:00PM)</span></th>
									</tr>
									<?php
									$array=array(0 => "monday",1 => "tuesday",2 => "wednesday",3 => "thursday",4 => "friday",5 => "saturday",6 =>"sunday");
									for($i=0;$i<7;$i++)
									{
									$day=$array[$i];
									?>
									<tr>
									    <td>
									<input type="checkbox" name="day<?php echo $i;?>" value="<?php echo $day;?>" /><?php echo $day;?>
									    </td>
									<td>
									TIME
									<select class="form" style="width:53px;" name="from<?php echo $i;?>">
									    <option value="0">0</option>
									    <option value="1">1</option>
									    <option value="2">2</option>
									    <option value="3">3</option>
									    <option value="4">4</option>
									    <option value="5">5</option>
									    <option value="6">6</option>
									    <option value="7">7</option>
									    <option value="8">8</option>
									    <option value="9">9</option>
									    <option value="10">10</option>
									    <option value="11">11</option>
									    <option value="12">12</option>
									</select>
									<select class="form" style="width:53px;" name="fmin<?php echo $i;?>">
									    <option value="00">00</option>
									    <option value="05">05</option>
									    <option value="10">10</option>
									    <option value="15">15</option>
									    <option value="20">20</option>
									    <option value="25">25</option>
									    <option value="30">30</option>
									    <option value="35">35</option>
									    <option value="40">40</option>
									    <option value="45">45</option>
									    <option value="50">50</option>
									    <option value="55">55</option>
									</select>
									<select class="form" style="width:56px;" name="fextention<?php echo $i;?>">
									    <option value="AM">AM</option>
									    <option value="PM">PM</option>
									</select>
									TO
									<select class="form" style="width:53px;" name="to<?php echo $i;?>">
									    <option value="0">0</option>
									    <option value="1">1</option>
									    <option value="2">2</option>
									    <option value="3">3</option>
									    <option value="4">4</option>
									    <option value="5">5</option>
									    <option value="6">6</option>
									    <option value="7">7</option>
									    <option value="8">8</option>
									    <option value="9">9</option>
									    <option value="10">10</option>
									    <option value="11">11</option>
									    <option value="12">12</option>
									</select>
									<select class="form" style="width:53px;" name="tmin<?php echo $i;?>">
									    <option value="00">00</option>
									    <option value="05">05</option>
									    <option value="10">10</option>
									    <option value="15">15</option>
									    <option value="20">20</option>
									    <option value="25">25</option>
									    <option value="30">30</option>
									    <option value="35">35</option>
									    <option value="40">40</option>
									    <option value="45">45</option>
									    <option value="50">50</option>
									    <option value="55">55</option>
									</select>
									<select class="form" style="width:56px;" name="textention<?php echo $i;?>">
									    <option value="AM">AM</option>
									    <option value="PM">PM</option>
									</select>
									</td>
									<td>
									TIME1
									<select class="form" style="width:53px;" name="froms<?php echo $i;?>">
									    <option value="0">0</option>
									    <option value="1">1</option>
									    <option value="2">2</option>
									    <option value="3">3</option>
									    <option value="4">4</option>
									    <option value="5">5</option>
									    <option value="6">6</option>
									    <option value="7">7</option>
									    <option value="8">8</option>
									    <option value="9">9</option>
									    <option value="10">10</option>
									    <option value="11">11</option>
									    <option value="12">12</option>
									</select>
									<select class="form" style="width:53px;" name="fmins<?php echo $i;?>">
									    <option value="00">00</option>
									    <option value="05">05</option>
									    <option value="10">10</option>
									    <option value="15">15</option>
									    <option value="20">20</option>
									    <option value="25">25</option>
									    <option value="30">30</option>
									    <option value="35">35</option>
									    <option value="40">40</option>
									    <option value="45">45</option>
									    <option value="50">50</option>
									    <option value="55">55</option>
									</select>
									<select class="form" style="width:56px;" name="fextentions<?php echo $i;?>">
									    <option value="AM">AM</option>
									    <option value="PM">PM</option>
									</select>
									TO
									<select class="form" style="width:53px;" name="tos<?php echo $i;?>">
									    <option value="0">0</option>
									    <option value="1">1</option>
									    <option value="2">2</option>
									    <option value="3">3</option>
									    <option value="4">4</option>
									    <option value="5">5</option>
									    <option value="6">6</option>
									    <option value="7">7</option>
									    <option value="8">8</option>
									    <option value="9">9</option>
									    <option value="10">10</option>
									    <option value="11">11</option>
									    <option value="12">12</option>
									</select>
									<select class="form" style="width:53px;" name="tmins<?php echo $i;?>">
									    <option value="00">00</option>
									    <option value="05">05</option>
									    <option value="10">10</option>
									    <option value="15">15</option>
									    <option value="20">20</option>
									    <option value="25">25</option>
									    <option value="30">30</option>
									    <option value="35">35</option>
									    <option value="40">40</option>
									    <option value="45">45</option>
									    <option value="50">50</option>
									    <option value="55">55</option>
									</select>
									<select class="form" style="width:56px;" name="textentions<?php echo $i;?>">
									    <option value="AM">AM</option>
									    <option value="PM">PM</option>
									</select>
									</td>
									<!--<td>
									evening<input type="text" name="evening<?php //echo $i;?>" style="width:100px;"/>
									</td>
									<td>
									night<input type="text" name="night<?php //echo $i;?>" style="width:100px;"/>
									</td>-->
									</tr>
									<?php
									}
									
									?>
									<tr>
									<td></td>  
									<td>
									<input type="submit" name="submit" value="insert"/>
									</td>
									</tr>
									</table>
								    </form>
								</div>
						</div>
				</div>
		</div>
 </div>
  <!--------------content bar end-------->
       <!--------------footer---------> 
 <div id="footer-bar">
 		<div id="footer">
				<?php include_once('footermenu.php');?>
		</div>
 </div>
  <!--------------footer end--------->
    </body>
</html>
<?php 
}
?>
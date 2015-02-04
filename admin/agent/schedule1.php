<?php
include_once("../function.php");
$id=$_GET['id'];
								$getdrugdet=mysql_query("select * from `location`")or die(mysql_error());
										  while($resdrugdet=mysql_fetch_array($getdrugdet))
												{
												
												 $getemail[] = array(
																	'value'  =>$resdrugdet['clinic_name']."(".$resdrugdet['area'].")",
																	'idval' => $resdrugdet['id']
																  
														);
												}
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
.wdth{width:110px;}
</style>
 <!--autocomplete start-->
<link rel="stylesheet" href="css1/jquery-ui.css">
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<!--autocomplete end-->

<!--<script type="text/javascript" src="js/jquery.min.js"></script>-->
<link href="css1/timepicki.css" type="text/css" rel="stylesheet" />
<!--<script type="text/javascript" src="js/jquery-ui.js"></script>-->

<script type="text/javascript" src="js/timepicki.js"></script>

<script type='text/javascript'>
  $(function(){
	$('.timepicker').timepicki();
	$('.timepicker1').timepicki();
	
  });
</script>

 <!--autocomplete start-->
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?= json_encode($getemail); ?>;
        $('#1st_sun_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#1st_sun_loct').val(valshow);
		 $('#1st_sun_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#1st_mon_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#1st_mon_loct').val(valshow);
		 $('#1st_mon_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#1st_tue_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#1st_tue_loct').val(valshow);
		 $('#1st_tue_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#1st_wed_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#1st_wed_loct').val(valshow);
		 $('#1st_wed_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#1st_thru_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#1st_thru_loct').val(valshow);
		 $('#1st_thru_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#1st_fri_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#1st_fri_loct').val(valshow);
		 $('#1st_fri_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#1st_sat_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#1st_sat_loct').val(valshow);
		 $('#1st_sat_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#2nd_sun_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#2nd_sun_loct').val(valshow);
		 $('#2nd_sun_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#2nd_mon_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#2nd_mon_loct').val(valshow);
		 $('#2nd_mon_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#2nd_tue_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#2nd_tue_loct').val(valshow);
		 $('#2nd_tue_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#2nd_wed_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#2nd_wed_loct').val(valshow);
		 $('#2nd_wed_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#2nd_thru_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#2nd_thru_loct').val(valshow);
		 $('#2nd_thru_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#2nd_fri_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#2nd_fri_loct').val(valshow);
		 $('#2nd_fri_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#2nd_sat_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#2nd_sat_loct').val(valshow);
		 $('#2nd_sat_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#3rd_sun_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#3rd_sun_loct').val(valshow);
		 $('#3rd_sun_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#3rd_mon_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#3rd_mon_loct').val(valshow);
		 $('#3rd_mon_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#3rd_tue_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#3rd_tue_loct').val(valshow);
		 $('#3rd_tue_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#3rd_wed_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#3rd_wed_loct').val(valshow);
		 $('#3rd_wed_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#3rd_thru_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#3rd_thru_loct').val(valshow);
		 $('#3rd_thru_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#3rd_fri_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#3rd_fri_loct').val(valshow);
		 $('#3rd_fri_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#3rd_sat_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#3rd_sat_loct').val(valshow);
		 $('#3rd_sat_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
			$('#4th_sun_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#4th_sun_loct').val(valshow);
		 $('#4th_sun_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#4th_mon_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#4th_mon_loct').val(valshow);
		 $('#4th_mon_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#4th_tue_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#4th_tue_loct').val(valshow);
		 $('#4th_tue_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#4th_wed_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#4th_wed_loct').val(valshow);
		 $('#4th_wed_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#4th_thru_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#4th_thru_loct').val(valshow);
		 $('#4th_thru_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#4th_fri_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#4th_fri_loct').val(valshow);
		 $('#4th_fri_hdloctval').val(ui.item.idval);
        return false;
		}
        });
		
		$('#4th_sat_loct').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('#4th_sat_loct').val(valshow);
		 $('#4th_sat_hdloctval').val(ui.item.idval);
        return false;
		}
        });
});
</script>
<!--autocomplete end-->
</head>
<body>
<div id="content_bar">
		<div id="content">
				<div id="content_box">
						<div id="content_box1">
								
								<div class="head_text" style="margin-top:0px; text-align:center; color:#fff;">
										TIME SCHEDULE
								</div>
								<form action="insert_schedule.php" method="post">
								<div class="table_box">
								
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
														<td>
														 <!-- <select name="sun[]">
														    <option value="">Select</option>
														  <?php
														  $qsun=mysql_query("select * from `location`");
														  while($ressun=mysql_fetch_array($qsun))
														  {
														  ?>
														  <option value="<?php echo $ressun['id']?>"><?php echo $ressun['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="1st_sun_loct" class="wdth">
														<input type="hidden" name="sun[]" id="1st_sun_hdloctval"/>
														</td>
														<td>
														 <!-- <select name="mon[]">
														    <option value="">Select</option>
														  <?php
														  $qmon=mysql_query("select * from `location`");
														  while($resmon=mysql_fetch_array($qmon))
														  {
														  ?>
														  <option value="<?php echo $resmon['id']?>"><?php echo $resmon['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="1st_mon_loct"  class="wdth">
														<input type="hidden" name="mon[]" id="1st_mon_hdloctval"/>
														  
														</td>
														<td>
														<input type="text"  id="1st_tue_loct"  class="wdth">
														<input type="hidden" name="tue[]" id="1st_tue_hdloctval"/>
														</td>
														<td>
														  <!--<select name="wed[]">
														    <option value="">Select</option>
														  <?php
														  $qwed=mysql_query("select * from `location`");
														  while($reswed=mysql_fetch_array($qwed))
														  {
														  ?>
														  <option value="<?php echo $reswed['id']?>"><?php echo $reswed['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="1st_wed_loct"  class="wdth">
														<input type="hidden" name="wed[]" id="1st_wed_hdloctval"/>
														</td>
														<td>
														<!--<select name="thru[]">
														    <option value="">Select</option>
														  <?php
														  $qthur=mysql_query("select * from `location`");
														  while($resthur=mysql_fetch_array($qthur))
														  {
														  ?>
														  <option value="<?php echo $resthur['id']?>"><?php echo $resthur['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="1st_thru_loct" class="wdth">
														<input type="hidden" name="thru[]" id="1st_thru_hdloctval"/>  
														</td>
														<td>
														  <!--<select name="fri[]">
														    <option value="">Select</option>
														  <?php
														  $qfri=mysql_query("select * from `location`");
														  while($resfri=mysql_fetch_array($qfri))
														  {
														  ?>
														  <option value="<?php echo $resfri['id']?>"><?php echo $resfri['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="1st_fri_loct"  class="wdth">
														<input type="hidden" name="fri[]" id="1st_fri_hdloctval"/>  
														</td>
														<td>
														  <!--<select name="sat[]">
														    <option value="">Select</option>
														  <?php
														  $qsat=mysql_query("select * from `location`");
														  while($ressat=mysql_fetch_array($qsat))
														  {
														  ?>
														  <option value="<?php echo $ressat['id']?>"><?php echo $ressat['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="1st_sat_loct" class="wdth">
														<input type="hidden" name="sat[]" id="1st_sat_hdloctval"/> 
														</td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>Time<input type="hidden" name="hd[]" value="time"/></td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimesun[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimesun[]' style="width:80px;"/>
													          </div>
														  
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimemon[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimemon[]' style="width:80px;"/>
													          </div>
														  
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimetue[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimetue[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimewed[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimewed[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimethur[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimethur[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimefri[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimefri[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimesat[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimesat[]' style="width:80px;"/>
													          </div>
														</td>
												</tr>
												<tr>
														<td>Fee<input type="hidden" name="hd[]" value="fee"/></td>
														<td><input type="text" name="sunfee[]" class="size"/></td>
														<td><input type="text" name="monfee[]" class="size"/></td>
														<td><input type="text" name="tuesfee[]" class="size"/></td>
														<td><input type="text" name="wedfee[]" class="size"/></td>
														<td><input type="text" name="thrufee[]" class="size"/></td>
														<td><input type="text" name="frifee[]" class="size"/></td>
														<td><input type="text" name="satfee[]" class="size"/></td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>No. of pat.<input type="hidden" name="hd[]" value="patient_no"/></td>
														<td><input type="text" name="sunpat[]" class="size"/></td>
														<td><input type="text" name="monpat[]" class="size"/></td>
														<td><input type="text" name="tuespat[]" class="size"/></td>
														<td><input type="text" name="wedpat[]" class="size"/></td>
														<td><input type="text" name="thrupat[]" class="size"/></td>
														<td><input type="text" name="fripat[]" class="size"/></td>
														<td><input type="text" name="satpat[]" class="size"/></td>
												</tr>
												
												
												
												
												<tr>
												<input type="hidden" name="hd_id" value="<?php echo $id;?>"/>
														<td rowspan="4" align="center">2nd</td>
														<td>Location<input type="hidden" name="hd[]" value="location"/></td>
														<td>
														  <!--<select name="sun[]">
														    <option value="">Select</option>
														  <?php
														  $qsun=mysql_query("select * from `location`");
														  while($ressun=mysql_fetch_array($qsun))
														  {
														  ?>
														  <option value="<?php echo $ressun['id']?>"><?php echo $ressun['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="2nd_sun_loct" class="wdth">
														<input type="hidden" name="sun[]" id="2nd_sun_hdloctval"/>
														</td>
														<td>
														  <!--<select name="mon[]">
														    <option value="">Select</option>
														  <?php
														  $qmon=mysql_query("select * from `location`");
														  while($resmon=mysql_fetch_array($qmon))
														  {
														  ?>
														  <option value="<?php echo $resmon['id']?>"><?php echo $resmon['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="2nd_mon_loct"  class="wdth">
														<input type="hidden" name="mon[]" id="2nd_mon_hdloctval"/>
														  
														</td>
														<td>
														  <!--<select name="tue[]">
														    <option value="">Select</option>
														  <?php
														  $qtue=mysql_query("select * from `location`");
														  while($restue=mysql_fetch_array($qtue))
														  {
														  ?>
														  <option value="<?php echo $restue['id']?>"><?php echo $restue['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="2nd_tue_loct"  class="wdth">
														<input type="hidden" name="tue[]" id="2nd_tue_hdloctval"/>
														</td>
														<td>
														 <!-- <select name="wed[]">
														    <option value="">Select</option>
														  <?php
														  $qwed=mysql_query("select * from `location`");
														  while($reswed=mysql_fetch_array($qwed))
														  {
														  ?>
														  <option value="<?php echo $reswed['id']?>"><?php echo $reswed['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="2nd_wed_loct"  class="wdth">
														<input type="hidden" name="wed[]" id="2nd_wed_hdloctval"/>
														</td>
														<td>
														<!--<select name="thru[]">
														    <option value="">Select</option>
														  <?php
														  $qthur=mysql_query("select * from `location`");
														  while($resthur=mysql_fetch_array($qthur))
														  {
														  ?>
														  <option value="<?php echo $resthur['id']?>"><?php echo $resthur['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="2nd_thru_loct" class="wdth">
														<input type="hidden" name="thru[]" id="2nd_thru_hdloctval"/> 
														</td>
														<td>
														  <!--<select name="fri[]">
														    <option value="">Select</option>
														  <?php
														  $qfri=mysql_query("select * from `location`");
														  while($resfri=mysql_fetch_array($qfri))
														  {
														  ?>
														  <option value="<?php echo $resfri['id']?>"><?php echo $resfri['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="2nd_fri_loct"  class="wdth">
														<input type="hidden" name="fri[]" id="2nd_fri_hdloctval"/> 
														</td>
														<td>
														  <!--<select name="sat[]">
														    <option value="">Select</option>
														  <?php
														  $qsat=mysql_query("select * from `location`");
														  while($ressat=mysql_fetch_array($qsat))
														  {
														  ?>
														  <option value="<?php echo $ressat['id']?>"><?php echo $ressat['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="2nd_sat_loct" class="wdth">
														<input type="hidden" name="sat[]" id="2nd_sat_hdloctval"/>
														</td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>Time<input type="hidden" name="hd[]" value="time"/></td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimesun[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimesun[]' style="width:80px;"/>
													          </div>
														  
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimemon[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimemon[]' style="width:80px;"/>
													          </div>
														  
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimetue[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimetue[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimewed[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimewed[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimethur[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimethur[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimefri[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimefri[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimesat[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimesat[]' style="width:80px;"/>
													          </div>
														</td>
												</tr>
												<tr>
														<td>Fee<input type="hidden" name="hd[]" value="fee"/></td>
														<td><input type="text" name="sunfee[]" class="size"/></td>
														<td><input type="text" name="monfee[]" class="size"/></td>
														<td><input type="text" name="tuesfee[]" class="size"/></td>
														<td><input type="text" name="wedfee[]" class="size"/></td>
														<td><input type="text" name="thrufee[]" class="size"/></td>
														<td><input type="text" name="frifee[]" class="size"/></td>
														<td><input type="text" name="satfee[]" class="size"/></td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>No. of pat.<input type="hidden" name="hd[]" value="patient_no"/></td>
														<td><input type="text" name="sunpat[]" class="size"/></td>
														<td><input type="text" name="monpat[]" class="size"/></td>
														<td><input type="text" name="tuespat[]" class="size"/></td>
														<td><input type="text" name="wedpat[]" class="size"/></td>
														<td><input type="text" name="thrupat[]" class="size"/></td>
														<td><input type="text" name="fripat[]" class="size"/></td>
														<td><input type="text" name="satpat[]" class="size"/></td>
												</tr>
												
												
												
												
												
												<tr>
												<input type="hidden" name="hd_id" value="<?php echo $id;?>"/>
														<td rowspan="4" align="center">3rd</td>
														<td>Location<input type="hidden" name="hd[]" value="location"/></td>
														<td>
														  <!--<select name="sun[]">
														    <option value="">Select</option>
														  <?php
														  $qsun=mysql_query("select * from `location`");
														  while($ressun=mysql_fetch_array($qsun))
														  {
														  ?>
														  <option value="<?php echo $ressun['id']?>"><?php echo $ressun['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="3rd_sun_loct" class="wdth">
														<input type="hidden" name="sun[]" id="3rd_sun_hdloctval"/>
														</td>
														<td>
														  <!--<select name="mon[]">
														    <option value="">Select</option>
														  <?php
														  $qmon=mysql_query("select * from `location`");
														  while($resmon=mysql_fetch_array($qmon))
														  {
														  ?>
														  <option value="<?php echo $resmon['id']?>"><?php echo $resmon['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="3rd_mon_loct"  class="wdth">
														<input type="hidden" name="mon[]" id="3rd_mon_hdloctval"/>
														  
														</td>
														<td>
														  <!--<select name="tue[]">
														    <option value="">Select</option>
														  <?php
														  $qtue=mysql_query("select * from `location`");
														  while($restue=mysql_fetch_array($qtue))
														  {
														  ?>
														  <option value="<?php echo $restue['id']?>"><?php echo $restue['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="3rd_tue_loct"  class="wdth">
														<input type="hidden" name="tue[]" id="3rd_tue_hdloctval"/>
														</td>
														<td>
														 <!-- <select name="wed[]">
														    <option value="">Select</option>
														  <?php
														  $qwed=mysql_query("select * from `location`");
														  while($reswed=mysql_fetch_array($qwed))
														  {
														  ?>
														  <option value="<?php echo $reswed['id']?>"><?php echo $reswed['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="3rd_wed_loct"  class="wdth">
														<input type="hidden" name="wed[]" id="3rd_wed_hdloctval"/>
														</td>
														<td>
														<!--<select name="thru[]">
														    <option value="">Select</option>
														  <?php
														  $qthur=mysql_query("select * from `location`");
														  while($resthur=mysql_fetch_array($qthur))
														  {
														  ?>
														  <option value="<?php echo $resthur['id']?>"><?php echo $resthur['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="3rd_thru_loct" class="wdth">
														<input type="hidden" name="thru[]" id="3rd_thru_hdloctval"/> 
														</td>
														<td>
														  <!--<select name="fri[]">
														    <option value="">Select</option>
														  <?php
														  $qfri=mysql_query("select * from `location`");
														  while($resfri=mysql_fetch_array($qfri))
														  {
														  ?>
														  <option value="<?php echo $resfri['id']?>"><?php echo $resfri['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="3rd_fri_loct"  class="wdth">
														<input type="hidden" name="fri[]" id="3rd_fri_hdloctval"/>
														</td>
														<td>
														  <!--<select name="sat[]">
														    <option value="">Select</option>
														  <?php
														  $qsat=mysql_query("select * from `location`");
														  while($ressat=mysql_fetch_array($qsat))
														  {
														  ?>
														  <option value="<?php echo $ressat['id']?>"><?php echo $ressat['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="3rd_sat_loct" class="wdth">
														<input type="hidden" name="sat[]" id="3rd_sat_hdloctval"/>
														</td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>Time<input type="hidden" name="hd[]" value="time"/></td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimesun[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimesun[]' style="width:80px;"/>
													          </div>
														  
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimemon[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimemon[]' style="width:80px;"/>
													          </div>
														  
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimetue[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimetue[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimewed[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimewed[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimethur[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimethur[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimefri[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimefri[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimesat[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimesat[]' style="width:80px;"/>
													          </div>
														</td>
												</tr>
												<tr>
														<td>Fee<input type="hidden" name="hd[]" value="fee"/></td>
														<td><input type="text" name="sunfee[]" class="size"/></td>
														<td><input type="text" name="monfee[]" class="size"/></td>
														<td><input type="text" name="tuesfee[]" class="size"/></td>
														<td><input type="text" name="wedfee[]" class="size"/></td>
														<td><input type="text" name="thrufee[]" class="size"/></td>
														<td><input type="text" name="frifee[]" class="size"/></td>
														<td><input type="text" name="satfee[]" class="size"/></td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>No. of pat.<input type="hidden" name="hd[]" value="patient_no"/></td>
														<td><input type="text" name="sunpat[]" class="size"/></td>
														<td><input type="text" name="monpat[]" class="size"/></td>
														<td><input type="text" name="tuespat[]" class="size"/></td>
														<td><input type="text" name="wedpat[]" class="size"/></td>
														<td><input type="text" name="thrupat[]" class="size"/></td>
														<td><input type="text" name="fripat[]" class="size"/></td>
														<td><input type="text" name="satpat[]" class="size"/></td>
												</tr>
												
												
												
												
												<tr>
												<input type="hidden" name="hd_id" value="<?php echo $id;?>"/>
														<td rowspan="4" align="center">4th</td>
														<td>Location<input type="hidden" name="hd[]" value="location"/></td>
														<td>
														 <!-- <select name="sun[]">
														    <option value="">Select</option>
														  <?php
														  $qsun=mysql_query("select * from `location`");
														  while($ressun=mysql_fetch_array($qsun))
														  {
														  ?>
														  <option value="<?php echo $ressun['id']?>"><?php echo $ressun['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="4th_sun_loct" class="wdth">
														<input type="hidden" name="sun[]" id="4th_sun_hdloctval"/>
														</td>
														<td>
														 <!-- <select name="mon[]">
														    <option value="">Select</option>
														  <?php
														  $qmon=mysql_query("select * from `location`");
														  while($resmon=mysql_fetch_array($qmon))
														  {
														  ?>
														  <option value="<?php echo $resmon['id']?>"><?php echo $resmon['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="4th_mon_loct"  class="wdth">
														<input type="hidden" name="mon[]" id="4th_mon_hdloctval"/>
														  
														</td>
														<td>
														  <!--<select name="tue[]">
														    <option value="">Select</option>
														  <?php
														  $qtue=mysql_query("select * from `location`");
														  while($restue=mysql_fetch_array($qtue))
														  {
														  ?>
														  <option value="<?php echo $restue['id']?>"><?php echo $restue['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="4th_tue_loct"  class="wdth">
														<input type="hidden" name="tue[]" id="4th_tue_hdloctval"/>
														</td>
														<td>
														 <!-- <select name="wed[]">
														    <option value="">Select</option>
														  <?php
														  $qwed=mysql_query("select * from `location`");
														  while($reswed=mysql_fetch_array($qwed))
														  {
														  ?>
														  <option value="<?php echo $reswed['id']?>"><?php echo $reswed['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="4th_wed_loct"  class="wdth">
														<input type="hidden" name="wed[]" id="4th_wed_hdloctval"/>
														</td>
														<td>
														<!--<select name="thru[]">
														    <option value="">Select</option>
														  <?php
														  $qthur=mysql_query("select * from `location`");
														  while($resthur=mysql_fetch_array($qthur))
														  {
														  ?>
														  <option value="<?php echo $resthur['id']?>"><?php echo $resthur['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														  <input type="text"  id="4th_thru_loct" class="wdth">
														<input type="hidden" name="thru[]" id="4th_thru_hdloctval"/>
														</td>
														<td>
														  <!--<select name="fri[]">
														    <option value="">Select</option>
														  <?php
														  $qfri=mysql_query("select * from `location`");
														  while($resfri=mysql_fetch_array($qfri))
														  {
														  ?>
														  <option value="<?php echo $resfri['id']?>"><?php echo $resfri['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="4th_fri_loct"  class="wdth">
														<input type="hidden" name="fri[]" id="4th_fri_hdloctval"/>
														</td>
														<td>
														  <!--<select name="sat[]">
														    <option value="">Select</option>
														  <?php
														  $qsat=mysql_query("select * from `location`");
														  while($ressat=mysql_fetch_array($qsat))
														  {
														  ?>
														  <option value="<?php echo $ressat['id']?>"><?php echo $ressat['area']?></option>
														  <?php
														  }
														  ?>
														  </select>-->
														<input type="text"  id="4th_sat_loct" class="wdth">
														<input type="hidden" name="sat[]" id="4th_sat_hdloctval"/>
														</td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>Time<input type="hidden" name="hd[]" value="time"/></td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimesun[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimesun[]' style="width:80px;"/>
													          </div>
														  
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimemon[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimemon[]' style="width:80px;"/>
													          </div>
														  
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimetue[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimetue[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimewed[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimewed[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimethur[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimethur[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimefri[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimefri[]' style="width:80px;"/>
													          </div>
														</td>
														<td>
														  <div class="controls" style="width:40px;">
														    <input class='timepicker' class="span11" type='text' name='strtimesat[]' style="width:80px;"/>
													          </div>
														  TO
														   <div class="controls" style="width:40px;">
														    <input class='timepicker1' class="span11" type='text' name='endtimesat[]' style="width:80px;"/>
													          </div>
														</td>
												</tr>
												<tr>
														<td>Fee<input type="hidden" name="hd[]" value="fee"/></td>
														<td><input type="text" name="sunfee[]" class="size"/></td>
														<td><input type="text" name="monfee[]" class="size"/></td>
														<td><input type="text" name="tuesfee[]" class="size"/></td>
														<td><input type="text" name="wedfee[]" class="size"/></td>
														<td><input type="text" name="thrufee[]" class="size"/></td>
														<td><input type="text" name="frifee[]" class="size"/></td>
														<td><input type="text" name="satfee[]" class="size"/></td>
												</tr>
												<tr style="background:#d8f8c1;">
														<td>No. of pat.<input type="hidden" name="hd[]" value="patient_no"/></td>
														<td><input type="text" name="sunpat[]" class="size"/></td>
														<td><input type="text" name="monpat[]" class="size"/></td>
														<td><input type="text" name="tuespat[]" class="size"/></td>
														<td><input type="text" name="wedpat[]" class="size"/></td>
														<td><input type="text" name="thrupat[]" class="size"/></td>
														<td><input type="text" name="fripat[]" class="size"/></td>
														<td><input type="text" name="satpat[]" class="size"/></td>
												</tr>
												
												
												
												
										</table>
								
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
														<td colspan="2">Total Discount <input type="text" name="discount" value="" class="form" style="width:150px;"  /></td>
														<td colspan="2" style="font-weight:bold;">Appointment Booking type : Instant Booking <input type="checkbox" name="bookingtype" value="1" /> Advance Booking <input type="checkbox" name="bookingtype" value="1"/> </td>
												</tr>
												
										</table>
										<table align="center" width="600">
										<tr>
												<td><input type="submit" name="submit" value="submit" style="margin-left:170px;"/></td>
												</tr>
										</table>
								</div>
								</form>
						</div>
				</div>
		</div>
</div>
</body>
</html>


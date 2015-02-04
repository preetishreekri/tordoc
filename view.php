<?php
include_once('function.php');
$val=$_GET['hdval'];
//echo $val;
$sqll=mysql_query("select * from `timing` where `session_1st`='$val' or `session_2nd`='$val' group by `uid`");
echo "select * from `timing` where `session_1st`='$val' or `session_2nd`='$val'";
while($ress=mysql_fetch_array($sqll)){
$uid=$ress['uid']; 
$sqldetail=mysql_query("select * from `details` where `uniqueid`='$uid'");
while($resdetail=mysql_fetch_array($sqldetail))
{
//echo "select * from `details` where `uniqueid`='$uid'";
//echo $resdetail['uniqueid'];
?>

	<div class="rightcontent_box">
												<div class="right_imgbox">
														<img src="admin/<?php echo  $resdetail['image'];?>"  />
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
														    ?>
																<img src="admin/<?php echo $fimageres['image'];?>"  /><?php }?>
														</div>
												</div>
												<div class="right_textbox2">
														<div class="airport" style="width:120px;">
																<?php echo $resdetail['location'];?>
														</div></br>
														<div class="airport" style="background:url(images/icon4.png) no-repeat left;">
																INR <?php echo $resdetail['fee'];?>
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
															echo $dayy."<br/>";
															$x=explode(",",$dayy);
															
															//echo "<br/>".$x[0]."---".$x[1];
															  $cx=count($x);
															  $fx=$x[0];
															  $lx= $x[$cx-1];
															 
															 //echo $cx;
															/*if($fx==$lx)
															 {
															 echo $fx;
															 }
															 else
															 {
															  echo $fx."-".$lx;
															 }*/
															// var_dump($x);
															if(in_array('monday',$x))
																{
										
																	if(in_array('tuesday',$x))
																	{
																	
																		if(in_array('wednesday',$x))
																		{
																		
																		    if(in_array('thursday',$x))
																			{
																			
																				if(in_array('friday',$x))
																			{
																			
																				if(in_array('saturday',$x))
																			{
																				if(in_array('sunday',$x))
																			{
																				echo "monday"."-"."sunday";
																			}else{ echo "monday"."-"."saturday";}
																				
																			}else{ echo "monday"."-"."friday";}
																				
																			}else{ echo "monday"."-"."thursday";}
																				
																			}else{ echo "monday"."-"."wednesday";} 
																		}
																		else
																		{ 
																		echo "monday"."-"."tuesday";
																		}
																	}
																	else
																	{ 
																	echo "monday";
																	}
																}
																
																
																
	/*elseif(in_array('tuesday',$x))
{
    if(in_array('wednesday',$x))
    {
        if(in_array('thursday',$x))
        {
            if(in_array('friday',$x))
            {
                if(in_array('saturday',$x))
            {
                if(in_array('sunday',$x))
            {
              echo "tuesday"."-"."sunday";
            }else{ echo "tuesday"."-"."saturday";}
                
            }else{ echo "tuesday"."-"."friday";}
                
            }else{ echo "tuesday"."-"."thursday";}  
        }else{ echo "tuesday"."-"."wednesday";}
    }else{ echo "tuesday";}
}

elseif(in_array('wednesday',$x))
{
echo "found wednesday";
    if(in_array('thursday',$x))
    {
        if(in_array('friday',$x))
        {
            if(in_array('saturday',$x))
            {
                if(in_array('sunday',$x))
            {
               echo "wednesday"."-"."sunday"; 
            }else{ echo "wednesday"."-"."saturday";}
                
            }else{ echo "wednesday"."-"."friday";}  
        }else{ echo "wednesday"."-"."thursday";}
    }else{ echo "wednesday";}
}*/

																
															
															
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


<?php
//echo $resdetail['doctor_name'];
}
}
?>

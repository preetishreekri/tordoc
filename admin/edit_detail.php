<?php
include_once("function.php");
if(!isset($_SESSION['adminid'])){
header("location:index.php");
}
else{
$id=$_GET['id'];
$sqldetail=mysql_query("select * from `details` where `slno`='$id'");
$resdetail=mysql_fetch_array($sqldetail);
	
?>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<!--google map-->  
<script src="https://maps.google.com/maps?file=api&amp;v=2&amp;key="
      type="text/javascript"></script>
    <script type="text/javascript">
 function load(a,b) {
      if (GBrowserIsCompatible()) {
        var map = new GMap2(document.getElementById("map"));
        map.addControl(new GSmallMapControl());
        map.addControl(new GMapTypeControl());
        var center = new GLatLng(a,b);
        map.setCenter(center, 15);
        geocoder = new GClientGeocoder();
        var marker = new GMarker(center, {draggable: true});  
        map.addOverlay(marker);
        document.getElementById("lat").value = center.lat();
        document.getElementById("lng").value = center.lng();

	  GEvent.addListener(marker, "dragend", function() {
       var point = marker.getPoint();
	      map.panTo(point);
       document.getElementById("lat").value = point.lat();
       document.getElementById("lng").value = point.lng();

        });
      }
    }
    </script>

</head>
<body onLoad="load(<?php echo $resdetail['latitude'];?>,<?php echo $resdetail['longitude'];?>);">
<!--------------top bar -------->
 <div id="top_bar">
 		<div id="top_box">
				<h2 style="margin-top:0px; padding-top:8px; font-family:Arial, Helvetica, sans-serif; color:#f5f5f5;">Admin Panel</h2>
		</div>
 </div>
 <!--------------top bar end-------->
 
 <!--------------content bar-------->
 <div id="main_bar">
 		<div id="main_box">
				<?php
				include_once("leftbar.php");
				?>
				<div id="right_box" >
						<div class="headline">
								<a href="">Dashboard </a> /
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Edit Doctor Details
								</div>
								<div id="content2" style="min-height:350px;">
								<form name="f" method="post" action="update_detail.php"  enctype="multipart/form-data">
											<table class="table" style="height:100px;">
												<tr>
												<input type="hidden" name="hidden_id" value="<?php echo $resdetail['slno'];?>"/>
												<td>Name</td>
                                                <td><input type="text" name="dname" value="<?php echo $resdetail['doctor_name'];?>" class="form"></td>
												</tr>
												<tr>
                                                  <td>Speciality</td>
                                                   <td>
						   <select name="dspeciality" class="form">
						       <?php
						       $specfet=mysql_query("select * from `specification`");
						      while($specres=mysql_fetch_array($specfet))
						      { echo $resdetail['speciality'];
						      echo $specres['slno'];
						       ?>
						       <option value="<?php echo $specres['slno'];?>"<?php if($resdetail['speciality']==$specres['slno'])
														 {
														 echo "selected='selected'";
														 } ?>
														 ><?php echo $specres['name'];?></option>
						       <?php }?>
						   </select>
						   </td>
                                                 </tr>
                                                <tr>
                                                  <td>functionality</td>
                                                  <td>
                                                     <select name="function_area" class="form">
                                                         <option value="clinic" <?php
														 if($resdetail['functionality']=="clinic")
														 {
														 echo "selected='selected'";
														 }
														 ?>>clinic</option>
                                                           <option value="hospital"
														   <?php
														 if($resdetail['functionality']=="hospital")
														 {
														 echo "selected='selected'";
														 }
														 ?>>Hospital</option>
                                                           <option value="nurshinghome" <?php
														 if($resdetail['functionality']=="nurshinghome")
														 {
														 echo "selected='selected'";
														 }
														 ?>>Nushinghome</option>
                                                      </select>
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>functionality name</td>
                                                     <td><input type="text" name="area_name" value="<?php echo $resdetail['functionality_name'];?>" class="form"></td>
                                                   </tr>
												<tr>
												<tr>
                                                    <td>Designation</td>
                                                    <td><input type="text" name="designation" value="<?php echo $resdetail['designation'];?>" class="form"></td>
                                                </tr>
												<tr>
                                                   <td>Description</td>
												   <td><textarea name="description" class="form" style="height:70px;" ><?php echo $resdetail['description'];?></textarea></td>
                                                </tr>
                                                <tr>
                                                    <td>Experience</td>
                                                    <td><input type="text" name="experience" value="<?php echo $resdetail['experience'];?>" class="form"></td>
												</tr>
                                                <tr>
                                                    <td>Consultant fee</td>
                                                    <td><input type="text" name="con_fee" value="<?php echo $resdetail['fee'];?>" class="form"></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><textarea name="address"  class="form" style="height:70px;"><?php echo $resdetail['address'];?></textarea></td>
                                                </tr>
												<tr>
                                                    <td>Time Slot</td>
                                                    <td><input type="text" name="timeslot" value="<?php echo $resdetail['timeslot'];?>" class="form"></td>
                                                </tr>
												<td>Old Image</td>
												<td>
												 <img src="<?php echo $resdetail['image']; ?>" width="100" height="100" />
												 <input type="hidden" name="oldimage" value="<?php echo $resdetail['image']; ?>"/>
												</td>	
												</tr>
												<tr>
												<td>New Image</td>
												<td><input type="file" name="imgg"></td>
												</tr>
												
												<tr>
													<td colspan="2">
														<input type="hidden" name="lat" id="lat" class="form" />
														<input type="hidden" name="lng" id="lng" class="form" />
														<div id="map" style="width:580px; height:300px;"></div>
													</td>
													
												</tr>
												
												<tr> 
												<td>&nbsp;</td> 
												<td><input type="submit" name="submit" value="update" class="button" ></td> 
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
			&copy;Copy Right All Rights Reserved 2014	
		</div>
 </div>
  <!--------------footer end---------> 
  <?php
  }
  ?>
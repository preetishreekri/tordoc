<?php
include_once('function.php');
if(!$_SESSION['adminid'])
{
header("location:index.php");
}
else{ ?>
<html>
    <head>
			<title>Admin Panel</title>
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="css/style.css" rel="stylesheet" type="text/css" />
                        <link href="style.css" rel="stylesheet" type="text/css" />
<!--autocomplete start-->
<link rel="stylesheet" href="js/jquery-ui.css">
<script src="js/jquery-ui.js"></script>	
 <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="delete_city.php?id1="+vals;
			}
		}
</script>
<script type="text/javascript">
 function validateAlpha(){
    var textInput = document.getElementById("city").value;
    textInput = textInput.replace(/[^A-Za-z-" "]/g, "");
    document.getElementById("city").value = textInput;
}

function getcitylist(countryid)
{
    $.ajax({url: "getstate.php",
        type: 'POST',
        data: {"countryidval": countryid},
        success: function(result){
           
       $("#getcity").html(result);
    }});
    
}


function getdistrict(cityid,countryid)
{
     $.ajax({url: "getcity_bystate.php",
        type: 'POST',
        data: {"countryidval": countryid , "stateid" : cityid},
        success: function(result){
           
       $("#getdist").html(result);
    }});
    
}
</script>
 <!--google map start-->  
<script src="https://maps.google.com/maps?file=api&amp;v=2&amp;key="type="text/javascript"></script>
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
        document.getElementById("lat").value = center.lat().toFixed(5);
        document.getElementById("lng").value = center.lng().toFixed(5);

	  GEvent.addListener(marker, "dragend", function() {
       var point = marker.getPoint();
	      map.panTo(point);
       document.getElementById("lat").value = point.lat().toFixed(5);
       document.getElementById("lng").value = point.lng().toFixed(5);

        });
      }
    }
    </script>
	<!--google map end--> 
   </head>
    <body onload="load(20.2960587,85.8245398);">
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
				<div id="left_box">
						<?php include_once("leftbar.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Location
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="location_insert.php" method="post" enctype="multipart/form-data" >
									<table class="table" style="line-height:3.1;">
									    <tr>
										<td>Clinic Name</td>
										<td><input type="text" name="clinic_name" class="form" /></td>
									    </tr>
										
										<tr>
										<td>Country</td>
										<td>
										    <select name="country" id="country" class="form" onchange="getcitylist(this.value);">
											<option value="">Select</option>
											<?php
											$getcontry=mysql_query("select * from `country` group by  `country_name`");
											while($rescountry=mysql_fetch_array($getcontry))
											{
											?>
											<option value="<?php echo $rescountry['id'];?>"><?php echo $rescountry['country_name'];?></option>
											<?php
											}
											?>
										    </select>
										</td>                                       
										</tr>
									    <tr>
										
									    <tr>
										<td>State</td>
										<td id="getcity"></td>
									    </tr>
									    
									    <tr>
										<td>City</td>
										<td id="getdist"></td>
									    </tr>
									    <tr>
										<td>Area</td>
										<td><input type="text" name="area" class="form" /></td>
									    </tr>
									    <tr>
										<td>Building</td>
										<td><input type="text" name="building" class="form" /></td>
									    </tr>
										<tr>
										<td>Street</td>
										<td><input type="text" name="street" class="form" /></td>
									    </tr>
										<tr>
										<td>Landmark</td>
										<td><input type="text" name="landmark" class="form" /></td>
									    </tr>
									    <tr>
										<td>Pincode</td>
										<td><input type="text" name="pincode" class="form" /></td>
									    </tr>
										
									    <tr>
										<td>Contact Person Name</td>
										<td><input type="text" name="name" class="form"/></td>                                       
									     </tr>
									    <tr>
										<td>Upload</td>
										<td><input type="file" name="picture" class="form"/></td>                                       
									     </tr>
										<tr>
										<td colspan="2">
										<div>
                                            <input type="hidden" name="lat" id="lat">
                                            <input type="hidden" name="lng" id="lng">
                                            <div id="map" style="width:750px; height:300px; float: left; margin-left:2px;"></div>      
                                            <div id="show"></div>
										</div>
										</td>
										</tr>
										<tr>
                                        <td>&nbsp;</td>
										<td><input type="submit" name="submit" value="Add" class="button"></td>
									    </tr>
										
									</table>
                                                                    </form>
											<!--<table class="table1" cellpadding="5">
												<tr style="background:url(image/thbg.png);">
													<th>Name of Clinic</th>
													<th colspan="2">Action</th>
												</tr>
												<?php
													
													$sqlcity=mysql_query("select * from `location`");
													while($row=mysql_fetch_array($sqlcity))
													{
												?>
												<tr>
													<td><?php echo $row['clinic_name'];?></td>
													<td><a href="edit_location.php?id=<?php echo $row['id'];?>"><img src="image/edit.png"></a></td>
													<td onClick="delete_data(<?php echo $row['id']; ?>)"><img src="image/delete.png" ></td>
												</tr>
												
													
												
												<?php
													}
												?>
												</tr>
											</table>-->
								</div>
						</div>
				</div>
		</div>
 </div>
  <!--------------content bar end-------->

		 
		 
			
       <!--------------footer---------> 
 <div id="footer-bar">
 		<div id="footer">
				<?php //include_once('footermenu.php');?>
		</div>
 </div>
  <!--------------footer end--------->
    </body>
</html><?php }?>
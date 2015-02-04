<?php
include_once('../function.php');
if(!$_SESSION['agentid'])
{
header("location:../index.php");
}
else{
     $d=date('Y-m-d');
    $date=date('Y-m-d', strtotime($d. ' -2days'));
    //echo date('l jS F (Y-m-d)', strtotime('-3 days'));

?>
<html>
    <head>
			<title>Admin Panel</title>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="../css/style.css" rel="stylesheet" type="text/css" />
          
			<!--menu start-->
<link href="css1/dcaccordion.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type='text/javascript' src='js/jquery.cookie.js'></script>
<script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
<script type='text/javascript' src='js/jquery.dcjqaccordion.2.7.min.js'></script>
<script type="text/javascript">
$(document).ready(function($){
					$('#accordion-5').dcAccordion({
						eventType: 'click',
						autoClose: false,
						saveState: true,
						disableLink: true,
						menuClose: true,
						speed: 'fast',
						showCount: true
					});
					
});
</script>
<link href="css1/skins/blue.css" rel="stylesheet" type="text/css" />
<link href="css1/skins/graphite.css" rel="stylesheet" type="text/css" />
<link href="css1/skins/grey.css" rel="stylesheet" type="text/css" />
<!--menu end-->
<!--datepicker start--->
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%Y-%m-%d"
			
		});
	};
</script>
<!--datepicker end--->
 <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="delete_feedback.php?id1="+vals;
			}
		}
</script>
<script>
function validate()
{
var namee=document.getElementById('dname').value;
var contactno=document.getElementById('contact').value;
var emailid=document.getElementById('email').value;
var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
var password=document.getElementById('password').value;
var areas=document.getElementById('area_name').value;
var designationn=document.getElementById('designation').value;
var experience=document.getElementById('experience').value; 
var location=document.getElementById('location').value; 
var address=document.getElementById('address').value; 
var timeslot=document.getElementById('timeslot').value; 
if(namee=="")
{
alert("Enter a name");
return false;
}
if(contactno=="")
{
alert("Enter your contact number");
return false;
}
if(contactno!="" && contactno.length<10)
{
alert("Please Enter 10 digit phonenumber");
return false;
}
if(contactno!="" && contactno.length>10)
{
alert("Please Enter 10 digit phonenumber");
return false;
}
if(emailid=="")
{
alert("Enter a email address");
return false;
}
if(!emailid.match(format))

	{

	alert("You have entered an wrong email address!"); 
	return false;
    

	}
if(password=="")
{
alert("Enter your password");
return false;
}
if(areas=="")
{
alert("Enter a functionality name");
return false;
}
if(designationn=="")
{
alert("Enter a designation");
return false;
}
if(experience=="")
{
alert("Enter  experience");
return false;
}
if(location=="")
{
alert("Enter a location");
return false;
}
if(address=="")
{
alert("Enter a address");
return false;
}
if(timeslot=="")
{
alert("Enter a timeslot");
return false;
}

}
</script>
 <script  type='text/javascript'>

function numberonly()

{

	var contactt=document.getElementById('contact').value;

	if(isNaN(contactt)|| contactt.indexOf(" ")!=-1)

	{

              			alert("Enter numeric value");

			return false;

    }
	  /* var namee = $("#dname").val();;
        alert(namee);
   var n=name.substring(0,1)
	      na=n.indexOf(' ') >= 0;
              alert(na);
	     if (na==true)
	     {
		alert("Please Check Your Fields For Spaces");
		$("#dname").val("");
		return false;
	     }
	     var pass = document.forms["myform"]["password"].value;
   var p=pass.substring(0,1)
	      pa=p.indexOf(' ') >= 0;
	     if (pa==true)
	     {
		alert("Please Check Your Fields For Spaces");
		$("#password").val("");
		return false;
	     }*/

}
</script>
 <script src="js/jquery.min.js"></script>
    <!--google map-->  
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
<script type="text/javascript">
    function getlat(val) {
	$.ajax({url:"ajax_getlat.php?zip="+val,
	       success:function(results)
	       {
		var res=results.trim();
		var n=res.split(',');
		load(n[0],n[1]);
	       }
	    
	});
    }
</script>
 <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="delete_detail.php?id1="+vals;
			}
		}
</script>
     <!--google map-->
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
						<?php include_once("leftmenu.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Doctor
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="doctor_action.php" method="post" enctype="multipart/form-data" onsubmit="return validate();">
									<table class="table" style="line-height:3.1;">
									    <tr>
                                                                                <td>Name</td>
                                                                                <td><input type="text" name="dname" id="dname" value="" class="form" ></td>
                                                                            </tr>
									    <tr>
                                                                                <td>Phone</td>
                                                                                <td><input type="text" name="phone" id="contact" value="" class="form" onkeyup="return numberonly();"></td>
                                                                            </tr>
									    <tr>
                                                                                <td>Email</td>
                                                                                <td><input type="text" name="email" id="email" value="" class="form" ></td>
                                                                            </tr>
									    <tr>
                                                                                <td>Password</td>
                                                                                <td><input type="password" name="password" id="password" value="" class="form" ></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Speciality</td>
                                                                                <td>
                                                                                    <select name="dspeciality" class="form">
                                                                                        <?php
                                                                                        $specfet=mysql_query("select * from `specification`");
                                                                                        while($specres=mysql_fetch_array($specfet)){
                                                                                        ?>
                                                                                        <option value="<?php echo $specres['slno'];?>"><?php echo $specres['name'];?></option>
                                                                                        <?php }?>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>functionality</td>
                                                                                <td>
                                                                                    <select name="function_area" class="form">
                                                                                        <option value="clinic">clinic</option>
                                                                                        <option value="hospital">Hospital</option>
                                                                                        <option value="nurshinghome">Nushinghome</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>functionality name</td>
                                                                                <td><input type="text" name="area_name" id="area_name" value="" class="form" ></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Designation</td>
                                                                                <td><input type="text" name="designation" id="designation" value="" class="form" ></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Description</td>
										<td><textarea name="description" class="form" style="height:70px;" ></textarea></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Experience</td>
                                                                                <td><input type="text" name="experience" id="experience" value="" class="form"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Consultant fee</td>
                                                                                <td><input type="text" name="con_fee" id="con_fee" value="" class="form" ></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Location</td>
                                                                                <td>
                                                                                    <input type="text" name="location"  class="form" id="location">
                                                                                        <select name="city" class="form">
            
                                                                                            <?php
                                                                                            $sqlcity=mysql_query("select * from `city`");
                                                                                            while($rescity=mysql_fetch_array($sqlcity))
                                                                                            {
                                                                                            ?>
                                                                                        <option value="<?php echo $rescity['slno'];?>"><?php echo $rescity['cityname'];?></option>
                                                                                        <?php  }?>
                                                                                        </select>
										</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>FullAddress</td> 
                                                                                <td><textarea name="address" id="address"  class="form" style="height:70px;"></textarea></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Time Slot</td>
                                                                                <td><input type="text" name="timeslot" id="timeslot" value="" class="form" ></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Image</td>
                                                                                <td><input type="file" name="image" value="" ></td>
                                                                            </tr>
                                                                        </table>
									<div>
                                                                                        <input type="hidden" name="lat" id="lat">
                                                                                        <input type="hidden" name="lng" id="lng">
                                                                                    <div id="map" style="width:750px; height:300px; float: left; margin-left: 20px;"></div>
                                                                                    <div><button class="button">insert</button></div>
                                                                                    <div id="show"></div>
									</div>
									</table>
                                                                    </form>
											<table class="table1" cellpadding="5" style="margin-top:20px;">
											<tr style="background:url(image/thbg.png);">
											<th>Doctor Name</th>
											<th>Speciality</th>
											<th>Functionality Name</th>
											<!--<th>Designation</th>-->
											<th colspan="2">Action</th>
											</tr>
											<?php
											$sqldetail=mysql_query("select * from `details`"); 
											while($resdetail=mysql_fetch_array($sqldetail)){
                                            $fspeciality=mysql_query("select * from specification where slno='$resdetail[speciality]'");
                                            $rspeciality=mysql_fetch_array($fspeciality);
											?>
											<tr>
											<td><?php echo $resdetail['doctor_name'];?></td>
											<td><?php echo $rspeciality['name'];?></td>
											<td><?php echo $resdetail['functionality_name'];?></td>
											<!--<td><?php echo $resdetail['designation'];?></td>-->
											<td><a href="edit_detail.php?id=<?php echo $resdetail['slno'];?>"><img src="image/edit.png"></a></td>
											<td onClick="delete_data(<?php echo $resdetail['slno']; ?>)"><img src="image/delete.png" ></td>
											</tr>
																						
											<?php  } ?>
											
									</table>
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
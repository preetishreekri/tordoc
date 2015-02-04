<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css1/style.css" type="text/css" rel="stylesheet"  />
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
</style>
<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>

<script>
	var letters = /^[A-Za-z ]+$/; 
$(function(){
    $(".onlynumberval").each(function() {
		$(this).keyup(function(e) {
		
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
				alert('Only numeric value accepted');
				$('#'+$(this).attr('id')).val('');
				 return false;
				
                }

		});
      });
    
   
   
   $(".charonlyvalidate").each(function() {
		$(this).keyup(function() {
		  
		
		if (!$(this).val().match(letters)) {
				 alert("Enter only Alphabet Characters...");
				$('#'+$(this).attr('id')).val('');
				 return false;
				
                }

		});
      }); 
    
    
    
    
    
    
    
$('#check').click(function() {
           
    if( $('#check:checked').length > 0 ) {
          
     
        
        $('#building_correspondence').val($('#building_permanent').val());
        $('#street_correspondence').val($('#street_permanent').val());
        $('#landmark_correspondence').val($('#landmark_permanent').val());
        $('#area_correspondence').val($('#area_permanent').val());
        $('#pin_correspondence').val($('#pin_permanent').val());
        $('#city_correspondence').val($('#city_permanent').val());
        $('#state_correspondence').val($('#state_permanent').val());
        $('#country_correspondence').val($('#country_permanent').val());
        
        
    }
    else{
           
        
        $('#building_correspondence').val('');
        $('#street_correspondence').val('');
        $('#landmark_correspondence').val('');
        $('#area_correspondence').val('');
        $('#pin_correspondence').val('');
        $('#city_correspondence').val('');
        $('#state_correspondence').val('');
        $('#country_correspondence').val('');
        
    }
    
    
});

});
</script>
</head>
<body>
<div id="content_bar">
		<div id="content">
				<div id="content_box">
						<div id="content_box1">
								<div id="head">
											<p class="text">
													<img src="image/logo.jpg" width="300"  />
													<br />
													ULTRA SOFT,By-pass,Bhadrak,Odisha<br />
													Contact:+91 9040921192,e-mail-info@tordoc.com,<br />
													Website:www.tordoc.com,www.tordoc.in,www.utrasoft.co.in<br />
			 								</p>
											<span style="width:200px; height:auto; padding:7px 25px; background:#000; color:#fff; font-weight:bold; font-size:17px;">DOCTOR'S ENTRY FORM</span>
								</div>
								<div class="head_text" style="margin-top:15px;">
										personal details:
								</div>
								<div class="table_box">
								<?php
								if(isset($_GET['mess']))
								{
								echo $_GET['mess'];
								}
								?>
								<form name="f" action="insert_doctor.php" method="post" enctype="multipart/form-data">
										<table class="table">
												<tr>
														<td>Name of Doctors:</td>
														<td><input type="text" name="name" id="name" class="form charonlyvalidate"   /></td>
														<td rowspan="5" align="right">
														Upload Picture
														<div style=" width:130px; height:130px; border:1px solid #000; margin-right:10%;"></div>
														<div style=" width:auto; height:auto;float:left;">
														<input type="file" name="picture" style="margin-left:55%; margin-top:3%;"/></div>
														
														</td>
												</tr>
												
												<tr>
														<td> Specialization:</td>
														<td><input type="text" name="special" class="form"  /></td>
														
												</tr>
												<tr>
														<td>Gender:</td>
														<td>
														<input type="radio" name="gender" value="male" /> Male 
														<input type="radio" name="gender" value="female" />  Female
														</td>
														
												</tr>
												<tr>
														<td>DOB</td>
														<td>
														<input type="text" name="day" class="form onlynumberval" style="width:110px;"  placeholder="day" id="day"/>
														<input type="text" name="month" class="form onlynumberval" style="width:110px;"  placeholder="month" id="month"/>
														<input type="text" name="year" class="form onlynumberval" style="width:110px;"  placeholder="year" id="year"/>
														</td>
														
												</tr>
												
												<tr>
														<td>Qualification</td>
														<td colspan="2"><input type="text" name="qualify" class="form"  style="width:600px;" /></td>	
												</tr>
												
										</table>
								</div>
								
								<div class="head_text">
										permanent address :
								</div>
								
								<div class="table_box">
										<table class="table">
												<tr>
														<td width="80">Building :</td>
														<td><input type="text" name="building_permanent" id="building_permanent" class="form2" /></td>	
												</tr>
												<tr>
														<td>Street :</td>
														<td><input type="text" name="street_permanent" id="street_permanent" class="form2" /></td>	
												</tr>
												<tr>
														<td>Landmark :</td>
														<td><input type="text" name="landmark_permanent" id="landmark_permanent" class="form2" /></td>	
												</tr>
												<tr>
														<td>Area :</td>
														<td><input type="text" name="area_permanent" id="area_permanent" class="form2" style="width:30%;" />
														Pin Code : <input type="text" name="pin_permanent" id="pin_permanent" class="form2 onlynumberval" style="width:30%;" /></td>	
												</tr>
												<tr>
														<td>City :</td>
														<td><input type="text" name="city_permanent" id="city_permanent" class="form2" style="width:30%;" />
														State : <input type="text" name="state_permanent" id="state_permanent" class="form2" style="width:30%;" /></td>	
												</tr>
												<tr>
														<td width="80">Country :</td>
														<td><input type="text" name="country_permanent" id="country_permanent" class="form2" /></td>	
												</tr>
												<tr>
												<td><input type="checkbox" name="check" id="check" /></td>
												<td>When Check Correspondence Address will same as Permanent Address</td>
												</tr>
										</table>
								</div>
								
								<div class="head_text">
										correspondence address
								</div>
								<div class="table_box">
										<table class="table">
												<tr>
														<td width="80">Building :</td>
														<td><input type="text" name="building_correspondence" id="building_correspondence" class="form2" /></td>	
												</tr>
												<tr>
														<td>Street :</td>
														<td><input type="text" name="street_correspondence" id="street_correspondence" class="form2" /></td>	
												</tr>
												<tr>
														<td>Landmark :</td>
														<td><input type="text" name="landmark_correspondence" id="landmark_correspondence" class="form2" /></td>	
												</tr>
												<tr>
														<td>Area :</td>
														<td><input type="text" name="area_correspondence" id="area_correspondence" class="form2" style="width:30%;" />
														Pin Code : <input type="text" name="pin_correspondence" id="pin_correspondence" class="form2 onlynumberval" style="width:30%;" /></td>	
												</tr>
												<tr>
														<td>City :</td>
														<td><input type="text" name="city_correspondence" id="city_correspondence" class="form2" style="width:30%;" />
														State : <input type="text" name="state_correspondence" id="state_correspondence" class="form2" style="width:30%;" /></td>	
												</tr>
												<tr>
														<td width="80">Country :</td>
														<td><input type="text" name="country_correspondence" id="country_correspondence" class="form2" /></td>	
												</tr>
										</table>
								</div>
								<div class="head_text">
										contact details:
								</div>
								
								<div class="table_box">
										<table class="table">
												<tr>
														<td colspan="2">Contact No. (p) <input type="text" name="contact_personal" class="form2 onlynumberval" style="width:88%;" id="contact_personal"/></td>
															
												</tr>
												<tr>
														<td colspan="2">Email Id(p)  <input type="text" name="email_personal" class="form2" style="width:91%;"/></td>	
												</tr>
												<tr>
														<td>Mob No(for booking conformation setting) :</td>
														<td><input type="text" name="contact_booking" class="form2 onlynumberval" id="contact_booking" /></td>	
												</tr>
												<tr>
														<td>Email Id(for booking conformation mail) :</td>
														<td><input type="text" name="email_booking" class="form2" /></td>	
												</tr>
												<tr>
														<td colspan="2">Contact person name : <input type="text" name="person_name" class="form2 charonlyvalidate" style="width:83%;"/></td>
															
												</tr>
												<tr>
														<td colspan="2">Contact person Designnation : <input type="text" name="designation" class="form2" style="width:78%;"/></td>	
												</tr>
										</table>
								</div>
								<div class="head_text">
											Professional details :
								</div>
								<div class="table_box">
										<table class="table">
												<tr>
														<td width="170">Work Exprience :</td>
														<td><input type="text" name="exp_year" class="form2 onlynumberval" style="width:100px;" id="exp_year"/>Years
														<input type="text" name="exp_month" class="form2 onlynumberval" style="width:100px;" id="exp_month"/> Month</td>
												</tr>
												<tr>
														<td>Organisation name :</td>
														<td><input type="text" name="organization" class="form2" /></td>
															
												</tr>
												<tr>
														<td>Address of Organisation :</td>
														<td><input type="text" name="address_org" class="form2" /></td>	
												</tr>
												<tr>
														<td valign="top">
																Service Offered :
														</td>	
														<td><textarea class="form2" style=" height:80px;" name="service"></textarea></td>
												</tr>
												<tr>
														<td>Specialist on :</td>
														<td> <input type="text" name="specialist" class="form2"/></td>
												</tr>
												<tr>
														<td>Award and recognisation :</td>
														<td> <input type="text" name="award" class="form2"/></td>
												</tr>
										</table>
								</div>
								<div class="head_text">
											Bank Details :
								</div>
								<div class="table_box">
										<table class="table">
												<tr>
														<td width="120">Bank Name :</td>
														<td><input type="text" name="bank" class="form2" /></td>
												</tr>
												<tr>
														<td>Branch Name :</td>
														<td><input type="text" name="branch_name" class="form2" /></td>
												</tr>
												<tr>
														<td>Branch Address :</td>
														<td><input type="text" name="branch_address" class="form2" /></td>
												</tr>
												<tr>
														<td>Account No.</td>
														<td><input type="text" name="account" class="form2 onlynumberval" id="account"/></td>
												</tr>
												<tr>
														<td>FSC Code :</td>
														<td><input type="text" name="fsc" class="form2" /></td>
												</tr>
												<tr>
														<td>&nbsp;</td>
														<td><input type="submit" name="submit" id="submit" value="Submit" /></td>
												</tr>
												
										</table>
								</div>
						</div>
				</div>
		</div>
</div>
</body>
</html>


<?php
include_once("admin/function.php");
 $getdrugdets=mysql_query("select * from `specification`")or die(mysql_error());
    while($resdrugdets=mysql_fetch_array($getdrugdets))
    {
	$getemail[] = array(
	'value'  => $resdrugdets['name'],
	'idval' => $resdrugdets['slno']
	);
    }
	$getcity=mysql_query("select * from `location`")or die(mysql_error());
    while($rescity=mysql_fetch_array($getcity))
    {
	$getemails[] = array(
	'value'  => $rescity['area'],
	'idval' => $rescity['id']
	);
    }
	$getdetails=mysql_query("select * from `doctor_details`")or die(mysql_error());
    while($resdetails=mysql_fetch_array($getdetails))
    {
	$get[] = array(
	'value'  => $resdetails['name'],
	'idval' => $resdetails['id']
	);
    }
	$getclinic=mysql_query("select * from `details`")or die(mysql_error());
    while($resclinic=mysql_fetch_array($getclinic))
    {
	$val=html_entity_decode($resclinic['functionality_name'],ENT_QUOTES);
	$getc[] = array(
	'value'  => $val,
	'idval' => $resclinic['slno']
	);
    }
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <title>Social Networking Site</title>
        
        <link rel="stylesheet" href="homeresponsiv.css" type="text/css" media="screen" />
		 <link rel="stylesheet" href="homestyle.css" type="text/css" media="screen" />
        <style>
	    tr{
		height: 30px;
	    }
	</style>
	 <link type="text/css" rel="stylesheet" href="css/responsive-tabs.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
	

	<!------------------------------------menu---------------------------->	
		<link type="text/css" rel="stylesheet" href="css3/jquery.mmenu.css" />
			<script src="js/jquery-2.1.0.min.js"></script>
		<script type="text/javascript" src="js/jquery-v1.7.1.js"></script>
		<script type="text/javascript" src="js/jquery-hover-effect.js"></script>
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
		<script type="text/javascript">
			$(function() {

				var pos 	= 'mm-top mm-right mm-bottom',
					zpos	= 'mm-front mm-next';

				var $html 	= $('html'),
					$menu	= $('nav#menu'),
					$both	= $html.add( $menu );

				$menu.mmenu();

				//	Add the position-classnames onChange
				$('input[name="pos"]').change(function() {
					$both.removeClass( pos ).addClass( 'mm-' + this.value );
				});
				$('input[name="zpos"]').change(function() {
					$both.removeClass( zpos ).addClass( 'mm-' + this.value );
				});
			});
		</script>
<!---------------menu end-------------->
	<!--autocomplete start-->
<link rel="stylesheet" href="css/jquery-ui.css">
<!--<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>-->
<script src="js/jquery-ui.js"></script>
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?= json_encode($getemail); ?>;
        $('.item_email').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
  
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('.item_email').val(valshow);
		$('.specf_slno').val(ui.item.idval);
        return false;
		}
        });
});
</script>
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?= json_encode($getemails); ?>;
        $('.city_val').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
  
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('.city_val').val(valshow);
		$('.city_slno').val(ui.item.idval);
        return false;
		}
        });
});
</script>
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?= json_encode($get); ?>;
        $('.doctor_val').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
  
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
       $('.doctor_val').val(valshow);
		$('.doctor_slno').val(ui.item.idval);
        return false;
		}
        });
});
</script>
<script type="text/javascript">
    $(function(){
        var availabledrugs=<?= json_encode($getc); ?>;
        $('.func_val').autocomplete({
	 select: function(event,ui){
  $(this).val((ui.item ? ui.item.id : ""));
  
},
        source: availabledrugs,
        select: function( event, ui )
		{
		var valshow=ui.item.value;
        $('.func_val').val(valshow);
		$('.func_slno').val(ui.item.idval);
        return false;
		}
        });
});
</script>
<!--autocomplete end-->
<script>
function validate()
{
var sp=document.getElementById('specfi').value;
var loc=document.getElementById('locate').value;
var doct=document.getElementById('search_doc').value;
var clin=document.getElementById('search_cl').value;
if(sp==""&& loc=="" && doct=="" && clin=="")
{
alert("Provide a criteria to search");
return false;
}
else
{
	 return true;
 }
}
</script>
<script>
							function validate_register()
							{
							var usernmm=document.getElementById('usernmm').value;
							var eml=document.getElementById('eml').value;
							var format = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
							var pwd=document.getElementById('pwd').value;
							var contt=document.getElementById('contt').value;
							var address=document.getElementById('address').value;
							if(usernmm=="")
							{
							alert("Enter your name");
							return false;
							}
							if(eml=="")
							{
							alert("Enter your email address");
							return false;
							}
							if(!eml.match(format))
							{
							alert("You have entered an wrong email address!"); 
							return false;
							}
							if(pwd=="")
							{
							alert("Enter your password");
							return false;
							}
							if(contt=="")
							{
							alert("enter your contact number");
							return false;
							}
							if(contt.length<10)
							{
							alert("Please Enter 10 digit phonenumber");
							return false;
							}
							if(contt.length>10)
							{
							alert("Please Enter 10 digit phonenumber");
							return false;
							}
							}
					</script>
					<script  type='text/javascript'>

						function numberonly()

						{

							var contactt=document.getElementById('contt').value;

							if(isNaN(contactt)|| contactt.indexOf(" ")!=-1)

							{

												alert("Enter numeric value");

									return false;

							}
						}
					</script>	
				<!--	<script>
$(function(){
$('#specfi').click(function(){
$.ajax({url:"ajax_detail.php",success:function(result){													
     $("#spval").html(result);
	}});
})
})

</script>
<script>
function getspef(sppval)
{
document.getElementById('specfi').value=sppval;
$('#spval').hide();
}
</script>-->
<link rel="stylesheet" href="css/reveal.css">	
		<!--<script type="text/javascript" src="jquery-1.6.min.js"></script>-->
		<script type="text/javascript" src="js/jquery.reveal.js"></script>
    </head>
    
    <body style="background:#fff;">
<!--------------------menu----------->
<nav id="menu">
		<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="doctorview.php">Doctor View</a></li>
				<li><a href="#">Appointment</a></li>
		</ul>
</nav>
<!--------------menu end------------>
        <div id="topbar">
            <div id="topbar_content">
				<div class="mobile_menu">
						<a href="#menu"><img src="images/index.png"  /></a>	
				</div>
				<div style="width:300px; height:auto; float:left; margin-top:10px; margin-left:20px;">
						<input type="text" name="" value="" class="form"  style="border:1px solid #ccc; height:18px;"/>
						<input type="button" value="submit"  class="button" style="background:#2c5ec3; border:1px solid #092c74; color:#fff; padding-left:5px; padding-right:5px;"/>
				</div>
                <div id="menubar">
					<div class="menu">
						<a href="#" class="big-link" data-reveal-id="myModal3" data-animation="none" style="color:#000; text-decoration:none;">Register</a>
					</div>
                    <div class="menu">
                        <a href="#" class="big-link" data-reveal-id="myModal2" data-animation="none" style="color:#000; text-decoration:none;">Login</a>
                    </div>
                    <!--<div class="menu">
                       Sign Up
                    </div>-->
					<div class="menu mobile_menu2">
                       <a href="doctorview.php">Appointment</a>
                    </div>
					
                </div>
            </div>
        </div>
        
      
        <div id="container">
	 <?php
	 if($_GET['msg']){ echo $_GET['msg']; }
	 ?>
				<table class="table1">
					<tr>
						<td>
						<div id="container_content">
							<div id="logo_box">
											<img src="images/logo.png" style="width:100%; float:left;" />
							</div>
							<div id="left_container" style="margin-top:10px; background:none; box-shadow:none;">
							<form name="myform" method="post" action="doctorview.php" onsubmit="return validate();">
								<div id="horizontalTab">
								<div id="tab-1">
										<!--<form class="form-wrapper">-->
											<div class="form_box">
											<input type="text" placeholder="eg. Dentist,Gynecologist" class="mobile_form item_email"  autocomplete="off" id="specfi" name="spefname"/>
											<input type="hidden" name="hd_spec" class="specf_slno"/>
											<!--<div id="spval"></div>-->
											</div>
											<div class="form_box2">
											<input type="text" placeholder="eg. Bhubaneswar"  class="mobile_form city_val" autocomplete="off" id="locate"/>
											<input type="hidden" name="hd_city" class="city_slno"/>
											</div>
											
											<input type="submit" value="Search" class="submit" />
											<input type="submit" value="" class="search2" />

										<!--</form>-->
								</div>
								<div id="tab-2">
									<!--<form class="form-wrapper">-->
											<div class="form_box3">
											<input type="text" id="search_doc" placeholder="eg. Dr. Aswini Kar"  autocomplete="off" class=" mobile_form doctor_val" name="doct_name"/>
											<input type="hidden" name="hd_doctor" class="doctor_slno"/>
											</div>
											<input type="submit" value="Search" class="submit" />
											<input type="submit" value="" class="search2" />
								  <!--</form>-->
								</div>
								<div id="tab-3">
									<!--<form class="form-wrapper">-->
											<div class="form_box3">
											<input type="text" id="search_cl" placeholder="eg. kar Clinic"  autocomplete="off" class="mobile_form func_val" name="clinic_name"/>
											<input type="hidden" name="hd_clinic" class="func_slno"/>
											</div>
											<input type="submit" value="Search" class="submit" />
											<input type="submit" value="" class="search2" />
								 <!-- </form>-->
								</div>
								<ul>
									<li><a href="#tab-1">Speciality</a></li>
									<li><a href="#tab-2">Doctor</a></li>
									<li><a href="#tab-3">Clinic</a></li>
									
								</ul>
								<div style="width:120px; margin:auto; display:none;">
										<input type="submit" value="Search" id="submit" class="search" />
								</div>
							 </div>
							 </form>
								
								<!-- jQuery with fallback to the 1.* for old IE -->
						<!--[if lt IE 9]>
							<script src="js/jquery-1.11.0.min.js"></script>
						<![endif]-->
						<!--[if gte IE 9]><!-->
							
						<!--<![endif]-->
					
						<!-- Responsive Tabs JS -->
						<script src="js/jquery.responsiveTabs.js" type="text/javascript"></script>
					
						<script type="text/javascript">
							$(document).ready(function () {
								$('#horizontalTab').responsiveTabs({
									rotate: false,
									startCollapsed: 'accordion',
									collapsible: 'accordion',
									setHash: true,
									activate: function(e, tab) {
										$('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
									},
									activateState: function(e, state) {
										//console.log(state);
										$('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
									}
								});
					
								 $('#horizontalTab').responsiveTabs('activate', 0);
					
							});
						</script>
							</div>
						
							   
						  </div>
						<td>
					</tr>
			</table>
        </div>
		
					 <div id="myModal" class="reveal-modal">
					  LOGIN
					   <form name="myform1" action="login_agent.php" method="post">
					     <table>
					      <tr>
					       <td>Doctor emailid</td>
					       <td><input type="text" name="doctname" class="form" required></td>
					      </tr>
					      <tr>
					       <td>Password</td>
					       <td><input type="password" name="doctpass" class="form" required></td>
					      </tr>
					      <tr>
					       <td><input type="submit" name="logdoc" value="login"></td>
					      <!-- <td>New User Register Now<input type="submit" name="regisub" value="register"></td>-->
					      </tr>
					     </table>
					   </form>
					   <a class="close-reveal-modal">&#215;</a>
					 </div>
					 
					<div id="myModal1" class="reveal-modal">
					  LOGIN
					    <form name="myform1" action="login_agent.php" method="post">
					     <table>
					      <tr>
					       <td>Agent name</td>
					       <td><input type="text" name="agentname" class="form" required></td>
					      </tr>
					      <tr>
					       <td>Password</td>
					       <td><input type="password" name="agentpass" class="form" required></td>
					      </tr>
					      <tr>
					       <td colspan="2"><input type="submit" name="logagent" value="login"></td>
					      <!-- <td>New User Register Now<input type="submit" name="regisub" value="register"></td>-->
					      </tr>
					     </table>
					    </form>
					   <a class="close-reveal-modal">&#215;</a>
					 </div>
					<div id="myModal2" class="reveal-modal">
					  LOGIN
					    <form name="myform2" action="login_agent.php" method="post">
					     <table>
					      <tr>
					       <td>User Name</td>
					       <td><input type="text" name="username" class="form" required></td>
					      </tr>
					      <tr>
					       <td>Password</td>
					       <td><input type="password" name="userpass" class="form" required></td>
					      </tr>
					      <tr>
					       <td colspan="2"><input type="submit" name="loguser" value="login"></td>
					      <!-- <td>New User Register Now<input type="submit" name="regisub" value="register"></td>-->
					      </tr>
					     </table>
					    </form>
					   <a class="close-reveal-modal">&#215;</a>
					 </div>
					
					 		<div id="myModal3" class="reveal-modal">
									 New Register
								    <form name="myform2" action="userinsert.php" method="post" onsubmit="return validate_register();">
								     <table>
								      <tr>
								       <td>Name</td>
								       <td><input type="text" name="user" class="form" id="usernmm"></td>
								      </tr>
								      <tr>
								       <td>email</td>
								       <td><input type="email" name="email" class="form" id="eml"></td>
								      </tr>
								       <tr>
								       <td>Password</td>
								       <td><input type="password" name="pass" class="form" id="pwd"></td>
								      </tr>
								      <tr>
								       <td>contact</td>
								       <td><input type="text" name="contact" class="form" id="contt" onkeyup="return numberonly();"></td>
								      </tr>
								      <tr>
								       <td>address</td>
								       <td><input type="text" name="address" class="form" id="address"></td>
								      </tr>
								      <tr>
								       <td><input type="submit" name="userinsert" value="Register"></td>
								      </tr>
								     </table>
								    </form>
								   <a class="close-reveal-modal">&#215;</a>
								</div>
	
	
	<div id="footer">
			<div id="footer_left">
					<div class="footer_menu mobile_menu2">
							<a href="#" class="big-link" data-reveal-id="myModal" data-animation="none">Are you a doctor</a>
					</div>
					<div class="footer_menu mobile_menu2" style="border-right:none;">
							<a href="#" class="big-link" data-reveal-id="myModal1" data-animation="none">Are you an Agent</a>
					</div>
					
			</div>
			<div id="footer_right">
					<div class="footer_menu">
							<a href="doctorview.php"> About </a>					</div>
					<div class="footer_menu">
							<a href="doctorview.php">Doctorview</a>					</div>
					<div class="footer_menu">
							<a href="#">Contact us</a>					</div>
			</div>
	</div>
    </body>
</html>

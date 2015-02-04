<?php 
include_once("function.php");
connect();
$res=check_session($_SESSION['mlm5_admin_id'],$_SESSION['mlm5_admin_pass']);
if($res!=1)
{
header("location:index.php");
}
else
	{
if($_SESSION['mlm5_admin_type']!="Admin" && $_SESSION['mlm5_admin_type']!="Employee" && $_SESSION['mlm5_admin_type']!="Special_Employee")
header("location:notallowed.php");
	else
	{
$que_pin=mysql_query("SELECT * FROM `login_details` where `id`='$_SESSION[mlm5_admin_id]'");
$res_pin=mysql_fetch_array($que_pin);

$query = mysql_query("SELECT * FROM `user_info` where `login_id`='$_POST[login_id]'");
	$result=mysql_fetch_array($query);
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>bhabijee</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>

</head>


<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><?php echo $_SESSION['mlm5_admin_type']; ?></h1>
			<h2 class="section_title"><a href="home.php" >Home</a></h2><div class="btn_view_site"><a href="logout.php">Logout</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	
	<section id="secondary_bar">
		<div class="user">
			<p><?php echo $_SESSION['mlm5_admin_id']; ?></p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="home.php">Home</a> <div class="breadcrumb_divider"></div> <a href="edit_applicant_details.php">Edit</a><div class="breadcrumb_divider"></div><a class="current">Edit Details</a></article>
			<div style="margin-top:10px;"> Pin balance: <span style="color:#003300;"><strong><?php echo $res_pin['app_capacity']; ?></strong></span></div>
		</div>
	</section><!-- end of secondary bar -->
	
	<!-- end of sidebar -->
	
	<section id="main" class="column">
	  <!-- end of stats article -->
	 
<div class="clear"></div>
		
		<article class="module width_full">
			
			<header><h3>Edit detals</h3></header>
				<div class="module_content">
						<form name="form1" method="post" action="applicant_update.php"  enctype="multipart/form-data">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top" >ID:</th>
			<td> <input type="text" readonly="true" class="inp-form-error" name="id" id="id" value="<?php echo $_POST['login_id'];?>" /></td>
			<td>
			<div class="error-left"></div>
			<div class="error-inner">This field Cannot be Changed</div>
			</td>
		</tr>
		<tr>
			<th valign="top" >Seniour ID:</th>
			<td> <input type="text" readonly="true" class="inp-form-error" name="s_id" id="s_id" value="<?php echo $result['s_id'];?>" /></td>
			<td>
			<div class="error-left"></div>
			<div class="error-inner">This field Cannot be Changed</div>
			</td>
		</tr>
		<tr>
			<th valign="top">Applicant Name:</th>
			<td><input type="text" class="inp-form-error" id="name"  name="name" value="<?php echo $result['m_name'];?>"  onkeyup="return nameUpperFirst(this.value)"/></td>
			<td>
			
			</td>
		</tr>
		<tr>
		<th valign="top">Gender:</th>
		<td>	
		<select class="styledselect_form_1" name="gender" tabindex="5"><option value="<?php echo $result['gender'];?>"><?php echo $result['gender'];?></option>
																		<option value="male">Male</option>
																		<option value="female">Female</option>
																		</select>
		</td>
		<td></td>
		</tr>
		
		<tr>
			<th valign="top">Nationality:</th>
			<td><input name="nationality" id="nationality" type="text" class="inp-form" value="<?php echo $result['nationality'];?>" onKeyUp="return nationalityUpperFirst(this.value)" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Contact No:</th>
			<td><input type="text" class="inp-form-error" id="contact_no" name="contact_no" value="<?php echo $result['mobile_no'];?>" onKeyPress="return isNumberKey(event)"/></td>
			<td>
			
			</td>
		</tr>
		<tr>
			<th valign="top">E-mail:</th>
			<td><input  name="email" id="email" value="<?php echo $result['email'];?>" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		
	<tr>
		<th valign="top">Address:</th>
		<td><textarea rows="" cols=""  name="address" id="address" class="form-textarea" onKeyUp="return addressUpperFirst(this.value)"><?php echo $result['address'];?></textarea></td>
		<td></td>
	</tr>
	<tr>
			<th valign="top">District:</th>
			<td><input  name="district" id="district" type="text" class="inp-form" value="<?php echo $result['district'];?>" onKeyUp="return districtUpperFirst(this.value)"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">State:</th>
			<td><input  name="state" id="state" value="<?php echo $result['state'];?>" onKeyUp="return stateUpperFirst(this.value)" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		
		<tr>
			<th valign="top">Pan No:</th>
			<td><input  name="pan_no" value="<?php echo $result['pan_no'];?>" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Nominee Name:</th>
			<td><input  name="nominee_name" id="nominee_name" value="<?php echo $result['n_name'];?>" onKeyUp="return nomineeNameUpperFirst(this.value)" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Bank IFSC Code</th>
			<td><input  name="ifsc" id="ifsc"  type="text" class="inp-form"  value="<?php echo $result['ifsc_code'];?>" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Bank Name:</th>
			<td><input  name="bank_name" id="bank_name" type="text" class="inp-form" value="<?php echo $result['bank_name'];?>"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Bank Account No:</th>
			<td><input  name="acc_no" id="acc_no" value="<?php echo $result['acc_no'];?>" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="Submit"  name="submit" />
			<input type="reset" value="Reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	</form>
						<div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
				 
				</div>
			</footer>
		
		</article><!-- end of post new article -->
		<!-- end of styles article -->
<div class="spacer"></div>
</section>

<?php }}?>
</body>

</html>
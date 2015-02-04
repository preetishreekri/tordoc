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
if($_SESSION['mlm5_admin_type']!="Admin" && $_SESSION['mlm5_admin_type']!="Special_Employee")
header("location:notallowed.php");
	else
	{
$que_pin=mysql_query("SELECT * FROM `login_details` where `id`='$_SESSION[mlm5_admin_id]'");
$res_pin=mysql_fetch_array($que_pin);

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
			<article class="breadcrumbs"><a href="home.php">Home</a> <div class="breadcrumb_divider"></div> <a class="current">View Pin Balance of User</a></article>
			<div style="margin-top:10px;"> Pin balance: <span style="color:#003300;"><strong><?php echo $res_pin['app_capacity']; ?></strong></span></div>
		</div>
	</section><!-- end of secondary bar -->
	
	<!-- end of sidebar -->
	
	<section id="main" class="column">
	  <!-- end of stats article -->
	 
<div class="clear"></div>
		
		<article class="module width_full">
			
			<header><h3>Package</h3></header>
				<form action="view_user_package.php" method="post">
				<div class="module_content">
						<fieldset style="width:48%; float:left; margin-right: 3%;">
							<label>Select package</label>
							<select style="width:92%;" name="login_id" id="login_id">
			
			<option value="1">Economy</option>
			<option value="5">Regular</option>
			<option value="7">Family</option>
			<option value="15">Business</option>
			<option value="22">Royal</option>
			</select>
							
						</fieldset>
						<fieldset style="width:48%; float:left; margin-right: 3%;">
							<label>&nbsp;</label>
							<input type="submit" style="width:92%;" value="Click here to view Power ID" >
						</fieldset>
						
												<div class="clear"></div>
				</div>
				</form>
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
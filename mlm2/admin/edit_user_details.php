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
if($_SESSION['mlm5_admin_type']!="Admin")
header("location:notallowed.php");
	else
	{
$que_pin=mysql_query("SELECT * FROM `login_details` where `id`='$_SESSION[mlm5_admin_id]'");
$res_pin=mysql_fetch_array($que_pin);

$que_x=mysql_query("SELECT * FROM `login_details` where `slno`='$_GET[x]'");
$res_x=mysql_fetch_array($que_x);
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Admin Panel</title>
	
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
			<article class="breadcrumbs"><a href="home.php">Home</a> <div class="breadcrumb_divider"></div> <a class="current">Send Balance To User</a></article>
			<div style="margin-top:10px;"> Pin balance: <span style="color:#003300;"><strong><?php echo $res_pin['app_capacity']; ?></strong></span></div>
		</div>
	</section><!-- end of secondary bar -->
	
	<!-- end of sidebar -->
	
	<section id="main" class="column">
	  <!-- end of stats article -->
	 
<div class="clear"></div>
		
		<article class="module width_full">
			<form name="form1" method="post" action="update_emp.php">
			<header><h3>Send Balance To User</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Enter Employee ID</label>
							<input type="hidden" name="hdn" value="<?php echo $_GET['x'];?>">
							<input type="text" name="emp_id" id="emp_id" value="<?php echo $res_x['id'];?>" >
						</fieldset>
						
						<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
							
							<label >Password</label>
							<input type="text" style="width:92%;" name="password" id="password" value="<?php echo $res_x['password'];?>">
						</fieldset>
						<fieldset style="width:48%; float:left;"> <!-- to make two field float next to one another, adjust values accordingly -->
							<label>Type</label>
							<select style="width:92%;" name="type" id="type" >
								<option value="<?php echo $res_x['type'];?>"> <?php echo $res_x['type'];?></option>
								<option value="Employee">Employee</option>
								<option value="Special_Employee">Special Employee</option>
								<option value="Admin">Admin</option>
							</select>
						</fieldset><div class="clear"></div>
				</div>
			<footer>
				<div class="submit_link">
				  <input type="submit" value="Send" name="submit" class="alt_btn">
					<input type="reset" style="height:25px;" value="Reset">
				</div>
			</footer>
			</form>
		</article><!-- end of post new article -->
		<!-- end of styles article -->
<div class="spacer"></div>
</section>

<?php }}?>
</body>

</html>
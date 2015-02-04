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
		  <article class="breadcrumbs"><a class="current">Home</a></article>
		</div>
	</section><!-- end of secondary bar -->
	
	<aside id="sidebar" class="column">
		<form class="quick_search">
			<input type="text" value="Quick Search" onFocus="if(!this._haschanged){this.value=''};this._haschanged=true;">
		</form>
		<hr/>
		
		<h3>Users</h3>
		<ul class="toggle">
			<li class="icn_new_article"><a href="send_user_pin.php">Send Pin to User</a></li>
			<li class="icn_tags"><a href="view_user_pin.php">View Pin</a></li>
			<?php if($_SESSION['mlm5_admin_type']=="Admin"){
					
					echo "<li class='icn_edit_article'><a href='edit_applicant_details.php'>Edit Details</a></li>";
					}
				else{}
			?>
			<!--<li class="icn_view_users"><a href="#">View User</a></li>-->
			
			<?php if($_SESSION['mlm5_admin_type']=="Admin" || $_SESSION['mlm5_admin_type']=="Special_Employee"){
					echo "<li class='icn_edit_article'><a href='return_user_pin.php'>Pin Return</a></li>";
					echo "<li class='icn_security'><a href='view_user_pass.php'>View Password</a></li>";
					echo "<li class='icn_edit_article'><a href='edit_user_pass.php'>Edit Password</a></li>";
					echo "<li class='icn_add_user'><a href='payout_user.php'>Payout</a></li>";
					echo "<li class='icn_add_user'><a href='view_quantity.php'>Achivment  List</a></li>";
					echo "<li class='icn_settings'><a href='gen.php'>Tree View</a></li>";
					echo "<li class='icn_settings'><a href='view_user_1200.php'>view user balance more than 500</a></li>";
					echo "<li class='icn_settings'><a href='view_user_100.php'>view user balance more than 100</a></li>";
					echo "<li class='icn_settings'><a href='view_user_50.php'>view user balance more than 50</a></li>";
					echo "<li class='icn_settings'><a href='view_user_powerid.php'>view Power ID</a></li>";
					echo "<li class='icn_settings'><a href='view_user_packageid.php'>view Package</a></li>";
					echo "<li class='icn_security'><a href='view_user_pin_record.php'>View Pin Record</a></li>";
				
					}
				else{}
			?>
			
			
			
			
		</ul>
		<h3>Employee</h3>
		<ul class="toggle">
			<?php if($_SESSION['mlm5_admin_type']=="Admin"){
					echo "<li class='icn_folder'><a href='add_emp.php'>Add New Employee</a></li>";
					echo "<li class='icn_photo'><a href='view_emp.php'>View Employee</a></li>";
					echo "<li class='icn_new_article'><a href='send_emp_pin.php'>Send Pin to Employee</a></li>";
					echo "<li class='icn_edit_article'><a href='return_emp_pin.php'>Rerurn Pin from Employee</a></li>";
					echo "<li class='icn_security'><a href='view_emp_pin_record.php'>View Pin Record</a></li>";
					
					}
				else{}
			?>
			
			
			<!--<li class="icn_tags"><a href="#">View Pin</a></li>-->
			
			
		</ul>
		
		
		<footer>
			<hr />
			<p><strong>Copyright &copy; 2013 Bhabijee</strong></p>
			<p>Devloped by <a href="http://www.ultrasoft.co.in">UltraSoft</a></p>
		</footer>
	</aside><!-- end of sidebar -->
	
	<section id="main" class="column"><!-- end of stats article --><!-- end of content manager article -->
      <!-- end of messages article -->
<div class="clear"></div>
		
		<!-- end of post new article -->
<article class="module width_full">
	<header>
	  <h3>Bhabijee</h3>
			</header>
				<div class="module_content">
					<img width="800" src="../../images/page2-img5.jpg">
				</div>
	  </article><!-- end of styles article -->
		<div class="spacer"></div>
</section>

<?php }}?>
</body>

</html>

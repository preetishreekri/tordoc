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
			<article class="breadcrumbs"><a href="home.php">Home</a> <div class="breadcrumb_divider"></div> <a class="current">Achivment</a></article>
			<div style="margin-top:10px;"> Pin balance: <span style="color:#003300;"><strong><?php echo $res_pin['app_capacity']; ?></strong></span></div>
		</div>
	</section><!-- end of secondary bar -->
	<!-- end of sidebar -->
<section id="main" class="column" style="width:950px; height:auto;" >
  <!-- end of stats article -->
<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Achivment  List</h3>
		
		</header>
		<form name="foem1" method="post" action="view_quantity.php">
			<select name="downline_powerid"><option value="0">Select</option>
											<option value="L4">Level 4</option>
											<option value="L5">Level 5</option>
											<option value="L6">Level 6</option>
											<option value="L7">Level 7</option>
											<option value="L8">Level 8</option>
											<option value="L9">Level 9</option>
											<option value="L10">Level 10</option>
			</select>
			<input type="submit">
		</form>
		<div class="tab_container" style="width:auto; height:500px; overflow:auto;">
			<div id="tab1" class="tab_content">
			<table class="tablesorter" cellspacing="0"> 
			<thead> 
				<tr> 
   					<th>Slno</th>
    				<th>ID</th> 
    				<th>Name</th> 
    				<th>Contact No</th> 
    				<th>Date of joining</th>
					<th>Downline Power ID</th>  
				</tr> 
			</thead> 
			<tbody> 
				
				<?php 									
														
														if($_POST['downline_powerid']=='L4'){
														
														$value1=625;
														$value2=3125;	
															}
														else if($_POST['downline_powerid']=='L5'){
														$value1=3125;
														$value2=15625;
															}
														else if($_POST['downline_powerid']=='L6'){
														$value1=15625;
														$value2=78125;
															}
														else if($_POST['downline_powerid']=='L7'){
														$value1=78125;
														$value2=390625;
															}
														else if($_POST['downline_powerid']=='L8'){
														$value1=390625;
														$value2=1953125;
															}
														else if($_POST['downline_powerid']=='L9'){
														$value1=1953125;
														$value2=9765625;
															}
														else if($_POST['downline_powerid']=='L10'){
														$value1=9765625;
														$value2=48828125;
															}
														
														$query=mysql_query("SELECT * FROM  `user_info` where (`poweridcount`-0) >= '$value1' AND (`poweridcount`-0) < '$value2'")or die(mysql_error());
														
														$lono=0;
														while($result=mysql_fetch_array($query))
															{
															$lono++;
														?>	
														<tr>
															<td><?php echo $lono;?></a>&nbsp;</td>
															<td><?php echo $result['login_id'];?></a>&nbsp;</td>
															<td><?php echo $result['m_name'];?></a>&nbsp;</td>
															<td><?php echo $result['mobile_no'];?></a>&nbsp;</td>
															<td><?php echo $result['entry_date'];?></a>&nbsp;</td>
															<td><?php echo $result['poweridcount'];?></a>&nbsp;</td>
															

														</tr>
														<?php
														}
														?>  
			</tbody> 
			</table>
			</div><!-- end of #tab1 -->
			
			<!-- end of #tab2 -->
			
		</div><!-- end of .tab_container -->
		
  </article><!-- end of content manager article -->
  <!-- end of messages article -->
<div class="clear"></div>
		
		<!-- end of post new article -->
        <!-- end of styles article -->
<div class="spacer"></div>
</section>

<?php }}?>
</body>

</html>
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

<script type="text/javascript">
function name_search(brk)
{
var str=document.getElementById("login_id").value;
if(str)

{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	document.getElementById("div1eft").innerHTML=xmlhttp.responseText;
	
	}
  }

xmlhttp.open("GET","ajax_return_user_name_search.php?str="+str+"&column=id&brk="+brk,true);

xmlhttp.send();
}
}




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
			<article class="breadcrumbs"><a href="home.php">Home</a> <div class="breadcrumb_divider"></div> <a class="current">Return User Pin Balance </a></article>
			<div style="margin-top:10px;"> Pin balance: <span style="color:#003300;"><strong><?php echo $res_pin['app_capacity']; ?></strong></span></div>
		</div>
	</section><!-- end of secondary bar -->
	
	<!-- end of sidebar -->
	
	<section id="main" class="column">
	  <!-- end of stats article -->
	 
<div class="clear"></div>
		
		<article class="module width_full">
			
			<header><h3>
			Return User Pin Balance</h3></header>
				<div class="module_content">
						<fieldset>
							<label>Enter User ID</label>
							<input type="text" name="login_id" id="login_id" style="background:#FF0000; color:#00FFFF" onBlur="return name_search(0);" onKeyUp="return name_search(0);">
						</fieldset>
						
						
						<div style="height:500px;float:left;" id="div1eft" >
												</div>	
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
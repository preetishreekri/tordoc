<?php
include_once('function.php');
$id=$_GET['id'];
$q=mysql_query("select * from `district` where `id`='$id'");
$r=mysql_fetch_array($q);
$countryname=countryname($r['country_id']);
$state=statename($r['city_id']);


if(isset($_POST['submit']))
{
    $cityname=htmlentities($_POST['district'],ENT_QUOTES);
    mysql_query("update `district` set `district_name`='$cityname' where `id`='$id'");
    $msg="successfully update";
    header("location:district.php?msg=$msg");
    
}
    
 ?>

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
    $.ajax({url: "getcity.php",
        type: 'POST',
        data: {"countryidval": countryid},
        success: function(result){
           
       $("#getcity").html(result);
    }});
    
}
</script>
   </head>
    <body>
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
										Add City
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="#" method="post" enctype="multipart/form-data" disabled>
									<table class="table" style="line-height:3.1;">
									     <tr>
										<td>Country Name</td>
										<td>
										    <input type="text" name="country" value="<?php echo $countryname?>" id="country" class="form" readonly='true'>
										</td>
									    </tr>
									    
									    <tr>
										<td>Name of State</td>
										<td> <input type="text" name="state" value="<?php echo $state?>" id="state" class="form" readonly='true'></td>
									    </tr>
									    
                                                                            <tr>
                                                                                <td>Name Of City</td>
                                                                                <td><input type="text" name="district" value="<?php echo $r['district_name']?>" id="district" class="form"></td>
                                                                            </tr>
									   
									    
									    <tr>
										<td>&nbsp;</td>
										<td><input type="submit" name="submit" value="Update" class="button"></td>
									    </tr>
									</table>
                                                                    </form>
											
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
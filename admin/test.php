<?php
include_once('function.php');
if(!$_SESSION['adminid'])
{
header("location:index.php");
}
else{ ?>
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
<script>
    $(function(){
        var availabledrugs=<?= json_encode($getemail); ?>;
        $('#uname').autocomplete({
        source: availabledrugs,
        select: function( event, ui )
		{
        console.log(ui);
        var valshow=ui.item.value;
                 $('#uname').val(valshow);
                 $('#hidden').val(ui.item.idval);
        return false;
		}
        });
});
</script>	
<script>
    $(function(){
	    $('#add1').click(function () {
		 if ($('#tbb').find('input:file').length < 7) {
        $('#tbb').append('<tr><td>Smallimage</td><td><input type="file" name="img[]"/></td></tr>');
    }
		});
	    
	   });
   
</script>	
 <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="deleteimage.php?id1="+vals;
			}
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
										Add Small Images
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="insert_images.php" method="post" enctype="multipart/form-data">
									
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
</html><?php }?>
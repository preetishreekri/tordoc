<?php
include_once('../function.php');
if(!$_SESSION['agentid'])
{
header("location:index.php");
}
else{
    $id=$_GET['id'];
    ?>
<html>
    <head>
			<title>Admin Panel</title>
			<script type="text/javascript" src="js/jquery.js"></script>
			<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery.min.js"></script>

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
						<?php include_once("leftmenu.php"); ?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Doctor Details
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="agent_editaction.php" method="post" enctype="multipart/form-data" align="center">
                                                                       <table class="table" style="line-height:3.1;">
									<?php
									$fet=mysql_query("select * from `login` where `slno`='$id'");
									while($res=mysql_fetch_array($fet))
									{
									?>
                                                                            <tr>
                                                                                <td>Name</td>
                                                                                <td><input type="text" name="dname" value="<?php echo $res['username'];?>" class="form" required></td>
										<input type="hidden" name="hid" value="<?php echo $res['slno'];?>">
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Email</td>
                                                                                <td><input type="email" name="email" value="<?php echo $res['email'];?>" class="form" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>password</td>
                                                                                <td><input type="text" name="pass" value="<?php echo $res['password'];?>" class="form" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>phone</td>
                                                                                <td><input type="text" name="phone" value="<?php echo $res['phone'];?>" class="form" required></td>
                                                                            </tr>
									    <tr>
                                                                                <td>Address</td>
                                                                                <td><textarea  name="address" class="form" required><?php echo $res['address'];?></textarea></td>
                                                                            </tr>
									    <?php }?>
                                                                       </table>
                                                                                    <div><button class="button">update</button></div>
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
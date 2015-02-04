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
<script src="js/jquery.min.js"></script>
 <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="agent_delete.php?id="+vals;
			}
		}
</script>
 <script>
    function validateForm()
{
 var phone = document.forms["myform"]["phone"].value;
    
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  
  if(phone.match(phoneno))  
     {           
     }  
   else  
     {  
       alert("Not a valid Phone Number");  
       return false;  
     }  
 	
	
var x=document.forms["myform"]["email"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Please Enter a Valid Email Address");
  return false;
  }
  
   var name = document.forms["myform"]["dname"].value;
   var n=name.substring(0,1)
	      na=n.indexOf(' ') >= 0;
	     if (na==true)
	     {
		alert("Please Check Your Fields For Spaces");
		$("#dname").val("");
		return false;
	     }
	     var pass = document.forms["myform"]["pass"].value;
   var p=pass.substring(0,1)
	      pa=p.indexOf(' ') >= 0;
	     if (pa==true)
	     {
		alert("Please Check Your Fields For Spaces");
		$("#pass").val("");
		return false;
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
						<?php 
						include_once("leftbar.php"); 
						?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Reseller
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="agent_action.php" method="post" onsubmit="return validateForm()" align="center">
                                                                       <table class="table" style="line-height:3.1;">
									    <tr>
                                                                                <td>Manager</td>
                                                                                <td>
										    <select name="manager" class="form">
											<option>select</option>
											<?php
											$fetcghmanager=mysql_query("select * from `login` where `status`='1'");
											while($resmanager=mysql_fetch_array($fetcghmanager))
											{
											?>
											<option value="<?php echo $resmanager['slno'];?>"><?php echo $resmanager['username'];?></option>
											<?php
											}
											?>
										    </select>
										</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Name</td>
                                                                                <td><input type="text" name="dname" id="dname" value="" class="form" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Email</td>
                                                                                <td><input type="email" name="email" id="email" value="" class="form" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>password</td>
                                                                                <td><input type="password" name="pass" id="pass" value="" class="form" required></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>phone</td>
                                                                                <td><input type="text" name="phone" id="phone" value="" class="form" required></td>
                                                                            </tr>
									    <tr>
                                                                                <td>Address</td>
										<td><textarea name="address" id="address" class="form" required></textarea></td>
                                                                            </tr>
                                                                       </table>
                                                                                    <div align="center"><input type="submit" name="submit" value="insert" class="button"></div>
                                                                    </form>
																	
									<table class="table1" cellpadding="5" style="margin-top:20px;">
											<tr style="background:url(image/thbg.png);">
											<th>Agent Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th colspan="2">Action</th>
											</tr>
											<?php
											$sqldetail=mysql_query("select * from `login` where `status`='2'"); 
											while($resdetail=mysql_fetch_array($sqldetail)){
											?>
											<tr>
											<td><?php echo $resdetail['username'];?></td>
											<td><?php echo $resdetail['email'];?></td>
											<td><?php echo $resdetail['phone'];?></td>
											<td><a href="agent_edit.php?id=<?php echo $resdetail['slno'];?>"><img src="image/edit.png"></a></td>
											<td onClick="delete_data(<?php echo $resdetail['slno']; ?>)"><img src="image/delete.png" ></td>
											</tr>
																						
											<?php  } ?>
											
									</table>
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
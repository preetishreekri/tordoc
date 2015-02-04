<?php
include_once('../function.php');
if(!$_SESSION['agentid'])
{
header("location:../index.php");
}
else{
echo $_SESSION['agentid'];
$sqlagentslno=mysql_query("select * from `login` where `username`='$_SESSION[agentid]'");
$resagentslno=mysql_fetch_array($sqlagentslno);
 ?>
<html>
    <head>
			<title>Admin Panel</title>
			<script type="text/javascript" src="../js/jquery.js"></script>
			<script type="text/javascript" src="../js/jquery-1.7.1.min.js"></script>
      		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<link href="../css/style.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery.min.js"></script>
 <script type="text/javascript">
		function delete_data(vals){
			var con=confirm("Do you want to delete?");
			if(con){
			window.location="delete_customer.php?id="+vals;
			}
		}
</script>
 <script>
    function validateForm()
{
 var name = document.forms["myform"]["dname"].value;
 if(name=="")
 {
 alert("enter a name");
return false; 
 }
 var n=name.substring(0,1)
	      na=n.indexOf(' ') >= 0;
             // alert(na);
	     if (na==true)
	     {
		alert("Please Check Your Fields For Spaces");
		$("#dname").val("");
		return false;
	     }
 var x=document.forms["myform"]["emailid"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if(x=="")
{
alert("please enter email address");
return false;
}
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Please Enter a Valid Email Address");
  return false;
  }
  
  	     var pwd = document.forms["myform"]["pass"].value;
		 if(pwd=="")
		 {
		 alert("please enter password");
		return false;		
		 }
   var p=pwd.substring(0,1)
	      pa=p.indexOf(' ') >= 0;
	     if (pa==true)
	     {
		alert("Please Check Your Fields For Spaces");
		$("#password").val("");
		return false;
	     }
 var phone = document.forms["myform"]["phone"].value;
    var phoneno = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;  
  if(phone!="" && !phone.match(phoneno))  
     {       
 alert("Not a valid Phone Number");  
       return false;  	 
     }  
   else  
     {  
      return true;
     }  
 	
}
 </script>
  <script  type='text/javascript'>

function numberonly()

{

	var contactt=document.getElementById('phone').value;

	if(isNaN(contactt)|| contactt.indexOf(" ")!=-1)

	{

              			alert("Enter numeric value");

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
						include_once("leftmenu.php"); 
						?>
				</div>
				<div id="right_box" style="margin-left:40px;">
						<div class="headline">
								<a href="">Dashboard </a> 
								 <a href="">Settings</a>
						</div>
						<div id="content1">
								<div class="head2">
										Add Customer
								</div>
								<div id="content2">
								    <?php
											  if(isset($_GET['msg']))
											  {
											  $mess=$_GET['msg'];
											   echo "<span style='font-family:arial; color:red; margin-left:20px;'>".$mess."</span>";
											  }
											  ?>
								    <form name="myform" action="insert_customer.php" method="post" onsubmit="return validateForm()" align="center">
                                                                       <table class="table" style="line-height:3.1;">
									    
                                                                            <tr>
                                                                                <td>Name</td>
                                                                                <td>
																				<input type="text" name="dname" id="dname" value="" class="form">
																				<input type="hidden" name="hd_agentid" value="<?php echo $resagentslno['slno'];?>"/>
																				</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>Email</td>
                                                                                <td><input type="email" name="emailid" id="emailid" value="" class="form"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>password</td>
                                                                                <td><input type="password" name="pass" id="pass" value="" class="form"></td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>phone</td>
                                                                                <td><input type="text" name="phone" id="phone" value="" class="form" onkeyup="return numberonly();"></td>
                                                                            </tr>
																			<tr>
                                                                                <td>Address</td>
																				<td><textarea name="address" id="address" class="form"></textarea></td>
                                                                            </tr>
																			<!--<tr>
                                                                                <td>Fee</td>
                                                                                <td><input type="text" name="fee" id="fee" value="0" class="form" readonly></td>
                                                                            </tr>-->
																			<tr>
                                                                                <td></td>
                                                                                <td><input type="submit" name="submit" value="insert" class="button"></td>
                                                                            </tr>
                                                                       </table>
                                                                             
                                                                    </form>
																	
									<table class="table1" cellpadding="5" style="margin-top:20px;">
											<tr style="background:url(image/thbg.png);">
											<th>Name</th>
											<th>Email</th>
											<th>Phone</th>
											<th>Address</th>
											<th colspan="2">Action</th>
											</tr>
											<?php
											$sqlcustomer=mysql_query("select * from `customer` where `agent_id`='$resagentslno[slno]'"); 
											while($rescustomer=mysql_fetch_array($sqlcustomer)){
											?>
											<tr>
											<td><?php echo $rescustomer['name'];?></td>
											<td><?php echo $rescustomer['email'];?></td>
											<td><?php echo $rescustomer['contact'];?></td>
											<td><?php echo $rescustomer['address'];?></td>
											<td><a href="edit_customer.php?id=<?php echo $rescustomer['slno'];?>"><img src="image/edit.png"></a></td>
											<td onClick="delete_data(<?php echo $rescustomer['slno']; ?>)"><img src="image/delete.png" ></td>
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
<?php
include_once("function.php");
if(isset($_POST['sub'])){
$user=htmlentities($_POST['user']);
$pwd=htmlentities($_POST['pass']);
$res=mysql_query("select * from `login` where `username`='$user' and `password`='$pwd'");
$fou=mysql_fetch_array($res);
$no=mysql_num_rows($res);
if($no>=1 && $fou['status']==0){
$_SESSION['adminid']=$user;
$_SESSION['adminpass']=$pwd;
$_SESSION['id']=$fou['slno'];

header("location:addspeciality.php");
}
elseif($no>=1 && $fou['status']==1){
 $_SESSION['agentid']=$user;
$_SESSION['agentpass']=$pwd;
$_SESSION['id']=$fou['slno'];
 header("location:agent/addfeedback.php");
}
elseif($no>=1 && $fou['status']==2){
 $_SESSION['agentid']=$user;
$_SESSION['agentpass']=$pwd;
$_SESSION['id']=$fou['slno'];
 header("location:agent/addfeedback.php");
}
else{
header("location:index.php");
}
}
?>
<html>
    <head>
	 <link rel="stylesheet" href="assets/css/styles.css" />
	  <script src="assets/js/jquery-1.7.1.min.js"></script>
		<script src="assets/js/script.js"></script>
			
    </head>
    <body>
					
			<div id="formContainer">
			<form id="login" action="./"  method="post" >
			<table>
			<tr>
			<td>
				<a href="#" id="flipToRecover" class="flipLink">Forgot?</a>
			</td>
			</tr>
			<tr>
			<td>	
				<input type="text" name="user" id="loginEmail" placeholder="Emailid"/>
			</td>
			</tr>
			<tr>
			<td>	
				<input type="password" name="pass" id="loginPass" placeholder="Password"/>
			</td>
			</tr>
			<tr>
			<td>	
				<input type="submit" name="sub" value="submit" />
			</td>
			</tr>
			</table>	
			</form>
			<form id="recover"  action="" method="post">
			<table>
			<tr>
			<td>
				<a href="#" id="flipToLogin" class="flipLink">Forgot?</a>
			</td>
			</tr>
			<tr>
			<td>	
				<input type="text" name="recoverEmail" id="recoverEmail" value="Email" />
				<input type="submit" name="submit" value="Recover" />
			</td>
			</tr>
			</table>	
			</form>
	</div>		
					
			
        
    </body>
</html>

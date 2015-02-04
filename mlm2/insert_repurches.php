<?php include_once("function.php");
connect();
$res=check_session($_SESSION['mlmlogin_id'],$_SESSION['mlmloginPass']);

if($res!=1)
{
header("location:index.php");
}
else{
	if(isset($_POST['submit']))
		{		
		$que_id=mysql_query("select * from `user_info` where `login_id`='$_POST[id]'");
		$res_id=mysql_fetch_array($que_id);
		if(isset($_POST['id']) && isset($res_id['login_id']))
		{
		$que_pin=mysql_query("select * from `user_info` where `login_id`='$_SESSION[mlmlogin_id]'");
		$res_pin=mysql_fetch_array($que_pin);
			if($res_pin['repin_balance']>=$_POST['qty'])
				{
				
				//comission

$_SESSION['loop']=0;
function comission($login_id,$first_login_id){
	if($_SESSION['loop']<11 && isset($login_id))
		{
	$_SESSION['loop']=$_SESSION['loop']+1;
	$query = "SELECT `s_id`,`total_balance` FROM `user_info` where `login_id`='".$login_id."'";
	$query1 = mysql_query($query);
	$result=mysql_fetch_array($query1);
	
	
		 if($_SESSION['loop']==1){$comission=5*$_POST['qty'];}	
	else if($_SESSION['loop']==2){$comission=3*$_POST['qty'];}
	else if($_SESSION['loop']==3){$comission=2*$_POST['qty'];}
	else if($_SESSION['loop']==4){$comission=1.1*$_POST['qty'];}
	else if($_SESSION['loop']==5){$comission=0.6*$_POST['qty'];}
	else if($_SESSION['loop']==6){$comission=0.4*$_POST['qty'];}
	else if($_SESSION['loop']==7){$comission=0.3*$_POST['qty'];}
	else if($_SESSION['loop']==8){$comission=0.2*$_POST['qty'];}
	else if($_SESSION['loop']==9){$comission=0.2*$_POST['qty'];}
	else if($_SESSION['loop']==10){$comission=0.15*$_POST['qty'];}
	else if($_SESSION['loop']==11){$comission=0.1*$_POST['qty'];}
	$new_balance=$result['total_balance']+$comission;	
	$query4=mysql_query("update `user_info` set `total_balance`='$new_balance' where `login_id`='".$login_id."'");
			
		
			//powerid
			$que_power=mysql_query("select `poweridcount` from `user_info` where `login_id`='".$login_id."'");
				$res_power=mysql_fetch_array($que_power);
				$max_power=$res_power['poweridcount'];
				$new_max_power=$max_power+$_POST['qty'];
				$query4_power=mysql_query("update `user_info` set 
				`poweridcount`='$new_max_power' where `login_id`='".$login_id."'
				");	


	//echo "Longin ID".$first_login_id." Level".$_SESSION['loop']."of".$login_id."<br>";
	
	//echo  $_SESSION['loop']." ".$result['s_id']."--<br>";
	
	comission($result['s_id'],$first_login_id);
	
	//mysql_free_result($result);
	return "";
	}
	else	
	return "";
}
//password created

//-----------comission------------------

comission($res_id['s_id'],$res_id['s_id']);
//quantity
	$que_qty=mysql_query("select `qty` from `user_info` where `login_id`='".$_POST['id']."'");
				$res_qty=mysql_fetch_array($que_qty);
				$max_qty=$res_qty['qty'];
				$new_max_qty=$max_qty+$_POST['qty'];
				$query4_qty=mysql_query("update `user_info` set 
				`qty`='$new_max_qty' where `login_id`='".$_POST['id']."'
				");	

	$new_repin_balance=$res_pin['repin_balance']-$_POST['qty'];
	$query5=mysql_query("update `user_info` set 
	`repin_balance`='$new_repin_balance' where `login_id`='$_SESSION[mlmlogin_id]'
	");

//echo "Login ID ".$login_id." <br>Password ".$login_pass." <br>Inserted Successfully";
echo "Inserted Successfully";
		//nodes
		
		}	
	else header("location:err.php?t=1");
	//tempid
	}
	else header("location:err.php?t=3");
//submit
}
}
//else1
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="2;home.php "/>
<title>Untitled Document</title>
</head>

<body>

</body>
</html>

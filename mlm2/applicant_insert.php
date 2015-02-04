<?php include_once("function.php");
connect();
$res_session=check_session($_SESSION['mlmlogin_id'],$_SESSION['mlmloginPass']);
if($res_session!=1)
{
header("location:index.php");
}
else{
	if(isset($_POST['submit']))
		{		
		$que_id=mysql_query("select * from `user_info` where `login_id`='$_POST[s_id]'");
		$res_id=mysql_fetch_array($que_id);
		if(isset($_POST['s_id']) && isset($res_id['login_id']))
		{
		$que_pin=mysql_query("select * from `user_info` where `login_id`='$_SESSION[mlmlogin_id]'");
		$res_pin=mysql_fetch_array($que_pin);
			if($res_pin['pin_balance']>=$_POST['qty'])
				{
				$que=mysql_query("select * from `applicant_loginid_max`");
				$res=mysql_fetch_array($que);
				$max=$res['max'];
				$new_max=$max+1;
				$query4=mysql_query("update `applicant_loginid_max` set 
				`max`='$new_max'
				");

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
			
			//downline
			$que_app_no=mysql_query("select `app_no` from `user_info` where `login_id`='".$login_id."'");
				$res_app_no=mysql_fetch_array($que_app_no);
				$max_app_no=$res_app_no['app_no'];
				$new_max_app_no=$max_app_no+1;
				$query4_app_no=mysql_query("update `user_info` set 
				`app_no`='$new_max_app_no' where `login_id`='".$login_id."'
				");
				
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
$uniq=uniqid();

$uniq1=substr($pass,-1,1);
//echo uniq1;


$cnt=0;
$que=mysql_query("SELECT * FROM `user_info` WHERE `s_id`='$_POST[s_id]' ");
$cnt=mysql_num_rows($que);
if($cnt<5){
	if($cnt==0){$form_type="A";}
	else if($cnt==1){$form_type="B";}
	else if($cnt==2){$form_type="C";}
	else if($cnt==3){$form_type="D";}
	else if($cnt==4){$form_type="E";}


$s_id=$_POST['s_id']; 
$m_name=$_POST['name'];
$mobile_no=$_POST['contact_no'];
$gender=$_POST['gender'];
$nationality=$_POST['nationality'];
$address=$_POST['address'];
$district=$_POST['district'];
$state=$_POST['state'];
$address=$_POST['address'];
//$pincode=$_POST['pin_no'];
$pan_no=$_POST['pan_no'];
$email=$_POST['email'];
$n_name=$_POST['nominee_name'];
//$n_relation=$_POST['nominee_relation'];
$bank_name=$_POST['bank_name'];
$acc_no=$_POST['acc_no'];
$bank_branch=$_POST['bank_branch'];
$ifsc_code =$_POST['ifsc'];
$login_id =$max;
$login_pass ="qwerty";//$pass1;
$app_no =0;

$query=mysql_query("insert into `user_info` set
`s_id`='$s_id',
`form_type`='$form_type',
`m_name`='$m_name', 
`mobile_no`='$mobile_no',
`gender`='$gender', 
`nationality`='$nationality', 
`address`='$address',
`district`='$district',
`state`='$state', 
`qty`='$_POST[qty]',
`package`='$_POST[qty]',
`pan_no`='$pan_no', 
`email`='$email',
`n_name`='$n_name',
`bank_name`='$bank_name',
`acc_no`='$acc_no',
`bank_branch`='$bank_branch',
`ifsc_code`='$ifsc_code',
`login_id`='$login_id',
`login_pass`='$login_pass',
`app_no`='$app_no',
`created_by`='$_SESSION[mlmlogin_id]'")or die(mysql_error());


//-----------comission------------------
$cnt1=0;
$que1=mysql_query("SELECT * FROM `user_info` WHERE `s_id`='$s_id' ")or die(mysql_error());
$cnt1=mysql_num_rows($que1);
comission($s_id,$s_id);
if($cnt1==5)
	{
$query4_12=mysql_query("update `user_info` set `status`='1' where `login_id`='".$s_id."'");
	}
else{}

	$new_pin_balance=$res_pin['pin_balance']-$_POST['qty'];
	$query5=mysql_query("update `user_info` set 
	`pin_balance`='$new_pin_balance' where `login_id`='$_SESSION[mlmlogin_id]'
	");

//echo "Login ID ".$login_id." <br>Password ".$login_pass." <br>Inserted Successfully";
echo "Inserted Successfully";
		//nodes
		}
		else header("location:err.php?t=2");
		//else echo "Your Five Nodes are already complited";
		//balance pin
		}	
	else header("location:err.php?t=1");
	//tempid
	}
	else header("location:err.php?t=3");
//submit
}
//else1
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="0;gen.php?i=<?PHP echo $s_id; ?>"/>
<title>Untitled Document</title>
</head>

<body>

</body>
</html>

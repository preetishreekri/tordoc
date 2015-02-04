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
		$que_id=mysql_query("select * from `user_info` where `login_id`='$_POST[s_id]'");
		$res_id=mysql_fetch_array($que_id);
		if(isset($_POST['s_id']) && isset($res_id['login_id']))
		{
		$que_pin=mysql_query("select * from `user_info` where `login_id`='$_SESSION[mlmlogin_id]'");
		$res_pin=mysql_fetch_array($que_pin);
			if($res_pin['pin_balance']>0)
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
	
		 if($_SESSION['loop']==1){$comission=25;}	
	else if($_SESSION['loop']==2){$comission=15;}
	else if($_SESSION['loop']==3){$comission=10;}
	else if($_SESSION['loop']==4){$comission=5;}
	else if($_SESSION['loop']==5){$comission=3;}
	else if($_SESSION['loop']==6){$comission=2;}
	else if($_SESSION['loop']==7){$comission=1;}
	else if($_SESSION['loop']==8){$comission=0.5;}
	else if($_SESSION['loop']==9){$comission=0.3;}
	else if($_SESSION['loop']==10){$comission=0.25;}
	else if($_SESSION['loop']==11){$comission=0.2;}
	$new_balance=$result['total_balance']+$comission;	
	$query4=mysql_query("update `user_info` set `total_balance`='$new_balance' where `login_id`='".$login_id."'");
	
	$query4_2=mysql_query("insert into `bhabijee_db_level`.`$login_id` set `login_id`='$first_login_id',`level`='$_SESSION[loop]' ");
	
	
	//echo "Longin ID".$first_login_id." Level".$_SESSION['loop']."of".$login_id."<br>";
	
	//echo  $_SESSION['loop']." ".$result['s_id']."--<br>";
	
	comission($result['s_id'],$first_login_id);
		
	mysql_free_result($result);
	return "";
	}
	else	
	return "";
}
//password created
$pass=uniqid();
$pass1=substr($pass,-6,6);



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
$pincode=$_POST['pin_no'];
$pan_no=$_POST['pan_no'];
$email=$_POST['email'];
$n_name=$_POST['nominee_name'];
$n_relation=$_POST['nominee_relation'];
$bank_name=$_POST['bank_name'];
$acc_no=$_POST['acc_no'];
$bank_branch="";
$ifsc_code ="";
$login_id =$max;
$login_pass ="123456";//$pass1;
$app_no =$max;

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
`pincode`='$pincode',
`pan_no`='$pan_no', 
`email`='$email',
`n_name`='$n_name',
`n_relation`='$n_relation',
`bank_name`='$bank_name',
`acc_no`='$acc_no',
`bank_branch`='$bank_branch',
`ifsc_code`='$ifsc_code',
`login_id`='$login_id',
`login_pass`='$login_pass',
`app_no`='$app_no',
`created_by`='$_SESSION[mlmlogin_id]'")or die(mysql_error());

$query4_1=mysql_query("CREATE TABLE  `bhabijee_db_level`.`$login_id` (`login_id` VARCHAR( 40 ) NOT NULL ,`level` INT NOT NULL ,`total` INT NOT NULL, `l_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP); ")or die(mysql_error());
//-----------comission------------------
$cnt1=0;
$que1=mysql_query("SELECT * FROM `user_info` WHERE `s_id`='$s_id' ")or die(mysql_error());
$cnt1=mysql_num_rows($que1);
if($cnt1==5)
	{
comission($s_id,$s_id);
$query4_12=mysql_query("update `user_info` set `status`='1' where `login_id`='".$s_id."'");
	}
else{}

	$new_pin_balance=$res_pin['pin_balance']-1;
	$query5=mysql_query("update `user_info` set 
	`pin_balance`='$new_pin_balance' where `login_id`='$_SESSION[mlmlogin_id]'
	");

//echo "Login ID ".$login_id." <br>Password ".$login_pass." <br>Inserted Successfully";
echo "Inserted Successfully";
		//nodes
		}
		else echo "Your Five Nodes are already complited";
		//balance pin
		}	
	else echo "your Pin Balance is Over";
	//tempid
	}
	else echo "please Re-enter ID";
//submit
}
//else1
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="0;applicant_add.php?x=<?PHP echo $login_id; ?>"/>
<title>Untitled Document</title>
</head>

<body>

</body>
</html>

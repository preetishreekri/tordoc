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
		{
	header("location:notallowed.php");
		}
	else
		{
		if(isset($_POST['submit']))
			{
			
			$que=mysql_query("SELECT * FROM `user_info` where `login_id`='$_POST[login_id]'");
			$res=mysql_fetch_array($que);
			if(isset($res['login_id']))
				{
				if(($res['total_balance']-$res['paid_balance'])>=$_POST['payment_amount'])
					{
					$last_balance=$res['paid_balance'];
					$new_balance=$last_balance+$_POST['payment_amount'];
					$query4=mysql_query("update `user_info` set `paid_balance`='$new_balance' where `login_id`='$_POST[login_id]'");
					
					$query_bill=mysql_query("select `billno` from `bill_max`");
					$res_bill=mysql_fetch_array($query_bill);	
					$billno=$res_bill['billno']+1-0;
					$query_update_billno=mysql_query("update `bill_max` set 
					`billno`='$billno'
					");
					$query6=mysql_query("insert into `bill` set
`billno`='$res_bill[billno]',`payment_amount`='$_POST[payment_amount]',`login_id`='$_POST[login_id]',`payment_by`='$_SESSION[mlm5_admin_id]'");
					echo "Successfully Inserted";
					}
					else
					{
					echo "Please check Balance";
					}
				}
				else
				{
				echo "please Re-enter ID";
				}
			}
			else
			{
			echo "";
			}
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="refresh" content="0;bill.php?x=<?php echo $res_bill['billno'];?>"/>
<title>bhabijee</title>
</head>

<body>

</body>
</html>

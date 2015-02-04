<?php include_once("function.php");
connect();
$db1="system_db";
$db2="system_db_level";
$res=check_session($_SESSION['mlmlogin_id'],$_SESSION['mlmloginPass']);
if($res!=1)
{
header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>Untitled Document</title>
</head>

<body>
<table border="1">
<tr><td>Enter ID</td><td><input type="text" name="id"  /></td><td><input type="submit" name="submit" value="Submit" /></td></tr>
<tr><td>Level</td><td>Active ID</td><td>Deactive ID</td></tr>

<?php 	
								
								for($loop=1;$loop<=11;$loop++)
								{			
										
										echo "<tr><td>$loop</td><td>";
										//Search for Active ID
										$query = mysql_query("SELECT * FROM `$db2`.`$_SESSION[mlmlogin_id]` where `level`='$loop'");										
										while($result=mysql_fetch_array($query))
											{
										echo  "<a href=\"gen.php?i=$result[login_id]\">".$result['login_id'].", ";
											}		
										echo "</td><td>";
										//Search for deactive ID				
										
										$query_de = mysql_query("SELECT * FROM `$db2`.`$_SESSION[mlmlogin_id]` where `level`='$loop'");	
										
										while($result_de=mysql_fetch_array($query_de))
											{
											
										$query_de_1 = mysql_query("SELECT `login_id`  FROM `$db1`.`user_info` where`s_id` LIKE '$result_de[login_id]' AND `status`='0'");
											while($result_de_1=mysql_fetch_array($query_de_1))
												{
												echo  "<a href=\"gen.php?i=$result_de_1[login_id]\">".$result_de_1['login_id'].", ";
												}
											}
																			
										echo "</td></tr>";
										
								}
								
?>

</table>
</body>
</html>

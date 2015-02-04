<?php include_once("function.php");
connect();
$db1="bhabijee_db";
$db2="bhabijee_db_level";
$res=check_session($_SESSION['mlm5_admin_id'],$_SESSION['mlm5_admin_pass']);
if($res!=1)
{
header("location:index.php");
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title>bhabijee</title>
</head>

<body>
<form name="form1" action="view_level.php" method="post" enctype="multipart/form-data">
<table border="0">
<?php 
echo "<tr style='background:#645364; '><td colspan='5' style='text-align:left; '><a href=\"home.php\"><img src='images/home.png' style='text-align:center; '  width='45' height='45' alt='No Record' longdesc='#' /></a></tr>";
?>
<tr><td>Enter&nbsp;ID </td><td><input type="text" name="id"  id="id" /><input type="submit" name="submit" value="Submit" /></td></tr>
<tr style="background:#000033; color:#FFFFFF"><td>Level</td><td>Deactive ID</td></tr>

<?php 	
							
							if(isset($_POST['id'])){
							$id=$_POST['id'];
							} else{
							$id=0;
							}

								$query_de123 = mysql_query("SELECT * FROM `$db2`.`$id` where `level`='1'");	
								$result_de123=mysql_fetch_array($query_de123);
								if(!isset($result_de123['login_id']))
												{
												echo  "<tr style=\"background:Orange;\"> <td>1</td><td>".$_POST['id']."</td></tr>";
												}
								else
									{
									echo  "<tr style=\"background:Orange;\"><td>1</td><td> </td></tr>";
									}
								
								for($loop=1;$loop<=5;$loop++)
								{			
										
										$newloop=$loop+1;
										echo "<tr style=\"background:Orange;\" ><td>$newloop</td><td>";
										
										//Search for deactive ID				
										
										$query_de = mysql_query("SELECT * FROM `$db2`.`$id` where `level`='$loop'");	
										
										while($result_de=mysql_fetch_array($query_de))
											{
											
											
										$query_de_1 = mysql_query("SELECT `login_id`  FROM `$db1`.`user_info` where`s_id` LIKE '$result_de[login_id]' AND `status`='0'");
											while($result_de_1=mysql_fetch_array($query_de_1))
												{
												echo  $result_de_1['login_id'].", ";
												}
											}
																			
										echo "</td></tr>";
										
								}
								
?>

</table>
</form>
</body>
</html>

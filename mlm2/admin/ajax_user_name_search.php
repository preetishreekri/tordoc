<?php
include_once("function.php");
connect();

$str=$_GET['str'];
$column=$_GET['column'];
$brk=$_GET['brk'];

//echo $view_type;
?>
<bodys>
<form name="form1" action="#" method="post">

<table border="2">
	<tr>
		<td colspan="32" align="center" >List Of Agent </td>
	</tr>
	<tr>
		<td><strong>Sl. No.</strong></td>
		<td><strong>Id</strong></td>
		<td><strong>Name</strong></td>
		<td><strong>Contact No</strong></td>
		<td><strong>Pin</strong></td>
		<td><strong>Re-Purches Pin</strong></td>		
		<td><strong>Send Pin</strong></td>
		<td><strong>Send Re-PurchesPin</strong></td>
		

	</tr>
<?php 

$query=mysql_query("select * from `user_info` where `login_id` like '$str%'")or die(mysql_error());

$lono=0;
while($result=mysql_fetch_array($query))
{
$lono++;
?>	
<tr>
<td> <?php echo $lono ;?>&nbsp;</td>	
<td><?php echo $result['login_id'];?></a>&nbsp;</td>
<td><?php echo $result['m_name'];?></a>&nbsp;</td>
<td><?php echo $result['mobile_no'];?></a>&nbsp;</td>
<td><?php echo $result['pin_balance'];?></a>&nbsp;</td>
<td><?php echo $result['repin_balance'];?></a>&nbsp;</td>

<td><?php echo "<a href='send_user_pin_next.php?x=$result[login_id]'>"?><?php echo "Click Here";?></a>&nbsp;</td>
<td><?php echo "<a href='send_user_repin_next.php?x=$result[login_id]'>"?><?php echo "Click Here";?></a>&nbsp;</td>
</tr>
<?php
}
?>

</table>
</form>

</body>
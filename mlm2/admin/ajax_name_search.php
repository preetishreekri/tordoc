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
		<td colspan="32" align="center" >List Of Emp </td>
	</tr>
	<tr>
		<td><strong>Sl. No.</strong></td>
		<td><strong>Id</strong></td>
		<td><strong>Pin</strong></td>		
		<td><strong>-</strong></td>
		

	</tr>
<?php 

$query=mysql_query("select * from `login_details` where `$column` like '$str%'")or die(mysql_error());

$lono=0;
while($result=mysql_fetch_array($query))
{
$lono++;
?>	
<tr>
<td> <?php echo $lono ;?>&nbsp;</td>	
<td><?php echo $result['id'];?></a>&nbsp;</td>
<td><?php echo $result['app_capacity'];?></a>&nbsp;</td>
<td><?php echo "<a href='send_emp_pin_next.php?x=$result[slno]'>"?><?php echo "Click Here";?></a>&nbsp;</td>

</tr>
<?php
}
?>

</table>
</form>

</body>
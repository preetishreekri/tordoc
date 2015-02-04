<?php
include_once('admin/function.php');
$getdrug=mysql_query("select * from `specification`")or die(mysql_error());
   
?>
<select onchange="return getspef(this.value);" class="frm">
<?php
 while($resdrug=mysql_fetch_array($getdrug)){
?>
<option value="<?php echo $resdrug['name'];?>">
<?php echo $resdrug['name'];?></option>
<?php
}
?>
</select>
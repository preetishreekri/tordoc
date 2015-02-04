<?php
include_once('function.php');
$country=$_POST['countryidval'];
?>
<select name="state" id="state" class="form" onchange="getdistrict(this.value,<?php echo $country?>);">
    <option value="">Select</option>

<?php
$getcity=mysql_query("select * from `city` where `country_id`='$country'");
while($rescity=mysql_fetch_array($getcity))
{
    ?>
    <option value="<?php echo $rescity['slno']?>"><?php echo $rescity['cityname']?></option>
    <?php
    
}
?>
</select>
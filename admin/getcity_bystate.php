<?php
include_once('function.php');
$country=$_POST['countryidval'];
$state=$_POST['stateid'];
?>
<select name="city" id="city" class="form" >
    <option value="">Select</option>

<?php
$getcity=mysql_query("select * from `district` where `country_id`='$country' and `city_id`='$state'");
while($rescity=mysql_fetch_array($getcity))
{
    ?>
    <option value="<?php echo $rescity['id']?>"><?php echo $rescity['district_name']?></option>
    <?php
    
}
?>
</select>
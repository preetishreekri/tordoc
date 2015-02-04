<?php
include_once("../function.php");
$idd=$_GET['id1'];
$uid=$_GET['uniqueid'];
$id=$_GET['docid'];
mysql_query("delete from `specialize` where `slno`='$idd'");
header("location:edit_specialize.php?uniqueid=$uid&slno=$id");
?>

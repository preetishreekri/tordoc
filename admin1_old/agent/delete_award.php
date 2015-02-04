<?php
include_once("../function.php");
$idd=$_GET['id1'];
$uid=$_GET['uniqueid'];
$id=$_GET['docid'];
mysql_query("delete from `award` where `slno`='$idd'");
header("location:edit_service.php?uniqueid=$uid&slno=$id");
?>

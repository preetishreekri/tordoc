<?php
include_once("../function.php");
$id=$_POST['hd_slno'];
$fee=htmlentities($_POST['fee'],ENT_QUOTES);
$agentid=htmlentities($_POST['hd_agent'],ENT_QUOTES);
 
 $sql=mysql_query("select * from `customer` where `slno`='$id'");
 $res=mysql_fetch_array($sql);
// echo $res['fee']."---".$res['billid'];
 if($res['fee']!="")
 {
 $time=$res['billid'];
$updatefee=$fee+$res['fee'];
mysql_query("update `customer` set `fee`='$updatefee' where `agent_id`='$agentid' and `slno`='$id' and `billid`='$res[billid]'")or die(mysql_error());
}
else
{
$_SESSION['time']=time();
$time=$_SESSION['time'];
mysql_query("update `customer` set `fee`='$fee',`billid`=' $time'  where `agent_id`='$agentid' and `slno`='$id'")or die(mysql_error());
}
unset($_SESSION['time']);
header("location:payment.php?bid=$time");
?>

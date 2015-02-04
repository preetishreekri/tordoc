<?php
include_once('../function.php');
$uid=$_POST['hid'];
$date=date('Y-m-d');
for($i=0;$i<7;$i++)
{
     if(isset($_POST['day'.$i])!=""){
    $d=$_POST['day'.$i];
	
    $from=$_POST['from'.$i];
    $fmin=$_POST['fmin'.$i];
    $fext=$_POST['fextention'.$i];
    $to=$_POST['to'.$i];
    $tmin=$_POST['tmin'.$i];
    $text=$_POST['textention'.$i];
    $m=$from.":".$fmin.$fext."-".$to.":".$tmin.$text;
	
    $froms=$_POST['froms'.$i];
    $fmins=$_POST['fmins'.$i];
    $fexts=$_POST['fextentions'.$i];
    $tos=$_POST['tos'.$i];
    $tmins=$_POST['tmins'.$i];
    $texts=$_POST['textentions'.$i];
    $a=$froms.":".$fmins.$fexts."-".$tos.":".$tmins.$texts;
    
if($m!="0:00AM-0:00AM" || $a!="0:00AM-0:00AM"){
    mysql_query("insert into `timing` set `day`='$d', `session_1st`='$m',`session_2nd`='$a',`uid`='$uid'") or die(mysql_error());
}else{header("location:time.php?uid=$uid");}
   }

}
header("location:addservice.php?uid=$uid");
?>
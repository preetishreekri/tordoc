<?php
include_once("function.php");
if(isset($_POST['logdoc']))
{
    $doctname=htmlentities($_POST['doctname']);
    $doctpass=htmlentities($_POST['doctpass']);
    //echo "select * from `details` where `uniqueid`='$doctname' or `email`='$doctname' and `password`='$doctpass'";
   $fetagent=mysql_query("select * from `details` where `uniqueid`='$doctname' or `email`='$doctname' and `password`='$doctpass'");
    $resagent=mysql_fetch_array($fetagent);
    $doctuid=$resagent['uniqueid'];
    $slno=$resagent['slno'];
    $num=mysql_numrows($fetagent);
    if($num>0)
    {
      $_SESSION['doctor']=$doctuid;
      //$_SESSION['slno']=$slno;
      header("location:doctorview1.php");
    }
    else
    { $msg="wrong username password"; header("location:index.php?msg=$msg");
    }
}
if(isset($_POST['logagent']))
{
     $agentname=htmlentities($_POST['agentname']);
     $agentpass=htmlentities($_POST['agentpass']);
     //echo "select * from `login` where `username`='$agentname' and `password`='$agentpass' and `status`='2' and `type`='user'";
    $fetagent=mysql_query("select * from `login` where `username`='$agentname' and `password`='$agentpass' and `status`='2' and `type`='user'");
    $resagent=mysql_fetch_array($fetagent);
    $slno=$resagent['slno'];
    $num=mysql_numrows($fetagent);
    if($num>0)
    {
      $_SESSION['user']=$agentname;
      $_SESSION['slno']=$slno;
      header("location:doctorview1.php");
    }
    else
    { $msg="wrong username password"; header("location:index.php?msg=$msg");
    }
    
}
if(isset($_POST['loguser']))
{
     $agentname=htmlentities($_POST['username']);
     $agentpass=htmlentities($_POST['userpass']);
     //echo "select * from `login` where `username`='$agentname' and `password`='$agentpass' and `status`='2' and `type`='user'";
    $fetagent=mysql_query("select * from `customer` where `name`='$agentname' and `password`='$agentpass'");
    $resagent=mysql_fetch_array($fetagent);
    $slno=$resagent['slno'];
    $num=mysql_numrows($fetagent);
    if($num>0)
    {
      //$_SESSION['costoumer']=$agentname;
      $_SESSION['cost_slno']=$slno;
      header("location:doctorview1.php");
    }
    else
    { $msg="wrong username password";header("location:index.php?msg=$msg");
    }
    
}
?>
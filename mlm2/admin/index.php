<?php 
include_once("function.php");
connect();

?>
<html>
<head>
<title></title>
</head>
<body style="background:#000066;" >
<form name="form1" method="post" action="log.php">
<div  style="width:454px;height:340px;margin-left:30px; margin-top:100px; background-image:url(login_panel.png);float:left;" >
  <div style=" margin:auto;margin-top:25px; background:url(krititech.png); width:80px; height:103px;">
  </div>
  <table style="margin-left:80px; margin-top:20px;">
  <tr><td><span  style="font-size:22px; color:#FFFFFF;">User ID</span></td>
    <td><input  type="text"  autocomplete="OFF" name="id" size="23"> </td>
  </tr>
  <tr><td><span  style="font-size:22px; color:#FFFFFF;">Password</span></td><td><input type="password"   AUTOCOMPLETE="OFF"  name="password" size="23"></td></tr>
  <tr><td></td><td align="right"> <input type="submit" name="submit" value="Login "></td></tr>
  
  </table>
  </div>
</form>


</html>

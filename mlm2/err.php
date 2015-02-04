<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
<title></title>
</head>

<body>
<table>
<tr style='background:#645364; '><td colspan='5' style='text-align:left; '><a href="home.php"><img src='images/home.png' style='text-align:center; '  width='45' height='45' alt='No Record' longdesc='#' /></a></td></tr>
</table>
<center>
<?php
if($_GET['t']==1)
echo "<img height='400' width='350' src='images/pin_over.png' />";
else if($_GET['t']==2)
echo "<img height='400' width='350' src='images/more5.png' />";
else if($_GET['t']==3)
echo "<img height='400' width='350' src='images/re-enter.png' />";
else if($_GET['t']==4)
echo "<img height='400' width='350' src='images/err4.jpg' />";
else if($_GET['t']==5)
echo "<img height='400' width='350' src='images/err5.jpg' />";
?>
</center>
</body>
</html>

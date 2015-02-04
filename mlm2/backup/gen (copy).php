<?php 
include_once("function.php");
connect();
$res=check_session($_SESSION['mlmlogin_id'],$_SESSION['mlmloginPass']);
if($res!=1)
{
header("location:index.php");
}
$td_left="<td style='width:20%; border:none;  ' >
															<div style='width:100%;'>
																<div style='float:left;width:50%;'>
																	<img style='float:right;' src='images/border_left.png'  alt='No Record' longdesc='#' />
																</div>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:left;' src='images/border_right.png'  alt='No Record' longdesc='#' />
																</div>
															</div>
															<div style='float:left;width:100%; margin:0px; '>
																
																<img src='images/icon.gif' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' />
															</div>
														</td>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>mlm</title>
<script type="text/javascript" src="boxover.js"></script>
<style type="text/css">
.mainTable{
	<!--border:#666666 1px solid;-->	
}

.mainTable td{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:.9em;
	text-align:center;
	cursor:default;
	
}

.internalTable td{
	font-family:Tahoma, Geneva, sans-serif;
	font-size:.9em;
	border:#666666 1px dotted;
	text-align:center;
	cursor:default;
}
.toolHeader 
{
	background-color: #D3E4A6;
	font-family:Arial,Tahoma;
	font-weight: bold;
	font-size:12px;
	color: Black;
	padding: 3px;
	border: solid 2px #9CC525;
}

.toolBody{
	background:#FFFFFF;
    font-family:Arial,Tahoma;
    font-size:12px;
    padding:5px;
    border: solid 2px #9CC525;
    border-top:none;
    color: Blue;
    /* color: #F4921B; */
}
</style>
</head>

<body>
<?php

// Connecting, selecting database
//$link = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
//mysql_select_db('system_db') or die('Could not select database');


/*
// Performing SQL query
$query = 'SELECT * FROM user_info';
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

// Printing results in HTML
echo "<table border='1'>\n";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
mysql_free_result($result);
*/

//echo getDownline("081118361");
//echo "N<br />";

if($_REQUEST["i"]){
	GenerateTree($_REQUEST["i"]);
} else{
	GenerateTree("081118361");
}

function GenerateTree($memberid){
	$l1="<img src='images/icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$l2="<img src='images/icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$l3="<img src='images/icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$l4="<img src='images/icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$l5="<img src='images/icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$query = "SELECT * FROM user_info where s_id='".$memberid."' order by form_type";
	//echo $query;
	$result = mysql_query($query);
	//var_dump($result);	
	//$result_balance=$result["total_balance"]-$result["paid_balance"];
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    	if($row["form_type"]=="A"){$l1=getDownline($row["login_id"]);}
		if($row["form_type"]=="B"){$l2=getDownline($row["login_id"]);}
		if($row["form_type"]=="C"){$l3=getDownline($row["login_id"]);}
		if($row["form_type"]=="D"){$l4=getDownline($row["login_id"]);}
		if($row["form_type"]=="E"){$l5=getDownline($row["login_id"]);}
	}
	mysql_free_result($result);
		
	echo "<table border='0' class='mainTable' cellspacing='0' cellpadding='0' style='width:100%; '>\n";
	echo "<tr><td colspan='5' style='text-align:center; '><img src='images/icon_green.png' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' /></td></tr>";
	echo "<tr><td colspan='5' style='text-align:center; '>Login ID: ".$memberid."<br><a href=\"applicant_add.php?entry_id=$memberid\">Click here to New Entry on this ID($memberid)</a>".getInfo($memberid)."<br />"."</td></tr>";
	echo "<tr><td colspan='5' >".getDownline($memberid)."</td></tr>";
	echo "<tr><td style='width:20%;'>".$l1."</td><td style='width:20%;'>".$l2."</td><td style='width:20%;'>".$l3."</td><td style='width:20%;'>".$l4."</td><td style='width:20%;'>".$l5."</td></tr>";
	echo "</table>\n";
}

function getDownline($memberid){
	$query = "SELECT * FROM user_info where s_id='".$memberid."' order by form_type";
	//echo $query;
	$result = mysql_query($query);
	//var_dump($result);
	$final = "<table border='0' style='width:100%;text-align:center;' class='internalTable' cellspacing='0' cellpadding='0'>\n";
	$final .= "<tr>";
	
	$td_non_left="<td style='width:20%; border:none;  ' >
															<div style='width:100%;'>
																<div style='float:left;width:50%;'>
																	<img style='float:right;' src='images/border_left.png'  alt='No Record' longdesc='#' />
																</div>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:left;' src='images/border_right.png'  alt='No Record' longdesc='#' />
																</div>
															</div>
															<div style='float:left;width:100%; margin:0px; '>
																
																<img src='images/icon.gif' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' />
															</div>
														</td>";
	$td_non="<td style='width:20%; border:none;  ' >
															<div style='width:100%;'>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:right;' src='images/border_left.png'  alt='No Record' longdesc='#' />
																</div>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:left;' src='images/border_right.png'  alt='No Record' longdesc='#' />
																</div>
															</div>
															<div style='float:left;width:100%; margin:0px; '>
																
																<img src='images/icon.gif' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' />
															</div>
														</td>";
	$td_non_right="<td style='width:20%; border:none;  '  >
															<div style='width:100%;'>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:right;' src='images/border_left.png'  alt='No Record' longdesc='#' />
																</div>
																<div style='float:left;width:50%;'>
																	<img style='float:left;' src='images/border_right.png'  alt='No Record' longdesc='#' />
																</div>
															</div>
															<div style='float:left;width:100%; margin:0px; '>
												
																<img src='images/icon.gif' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' />
															</div>
														</td>";
	$nothing=true; $x=0; $pre;
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
		$x++; $_SESSION['s']=0;
	//echo $x."-"; 
		
		if($row["form_type"]=="A" && $x==1){$final .= "<td style='width:20%; border:none;  '  title='".getToolTip($row["login_id"])."'>
															<div style='width:100%;'>
																<div style='float:left;width:50%;'>
																	<img style='float:right;' src='images/border_left.png'  alt='No Record' longdesc='#' />
																</div>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:left;' src='images/border_right.png'  alt='No Record' longdesc='#' />
																</div>
															</div>
															<div style='float:left;width:100%; margin:0px; '>
																<a href='gen.php?i=".$row["login_id"]."'>
																<img src='images/icon_green.png' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' />
															</div>
														</td>";}
		
		if($row["form_type"]=="B" && $x==2){$final .=   "<td style='width:20%; border:none;  '  title='".getToolTip($row["login_id"])."'>
															<div style='width:100%;'>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:right;' src='images/border_left.png'  alt='No Record' longdesc='#' />
																</div>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:left;' src='images/border_right.png'  alt='No Record' longdesc='#' />
																</div>
															</div>
															<div style='float:left;width:100%; margin:0px; '>
																<a href='gen.php?i=".$row["login_id"]."'>
																<img src='images/icon_green.png' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' />
															</div>
														</td>";}
		
		if($row["form_type"]=="C" && $x==3){$final .=  "<td style='width:20%; border:none;  '  title='".getToolTip($row["login_id"])."'>
															<div style='width:100%;'>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:right;' src='images/border_left.png'  alt='No Record' longdesc='#' />
																</div>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:left;' src='images/border_right.png'  alt='No Record' longdesc='#' />
																</div>
															</div>
															<div style='float:left;width:100%; margin:0px; '>
																<a href='gen.php?i=".$row["login_id"]."'>
																<img src='images/icon_green.png' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' />
															</div>
														</td>";}

		if($row["form_type"]=="D" && $x==4){$final .=  "<td style='width:20%; border:none;  '  title='".getToolTip($row["login_id"])."'>
															<div style='width:100%;'>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:right;' src='images/border_left.png'  alt='No Record' longdesc='#' />
																</div>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:left;' src='images/border_right.png'  alt='No Record' longdesc='#' />
																</div>
															</div>
															<div style='float:left;width:100%; margin:0px; '>
																<a href='gen.php?i=".$row["login_id"]."'>
																<img src='images/icon_green.png' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' />
															</div>
														</td>";}
			
		if($row["form_type"]=="E" && $x==5){$final .=  "<td style='width:20%; border:none;  '  title='".getToolTip($row["login_id"])."'>
															<div style='width:100%;'>
																<div style='float:left;width:50%;background:url(images/border2.png)'>
																	<img style='float:right;' src='images/border_left.png'  alt='No Record' longdesc='#' />
																</div>
																<div style='float:left;width:50%;'>
																	<img style='float:left;' src='images/border_right.png'  alt='No Record' longdesc='#' />
																</div>
															</div>
															<div style='float:left;width:100%; margin:0px; '>
																<a href='gen.php?i=".$row["login_id"]."'>
																<img src='images/icon_green.png' style='text-align:center; '  width='20' height='45' alt='No Record' longdesc='#' />
															</div>
														</td>";}
		
		
		$pre = $row["form_type"];
		$nothing=false;
	}
	
	if($nothing){$final .= $td_non_left.$td_non.$td_non.$td_non.$td_non_right; }
	if($x==4 && $pre=="D"){$final .= $td_non_right;}
	if($x==3 && $pre=="C"){$final .= $td_non.$td_non_right; }
	if($x==2 && $pre=="B"){$final .= $td_non.$td_non.$td_non_right;}
	if($x==1 && $pre=="A"){$final .= $td_non.$td_non.$td_non.$td_non_right; }
	mysql_free_result($result);
	$final .= "</tr>";
	$final .= "</table>\n";
	return $final;
}
		
function getToolTip($id){
	$query = "SELECT * FROM user_info where login_id='".$id."'";
	$result = mysql_query($query);
	$res;
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
		$balance=$row["total_balance"]-$row["paid_balance"];
    	$res = "fade=[off] cssheader=[toolHeader] cssbody=[toolBody] header=[Detail For ID (आईडी का विवरण) - ".$id."] body=[".$row["m_name"]."<br />Address:<br />".$row["address"]."<br />Current Balance: ".$balance."<br>Downline - ".getCount($row["login_id"]).$_SESSION['s']."]";
	}
	mysql_free_result($result);
	return $res;
}

function getInfo($id){
	$query = "SELECT * FROM user_info where login_id='".$id."'";
	$result = mysql_query($query);
	$res;
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    	$res = "<br />Name: ".$row["m_name"]."<br />Application No: ".$row["app_no"]."<br />";
	}
	mysql_free_result($result);
	return $res;
}

function getCount($id){
	$query = "SELECT * FROM user_info where s_id='".$id."'";
	$result = mysql_query($query);
	$count = mysql_num_rows($result);
	
	$_SESSION['s'] = $_SESSION['s']+$count;
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    	getCount($row["login_id"]);
	}
	mysql_free_result($result);
	//echo $count."<br />";
	return "";	
}




// Closing connection
mysql_close($link);




?>

<!--<table>
<tr> <td style="border-top:solid; padding:20px; text-align:center; " align="center">fkfk</td><td>fkfk</td></tr>
</table>-->
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>GENELOGY</title>
<script type="text/javascript" src="boxover.js"></script>
<style type="text/css">
.mainTable{
	border:#666666 1px solid;	
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
$link = mysql_connect('localhost', 'root', '') or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('system_db') or die('Could not select database');


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
	$l1="<img src='icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$l2="<img src='icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$l3="<img src='icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$l4="<img src='icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$l5="<img src='icon.gif' width='20' height='45' alt='No Record' longdesc='#' />";
	$query = "SELECT * FROM user_info where s_id='".$memberid."' order by form_type";
	//echo $query;
	$result = mysql_query($query);
	//var_dump($result);	
	
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
    	if($row["form_type"]=="A"){$l1=getDownline($row["login_id"]);}
		if($row["form_type"]=="B"){$l2=getDownline($row["login_id"]);}
		if($row["form_type"]=="C"){$l3=getDownline($row["login_id"]);}
		if($row["form_type"]=="D"){$l4=getDownline($row["login_id"]);}
		if($row["form_type"]=="E"){$l5=getDownline($row["login_id"]);}
	}
	mysql_free_result($result);
		
	echo "<table border='1' class='mainTable' cellspacing='0' cellpadding='3' style='width:100%'>\n";
	echo "<tr><td colspan='5' style='text-align:center;'>Login ID: ".$memberid.getInfo($memberid)."<br />"."</td></tr>";
	echo "<tr><td colspan='5' >".getDownline($memberid)."</td></tr>";
	echo "<tr><td style='width:20%;'>".$l1."</td><td style='width:20%;'>".$l2."</td><td style='width:20%;'>".$l3."</td><td style='width:20%;'>".$l4."</td><td style='width:20%;'>".$l5."</td></tr>";
	echo "</table>\n";
}

function getDownline($memberid){
	$query = "SELECT * FROM user_info where s_id='".$memberid."' order by form_type";
	//echo $query;
	$result = mysql_query($query);
	//var_dump($result);
	$final = "<table border='0' style='width:100%;' class='internalTable' cellspacing='0' cellpadding='3'>\n";
	$final .= "<tr>";
	$nothing=true; $x=0; $pre;
	
	while ($row = mysql_fetch_array($result, MYSQL_BOTH)) {
		$x++; $_SESSION['s']=0;
	echo $x."-";	
		if($row["form_type"]=="A" && $x==1){$final .= "<td style='width:20%; background-color:RED;' title='".getToolTip($row["login_id"])."'><a href='gen.php?i=".$row["login_id"]."'>".$row["login_id"]."</a><br />".$row["m_name"]."<br />Position: ".$row["form_type"]."<br />Downline - ".getCount($row["login_id"]).$_SESSION['s']."</td>";}
		if($row["form_type"]=="B" && $x==2){$final .= "<td style='width:20%; background-color:GREEN;' title='".getToolTip($row["login_id"])."'><a href='gen.php?i=".$row["login_id"]."'>".$row["login_id"]."</a><br />".$row["m_name"]."<br />Position: ".$row["form_type"]."<br />Downline - ".getCount($row["login_id"]).$_SESSION['s']."</td>";}
		if($row["form_type"]=="C" && $x==3){$final .= "<td style='width:20%; background-color:#FFF2F9;' title='".getToolTip($row["login_id"])."'><a href='gen.php?i=".$row["login_id"]."'>".$row["login_id"]."</a><br />".$row["m_name"]."<br />Position: ".$row["form_type"]."<br />Downline - ".getCount($row["login_id"]).$_SESSION['s']."</td>";}
		if($row["form_type"]=="D" && $x==4){$final .= "<td style='width:20%; background-color:#FFF2F9;' title='".getToolTip($row["login_id"])."'><a href='gen.php?i=".$row["login_id"]."'>".$row["login_id"]."</a><br />".$row["m_name"]."<br />Position: ".$row["form_type"]."<br />Downline - ".getCount($row["login_id"]).$_SESSION['s']."</td>";}
		if($row["form_type"]=="E" && $x==5){$final .= "<td style='width:20%; background-color:#FFF2F9;' title='".getToolTip($row["login_id"])."'><a href='gen.php?i=".$row["login_id"]."'>".$row["login_id"]."</a><br />".$row["m_name"]."<br />Position: ".$row["form_type"]."<br />Downline - ".getCount($row["login_id"]).$_SESSION['s']."</td>";}
		
		if($row["form_type"]=="C" && $x==1){$final .= "<td style='width:33%'><img src='icon.gif' width='33' height='45' alt='No Record' longdesc='#' /></td><td style='width:33%'><img src='icon.gif' width='33' height='45' alt='No Record' longdesc='#' /></td><td style='width:34%; background-color:#FFF2F9;' title='".getToolTip($row["login_id"])."'><a href='gen.php?i=".$row["login_id"]."'>".$row["login_id"]."</a><br />".$row["m_name"]."<br />Position: ".$row["form_type"]."<br />Downline - ".getCount($row["login_id"]).$_SESSION['s']."</td>";}
		if($row["form_type"]=="B" && $x==1){$final .= "<td style='width:33%'><img src='icon.gif' width='33' height='45' alt='No Record' longdesc='#' /></td><td style='width:33%; background-color:#E1F0FF' title='".getToolTip($row["login_id"])."'><a href='gen.php?i=".$row["login_id"]."'>".$row["login_id"]."</a><br />".$row["m_name"]."<br />Position: ".$row["form_type"]."<br />Downline - ".getCount($row["login_id"]).$_SESSION['s']."</td>";}
		if($row["form_type"]=="C" && $x==2){$final .= "<td style='width:34%; background-color:#FFF2F9' title='".getToolTip($row["login_id"])."'><a href='gen.php?i=".$row["login_id"]."'>".$row["login_id"]."</a><br />".$row["m_name"]."<br />Position: ".$row["form_type"]."<br />Downline - ".getCount($row["login_id"]).$_SESSION['s']."</td>";}
		
		$pre = $row["form_type"];
		$nothing=false;
	}
	if($nothing){$final .= "<td style='width:20%;'><img src='icon.gif' width='20' height='45' alt='No Record' longdesc='#' /></td><td style='width:20%'><img src='icon.gif' width='20' height='45' alt='No Record' longdesc='#' /></td><td style='width:20%'><img src='icon.gif' width='20' height='45' alt='No Record' longdesc='#' /></td>"; }
	if($x==2 && $pre=="B"){$final .= "<td style='width:34%'><img src='icon.gif' width='33' height='45' alt='No Record' longdesc='#' /></td>";}
	if($x==1 && $pre=="A"){$final .= "<td style='width:33%'><img src='icon.gif' width='33' height='45' alt='No Record' longdesc='#' /></td><td style='width:34%'><img src='icon.gif' width='33' height='45' alt='No Record' longdesc='#' /></td>";}
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
    	$res = "fade=[off] cssheader=[toolHeader] cssbody=[toolBody] header=[Detail For ID (आईडी का विवरण) - ".$id."] body=[".$row["m_name"]."<br />Address:<br />".$row["address"]."]";
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


//Downloaded from www.prabhat.me

?>

</body>
</html>

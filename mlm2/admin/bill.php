<?php
include_once("function.php");
connect();
$res=check_session($_SESSION['mlm5_admin_id'],$_SESSION['mlm5_admin_pass']);
if($res!=1)
{
header("location:index.php");
}
else
	{
	if($_SESSION['mlm5_admin_type']!="Admin" && $_SESSION['mlm5_admin_type']!="Employee" && $_SESSION['mlm5_admin_type']!="Special_Employee")
		{
	header("location:notallowed.php");
		}
	else
		{
$billno=$_GET['x'];
$payment_mode="Cash";


//$address="Sarkar Nager, Bhadrak, pin:756100,Sarkar Nager, Bhadrak, pin:756100,fsfdmnsmf,sdfdfssfsfssfs,sdfs,fsddf";
$que2=mysql_query("select * from `bill` where `billno`='$billno'");
$res2=mysql_fetch_array($que2);

$que_applicant=mysql_query("select * from `user_info` where `login_id`='$res2[login_id]'");
$res_applicant=mysql_fetch_array($que_applicant);
$que_introducer=mysql_query("select * from `user_info` where `login_id`='$res_applicant[s_id]'");
$res_introducer=mysql_fetch_array($que_introducer);

$address=$res_applicant['address'];
$applicant_name=$res_applicant['m_name'];
$applicant_id=$res_applicant['login_id'];
$date=$res2['payment_date'];
$total=$res2['payment_amount'];

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript" src="datetimepicker_css.js"></script>

 <script type="text/javascript">
 function test_skill() {
	var junkVal=document.getElementById('rupees').value;
	junkVal=Math.floor(junkVal);
	var obStr=new String(junkVal);
	numReversed=obStr.split("");
	actnumber=numReversed.reverse();

	if(Number(junkVal) >=0){
		//do nothing
	}
	else{
		alert('wrong Number cannot be converted');
		return false;
	}
	if(Number(junkVal)==0){
		document.getElementById('container').innerHTML=obStr+''+'Rupees Zero Only';
		return false;
	}
	if(actnumber.length>9){
		alert('Oops!!!! the Number is too big to covertes');
		return false;
	}

	var iWords=["Zero", " One", " Two", " Three", " Four", " Five", " Six", " Seven", " Eight", " Nine"];
	var ePlace=['Ten', ' Eleven', ' Twelve', ' Thirteen', ' Fourteen', ' Fifteen', ' Sixteen', ' Seventeen', ' Eighteen', ' Nineteen'];
	var tensPlace=['dummy', ' Ten', ' Twenty', ' Thirty', ' Forty', ' Fifty', ' Sixty', ' Seventy', ' Eighty', ' Ninety' ];

	var iWordsLength=numReversed.length;
	var totalWords="";
	var inWords=new Array();
	var finalWord="";
	j=0;
	for(i=0; i<iWordsLength; i++){
		switch(i)
		{
		case 0:
			if(actnumber[i]==0 || actnumber[i+1]==1 ) {
				inWords[j]='';
			}
			else {
				inWords[j]=iWords[actnumber[i]];
			}
			inWords[j]=inWords[j]+' Only';
			break;
		case 1:
			tens_complication();
			break;
		case 2:
			if(actnumber[i]==0) {
				inWords[j]='';
			}
			else if(actnumber[i-1]!=0 && actnumber[i-2]!=0) {
				inWords[j]=iWords[actnumber[i]]+' Hundred and';
			}
			else {
				inWords[j]=iWords[actnumber[i]]+' Hundred';
			}
			break;
		case 3:
			if(actnumber[i]==0 || actnumber[i+1]==1) {
				inWords[j]='';
			}
			else {
				inWords[j]=iWords[actnumber[i]];
			}
			if(actnumber[i+1] != 0 || actnumber[i] > 0){
				inWords[j]=inWords[j]+" Thousand";
			}
			break;
		case 4:
			tens_complication();
			break;
		case 5:
			if(actnumber[i]==0 || actnumber[i+1]==1) {
				inWords[j]='';
			}
			else {
				inWords[j]=iWords[actnumber[i]];
			}
			if(actnumber[i+1] != 0 || actnumber[i] > 0){
				inWords[j]=inWords[j]+" Lakh";
			}
			break;
		case 6:
			tens_complication();
			break;
		case 7:
			if(actnumber[i]==0 || actnumber[i+1]==1 ){
				inWords[j]='';
			}
			else {
				inWords[j]=iWords[actnumber[i]];
			}
			inWords[j]=inWords[j]+" Crore";
			break;
		case 8:
			tens_complication();
			break;
		default:
			break;
		}
		j++;
	}

	function tens_complication() {
		if(actnumber[i]==0) {
			inWords[j]='';
		}
		else if(actnumber[i]==1) {
			inWords[j]=ePlace[actnumber[i-1]];
		}
		else {
			inWords[j]=tensPlace[actnumber[i]];
		}
	}
	inWords.reverse();
	for(i=0; i<inWords.length; i++) {
		finalWord+=inWords[i];
	}
	document.getElementById('container').innerHTML='Rupees'+finalWord;
	document.getElementById('container1').innerHTML='Rupees'+finalWord;
}

</script>

<style media="print">
	.hide{
		display:none;
	}
</style>

</head>

<body onload="test_skill();">





	
	
	<input type="hidden" name="rupees" id="rupees" value="<?php echo $total; ?>" />
	<div align="center" style=" width:824px; height:800px; margin:autox; " >
		<div align="center" style=" width:824px; height:150px; margin:autox; " >
		
		</div>
	
<div style="width:720px; height:300px;  font-family:Arial, Helvetica, sans-serif; color:#333333; font-size:14px;">
 
<table border="1" cellspacing="0" style="width:720px; height:300px;">
<tr>
<td><strong>User Id No.</strong> </td><td colspan="2"> <?php echo $res_applicant['branch'].$applicant_id; ?></td>

<td colspan="2"><strong>Date:</strong> </td><td><?php echo $date;?></td>
</tr>
<tr>

<td  style="text-align:left;"><strong>Receipt No.</strong></td>
<td colspan="5"><?php echo "".$billno; ?></td>
</tr>
<tr>
<td ><strong>Recived With<br /> Thanks From:</strong></td><td colspan="5"><?php echo $applicant_name; ?></td>
</tr>
<tr height="40">
  <td ><strong>Address:</strong></td>
  <td  colspan="5"><?php echo $address; ?></td>

</tr>




<tr><td><strong>Amount RS.</strong></td><td colspan="3" style="border:none;"><?php echo "Rs:".$total."/-"; ?><div id="container"></div></td>
</tr>
<tr>
<td ><strong>Tds(10.00%)</strong></td><td colspan="2"><?php echo "Rs:".round($total*10/100)."/-"; ?></td>
<td ><strong>NET AMOUNT</strong></td><td colspan="2"><?php echo "Rs:".round($total-($total*10/100))."/-"; ?></td>
</tr>
<tr><td><strong>Introducer/ID.</strong></td><td colspan="2"><?php echo "".$res_applicant['s_id'];?></td>
	
	<td colspan="3" style="border:none;"></td>
</tr>
<tr>
<td><strong>Introducer Name</strong></td><td colspan="2"><?php echo $res_introducer['m_name'];?></td><td colspan="3" style="border:none; font-style:italic; text-align:center"><strong>Authorised Signatory </strong></td>
</tr>
</table>		
</div>
<div align="left" style=" width:824px; height:265px; margin:autox; " >
	<span style="font-size:8px; margin:100px;"><?php echo $res2['payment_by'];?></span>
	<a href="home.php" style="margin:50px;" class="hide">Home </a>&nbsp;&nbsp;&nbsp;
 	<a href="payout_user.php" style="margin:50px;" class="hide">Back </a>&nbsp;&nbsp;&nbsp;
	<input type="button" value="print" onclick="window.print();" class="hide" />
		</div>
	
	<div style="width:720px; height:300px;  font-family:Arial, Helvetica, sans-serif; color:#333333; font-size:14px;">
 
<table border="1" cellspacing="0" style="width:720px; height:300px;">
<tr>
<td><strong>User Id No.</strong> </td><td colspan="2"> <?php echo $res_applicant['branch'].$applicant_id; ?></td>

<td colspan="2"><strong>Date:</strong> </td><td><?php echo $date;?></td>
</tr>
<tr>

<td  style="text-align:left;"><strong>Receipt No.</strong></td>
<td colspan="5"><?php echo "".$billno; ?></td>
</tr>
<tr>
<td ><strong>Recived With<br /> Thanks From:</strong></td><td colspan="5"><?php echo $applicant_name; ?></td>
</tr>
<tr height="40">
  <td ><strong>Address:</strong></td>
  <td  colspan="5"><?php echo $address; ?></td>

</tr>



<tr>
<td ><strong>Payment Mode</strong></td><td colspan="5"><?php echo $payment_mode; ?></td>
</tr>
<tr><td><strong>Amount RS.</strong></td><td colspan="3" style="border:none;"><?php echo "Rs:".$total."/-"; ?><div id="container1"></div></td>
</tr>
<tr><td><strong>Introducer/ID.</strong></td><td colspan="2"><?php echo "".$res_applicant['s_id'];?></td>
	
	<td colspan="3" style="border:none;"></td>
</tr>
<tr>
<td><strong>Introducer Name</strong></td><td colspan="2"><?php echo $res_introducer['m_name'];?></td><td colspan="3" style="border:none; font-style:italic; text-align:center"><strong>Authorised Signatory </strong></td>
</tr>
</table>		
</div>
<span style="font-size:8px; margin:100px;"><?php echo $res2['payment_by'];?></span>
     
</div>
<?php }} ?>
</body>
</html>

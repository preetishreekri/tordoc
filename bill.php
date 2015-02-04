<?php
include_once('admin/function.php');
if(!$_GET['bid'])
{
    $msg="billid not found";
    header("location:index.php?msg=$msg");
}
 $billid=$_GET['bid'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
    </style>
    <script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";//again because google chrome don't insert first hash into history
window.onhashchange=function(){window.location.hash="no-back-button";}
    </script>
    <style>
@media print
{    
    .no-print
    {
        display: none !important;
    }
	
	
}

</style>
<style>
.table{ width:100%; height:auto; float:left;  border:1px solid #8a8a8a; border-collapse:collapse; font-family:Arial, Helvetica, sans-serif; font-size:13px; line-height:1.9;}
	.table tr{ border:1px solid #8a8a8a; border-collapse:collapse;}
	.table tr td{ border:1px solid #8a8a8a; border-collapse:collapse;}
	
	.button{ height:30px; background: none repeat scroll 0% 0% #2C5EC3;
border: 1px solid #092C74;
color: #FFF;
 padding:6px 10px; font-family:Arial, Helvetica, sans-serif; font-size:13px; text-decoration:none}
</style>
</head>
<body style="background:#989898;">
<div style="width:100%; height:auto; float:left;">
		<div style="width:700px; margin:auto;">
				<div style="width:100%; height:auto; float:left; background:#fff; padding:20px; border:1px solid #696767;">
    <span class="no-print" style="margin-bottom:20px; float:left;"><a href="doctorview.php" class="button">Home</a></span>
    <form>
    <table align="center" class="table" cellpadding="10">
	<?php
	//echo "select * from `appointment` where `billid`='$billid'";
	$fetch=mysql_query("select * from `appointment` where `billid`='$billid'");
	$res=mysql_fetch_array($fetch);
	?>
        <tr>
            <th colspan="4" align="center">Invoice</th>
        </tr>
        <tr>
            <td colspan="2" align="left">Customer Address</td>
            <td colspan="2" align="right">Doctor Address</td>
        </tr>
        <tr>
            <td colspan="2" align="left" width="200"><?php echo $res['address'];?></td>
		    <?php
		    $doctfetch=mysql_query("select * from `doctor_details` where `id`='$res[doctor_uid]'");
		    $doctres=mysql_fetch_array($doctfetch);
		    ?>
            <td colspan="2" align="left" width="200"><?php echo $doctres['address'];?></td>
        </tr>
        <tr>
            <th colspan="4" align="left">services</th>
        </tr>
        <tr>
            <th colspan="2" align="left">Description</th>
            <th align="left">Time</th>
            <th align="left">Amount</th>
        </tr>
        <tr>
            <td colspan="2"><?php echo $res['patient_reson'];?></td>
            <td><?php echo $res['time'];?></td>
            <td><?php echo $res['fee'];?></td>
        </tr>
        <tr>
            <td colspan="3" align="right" >TOTAL</td>
            <td align="left"><?php echo $res['fee'];?></td>
        </tr>  
    </table>
    </form>
	</div>
	</div>
	</div>
</body>
</html>
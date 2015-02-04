<?php
include_once('../function.php');
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
   <!-- <span class="no-print" style="margin-bottom:20px; float:left;"><a href="doctorview.php" class="button">Home</a></span>-->
    <form>
    <table align="center" class="table" cellpadding="10">
	<?php
	//echo "select * from `appointment` where `billid`='$billid'";
	$fetch=mysql_query("select * from `customer` where `billid`=$billid")or die(mysql_error());
	$resfetch=mysql_fetch_array($fetch);
	?>
        <tr>
            <th align="left">Bill No:<?php echo $resfetch['billid'];?></th>
			<th></th>
        </tr>
        <tr>
            <th align="left">Customer Address:<?php echo $resfetch['address'];?></th>
			<th></th>
        </tr>
        <tr>
            <th align="left">services</th>
            <th align="left">Amount</th>
        </tr>
        <tr>
            <td>By Cash</td>
            <td>
			<?php 
			$amt=$resfetch['fee'];
			$tot=$amt+($amt*0.1);
			echo $tot;
			?>
			</td>
        </tr>
       <tr>
            <td align="right" >TOTAL</td>
            <td align="left"><?php echo $tot;?></td>
        </tr>  
    </table>
    </form>
	</div>
	</div>
	</div>
</body>
</html>
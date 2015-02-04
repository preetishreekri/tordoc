<?php
include_once('function.php');
 $billid=$_GET['bid'];
?>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
 window.onload=function()
 {
     var bill=<?php echo $billid; ?>;
     window.open("bill_customer.php?bid="+bill);
	setTimeout(function ()
	 {
	window.location.href = 'balance.php'; 
	  },5000);
    };
</script>
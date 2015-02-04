<?php include_once("function.php");
connect();
$res=check_session($_SESSION['mlmlogin_id'],$_SESSION['mlmloginPass']);
if($res!=1)
{
header("location:index.php");
}
	$query = mysql_query("SELECT * FROM `user_info` where `login_id`='$_SESSION[mlmlogin_id]'");
	$result=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>tordoc</title>
<link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" title="default" />
<!--[if IE]>
<link rel="stylesheet" media="all" type="text/css" href="css/pro_dropline_ie.css" />
<![endif]-->

<!--  jquery core -->
<script src="js/jquery/jquery-1.4.1.min.js" type="text/javascript"></script>

<!--  checkbox styling script -->
<script src="js/jquery/ui.core.js" type="text/javascript"></script>
<script src="js/jquery/ui.checkbox.js" type="text/javascript"></script>
<script src="js/jquery/jquery.bind.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$('input').checkBox();
	$('#toggle-all').click(function(){
 	$('#toggle-all').toggleClass('toggle-checked');
	$('#mainform input[type=checkbox]').checkBox('toggle');
	return false;
	});
});
</script>  

<![if !IE 7]>

<!--  styled select box script version 1 -->
<script src="js/jquery/jquery.selectbox-0.5.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect').selectbox({ inputClass: "selectbox_styled" });
});
</script>
 

<![endif]>

<!--  styled select box script version 2 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_form_1').selectbox({ inputClass: "styledselect_form_1" });
	$('.styledselect_form_2').selectbox({ inputClass: "styledselect_form_2" });
});
</script>

<!--  styled select box script version 3 --> 
<script src="js/jquery/jquery.selectbox-0.5_style_2.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() {
	$('.styledselect_pages').selectbox({ inputClass: "styledselect_pages" });
});
</script>

<!--  styled file upload script --> 
<script src="js/jquery/jquery.filestyle.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
  $(function() {
      $("input.file_1").filestyle({ 
          image: "images/forms/choose-file.gif",
          imageheight : 21,
          imagewidth : 78,
          width : 310
      });
  });
</script>

<!-- Custom jquery scripts -->
<script src="js/jquery/custom_jquery.js" type="text/javascript"></script>
 
<!-- Tooltips -->
<script src="js/jquery/jquery.tooltip.js" type="text/javascript"></script>
<script src="js/jquery/jquery.dimensions.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('a.info-tooltip ').tooltip({
		track: true,
		delay: 0,
		fixPNG: true, 
		showURL: false,
		showBody: " - ",
		top: -35,
		left: 5
	});
});
</script> 


<!--  date picker script -->
<link rel="stylesheet" href="css/datePicker.css" type="text/css" />
<script src="js/jquery/date.js" type="text/javascript"></script>
<script src="js/jquery/jquery.datePicker.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
        $(function()
{

// initialise the "Select date" link
$('#date-pick')
	.datePicker(
		// associate the link with a date picker
		{
			createButton:false,
			startDate:'01/01/2005',
			endDate:'31/12/2020'
		}
	).bind(
		// when the link is clicked display the date picker
		'click',
		function()
		{
			updateSelects($(this).dpGetSelected()[0]);
			$(this).dpDisplay();
			return false;
		}
	).bind(
		// when a date is selected update the SELECTs
		'dateSelected',
		function(e, selectedDate, $td, state)
		{
			updateSelects(selectedDate);
		}
	).bind(
		'dpClosed',
		function(e, selected)
		{
			updateSelects(selected[0]);
		}
	);
	
var updateSelects = function (selectedDate)
{
	var selectedDate = new Date(selectedDate);
	$('#d option[value=' + selectedDate.getDate() + ']').attr('selected', 'selected');
	$('#m option[value=' + (selectedDate.getMonth()+1) + ']').attr('selected', 'selected');
	$('#y option[value=' + (selectedDate.getFullYear()) + ']').attr('selected', 'selected');
}
// listen for when the selects are changed and update the picker
$('#d, #m, #y')
	.bind(
		'change',
		function()
		{
			var d = new Date(
						$('#y').val(),
						$('#m').val()-1,
						$('#d').val()
					);
			$('#date-pick').dpSetSelected(d.asString());
		}
	);

// default the position of the selects to today
var today = new Date();
updateSelects(today.getTime());

// and update the datePicker to reflect it...
$('#d').trigger('change');
});
</script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="js/jquery/jquery.pngFix.pack.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body> 
<!-- Start: page-top-outer -->
<!-- End: page-top-outer -->
<div class="clear">&nbsp;</div>
 
<!--  start nav-outer-repeat................................................................................................. START -->
<div class="nav-outer-repeat"> 
<!--  start nav-outer -->
<div class="nav-outer"> 

		<!-- start nav-right -->
		<div id="nav-right">
		
			<div class="nav-divider">&nbsp;</div>
			<div class="showhide-account"><img src="images/shared/nav/nav_myaccount.gif" width="93" height="14" alt="" /></div>
			<div class="nav-divider">&nbsp;</div>
			<a href="logout.php" id="logout"><img src="images/shared/nav/nav_logout.gif" width="64" height="14" alt="" /></a>
			<div class="clear">&nbsp;</div>
		
			<!--  start account-content -->	
			<div class="account-content">
			<div class="account-drop-inner">
				<a href="change_pass.php" id="acc-settings">Change Password</a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="edit_personal_details.php" id="acc-details">Edit Personal details </a>
				<div class="clear">&nbsp;</div>
				<div class="acc-line">&nbsp;</div>
				<a href="repurches.php" id="acc-details"> Re-purchase</a>
				<div class="clear">&nbsp;</div>
			</div>
			</div>
			<!--  end account-content -->
		
		</div>
		<!-- end nav-right -->


		<!--  start nav -->
		<div class="nav">
		<div class="table">
		
		<ul class="current"><li><a href="home.php"><b>HOME</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub show">
			<ul class="sub">
				<li class="sub_show"><a href="#nogo"><span style="font-size:15px; color:#33FF00;">Welcome </span><span style="color:#FFFFFF" ><?php echo $result['m_name']."( ID: ".$result['login_id'].")";?> </span></a></li>
				<li class="sub_show"><a href="#nogo"><span style="font-size:15px; color:#33FF00;">PIN Balance</span> <span style="color:#FFFFFF" ><?php echo $result['pin_balance'];?> </span></a></li>
			</ul>		
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		                    
		<ul class="select"><li><a href="applicant_add.php"><b>Add Applicant</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			
				
			
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="gen.php?i=<?php echo $_SESSION['mlmlogin_id'];?>"><b>Tree View</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select"><li><a href="change_pass.php"><b>Password</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		<div class="nav-divider">&nbsp;</div>
		
		<ul class="select" ><li><a href="achivements.php"><b>Achivements</b><!--[if IE 7]><!--></a><!--<![endif]-->
		<!--[if lte IE 6]><table><tr><td><![endif]-->
		<div class="select_sub">
			
		</div>
		<!--[if lte IE 6]></td></tr></table></a><![endif]-->
		</li>
		</ul>
		
		<div class="clear"></div>
		</div>
		<div class="clear"></div>
		</div>
		<!--  start nav -->

</div>
<div class="clear"></div>
<!--  start nav-outer -->
</div>
<!--  start nav-outer-repeat................................................... END -->

 <div class="clear"></div>
 
<!-- start content-outer ........................................................................................................................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">

	<!--  start page-heading -->
	<div id="page-heading">
		<h1><a href="download/user_form.pdf"><span>Click to Download User form</span></a> , <a href="download/broucher.pdf"><span>Click to Download Broucher</span></a></h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<!--  end message-green -->
            <!--  start product-table ..................................................................................... -->
<form id="mainform" action="">
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table" style="text-align:center; color:#FF0000;font-size:18px;">
				<tr>
					<th class="table-header-check"><a id="toggle-all" ></a> </th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Level &amp; No. of IDs</a>	</th>
					<th class="table-header-repeat line-left minwidth-1"><a href="">Incentives</a></th>
					<th class="table-header-repeat line-left"><a href="">Field Allowance per month</a></th>
					<th class="table-header-repeat line-left"><a href="">Gifts</a></th>
					<th class="table-header-repeat line-left"><a href="">Target Days for F.A. &amp Gift</a></th>
					
				</tr>
	
	
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L1(1+5)</td>
					<td>Rs. 25</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L2(L1+25)</td>
					<td>Rs. 75</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L3(L2+125)</td>
					<td>Rs. 250</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L4(L3+625)</td>
					<td>Rs. 687</td>
					<td>-</td>
					<td><img src="images1/gift4.png" /></td>
					<td>25 Days</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L5(L4+3125)</td>
					<td>Rs. 1875</td>
					<td>Rs. 500/- Per Month upto 1 year</td>
					<td><img src="images1/gift5.png" /></td>
					<td>41 Days</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L6(L5+15625)</td>
					<td>Rs. 6250</td>
					<td>Rs. 1050/- Per Month upto 1 year</td>
					<td><img src="images1/gift6.png" /></td>
					<td>51 Days</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L7(L6+78125)</td>
					<td>Rs. 15625</td>
					<td>Rs. 2050/- Per Month upto 1 year</td>
					<td><img src="images1/gift7.png" /></td>
					<td>95 Days</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L8(L7+390625)</td>
					<td>Rs. 78125</td>
					<td>Rs. 4050/- Per Month upto 1 year</td>
					<td><img src="images1/gift8.png" /></td>
					<td>115 Days</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L9(L8+1953125)</td>
					<td>Rs. 390625</td>
					<td>Rs. 6050/- Per Month upto 1 year</td>
					<td><img src="images1/gift9.png" /></td>
					<td>155 Days</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L10(L9+9765625)</td>
					<td>Rs. 1464843</td>
					<td>Rs. 10050/- Per Month upto 2 years</td>
					<td><img src="images1/gift10.png" /></td>
					<td>No Time Limit</td>
					
				</tr>
				<tr>
				
					<td><input  type="checkbox"/></td>
					<td>L11 Retired</td>
					<td>4882812</td>
					<td>Rs. 20000/- Per Month upto 2 years</td>
					<td><img src="images1/gift11.png" /></td>
					<td>No Time Limit</td>
					
				</tr>
			
		    </table>
				<!--  end product-table................................... --> 
		  </form>
		  </div>
			<!--  end content-table  -->
		
			<!--  start actions-box ............................................... -->
			<div id="actions-box">
				<a href="" class="action-slider"></a>
				<div id="actions-box-slider">
					<a href="" class="action-edit">Edit</a>
					<a href="" class="action-delete">Delete</a>
				</div>
				<div class="clear"></div>
			</div>
			<!-- end actions-box........... -->
			
			<!--  start paging..................................................... -->
			<table border="0" cellpadding="0" cellspacing="0" id="paging-table">
			<tr>
			<td>
				<a href="" class="page-far-left"></a>
				<a href="" class="page-left"></a>
				<div id="page-info">Page <strong>1</strong> / 15</div>
				<a href="" class="page-right"></a>
				<a href="" class="page-far-right"></a>
			</td>
			<td>
			<select  class="styledselect_pages">
				<option value="">Number of rows</option>
				<option value="">1</option>
				<option value="">2</option>
				<option value="">3</option>
			</select>
			</td>
			</tr>
			</table>
			<!--  end paging................ -->
			
			<div class="clear"></div>
		 
	  </div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- start footer -->         
<div id="footer">
	<!--  start footer-left -->
	<div id="footer-left">
	
	Designed & Developed By <span id="spanYear"></span> <a href="http://www.facebook.com/profile.php?id=100002422501287">Ricky</a><BR /> <a class="tzine" href="http://ultrasoft.co.in">powered By <i>Ultra<b>soft</b></i> </a> </div>
	<!--  end footer-left -->
	<div class="clear">&nbsp;</div>
</div>
<!-- end footer -->
 
</body>
</html>
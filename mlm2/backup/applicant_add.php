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
<title>bhabijee</title>
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
	image: "images/forms/upload_file.gif",
	imageheight : 29,
	imagewidth : 78,
	width : 300
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
<script>
function nameUpperFirst(v)
{
document.getElementById("name").value=upperFirst(v);
}
function nationalityUpperFirst(v)
{
document.getElementById("nationality").value=upperFirst(v);
}
function addressUpperFirst(v)
{
document.getElementById("address").value=upperFirst(v);
}

function nomineeNameUpperFirst(v)
{
document.getElementById("nominee_name").value=upperFirst(v);
}

function nomineeRelationUpperFirst(v)
{
document.getElementById("nominee_relation").value=upperFirst(v);
}
function districtUpperFirst(v)
{
document.getElementById("district").value=upperFirst(v);
}
function stateUpperFirst(v)
{
document.getElementById("state").value=upperFirst(v);
}

function upperFirst(v)
{
//var name=document.getElementById("name").value;
var pattern = /(\w)(\w*)/; // a letter, and then one, none or more letters



    var a = v.split(/\s+/g); // split the sentence into an array of words



    for (i = 0 ; i < a.length ; i ++ ) {

        var parts = a[i].match(pattern); // just a temp variable to store the fragments in.



        var firstLetter = parts[1].toUpperCase();

        var restOfWord = parts[2];



        a[i] = firstLetter + restOfWord; // re-assign it back to the array and move on

    }



    //document.form1.text1.value = a.join(' '); // join it back together

return a.join(' ');
}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
	  
function temp()
{
document.getElementById("name").value="virus attack";
document.getElementById("contact_no").value=440440440440;
document.getElementById("nationality").value="KanuGharapakhare";
document.getElementById("email").value="virus@fullvirus.com";
document.getElementById("district").value="Bhulijaichi";
document.getElementById("state").value="odishapakhare";
document.getElementById("pin_no").value="420420420";
document.getElementById("pan_no").value="12345678910";
document.getElementById("nominee_name").value="AntyVirus";
document.getElementById("nominee_relation").value="Brother";
document.getElementById("bank_name").value="VirusBankofINDIA";
document.getElementById("address").value="AT: KanuGharapakhare ,post:Lakhahaichi , Dist: katethara kahibi ";
document.getElementById("acc_no").value="201320132013201320132013";
}

function check()
{
var name=document.getElementById("name").value;
var s_id=document.getElementById("s_id").value;
var contact_no=document.getElementById("contact_no").value;


if(name=="")
{
alert("Applicant Name can not be blank");
return false;
}
if(s_id=="")
{
alert("Seniour ID can not be blank");
return false;
}
if(contact_no=="")
{
alert("Contact no can not be blank");
return false;
}

}
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
		
		<ul class="select"><li><a href="view_level.php"><b>Level</b><!--[if IE 7]><!--></a><!--<![endif]-->
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
 
<!-- start content-outer -->
<div id="content-outer">
<!-- start content -->
<div id="content">


<div id="page-heading"><h1>Add Applicant</h1></div>


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
	<!--  start content-table-inner -->
	<div id="content-table-inner">
	
	<table border="0" width="100%" cellpadding="0" cellspacing="0">
	<tr valign="top">
	<td>
	
	
		<!--  start step-holder -->
		<div id="step-holder">
			<div class="step-no">1</div>
			<div class="step-dark-left"><a href="home.php">Home</a></div>
			<div class="step-dark-right">&nbsp;</div>
			<div class="step-no-off">2</div>
			<div class="step-light-left">Add Applicant details</div>
			<div class="step-light-round">&nbsp;</div>
			<div class="clear"></div>
		</div>
		<!--  end step-holder -->
	
		<!-- start id-form -->
		<form name="form1" method="post" action="applicant_insert.php"  enctype="multipart/form-data">
		<table border="0" cellpadding="0" cellspacing="0"  id="id-form">
		<tr>
			<th valign="top" style="color:#FF0000;">Seniour ID:</th>
			<td> <input type="text" class="inp-form-error" name="s_id" id="s_id" value="<?php echo $_GET['entry_id'];?>" tabindex="1" onblur="return temp(this.value)" /></td>
			<td>
			<div class="error-left"></div>
			<div class="error-inner">This field is required.</div>
			</td>
		</tr>
		<tr>
			<th valign="top">Applicant Name:</th>
			<td><input type="text" class="inp-form-error" id="name"  name="name" onkeyup="return nameUpperFirst(this.value)" tabindex="2"/></td>
			<td>
			<div class="error-left"></div>
			<div class="error-inner">This field is required.</div>
			</td>
		</tr>
		<tr>
		<th valign="top">Gender:</th>
		<td>	
		<select class="styledselect_form_1" name="gender" tabindex="5"><option value="male">Male</option><option value="female">Female</option></select>
		</td>
		<td></td>
		</tr>
		
		<tr>
			<th valign="top">Nationality:</th>
			<td><input name="nationality" id="nationality" type="text" class="inp-form" onkeyup="return nationalityUpperFirst(this.value)" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Contact No:</th>
			<td><input type="text" class="inp-form-error" id="contact_no" name="contact_no" onKeyPress="return isNumberKey(event)"/></td>
			<td>
			<div class="error-left"></div>
			<div class="error-inner">This field is required.</div>
			</td>
		</tr>
		<tr>
			<th valign="top">E-mail:</th>
			<td><input  name="email" id="email" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		
	<tr>
		<th valign="top">Address:</th>
		<td><textarea rows="" cols=""  name="address" id="address" class="form-textarea" onkeyup="return addressUpperFirst(this.value)"></textarea></td>
		<td></td>
	</tr>
	<tr>
			<th valign="top">District:</th>
			<td><input  name="district" id="district" type="text" class="inp-form" onkeyup="return districtUpperFirst(this.value)"/></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">State:</th>
			<td><input  name="state" id="state" onkeyup="return stateUpperFirst(this.value)" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">	Pin No:</th>
			<td><input  name="pin_no" id="pin_no"  onKeyPress="return isNumberKey(event)" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Pan No:</th>
			<td><input  name="pan_no" id="pan_no" onKeyPress="return isNumberKey(event)" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Nominee Name:</th>
			<td><input  name="nominee_name" id="nominee_name" onkeyup="return nomineeNameUpperFirst(this.value)" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Nominee_relation:</th>
			<td><input  name="nominee_relation" id="nominee_relation" onkeyup="return nomineeRelationUpperFirst(this.value)" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Bank Name:</th>
			<td><input  name="bank_name" id="bank_name" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
		<tr>
			<th valign="top">Bank Account No:</th>
			<td><input  name="acc_no" id="acc_no" type="text" class="inp-form" /></td>
			<td></td>
		</tr>
	<tr>
		<th>&nbsp;</th>
		<td valign="top">
			<input type="submit" value="" class="form-submit" name="submit" onclick="return check(this.value);" />
			<input type="reset" value="" class="form-reset"  />
		</td>
		<td></td>
	</tr>
	</table>
	</form>
	<!-- end id-form  -->

	</td>
	<td>

	<!--  start related-activities -->
	<div id="related-activities">
		
		<!--  start related-act-top -->
		<div id="related-act-top">
		<img src="images/forms/header_related_act.gif" width="271" height="43" alt="" />
		</div>
		<!-- end related-act-top -->
		
		<!--  start related-act-bottom -->
		<div id="related-act-bottom">
		
			<!--  start related-act-inner -->
			<div id="related-act-inner" style=" overflow:scroll; height:500px; width:250px;">
				<?php 
				$query_created_by = mysql_query("SELECT * FROM `user_info` where `created_by`='$_SESSION[mlmlogin_id]' ORDER BY `login_id`  DESC");
				while($result_created_by=mysql_fetch_array($query_created_by))
					{

				?>
			
				<div class="left"><a href=""><img src="images/forms/icon_plus.gif" width="21" height="21" alt="" /></a></div>
				<div class="right">
					<h5><?php echo "Seniour ID :".$result_created_by['s_id'];?> <a href="gen.php?i=<?php echo $result_created_by['s_id'];?>"> (Tree view) </a></h5>
					<ul class="greyarrow">
						<li>Name : <?php echo $result_created_by['m_name'];?></li>
						<li>Contact No : <?php echo $result_created_by['mobile_no'];?></li>
						<li>User ID : <?php echo $result_created_by['login_id'];?></li>
						<li>Password : <?php
											if($result_created_by['pass_change_status']!=1 && $result_created_by['pin_balance']==0){
											 echo $result_created_by['login_pass'];
											 	}
											 else{
											echo "*******";
												}
											
											 ?></li> 
						<li><a href="applicant_add.php?entry_id=<?php echo $result_created_by['s_id'];?>"> New Entry on this ID(<?php echo $result_created_by['s_id'];?>)</a> </li>
						<li><a href="applicant_add.php?entry_id=<?php echo $result_created_by['login_id'];?>"> New Entry on this ID(<?php echo $result_created_by['login_id'];?>)</a> </li>
					</ul>
				</div>
				
				<div class="clear"></div>
				<div class="lines-dotted-short"></div>
				<?php }?>
				<div class="clear"></div>
				
			</div>
			<!-- end related-act-inner -->
			<div class="clear"></div>
		
		</div>
		<!-- end related-act-bottom -->
	
	</div>
	<!-- end related-activities -->

</td>
</tr>
<tr>
<td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
<td></td>
</tr>
</table>
 
<div class="clear"></div>
 

</div>
<!--  end content-table-inner  -->
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
<!--  end content-outer -->

 

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
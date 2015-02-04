<?php
include_once("function.php");
connect();
$res=check_session($_SESSION['mlmlogin_id'],$_SESSION['mlmloginPass']);
if($res!=1)
{
header("location:index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title></title>


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
	  
function check()
{
var name=document.getElementById("name").value;
var premium_amount=document.getElementById("premium_amount").value;
var opening_date=document.getElementById("opening_date").value;
var agent=document.getElementById("agent").value;

if(name=="")
{
alert("Applicant Name can not be blank");
return false;
}
if(premium_amount=="")
{
alert("Premium Amount can not be blank");
return false;
}
if(opening_date=="")
{
alert("Please Select Opening Date");
return false;
}
if(agent=="")
{
alert("Please Select Introducer ID");
return false;
}

}

function introducer_details(id)
{
var id=document.getElementById("agent").value;
if(id)

{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
	
	document.getElementById("inroducer_details").innerHTML=xmlhttp.responseText;
	
	}
  }

xmlhttp.open("GET","ajax_introducer.php?id="+id,true);

xmlhttp.send();
}
}



function closeing_date(str)
{

var selected_date = document.getElementById('opening_date').value;

var duration = document.getElementById('duration').value;

if (window.XMLHttpRequest)
		  {// code for IE7+, Firefox, Chrome, Opera, Safari
		  xmlhttp=new XMLHttpRequest();
		  }
		else
		  {// code for IE6, IE5
		  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		  }
		xmlhttp.onreadystatechange=function()
		  {
		  if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			//alert(xmlhttp.responseText);
			//document.getElementById("result").innerHTML=xmlhttp.responseText;
			var reply=xmlhttp.responseText;
			//document.getElementById('amount').value=reply;
	
					
			document.getElementById('td_closing_date').innerHTML=reply;
				
			}
			
		  }

		xmlhttp.open("GET","ajax_closeing_date.php?x="+selected_date+"&y="+duration,true);
		xmlhttp.send();

}



function show(sElement) {
    	
      var srcElement = sElement;
	  
      if(srcElement =="gs_plan" || srcElement =="gs_future_plan") {
       document.getElementById('gold_selver').style.display = "block";
	   document.getElementById('gold_selver1').style.display = "block";
	  // document.getElementById('gold_selver1').style.display = "block";
        //gold_selver.style.display = "block";
		//gold_selver1.style.display = "block";
		gold_weigth.style.display = "block";
		gold_weigth1.style.display = "block";
		gold_weigth2.style.display = "block";
		balanced_amount.style.display = "block";
		balanced_amount1.style.display = "block";
	  }
	  else {
	    
		
		document.getElementById('gold_selver').style.display = "none";
		document.getElementById('gold_selver1').style.display = "none";
		//gold_selver1.style.display = "none";
		gold_weigth.style.display = "none";
		gold_weigth1.style.display = "none";
		gold_weigth2.style.display = "none";
		balanced_amount.style.display = "none";
		balanced_amount1.style.display ="none";
		
	  }
      //return false;
  }
  
  
</script>
	


</head>

<body>
			
												<div class="menulinks" style="background:url(images/back.png) repeat-x; color:#f4f4f4; font-weight:bold; width:670px;">
															Applicant Registration form
												</div>
												
												<div style="width:683px; height:680px; overflow:auto; float:left; margin-top:5px; border:solid;">
													<form name="form1" method="post" action="applicant_insert.php"  enctype="multipart/form-data">
<br/>

<table align="center"border="0">

<tr>
  <td align="right">Seniour ID</td>
  <td colspan="2">
  <input type="text" name="s_id"  AUTOCOMPLETE="OFF" size="25" tabindex="4" nkeyup="return nameUpperFirst(this.value)"/>
 </td>
 <td>&nbsp;</td> 
</tr>

<tr>
  <td align="right">Name</td>
  <td colspan="2">
  <input type="text" name="name"  AUTOCOMPLETE="OFF" size="25" tabindex="4" nkeyup="return nameUpperFirst(this.value)"/>
 </td>
 <td>&nbsp;</td> 
</tr>

<tr>
  <td align="right">Gender</td>
    <td><select name="gender" tabindex="5"><option value="male">Male</option><option value="female">Female</option></select></td>
</tr>
<tr>
  <td align="right">Nationality</td>
    <td><input type="text" name="nationality" id="nationality"  size="25" tabindex="6" onkeyup="return nationalityUpperFirst(this.value)"/></td>
</tr>
<tr>

<tr>
  <td align="right">Contact No</td>
    <td><input type="text" name="contact_no"  AUTOCOMPLETE="OFF" size="25" tabindex="4" onKeyPress="return isNumberKey(event)"/></td>
</tr>

<tr>
  <td align="right">E-mail</td>
  <td ><input type="text" name="email" id="email" size="25" tabindex="18" > </td>
 <td>&nbsp;</td>
</tr>
<td align="right">Address</td>
<td><textarea name="address" id="address" style="width:250px;" tabindex="7" onkeyup="return addressUpperFirst(this.value)" > </textarea> </td>
</tr>
<tr>
  <td align="right">District</td>
    <td><input type="text" name="district" id="district"   size="25" onkeyup="return districtUpperFirst(this.value)" tabindex="8"/></td>
</tr>
<tr>
  <td align="right">State</td>
    <td><input type="text" name="state" id="state"  size="25" onkeyup="return stateUpperFirst(this.value)" tabindex="9"/></td>
</tr>
<tr>
  <td align="right">Pin No</td>
    <td><input type="text" name="pin_no"  size="25" tabindex="10" onKeyPress="return isNumberKey(event)"/></td>
</tr>
<tr>
  <td align="right">Pan No</td>
    <td><input type="text" name="pan_no" onKeyPress="return isNumberKey(event)"/></td>
</tr>


<tr>
  <td align="right">Nominee Name</td>
  <td ><input type="text" name="nominee_name" id="nominee_name" onkeyup="return nomineeNameUpperFirst(this.value)" > </td>
 <td>&nbsp;</td>
</tr>


<tr>
  <td align="right">Nominee_relation</td>
  <td ><input type="text" name="nominee_relation" id="nominee_relation" onkeyup="return nomineeRelationUpperFirst(this.value)"> </td>
 <td>&nbsp;</td>
</tr>

<tr>
  <td align="right">Bank Name</td>
  <td ><input type="text" name="bank_name" id="bank_name" size="25" tabindex="17"  > </td>
 <td>&nbsp;</td>
</tr>
<tr>
  <td align="right">Account No</td>
  <td ><input type="text" name="acc_no" id="acc_no" size="25" tabindex="17"  > </td>
 <td>&nbsp;</td>
</tr>
<tr>
  <td align="right" ><input type="submit" name="submit" value="SUBMIT"  onclick="return check(this.value);" tabindex="20" class="button" /></td>
    <td align="right"> <input type="reset" value="RESET" tabindex="17" class="button"/></td>
</tr>

</table>
</form>	
												</div>
	
			
</body>
</html>

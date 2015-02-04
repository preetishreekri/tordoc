function allLetter(inputtxt)  
  {  
 var letters = /^[A-Za-z ]+$/;  
   if(inputtxt.value.match(letters))  
     {  
     return true;  
     }  
   else  
     { 
     alert("Enter only Alphabet Characters...");
     return false;  
     }  
  }
  
   function IsNumeric(e)
 {
            var keyCode = e.which ? e.which : e.keyCode
            var ret = ((keyCode >= 48 && keyCode <= 57) || (keyCode==46) || (keyCode==8) || (keyCode==190));
            if(ret)
            return true;
            else
            alert('Only numeric value accepted');
            return false;
          
        }
        
function validateEmail(emailField){
        var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

        if (reg.test(emailField.value) == false) 
        {
            alert('Invalid Email Address');
            return false;
        }

        return true;

}
$(function(){
$('#check').click(function() {
           alert(1);
    if( $('#check:checked').length > 0 ) {
           alert(2);
     
        
        $('#building_correspondence').val($('#building_permanent').val());
        $('#street_correspondence').val($('#street_permanent').val());
        $('#landmark_correspondence').val($('#landmark_permanent').val());
        $('#area_correspondence').val($('#area_permanent').val());
        $('#pin_correspondence').val($('#pin_permanent').val());
        $('#city_correspondence').val($('#city_permanent').val());
        $('#state_correspondence').val($('#state_permanent').val());
        $('#country_correspondence').val($('#country_permanent').val());
        
        
    }
    else{
           alert(3);
        
        $('#building_correspondence').val('');
        $('#street_correspondence').val('');
        $('#landmark_correspondence').val('');
        $('#area_correspondence').val('');
        $('#pin_correspondence').val('');
        $('#city_correspondence').val('');
        $('#state_correspondence').val('');
        $('#country_correspondence').val('');
        
    }
    
    
});
});
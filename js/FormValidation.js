
/* arrey thats validats the form  list of 19 :
index 0 to 18
0: first name.1: middle name,2: second name, 3:date of birth, 4: email. 5:comfirmed email. 6: parent first name, 7: parent middle name, 8: parent second name,
9: parent phone, 10:parent email, 11 : emergency contact first name, 12:  emergency contact middle name, 13: emergency contact second name,
14: emergency contact phone, 15: emergency contact email.
*/

var allOk = [false, false, false, true, false, false, false, false, false, false, false];
/* */






$(document).ready(function() {
	
	
	$("#register").hide();
	$("#register").show(2000);
	$("#register").submit(function(){
		$("#beforSubmit").empty();
		var res=true;
		var i =0;
		$("#beforSubmit").hide("slow");
	while (i < allOk.length && res===true) {
		
		if (allOk[i]===false){
			
			$("#beforSubmit").append('Please make sure all fields are correct!'+allOk[i]+i);
			allOk[i]
				res=false;
		}
        i++;
    }		$("#beforSubmit").show("slow");
		return res;
 
});
	
	/* check first name */
    $("#firstName").change(function(){
		
        var letters = /^[A-Za-z]+$/;
      if(letters.test($("#firstName").val())&&($("#firstName").val().length<15))
      {
    
		 $("#validFirstName").empty();
		  allOk[0]=true;
      }
      else
      { 
		  allOk[0]=false;
		  $("#validFirstName").empty();
       $("#validFirstName").append('Please enter  valid name!');
	   
	  }
      });	
	/* check middleName*/
    $("#middleName").change(function(){
		
        var letters = /^[A-Za-z]+$/;
      if(letters.test($("#middleName").val())&&($("#middleName").val().length<15))
      {
    
		 $("#validMiddleName").empty();
		  
      allOk[1]=true;
      }
      else
      { 
		  allOk[1]=false;
		  
		  $("#validMiddleName").empty();
       $("#validMiddleName").append('Please enter  valid middle name!');
	  }
      });
	/* check secondName*/
	$("#secondName").change(function(){
		
        var letters = /^[A-Za-z]+$/;
      if(letters.test($("#secondName").val())&&($("#secondName").val().length<15))
      {
    
		 $("#validSecondName").empty();
        
      allOk[2]=true;
      }
      else
      { 
		  allOk[2]=false;
		  $("#validSecondName").empty();
       $("#validSecondName").append('Please enter  valid Second name!');
	  }
      });
	
	$('#dateOfBirth').datepicker({
      dateFormat: 'yy-m-d',
    inline: true,
    onSelect: function(dateText, inst) { 	  
		  var date = $(this).datepicker('getDate'),              
            year =  date.getFullYear();
		  	if (year>2001&&year<2016 ){

			   $("#validDateOfBirth").empty();
			  
      allOk[4]=true;
      }
      else
      { 
		  
		  $("#validDateOfBirth").empty();
			   $("#validDateOfBirth").append('Sorry! we only accept students aged between 5-18 years old.');
			  }
			  
		  
            
     } 
    });
	
	
	$("#specifyOther").hide();
	$("#disability").change(function(){
		var disablity= $(this).children("option:selected").val();
		
		if (disablity==="other"){
		$("#specifyOther").show("slow");
		}
		else{
			
			$("#specifyOther").hide("slow");
		}
	})
	
	$("#email").change(function(){
		
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (regex.test($("#email").val())){
			
		 $("#validEmail").empty();
        
      allOk[4]=true;
      }
      else
      { 
		  allOk[4]=false;
		  
	   $("#validEmail").empty();
       $("#validEmail").append('Please enter valid Email!');
	  }
	});
	
	$("#comfirmemail").change(function(){
		
		
		if ($("#comfirmemail").val()===$("#email").val()){
			
		 $("#validComfirmedemail").empty();
       
      allOk[5]=true;
      }
      else
      { 
		  allOk[5]=false;
		  
	   $("#validComfirmedemail").empty();
       $("#validComfirmedemail").append('invalid!');
	  }
	});
	
	$("#password").change(function(){
		var password=$("#password").val();
		var containUpperCase=/[A-Z]/g.test(password);
		var containLowerCase=/[a-z]/g.test(password);
		var containNumber=/[0-9]/g.test(password);
		var length=password.length>7;
		if (containUpperCase &&containLowerCase&& containNumber&& length) {
			
		 $("#validPassword").empty();
        
      allOk[6]=true;
      }
      else
      { 
		  allOk[6]=false;
		  
		  
	   $("#validPassword").empty();
       $("#validPassword").append('Invalid password, please follow the rules below:');
	  }
	});
	
	$("#comfirmPassword").change(function(){
		
		
		if ($("#comfirmPassword").val()===$("#password").val()){
			
		 $("#validComfirmedPassword").empty();
        
      allOk[7]=true;
      }
      else
      { 
		  allOk[7]=false;
		  
	   $("#validComfirmedPassword").empty();
       $("#validComfirmedPassword").append('invalid!');
	  }
	});
	/* check first name */
    $("#pfirstName").change(function(){
		
        var letters = /^[A-Za-z]+$/;
      if(letters.test($("#pfirstName").val())&&($("#pfirstName").val().length<15))
      {
    
		 $("#validpFirstName").empty();
        
      allOk[8]=true;
      }
      else
      { 
		  allOk[8]=false;
		  
       $("#validpFirstName").append('Please enter  valid name!');
	  }
      });		
	/* check middleName*/
    $("#pmiddleName").change(function(){
		
        var letters = /^[A-Za-z]+$/;
      if(letters.test($("#pmiddleName").val())&&($("#pmiddleName").val().length<15))
      {
    
		 $("#validpmiddleName").empty();
       
      allOk[9]=true;
      }
      else
      { 
		  allOk[9]=false;
		  
       $("#validpmiddleName").append('Please enter  valid middle name!');
	  }
      });	
	/* check secondName*/
	$("#pLastName").change(function(){
		
        var letters = /^[A-Za-z]+$/;
      if(letters.test($("#pLastName").val())&&($("#pLastName").val().length<15))
      {
    
		 $("#validpLastName").empty();
        
      allOk[10]=true;
      }
      else
      { 
		  allOk[10]=false;
		  
       $("#validpLastName").append('Please enter  valid middle name!');
	  }
      });

	$("#parentPhone").change(function(){
		var number= $("#parentPhone").val();
      var containOnlyNumber=/[0-9]/g.test(number);;
      if(containOnlyNumber)
      {
    
		 $("#validparentPhone").empty();
        
      allOk[11]=true;
      }
      else
      { 
		  allOk[11]=false;
		  
       $("#validparentPhone").append('Please enter a valid Phone number!');
	  }
      });
	
	$("#pEmail").change(function(){
		
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (regex.test($("#pEmail").val())){
			
		 $("#validpEmail").empty();
        
      allOk[12]=true;
      }
      else
      { 
		  allOk[12]=false;
		  
	   $("#validpEmail").empty();
       $("#validpEmail").append('Please enter valid Email!');
	  }
	});
	
	$("#eFirstName").change(function(){
		
        var letters = /^[A-Za-z]+$/;
      if(letters.test($("#eFirstName").val())&&($("#eFirstName").val().length<15))
      {
    
		 $("#valideFirstName").empty();
        
      
      }
      else
      { 
		  
		  
       $("#valideFirstName").append('Please enter  valid name!');
	  }
      });	
	/* check middleName*/
    $("#eMiddleName").change(function(){
		
        var letters = /^[A-Za-z]+$/;
      if(letters.test($("#eMiddleName").val())&&($("#emiddleName").val().length<15))
      {
    
		 $("#valideMiddleName").empty();
        
      
      }
      else
      { 
		  
		  
       $("#valideMiddleName").append('Please enter  valid middle name!');
	  }
      });	
	/* check secondName*/
	$("#eLastName").change(function(){
		
        var letters = /^[A-Za-z]+$/;
      if(letters.test($("#eLastName").val())&&($("#eLastName").val().length<15))
      {
    
		 $("#valideLastName").empty();
        
      
      }
      else
      { 
		  
		  
       $("#valideLastName").append('Please enter  valid middle name!');
	  }
      });

	$("#ePhoneNbr").change(function(){
		var number= $("#ePhoneNbr").val();
      var containOnlyNumber=/[0-9]/g.test(number);;
      if(containOnlyNumber)
      {
    
		 $("#validePhoneNbr").empty();
        
      
      }
      else
      { 
		 
		  
       $("#validePhoneNbr").append('Please enter a valid Phone number!');
	  }
      });
	
	$("#eEmail").change(function(){
		
		var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (regex.test($("#eEmail").val())){
			
		 $("#valideEmail").empty();
        
      
      }
      else
      { 
		  
		  
	   $("#valideEmail").empty();
       $("#valideEmail").append('Please enter valid Email!');
	  }
	});
	
});








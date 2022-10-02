
function validateForm (){
    let a = document.getElementById("name").value;
    let b = document.getElementById("pass").value;
    let c = document.getElementById("cpass").value;
    let d = document.getElementById("mail").value;
    let e = document.getElementById("phone").value;
    let f = document.getElementById("dob").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(d);
    // let g = document.getElementById("m").value;
    // let h = document.getElementById("fe").value;
    // let i = document.getElementById("o").value;
    
    if(a=="" || b=="" || c=="" || d=="" || e=="" || f==""){

      document.getElementById("show").innerHTML = "PLEASE FILL UP ALL THE INFORMATION" ;
      return false;
    }else{
      // Capital letter password validation  

      var upchar = /[A-Z]/g;

      if(!b.match(upchar)) {  

          document.getElementById("inshow").innerHTML = "BE SURE YOU PUT AT LEAST A CAPITAL LETTER IN YOUR PASSWORD";  
          return false; 

        }

    // lOWERCASE letter password validation  

      var lowchar = /[a-z]/g;

      if(!b.match(lowchar)) {  

          document.getElementById("inshow").innerHTML = "BE SURE YOU PUT AT LEAST A LOWERCASE LETTER IN YOUR PASSWORD";  
          return false; 

         }

      //minimum password length validation  
       if(b.length < 5) {  
        document.getElementById("show").innerHTML = "PASSWORD LENGTH MUST BE IN 5 CHARACTERS";  
        return false;  
        }  

      //maximum length of password validation  
      if(b.length > 10) {  
      document.getElementById("show").innerHTML = "PASSWORD LENGTH MUST NOT EXCEED 10 CHARACTERS";  
      return false;  
     }

     // Confirm password check validation
     if(c != b) {  
      document.getElementById("show").innerHTML = "PASSWORD DOESN'T MATCH";  
      return false;  
     }

     

     //Phone number validation
     if(e.match(lowchar) || e.match(upchar) || !is_numeric(e)) { 


      document.getElementById("inshow").innerHTML = "PUT ONLY NUMERIC VALUE IN PHONE NUMBER";  
      return false; 

    }

    //Email validation 

    if(!res)
    {
     document.getElementById("show").innerHTML="*Email format is not correct";
    return false; 
      }


     
    else {  
      document.getElementById("show").innerHTML = "SUBMITTED SUCCESSFULLY, WAIT A MOMENT" ;
        return true;              
       }  


      }

        

      
      
    }


<?php
require_once('../model/db.php');
require_once('../model/adminModel.php');
$errors=[];
$name='';
$phone='';
$email='';
$gender='';




if($_SERVER['REQUEST_METHOD']=='POST')
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];



if(!$name){
    $errors[]='Enter Name ';
}

if(!$phone){
    $errors[]='Enter  Phone Number ';
}
if(!$email){
    $errors[]='Enter email ';
}
if(!$gender){
    $errors[]='Enter gender ';
}



if(empty($errors)){
    $sql = "INSERT INTO moderator_list (name, phone, email, gender)
    VALUES ('". $name."','". $phone."', '". $email ."', '". $gender ."')";
    if (mysqli_query($conn, $sql)) {
    echo "Moderator added successfully";
    } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
}

?>
<!DOCTYPE html>
 
 <head>
     <title>Add moderator</title>
 </head>
  
 <body align="center">
<form action="" method="post" onsubmit="return validateForm()">
    <fieldset>
        
        
        
        <h3>Promote to Moderator</h3> 
        <table border="2" align="center">
        <tr>
            <td>
        
           
                <label><b> Name:</b></label><br>
              
                 <input type="text" name="name" id="name" >
                
            </td>
           
      
     
        </tr>
        <tr>
            <td>
        
           
                <label><b> Phone:</b></label><br>
              
                 <input type="text" name="phone" id="phone" >
                
            </td>
           
      
     
        </tr>
        <tr>
            <td>
        
           
                <label><b> Email:</b></label><br>
              
                 <input type="text" name="email" id="email">
                
            </td>
           
      
     
        </tr>
        <tr>
            <td>
        
           
                <label><b> Gender:</b></label><br>
              
                <input id= "m" type="radio" name="gender" value="Male" /> Male 
                <input id= "f" type="radio" name="gender" value="Female" /> Female
                
            </td>
           
      
     
        </tr>
        
 
 
        
         </table>
         <input type="submit"  name="submit" value="Submit">
         <a href=" adminP.php">Back</a>
         </form>
         <script>
            function validateForm (){
            let a = document.getElementById("name").value;
            let b = document.getElementById("phone").value;
            let c = document.getElementById("email").value;
            var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
            var res = patt.test(c);
            

    
           if(a=="" || b=="" || c==""  ){

              document.getElementById("show").innerHTML = "PLEASE FILL UP ALL THE INFORMATION" ;
             return false;

             }else
             {


                var upchar = /[A-Z]/g;
                var lowchar = /[a-z]/g;
     

                      //Phone number validation
                    if(b.match(lowchar) || b.match(upchar) || !is_numeric(b)) { 


                      document.getElementById("show").innerHTML = "PUT ONLY NUMERIC VALUE IN PHONE NUMBER";  
                      return false; 

                         }
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
         </script>
         
     </body>
     </html>
  
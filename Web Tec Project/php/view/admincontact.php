<?php
require_once('../model/db.php');
$errors=[];
$name='';
$email='';
$text='';



if($_SERVER['REQUEST_METHOD']=='POST')
{
$name=$_POST['name'];
$email=$_POST['email'];
$text=$_POST['text'];




if(!$name){
    $errors[]='Enter Name ';
}

if(!$email){
    $errors[]='Enter  Email ';
}
if(!$text){
    $errors[]='Write your message ';
}



if(empty($errors)){
    $sql = "INSERT INTO contact_ad (name, email, Message)
    VALUES ('". $name."','". $email."', '". $text ."')";
    if (mysqli_query($conn, $sql)) {
    echo "Your Message Sent Successfully";
    } else {
    echo "Error Sending message: " . $sql . "" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
}
?>

<!DOCTYPE html>
<head>
    <title>Contact </title>
</head>

<body align="center">
<p id="show"></p>
<link rel="stylesheet" href="../asset/style.css">

<div class="rong">

    <div >
    <h3 >Contact </h3>

    <form  method="post" action="" onsubmit= "return validateForm()">
        
        <div >
            <label ><b> Name</b></label>
            <div >
                <input type="text" id="name" name="name" class="fcf-form-control" >
            </div>
        </div>

        <div >
            <label  ><b>Email address</b></label>
            <div>
                <input type="text" id="email" name="email"  >
            </div>
        </div>

        <div >
            <label  ><b>Your message</b></label>
            <div >
                <textarea id="Message" name="text"  rows="6" maxlength="3000" required></textarea>
            </div>
        </div>

        <div >
            <button type="submit">Send Message</button>
            <button type="reset">Reset </button>
        </div>
        <br><br>

        

    </form>


    <a href="adminmsg.php"><button>Your Sent Messages</button><br><br>

 

    </div>
    <script>
        
function validateForm (){
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
  
    // let g = document.getElementById("m").value;
    // let h = document.getElementById("fe").value;
    // let i = document.getElementById("o").value;
    
    if(name=="" ){

      document.getElementById("show").innerHTML = "Please write your name" ;
      return false;
    }
    if(email=="" ){

      document.getElementById("show").innerHTML = "Please write your email" ;
      return false;
    }
    


      else {  
      document.getElementById("show").innerHTML = "SUBMITTED SUCCESSFULLY, WAIT A MOMENT" ;
        return true;              
       }  


      }

        

      
      
    


    </script>


</div>
<a href="adminP.php"><button>Back</button>
<a href=""><button>Moderators Message</button>
<a href=""><button>Customers Message</button>
</body>
</html>
<?php

require_once("../model/db.php");
require_once("../model/adminModel.php");

error_reporting(0);

$id = $_GET['id'];
$nm = $_GET['nm'];
$phn = $_GET['phn'];
$em = $_GET['em'];
$gn = $_GET['gn'];

?>
<!DOCTYPE html>
 
 <head>
     <title>Edit moderator</title>
 </head>
  
 <body align="center">
<form action="editmoderatorchk.php" method="get">
    <fieldset>
        
        
        
        <h3>Edit Moderator</h3> 
        <table border="2" align="center">
        <tr>
            <td>
        
           
                <label><b> ID:</b></label><br>
              
                 <input type="text" name="id" value="<?php echo "$id"?>">
                
            </td>
</tr>
<tr>
            <td>
        
           
                <label><b> Name:</b></label><br>
              
                 <input type="text" name="name" value="<?php echo "$nm"?>">
                
            </td>
           
      
     
        </tr>
        <tr>
            <td>
        
           
                <label><b> Phone:</b></label><br>
              
                 <input type="text" name="phone" value="<?php echo "$phn"?>" >
                
            </td>
           
      
     
        </tr>
        <tr>
            <td>
        
           
                <label><b> Email:</b></label><br>
              
                 <input type="text" name="email" value="<?php echo "$em"?>" >
                
            </td>
           
      
     
        </tr>
        <tr>
            <td>
        
           
                <label><b> Gender:</b></label><br>
              
                <input id= "m" type="text" name="gender" value="<?php echo "$gn"?>" >
                
            </td>
           
      
     
        </tr>
        
 
 
        
         </table>

         <input type="submit"  name="submit" value="submit">
         <a href=" ../view/showmoderator.php">Back</a>
         </form>
         
     </body>
     </html>


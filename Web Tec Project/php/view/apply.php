<!DOCTYPE html>
<html >
  <head>
  
    <title>Apply here</title>
    <link rel="stylesheet" href="../asset/style.css">

  </head>

  <body align="center" class="backrong" >
  
  <div class="rong" >
    <form class="" action="../controller/applychk.php" method="post" autocomplete="off" enctype="multipart/form-data" onsubmit="return validateForm()">
    <h3 id="head">Apply Here</h3> <br><br>
        <table border="1" align="center">
    
         <tr>
             <td> 
               
             <labeL>Your application for:</label> 
			 </td>
			 <td>
             <input id= "m" type="radio" name="type" value="Admin" /> Admin
             <input id= "m" type="radio" name="type" value="Moderator" /> Moderator
             <input id="fe" type="radio" name="type" value="Seller" /> Sell
             </td>					 
                    
                     
               
            
         
     </tr>
         <tr>
             <td> 
               
             <labeL>Your Name:</label> 
			 </td>
			 <td>
                     <input type="text" id="name" name="name" placeholder="Enter name"> 
             </td>					 
                    
                     
               
            
         
     </tr>

 <tr>
     <td> 
       
             <labeL>Your Phone Number:</label> 
    </td>
     <td>	
             <input type="text" id="phone" name="phone" placeholder="Enter phone number">  
	</td>	 
            
            
       
    
 
 </tr>
 <tr>
     <td> 
       
             <labeL>Your Email:</label> 
     </td>
	 <td>
	 
             <input type="email" id="email" name="email" placeholder="Enter email address">  
	</td>		 
            
 </tr>
 <tr>
         <td> 
       
             <labeL for="image" >Your formal picture:</label> 
         </td>
         <td>
	  
             <input type="file" name="image" id = "image" accept=".jpg, .jpeg, .png" > 
             <input type="button" name="click" id = "click"  value="Check required extension" onclick="ajax()"> 

        </td>	
</tr>		
<tr>        
            <td>

             <labeL for="name">Your skills</label>  
			 </td>
			 <td>
             <input type="text" name="skill" id="skill" placeholder="No skill required for seller"> 
             </td>			 

       
       
     
 
 </tr>
 
 </tr>
 <tr>
     <td> 
       
             <label>National ID:</label> 
			 </td>
			 <td>
             <input type="text" id="nid" name="nid" placeholder="Enter national id number">  
             </td>			 
            
     </td>
 
 </tr>
 <tr>
     <td> 
       
             <label>Nationality:</label> 
			 </td>
			 <td>
             <input type="text" id="nationality" name= "nationality" placeholder="Enter your country name"> 
			 </td>
</tr>

        
         </table>
        
         <input type="submit"  name="submit" value="Submit">
         <input type="reset"  name="reset" value="Reset">
         <a href="market.php">Back</a>
    </form>
</div>

    <p id="show"></p>
    <br>
   
  </body>
</html>
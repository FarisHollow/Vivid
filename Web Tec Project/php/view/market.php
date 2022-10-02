<?php 
session_start();
if(isset($_SESSION['status'])){
	require_once("../model/db.php");
	require_once("../model/adminModel.php");	
	

?>



<html>
<head>
	<title>Market</title>
	<link rel="stylesheet" href="../asset/style.css">
</head>
<body align="center">

    
<div class="nav">	<!-- Start Header -->
<table border="0" width="100%" cellpadding="3" cellspacing="3">
	<tr>
		 <td>
			 <table border="0" width="85%" cellpadding="15%" cellspacing="0" align="center">
			 <tr>
					<td>
						  
					<h1><strong><i>Vivid</i></strong></h1>
					  
					</td>

					<td width="70%">&nbsp;</td>

					
			
					
					<td>
						
					    <a href="apply.php"> Apply here</a>
					
					</td>
					<td>
						
					    <a href="../controller/logout.php"> Logout-></a>
					
					</td>
			 </tr>
			 </table>
		 </td>
	</tr>
  </table>
		</div>
  <!-- End Header -->

  <!-- Start Body -->
 
	
			 
			
					
						 <h1 align="center"  >
							
						 <div class= rong id = "Name"> Welcome to the Market place of <i>Vivid</i></div>
						
						</h1>
                    
						<h3 align="center"><div class = "central">
                                  <button type = "button" onclick = "loadJSON()">Show More Details </button>
                                        </div>
						</h3>
					
					
						
					   
					
			
		 
		  <table border="2" width="30%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Admin: </td>
			    
				<td>
					<a href="adminpinin.php"><input type="Button" name="" value="Enter"></a>
				</td>
			</tr>
		  </table>
		  <table border="2" width="20%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Moderator:</td>
			    
				<td>
					<a href=""><input type="Button" name="" value="Enter"></a>
				</td>
			</tr>
		  </table>
		  <table border="1" width="10%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Buy:</td>
			    
				<td>
					<a href=""><input type="Button" name="" value="Enter"></a>
				</td>
			</tr>
		  </table>
		  <table border="1" width="10%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Sell:</td>
			    
				<td>
					<a href=""><input type="Button" name="" value="Enter"></a>
				</td>
			</tr>
		  </table>
		 
				<a href="main.php"> <input type="button" name="button" value="Back to Main Menu"></a>

				<div id = "Country"><b><p></p></b></div>
				<div id = "Employ"><b><p></p></b></div>
		 
  
   <!----End Body---->
		

</body>
</html>
<script type = "application/javascript">
         function loadJSON() {
            var data_file = "http://localhost/php/controller/data.json";
            var http_request = new XMLHttpRequest();
            try{
          
               http_request = new XMLHttpRequest();
            }catch (e) {
              
               try{
                  http_request = new ActiveXObject("Msxml2.XMLHTTP");
					
               }catch (e) {
				
                  try{
                     http_request = new ActiveXObject("Microsoft.XMLHTTP");
                  }catch (e) {
                   
                     alert("Your browser broke!");
                     return false;
                  }
					
               }
            }
			
            http_request.onreadystatechange = function() {
			
               if (http_request.readyState == 4  ) {
                  var jsonObj = JSON.parse(http_request.responseText);

                  
                  document.getElementById("Name").innerHTML = jsonObj.name;
                  document.getElementById("Country").innerHTML = jsonObj.country;
                  document.getElementById("Employ").innerHTML = jsonObj.Employ;
               }
            }
			
            http_request.open("GET", data_file, true);
            http_request.send();
         }
		
      </script>


<?php 
	}else{
		echo "invalid request";
	}  
?>
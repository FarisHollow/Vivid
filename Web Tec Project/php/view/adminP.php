<?php 
session_start();
if(isset($_SESSION['status'])){
	require_once("../model/db.php");
	require_once("../model/adminModel.php");
	



	

	
	
	
	

?>

<!-- <!DOCTYPE html>
<html>
<head>
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>This is the index page</h1>

	<br>
	Hello, 
</body>
</html> -->


<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="../asset/style.css">
</head>
<body>

    
<div class="nav">	<!-- Start Header -->
<table border="0" width="100%" cellpadding="3" cellspacing="3">
	<tr>
		             <td >
						  
						  <a href="market.php"><-Leave </a>
						
					  </td>
		 <td>
			<div class="nav">
			 <table border="0" width="85%" cellpadding="15%" cellspacing="0" align="center">
			 <tr>
						  
						
					
					<td>
						  
						<h1><strong><i>Vivid</strong></i></h1>
					  
					</td>

					<td width="38%">&nbsp;</td>

					
					<td>
           	   	  
           	          <a href="admincontact.php"> Contact </a>
           	    
           	        </td>
					   <td>
           	   	  
					   <a href="addmember.php">Add Moderator</a>
				  
					  </td>

					   <td>
           	   	  
						<a href="applyreq.php"> Applied Requests </a>
				  
					  </td>
			
					<td>
						
					    <a href="../controller/logout.php"> Logout-></a>
					
					</td>
			 </tr>
			 </table>
</div>
		 </td>
	</tr>
  </table>
		</div>
  <!-- End Header -->

  <!-- Start Body -->
 
	
			 
			
					
						 <h1 align="center"  >
							
							 Welcome Back <marquee scrollamount="5"> Admin </marquee>
						
						</h1>
                    
						<h2 align="center">To Admin panel</h2>
					
					
						
					   
					
			
		  <table border="2" width="20%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>View Moderators:</td>
			    
				<td>
					<a href="showmoderator.php"><input type="Button" name="" value="Enter"></a>
				</td>
			</tr>
		  </table>
		  <table border="1" width="15%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
				<td>Manage Vivid Users:</td>
			    
				<td>
					<a href="manageusers.php"><input type="Button" name="" value="Enter"></a>
				</td>
			</tr>
		  </table>
		  <table border="0" width="10%" cellpadding="15" cellspacing="0" align="center">
			<tr>
			
			
			    
				<td>
				<a href="main.php"> <input type="button" name="button" value="Back to Main Menu"></a>
				</td>
			</tr>
		  </table>
		 
  
   <!----End Body---->
		

</body>
</html>


<?php 
	}else{
		echo "invalid request";
	}  
?>
<?php 
	session_start();
	if(isset($_SESSION['status'])){

		require_once("../model/db.php");
	    require_once("../model/adminModel.php");
	$errors=[];
    $text='';



if($_SERVER['REQUEST_METHOD']=='POST')
{

$text=$_POST['text'];





if(!$text){
    $errors[]='Write your message ';
}



if(empty($errors)){
    $sql = "INSERT INTO feed (text) VALUES ( '". $text ."')";
    if (mysqli_query($conn, $sql)) {
        echo "Posted successfully";
        sleep(2);
        header("location: main.php" );
    

    } else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
    }

    
}
}
		
?>

<!DOCTYPE html>
<html>
<head>
	<title>VIVID</title>
	<link rel="stylesheet" href="../asset/style.css">
	
</head>
<body >

    
<div class=nav>	<!-- Start Header -->
<table border="0" width="100%" cellpadding="3" cellspacing="3">
	<tr>
		 <td>
			 <table border="0" width="85%" cellpadding="15%" cellspacing="0" align="center">
			 <tr>
					<td>
						  
						<h1><strong><i>Vivid</i></strong></h1>
					  
					</td>

					<td width="50%">&nbsp;</td>

			
					<td>
						
					    <a href="market.php"> Market place</a>
					
					</td>
					<td>
						
					    <a href="discofd.php"> Discover Friends</a>
					
					</td>
					<td>
						
					    <a href=""> About us</a>
					
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
 
  
			 
			<h2 >WELCOME <?php echo $_SESSION['user_name'];?></h2>

<form  method="post" action="" >

			<label ><b>Write Here</b></label>
		<div >
			<textarea placeholder="WHAT'S IN YOUR MIND" id="text" name="text" rows="7"  maxlength="3000"  autofocus></textarea><br>
		</div>


	<div>
		<button type="submit" onclick="return checkpost()" >Post</button>
	</div>
	<br><br>

	

</form>

	<p id="show"></p>

</body>

<?php

$sql = "SELECT * FROM feed order by id desc";
$result = mysqli_query($conn,$sql);
mysqli_close($conn);

?>

<body align="center" >
        <h2> My Posts</h2>


    <div class=rong>
        
        <table border="" align="center" cellspacing= 5 cellpadding=10>
            <thead >
               
                <th> Posts </th>
                <th> Posted Time</th>
                <th> Edit Post</th>
                <th> Delete Post</th>
               
            </thead>
            <tbody>
        
			<?php if(mysqli_num_rows($result)>0){
    
        

        
    while($take=mysqli_fetch_assoc($result))
    {
      echo "
          <tr>
    
             <td>".  $take['text'] . "</td>
             <td>".  $take['date'] ." </td>
             <td><a href='../controller/editpost.php?id=$take[id] & txt=$take[text]' ><input type='submit' value='Edit'></td>
             <td><a href='../controller/delpost.php?id=$take[id]' onclick=' return deletechk()'><input type='submit'  value='Delete' ></td>
          </tr>
    ";
    }
  }
  else
  {
      echo "No Rec Found";
  }
?>


  </tbody>
        </table>
		<script>
	
   
    function checkpost(){
		let a = document.getElementById("text").value;
		if(a==''){
			document.getElementById("show").innerHTML = "Box is empty, write something to post!" ;
			return false;

		}else{
			document.getElementById("show").innerHTML = "Posted Successfully" ;
			return true;

			
		}
	}



	</script>
        
    </body>


</html>
					
					
						
					   
					
			
		 
		 
					
				
		 

<?php 
	}else{
		echo "invalid request";
	}  
?>

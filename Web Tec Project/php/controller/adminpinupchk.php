<?php 
session_start();

require_once("../model/db.php");
require_once("../model/adminModel.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		
		$email = $_POST['email'];
		$pin1 = $_POST['a'];
		$pin2 = $_POST['b'];
        $pin3 = $_POST['c'];
        $pin4 = $_POST['d'];
		
		

	// 	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	// 	{

	// 		//save to database
	// 		// $user_id = random_num(20);
			
	// 		$query = "insert into users (user_name,password, email, phone, dob, gender ) values ('$user_name','$password', '$email', '$phone', '$dob', '$gender')";

	// 		mysqli_query($con, $query);

	// 		header("Location: ../view/adminlogin.html");
	// 		die;
	// 	}
	// 	else
	// 	{
	// 		echo "Please enter some valid information!";
	// 	}
	// }

	if($pin4 == null || $pin3 == null || $pin2 == null || $pin1 == null || $email == null){
		echo "Please Fill Up All The Info";
	}
	elseif(!empty($email) && !empty($pin1) && !empty($pin2) && !empty($pin3) && !empty($pin4)){
		$query = "insert into admin (email, pin1, pin2, pin3, pin4 ) values ('$email', '$pin1', '$pin2', '$pin3', '$pin4')";
        $status = signupin($email, $pin1, $pin2, $pin3, $pin4);
		// $src = $_FILES['myfile']['tmp_name'];
        // $des = "file/".$_FILES['myfile']['name'];
		// move_uploaded_file($src, $des);
		// mysqli_query($con, $query);
		if($status){
			$_SESSION['status'] = true;
            setcookie('status', 'true', time()+3600, '/');
			sleep( 2 );
			header("Location: ../view/adminpinin.php");
			// echo "Account Created Successfully";


		}
		else 
		{
			echo "Something went wrong!";

		}	
				
		
	}
	else 
		{
			echo "Enter Valid Info!";

		}	
	
		}
?>
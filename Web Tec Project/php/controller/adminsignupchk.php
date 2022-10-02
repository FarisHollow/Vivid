<?php 
session_start();

require_once("../model/db.php");
require_once("../model/adminModel.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$gender = $_POST['gender'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phnNum'];
		$dob = $_POST['DOB'];
		
		$cPassword = $_POST['cPassword'];

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

	if($password == null || $user_name == null || $phone == null || $dob == null || $gender == null || $email == null){
		echo "Please Fill Up All The Forms";
	}elseif ($password != $cPassword) {
		echo "Password Doesn't Match";
	}
	elseif(!empty($user_name) && !empty($password) && !is_numeric($user_name)){
		$query = "insert into users (user_name,password, email, phone, dob, gender ) values ('$user_name','$password', '$email', '$phone', '$dob', '$gender')";
        $status = signup($user_name,$password, $email, $phone, $dob, $gender);
		// $src = $_FILES['myfile']['tmp_name'];
        // $des = "file/".$_FILES['myfile']['name'];
		// move_uploaded_file($src, $des);
		// mysqli_query($con, $query);
		if($status){
			$_SESSION['status'] = true;
            setcookie('status', 'true', time()+3600, '/');
			sleep( 2 );
			header("Location: ../view/adminlogin.html");
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
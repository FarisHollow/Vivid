<?php 

session_start();

require_once("../model/db.php");
require_once("../model/adminModel.php");

$user_name = $_POST['user_name'];
$password = $_POST['password'];
	// if($_SERVER['REQUEST_METHOD'] == "POST")
	// {
	// 	//something was posted
	// 	$user_name = $_POST['user_name'];
	// 	$password = $_POST['password'];

	// 	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	// 	{

	// 		//read from database
	// 		$query = "select * from users where user_name = '$user_name' limit 1";
	// 		$result = mysqli_query($con, $query);

	// 		if($result)
	// 		{
	// 			if($result && mysqli_num_rows($result) > 0)
	// 			{

	// 				$user_data = mysqli_fetch_assoc($result);
					
	// 				if($user_data['password'] === $password)
	// 				{


    //                     setcookie('status', 'true', time()+3600, '/');
	// 					$_SESSION['user_name'] = $user_data['user_name'];

	// 				}
	// 			}
	// 		}
			
	// 		echo "wrong username or password!";
	// 	}else
	// 	{
	// 		echo "wrong username or password!";
	// 	}
	// }


	//echo $username;

	if($user_name == null || $password == null){
		echo "Please fill up the box's";
	}else{

		$status = login($user_name, $password);

		if($status){
			$_SESSION['status'] = true;
			setcookie('status', 'true', time()+3600, '/');
			sleep(2);
			$_SESSION['user_name']=$user_name ;
			header('location: ../view/main.php');
		}else{
			echo "Invalid user";
		}
	
		
	}

?>
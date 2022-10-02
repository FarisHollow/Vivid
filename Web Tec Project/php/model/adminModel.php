<?php


require_once "db.php";

    function login($user_name, $password){
        $conn = getConnection();
		$sql = "select * from users where user_name='{$user_name}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }

}

    function signup($user_name,$password, $email, $phone, $dob, $gender){
        $conn = getConnection();
		$sql = "insert into users (user_name,password, email, phone, dob, gender ) values ('$user_name','$password', '$email', '$phone', '$dob', '$gender')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

function loginpin($email, $pin1, $pin2, $pin3, $pin4){
        $conn = getConnection();
		$sql = "select * from admin where email='{$email}' and pin1='{$pin1}' and pin2='{$pin2}'and pin3='{$pin3}' and pin4='{$pin4}'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

        if($count >0){
            return true;
        }else{
            return false;
        }

}

    function signupin($email, $pin1, $pin2, $pin3, $pin4){
        $conn = getConnection();
		$sql = "insert into admin (email, pin1, pin2, pin3, pin4 ) values ('$email', '$pin1', '$pin2', '$pin3', '$pin4')";
        if(mysqli_query($conn, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function deletetxt($id){
        $conn = getConnection();
		$query= "DELETE FROM contact_ad WHERE id ='$id'";
        if(mysqli_query($conn, $query)){
            return true;
        }else{
            return false;
        }
    }
    function removemoderator($id){
        $conn = getConnection();
		$query= "DELETE FROM moderator_list WHERE id ='$id'";
        if(mysqli_query($conn, $query)){
            return true;
        }else{
            return false;
        }
    }
    function deletepost($id){
        $conn = getConnection();
		$query= "DELETE FROM feed WHERE id ='$id'";
        if(mysqli_query($conn, $query)){
            return true;
        }else{
            return false;
        }
    }
    function denyreq($id){
        $conn = getConnection();
		$query= "DELETE FROM apply WHERE id ='$id'";
        if(mysqli_query($conn, $query)){
            return true;
        }else{
            return false;
        }
    }
    function banuser($id){
        $conn = getConnection();
		$query= "DELETE FROM users WHERE id ='$id'";
        if(mysqli_query($conn, $query)){
            return true;
        }else{
            return false;
        }
    }
    


?>


<?php
require_once("../model/db.php");
require_once("../model/adminModel.php");
if($_GET['submit'])
{
$id = $_GET['id'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$gender = $_GET['gender'];

$query= "UPDATE moderator_list SET id ='$id', name='$name', phone='$phone', email='$email', gender='$gender' WHERE id='$id'" ;
$data= mysqli_query($conn, $query);
if($data){
    echo "<script>alert('Post updated')</script>";
    header("refresh:1; URL=http://localhost/php/view/showmoderator.php");
}else{
    echo "Failed to edit";
}

}


?>
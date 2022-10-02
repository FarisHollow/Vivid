<?php 
require_once ("../model/db.php") ;
require_once ("../model/adminModel.php") ;


$id=$_GET['id'];

$delmod = deletepost($id);

// $data = mysqli_query($conn, $query);

if($delmod){

    echo "<script>alert('Post Deleted')</script>";
    header("refresh:1; URL=http://localhost/php/view/main.php");
}

else{
    echo "Can not Delete";
}

?>
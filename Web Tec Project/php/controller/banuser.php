<?php 
require_once ("../model/db.php") ;
require_once ("../model/adminModel.php") ;


$id=$_GET['id'];

// $query= "DELETE FROM contact WHERE id ='$id'";

$banuser = banuser($id);

// $data = mysqli_query($conn, $query);

if($banuser){

    echo "Banned from Vivid";
    header("refresh:1; URL=http://localhost/php/view/manageusers.php");

}
else{
    echo "Couldn't Ban";
}


?>
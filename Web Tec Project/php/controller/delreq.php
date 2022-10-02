<?php 
require_once ("../model/db.php") ;
require_once ("../model/adminModel.php") ;


$id=$_GET['id'];

$delmod = denyreq($id);

// $data = mysqli_query($conn, $query);

if($delmod){

    echo "Denied";
}
else{
    echo "Can not Deny";
}

?>
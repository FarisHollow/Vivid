<?php 
require_once ("../model/db.php") ;
require_once ("../model/adminModel.php") ;


$id=$_GET['id'];

// $query= "DELETE FROM contact WHERE id ='$id'";
$delete= deletetxt($id);
$delmod = removemoderator($id);

// $data = mysqli_query($conn, $query);

if($delete){

    echo "Message deleted";
}
else{
    echo "Couldn't delete";
}
if($delmod){

    echo "Removed from moderator";
}
else{
    echo "Can not remove";
}

?>
<?php 
require_once ("../model/db.php") ;
require_once ("../model/adminModel.php") ;


$id=$_GET['id'];

// $query= "DELETE FROM contact WHERE id ='$id'";
$delmod = removemoderator($id);

// $data = mysqli_query($conn, $query);

if($delmod){

    echo "Removed from moderator";
    header("refresh:1; URL=http://localhost/php/view/showmoderator.php");
}
else{
    echo "Can not remove";
}

?>
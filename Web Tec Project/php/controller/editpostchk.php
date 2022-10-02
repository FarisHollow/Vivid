<?php
require_once("../model/db.php");
require_once("../model/adminModel.php");
if($_GET['submit'])
{

    $text = $_GET['text'];
    $id = $_GET['id'];

    $query= "UPDATE feed SET text='$text' where id='$id'" ;
    $data= mysqli_query($conn, $query);
    if($data){
        echo "<script>alert('Post updated')</script>";
        header("refresh:1; URL=http://localhost/php/view/main.php");

    }else{
        echo "Failed to Edit";
    }

}



?>

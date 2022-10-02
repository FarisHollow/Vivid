<?php
require_once '../model/db.php';

$errors=[];
if(isset($_POST["submit"])){
  $type = $_POST['type'];
  $name = $_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $skill=$_POST['skill'];
  $nid=$_POST['nid'];
  $nationality=$_POST['nationality'];
 
// $pic_pro=$_POST['image'];
 
// $creditc=$_POST['card'];

// if(!$name){
//     $errors[]='Enter name ';
// }

// if(!$phone){
//     $errors[]='Enter phone number ';
// }
// if(!$quantity){
//     $errors[]='Enter quantity ';
// }
// if(!$email){
//     $errors[]='Enter email ';
// }
// if(!$name_pro){
//     $errors[]='Enter namee of product ';
// }
// if(!$amount){
//     $errors[]='Enter amount';
// }
// if(!$creditno){
//     $errors[]='Enter credit info ';
// }



if($_FILES["image"]["error"] == 4 || $name=="" || $phone=="" || $skill=="" || $email=="" || $nid=="" || $nationality=="" || $type=="" ){
    echo
    "Enter all the info"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      
        Image Size Is Too Large
      
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, '../asset/img/' . $newImageName);
      $query = "INSERT INTO apply(id, name, image, skill, email, phone, nid, nationality, type) VALUES( '','$name', '$newImageName', '$skill', '$email', '$phone', '$nid', '$nationality', '$type')";
      mysqli_query($conn, $query);
      echo
      "
      
        Successfully Applied;
        
    
      ";
      
      header("location: ../view/market.php");
    }
  }
}

?>
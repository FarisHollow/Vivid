<?php 

    $username = $_POST['lname'];
    $password = $_POST['lpass'];

    sleep(3);

    if($username != "" || $password != ""){
        echo "Success";
    }else{
        echo "Null value";
    }

?> 
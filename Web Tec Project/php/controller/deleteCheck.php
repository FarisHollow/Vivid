<?php 

    $delete = $_POST['delete'];

    sleep(2);

    if($delete != "" ){
        echo "Deleted post successfully";
        header("refresh:1; URL=http://localhost/php/view/main.php");

    }

?> 
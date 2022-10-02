<?php


require_once('../model/db.php');
require_once('../model/adminModel.php');

$sql = "SELECT * FROM users where email.$email.limit 1";

$result = mysqli_query($conn,$sql);
?>

<body>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
   
        <table border="1">
            <thead>
               
                <th> Name </th>
                <th> Phone Number</th>
                <th> Email</th>
                <th> Date of Birth</th>
                <th> Gender</th>
                
            </thead>
            <tbody>
        
    <?php if(mysqli_num_rows($result)>0): ?>
    
        

        
      <?php while($show=mysqli_fetch_assoc($result)): ?>
      <tr>

      <td><?php echo $show['user_name']  ?></td>
      <td><?php echo $show['phone']  ?></td>
      <td><?php echo $show['email']  ?></td>
      <td><?php echo $show['dob']  ?></td>
      <td><?php echo $show['gender']  ?></td>
      
     
      
      </td>

      </tr>
      <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
        </table>
    </body>
    </html>
</body>
</html>
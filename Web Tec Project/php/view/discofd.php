<?php
require_once('../model/db.php');
$sql = "SELECT * FROM users order by id desc";
$result = mysqli_query($conn,$sql);
?>

<body>
    <!DOCTYPE html>
    <html>
    <head>
        
        <title>People</title>
    </head>
    <body align="center" >
        <h2> People all around</h2>
    <div class=ssss>
        <table border="1" align="center" cellspacing= 5 cellpadding=10>
            <thead >
                <th> Name </th>
                <th> Gender </th>
                <th> Join date</th>
                
            </thead>
            <tbody>
        
    <?php if(mysqli_num_rows($result)>0): ?>
    
        

        
      <?php while($take=mysqli_fetch_assoc($result)): ?>
      <tr>
      <td><?php echo $take['user_name']  ?></td>
      <td><?php echo $take['gender']  ?></td>
      <td><?php echo $take['date']  ?></td>
      
      
     
      
      </td>

      </tr>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
        </table>
        <a href="main.php">Back</a>
    </body>
    </html>
</body>
</html>
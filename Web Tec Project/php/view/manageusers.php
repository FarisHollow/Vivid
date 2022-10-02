<?php
require_once('../model/db.php');
require_once('../model/adminModel.php');
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
                <th> Ban User</th>
                
            </thead>
            <tbody>
        
    

    
    <?php if(mysqli_num_rows($result)>0){
    
        

        
    while($take=mysqli_fetch_assoc($result))
    {
      echo "
          <tr>
    
             <td>".  $take['user_name'] . "</td>
             <td>".  $take['gender'] . "</td>
             <td>".  $take['date'] ." </td>
             <td><a href='../controller/banuser.php?id=$take[id]'><input type='submit' value='Ban'></td>
          </tr>
    ";
    }
  }
  else
  {
      echo "No Rec Found";
  }
  ?>
  </tbody>
        </table>
        <a href="adminP.php">Back</a>
    </body>
    </html>
</body>
</html>
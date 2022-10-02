<?php
require_once('../model/db.php');
$sql = "SELECT * FROM contact_ad order by id desc";
$result = mysqli_query($conn,$sql);
?>

<body>
    <!DOCTYPE html>
    <html>
    <head>
        
        <title>Messages</title>
        <link rel="stylesheet" href="../asset/style.css">

    </head>
    <body align="center" >
        <h2> My Messages</h2>

    <div class=rong>
        <table border="1" align="center" cellspacing= 5 cellpadding=10>
            <thead >
               
                <th> Messages </th>
                <th> Time</th>
                <th> Delete</th>
               
            </thead>
            
            <tbody>
        
            <?php if(mysqli_num_rows($result)>0){
    
        

        
    while($take=mysqli_fetch_assoc($result))
    {
      echo "
          <tr>
    
             <td>".  $take['Message'] . "</td>
             <td>".  $take['date'] ." </td>
             <td><a href='../controller/deladmincontact.php?id=$take[id]'>Delete</td>
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
        <a href="admincontact.php"><button>Back</button>
    </body>
    </html>
</body>
</html>
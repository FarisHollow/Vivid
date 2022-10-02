<?php
require_once '../model/db.php';
require_once '../model/adminModel.php';
?>
<!DOCTYPE html>
<html >
  <head>
  
    <title>All  Moderators</title>
  </head>
  <body align="center">
    <h3>All Moderators </h3><br> 
    <table border = 1 cellspacing = 5 cellpadding = 10 align="center">
      <tr>
        <td>ID</td>
        
        <td>Name</td>
     
        
        <td>Phone</td>
        <td>Email</td>
        <td>Gender</td>
        <td>Edit Info</td>
        <td>Remove from Moderator</td>
        
        
      </tr>
      <?php
      $i = 1;
      $result = mysqli_query($conn, "SELECT * FROM moderator_list  ORDER BY id DESC ");
      ?>

<?php if(mysqli_num_rows($result)>0){
    
        

        
    while($take=mysqli_fetch_assoc($result))
    {
      echo "
          <tr>
    
             <td>".  $take['id'] . "</td>
             <td>".  $take['name'] ." </td>
             <td>".  $take['phone'] ." </td>
             <td>".  $take['email'] ." </td>
             <td>".  $take['gender'] ." </td>
             <td><a href='../controller/editmoderator.php?id=$take[id] & nm=$take[name] & phn=$take[phone] & em=$take[email] & gn=$take[gender]'>Edit</td>
             <td><a href='../controller/delmoderator.php?id=$take[id]'>Remove</td>
          </tr>
    ";
    }
  }
  else
  {
      echo "No Rec Found";
  }
  ?>
    </table>
    <br>

   <button> <a href="adminP.php">Back</a></button>

    

    
  </body>
</html>

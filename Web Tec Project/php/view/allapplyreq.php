<?php
require '../model/db.php';
?>
<!DOCTYPE html>
<html >
  <head>
  
    <title>All  Requests</title>
  </head>
  <body align="center">
    <h3>Applied Requests</h3><br> 
    <table border = 1 cellspacing = 5 cellpadding = 10 align="center">
      <tr>
        <td>ID</td>
        <td>Picture</td>
        <td>Name</td>
        <td>Skills</td>
        <td>Nationality</td>
        <td>Email</td>
        <td>Phone</td>
        <td>Nid</td>
        <td>Application Type</td>
        <td>Application Date</td>
        
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM apply  ORDER BY id DESC ")
      ?>

      <?php foreach ($rows as $row) : ?>
      <tr>
        <td><?php echo $i++; ?></td>
       
        <td> <img src="../asset/img/<?php echo $row["image"]; ?>" width = 200 title="<?php echo $row['image']; ?>"> </td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["skill"]; ?></td>
        <td><?php echo $row["nationality"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["nid"]; ?></td>
        <td><?php echo $row["type"]; ?></td>
        <td><?php echo $row["date"]; ?></td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>

   <button> <a href="applyreq.php">Back</a></button>

    

    
  </body>
</html>

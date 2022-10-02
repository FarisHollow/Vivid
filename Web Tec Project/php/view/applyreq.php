<?php
require_once '../model/db.php';
require_once '../model/adminModel.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
    <title>Applied Requests</title>
  </head>
  <body align="center">
    <h2>Applied Request</h3><br> 
    <h3 id="head">Recent</h3>
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
        
        
      </tr>
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM apply  ORDER BY id DESC limit 1")
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
        
      </tr>
      <?php endforeach; ?>
    </table>
    <br>

    <a href="adminP.php">Back</a>

    <input type="button" id="accept" name="click" value="Accept" onclick="ajax()">
    <input type="button" id="deny" name="click" value="Deny" onclick="djax()">
  <a href="allapplyreq.php"  ><button>All Due Requests</button></a>
  <script>

function ajax(){
    let accept = document.getElementById('accept').value;
    
    let xhttp = new XMLHttpRequest();
        //xhttp.open('GET', 'userCheck.php?username='+username, true);
        xhttp.open('POST', '../controller/acceptCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('accept='+accept );
       

        //document.getElementById('head').innerHTML = xhttp.responseText;
        xhttp.onreadystatechange = function (){

            if(this.readyState == 4 && this.status == 200){
                //alert(this.responseText);
                document.getElementById('head').innerHTML = this.responseText;
            }
        } 
    }
function djax(){
    
    let deny = document.getElementById('deny').value;
    let xhttp = new XMLHttpRequest();
        //xhttp.open('GET', 'userCheck.php?username='+username, true);
        xhttp.open('POST', '../controller/denyCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send('deny='+deny );
       

        //document.getElementById('head').innerHTML = xhttp.responseText;
        xhttp.onreadystatechange = function (){

            if(this.readyState == 4 && this.status == 200){
                //alert(this.responseText);
                document.getElementById('head').innerHTML = this.responseText;
            }
        } 
}


</script>
    
  </body>
</html>

<?php 
	session_start();
	if(isset($_SESSION['status'])){

		require_once("../model/db.php");
	    require_once("../model/adminModel.php");
?>


<html>
    <head>
        <title>Admin Pin</title>
        <link rel="stylesheet" href="../asset/pin.css">
        <link rel="stylesheet" href="../asset/style.css">
    </head>
    <body align="center" class="backrong">
        <h1 id="head">Admin Pin Authentication</h1>
      
        <form  action="../controller/adminpininchk.php" method="POST">
            <div class="rong">
            <table align="center">
                <tr>
                    <td>
                        <label><strong>Email:</strong></label>
                        <input id="mail" type="email" name="email" placeholder="Enter email">
                        <br><br><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="pin-code">
                        <input type="number" name="a" maxlength="1" autofocus placeholder="0">
                        <input type="number" name="b" maxlength="1" placeholder="0">
                        <input type="number" name="c" maxlength="1" placeholder="0">
                        <input type="number" name="d" maxlength="1" placeholder="0">
                    </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submit" value="submit" >
                        <input type="button" name="click" value="Check Email State" onclick="ajax()">
                        
                        <br><br><br>
                    </td>
                </tr>

	      
            </table>
    </div>
            
            </form>

        <button><a href="adminpinup.html">Make your admin pin</button>
        <button><a href="main.php">Back to main menu</a></button>
      
    </body>
    <script>
        function ajax(){
            let email = document.getElementById('mail').value;
            
            let xhttp = new XMLHttpRequest();
                //xhttp.open('GET', 'userCheck.php?username='+username, true);
                xhttp.open('POST', '../controller/ajaxChk.php', true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send('mail='+email);

                //document.getElementById('head').innerHTML = xhttp.responseText;
                xhttp.onreadystatechange = function (){

                    if(this.readyState == 4 && this.status == 200){
                        //alert(this.responseText);
                        document.getElementById('head').innerHTML = this.responseText;
                    }
                } 
        }
    </script>
</html>
<?php 
	}else{
		echo "invalid request";
	}  
?>